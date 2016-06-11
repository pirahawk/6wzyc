using System.Diagnostics;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;
using System.Drawing;
using System.Drawing.Drawing2D;
using System.Drawing.Imaging;
using System;
using System.Collections.Generic;

namespace ImageResize
{


    public class Old
    {
        const string imgSourceDir = @"S:\6wzyc\all-pictures\CBB_tkarbharis-mbp.lan\CBB_VOLUMES\Official Congress Photos & Videos\1 - ONLINE Final Photos";
        const string imgDestDir = @"S:\6wzyc\pictures-transformed";
        const string imgFileExtension = "*.jpg";

        const string fullImage = "full";
        const string previewImage = "preview";
        const string thumbnailImage = "thumb";


        static async Task ConvertImages()
        {
            var dirs = new Dictionary<string, string>
            {
                { @"Day 1\", @"day-1"},
                { @"Day 2\", @"day-2"},
                { @"Day 3\", @"day-3"},
                { @"Day 4\", @"day-4"},
                { @"Day 5\", @"day-5"},
                { @"Day 6\", @"day-6"},
            };

            var results = (await Task.WhenAll(dirs.Select(kvp => GetConversionMap(kvp.Key, kvp.Value))).ConfigureAwait(false))
                .SelectMany(arr => arr)
                .ToArray();

            await Task.WhenAll(results.Select(CopyImage));
            Debugger.Break();
        }

        static async Task CopyImage(ImageMetaData imgData)
        {
            //File.Copy(imgData.OriginalPath, imgData.FullSizePath);
            //CreateImageCopy(imgData.OriginalPath, imgData.PreviewPath, previewImage);
            //CreateImageCopy(imgData.OriginalPath, imgData.ThumbnailPath, thumbnailImage);

            //await Task.WhenAll(
            //    CreateImageCopy(imgData.OriginalPath, imgData.PreviewPath, previewImage),
            //    CreateImageCopy(imgData.OriginalPath, imgData.ThumbnailPath, thumbnailImage));
        }

        //static async Task CreateImageCopy(string originalPath, string copyPath, string imageType)
        static void CreateImageCopy(string originalPath, string copyPath, string imageType)
        {

            //await Task.Yield();
            using (var imgToCopy = Image.FromFile(originalPath))
            {
                var width = imgToCopy.Width;
                var height = imgToCopy.Height;
                var quality = 80L;
                var isLandscape = width > height;
                var previewWidth = isLandscape ? 640 : 427;
                var previewHeight = isLandscape ? 427 : 640;
                var thumbWidth = isLandscape ? 120 : 80;
                var thumbHeight = isLandscape ? 80 : 120;

                var copyWidth = imageType == previewImage ? previewWidth : thumbWidth;
                var copyHeight = imageType == previewImage ? previewHeight : thumbHeight;

                using (var newImage = new Bitmap(copyWidth, copyHeight))
                {
                    using (var graphics = Graphics.FromImage(newImage))
                    {
                        //Resize the image
                        graphics.SmoothingMode = SmoothingMode.AntiAlias;
                        graphics.InterpolationMode = InterpolationMode.HighQualityBicubic;
                        graphics.PixelOffsetMode = PixelOffsetMode.HighQuality;
                        graphics.DrawImage(imgToCopy, new Rectangle(0, 0, copyWidth, copyHeight));

                        var qualityParam = System.Drawing.Imaging.Encoder.Quality;
                        var jpgEncoder = ImageCodecInfo.GetImageDecoders().First(enc => enc.FormatID == ImageFormat.Jpeg.Guid);
                        var parameters = new EncoderParameters(1);
                        parameters.Param[0] = new EncoderParameter(qualityParam, quality);
                        newImage.Save(copyPath, jpgEncoder, parameters);
                    }
                }
            }
        }

        static async Task<IEnumerable<ImageMetaData>> GetConversionMap(string sourceFolder, string destinationFolder)
        {
            await Task.Yield();

            var currentSearchPath = Path.Combine(imgSourceDir, sourceFolder);
            if (!Directory.Exists(currentSearchPath))
            {
                return Enumerable.Empty<ImageMetaData>();
            }

            var fullSizePath = Path.Combine(imgDestDir, fullImage, destinationFolder);
            var previewPath = Path.Combine(imgDestDir, previewImage, destinationFolder);
            var thumbnailPath = Path.Combine(imgDestDir, thumbnailImage, destinationFolder);

            if (!Directory.Exists(fullSizePath)) Directory.CreateDirectory(fullSizePath);
            if (!Directory.Exists(previewPath)) Directory.CreateDirectory(previewPath);
            if (!Directory.Exists(thumbnailPath)) Directory.CreateDirectory(thumbnailPath);

            return Directory
                .GetFiles(currentSearchPath, imgFileExtension, SearchOption.AllDirectories)
                .Select(filePath =>
                {
                    var id = Guid.NewGuid();
                    var fileName = $"{id}.jpg";
                    return new ImageMetaData(filePath, imgDestDir, destinationFolder);
                }).ToArray();
        }

        public class ImageMetaData
        {
            public Guid Id { get; set; }
            public string FullSizePath { get; set; }
            public string FileName { get; set; }
            public string OriginalPath { get; set; }
            public string PreviewPath { get; set; }
            public string ThumbnailPath { get; set; }
            public string DestinationFolder { get; set; }

            public ImageMetaData(string originalFilePath, string imageDestDir, string destinationFolder)
            {
                Id = Guid.NewGuid();
                FileName = $"{Id}.jpg";
                DestinationFolder = destinationFolder;
                OriginalPath = originalFilePath;
                FullSizePath = Path.Combine(imageDestDir, "full", destinationFolder, FileName);
                PreviewPath = Path.Combine(imageDestDir, "preview", destinationFolder, FileName);
                ThumbnailPath = Path.Combine(imageDestDir, "thumb", destinationFolder, FileName);
            }
        }
    }

    
}

