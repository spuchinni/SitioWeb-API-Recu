<div class="container my-3 bd-white">
<section>
  <div class="row">
      <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-1">
        <h2>Registrar Usuario</h2>

            <?php $validation = \Config\Services::validation();?>

            <!--inicio del Formulario-->
            <form method="post" action="<?php echo base_url('enviar-form')?>">

              <?=csrf_field();?>
              <?=csrf_field();?>
              <?php if(!empty (session()->getFlashdata('fail'))):?>
              <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
            <?php endif?>
                <?php if(!empty (session()->getFlashdata('success'))):?>
              <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
              <?php endif?>

              <div class="mb-1">
                <label for="exampleNombre" class="form-label">Nombre</label>
                <input name= "nombre" type="text" class="form-control" id="exampleNombre" aria-describedby="textHelp" placeholder="Nombre">
                <div id="textHelp" class="form-text"></div>
                <!--Validacion de datos -- Error -->
               <?php if ($validation->getError('nombre')) { ?>
                  <div class='alert alert-danger mt-2'>
                    Por favor, ingrese su Nombre <!--utilizo el div solamente para mostrar el error-->
                  </div>
                <?php } ?>

              </div>
              <div class="mb-3">
                <label for="exampleApellido" class="form-label">Apellido</label>
                <input name ="apellido" type="text" class="form-control" id="exampleApellido" aria-describedby="textHelp" placeholder="Apellido">
                 <!--Validacion de datos -- Error -->

               <?php if ($validation->getError('apellido')) { ?>
                  <div class='alert alert-danger mt-2'>
                    Por favor, ingrese su apellido <!--utilizo el div solamente para mostrar el error-->
                  </div>
                <?php } ?>

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@algo.com">
                 <!--Validacion de datos -- Error -->

                <?php if ($validation->getError('email')) { ?>
                  <div class='alert alert-danger mt-2'>
                    Por favor, ingrese un Email <!--utilizo el div solamente para mostrar el error-->
                  </div>
                <?php } ?>

              </div>
              <div class="mb-3">
                <label for="exampleUsuario" class="form-label">Usuario</label>
                <input name="usuario" type="text" class="form-control" id="exampleUsuario" aria-describedby="textHelp" placeholder="Usuario">
                 <!--Validacion de datos -- Error -->
                <?php if ($validation->getError('usuario')) { ?>
                  <div class='alert alert-danger mt-2'>
                    Por favor, ingrese un Usuario <!--utilizo el div solamente para mostrar el error-->
                  </div>
                <?php } ?>

              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1"aria-describedby="passwordHelp" placeholder="Minimo 6 caracteres">
                 <!--Validacion de datos -- Error -->

                <?php if ($validation->getError('pass')) { ?>
                  <div class='alert alert-danger mt-2'>
                    Por favor, ingrese una Clave o Contraseña <!--utilizo el div solamente para mostrar el error-->
                  </div>
                <?php } ?>

              <div class="mb-3form-check">
                <input type="submit" value="Guardar" class="btn btn-success">
                <input type="reset" value="Cancelar" class="btn btn-danger">
              </div>
            </form>
        </div>
</div>
</section>
</div>