using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using ClassLibrary1;

namespace interfaz
{
    public partial class Form1 : Form
    {
        string t = "";
        float b = 0;
        float c = 0;
        int seleccion = 0;
        int sw = 0;
        

        Class1 ads = new Class1();
        public Form1()
        {
            InitializeComponent();
            

        }
        public float igual() {

            switch (seleccion)
            {
                case 1:
                    c = ads.suma(b);
                    break;
                case 2:
                    c = ads.resta(b);
                    break;
                case 3:
                    c = ads.multi(b);
                    break;
                case 4:
                    c = ads.division(b);
                    break;
                default:
                    c=0;
                    break;
            }

           
            return c;
        
        
        }
        public void button1_Click(object sender, EventArgs e)
        {
            
            string h = "1";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
            sw = 0;






            //Console.WriteLine("Introduzca dos numeros");
            //a = Convert.ToInt32(Console.ReadLine());
            //b = Convert.ToInt32(Console.ReadLine());
            //c = a + b;
            // a = int.Parse(texto1.Text);
            //b = int.Parse(texto2.Text);
            //Console.WriteLine("la suma de ambos es:" + c.ToString());
            //Class1 ads = new Class1();
            //Dim calc As New ClassLibrary1.Class1;
            //Console.WriteLine("la suma de ambos es: " + ads.suma(a, b).ToString());
            //textBox1.Text = ads.suma(a, b).ToString();


        }

       

        private void button11_Click(object sender, EventArgs e)
        {

            b = this.igual();
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
           
            ads.setX(0);
            //c = 0;
            t = "";

        }

        private void button2_Click(object sender, EventArgs e)
        {
            string h = "2";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
            sw = 0;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            string h = "3";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
            sw = 0;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            string h = "4";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
            sw = 0;
        }

        private void button5_Click(object sender, EventArgs e)
        {
            string h = "5";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
            sw = 0;
        }

        private void button6_Click(object sender, EventArgs e)
        {
            string h = "6";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
            sw = 0;
        }

        private void button7_Click(object sender, EventArgs e)
        {
            string h = "7";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
        }

        private void button8_Click(object sender, EventArgs e)
        {
            string h = "8";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
            sw = 0;
        }

        private void button9_Click(object sender, EventArgs e)
        {
            string h = "9";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
            sw = 0;
        }

        private void button10_Click(object sender, EventArgs e)
        {
            string h = "0";
            t = t + h;
            b = float.Parse(t);
            textBox1.Text = string.Empty;
            textBox1.Text = b.ToString();
            sw = 0;

        }

        private void button12_Click(object sender, EventArgs e)
        {
            if (sw==0) {
                if (seleccion != 0)
                {
                    c = this.igual();
                    seleccion = 1;
                }
                else
                {
                    seleccion = 1;
                    c = this.igual();
                }
                t = "";  
                textBox1.Text = c.ToString();
                sw = 1;
            }
        }

        private void button13_Click(object sender, EventArgs e)
        {
            if (sw == 0)
            {
                if (seleccion != 0)
                {
                    c = this.igual();
                    seleccion = 2;
                }
                else
                {
                    seleccion = 2;
                    c = this.igual();
                }
                t = "";
                textBox1.Text = c.ToString();
                sw = 1;
            }
        }

        private void button14_Click(object sender, EventArgs e)
        {
            if (sw == 0)
            {
                if (seleccion != 0)
                {
                    c = this.igual();
                    seleccion = 3;
                }
                else {
                    seleccion = 3;
                    c = this.igual();
                }
                    
                t = "";
                textBox1.Text = c.ToString();
                sw = 1;
            }
        }

        private void button15_Click(object sender, EventArgs e)
        {

            if (sw == 0)
            {
                if (seleccion!=0) {
                    c = this.igual();
                    seleccion = 4;
                }
                else {
                    seleccion = 4;
                    c = this.igual();
                }
                t = "";
                textBox1.Text = c.ToString();
                sw = 1;
               
            }
           
        }
    }
}
