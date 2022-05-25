<?php
require_once 'model/Imovel.php';

class ImovelController{
    
    public static function salvar(){

        $imovel = new Imovel;
        $imovel->setId($_POST["id"]);
        $imovel->setDescricao($_POST["descricao"]);
        $imovel->setFoto($_POST["foto"]);
        $imovel->setValor($_POST["valor"]);
        $imovel->setTipo($_POST["tipo"]);

        $imovel->save();
    }

    public static function listar(){

        $imoveis = new Imovel;

        return $imoveis->listAll();
    }

    public static function editar($id){

        $imoveis = new Imovel;

        $imoveis = $imoveis->find($id);

        return $imoveis;
    }

    public static function excluir($id){

        $imoveis = new Imovel;

        $imoveis = $imoveis->remove($id);
    } 
}
?>