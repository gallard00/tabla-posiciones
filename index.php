<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Tablas de posiciones Gral Alvarado</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="/icono/favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/26ef8ebed4.js" crossorigin="anonymous"></script>

</head>

<body>
  <!-- <div id="preloader"></div> -->

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">

        <h1>Tablas de posiciones de General Alvarado</h1>
        <div class="actions">
          <a href="#masculino" class="btn-masculino">Primera Masculina</a>
          <a href="#femenino" class="btn-masculino">Primera Femenina</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#masculino">Masculino</a></li>
          <li><a href="#femenino">Femenino</a></li>
          <li><a href="#contact">Contactanos</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  Tabla de posiciones Masculino
  ============================-->
  <section id="masculino">
    <div class="container wow fadeInUp">
    
    <!-- Mostrar la tabla de posiciones -->
    
    <h2 class="h2">Tabla de Posiciones Masculino</h2>
    <div class="scrollTable">
    <table id="table">
        <thead class="thead">
            <tr class="tr"> 
                <th class="th">Equipo</th>
                <th class="th">PJ</th>
                <th class="th">PG</th>
                <th class="th">PE</th>
                <th class="th">PP</th>
                <th class="th">GF</th>
                <th class="th">GC</th>
                <th class="th">DIF</th>
                <th class="th">PTS</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <?php
            // Conexión a la base de datos
            $host = "localhost";
            $user = "root";
            $password = "123";
            $database = "tabla_posiciones";

            $conn = new mysqli($host, $user, $password, $database);
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Función para calcular puntos y diferencia de goles
        function calcularPuntosYDiferencia($partidos_ganados, $partidos_empatados, $goles_a_favor, $goles_en_contra) {
        $puntos = ($partidos_ganados * 3) + $partidos_empatados;
        $diferencia_goles = $goles_a_favor - $goles_en_contra;
        return [$puntos, $diferencia_goles];
    }

    // Consulta SQL para obtener los equipos ordenados por puntos (mayor a menor) y por diferencia de goles (mayor a menor)
        $sql = "SELECT * FROM equipos ORDER BY puntos DESC, diferencia_goles DESC";
        $result = $conn->query($sql);


        // Mostrar los datos en la tabla
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr class='tr'>";
                echo "<td class='td'><a href='detalles_equipo.php?equipo_id=" . $row["id"] . "'>" . $row["nombre"] . "</a></td>";
                echo "<td class='td'>" . $row["partidos_jugados"] . "</td>";
                echo "<td class='td'>" . $row["partidos_ganados"] . "</td>";
                echo "<td class='td'>" . $row["partidos_empatados"] . "</td>";
                echo "<td class='td'>" . $row["partidos_perdidos"] . "</td>";
                echo "<td class='td'>" . $row["goles_a_favor"] . "</td>";
                echo "<td class='td'>" . $row["goles_en_contra"] . "</td>";
                echo "<td class='td'>" . $row["diferencia_goles"] . "</td>";
                echo "<td class='td-points'>" . $row["puntos"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr class='tr'><td colspan='11'>No hay equipos registrados</td></tr>";
        }
        

        // Cerrar conexión
        $conn->close();
            ?>
        </tbody>
        
    </table>
    </div>
    </div>
  </section>

  <!--==========================
  Subscrbe Section
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Publicidad aquí</h3>
          <p class="subscribe-text">Escribinos para poder publicitar tu negocio/marca y asi poder tener un mayor alcance, no dudes en escribirnos!</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="#">Publicitar aquí</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Tabla de posiciones Femenino
  ============================-->
  <section id="femenino">
    <div class="container wow fadeInUp">
    
    <!-- Mostrar la tabla de posiciones -->
    
    <h2 class="h2">Tabla de Posiciones Femenino</h2>
    <div class="scrollTable">
    <table id="table">
        <thead class="thead">
            <tr class="tr"> 
                <th class="th">Equipo</th>
                <th class="th">PJ</th>
                <th class="th">PG</th>
                <th class="th">PE</th>
                <th class="th">PP</th>
                <th class="th">GF</th>
                <th class="th">GC</th>
                <th class="th">DIF</th>
                <th class="th">PTS</th>
            </tr>
        </thead>
        <tbody class="tbody">
            <?php
            // Conexión a la base de datos
            $host = "localhost";
            $user = "root";
            $password = "123";
            $database = "tabla_posiciones";

            $conn = new mysqli($host, $user, $password, $database);
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Función para calcular puntos y diferencia de goles
        function CalcPyD($partidos_ganados, $partidos_empatados, $goles_a_favor, $goles_en_contra) {
        $puntos = ($partidos_ganados * 3) + $partidos_empatados;
        $diferencia_goles = $goles_a_favor - $goles_en_contra;
        return [$puntos, $diferencia_goles];
    }

    // Consulta SQL para obtener los equipos ordenados por puntos (mayor a menor) y por diferencia de goles (mayor a menor)
        $sql = "SELECT * FROM equipos ORDER BY puntos DESC, diferencia_goles DESC";
        $result = $conn->query($sql);


        // Mostrar los datos en la tabla
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr class='tr'>";
                echo "<td class='td'><a href='detalles_equipo.php?equipo_id=" . $row["id"] . "'>" . $row["nombre"] . "</a></td>";
                echo "<td class='td'>" . $row["partidos_jugados"] . "</td>";
                echo "<td class='td'>" . $row["partidos_ganados"] . "</td>";
                echo "<td class='td'>" . $row["partidos_empatados"] . "</td>";
                echo "<td class='td'>" . $row["partidos_perdidos"] . "</td>";
                echo "<td class='td'>" . $row["goles_a_favor"] . "</td>";
                echo "<td class='td'>" . $row["goles_en_contra"] . "</td>";
                echo "<td class='td'>" . $row["diferencia_goles"] . "</td>";
                echo "<td class='td-points'>" . $row["puntos"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr class='tr'><td colspan='11'>No hay equipos registrados</td></tr>";
        }

        // Cerrar conexión
        $conn->close();
            ?>
        </tbody>
        
    </table>
    </div>
    </div>
  </section>

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Ingresa un Correo Valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       
        <div class="credits">
                <a href="https://es-la.facebook.com/Desainers DS" target="_blank" class="iconos-footer fa-brands fa-facebook"></a>
                <a href="https://www.instagram.com/contacto_desainers/" target="_blank" class="iconos-footer fa-brands fa-instagram"></a>
                <a href="mailto:contacto@gmail.com?subject=Me%20interesa%20tu%20pagina&body=Hola%20quiero%20ponerme%20en%20contacto%20con%20vos."
                    class="iconos-footer fa-brands fa-google"></a>
        </div>
         <div class="copyright">
          &copy; Copyright Desainers theme - Diseño y desarrollo web. Todos los derechos reservados
        </div>
        </div>
      </div>
    </div>
  </div>
</footer>
  <!-- #footer -->
  <a href="https://wa.me/2291415468?text=Hola ¿Como estas? me gustaria hacerte una consulta!" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
