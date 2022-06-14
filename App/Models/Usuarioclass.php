<?php

use App\Models\Connection;

class Usuario extends Connection{ 
    public function login($email, $senha){


        $conn = $this->connect();
        $sql = "select usuario from tb_pessoa where email = ':email' and senha = ':senha')";
        


        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', md5($senha));
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $dado = $stmt->fetch();

            $_SESSION['id'] = $dado['id'];

            return true;
        }else{
            return false;   
        }
    }
}