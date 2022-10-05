using System;
using System.Collections.Generic;
using System.Text;

namespace ClassLibrary1
{
    public class Class1
    {
        float x = 0;
        public float suma(float a)
        {

            x = x + a;
            return x;
        }
        public float resta(float b)
        {
            if (x == 0)
            {
                x = b - x;
            }
            else {
                x = x - b;
            }
            return x;
        }
        public float multi(float a)
        {
            if (x == 0)
            {
                x = 1;
                x = a * x;
            }
            else {
                x = x * a;
            }           
            return x;
        }
        public float division(float a)
        {
            if (x == 0)
            {
                x = 1;
                x = a / x;
            }
            else
            {
                x = x / a;
            }
            return x;
        }

        public float getX()
        {
            return x;
        }
        public void setX(float g) {
            x = g;
        }
    }
}
