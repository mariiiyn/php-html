<?php
function conecta($nome, $sala,){
    if($usuario === "admin" && $senha === "1234"){
        header("Location: painel.php");
    }else{
        //Codifica a mensagem para evitar problemas com acentuação
        $msg = urlencode("Usuário ou senha inválidos!");
        header("Location: index.php?msg=$msg");
        exit;
    }
}
?>
        