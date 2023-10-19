<?php
    use web\Models\UserModel;
    include('config.php');

    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        //Email and password received, with content
       
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new UserModel($conexao);
        $data = $user->find($email);

        if ($data["use_email"] == $email && $password == $data["use_senha"]) {

            header('Location: /home');

        } else {

            header('Location: /');
        }
    } else {

        header('Location: /');

    }