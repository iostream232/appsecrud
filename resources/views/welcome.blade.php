<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telesecundaria Francisco I. Madero</title>




<!-- Favicon -->

    <link rel="icon" href="{{asset('img/ico.png')}}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #11165A;
            --secondary-color: #003366;
            --accent-color: #61123C;
            --light-background: #F5F5F5;
        }

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .header-bg {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .navbar-custom {
            background-color: rgba(17, 22, 90, 0.9);
            backdrop-filter: blur(10px);
        }

        .section-title {
            color: var(--secondary-color);
            font-weight: 700;
            border-bottom: 3px solid var(--accent-color);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .social-sidebar {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
        }

        .social-sidebar a {
            display: block;
            margin: 10px 0;
            color: var(--primary-color);
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .social-sidebar a:hover {
            color: var(--accent-color);
        }

        .footer-custom {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }


        .social-share-btn {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 999;
}

.social-share-btn {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 999;
}

.social-btn {
    display: flex;
    align-items: center;
    gap: 10px;
    background-color: #0866ff;
    color: #fff;
    text-decoration: none;
    padding: 8px;
    border-radius: 25px;
    transition: all 0.3s ease;
    box-shadow: rgba(0, 0, 0, 0.125) 2px 2px 3px;
    width: 48px;
    overflow: hidden;
}

/* Icono de Facebook */
.icon-facebook {
    display: inline-block;
    min-width: 32px;
    height: 32px;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAABxElEQVR4nNWXu0oDQRSGE0XxWgk+gKVgFUijIlELIZXgK1hZaBGtTSFeOzvBUnwJIYqoTXwBESWiklhokUYF88khA07iZHdmLxF/2CY7/yU755ydTST+C4BOYBLYA66ACvCpror6bReYkLVRGvcCa8rEFrJ2FegJa74APBAcJWA+iHESWAdqhIdobAEdtuYdwDHR40j+mE2ADeJD3mbPawGEH4FL1QnXwGuLdbWWNUG92l0LTgzTBq0hn8L83R3UW80FRa828+HmTEOm4hgg47OdXig3dAX1CeeCN1NbqUc/AmQtNMZ1ooxXFxQN5ovAl4PGjk6WYnLBqSHAiaPGhU5+cSQXDAEKjhplnfzxBwHedXLVgjDqVfVNYcYs9Ko64dZvta250hu2CHCjE84jDpC2CHCmE7YtCEvArLpSBtOUdv/QQm9TJ0/T/iKc0sndwHMbAzwBXc0CuTYGWDEVTr96ScQdQJ50X6vqnbM8kAQNINpZo7njiylogJ8XkM+JeD+GAAcuJ+OkpPXYDpcANTVn/E/EzVBDpRQigHBnEmEADErbAPcOAe6AZWAglHmi0UDOjTIx86ZiUlsmX1OZSD9O48Y3QGWlCM160NoAAAAASUVORK5CYII=) 50% 50% no-repeat;
    background-size: 100%;
    transition: transform 0.3s ease;
}

/* Texto de Facebook */
.social-btn p {
    margin: 0;
    font-weight: 700;
    white-space: nowrap;
    opacity: 0;
    transform: translateX(-20px);
    transition: all 0.3s ease;
    padding-right: 12px;
}

/* Efectos hover */
.social-btn:hover {
    width: auto;
    padding-right: 20px;
}

.social-btn:hover .icon-facebook {
    transform: scale(1.1);
}

.social-btn:hover p {
    opacity: 1;
    transform: translateX(0);
}

/* Ajustes para móvil */
@media only screen and (max-width: 600px) {
    .social-btn {
        width: 48px;
        height: 48px;
        justify-content: center;
    }
    
    .social-btn p {
        display: none;
    }
    
    .social-btn:hover {
        width: 48px;
        padding: 8px;
    }
}
    </style>



        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

     
    </head>
    



<body>

    <!-- Social Share Buttons -->
<div class="social-share-btn">  
        <a href="https://www.facebook.com/profile.php?id=100090836438044" target="_blank">  
            <div class="social-btn color-facebook">  
                <div class="icon-facebook"></div>  
            </div>  
        </a>  
    </div> 


   <!-- Top Information Bar -->
<div class="container-fluid bg-dark text-white py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="{{ asset ('img/SEP_Logo_2019.svg.png')}}" alt="Logo SEP" style="max-height: 40px;" class="me-3">
            <span>Clave escolar: 27ETV0025K1</span>
        </div>
        <div>
            @if (Route::has('login'))
                <div class="d-flex align-items-center">
                    @auth
                        <a href="{{ url('/home') }}" class="text-white text-decoration-none me-3">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-white text-decoration-none me-3">Iniciar sesion</a>
                        `
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white text-decoration-none">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
    <!-- Header with Carousel -->
    <header class="header-bg">
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('img/banner_secu.png') }}" class="d-block w-100" alt="Escuela">



                    <!--
                    
                     <div class="carousel-caption d-none d-md-block">
                        <h1>Telesecundaria Francisco I. Madero</h1>
                        <p>Educación de calidad para el futuro</p>
                    </div>
                    -->

                </div>
                <div class="carousel-item">
                    <img src="{{ asset ('/img/sep.jpg')}}" class="d-block w-100" alt="Evento Escolar">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset ( 'img/3.png')}}" class="d-block w-100" alt="Estudiantes">
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">TELE FRANCISCO I. MADERO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#mision">Misión</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#vision">Visión</a></li>
                
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Sections (Similar to original, with enhanced styling) -->
    <style>
:root {
    --color-wine: #722F37;
    --color-rust: #A74B46;
    --color-navy: #1B3159;
    --color-light: #f8f9fa;
    --transition: all 0.3s ease;
}

.school-section {
    padding: 3rem 0;
}

.intro-container {
    background: linear-gradient(120deg, var(--color-light) 0%, #ffffff 100%);
    border-radius: 20px;
    padding: 2.5rem 2.5rem 2.5rem 100px; /* Aumentado el padding izquierdo para el ícono */
    margin-bottom: 3rem;
    position: relative;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border: 1px solid rgba(0,0,0,0.08);
    overflow: hidden;
}

.intro-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, var(--color-wine), var(--color-rust));
}

.intro-text {
    position: relative;
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--color-navy);
    text-align: justify;
    margin: 0;
    z-index: 1;
}

.intro-icon {
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--color-wine), var(--color-rust));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 28px;
    z-index: 2;
    box-shadow: 0 4px 15px rgba(114, 47, 55, 0.2);
}

/* El resto de los estilos se mantienen igual */
.info-card {
    background: linear-gradient(to right bottom, #ffffff, var(--color-light));
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: var(--transition);
    border: 1px solid rgba(0,0,0,0.08);
    position: relative;
    overflow: hidden;
    height: 100%;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}

.info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(to bottom, var(--color-wine), var(--color-rust));
}

.section-title {
    color: var(--color-navy);
    font-weight: 600;
    border-bottom: 2px solid var(--color-wine);
    padding-bottom: 10px;
    margin-bottom: 20px;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 40px;
    height: 2px;
    background-color: var(--color-rust);
}

.description-text {
    line-height: 1.8;
    color: #505962;
    text-align: justify;
    padding: 0 15px;
}

@media (max-width: 768px) {
    .intro-container {
        padding: 2rem 1.5rem 2rem 80px;
    }
    
    .intro-text {
        font-size: 1rem;
    }
    
    .intro-icon {
        width: 45px;
        height: 45px;
        font-size: 20px;
        left: 15px;
    }
}
</style>

<section class="school-section">
    <div class="container">
        <!-- Sección de introducción -->
        <div class="intro-container">
            <div class="intro-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <p class="intro-text">
                La Telesecundaria es un servicio de Educación Básica que, aliado a otros servicios del nivel, atiende a la comunidad estudiantil de Educación Secundaria. Su misión se logra mediante un modelo pedagógico caracterizado por el uso de Libros de Texto Gratuitos y materiales complementarios impresos, audiovisuales e informáticos. Una maestra o maestro organiza y construye el proceso de enseñanza en el aula para promover acuerdos y nuevos aprendizajes. Estos aprendizajes permitirán a las y los alumnos continuar estudiando y ser promotores de una mejor forma de vida de las personas que los rodea.
            </p>
        </div>

        <!-- Sección de Misión y Visión -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="info-card p-4">
                    <h3 class="section-title" id="mision">Nuestra Misión</h3>
                    <p class="description-text">
                    Ser una institución educativa de referencia en la modalidad de Telesecundaria,
donde los estudiantes de la comunidad y localidades vecinas cursen, permanezcan y
concluyan su educación básica con éxito. Aspiramos a formar egresados con una sólida
base académica, valores y habilidades que les permitan continuar su formación profesional
y enfrentar los retos del mundo actual.
Nos comprometemos a asumir con ética y responsabilidad los resultados de aprendizaje,
garantizando un entorno educativo con infraestructura adecuada, materiales didácticos de
calidad y un ambiente de trabajo agradable. Promovemos la mejora continua del
rendimiento académico mediante estrategias innovadoras, el uso eficiente de las
Tecnologías de la Información y la formación constante de docentes competentes y
comprometidos con la excelencia educativa.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="info-card p-4">
                    <h3 class="section-title" id="vision">Nuestra Visión</h3>
                    <p class="description-text">
                    Brindar un servicio educativo de calidad en la modalidad de Telesecundaria,
asumiendo de manera colectiva la responsabilidad por los resultados de aprendizaje de
todos los alumnos. Nos comprometemos con la mejora continua del aprovechamiento
escolar, formando una comunidad educativa integrada y comprometida que garantice la
adquisición de los aprendizajes esperados, el desarrollo de habilidades intelectuales, valores
y actitudes esenciales. Nuestro objetivo es preparar a los estudiantes para una vida personal
y familiar plena, una ciudadanía activa y responsable, una participación productiva en la
sociedad, y el aprendizaje continuo a lo largo de su vida.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Gallery Section -->
    <style>
.calendar-container {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    padding: 20px;
    margin: 20px 0;
}

.calendar-img {
    width: 100%;
    max-width: 800px;
    height: auto;
    display: block;
    margin: 0 auto;
    border-radius: 8px;
}

.calendar-title {
    color: var(--color-wine, #722F37);
    text-align: center;
    margin-bottom: 2rem;
    font-weight: 600;
    position: relative;
    padding-bottom: 10px;
}

.calendar-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 3px;
    background: linear-gradient(90deg, var(--color-wine, #722F37), var(--color-rust, #A74B46));
}
</style>

<section id="galeria" class="py-5 bg-light">
    <div class="container">
        <h2 class="calendar-title">Calendario Escolar</h2>
        <div class="calendar-container">
            <img src="{{ asset('img/calendario.jpg')}}" alt="Calendario Escolar" class="calendar-img">
        </div>
    </div>
</section>

    <!-- Sección del mapa -->
    <section id="mapa" style="display: flex; justify-content: center; padding: 40px 20px; background-color: #f0f4f8;">
        <div
            style="width: 100%; max-width: 1000px; background-color: white; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); display: flex; overflow: hidden;">

            <!-- Texto de la tarjeta -->
            <div style="flex: 1; padding: 20px; display: flex; flex-direction: column; justify-content: center;">
                <h2 style="font-size: 28px; color: #333; font-family: 'Arial', sans-serif; margin-bottom: 10px;">
                    Ubicación</h2>
                <p style="font-size: 18px; line-height: 1.6; color: #555; font-family: 'Arial', sans-serif;">
                    Aquí puedes ver la ubicación de la Telesecundaria San Juan El Alto. Este mapa te ayudará a encontrar
                    la dirección exacta y cómo llegar a nuestro centro educativo.
                </p>
                <div style="margin-top: 20px;">
                    <a href="https://www.google.com/maps/dir/?api=1&destination=Telesecundaria+San+Juan+El+Alto"
                        target="_blank"
                        style="padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s;">
                        Cómo llegar
                    </a>
                </div>
            </div>

            <!-- Mapa de la tarjeta -->
            <div style="flex: 1; position: relative; overflow: hidden;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1422.810035400884!2d-92.7111328563644!3d17.817607054253305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ede8b848a94965%3A0x56c5b014167ae51c!2sTelesecundaria%20San%20Juan%20El%20Alto!5e0!3m2!1ses-419!2smx!4v1734023153492!5m2!1ses-419!2smx"
                    width="100%" height="100%" style="border:0; position: absolute; top: 0; left: 0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Información adicional -->

    </section>


    <!--facebook -->
    <iframe
        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100090836438044&tabs=timeline&width=0&height=0&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
        width="0" height="0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

    <!-- Footer -->
    <footer class="footer-custom text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Contacto</h5>
                    <p>
                        Carretera Federal A Macuspana s/n<br>
                        Rancheria San Juan Del Alto 2da Sección<br>
                        Jalapa, Tabasco, C.P. 86850
                    </p>
                    <p>
                        Teléfono: 01 932 324 0000
                </div>
               
                <div class="col-md-6 text-end">
                    <img src="{{ asset('img/SEP_Logo_2019.svg.png')}}" alt="Logo SEP" style="max-height: 100px;">
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2025 Telesecundaria Francisco I. Madero. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


