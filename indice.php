<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda.php</title>
    <style>
        *{
        box-sizing: border-box;
        }
        /*---INICIO BARRA DE NAVEGACIÓN---*/
        header{
            margin-top: -8px;
            z-index: index;
            position: fixed;
            display: flex;
            height: 100px;
            width: 100%;
            justify-content: space-between;
            background-color: #272426;
            font-family:'Franklin Gothic Medium';
        }
        /*Enlaces*/
        #webs{
            display: flex;
            align-items: center; 
            margin: 30px;
        }
        #webs img{
            display: flex;
            align-items: center; 
            margin: 5px;
        }
        /*Logo*/
        #logoPrincipal{
            display: flex;
            align-items: center; 
            margin-top: 7px;
        }
        #logoPrincipal img{
            display: flex;
            align-items: center;
            width: 90px;
            height: 90px; 
        }
        /*Desplegable*/
        #menu{
            font-size: 15px;
            display: flex;
            align-items: center; 
            margin: 30px;
        }
        #menu ul {
            font-size: 15px;
            list-style:none;
            margin: 0%;
            padding:0;
            justify-content: space-around;
        }
        #menu ul li {
            font-size: 15px;
            background-color:#272426;
        }
        #menu ul a {
            display:flex;
            color:#fff;
            text-decoration:none;
            font-weight:400;
            font-size:25px;
            padding:10px;
            text-transform:uppercase;
            letter-spacing:1px;
        }
        #menu ul li {
            font-size: 15px;
            position:relative;
            float:left;
            margin:0;
            padding:0;
        }
        #menu ul li:hover {
            background:#000000;
        }
        #menu ul ul {
            font-size: 15px;
            display:none;
            position:absolute;
            top:100%;
            left:0;
            background:#eee;
            padding:0;
        }
        #menu ul ul li {
            font-weight: bold;
            font-size: 15px;
            float:none;
            width:300px;
        }
        #menu ul ul a {
            font-weight: bold;
            font-size: 15px;
            line-height:120%;
            padding:10px 15px;
        }
        #menu ul li:hover > ul {
            display:block;
        }
        /*---FIN BARRA DE NAVEGACIÓN---*/
        /*---INICIO CUERPO---*/
        main{
            padding-top: 100px;
            width: 100%;
            height: 100%;
            text-align: left;
            justify-content: center;  
            box-sizing: border-box;  
        }
        body{
            font-family:'Franklin Gothic Medium';
        }
        .estructura{
            justify-content: center;
            margin: 100px;
        }
        /*Contenido*/
        #cosas{
            display: flex;
            background-color: white;
            height: 40rem;
        }
        .containerUno{
            align-content: end;
            width: 74%;
            display: flex;
        }
        .electronica{
            width: 60%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background-image: linear-gradient(65.99deg, #000 0, transparent 99.04%), url(imagenes/electronica.jpg);
            background-position: bottom;
            background-size: cover;
        }
        .ropa{
            width: 40%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background-image: linear-gradient(65.99deg, #000 0, transparent 99.04%), url(imagenes/ropa.jpeg);
            background-position: center;
        }
        .containerDos{
            width: 25%;
            display: flex;
            flex-direction: column;
        }
        .jugetes{
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background-image: linear-gradient(65.99deg, #000 0, transparent 99.04%), url(imagenes/jugetes.jpg);
            background-position: center;
            height: 50%;
        }
        .hogar{
            width: 100%;
            height: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background-image: linear-gradient(65.99deg, #000 0, transparent 99.04%), url(imagenes/hogar.PNG);
            background-position: top;
        }
        .electronica, .ropa, .jugetes, .hogar{
            display: flex;
            flex-direction: column;
            justify-content: end;
            margin: 5px;
            background-size: cover;
            text-decoration-line: none;
        }
        .electronica p, .ropa p, .jugetes p, .hogar p{
            color: white;
            font-size: 20px;
            width: 90%;
            margin: 0 auto;
            margin-bottom: 10px;
        }
        .electronica p:first-child, .ropa p:first-child, .jugetes p:first-child, .hogar p:first-child{
            color: white;
            font-size: 10px; 
        }
        #titulosDOS{
            display: flex;
            justify-content: space-between;
            color: rgb(0, 0, 0);
            font-size: 30px;
            margin-top: -100px;
            margin-bottom: 10px;
            padding: 0 5px;
        }
        #titulosDOS a{
            text-decoration: none;
            color: rgb(0, 0, 0);
        }
        .oferta{
            text-decoration: none;
            color: red;
            width: 25%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .oferta img{
            width: 75px;
            height: 45px;
        }
        .electronica:hover, .ropa:hover, .jugetes:hover, .hogar:hover{
            border: solid 3px #FF0000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0);
        }
        .electronica p:hover, .ropa p:hover, .jugetes p:hover, .hogar p:hover{
            color: red;
        }
        /*---FIN CUERPO---*/
        /*---INICIO FOOTER---*/
        footer{
            font-family:'Franklin Gothic Medium';
            margin-top: 100px;            
            background-color: #272426;
            color: white;
            padding: 10px;
        }
        .foterTotal{
            margin-top: 2px;
            margin-bottom: 2px;
            margin-left: 50px;
            margin-right: 50px;
        }
        .foterTotal p{
            font-size: 15px;
            text-align: center;
        }
        /*---FIN FOOTER---*/
    </style>
</head>
<body>
    <header class="Encabezado">
        <nav id="menu">
            <ul>
                <li><a href="#">Categorias</a>
                    <ul>
                        <li><a href="electronica.php">Electrónica</a></li>
                        <li><a href="ropa.php">Ropa</a></li>
                        <li><a href="jugetes.php">Jugetes</a></li>
                        <li><a href="hogar.php">Hogar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
            <a href="indice.php">
                <div id="logoPrincipal">
                    <img src="imagenes/logo.png" alt="">
                </div>
            </a>
            <div id="webs">
                <a href="https://www.instagram.com/"><img src="imagenes/Instagram_logo.png" alt="" width="25px" height="25px"></a>
                <a href="https://twitter.com/"><img src="imagenes/X.png" alt="" width="25px" height="25px"></a>
                <a href="https://www.facebook.com/"><img src="imagenes/Facebook.png" alt="" width="30px" height="30px"></a>
            </div>
    </header>
    <main>
        <section class="estructura">
            <div id="titulosDOS">
                <h2>NUESTROS PRODUCTOS</h2>
            </div>
            <article id="cosas">
                <div class="containerUno">
                    <a href="electronica.php" class="electronica"><p>Electrónica</p><p>¡Lo mejor en electrónica y al mejor precio!</p></a>
                    <a href="ropa.php" class="ropa"><p>Ropa</p><p>¡Todas las tallas, todos los colores y de la mejor confección!</p></a>
                </div>
                <div class="containerDos">
                    <a href="jugetes.php" class="jugetes"><p>Jugetes</p><p>¡Lo mejor para los peques y para los más grandes!</p></a>
                    <a href="hogar.php" class="hogar"><p>Hogar</p><p>¡Como en casa en ninguna parte!</p></a>
                </div>
            </article>
        </section>
    </main>
    <footer>
        <div class="foterTotal">
            <div>
                <p>La mejor tienda.php</p>
            </div>
            <hr>                    
            <div class="loDeMas">                        
                <div><p>| &copy; Tienda.php</p></div>
            </div>
        </div>
    </footer> 
</body>
</html>