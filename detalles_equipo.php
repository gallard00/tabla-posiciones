<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["equipo_id"])) {
    $equipo_id = $_GET["equipo_id"];
    
    // Conexión a la base de datos
    $host = "localhost";
    $user = "root";
    $password = "123";
    $database = "tabla_posiciones";

    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    
    // Obtener detalles del equipo
    $equipo_sql = "SELECT * FROM equipos WHERE id = $equipo_id";
    $equipo_result = $conn->query($equipo_sql);
    
    if ($equipo_result->num_rows > 0) {
        $equipo_row = $equipo_result->fetch_assoc();
        $nombre_equipo = $equipo_row["nombre"];
        
        // Obtener resultados de partidos del equipo
        $partidos_sql = "SELECT * FROM partidos WHERE equipo_id = $equipo_id";
        $partidos_result = $conn->query($partidos_sql);
    } else {
        echo "Equipo no encontrado.";
        exit;
    }
    
    $conn->close();
} else {
    echo "Equipo no especificado.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Equipo - <?php echo $nombre_equipo; ?></title><!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/26ef8ebed4.js" crossorigin="anonymous"></script>
</head>
<body>

  <div id="preloader"></div>

  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="" alt="" title="" /></img></a>
        <a href="#hero"><img src="" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
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
  Services Section
  ============================-->
  <section id="masculino">
    <div class="container wow fadeInUp">
    
    <!-- Mostrar la tabla de posiciones -->
    <h2 class="h2">Detalles del Equipo - <?php echo $nombre_equipo; ?></h2>
    <div class="scrollTable">
    <table id="table">
        <thead class="thead">
            <tr class="tr">
                <th class="th">Fecha</th>
                <th class="th">Local</th>
                <th class="th">Goles Local</th>
                <th class="th">Goles Visitante</th>
                <th class="th">Visitante</th>
                <th class="th">Resultado</th> 
            </tr>
        </thead>
        <tbody class="tbody">
        <?php
        if ($partidos_result->num_rows > 0) {
            while ($partido_row = $partidos_result->fetch_assoc()) {
                echo "<tr class='tr'>";
                echo "<td class='td'>" . $partido_row["fecha"] . "</td>";
                echo "<td class='td'>" . $partido_row["local"] . "</td>";
                echo "<td class='td'>" . $partido_row["goles_local"] . "</td>";
                echo "<td class='td'>" . $partido_row["goles_visitante"] . "</td>";
                echo "<td class='td'>" . $partido_row["visitante"] . "</td>";
          

                $resultado = $partido_row["resultado"];
                if ($resultado === 'Ganó') {
                echo "<td class='win'>$resultado</td>";
              } elseif ($resultado === 'Perdió') {
                echo "<td class='lose'>$resultado</td>";
              } else {
                echo "<td>$resultado</td>";
              }
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No se encontraron partidos.</td></tr>";
        }
        
        ?>
        </tbody>
    </table>
    </div>
    <a href="index.php">Volver a la tabla de posiciones</a>
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