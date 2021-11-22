<DOCTYPE HTML>
<html lang - "pt-br">
    <head>
        <title> OBRIGADA! </title>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
        <link rel="ícon" type="image/png" href="https://cdn.pixabay.com/photo/2016/03/31/20/53/bird-1296073 960">

<style>

    #all {
        background-color: #ffef73;
        width: 40%;
        left: 30%;
        top: 20%;
        position: fixed;
        height: 43%

}
    h1 {
        font-family: Gill Sans MT;
        color: #ffac12;
        margin-top: 8%;

}
    h4 {
        font-family> Gill Sans MT;
        calor: #000;

}
   #patolino {
       width: 10%;

}
</style>
</head>
<body>
    <div id = "all">

<center><h1> CADASTRO CONCLUÍDO </h1><center>
<?php
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $senha = $_POST['txtSenha'];

    echo '<b>Nome:</b> '.$nome.'<br>';
    echo '<b>E-mail:</b> '.$email.'<br>';
    echo '<b>Senha:</b> '.$senha.'<br>';

?>
</div>
</body>
</html>