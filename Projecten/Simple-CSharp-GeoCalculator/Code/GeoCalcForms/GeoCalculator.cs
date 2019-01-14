using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace GeoCalcForms
{
    public static class GeoCalculator
    {
        public static class Surface
        {
            public static double Rectangle(int a, int b)
            {
                return a * b;
            }

            public static double Triangle(int a, int b)
            {
                return a * b / 2;
            }

            public static double Circle(int d)
            {
                return Math.PI * (d / 2);
            }
        }

        public static class Circumference
        {
            public static double Rectangle(int a, int b)
            {
                return a * 2 + b * 2;
            }

            public static double Triangle(int a, int b, int c)
            {
                return a + b + c;
            }

            public static double Circle(int d)
            {
                return Math.PI * d;
            }
        }

    }
}
