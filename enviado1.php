<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Conocenos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

</head>

<body>

<?php 
$myemail = 'contacto@socios.red';
$name = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$orgempresa = $_POST['orgempresa'];
$motivo_de_consulta = $_POST['motivo_de_consulta'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $motivo_de_consulta";
$email_body = "Haz recibido un nuevo mensaje. \r\n Nombre: $name \r\n Correo: $email \r\n Telefono: $telefono \r\n Organización Empresa: $orgempresa \r\n Mensaje: \r\n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);

?>
    <section class="container-fluid pad_inl_0 overflow-hidden">



        <!--comienza header--------------------------->

        <header class="center_r pad_inl_2 pad_block_1">
            <a class="logo_header" href="index.html"><img src="img/logo_redu.png" alt="logo_socios.red"></a>


            <nav class="menu_1">
                <ul class="mar_0">
                    <li>
                        <a href="index.html">Inicio</a> </li>
                    <li>
                        <a href="conocenos.html" class="active">Conocenos</a> </li>
                    <li>
                        <a href="colabora.html">Colabora</a> </li>
                    <li>
                        <a href="#footer">Contacto</a> </li>
                </ul>
            </nav>

            <div class="full-menu">
                <nav id="menu" class="menu">
                    <ul>
                        <li>
                            <a href="index.html">Inicio</a> </li>
                        <li>
                            <a href="conocenos.html" class="activo">Conocenos</a> </li>
                        <li>
                            <a href="colabora.html">Colabora</a> </li>
                        <li>
                            <a class="menu_contacto" href="#footer">Contacto</a> </li>
                    </ul>
                </nav>
            </div>

            <div class="hamburguer">
                <div class="lines line-top"></div>
                <div class="lines line-mid"></div>
                <div class="lines line-bottom"></div>
            </div>
        </header>

        <!--termina header---------------------------->



        <!--comienza nosotros------------------------->

        <section id="nosotros" class="center_r pad_block_10">
            <div class="sombra_top"></div>
            <div class="sombra_bottom"></div>
            <div id="particles-js"></div>
            <article id="nos_descripcion" class="col-10 col-lg-12 col-xl-4 center_c">
                <h1 class="pad_inl_2 box wow fadeInLeft">El proyecto</h1>
            </article>

            <article id="nos_info" class="col-11 col-lg-11 col-xl-4">

                <article id="que_es" class="col-12 col-sm-12 col-md-6 col-xl-12 pad_b_2 ">
                    <h4 class="title_nos pad_b_1 box wow fadeInRight">¿Qué es Socios.red?</h4>
                    <p class="mar_b_0 box wow fadeInRight">Es una herramienta interactiva basada en datos abiertos que
                        permite
                        visualizar fácilmente
                        relaciones
                        del
                        poder, para simplificar su comprensión y democratizar el acceso a la información. </p>
                </article>
                <article id="como_funciona" class="col-12 col-sm-12 col-md-6 col-xl-12 pad_t_2">
                    <h4 class="title_nos pad_b_1 box wow fadeInRight">¿Cómo funciona?</h4>
                    <p class="mar_b_0 box wow fadeInRight">Nuestra plataforma se nutre de millones de datos que el
                        Estado
                        argentino
                        publica de manera
                        abierta
                        pero
                        desconectada y en distintos portales. Estos datos, primero pasan por una etapa de procesamiento
                        para
                        que
                        puedan conectarse y luego se cargan en una base de datos para que puedan ser consultados con
                        pocos
                        clicks.</p>
                </article>
                <!--   <div class="fondo"></div>-->
            </article>
        </section>

        <!--termina nosotros-------------------------->



        <!--comienza data----------------------------->

        <section id="data" class="center_c pad_block_10 pad_b_0">

            <article id="title_data">
                <h2 class="title_data pad_b_1 box wow fadeIn">Reunimos data sobre</h2>
            </article>
            <article class="col-12 data center_r pad_t_8 ">
                <div class="col-6 col-md-4 col-lg-2 center_c pad_b_8 box wow bounceIn"><i class="fas fa-city fa-5x"></i>
                    <h4>800.000</h4>
                    <p>Empresas</p>

                </div>
                <div class="col-6 col-md-4 col-lg-2 center_c pad_b_8 box wow bounceIn"><i
                        class="fas fa-hand-holding-heart fa-5x"></i>
                    <h4>30.000</h4>
                    <p>ONGs</p>

                </div>
                <div class="col-6 col-md-4 col-lg-2 center_c pad_b_8 box wow bounceIn"><i
                        class="fas fa-user-tie fa-5x"></i>
                    <h4>3.000</h4>
                    <p>Funcionarios públicos</p>

                </div>
                <div class="col-6 col-md-4 col-lg-2 center_c pad_b_8 box wow bounceIn"><i
                        class="fas fa-users fa-5x"></i>
                    <h4>650.000</h4>
                    <p>Personas</p>

                </div>
                <div class="col-6 col-md-4 col-lg-2 center_c pad_b_8 box wow bounceIn ultimo"><i
                        class="fas fa-vote-yea fa-5x"></i>
                    <h4>60.000</h4>
                    <p>Aportes a campañas electorales</p>

                </div>
                <div class="col-6 col-md-4 col-lg-2 center_c pad_b_8 box wow bounceIn ultimo"><i
                        class="fas fa-file-invoice-dollar fa-5x"></i>
                    <h4>20.000</h4>
                    <p>Compras del Estado</p>

                </div>
            </article>

        </section>

        <!--termina data------------------------------>



        <!--comienza conexiones----------------------->

        <section id="conexiones" class="center_r pad_block_10">
            <div class="sombra_top"></div>
            <div class="sombra_bottom"></div>
            <div id="particles-js-1"></div>
            <div class="col-12 col-md-6 col-lg-3 title_conex">
                <h2 class="mar_0 pad_3 box wow slideInLeft"> Las <span class="conex">conexiones</span> que podrás
                    encontrar son:</h2>
            </div>
            <article class="col-12 col-sm-10 col-lg-8 center_c pad_inl_5 pad_l_5">
                <ul class="fa-ul mar_0 pad_t_2 box wow fadeInRight">
                    <li><span class="fa-li"><i class="fab fa-cloudsmith fa-lg"></i></span>
                        <p>Entre las entidades jurídicas (empresas, ONGs, etc.) y las personas que figuran como
                            administradoras ante la Inspección General de Justicia. </p>
                    </li>
                    <li><span class="fa-li"><i class="fab fa-cloudsmith fa-lg"></i></span>
                        <p>
                            Entre las personas y partidos políticos a los que aportaron en alguna campaña electoral
                            desde
                            2011.
                        </p>
                    </li>
                    <li><span class="fa-li"><i class="fab fa-cloudsmith fa-lg"></i></span>
                        <p>Entre las empresas que figuran como proveedoras del Estado Nacional y de
                            la Ciudad de Buenos Aires y las correspondientes dependencias estatales. </p>
                    </li>
                    <li><span class="fa-li"><i class="fab fa-cloudsmith fa-lg"></i></span>
                        <p>Entre las personas que ejercen como funcionarios públicos y las distintas dependencias
                            estatales.
                        </p>
                    </li>
                </ul>
            </article>
        </section>

        <!--termina conexiones------------------------>



        <!--comienza participantes-------------------->

        <section id="participantes" class="pad_0">
            <div class="textura"></div>


            <!--comienza equipo--------------------------->

            <section id="equipo" class="center_c pad_t_10">

                <h2 id="title_equipo">El equipo</h2>
                <article class="row">

                    <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-6 center_c card mar_inl_3 pad_inl_2"
                        style="animation-delay: 200ms;">
                        <div class="center_c pad_inl_2"><img src="img/foto_nico.jpg" alt="">
                            <div class="content">
                                <h4>Nicolás Grossman</h4>
                                <p>Lic. en Sociología (UBA),
                                    maestrando en Sociología
                                    Política Internacional (Untref)
                                    y periodista especializado en
                                    Open Data. </p>
                                <div class="center_c pad_1 pad_inl_2 redes_equipo">
                                    <ul>
                                        <li> <a href="https://www.linkedin.com/in/nicol%C3%A1s-grossman-0b293376/"
                                                target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a></li>
                                        <li> <a href="https://twitter.com/nico_grossman" target="_blank"><i
                                                    class="fab fa-twitter fa-2x"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-6 card center_c card mar_inl_3 pad_inl_1
            " style="animation-delay: 300ms;">
                        <div class="center_c pad_inl_2"><img src="img/foto_matias.jpeg" alt="">
                            <div class="content">
                                <h4>Matías Batocchia</h4>
                                <p>Estudiante de Física (UBA) y
                                    especialista en Machine
                                    Learning. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-6 card center_c card mar_inl_3 pad_inl_1 "
                        style="animation-delay: 400ms;">
                        <div class="center_c pad_inl_2"><img src="img/foto_lisan.jpeg" alt="">
                            <div class="content">
                                <h4>Lisandro Espejo</h4>
                                <p>Lic. en Sociología
                                    (UNCuyo) y analista de datos</p>
                                <div class="center_c pad_1 pad_inl_2 redes_equipo arreglo">
                                    <ul>
                                        <li> <a href="https://www.linkedin.com/in/lisandrojulioespejo/?originalSubdomain=ar"
                                                target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a></li>
                                        <li> <a href="https://twitter.com/EspejoLisandro" target="_blank"><i
                                                    class="fab fa-twitter fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="center_c pad_1 pad_inl_2 redes_equipo arreglo1">
                            <ul>
                                <li> <a href=""><i class="fab fa-linkedin-in fa-2x"></i></a></li>
                                <li> <a href=""><i class="fab fa-twitter fa-2x"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </article>

            </section>

            <!--termina equipo---------------------------->


            <!--comienza confiaron------------------------>

            <section id="confiaron" class="center_c pad_block_10">

                <h2 id="title_confiaron" class="pad_inl_2"> Confiaron en Socios.red </h2>

                <article id="texto_confiaron" class="col-12 col-sm-10 col-lg-6 pad_t_2">
                    <p>Socios.red fue seleccionado en 2017 como uno de los proyectos ganadores del DataCamp de Open
                        Government
                        Partnership, para ser apoyado con recursos brindados por la Fundación Conocimiento Abierto.
                        Además, en junio de 2019, Google News Initiative nos seleccionó para brindarnos infraestructura
                        en
                        Google Cloud.
                        En 2020, Socios.red fue preseleccionada como una de las mejores aplicaciones de noticias del
                        mundo
                        en los Sigma Data Journalism Awards.</p>
                </article>

                <article class="col-12 col-lg-8 confiaron center_r pad_t_2">
                    <img src="img/ogp.png" alt="Open_Government_Partnership">
                    <img src="img/conocimiento-abierto.png" alt="Conocimiento_Abierto">
                    <img src="img/google-initiative.png" alt="Google_Initiative">
                    <img class="coder" src="img/coderhouse.png" alt="Coder_House">
                </article>

                <article class="col-12 col-sm-10 col-lg-6 contribuyeron center_r pad_t_6">
                    <h2 style="animation-delay: 300ms;"> Contribuidores </h2>
                    <p>Durante el proceso, socios.red recibió el enriquecedor aporte del trabajo
                        de los desarrolladores
                        Alfredo Ramirez, Bruno Salerno, Damián Silvani, Martín Sarsale, Franco Bellomo y Valeria
                        Tiffenberg.
                    </p>
                </article>

            </section>

            <!--termina confiaron------------------------->


        </section>

        <!--termina participantes--------------------->



        <!--comienza footer--------------------------->

        <footer id="footer" class="center_c pad_inl_4 pad_t_6">


            <!--comienza consultas--------------------------->

            <article id="formulario" class="col-12 center_c">
                <div class="col-12 col-lg-8 col-xl-6">
                    <h2 class="col-12 mar_0">Si tenes alguna <span> consulta </span></h2>
                    <h5>por favor, no dudes en escribirnos</h5>
                    <form class="col-12 center_r " action="enviado1.php" method="post">
                        <div id="form_datos" class="col-12 col-md-6 pad_inl_1">
                            <fieldset>
                                <input name="nombre" placeholder="Nombre y apellido" type="text" tabindex="1" required>
                            </fieldset>
                            <fieldset>
                                <input name="email" placeholder="Email" type="email" tabindex="2" required>
                            </fieldset>
                            <fieldset>
                                <input name="telefono" placeholder="Número de teléfono (opcional)" type="tel"
                                    tabindex="3">
                            </fieldset>
                            <fieldset>
                                <input name="orgempresa" placeholder="Organización o empresa (opcional)" type="text"
                                    tabindex="1">
                            </fieldset>

                        </div>
                        <div class="col-12 col-md-6 cont_mensaje pad_inl_1">
                            <fieldset>
                                <select id="motivo_consulta" name="motivo_de_consulta">
                                    <option value="consulta">Motivo de consulta</option>
                                    <option value="donacion">Donación</option>
                                    <option value="contacto">Contacto</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </fieldset>
                            <fieldset class="mensaje">
                                <textarea name="mensaje" placeholder="Escriba su mensaje aquí...." tabindex="5"
                                    required></textarea>
                            </fieldset>
                            <fieldset class="col-12">
                                <button name="submit" type="submit" id="contact-submit"
                                    data-submit="...Sending">Enviar</button>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </article>

            <!--termina consultas--------------------------->


            <!--comienza info/redes------------------------->

            <div id="info" class="col-12 center_r pad_block_2">
                <div class="center_r pad_inl_2">
                    <a href="index.html"><img class="img_socios" src="img/logo.png" alt=""></a>
                    <p>© Copyright</p>
                </div>

                <ul>
                    <li> <a href="mailto:contacto@socios.red"><i class="far fa-envelope fa-2x"></i></a>
                        <p> contacto@socios.red
                        </p>
                    </li>
                    <li> <a href="https://twitter.com/sociosred?lang=es" target="_blank"><i
                                class="fab fa-twitter fa-2x"></i></a></li>
                </ul>

                <div class="seisuno pad_inl_2 pad_l_4 center_r"><a class=" center_r "
                        href="https://www.behance.net/LautaroGalman" target="_blank">
                        <p> Página diseñada por</p><img src="img/logo_color.png" alt="">
                    </a>
                </div>
            </div>

            <!--termina info/redes-------------------------->


        </footer>

        <!--termina footer--------------------------->


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
        <script src="funciones.js"></script>
        <script src="particles.js"></script>
        <script src="particles-1.js"></script>
        <script>
            wow = new WOW({
                boxClass: 'wow', // default
                animateClass: 'animated', // change this if you are not using animate.css
                offset: 0, // default
                mobile: true, // keep it on mobile
                live: true // track if element updates
            })
            wow.init();
        </script>
    </section>
</body>

</html>