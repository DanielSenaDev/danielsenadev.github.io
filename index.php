<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Primeiro site em PHP! Olá Mundo!</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

        <style type="text/css">
            .linha {
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }
        </style>
        <script>
            $( function() {
                $( "#accordion" ).accordion();
            } );
        </script>
    </head>

    <body>
        <div id="accordion">
            <h3>Seção 1</h3>
            <div>
                <p>Acesse a página de Daniel Sena aqui:</p>
                <p><a href="danielsena\index.html" target="_blank" rel="noopener noreferrer">Daniel Sena Página</a></p>
            </div>
            <h3>Seção 2</h3>
            <div>
                <p>Aqui estamos na seção 2</p>
            </div>
            <h3>Seção 3</h3>
            <div>
                <p>Por fim, alcançamos a seção 3</p>
            </div>
        </div>

        <?php
            for ($i = 0; $i < 10 ; $i++) {
                print  ("<span class=\"linha\">Linha número ".$i.".</span><br/>");
            }
        ?>

        
    </body>

    <script type="text/javascript">
        $(document).ready(function() {
            alert("Olá mundo! Seja bem vind@!");
        });
    </script>
    
</html>