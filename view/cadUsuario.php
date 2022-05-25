<?php
ob_start();
require_once './controller/UsuarioController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro de Usuário</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="view/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="view/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/css/util.css">
	<link rel="stylesheet" type="text/css" href="view/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="view/images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="" method="POST" name="cadUsuario" id="cadUsuario">
					<span class="login100-form-title">
						Faça seu Cadastro
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="login" placeholder="Login" value="<?php echo isset($usuario)?$usuario->getLogin():'' ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="senha1" placeholder="senha" value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="senha2" placeholder="Confirme a senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <select name="permissao" id="permissao" class="input100" style="border:none">
                            <option value="0" disabled selected style="color:black">Selecione</option>
							<option value="A"<?php echo isset($usuario) && $usuario->getPermissao()=='A'?'selected':''?>>Administrador</option>
            				<option value="C"<?php echo isset($usuario) && $usuario->getPermissao()=='C'?'selected':''?>>Comum</option>                       
						</select>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-badge" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100">
						<input class="input100" type="hidden" name="id" id='id' value="<?php echo isset($usuario)?$usuario->getId():''; ?>">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btnSalvar" id="btnSalvar">
							Cadastrar
						</button><br><br><br>
					</div>
					<?php
        //Verifica se o botão submit foi acionado 
        if(isset($_POST['btnSalvar'])){
				call_user_func(array('UsuarioController','salvar'));
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