<!DOCTYPE html>
<!--
Diana Delgado
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Tarea Venta Equipos</title>
    </head>
    <body class=>
            
        <br>
        <a href="!#">Inicio</a>
        <a href="index.php">Index</a>
        <a href="ejemplos_jquery.php">jQuery</a>
        <a href="tarea_venta_ipod.php">Tarea Venta</a>
        <br>
         
        <div class="jumbotron-fluid" class="row">
            <h2 class="display-4">VENTA ARTICULOS</h2>
        </div>
        <section>
            <div class="col-auto" class="row">
                Tipo  de Reproductor:
             <select id="ddltiporeproductor">
                <option value="1">Ipod</option>
                <option value="2">MP3</option>
                <option value="3">MP4</option>
             </select>
            </div>
            <div class="col-auto" class="row">
                Valor:
                <label class="number" id="nbrvalor" readonly="true">
            </div>
            <div class="col-auto" class="row">
                Cantidad:
                <input class="number" id="nbrcantidad">
            </div>
            <div class="col-auto" class="row">
                Recargo:
                <input type="radio" name="radrecargo"class="number" value="5%" id="nbrrecargo1">5%
                <input type="radio" name="radrecargo" class="number" value="10%" id="nbrrecargo2">10%
            </div>
            <div class="col-auto" class="row">
                Subtotal:
                <input class="number" id="nbrsubtotal"readonly="true">
            </div>
            <div class="col-auto" class="row">
                Total Recargo:
                <input class="number" id="nbrtotalrecargo"readonly="true">
            </div>
            <div class="col-auto" class="row">
                Total Neto:
                <input class="number" id="nbrtotalneto"readonly="true">
            </div>
            <div class="col-auto" class="row">
                <input type="button" value="Calcular" class="btncalcular" id="btncalcular">
            </div>
        </section>
            <?php
        // put your code here
        ?>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>      
            <script type="text/javascript">
            
            $(#"btncalcular").click(function(){
            var ipod= document.getElementById(ddltiporeproductor);
            var mp3= document.getElementById(ddltiporeproductor);
            var mp4= document.getElementById(ddltiporeproductor);
            
            if (ddltiporeproductor.selected.value'1'){ipod=600000;}
            });
            </script>
    </body>
</html>
