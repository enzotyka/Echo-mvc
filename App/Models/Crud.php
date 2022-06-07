<?php

namespace App\Models;

class Crud extends Connection
{
    public function cadastro(){

        if($_POST){
            $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
            $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_DEFAULT));
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $sexo = filter_input(INPUT_POST, 'sexo', FILTER_DEFAULT);
            $data = filter_input(INPUT_POST, 'data', FILTER_DEFAULT);
    
            $conn = $this->connect();
            $sql = "insert into tb_pessoa values(default, :usuario, :senha, :email, :sexo, :data_nascimento)";
    
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':senha',$senha);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':sexo',$sexo);
            $stmt->bindParam(':data_nascimento',$data);
            $stmt->execute();
    
            return $stmt;
        } 
    }

    public function logar(){

        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_DEFAULT));

        $conn = $this->connect();
        $sql = "select usuario from tb_pessoa where usuario = :usuario and senha = md5(:senha)";

        


        

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

    }



    public function create(){

    }

    public function read(){
        
    }

    public function update(){
        
    }

    public function delete(){
        
    }
}