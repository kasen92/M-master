<section class="containerB containerRegistro">
	<form class="ajaxRegister" name="formlog" method="post" action="<?= APP_W.'register/registro'; ?>"> 	
		<div class="inner-addon left-addon">
	      	<i class="glyphicon glyphicon-user"></i>  
      		<input type="text" class="form-control" placeholder="Usuario" name="usuario" required/>
	    </div>
	    
	    <div class="inner-addon left-addon">
	      	<i class="glyphicon glyphicon-lock"></i>  
      		<input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required/>
	    </div>
		<div class="inner-addon">
			<input type="submit" value="Crear cuenta" id="btnRegistro">
		</div>
		<div class="inner-addon"></div>
	</form>
	<div id="mensajeRegistro"></div>
	
	<div class="windows8">
		<div class="wBall" id="wBall_1">
			<div class="wInnerBall"></div>
		</div>
		<div class="wBall" id="wBall_2">
			<div class="wInnerBall"></div>
		</div>
		<div class="wBall" id="wBall_3">
			<div class="wInnerBall"></div>
		</div>
		<div class="wBall" id="wBall_4">
			<div class="wInnerBall"></div>
		</div>
		<div class="wBall" id="wBall_5">
			<div class="wInnerBall"></div>
		</div>
	</div>

</section>