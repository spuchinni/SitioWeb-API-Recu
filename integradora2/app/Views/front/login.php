<div class="container my-3 bd-white">
  <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-1">
      <h2>Iniciar Sesion</h2>
        <div class= "container my-3 bd-white">

          <!--Mensaje de error del Flash -->

          <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg')?>                  
                </div>
          <?php endif;?>

          <!--Inicio del formulario de login -->
        <form method="post" action="<?php echo base_url('/enviar-login'); ?>">
          <div class="mb-3 mt-3">
            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo" name="email">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contrseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass">
          </div>

           <div>
              <input type="submit" value="Ingresar" class="btn btn-success">
              <a class="btn btn-danger" href="<?php echo base_url('login');?>" role="button">Cancelar</a>
              <a class="btn btn-link" href="<?php echo base_url('./registro');?>" role="button">Registrarse</a>
            </div>
        </form>
        </div>
    </div>
  </div>
</div>