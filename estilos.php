 
<!-- Estilos Generales -->
<style>
*{
    padding:0;
    margin:0;
    box-sizing:border-box;
}

body{
font-family: 'Lora', serif;
}

.contenedor{
    padding: 60px; /*Establece el área de relleno en los cuatro lados de un elemento a la vez*/    
}

.titulo{
    color:black;
    font-size:45px;
    text-align: center;
    margin-bottom: 60px;
}

/*Header*/
header{
    width: 100%;
    height: 600px;
    background: #8A2387;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, hsla(23, 89%, 54%, 0.800), hsla(352, 79%, 58%, 0.603)),
            url(img/ins2.jpg);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, hsla(23, 89%, 54%, 0.800), hsla(352, 79%, 58%, 0.603)),url(../img/ins2.jpg);/*Aquí esta el enlace de la imagen de fondo*/
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background-size: cover;
        background-attachment: fixed;
        position:relative;
}

nav{
    text-align: right;
    padding: 30px 50px 0 0;
}

nav > a{
    color:aliceblue;
    font-weight: 300; /*Hará la letra más ligera*/
    text-decoration: none; /*Le quita el subrayado*/
    margin-right: 15px; /*Le da un espaciado*/
    text-align: center;
    justify-content: center;
    font-size: 150%;
        
}

nav>a:hover {   
    text-decoration: underline;
    /*Si el cursor esta encima de los enlaces se subrayan*/
    }

.wave{
    position: absolute;
    bottom: -1%; /*Indica que tan pegado esta el objeto del contenedor*/
    width: 100%;    
}

header .textos-header{
    display:flex;
    height: 430px; /*Altura a la que queda el texto*/
    width: 100%;
    align-items: left; /*Organiza al texto en el eje x*/
    justify-content:center ; /*Organiza el texto en el eje y*/
    flex-direction: column; /*Permite a los renglones ponerse unos debajo de otros*/
    text-align: center;

}

.textos-header h1{
    font-family: 'Lora',serif;
    font-size: 50px;
    color:white;
    }

.textos-header h2{
    font-family: 'Lora', serif;
    font-size: 30px;
    font-weight: 300; /*Anchura de la fuente*/
    color:white;
}
</style>



<!--SECCIÓN DEL ENCABEZADO PARA TODAS LAS PÁGINAS-->

    <link rel="shortcut icon" href="img/ilustracion1.png" type="image/x-icon">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

 <!--CDN jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        
 
 <!--BOOTSTRAP-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



<body>

<!--BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>


   <!--  Pie de página -->

<footer>
    <style>
        footer {
    background: #414141;
    padding: 60px 0 30px 0;
    margin: auto;
    overflow: hidden;
}

.contenedor-footer {
    display: flex;
    width: 90%;
    justify-content: space-evenly;
    margin: auto;
    padding-bottom: 50px;
    border-bottom: 1px solid #ccc;
}

.content-foo {
    text-align: center;
}

.content-foo h4 {
    color: #fff;
    border-bottom: 3px solid #af20d3;
    padding-bottom: 5px;
    margin-bottom: 10px;
}

.content-foo p {
    color: #ccc;
}

.titulo-final {
    text-align: center;
    font-size: 24px;
    margin: 20px 0 0 0;
    color: #9e9797;
}

@media screen and (max-width:900px) {
    header {
        background-position: center;
    }}
    </style>
</footer>