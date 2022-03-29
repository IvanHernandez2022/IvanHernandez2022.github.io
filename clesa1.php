<html>
    <head><title>Clesa</title></head>
    <link rel="shortcut icon" href="img\clesa_logo.png" type="imagen/x-icon">
    <link rel=stylesheet href=style\style2.css>
    <body>       
       <style>
          body{
    text-align: center;
    background-color: rgb(30, 150, 70);
    margin-top: 60px;
    margin-bottom: 60px;
}
          }

          form{
    width: 1200px;
    height: 1000px;
    padding:1px;
    border-radius: 10px;
    border-color:lightblue;
    border: outset;
    margin: center;
          }
       </style>

       <center> 
    <form action="energia1.php" method="post">
        <h1>Este script le ayudará a saber porqué<br> tiene que pagar esa cantidad de dinero<br> introduciendo lo
         que debe pagar y dandole los kw gastados.<p></h1>
        <h2>Cada kw en casa cuesta: $ 0.194<br>
        Cada kw en negocio cuesta: $ 0.178<p></h2>

       <p><h2>Cantidad de dinero: <input type=number step="any"name=k placeholder="No acepta letras"></h2></p>
       
       <select name="recibos">
       <p><h2><option value="kw" name=kw>Recibo de clesa casa
       <option value="kw1" name=kw1>Recibo de clesa negocio</h2>
       </select>

       <input type="submit" value="calcular"><p>
       <input  type=button value=Regresar onClick='history.go(-1);'><p>

       <h2>Nota:</h2>
       <input type=image name=imagen src="img\recicle.jpg" width=490 height=507><p> 
    </form>
       </center>  


    </body>
</html>