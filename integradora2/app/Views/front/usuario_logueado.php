<div>
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <br><br>
            <?php if(session()->id_perfil ==1 ):?>
            	<div class="container text-center">
 				<h1>Bienvenido, <?= $_SESSION['usuario']['nombre'] ?></h1>

 				<!-- Botón para cerrar sesión -->
                <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar Sesión</a>
            	</div>

            <?php elseif(session()->id_perfil ==5 ):?>  ?>
                <!-- Contenido para visitantes-->
                <div class="container text-center">
               		<h1>Bienvenido, <?= $_SESSION['usuario']['nombre'] ?></h1>
                	<p>Por favor, comunicate con el administrador porporcionandole tu correo para que te asigne el perfil correspondiente</p>
            	</div>
                
            <?php endif; ?>
        </div>
    </div>
</div>
