<!-- Estilos Generales -->
<style>
*{
    padding:0;
    margin:0;
    box-sizing:border-box;
}

ul {
    list-style: disc; /* Para viñetas redondas */
    color: black;
    /* Otra opción: list-style: square; para viñetas cuadradas */
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

.icon {
            width: 100px;
            transition: all 0.3s ease; /* Agrega una transición suave para un efecto más agradable */
        }

        .icon:hover {
            width: 110px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Agrega una sombra al pasar el ratón */
        }

header {
    width: 100%;
    height: 600px;
    
        background: #DA4453;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, hsla(317, 61%, 33%, 0.705), hsla(354, 67%, 56%, 0.705));
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, hsla(317, 61%, 33%, 0.705), hsla(354, 67%, 56%, 0.705)),            
            url(
                <?php
    switch ($pagina_actual) {

    case 'inicio': echo 'img/ins2.jpg';
    break;
    case 'catequesis': echo '../img/ins2.jpg';
    break;
    case 'grupos': echo '../img/ins2.jpg';
    break;
    case 'contacto': echo '../img/ins2.jpg';
    break;


    default:
        // Código que se ejecuta si ninguna de las condiciones anteriores se cumple
        break;
}
                ?>        
            
            );
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background-size: cover;
    background-attachment: fixed;
    position: relative;
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

/* ESTILOS DE TARJETAS Y OTROS DISEÑOS */
/*About us*/
.imagen-grupos {
    width: 100%;     
    height:auto;  
    border-radius: 40% 60% 61% 39% / 53% 50% 50% 47%;  
}

main .sobre-nosotros {
    padding: 0px 0 0 0;
}

.contenedor-sobre-nosotros {
    display: flex;
    justify-content: space-evenly;
}

.contenido-texto h3 {
    margin-bottom: 15px;
}

.contenido-texto h3 span {
    background: #4d0686;
    color: #fff;
    border-radius: 50%;
    display: inline-block;
    text-align: center;
    width: 30px;
    height: 30px;
    padding: 1px;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
    margin-right: 5px;
    font-size: 25px;
}

.contenido-texto p {
    padding: 0px 0px 30px 15px;
    font-weight: 300;
    text-align: justify;
}


/*Contendor de las tarjetas*/

.contenedor-tarjetas
{
    padding: 60px 0px 0px 0px;
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;    
    
}

.tarjeta
{
  padding: 0px 0px 30px 0px;
  
}

.card
{
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
}

.card-body
{
    text-align: center;
    align-items: center;
}

/*Sección de avisos*/

/*carrusel*/
.contenedor-carrusel-enlaces
{
    
    padding: 60px 0px 60px 0px;
}

/*Enlaces de descargas*/
.enlaces
{
    background: #8A2387;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, hsla(23, 89%, 54%, 0.63), hsla(352, 79%, 58%, 0.603));
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, hsla(23, 89%, 54%, 0.637), hsla(352, 79%, 58%, 0.603));
        padding-top: 10px;
        padding-bottom: 10px;
    align-items: center;
    text-align: center;
    border-radius: 5px;
           
}

.titulo-enlaces
{
        font-family: 'Lora', serif;
        font-size: 40px;  
        color: #fff;        
}

.contenedor-botones
{
        padding-top: 10px;
        padding-bottom: 10px;
}

.boton-enlaces
{
    align-items: center;
    text-decoration: none;
        /*No hay decoración en el texto*/
        border: none;
        /*No hay borde en el botón*/
        background-color:#878685;
        /*Color del botón VERDE*/
        text-align: center;
        /*El texto esta centrado sobre su respectiva linea*/ 
        font-size: 20px;
        /*Es el tamaño de las letras*/
        cursor: pointer;
        /*El cursor a usar será apuntador, la manita*/
        width: 350px;
            /*Anchura del botón*/
        height: 43px;         
        margin: 10px;
            /*Le da un espaciado*/
        border-radius: 5px;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
        color:white;
}

.boton-enlaces:hover
{
    background-color: #A09D9C;
    box-shadow: 0 0 0px 0 rgba(0, 0, 0, .5);
}

/*Parroco y vicario*/

