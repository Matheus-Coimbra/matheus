<?php 

class Especialidade{
private $id_especialidade;
private $especialidade;
private $valor_dia;

    function getId(){
        return $this->id_especialidade;
    }

    function setId($id){
        $this->id_especialidade = $id;
    }

    function getEspecialidade(){
        return $this->Especialidade;
    }

    function setEspeciakidade($especialidade){
        $this->especialidade = $especialidade
    }

    function getValor_dia(){
        return $this->valor_dia;
    }

    function setValor_dia(){
        $this->valor_dia = $valor_dia
    }

    function add(){
        try{
            $sql = "insert into especialidade (especialidade, valor_dia) values (:especialidade, :valor)";~
            
            require_once("dao.php");
            $dao = new Dao;
            $stman = $dao->conecta()->prepare($sql);
            $stman->bindParam(":especialidade", getEspecialidade());
            $stman->bindParam(":valor", getValor_dia());

            $stman->Execute();
            aviso("Codastrado!");
        } catch(Exception $e){
            erro("Erro ao cadastrar!" . $e->getMessage());
        }
    }

    function listAll(){
        try {
            $sql = "select * from especialidade";
            require_once("dao.php");
            $dao =new Dao;
            $stman = $dao->conecta()->prepare($sql);
            $stman->execute();
            $result = $stman->fetchAll(PDO: :FETCH_OBJ);
        } catch (Exception $e){
            erro("Erro ao listar!" . $e->getMessage());
        }
        return $result;
        
    }
}