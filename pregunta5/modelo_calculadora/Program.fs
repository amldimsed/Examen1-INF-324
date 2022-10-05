// Más información acerca de F# en http://fsharp.net
// Vea el proyecto "Tutorial de F#" para obtener más ayuda.
open System

module calculadora =
    
    let suma x y =x+y
    let resta x y =x-y
    let multi x y =
      let mutable s=0 
      for i in 1..y do
        s<-s+x
      s 
    let divi x y =x/y
    let multi2 x y=x*y


[<EntryPoint>]
let main argv = 
    Console.WriteLine("introduce un numero ")
    let a=Convert.ToInt32(Console.ReadLine())
    let b=Convert.ToInt32(Console.ReadLine())
    
    Console.WriteLine("la suma de ambos es "+(calculadora.suma a b).ToString())

    Console.WriteLine("la multiplicacion es "+ (calculadora.multi2 a b).ToString())

    Console.WriteLine("la resta es "+ (calculadora.resta a b).ToString())

    Console.WriteLine("la division es "+ (calculadora.divi a b).ToString())

    let tecla=Console.ReadKey()
    0 // devolver un código de salida entero