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

                $tp=1; //Esta variable almacena una cantidad de m3
                $tp1=2; //Esta variable almacena una cantidad de m3
                $tp2=3; //Esta variable almacena una cantidad de m3
                $tp3=4; //Esta variable almacena una cantidad de m3
                $tp4=5; //Esta variable almacena una cantidad de m3
                $tp5=6; //Esta variable almacena una cantidad de m3
                $tp6=7; //Esta variable almacena una cantidad de m3
                $tp7=8; //Esta variable almacena una cantidad de m3
                $tp8=9; //Esta variable almacena una cantidad de m3
                $tp9=10; //Esta variable almacena una cantidad de m3
                $tp10=11; //Esta variable almacena una cantidad de m3
                $tp11=12; //Esta variable almacena una cantidad de m3
                $tp12=13; //Esta variable almacena una cantidad de m3
                $tp13=14; //Esta variable almacena una cantidad de m3
                $tp14=15; //Esta variable almacena una cantidad de m3
                $tp15=16; //Esta variable almacena una cantidad de m3
                $tp16=17; //Esta variable almacena una cantidad de m3
                $tp17=18; //Esta variable almacena una cantidad de m3
                $tp18=19; //Esta variable almacena una cantidad de m3
                $tp19=20; //Esta variable almacena una cantidad de m3
                $tp20=21; //Esta variable almacena una cantidad de m3
                $tp21=22; //Esta variable almacena una cantidad de m3
                $tp22=23; //Esta variable almacena una cantidad de m3
                $tp23=24; //Esta variable almacena una cantidad de m3
                $tp24=25; //Esta variable almacena una cantidad de m3
                $tp25=26; //Esta variable almacena una cantidad de m3
                $tp26=27; //Esta variable almacena una cantidad de m3
                $tp27=28; //Esta variable almacena una cantidad de m3
                $tp28=29; //Esta variable almacena una cantidad de m3
                $tp29=30; //Esta variable almacena una cantidad de m3
                $tp30=31; //Esta variable almacena una cantidad de m3
                $tp31=32; //Esta variable almacena una cantidad de m3
                $tp32=33; //Esta variable almacena una cantidad de m3
                $tp33=34; //Esta variable almacena una cantidad de m3
                $tp34=35; //Esta variable almacena una cantidad de m3
                $tp35=36; //Esta variable almacena una cantidad de m3
                $tp36=37; //Esta variable almacena una cantidad de m3
                $tp37=38; //Esta variable almacena una cantidad de m3
                $tp38=39; //Esta variable almacena una cantidad de m3
                $tp39=40; //Esta variable almacena una cantidad de m3


                switch($_POST["recibos"]){
                    case ($_POST["recibos"] == "cm"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm1"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap  + $ta; echo " por sus m3 de agua  gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm2"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm3"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm4"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm5"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm6"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm7"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm8"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm9"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tap  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm10"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp10 * $tap1  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm11"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp11 * $tap1  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm12"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp12 * $tap1  + $ta; echo " por sus m3 de agua  gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm13"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp13 * $tap1  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm14"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp14 * $tap1  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm15"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp15 * $tap1  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm16"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp16 * $tap1  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm17"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp17 * $tap1  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm18"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp18 * $tap1  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm19"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp19 * $tap1  + $ta; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm20"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp20 * $tap2  + $ta1; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm21"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp21 * $tap3  + $ta1; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm22"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp22 * $tap4  + $ta1; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm23"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp23 * $tap5  + $ta1; echo " por sus m3 de agua  gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm24"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp24 * $tap6  + $ta1; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm25"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp25 * $tap6  + $ta1; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm26"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp26 * $tap6  + $ta1; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm27"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp27 * $tap6  + $ta1; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm28"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp28 * $tap6  + $ta1; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm29"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp29 * $tap6  + $ta1; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm30"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp30 * $tap7  + $ta2; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm31"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp31 * $tap8  + $ta2; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm32"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp32 * $tap9  + $ta2; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm33"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp33 * $tap10  + $ta2; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm34"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp34 * $tap11  + $ta2; echo " por sus m3 de agua  gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm35"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp35 * $tap11  + $ta2; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm36"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp36 * $tap11  + $ta2; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm37"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp37 * $tap11  + $ta2; echo " por sus m3 de agua gastados en su hogar</h2>.</p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm38"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp38 * $tap11  + $ta2; echo " por sus m3 de agua gastados en su hogar.</h2></p>"; 
                    break; 
                    case ($_POST["recibos"] == "cm39"):
                        echo "<h2>Sus m3 que equivalen a: </br>";
                        echo "Resultado: $"; echo $tp39 * $tap11  + $ta2; echo " por sus m3 de agua gastados en su negocio.</h2></p>"; 
             }

           ?>
                <form action=anda.php method=post>
         <input  type=button value=Regresar1 onClick='history.go(-1);'>
         <input  type=button value=Regresar2 onClick='history.go(-2);'><p>
     </form>
     <p><input type=image name=imagen src="img\logo-nuevo_ANDA.png" width=500 height=400></p>
       </body>
</html>