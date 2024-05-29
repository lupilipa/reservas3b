<?php

require('../model/Usuario.class.php');

if(isset($_POST['autenticar_usuario'])){


$senha = $_POST['senha'];
$credencial = $_POST['credencial'];

$x = new Usuario();
$x->autenticarUsuario($credencial,$senha); 

}

if(isset($_POST['cadastrar_usuario'])){


$senha = $_POST['senha'];
$credencial = $_POST['credencial'];
$email = $_POST['email'];
$tipo = "funcionario";

    
$x = new Usuario();
$x->cadastrarUsuario($credencial, $senha, $email, $tipo); 
    
}

if(isset($_POST['excluir_usuario'])){


    $senha = $_POST['senha'];
    $senha_adm = $_POST['senha_adm'];
    $credencial = $_POST['credencial'];

        if ($credencial == "admin") {
            header("location:../view/adm/ger_esp_equip/ger_func/exc_func_error1.php");
        }else{
            if($senha_adm == "sreeadmcicerop@"){
            
            $x = new Usuario();
            
            $x->excluirUsuario($credencial, $senha);
            
            }
            
            else
            
            {
            
                header("location:../view/adm/ger_esp_equip/ger_func/exc_func_error3.php");

            }

        }
    
        

}



?>