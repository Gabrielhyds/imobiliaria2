<?php
ob_start();
require_once "./controller/ImovelController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro de Imoveis</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="view/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST" name="cadImovel" id="cadUImovels" enctype="multpart/form-data">
					<span class="login100-form-title">
                        Cadastro de imovel
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="descricao" placeholder="descricao" value="<?php echo isset($imovel)?$imovel->getDescricao():'';?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="foto" placeholder="foto"  value="<?php echo isset($imovel)?$imovel->getFoto():'';?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="hidden" name="id" id='id' value="<?php echo isset($imovel)?$imovel->getId():'';?>">
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="number" name="valor" placeholder="valor"  value="<?php echo isset($imovel)?$imovel->getValor():'';?>">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="file" name="foto" id="foto" placeholder="foto">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <select name="tipo" id="tipo" class="input100" style="border:none">
                            <option value="0" disabled selected style="color:black">Selecione</option>
                            <option value="A" <?php echo isset($imovel) && $imovel->getTipo()=='A'?'selected':''?>>Apartamento</option>
                            <option value="C" <?php echo isset($imovel) && $imovel->getTipo()=='C'?'selected':''?>>Casa</option>
                            <option value="T" <?php echo isset($imovel) && $imovel->getTipo()=='T'?'selected':''?>>Terreno</option>
						</select>
                            <span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="btnSalvar" id="btnSalvar">
						Cadastrar
					</button>
					</div>
					<div>
						<?php
							if(isset($_POST["btnSalvar"])){
								call_user_func(array("ImovelController","salvar"));
								header('Location:index.php?action=listar');
								ob_end_flush();
							}
						?>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>