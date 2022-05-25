
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Imoveis</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1 style="margin-left:50px;margin-top:30px;">Usuários</h1>
    <div style="padding:30px">
        <table height="200px" width="400px" border="1px" style="margin-left:20px;">
            <thead>
                <tr>
                <th style="text-align:center;font-weight:normal;">Descricao</th>
                <th style="text-align:center;font-weight:normal;">Foto</th>
                <th style="text-align:center;font-weight:normal;">Valor</th>
                <th style="text-align:center;font-weight:normal;">Tipo</th>
                <th style="text-align:center;"><a href="index.php?page=imovel"style="text-decoration:none;">Novo</a></th>
                </tr>
            </thead>
            <tbody style="padding:30px;">
            <?php
                require_once './controller/ImovelController.php';

                $imoveis = call_user_func(array("ImovelController","listar"));


                if(isset($imoveis)){
                    foreach ($imoveis as $imovel){
                        ?>
                        <tr>
                            <td><?php echo $imovel->getDescricao(); ?></td>
                            <td><?php echo $imovel->getFoto(); ?></td>
                            <td><?php echo $imovel->getValor(); ?></td>
                            <td><?php echo $imovel->getTipo(); ?></td>
                            <td>
                                    <a href="index.php?action=editar&page=imovel&id=<?php echo $imovel->getId();?>" style="text-decoration:none;color:blue;">Editar</a>
                                    <a href="index.php?action=excluir&page&id=<?php echo $imovel->getId();?>" style="text-decoration:none;color:red;">Excluir</a>
                            </td>
                         </tr>
                         <?php
                    }
                }else{
                    ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
	

	
</body>
</html>