.cards-parroco .card-parroco {
    background: #8A2387;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, hsla(23, 89%, 54%, 0.63), #e93f56d0),
            url(../img/ins2.jpg);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, hsla(23, 89%, 54%, 0.719), hsla(352, 79%, 58%, 0.788));

    display: flex;    
    border-radius: 5px;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.6);
    align-items: center;
    
    width: 90%;
        max-width: 1000px;
        margin: auto;
        overflow: hidden;
    margin-top: 20px;
}

.cards-parroco .card-parroco img {
    width:390px;
    height:390px;
    object-fit: cover;
    border: 5px solid #fff;
    border-radius: 1000%;    
    margin:10px;
    align-items: center;   
      
}

.contenido-texto-card {
    width: 100%;
    color: #fff;       
}

.name-p
{
text-align: center;
font-weight: 200;
}

.sub-name-p
{
color: white;
text-align: center;
padding-top: 15px;
padding-bottom: 0px;
}

/* DISEÑO DE BOTÓN Y FORMULARIO DE REGISTRO CATEQUESIS */
button
{
        text-decoration: none;
        /*No hay decoración en el texto*/
        border:none;
        border-radius: 100px;
        background: #DA4453;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #89216B, #DA4453);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #89216B, #DA4453);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        text-align: center;
        /*El texto esta centrado sobre su respectiva linea*/       
        cursor: pointer;
        /*El cursor a usar será apuntador, la manita*/
        width: 400px;
        /*Anchura del botón*/
        height:40px;        
        /*Le da un espaciado*/
        border-radius: 5px;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
        color: white;
        
       
}

button:hover
{
background: #DA4453;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, hsla(317, 61%, 33%, 0.863), hsla(354, 67%, 56%, 0.877));
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, hsla(317, 61%, 33%, 0.849), hsla(354, 67%, 56%, 0.87));
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.enlace-boton
{
    align-items: center;
    text-align: center;
    padding-top: 50px;    
    
}

section
{
    padding: 40px;
}

/*cambio de Backgound para secciones pares*/

.par
{
    background-color: hsla(15, 2%, 62%, 0.295);
}

/*Formulario*/
* {

margin: 0;
padding: 0;
box-sizing: border-box;

}

.form{
margin:5%;
align-items: center;
text-align: center;
}

.form h4 {
font-size: 60px;
margin-bottom: 20px;
text-align: center;
}

.controles {
width: 500px;
background: white;
padding: 10px;
border-radius: 4px;
margin-bottom: 15px;
border: 1px solid grey;
font-family: 'calibri';
font-size: 20px;
}

.form p {
height: 40px;
text-align: center;
font-size: 18px;
padding: 3%;
}

.form a {
color: white;
text-decoration: none;
}

.form a:hover {
color: white;
text-decoration: underline;
}

.form .botones {
width: 100%;
background: #16DE43;
border: none;
padding: 12px;
color: white;
margin: 16px 0;
font-size: 16px;

}

.form .botones:hover {
background: #149D33;
}

/* LÍNEA Y CONTENEDORES PARA LOS GRUPOS PARROQUIALES */

/*Línea*/

.hero {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 300px;
    font-size: 56px;    
    text-transform: uppercase;
    /*Hace que las letras sean mayusculas*/
    position: relative;
}

.container {
    /*Modifica todo*/
    width: 100%;
    max-width: 1100px;
    /*modifica el ancho de las fotos*/
    margin: 10px auto;
    display: flex;
    flex-direction: column;
    position: relative;
}

<?php 
if($pagina_actual=='grupos'){
echo'
.container::after {
    /*La linea*/
    content: "";
    width: 10px;
    height:95%;
    background: #DA4453;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to up, hsla(236, 53%, 37%, 0.705), hsla(354, 67%, 56%, 0.705));
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to down, hsla(317, 61%, 33%, 0.705), hsla(56, 67%, 56%, 0.466));
    position: absolute;
    top: 5%;    
    left: calc(50% - 1px);
    z-index: 1;    
}';
}
?>

.evento {
    display: flex;
    justify-content: space-between;
    margin-bottom: 200px;
    position: relative;
}

