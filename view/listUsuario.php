
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Usuário</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1 style="margin-left:50px;margin-top:30px;">Usuários</h1>
    <div style="padding:30px">
        <table height="200px" width="400px" border="1px" style="margin-left:20px;">
            <thead>
                <tr>
                    <th style="text-align:center;font-weight:normal;">Login</th>
                    <th style="text-align:center;font-weight:normal;">Permissão</th>
                    <th style="text-align:center;"><a href="index.php"style="text-decoration:none;">Novo</a></th>
                </tr>
            </thead>
            <tbody style="padding:30px;">
                <?php
                    //importa o usuárioController.php
                    require_once 'Controller/UsuarioController.php';
                    //chama uma função PHP que permite informar a classe e o método que será acionado
                    $usuarios = call_user_func(array('UsuarioController','listar'));
                    //verifica se houve algum retorno
                    if(isset($usuarios) && !empty($usuarios)){
                        foreach($usuarios as $usuario){
                            ?>
                            <tr>
                                <!--Como retorno é um objeto, devemos chamar os get para mostrar o resultado-->
                                <td style="text-align:center;font-weight: bolder;"><?php echo $usuario->getLogin(); ?></td>
                                <td style="text-align:center"><?php echo $usuario->getPermissao(); ?></td>
                                <td style="text-align:center">
                                    <a href="index.php?action=editar&id=<?php echo $usuario->getId();?>" style="text-decoration:none;color:blue;">Editar</a>
                                    <a href="index.php?action=excluir&id=<?php echo $usuario->getId();?>" style="text-decoration:none;color:red;">Excluir</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }else{
                        ?>
                        <tr>
                            <td colspan="5">Nenhum Registro Encontrado</td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
	

	
</body>
</html>