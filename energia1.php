<html>
    <head><title> Resultados Energía </title></head>
    <link rel="shortcut icon" href="img\clesa_logo.png" type="imagen/x-icon">
    <link rel=stylesheet href=style\style3.css>
       <body>
           <style>
body{
    text-align: center;
    background-color: rgb(30, 150, 70);
    margin-top: 60px;
}

h2{
    font-size: 30px;
    color: rgb(255, 255, 255);
}
            </style>
           <center>
           <h1>Los resultados son los siguientes: </h1>
           <?php

                $kwcasa=0.194; //Esta variable almacena el precio de kw en un hogar
                $kwneg=0.178; //Esta variable almacena el precio de kw en un negocio
                $iva=0.13; //Esta variable almacena el precio del iva
                $alc=3.68; //Esta variable almacena el impuesto de la alcaldia
                $ivacas=$kwcasa*$iva; //Esta variable almacena el iva de los kw en un hogar
                $ivaneg=$kwneg*$iva; //Esta variable almacena el iva de los kw en un negocio
                $totcas=$ivacas+$kwcasa; //Esta variable almacena el precio total de los kw en un hogar y su iva
                $totneg=$ivaneg+$kwneg; //Esta variable almacena el precio total de los kw en un negocio y su iva
                $kw=$_POST["k"]-$alc; //Esta variable almacena el dinero ingresado menos el impuesto de la alcaldia

                switch($_POST["recibos"]){
                    case ($_POST["recibos"] == "kw"):
                        echo "<h2>Ha ingresado $";echo $_POST["k"]; echo " que equivale a: </br>";
                        echo "Resultado: Ha gastado "; echo $kw / $totcas; echo " kw en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "kw1"):
                        echo "<h2>Ha ingresado $";echo $_POST["k"]; echo " que equivale a: </br>";
                        echo "Resultado: Ha gastado "; echo $kw / $totneg; echo " kw en su negocio en el mes.</h2></p>"; 
             }

           ?>

            <form action=clesa.php method=post>
            <input  type=button value=Regresar1 onClick='history.go(-1);'>
            <input  type=button value=Regresar2 onClick='history.go(-2);'><p>
            </center>
            </form>
            <p><input type=image name=imagen src="img\clesa_logo.png" width=500 height=400></p>
       </body>
</html>