.evento::after {
    /*El círculo que esta en la linea*/
    content: "";
    display: block;
    width: 30px;
    height: 30px;
    border-radius: 100px;
    background: #DCDFD9;
    border: 2px solid #1b3231;
    position: absolute;
    z-index: 2;
    top: calc(50% - 9px);
    left: calc(50% - 9px);
}

.des_grupo {
    display: flex;
    align-items: center;
    justify-content: start;
    width: calc(45% + 20px);    
    font-weight: normal;
    flex-direction: column;
    margin-top: 5%;
}

.des_grupo h3 
{
font-size: 35px;
text-align: center;
}

.des_grupo p
{
text-align: center;
font-size: 25px;
}

.foto {
    /*Borde de las fotos*/
    width: 42%;
    border: 10px solid #fff;
    position: relative;
    box-shadow: 0px 0px 30px 0 rgba(0, 0, 0, .6);
    /*Sombra detras de la foto*/
}

.foto::after {
    /*El triangulo que esta al lado de las fotos*/
    content: "";
    display: block;
    border: 20px solid transparent;
    border-left: 20px solid #fff;
    position: absolute;
    right: -50px;
    top: calc(50% - 20px);
}

.foto img {
    width: 100%;
    vertical-align: top;
    /*hace que la imagen no se mueva del centro del marco*/
}

.evento:nth-child(even) {
    flex-direction: row-reverse;
    /*hace que el lo que esta adentro se coloque al reves*/
}

.evento:nth-child(even) .fecha {
    justify-content: end;
    /*hace que las fechas se justifiquen*/
}

.evento:nth-child(even) .foto::after {
    /*Este no se que hace*/
    content: "";
    border: 20px solid transparent;
    border-right: 20px solid #fff;
    right: initial;
    left: -50px;
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

<header>
                
    <nav>
        <a href="../index.php" style="<?php echo ($pagina_actual == 'inicio') ? 'display: none;' : ''; ?>">Inicio</a>
        <a href="catequesis.php" style="<?php echo ($pagina_actual == 'catequesis' || $pagina_actual == 'inicio') ? 'display: none;' : ''; ?>">Catequesis</a>
        <a href="grupos.php" style="<?php echo ($pagina_actual == 'grupos' || $pagina_actual == 'inicio') ? 'display: none;' : ''; ?>">Grupos Parroquiales</a>
        <a href="contacto.php" style="<?php echo ($pagina_actual == 'contacto' || $pagina_actual == 'inicio') ? 'display: none;' : ''; ?>">Contacto y Horarios</a>
    
        <?php
    if ($pagina_actual == 'inicio') {
    echo'
    
        <a href="intranet/catequesis.php">Catequesis</a>
        <a href="intranet/grupos.php">Grupos Parroquiales</a>
        <a href="intranet/contacto.php">Contacto y Horarios</a>
    ';

    }
     ?>
    
    </nav>



<!--     Menu para que se escojan las frases de cada página -->

<section class="textos-header" style="display: <?php echo ($pagina_actual == 'inicio') ? 'display' : 'none'; ?>;">
    <h1>¿Quién como Dios?</h1>
    <h2>Nadie como Dios</h2>
</section>

<section class="textos-header" style="display: <?php echo ($pagina_actual == 'catequesis') ? 'display' : 'none'; ?>;">
    <h1>Libres para liberar</h1>
    <h2>No hay mejor maestro que Jesús</h2>
</section>

<section class="textos-header" style="display: <?php echo ($pagina_actual == 'grupos') ? 'display' : 'none'; ?>;">
    <h1>Alabando y santificando</h1>
    <h2>Somos Comunidad</h2>
</section>

<section class="textos-header" style="display: <?php echo ($pagina_actual == 'contacto') ? 'display' : 'none'; ?>;">
    <h1>Comuniquen a todos el Evangelio</h1>
    <h2>Somos Sal y Luz del Mundo</h2>
</section>

    <!--Onda descargada de internet-->
    <div class="wave">
<!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->

<div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M-5.41,68.39 C148.08,144.18 275.05,95.96 510.95,57.57 L500.00,149.60 L-0.00,149.60 Z"
            style="stroke: none; fill:white;"></path>
    </svg></div>
</div>
