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
 				<h1>Bienvenido Admin</h1>
 			<!--Contenido para el administrador-->	
 				<img class="center" height="100px" width="100px"  src="<?php echo base_url('assets/img/admin.png');?>">
                
            	</div>

            <?php elseif(session()->id_perfil ==5 ):?>  
                <!-- Contenido para visitantes-->
                <div class="container text-center">
               		<h1>Bienvenido Invitado</h1>
               		<img class="center" height="100px" width="100px" src="<?php echo base_url('assets/img/invitado.png');?>">
               		<br><br>
                	<p>Por favor, envia un correo al administrador para que te asigne el perfil correspondiente, en caso de que sea necesario</p>
            	</div>
                
            <?php endif; ?>
        </div>
    </div>
</div>
