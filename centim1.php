<html>
    <head><title> Resultados M3 </title></head>
    <link rel="shortcut icon" href="img\logo-nuevo_ANDA.png" type="imagen/x-icon">
    <link rel=stylesheet href=style\style5.css>
    <style>
body{
    text-align: center;
    background-color: rgb(101, 143, 207);
    margin-top: 60px;
}

h1{
    font-size: 30px;
    color: black;
}

h2{
    font-size: 27px;
    color: black;
}

input{
    font-size: 25px;
    background-color: aquamarine;
    color: blue;
}
</style>
       <body> 
           <h1>Los resultados son los siguientes: </h1>
           <?php

                $ta=0.10; //Esta variable almacena la tarifa de alcantarillado de 0 a 20 m3
                $ta1=1.80; //Esta variable almacena la tarifa de alcantarillado de 21 a 30 m3
                $ta2=3.00; //Esta variable almacena la tarifa de alcantarillado de 31 a 40 m3

                $tap=2.29; //Esta variable almacena la tarifa de acueducto de 0 a 10 m3
                $tap1=0.210; //Esta variable almacena la tarifa de acueducto de 11 a 20 m3
                $tap2=0.250; //Esta variable almacena la tarifa de acueducto de 21 m3
                $tap3=0.280; //Esta variable almacena la tarifa de acueducto de 22 m3
                $tap4=0.310; //Esta variable almacena la tarifa de acueducto de 23 m3
                $tap5=0.340; //Esta variable almacena la tarifa de acueducto de 24 m3
                $tap6=0.370; //Esta variable almacena la tarifa de acueducto de 25 a 30 m3
                $tap7=0.420; //Esta variable almacena la tarifa de acueducto de 31 m3
                $tap8=0.480; //Esta variable almacena la tarifa de acueducto de 32 m3
                $tap9=0.540; //Esta variable almacena la tarifa de acueducto de 33 m3
                $tap10=0.640; //Esta variable almacena la tarifa de acueducto de 34 m3
                $tap11=0.760; //Esta variable almacena la tarifa de acueducto de 35 a 40 m3

                $tp=2.39; //Esta variable almacena una cantidad de dinero
                $tp1=2.41; //Esta variable almacena una cantidad de dinero
                $tp2=2.62; //Esta variable almacena una cantidad de dinero
                $tp3=2.83; //Esta variable almacena una cantidad de dinero
                $tp4=3.04; //Esta variable almacena una cantidad de dinero
                $tp5=3.25; //Esta variable almacena una cantidad de dinero
                $tp6=3.46; //Esta variable almacena una cantidad de dinero
                $tp7=3.67; //Esta variable almacena una cantidad de dinero
                $tp8=3.88; //Esta variable almacena una cantidad de dinero
                $tp9=4.09; //Esta variable almacena una cantidad de dinero
                $tp10=4.30; //Esta variable almacena una cantidad de dinero
                $tp11=7.05; //Esta variable almacena una cantidad de dinero
                $tp12=7.96; //Esta variable almacena una cantidad de dinero
                $tp13=8.93; //Esta variable almacena una cantidad de dinero
                $tp14=9.96; //Esta variable almacena una cantidad de dinero
                $tp15=11.05; //Esta variable almacena una cantidad de dinero
                $tp16=11.42; //Esta variable almacena una cantidad de dinero
                $tp17=11.79; //Esta variable almacena una cantidad de dinero
                $tp18=12.16; //Esta variable almacena una cantidad de dinero
                $tp19=12.53; //Esta variable almacena una cantidad de dinero
                $tp20=12.90; //Esta variable almacena una cantidad de dinero
                $tp21=16.02; //Esta variable almacena una cantidad de dinero
                $tp22=18.36; //Esta variable almacena una cantidad de dinero
                $tp23=20.82; //Esta variable almacena una cantidad de dinero
                $tp24=24.76; //Esta variable almacena una cantidad de dinero
                $tp25=29.60; //Esta variable almacena una cantidad de dinero
                $tp26=30.36; //Esta variable almacena una cantidad de dinero
                $tp27=31.12; //Esta variable almacena una cantidad de dinero
                $tp28=31.88; //Esta variable almacena una cantidad de dinero
                $tp29=32.64; //Esta variable almacena una cantidad de dinero
                $tp30=33.40; //Esta variable almacena una cantidad de dinero

                $d=$tp1-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d1=$tp2-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d2=$tp3-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d3=$tp4-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d4=$tp5-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d5=$tp6-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d6=$tp7-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d7=$tp8-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d8=$tp9-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d9=$tp10-$ta;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d10=$tp11-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d11=$tp12-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d12=$tp13-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d13=$tp14-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d14=$tp15-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d15=$tp16-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d16=$tp17-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d17=$tp18-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d18=$tp19-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d19=$tp20-$ta1;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d20=$tp21-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d21=$tp22-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d22=$tp23-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d23=$tp24-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d24=$tp25-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d25=$tp26-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d26=$tp27-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d27=$tp28-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d28=$tp29-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado
                $d29=$tp30-$ta2;  //Esta variable almacena la cantidad de dinero menos la tarifa de alcantarillado

                switch($_POST["recibos"]){
                    case ($_POST["recibos"] == "cm"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado de 0 a 10 m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm1"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm2"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d1 / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm3"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d2 / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm4"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d3 / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm5"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d4 / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm6"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d5 / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm7"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d6 / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm8"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d7 / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm9"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d8 / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm10"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d9 / $tap1; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm11"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d10 / $tap2; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm12"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d11 / $tap3; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm13"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d12 / $tap4; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm14"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d13 / $tap5; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm15"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d14 / $tap6; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm16"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d15 / $tap6; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm17"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d16 / $tap6; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm18"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d17 / $tap6; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm19"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d18 / $tap6; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm20"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d19 / $tap6; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm21"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d20 / $tap7; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm22"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d21 / $tap8; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm23"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d22 / $tap9; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm24"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d23 / $tap10; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm25"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d24 / $tap11; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm26"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d25 / $tap11; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    case ($_POST["recibos"] == "cm27"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d26 / $tap11; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm28"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d27 / $tap11; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm29"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d28 / $tap11; echo " m3 de agua en su hogar en el mes.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm30"):
                        echo "<h2>Lo que pagará equivale a que: </br>";
                        echo "Ha gastado "; echo $d29 / $tap11; echo " m3 de agua en su hogar en el mes.</h2></p>";
                    break; 
                    }

           ?>
                <form action=anda.php method=post>
         <input  type=button value=Regresar1 onClick='history.go(-1);'>
         <input  type=button value=Regresar2 onClick='history.go(-2);'><p>
                </form>
     <p><input type=image name=imagen src="img\logo-nuevo_ANDA.png" width=500 height=400></p>
       </body>
</html>