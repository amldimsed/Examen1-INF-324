<html>
    <head>
        <title>Informatica</title>
	    <link href="estilo_materia.css" rel="stylesheet" type="text/css"/>
	    <style type="text/css">
	        .portada {
                display:grid;
                grid-template-columns:auto auto auto auto;
                grid-gap: 10px;
                grid-auto-rows: 600px;

            }
            .uno {
                grid-column: 2 / 3;
                border: 4px solid #95B5FF;
                background-color: #DBF3FF;
                text-align: center;
                line-height: 40px;
            }
            .dos {
                grid-column: 3/ 4;
                border: 4px solid #95B5FF;
                background-color: #DBF3FF;
                text-align: center;
                line-height: 40px;
            }
            
            p {
                font-family: Arial, Helvetica, sans-serif;
                color:rgb(0, 0, 0);
                font-size: 20px; 
            }
            h3 {
                font-family:'Times New Roman', Times, serif;
                color:rgb(255, 122, 40);
                font-size: 30px; 
            }
            h4
            {
                font-family:Arial, Helvetica, sans-serif;
                color:rgb(93, 0, 255);
                font-size: 20px; 
            }

        </style>
    </head>
    <body>
        <div class="portada">
            
            <div class="uno"><h3>Log Cualquier Materia</h3>
                <form method="GET" action="rform.php">
                    Usuario<br>
                    <input type="text" value="" name="nombre"/><br>
                    Pasword<br>
                    <input type="text" value="" name="apellido"/><br><br>
                    <input type="submit" value="Enviar" name="ok"/>
                    
                
            </div>
            <div class="dos"><h3>Informatica</h3>
                <p>
                    La Carrera de Matematica es una Unidad Academica dependiente de la Facultad de Ciencias Puras y Naturales</br> 
                    (FCPN) de la Universidad Mayor de San Andres (UMSA), cuya misión principal es la formacion profesional en</br> 
                    Matematica a nivel superior y desarrollar la investigacion matematica dentro del Instituto de Investigación </br>
                    Matematica (IIMAT), donde se ejecutan proyectos en las diversas areas de la matematica como Algebra, </br>
                    Analisis, Geometria, Topologia, Optimizacion Matemática, Modelos Matemáticos, Analisis Numerico, Analisis </br>
                    Cuantitativo de Datos y en otras areas de aplicaciones matematicas como proyectos multidisciplinarios o </br>
                    transdisciplinarios. Tambien, en el marco de una de las misiones de una universidad publica, </br>
                    la Carrera de Matemática desarrolla Proyectos de Interacción Social como las Olimpiadas Matematicas,</br> 
                    Ferias de Matematica y Divulgacion Matematica mediante la organizacion de cursos o eventos cientificos  </br>
                    donde participan estudiantes, profesores de nivel escolar u otros profesionales interesados en la </br>
                    actualizacion de conocimientos en Matematica.</br>

                </p>
                
            </div>
          </div>
    </body>
</html>