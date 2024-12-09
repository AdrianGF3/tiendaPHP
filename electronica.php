<?php
$products = [
    ["name" => "PORTATIL 1", "image" => "e5.PNG", "price" => 1000.25, "category" => "Portatiles", "availability" => "Out of Stock"],
    ["name" => "ORDENADOR 1", "image" => "e1.PNG", "price" => 1500, "category" => "Ordenadores", "availability" => "In Stock"],
    ["name" => "ORDENADOR 2", "image" => "e2.PNG", "price" => 3000, "category" => "Ordenadores", "availability" => "In Stock"],
    ["name" => "PORTATIL 2", "image" => "e4.PNG", "price" => 800, "category" => "Portatiles", "availability" => "In Stock"],
    ["name" => "TORRE", "image" => "e3.PNG", "price" => 499.99, "category" => "Torres", "availability" => "In Stock"],
    ["name" => "PORTATIL 3", "image" => "e6.PNG", "price" => 699.99, "category" => "Portatiles", "availability" => "Out of Stock"]
];

function discount_category($category) {
    $discounts = [
        'Portatiles' => 25 
    ];

    return $discounts[$category] ?? 0;
}

function apply_discount($price, $discount) {
    return $price * (1 - ($discount / 100));
}

?>

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
            z-index: 10;
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
        /*Titulo*/
        .tituloUno h1{
            text-align: center;
            font-size: 50px;
            font-weight: bold;
            color:rgb(0, 0, 0);
        }
        /*Estrellas*/
        #form {
            width: 250px;
            height: 50px;
        }
        #estrellitas{
            display: flex;
            margin-top: -75px;
            margin-bottom: 10px;
            margin-left: 40%;
            position: absolute;
        }
        #form label {
            font-size: 20px;
        } 
        input[type="radio"] {
            display: none;
        }
        label {
            color: rgb(255, 111, 0);
        }
        .clasificacion {
            direction: rtl;
            unicode-bidi: bidi-override;
        }
        /*Inicio texto animado*/
        .animated {    
            display: flex;
            justify-content: center;
            color: rgb(255, 0, 0);
            font-size: 30px;
            margin-bottom: -150px;
            padding: 0 2px;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }
        @-webkit-keyframes flash {
            0%, 50%, 100% {
            opacity: 1;
            }
        25%, 75% {
            opacity: 0;
            }
        }
        @keyframes flash {
            0%, 50%, 100% {
            opacity: 1;
            }
        25%, 75% {
            opacity: 0;
            }
        }
        .flash {
            -webkit-animation-name: flash;
            animation-name: flash;
        }
        /*Fin texto animado*/
        /*Productos*/
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 10% 5%;
        }
        .product {
            width: 350px;
            margin: 1%;
            border: 1px solid #ddd;
            padding: 80px;
            text-align: center;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 0;
        }
        .product:hover{
            border: solid 3px #FF0000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0);
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .price {
            font-size: 18px;
            font-weight: bold;
        }
        .discounted {
            text-decoration: line-through;
            color: red;
        }
        .category, .availability {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }
        .availability {
            color: green;
        }
        .availabilityN {
            color: red;
        }
        footer {
            background-color: #313131;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .discount-tag {
            font-size: 18px;
            color: #fff;
            background-color: red;
            padding: 1px 10px;
            margin-left: 10px;
            border-radius: 5px;
            font-weight: bold;
            position: inherit;
            text-decoration: none;
        }
        .especial{
            position: inherit;
            margin-left: -99%;
            margin-top: -46%;
        }
        .imagenesDescuento{
            margin-top: -100px;
        }
        .boton{
            text-decoration: none;
            text-decoration-line: none;
            color: black;
        }
        /*---FIN CUERPO---*/
        /*---INICIO FOOTER---*/
        footer{
            font-family:'Franklin Gothic Medium';            
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
        <div class="tituloUno">
            <h1>ELECTRONICA</h1>
        </div>
        <hr>
        <div class="animated flash">
            <h5>¡25% de descuento en Portatiles!</h5>
        </div>
        <br>
        <a class="boton" href="electronica.php">
            <div class="container">
                <?php
                    foreach ($products as $product) {
                    echo '<div class="product">';
                    echo '<div id="estrellitas">
                            <form>
                                <p class="clasificacion">
                                    <input id="radio1" type="radio" name="estrellas" value="5">
                                    <label for="radio1">★</label>
                                    <input id="radio2" type="radio" name="estrellas" value="4">
                                    <label for="radio2">★</label>
                                    <input id="radio3" type="radio" name="estrellas" value="3">
                                    <label for="radio3">★</label>
                                    <input id="radio4" type="radio" name="estrellas" value="2">
                                    <label for="radio4">★</label>
                                    <input id="radio5" type="radio" name="estrellas" value="1">
                                    <label for="radio5">★</label>
                                </p>
                            </form>
                        </div>';

                    $category_discount = discount_category($product['category']);

                    if ($category_discount > 0) {
                        echo '<img src="imagenes/especial.png" class="especial"></img>';
                    }

                    if ($category_discount > 0) {
                    echo '<img class="imagenesDescuento" src="imagenes/' . $product['image'] . '" alt="' . $product['name'] . '">';
                    }else{
                        echo '<img src="imagenes/' . $product['image'] . '" alt="' . $product['name'] . '">';
                    }
                            
                    echo '<h3>' . $product['name'] . '</h3>';

                    if ($category_discount > 0) {
                        $discounted_price = apply_discount($product['price'], $category_discount);
                        echo '<p class="price"><span class="discounted">' . number_format($product['price'], 2, ',', '') . '€</span><span class="discount-tag">-' . $category_discount . '%</span><br>';
                        echo 'Precio final: ' . number_format($discounted_price, 2, ',', '') . '€</p>';
                    } else {
                        echo '<p class="price">' . number_format($product['price'], 2, ',', '') . '€</p>';
                    }

                    echo '<p class="category">' . $product['category'] . '</p>';

                    if ($product['availability'] === 'In Stock') {
                        echo '<p class="availability">En Stock</p>';
                    } else {
                        echo '<p class="availabilityN">Fuera de Stock</p>';
                    }

                    echo '</div>';
                    }
                ?>
            </div>
        </a>
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