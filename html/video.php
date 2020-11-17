<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumería VAMA</title>
   
	<!--Estilo para escritorio-->
    <link href="../css/desktop.css" rel="stylesheet" type="text/css" media="only screen and (min-width:1025px)" />

    <!--Estilo para tablets-->
    <link href="../css/tablet.css" rel="stylesheet" type="text/css" media="only screen and (min-width:768px) and (max-width:1024px)" />

    <!--Estilo para moviles-->
    <link href="../css/movil.css" rel="stylesheet" type="text/css" media="only screen and (min-width:280px) and (max-width:767px)" />
</head>
<body>
    <header>
        <img src="../img/header.jpg" id="header">
    </header>

    <h1>
        <img id="h1" src="../img/titulo.png">
    </h1>

    <nav>

        <ul>
            <li><a href="../index.php" class="botones"><img src="../img/inicio.png" class="iconos"></a></li>
            <li><a href="lociones.php" class="botones"><img src="../img/lociones.png" class="iconos"></a></li>
            <li><a href="video.php" class="botones"><img src="../img/video.png" class="iconos"></a></li>
            <li><a href="acerca.php" class="botones"><img src="../img/acerca.png" class="iconos"></a></li>
            
        </ul>
    
    </nav>

    <section>
        <div id="caja9">

            <h2 class="titulos">Perfumería VAMA</h2>
            <p class="proyecto"> Promoción Perfumería VAMA</p>
            <p class="description1">
               Video promocional de perfumes ofrecidos por 
               Perfumería VAMA 
            </p>
            
            <div class="video">
                <video controls>
                    <source src="../video/vama.MP4" type="video/mp4">
                    <source src="../video/vama.ogv" type="video/ogv">
                    <source src="../video/vama.webm" type="video/webm">    

                </video>
            </div>   
        </div>     
    </section>

    <footer>
        <img id="footer" src="../img/footer.png" >
     </footer>
</body>
</html>