Module Module1

    Sub Main()
        Dim a, b, c As Integer
        Console.WriteLine("Introduzca dos numeros")
        a = Convert.ToInt32(Console.ReadLine())
        b = Convert.ToInt32(Console.ReadLine())
        c = a + b
        Console.WriteLine("la suma de ambos es:" + c.ToString())
        Dim calc As New ClassLibrary1.Class1
        Console.WriteLine("la suma de ambos es: " + calc.suma(a, b).ToString())
        Console.ReadKey()
    End Sub

End Module
