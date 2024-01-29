<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Página Principal</title>

    <?php 
     $pagina_actual= 'inicio';
     include_once "general_styles/estilos.php";
   ?>


</header>

 </head>

    <main>

<section class="contenedor-tarjetas">        
<div class="container">
    <div class="row">
<h2 class="titulo">Nuestras Catequesis</h2>
    </div>
    <div class="row">

        <div class="col-md-3">                           
                    <div class="tarjeta">
                        <div class="card">
                            <img src="img/catequesis/especial/foto1.png" alt="">
                            <div class="card-body">
                                <h4 class="card-tittle">Catesismo Especial</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, assumenda?</p>
                                <a href="intranet/catequesis.html#c1" class="btn btn-primary">Informes</a>
                            </div>
                        </div>                                                
                </div>
        </div>

        <div class="col-md-3">
            <div class="tarjeta">
                <div class="card">
                    <img src="img/catequesis/catecumenado/foto1.png" alt="">
                    <div class="card-body">
                        <h4 class="card-tittle">Catecumenado</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, assumenda?</p>
                        <a href="intranet/catequesis.html#c2" class="btn btn-primary">Informes</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="tarjeta">
                <div class="card">
                    <img src="img/catequesis/comunion/foto1.png" alt="">
                    <div class="card-body">
                        <h4 class="card-tittle">Primera Comunión</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, assumenda?</p>
                        <a href="intranet/catequesis.html#c3" class="btn btn-primary">Informes</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="tarjeta">
                <div class="card">
                    <img src="img/catequesis/confirmacion/foto1.png" alt="">
                    <div class="card-body">
                        <h4 class="card-tittle">Confirmación</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, assumenda?</p>
                        <a href="intranet/catequesis.html#c4" class="btn btn-primary">Informes</a>
                    </div>
                </div>
            </div>
        </div>                
            
    </div>
</div>
        </section>

<section class="contenedor-carrusel-enlaces">
    <div class="container">
        <div class="row">
            <h2 class="titulo">Avisos de Interes General</h2>
        </div>
        <div class="row">
         
<div class="col-md-8">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" >
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/catequesis/comunion/foto1.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/catequesis/especial/foto1.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/catequesis/confirmacion/foto1.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        
    </a>
</div>
</div>

<div class="col-md-4">
    <div class="enlaces">
        <span class="titulo-enlaces">Enlaces y Descargables</span>
        <br>
        <div class="contenedor-botones">
        <a href="https://www.vatican.va/archive/catechism_sp/index_sp.html" ><button class="boton-enlaces">Descargable 1</button></a>
        <br>
        <a href="#"><button class="boton-enlaces">Descargable 2</button></a>
        <br>
        <a href="#"><button class="boton-enlaces">Descargable 3</button></a>
        <br>
        <a href="#"><button class="boton-enlaces">Descargable 4</button></a>
        <br>
        <a href="#"><button class="boton-enlaces">Descargable 5</button></a>
        <br>
        <a href="#"><button class="boton-enlaces">Descargable 6</button></a>
        <br>
    </div>
</div>

        </div>
    </div>



</div>
</section>

        <section class="sobre-nosotros">
            <h2 class="titulo">Únete a nuestros Grupos Parroquiales</h2>
            <div class="contenedor-sobre-nosotros">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="img/grupos/escuela_pastoral.png" class="imagen-grupos">
                        </div>                        
                    
                        <div class="col-md-6">
                                            <div class="contenido-texto">
                                                <h3><span>1</span>La mejor atención</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt beatae corporis fuga assumenda
                                                    aliquam maiores, esse excepturi laboriosam veritatis obcaecati reprehenderit voluptas hic eaque, earum dicta
                                                    placeat. Odio, cupiditate.</p>
                                            
                                                <h3><span>1</span>Guiados por Expertos</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt beatae corporis fuga assumenda
                                                    aliquam
                                                    maiores, esse excepturi laboriosam veritatis obcaecati reprehenderit voluptas hic eaque, earum dicta placeat.
                                                    Odio,
                                                    cupiditate.</p>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>           
               
            </div>
        </section>


        <section class="parroco-vicario contenedor">
            <h2 class="titulo">Nuestros Párroco y Vicario</h2>

<div class="cards-parroco">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card-parroco">
                    <img src="img/parroco/parroco.png" alt="" class="img-fluid">
                    <p class="descrip-p">
                        Como vicario parroquial, apoyo al párroco bajo la autoridad del obispo diocesano. Mi labor es enseñar, guiar espiritualmente y asistir a la comunidad para contribuir a su bienestar espiritual y material.</p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card-parroco">
                    <div class="contenido-texto-card">
                        <h3 class="sub-name-p">PÁRROCO</h3>
                        <h4 class="name-p">Pbro. Doctor René Carrera Sanchez</h4>                        
                        <ul class="descrip-ul">
                            <li>Estudio en</li>
                            <li>Colaboró con</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="cards-parroco">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card-parroco">
                    <img src="img/parroco/vicario.png" alt="" class="img-fluid">
                    <p class="descrip-p">
                        Como vicario parroquial, apoyo al párroco bajo la autoridad del obispo diocesano. Mi labor es enseñar, guiar espiritualmente y asistir a la comunidad para contribuir a su bienestar espiritual y material.</p>
                   </div>
                </div>
            <div class="col-md-7">
                <div class="card-parroco">
                    <div class="contenido-texto-card">
                        <h3 class="sub-name-p">VICARIO</h3>
                        <h4 class="name-p">Pbro. Juan José Godinez Gomez</h4>                        
                        <ul class="descrip-ul">
                            <li>Formado en el Seminario Diocesano Guadalupano de Cuautitlán </li>
                            <li>Ordenado Diácono el 4 de diciembre del 2020 por S. E. R Obispo D. Guillermo Ortiz Mondragón</li>
                            <li>Ordenado Presbítero el 18 de noviembre del 2021 por S. E. R. Arzobispo José Antonio Fernández Hurtado</li>
                            <li>Nombrado Vicario Parroquial en San Francisco de Asís, Apaxco el 18 de noviembre de 2021</li>
                            <li>Nombrado Vicario Parroquial en San Miguel Arcángel Melchor Ocampo el primero de noviembre de 2022</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            
        </section>

        


        <!--<section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros Servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/ilus1.png" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, libero?</p>
                    </div>

                    <div class="servicio-ind">
                        <img src="img/ilus2.png" alt="">
                        <h3>Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, libero?</p>
                    </div>

                </div>
            </div>
        </section>-->
    </main>

<?php 
include_once "general_styles/footer.php";
?>


</body>
</html>