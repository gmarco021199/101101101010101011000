<?php
	include(TEMPLATES."/header.php");	
?>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<div class="container">
			<div class="row h-100">   				   				
    		<div class="col-sm-12 my-auto">
        		<!-- <div class="card card-block w-25 mx-auto">I am Groot.</div> -->
        		<div class="card card-block w-50 mx-auto ">
        			<!-- <img src="/img/LogoBlanco.png" width="6em" class="card-img-top" alt="..."> -->
				  	<h5 class="card-header">Tl&aacute;loc Seguros -  CotizadorAgentes</h5>
				  	<div class="card-body">
				  		<!-- <form action="login.php" method="POST"> -->
					    	<div class="form-group">
    							<label for="usuario">Usuario</label>
    							<input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuarioHelp" required="">
  							</div>
	  						<div class="form-group">
	    						<label for="contrasenia">Contrase&ntilde;a</label>
	    						<input type="password" class="form-control" id="contrasenia" name="contrasenia" aria-describedby="contraseniaHelp" required="">
	    						<small id="contraseniaHelp" class="form-text text-muted">Usar las mismas credenciales del SIT.</small>
	  						</div>
	  						<p class="right">	  							
	  							<button class="btn btn-danger right" id="cancelar">Cancelar</button>  								
	  							<button class="btn btn-primary right" id="aceptar">Aceptar</button>
	  						</p>
	  					<!-- </form>	  						 -->
				  	</div>
				</div>
    		</div>
		</div>
	</div>
	<script type="text/javascript" src="<?=WEB_JS?>/login.js"></script>
<?php
	include(TEMPALTES."/footer.php");
?>