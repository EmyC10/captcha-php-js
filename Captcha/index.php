<?php
session_start();
?>

<?php
$message = '';
if ( isset($_POST['securityCode']) && ($_POST['securityCode']!="")){
	if(strcasecmp($_SESSION['captcha'], $_POST['securityCode']) != 0){
		$message = "¡El texto introducido es incorrecto! Intente de nuevo.";
	}else{
		$message = "El texto introducido es correcto."; 
	}
} else {
	$message = "Introduzca el texto que se ve en la imagen"; 
}
include('main/header.php');
include("main/footer.php");
?>

<title> Captcha </title> 
<script src="js/load_captcha.js"></script>
<div class="container">
	<div class="row">			
		<div class="col-md-6">
			<div class="col-md-12">
				<form name="form" class="form" action="" method="post">	
					<div class="form-group">
						<label for="captcha" class="text-info">
						<?php if($message) { ?>
							<span class="text-warning"><strong><?php echo $message; ?></strong></span>
						<?php } ?>	
						</label><br>
						<input type="text" name="securityCode" id="securityCode" class="form-control" placeholder="">
					</div>
					<div class="form-group">								
					<label class="col-md-4 control-label">	<img style="border: 1px solid #D3D0D0" src="get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'></label>
					<div class="col-md-"><br>
       <a href="javascript:void(0)" id="reloadCaptcha"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a> Recargar captcha
    </div>
			
						
           <div class="col-md-"><br>
       <a href="javascript:void(0)" id="reloadCaptcha"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a> Recargar captcha
    </div>
						
					</div>	
                   <div class="clearfix"></div>									
					<div class="form-group">	
						<label class="col-md-4 control-label"> <input type="submit" name="submit" class="btn btn-info btn-md" value="Comprobar captcha">	</label>							
					</div>							
				</form>
			</div>
		</div>
	</div>
</div>