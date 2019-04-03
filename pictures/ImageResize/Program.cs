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


        static void Main(string[] args)
        {
            Resizer.MainDo();
            Debugger.Break();
        }


    }


}

