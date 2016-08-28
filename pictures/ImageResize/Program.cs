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
using Newtonsoft.Json;

namespace ImageResize
{
    class Program
    {
        const string filePath = @"C:\Users\piran\Downloads\thumbnail";

        static void Main(string[] args) {
            var folders = new List<string> {
                @"day-1",
                @"day-2",
                @"day-3",
                @"day-4",
                @"day-5",
                @"day-6"
            };
            var allFolders = folders.Select(f => GetAllFilesInFolder(f)).ToArray();
            var json = JsonConvert.SerializeObject(allFolders);
            Debugger.Break();
        }

        private static PicFolder GetAllFilesInFolder(string folder)
        {
            var path = Path.Combine(filePath, folder);
            if (!Directory.Exists(path))
            {
                throw new Exception($"Directory '{path}' does not exist");
            }
            //const string imgFileExtension = "*.jpg";
            var files = Directory.GetFiles(path, "*.jpg").Select(Path.GetFileNameWithoutExtension);
            return new PicFolder {
                Folder = folder,
                Files = files
            };
        }
    }

    public class PicFolder
    {
        public string Folder { get; set; }
        public IEnumerable<string> Files { get; set; }
    }
}

