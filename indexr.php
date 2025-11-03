<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/modal_login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <body>
    
    <header class="header">
      <div class="header-content">
        <a href="#" class="logo">RESTAURANTE</a>
  <!-- Mennú -->
        <nav class="navbar navbar-expand-md bg-body-tertiary">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Menú</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Platos y Precios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Locales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contactos</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="¿Qué busca?" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
        <div class="header-actions">
          <div class="dropdown">
            <a href="#" class="header-link" onclick="toggleDropdown(event)">
              <span class="greeting">Hola,</span>
              <span class="action">
                <?php
                  if(isset($nombre_user)){
                  echo $nombre_user;  
                  }else{
                    echo "Iniciar Sesión";
                  }
                ?>
              </span>
            </a>
            <div class="dropdown-menu">
              <?php 
                if(!isset($_SESSION['user_sesion'])){
                  ?>
                    <a href="#" class="dropdown-item" id="btnLogin">Inicia sesión</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" id="btnRegistrarUser">Regístrate</a>
                 
                  <?php
                }else{
                  ?>
                    <div class="dropdown-divider"></div>
                    <a href="php/cerrar_sesion.php" class="dropdown-item">Cerrar Sesión</a> 
                  <?php
                }
              ?>
            </div>
        </div>
      </div>

    </header>
      <!--Platos -->
      <div class="container-platos">
        <div class="row text-center px-4 py-5">
          <h2>CATEGORIAS</h2>
          <h4>Chifa</h4>
          <div class="col-sm-6">
            
            <div class="card mt-5 mx-5">
              <img src="https://static.wixstatic.com/media/9755d8_1cc8a76c98ef41f99c17e2f89a7fa325~mv2.jpg/v1/fill/w_1104,h_828,fp_0.50_0.50,q_90,enc_avif,quality_auto/9755d8_1cc8a76c98ef41f99c17e2f89a7fa325~mv2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5>Aeropuerto</h5>
                <p class="card-text">S/. 12.00</p>
              </div>
            </div>
          </div>
          <h4>Selva</h4>
          <div class="col-sm-6">
            
            <div class="card mt-5 mx-5">
              <img src="https://www.ytuqueplanes.com/imagenes/fotos/novedades/interna-campana-selva-nota-6-5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5>Patarashca</h5>
                <p class="card-text">S/. 10.00</p>
              </div>
            </div>
        </div>
      </div>
    <!-- Footer -->
    <div class="container-footer">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
      <div class="col mb-3 logo">Restaurante<a href="/"
          class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none" aria-label="Bootstrap"> <svg
            class="bi me-2" width="40" height="32" aria-hidden="true">
          </svg> </a>
        <p class="fs-4 px-3"><a href="#"><i class="bi bi-facebook"></a></i></p>
        <p class="fs-4 px-3"><a href="#"><i class="bi bi-youtube"></a></i></p>
        <p class="fs-4 px-3"><a href="#"><i class="bi bi-twitter"></a></i></p>
        <p class="fs-4 px-3"><a href="#"><i class="bi bi-linkedin"></a></i></p>
        <p class="fs-4 px-3"><a href="#"><i class="bi bi-instagram"></a></i></p>
      </div>
      <div class="col mb-3"></div>
      <div class="col mb-3">
        <h5>Nosotros</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Sobre el Restaurante</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Despacho</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Términos y Condiciones</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Políticas de privacidad</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Nuestras Locales</a>
          </li>
        </ul>
      </div>
      <div class="col mb-3">
        <h5>Contáctanos</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">restaurante.com</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">(01) 395-8054</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Av.Revolución 845</a>
          </li>
        </ul>
      </div>
      <div class="col mb-3">
        <h5>Servicio al cliente</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Libro de Reclamaciones</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Preguntas Frecuentes</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Metodos de pago</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary"></a>
          </li>
        </ul>
      </div>
    </footer>

 <!-- The Modal LOGIN -->
  <div id="modalLogin" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Iniciar Sesión</h2>
      <form action="php/iniciar_sesion.php" method="POST">
        <label class="labelModal" for="correo">Correo</label>
        <input class="inputGeneral" type="email" name="ucorreo" id="correo" placeholder="Ingresa tu usuario" />
        <label class="labelModal" for="password">Contraseña</label>
        <input
          name="upass"
          type="password"
          id="password"
          class="inputGeneral"
          placeholder="Ingresa tu contraseña" />
        <button type="submit" class="btnEntrarLogin">Entrar</button>
      </form>
    </div>
  </div>

  <div id="modalRegistrarUser" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="closeRUser">&times;</span>
      <h2>Registrar Usuario</h2>
      <form action="php/registrarr_usuario.php" method="POST">
        <label class="labelModal" for="nombre_completo">Nombre Completo</label>
        <input class="inputGeneral" type="text" id="nombre_completo" name="nom_comp" placeholder="Ingresa tu usuario" />
        <label class="labelModal" for="correo">Correo</label>
        <input class="inputGeneral" type="text" id="correo" name="correo" placeholder="Ingresa tu Correo Electrónico" />
        <label class="labelModal" for="password">Contraseña</label>
        <input
          name="pass"
          type="password"
          id="password"
          class="inputGeneral"
          placeholder="Ingresa tu contraseña" />
        <button type="submit" class="btnEntrarLogin">Entrar</button>
      </form>
    </div>
  </div>


  <script src="assets/js/toggledropdown_login.js"></script>
  <script src="assets/js/modal-login.js"></script>
  <script src="assets/js/modal-registro-usuario.js"></script>


  <?php 
    if(isset($_GET['msj'])){
      if($_GET['msj'] == "ok"){
        ?>
          <script>
              Swal.fire({
              icon: "success",
              title: "Registrado",
              text: "¡Usted esta registrado en el sistema!",
              });
          </script>
        <?php
      }else{
        ?>
          <script>
              Swal.fire({
              icon: "error",
              title: "Oops!",
              text: "¡Usted no esta registrado en el sistema!",
              });
          </script>
        <?php
      }
    }

    if(isset($_GET['error'])){
      if($_GET['error'] == "user"){
        ?>
           <script>
              Swal.fire({
              icon: "error",
              title: "Oops!",
              text: "¡Contraseña o Correo incorrecta!",
              });
          </script>
        <?php
      }
    }


  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>