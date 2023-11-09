<!--vamos a tomar los datos de la sesion para mostrar en la barra-->
<?php
    $session = session();
    $nombre = $session->get('usuario');
    $perfil = $session->get('id_perfil');
?>


<!-- navegacion-->
<nav class="navbar navbar-expand-lg navbar-secondary bg-body-tertiary ">
  <div class="container-fluid">
    <div class="navbar-header">
       <a class="navbar-brand" href="principal">
            <!--Logo de la marca de la empresa-->
            <img src="assets/img/camion.png" class="img-fluid" width= "70" height="50" alt="marca">
        </a>
    </div>   
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       <?php if (session()->id_perfil == 1):?>
          <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">ADMIN:   <?php echo session('nombre');?></a>
           </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Administrar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Usuarios</a></li>
              <li><a class="dropdown-item" href="#">Permisos</a></li>
            </ul>
          </li> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Listar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Usuarios</a></li>
              <li><a class="dropdown-item" href="#">Permisos</a></li>                         
            </ul>
          </li> 

          <li class="nav-item">
            <a class="btn btn-danger me-2" href="<?php echo base_url('logout');?>" tabindex ="-1" aria-disabled = "true">Cerrar Sesion</a>
          </li>
        </ul>
      </div>


        <?php elseif(session()->id_perfil == 5):?>
          <div class="btn btn-info active btnUser btn-sm">
            <a href="">Invitado:   <?php echo session('nombre');?></a>
           </div>

           <!--Nav bar para los invitados-->

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 

          <li class="nav-item">
            <a class="nav-link" href="quienes_somos">Quienes Somos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="acerca_de">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro">Trabaja con Nosotros</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Novedades
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Noticias</a></li>             
              <li><a class="dropdown-item" href="#">Sucursales</a></li>
              <li><a class="dropdown-item" href="#">Servicios adicionales</a></li>
            </ul>
          </li>  
            <li class="nav-item">
            <a class="btn btn-danger me-2" href="<?php echo base_url('logout');?>" tabindex ="-1" aria-disabled = "true">Cerrar Sesion</a>
          </li>     
        </ul>
      </div>

    <?php else:?>
        <!--Nav bar para personas no logueadas-->

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 

          <li class="nav-item">
            <a class="nav-link" href="quienes_somos">Quienes Somos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="acerca_de">Acerca de</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Novedades
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Noticias</a></li>             
              <li><a class="dropdown-item" href="#">Sucursales</a></li>
              <li><a class="dropdown-item" href="#">Servicios adicionales</a></li>
            </ul>
          </li>  

          <li class="nav-item">
            <a class="nav-link" href="registro">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
           </ul>
      </div>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      <?php endif;?>

      </div>
  </div>
</nav>