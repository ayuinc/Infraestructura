<!DOCTYPE html>
<html>
<!-- ===========================================================
 ______     __  __     __  __        __     __   __     ______    
/\  __ \   /\ \_\ \   /\ \/\ \      /\ \   /\ "-.\ \   /\  ___\   
\ \  __ \  \ \____ \  \ \ \_\ \     \ \ \  \ \ \-.  \  \ \ \____  
 \ \_\ \_\  \/\_____\  \ \_____\     \ \_\  \ \_\\"\_\  \ \_____\ 
  \/_/\/_/   \/_____/   \/_____/      \/_/   \/_/ \/_/   \/_____/ 
================================================================== -->
  
  <!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js" lang="es" > <!--<![endif]-->
  <head>
    <!--[if lt IE 9]>
    <script src="{site_url}/js/ie9/html5shiv.js"></script>
    <script src="{site_url}/js/ie9/nwmatcher-1.2.5-min.js"></script>
    <script src="{site_url}/js/ie9/respond.min.js"></script>
    <script src="{site_url}/js/ie9/selectivizr-min.js"></script>
    <![endif]-->
    <meta charset="utf-8">

    <title></title>
    <!-- Project SEO -->
    <meta name="description" content="">
    <meta name="keywords" content="" /> 
    <meta name="author" content="@MadeByGus &amp; Ayu Consulting S.A.C" />

    <!-- Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Apple Mobile -->
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Apple icons -->
    <link rel="apple-touch-icon" sizes="156x156" href="#">
    <link rel="apple-touch-icon" sizes="128x128" href="#">
    <link rel="apple-touch-icon" sizes="76x76" href="#">
    <link rel="apple-touch-icon" href="#">

    <!-- WebFonts -->


    <!-- APP STYLES 
      *Compress/Minify stylesheets on production
    -->
    <link rel="stylesheet" href="stylesheets/main.css">
    <link rel="stylesheet" href="stylesheets/ebm.css">
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-menu"></div>
      <div class="site-content">
        <section>
          <div class="main-nav">
            <div class="navbar p-7">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <img src="assets/img/logo.png" width="250px">
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav pull-right mt-21">
                  <li class="active">
                    <a href="#objetivos">OBJETIVOS</a>
                  </li>
                  <li>
                    <a href="#iniciativas">INICIATIVAS</a>
                  </li>
                  <li>
                    <a href="#socios">SOCIOS</a>
                  </li>
                  <li>
                    <a href="#consejo">CONSEJO</a>
                  </li>
                  <li>
                    <a href="#events">NOTICIAS</a>
                  </li>
                  <li>
                    <a href="#follow" id="follow">DOCUMENTOS</a>
                  </li>   
                </ul>
              </div>
              <!--/.nav-collapse -->
            </div>
          </div>
        </section>
        <section class="mh-560" style="background: url(assets/img/bg-fold.jpg) no-repeat center bottom;">
          <div class="overlay mh-560 flex flex-column flex-middle flex-center">
            <div class="container-md text-center text-white">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <h1 class="lead">El sector público y privado aliados por un futuro mejor para los peruanos</h1>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="pv-35">
          <div class="container">
            <h1 class="text-center lead">Sobre Nosotros</h1>
            <p class="lead">El programa se ha propuesto contribuir a reducir la pobreza y mejorar la calidad de vida de los peruanos a través de la sensibilización sobre la importancia de incrementar el acceso de la población a infraestructura de agua, saneamiento, telecomunicaciones, energía, puertos, aeropuertos, ferrocarriles y carreteras. Con la adecuada promoción, se espera alcanzar tasas de inversión en infraestructura superiores al 7% anual sobre el PBI. Porcentaje que de ser sostenido en el tiempo, permitiría en un lapso de 10 años ubicar al Perú entre los 30 países con mejor calidad de infraestructura del planeta. <a href="assets/documents/brochure.pdf" target="_blank">Conoce más sobre nosotros.</a></p>
            <div class="container-sm mt-35">
              <iframe class="youtube_object" type="text/html" width="638" height="360" src="//www.youtube.com/embed/O_jC-G2kklo?&amp;wmode=transparent&amp;rel=0&amp;showinfo=0" allowfullscreen="" frameborder="0"></iframe>
              <blockquote class="mt-35 mb-35">
                <h1>Nuestra meta es invertir el 7% del PBI al año en infraestructura confiable y eficiente.</h1>
              </blockquote>
            </div>
            <div class="container-sm">
              <iframe class="youtube_object" type="text/html" width="648" height="391" src="//www.youtube.com/embed/3H7NRGpEDy4?&amp;wmode=transparent&amp;rel=0&amp;showinfo=0" allowfullscreen="" frameborder="0"></iframe>
            </div>
          </div>
        </section>
      {exp:channel:entries channel="nuestros-objetivos" limit="1"}
        <section id="objetivos" class="bg-gray-light pv-35">
          <div class="container">
            <h1 class="text-center lead">{title}</h1>
            <p class="lead">{introduccion_objetivos}</p>
          </div>
        </section>
        <section class="bg-success pv-35">
          <div class="container">
            <div class="row">
              <div class="col-sm-3 text-center"><img src="assets/img/circle-1.png" alt=""></div>
              <div class="col-sm-9 mh-210 flex flex-column flex-middle">
                <p class="lead">{punto1_objetivos}</p>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-success-op pv-35">
          <div class="container">
            <div class="row">
              <div class="col-sm-9 mh-210 flex flex-column flex-middle">
                <p class="lead">{punto2_objetivos}</p>
              </div>
              <div class="col-sm-3 text-center"><img src="assets/img/circle-2.png" alt=""></div>
            </div>
          </div>
        </section>
        <section class="bg-gray-lighter pv-35">
          <div class="container">
            <div class="row">
              <div class="col-sm-3 text-center"><img src="assets/img/circle-3.png" alt=""></div>
              <div class="col-sm-9 mh-210 flex flex-column flex-middle">
                <p class="lead">{punto3_objetivos}</p>
              </div>
            </div>
          </div>
        </section>
      {/exp:channel:entries}
        <section id="iniciativas" class="pv-35">
          <div class="container">
            <h1 class="lead text-center">Nuestras Iniciativas</h1>
          </div>
          <div class="container">
            <div class="row pv-21">
              <div class="col-sm-5"><img src="assets/img/iniciativas-4.jpg" alt="" class="img-responsive"></div>
              <div class="col-sm-7 lead">
                <strong>1.  Observatorio de la Inversión en Infraestructura en el Perú </strong>
                <p>Elaborado por Apoyo Consultoría, será el primer servicio de medición y seguimiento de la evolución de la inversión pública y privada en infraestructura en el país. Así, permitirá realizar comparaciones, análisis y determinar acciones que permitan mejorar e incrementar la inversión futura. Tendrá un listado de proyectos concesionados con su estado de avance (semáforo de proyectos). Tendrá una entrega anual, en noviembre, en la cual se manejará data acumulada del año anterior, así como entregas complementarias trimestrales en las que se analizarán avances en indicadores relevantes. <a href="assets/documents/observatorio.pdf" target="_blank">Ver reporte adjunto.</a></p>
              </div>
            </div>
            <div class="row pv-21">
              <div class="col-sm-5"><img src="assets/img/iniciativas-1.jpg" alt="" class="img-responsive"></div>
              <div class="col-sm-7 lead">
                <strong>2.  Congreso Anual de “Infraestructura para Todos” </strong>
                <p>Será el punto de encuentro de todos los actores que promueven la inversión en infraestructura en el país. Se convertirá en el principal evento del sector y, por ende, buscará ser el centro de las discusiones sobre las acciones que deben implementarse para potenciar las inversiones en el sector. En lugar de discutir sobre lo que se ha hecho, se promoverá la discusión prospectiva para identificar políticas e inversiones de alto impacto en el futuro. </p>
              </div>
            </div>
            <div class="row pv-21">
              <div class="col-sm-5"><img src="assets/img/iniciativas-2.jpg" alt="" class="img-responsive"></div>
              <div class="col-sm-7 lead">
                <strong>3. Conversatorios Periódicos de “Infraestructura para Todos”</strong>
                <p>Desarrollados por AMCHAM, en el marco de su Comité de Infraestructura. Serán espacios trimestrales de diálogo público-privado donde se compartirán y discutirán recomendaciones específicas de políticas públicas sectoriales orientadas a acelerar las inversiones en infraestructura, contribuyendo así a fortalecer la confianza y visión de largo plazo entre el sector público y privado. </p>
              </div>
            </div>
            <div class="row pv-21">
              <div class="col-sm-5"><img src="assets/img/iniciativas-3.jpg" alt="" class="img-responsive"></div>
              <div class="col-sm-7 lead">
                <strong>4. Grupo de promoción y financiación colectiva de “Infraestructura por Impuestos” (GIxI)</strong>
                <p>El programa contribuirá a impulsar la creación de un grupo autónomo que reúna a los directivos de las principales empresas comprometidas con incrementar y acelerar el uso y financiamiento de Obras por Impuestos para el desarrollo de infraestructura en el país. Su función será coordinar junto al Estado el financiamiento colectivo de proyectos de mayor impacto en la sociedad, compartir buenas prácticas así como factores clave para incrementar y acelerar el uso de esta herramienta de manera confiable y eficiente.</p>
              </div>
            </div>
          </div>
        </section>
        <section id="socios" class="pv-35 bg-gray-lighter">
          <div class="container">
            <h1 class="lead text-center">Socios</h1>
            <ul class="grid-list grid-list-centered grid-list-3 grid-list-anchors">
              <li><a href="http://respeto.pe/" class="text-center"><img src="assets/img/logo-1.png" alt=""></a></li>
              <li><a href="http://www.apoyoconsultoria.com/default.aspx" class="text-center"><img src="assets/img/logo-2.png" alt=""></a></li>
              <li><a href="http://www.amcham.org.pe/home/" class="text-center"><img src="assets/img/logo-3.png" alt=""></a></li>
            </ul>
            <h3 class="lead"><strong>Contribuyentes por Respeto</strong></h3>
            <p class="lead">Organización que asumirá la gestión del programa. Se trata de una asociación civil sin fines de lucro, formada por un grupo de ciudadanos que busca políticas públicas basadas en los principios de libertad individual (económica, social y política), responsabilidad personal, mercados competitivos y Estado de Derecho. Además del programa Infraestructura para Todos, la asociación cuenta con otros dos programas: Consumo Responsable e Impuestos Justos. Fernando Cáceres, director ejecutivo de CpR será el gerente del Programa IPT. CpR, estará a cargo de las Investigaciones de Informalidad en Infraestructura, a través de estudios a solicitud de los sectores interesados.</p>
            <h3 class="lead"><strong>Amcham</strong></h3>
            <p class="lead">Agremiación privada que dará el soporte operativo al programa a través de su comité de Infraestructura. Dicho comité fomenta la discusión sobre los temas de infraestructura y promueve el acercamiento entre las instituciones gubernamentales y las empresas del sector.
            </p>
            <h3 class="lead"><strong>Apoyo Consultoría</strong></h3>
            <p class="lead">Responsable de la concepción y elaboración periódica (Pro Bono) del Observatorio de Infraestructura, el primer producto con el que contará la institución. Apoyo es el mayor grupo de consultoría privada del Perú.</p>
          </div>
        </section>
        <section class="pv-35 bg-success">
          <div class="container text-white">
            <h1 class="text-center">Aliados</h1>
            <p class="lead">En adición a los socios, el programa se encuentra en proceso de concretar alianzas estratégicas con instituciones públicas y privadas que apuesten por un incremento en la cobertura y calidad de la infraestructura en el país. Para empezar la idea es contar con el respaldo de AFIN, IPAE y el IPE, con los que se trabajaría en la etapa inicial, para incorporar posteriormente a otras instituciones o personas naturales dispuestas a respaldar el programa.</p>
          </div>
        </section>
        <section id="consejo" class="pv-35">
          <div class="container">
            <h1 class="lead text-center">Consejo Consultivo</h1>
          </div>
          <div class="container">
	          <div class="row pv-21">
		          <div class="col-sm-10 col-sm-offset-1 lead">
		            <div class="row pv-21">
		              <div class="col-sm-2"><img src="assets/img/profile-1.png" alt="" class="img-responsive mt-7"></div>
		              <div class="col-sm-10 lead">
		                <strong>Gianfranco Castagnola Zuñiga</strong><br>
		                <small>Es Presidente Ejecutivo de <a href="http://www.apoyoconsultoria.com/default.aspx" target="_blank"> APOYO Consultoría </a> y Presidente del Directorio de AC Capitales SAFI. Es Director de diversas empresas privadas y Presidente del Patronato de la Universidad del Pacífico. Ha sido Director del BCR, Presidente de la Cámara de Comercio Italiana, y director de diversas instituciones sin fines de lucro. Bachiller en Economía, Universidad del Pacífico, con Maestría en la Universidad de Harvard.</small>
		              </div>
		            </div>
		            <div class="row pv-21">
		              <div class="col-sm-2"><img src="assets/img/profile-3.jpg" alt="" class="img-responsive mt-7"></div>
		              <div class="col-sm-10 lead">
		                <strong>Alvaro Valdez</strong><br>
		                <small>Ingeniero Pesquero de la Universidad Agraria La Molina con MBA en la Universidad Adolfo Ibáñez de Chile y programa complementario de postgrado en Babson College. Emprendedor que se ha desempeñado como Viceministro de Pesquería, Gerente General de la Asociación para el Fomento de la Infraestructura Nacional – AFIN, Gerente de Asuntos Corporativos de Enersur/GDF SUEZ . Actualmente se desempeña como Director de Comunicación, Imagen y Responsabilidad Corporativa del Grupo <a href="http://www.telefonica.com.pe/portada/" target="_blank">Telefónica en el Perú </a> y Sponsor del Proyecto Wayra en el Perú.</small>
		              </div>
		            </div>
		            <div class="row pv-21">
		              <div class="col-sm-2"><img src="assets/img/profile-5.png" alt="" class="img-responsive mt-7"></div>
		              <div class="col-sm-10 lead">
		                <strong>Mark Hoffmann</strong><br>
		                <small>Mark Hoffmann es Presidente de  Amazonas Infraestructura. Tiene 17 años de trayectoria en el sector eléctrico, habiendo sido Presidente de Duke Energy para Perú y Ecuador, Gerente General de Electroandes y Country Manager y Director de Desarrollo para PSEG Global en Perú, EEUU, el Reino Unido e Italia. Es ingeniero del Georgia Institute of Technology con una maestría en administración de negocios de Cornell University. </small>
		              </div>
		            </div>
		            <div class="row pv-21">
		              <div class="col-sm-2"><img src="assets/img/profile-2.jpg" alt="" class="img-responsive mt-7"></div>
		              <div class="col-sm-10 lead">
		                <strong>Juan José Salmón</strong><br>
		                <small>Gerente General de <a href="http://www.apoyoconsultoria.com/default.aspx" target="_blank"> Lima Airport Partners </a>. Es abogado titulado de la Pontificia Universidad Católica del Perú, contando con una Maestría en Derecho de la Universidad de Southampton, Inglaterra; con cursos en Transporte de Mercadería, Seguros y Comercio Internacional. Se ha desempeñado como Gerente General de empresas en el rubro marítimo, almacenamiento y logístico; así como Presidente del gremio empresarial naviero en el Perú.</small>
		              </div>
		            </div>		            
		            <div class="row pv-21">
		              <div class="col-sm-2"><img src="assets/img/profile-4.jpeg" alt="" class="img-responsive mt-7" style="width:100%;"></div>
		              <div class="col-sm-10 lead">
		                <strong>Verónica Muzushima</strong><br>
		                <small>Verónica Mizushima es Directora de Estrategia de <a href="http://www.telefonica.com.pe/portada/" target="_blank"> Telefónica del Perú S.A.A.</a> desde agosto 2009.  Desde su ingreso al Grupo Telefónica en enero del 2000 ha ocupado la posición de Directora del Segmento Masivo como otras posiciones tanto en el área de Estrategia.  Anteriormente trabajó en AFP Unión.  Es Master en Dirección de Empresas por el PAD de la Universidad de Piura y Bachiller en Economía, de Universidad del Pacífico.</small>
		              </div>
		            </div>
		            <div class="row pv-21">
		              <div class="col-sm-2"><img src="assets/img/profile-6.png" alt="" class="img-responsive mt-7"></div>
		              <div class="col-sm-10 lead">
		                <strong>Andrés Arias</strong><br>
		                <small>Gerente General del <a href="http://www.caa.com.pe" target="_blank">Consorcio Agua Azul S.A.</a> Graduado en Ingeniería Industrial de la Universidad de Lima y Magíster en Administración de Empresas de la Universidad del Pacífico. Con más de 20 años de experiencia en el desarrollo de proyectos y 10 años como Gerente Comercial de Cosapi S.A., ha participado en el Proyecto Chillón desde la etapa de licitación ocupando luego los cargos de Director y Gerente Comercial. Se desempeña como Gerente General desde Septiembre del 2003. Desde el año 2010 asumio el cargo de Presidente del Cosejo de Administración del Consorcio AZB-HCI encargado de efectuar la Gestión Comercial del agua potable en el Cono Norte de Lima.</small>
		              </div>
		            </div>
              </div>
            </div>
          </div>      
          <div class="container">
            <div class="lead">
              <p>Entre las funciones del Consejo Consultivo se encuentran:</p>
              <ul>
                <li>Guiar el cumplimiento de los objetivos del programa. </li>
                <li>Velar por el buen uso de los recursos que administre el programa.</li>
              </ul>
              <p> En la medida que el programa pretende sensibilizar a la población a través del desarrollo de productos novedosos y una opinión plural, se espera renovar paulatinamente a sus miembros con integrantes jóvenes que le den vitalidad y lo refresquen constantemente con ideas creativas. El mecanismo de ingreso de nuevos miembros se fijará en su momento.</p>
            </div>
            <div class="col-md-12 text-center  pv-35">
              <img src="assets/img/grupo.jpg" width="450px">
            </div>
          </div>
          <div class="container">
            <div class="row pv-21">
              <div class="col-sm-10 col-sm-offset-1 lead">
                <h2 class="mt-35 text-center">Gerencia del Programa</h2>
                <div class="row pv-21">
                  <div class="col-sm-2"><img src="assets/img/profile-0.png" alt="" class="img-responsive mt-7"></div>
                  <div class="col-sm-10 lead">
                    <strong>Fernando Cáceres</strong><br>
                    <small>Es Director Ejecutivo de la asociación civil <a href="http://www.respeto.pe" target="_blank">Contribuyentes por Respeto</a>, y consultor en regulación y libre competencia. Tiene 14 años de experiencia profesional. Ha sido Profesor de Postgrado y Pregrado en la UPC. Comisionado de Libre Competencia del INDECOPI. Investigador del Instituto Libertad y Democracia. Asesor Legal en la Presidencia del Consejo de Ministros. Abogado por PUCP, Maestría en Derecho por University of Virginia, School of Law, y Postgrado en Comunicaciones por ESAN.</small>
                  </div>
                </div>
		          </div>
	          </div>  
          </div>

        </section>
        <footer class="bg-gray-darker pv-21">
          <div class="container text-white">
            <div class="row">
              <div class="col-sm-6"></div>
              <div class="col-sm-6 text-right">
                <strong>contacto@infraestructuraparatodos.pe</strong>
              </div>              
            </div>
          </div>
        </footer>
        <!-- <section class="pv-35">
          <div class="container"></div>
        </section> -->
      </div>
    </div>
    <!-- VENDOR SCRIPTS -->
    <script src="js/app/vendor/"></script>
    <!-- DEVELOPMENT & PRODUCTION SCRIPTS
      *Compress scripts on production
    -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->  
    <script src="js/b3/transition.js"></script>
    <script src="js/b3/collapse.js"></script>
    <script src="js/b3/dropdown.js"></script>
    <script src="js/app/lib/"></script>
  </body>
</html>