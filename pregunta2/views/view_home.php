<html>
    <head>
        <title>Pregunta 1</title>
	    <link href="estilo_ads2.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            .portada {
                display:grid;
                grid-template-columns:auto auto auto auto auto;
                grid-gap: 10px;
                grid-auto-rows: 250px 350px;

            }
            .uno {
                grid-column: 1 / 6;
                grid-row: 1/2;
                border: 4px solid #95B5FF;
                background-color: #DBF3FF;
                text-align: center;
                line-height: 100px;
            }
            .dos {
                grid-column: 2/ 3;
                grid-row: 2/ 3;
                border: 4px solid #95B5FF;
                background-color: #DBF3FF;
                text-align: center;
                line-height: 40px;
            }
            .tres {
                grid-column: 3/4;
                grid-row: 2 / 3;
                border: 4px solid #95B5FF;
                background-color: #DBF3FF;
                text-align: center;
                line-height: 40px;
            }
            .cuatro {
                grid-column: 4/5;
                grid-row: 2 / 3;
                border: 4px solid #95B5FF;
                background-color: #DBF3FF;
                text-align: center;
                line-height: 40px;
            }
            h2 {
                font-family: "Lucida Handwriting", "Brush Script MT", cursive;
                color:blue;
                font-size: 80px; 
            }
            h3 {
                font-family:Luminari, fantasy;
                color:blue;
                font-size: 40px; 
            }
            h4
            {
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                color:rgb(255, 128, 0);
                font-size: 20px; 
            }
             
        </style>
	    
    </head>
    <body>
        <div class="portada">
            <div class="uno"><h2>U.M.S.A</h2></div>
            <div class="dos"><h3>Matematica</h3>
                <a href="<?= base_url()?>LinkMat"><h4>Entrar</h4></a>
            </div>
            <div class="tres"><h3>Fisica</h3>
                <a href="<?= base_url()?>LinkFis"><h4>Entrar</h4></a>
            </div>
            <div class="cuatro"><h3>Informatica</h3>
                <a href="<?= base_url()?>LinkInfo"><h4>Entrar</h4></a>
            </div>
          </div>
    </body>
</html>