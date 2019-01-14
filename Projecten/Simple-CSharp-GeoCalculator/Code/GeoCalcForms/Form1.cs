using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace GeoCalcForms
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btn_Rec_Click(object sender, EventArgs e)
        {
            int a = Int32.Parse(txt_Rec_Length.Text);
            int b = Int32.Parse(txt_Rec_Width.Text);

            string Cir_Answer = Convert.ToString(GeoCalculator.Circumference.Rectangle(a, b));
            string Sur_Answer = Convert.ToString(GeoCalculator.Surface.Rectangle(a, b));

            lbl_Rec_Circum_Ans.Text = Cir_Answer;
            lbl_Rec_Sur_Ans.Text = Sur_Answer;
        }

        private void btn_Tri_Click(object sender, EventArgs e)
        {
            int a = Int32.Parse(txt_Tri_Length.Text);
            int b = Int32.Parse(txt_Tri_Width.Text);
            

            if(txt_Tri_Height.Text != "")
            {
                int c = Int32.Parse(txt_Tri_Height.Text);

                string Cir_Answer = Convert.ToString(GeoCalculator.Circumference.Triangle(a, b, c));

                lbl_Tri_Circum_Ans.Text = Cir_Answer;
            }

            
            string Sur_Answer = Convert.ToString(GeoCalculator.Surface.Triangle(a, b));

            
            lbl_Tri_Sur_Ans.Text = Sur_Answer;
        }

        private void btn_Cir_Click(object sender, EventArgs e)
        {
            int d = Int32.Parse(txt_Cir_Dia.Text);

            string Cir_Answer = Convert.ToString(GeoCalculator.Circumference.Circle(d));
            string Sur_Answer = Convert.ToString(GeoCalculator.Surface.Circle(d));

            lbl_Cir_Circum_Ans.Text = Cir_Answer;
            lbl_Cir_Sur_Ans.Text = Sur_Answer;

        }
    }
}
