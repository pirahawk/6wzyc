using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;
using System.Drawing;
using System.Drawing.Drawing2D;
using System.Drawing.Imaging;

namespace ImageResize
{
    class Resizer
    {
        const string imgSourceDir = @"C:\Users\piran\Downloads\image-fixup";
        
        //const string imgDestDir = @"C:\Users\piran\Downloads\image-regen\preview";

        const string imgDestDir = @"C:\Users\piran\Downloads\image-regen\thumbnail";

        const string imgFileExtension = "*.jpg";
        static object encoderLock = new object();

        public static void MainDo()
        {
            Task.WaitAll(ConvertImages());
        }

        static async Task ConvertImages()
        {
            var folders = new List<string> {
                @"day-1",
                @"day-2",
                @"day-3",
                @"day-4",
                @"day-5",
                @"day-6"
            };

            //Test
            //var testImg = Guid.Parse("13911e38-af31-48eb-a39d-b5e695124351");
            var allFiles = folders
                .Select(folder => ExtractImageMetaData(folder))
                .SelectMany(img => img)
                //.Where(f => f.Id == testImg)
                .ToArray();


            //var numFiles = allFiles.Count();

            //var allFiles = new []
            //{
            //    new ImageData
            //    {
            //        Id = new Guid("05f67c97-306d-4884-b1da-08c64658fc45"),
            //        DestinationPath = @"C:\Users\piran\Downloads\image-test\result\05f67c97-306d-4884-b1da-08c64658fc45.jpg",
            //        FileName = @"05f67c97-306d-4884-b1da-08c64658fc45.jpg",
            //        SourcePath = @"C:\Users\piran\Downloads\image-test\05f67c97-306d-4884-b1da-08c64658fc45.jpg",
            //    }, 
            //};

            const long quality = 100L;
            var qualityParam = System.Drawing.Imaging.Encoder.Quality;
            var jpgEncoder = ImageCodecInfo.GetImageDecoders().First(enc => enc.FormatID == ImageFormat.Jpeg.Guid);
            var parameters = new EncoderParameters(1);
            parameters.Param[0] = new EncoderParameter(qualityParam, quality);

            await Task.WhenAll(allFiles
                //.Take(100)
                .Select(file => CopyImage(file, jpgEncoder, parameters)));
            Debugger.Break();
        }



        static async Task CopyImage(ImageData imageData, ImageCodecInfo jpgEncoder, EncoderParameters parameters)
        {
            //await Task.Yield();


            using (var originalImage = Bitmap.FromFile(imageData.SourcePath))
            {
                //originalImage.PropertyItems.Where(pi => pi.)



                var width = originalImage.Width;
                var height = originalImage.Height;
                var isLandscape = width > height;

                //if (width == 1880 && height == 2816) //ignore shots from vending machine for a second
                //{
                //    Console.WriteLine($"skipping copy for image {imageData.SourcePath}");
                //    return;
                //}

                //var destinationWidth = isLandscape ? 640 : 427; //preview
                //var destinationHeight = isLandscape ? 427 : 640; //preview

                var destinationWidth = isLandscape ? 320 : 214; //preview
                var destinationHeight = isLandscape ? 214 : 320; //preview

                using (var ms = new MemoryStream())
                {
                    using (var newImage = new Bitmap(destinationWidth, destinationHeight))
                    {
                        using (var graphics = Graphics.FromImage(newImage))
                        {
                            //Resize the image
                            graphics.SmoothingMode = SmoothingMode.AntiAlias;
                            graphics.InterpolationMode = InterpolationMode.HighQualityBicubic;
                            graphics.PixelOffsetMode = PixelOffsetMode.HighQuality;
                            graphics.DrawImage(originalImage, new Rectangle(0, 0, destinationWidth, destinationHeight));


                            //const long quality = 80L;
                            //var qualityParam = System.Drawing.Imaging.Encoder.Quality;
                            //var jpgEncoder = ImageCodecInfo.GetImageDecoders().First(enc => enc.FormatID == ImageFormat.Jpeg.Guid);
                            //var parameters = new EncoderParameters(1);
                            //parameters.Param[0] = new EncoderParameter(qualityParam, quality);

                            //newImage.Save(imageData.DestinationPath, jpgEncoder, parameters);

                            //Copy exif properties otherwise the images may rotate wierdly
                            foreach (var item in originalImage.PropertyItems)
                            {
                                newImage.SetPropertyItem(item);
                            }
                            newImage.Save(ms, jpgEncoder, parameters);

                            //Write the File out
                            ms.Position = 0;
                            using (var fs = new FileStream(imageData.DestinationPath, FileMode.Create))
                            {
                                await ms.CopyToAsync(fs);
                            }
                        }
                    }
                }
            }
        }

        private static IEnumerable<ImageData> ExtractImageMetaData(string folder)
        {
            var currentSearchPath = Path.Combine(imgSourceDir, folder);
            var destinationPath = Path.Combine(imgDestDir, folder);
            if (!Directory.Exists(currentSearchPath))
            {
                return Enumerable.Empty<ImageData>();
            }

            if (!Directory.Exists(destinationPath))
            {
                Directory.CreateDirectory(destinationPath);
            }

            return Directory
                .GetFiles(currentSearchPath, imgFileExtension, SearchOption.TopDirectoryOnly)
                .Select(filePath =>
                new ImageData
                {
                    Id = Guid.Parse(Path.GetFileNameWithoutExtension(filePath)),
                    FileName = Path.GetFileName(filePath),
                    SourcePath = filePath,
                    DestinationPath = Path.Combine(destinationPath, Path.GetFileName(filePath))
                });
        }
    }

    public class ImageData
    {
        public string DestinationPath { get; internal set; }
        public string FileName { get; internal set; }
        public Guid Id { get; set; }
        public string SourcePath { get; internal set; }
    }
}
