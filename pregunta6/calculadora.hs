import System.IO
main = do
    --x <- getLine
    --putStrLn (x)
    n <- getLine
    u <- getLine
    --let f = funcionADS 4 3
    --putStrLn (funcionADS (read n) (read u))
    --putStrLn (show (f))
    --putStrLn (show (funcionADS 4 5))
    let s = suma (read n) (read u)
    let r = resta (read n) (read u)
    let m = multiplicacion (read n) (read u)
    let d = division (read n) (read u)
    putStrLn ("La Suma es: "++show(s)++" La Resta es: "++show(r)++" La Multiplicacion: "++show(m)++" La Division es: "++show(d))

suma :: Float -> Float -> Float
suma u n = u + n

resta :: Float -> Float -> Float
resta u n = u - n

multiplicacion :: Float -> Float -> Float
multiplicacion u n = u * n

division :: Float -> Float -> Float
division u n = u / n