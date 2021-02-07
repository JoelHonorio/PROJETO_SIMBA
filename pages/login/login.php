<?php
    require_once '../../php_action/db_connect.php';
    session_start();
    include_once '../../php_action/log.php';
	include_once '../global/header.php';
?>

<main class="form-signin">
    <form action="" method="POST">
        <img class="mb-2" src="../../assets/img/login/logo_V2.svg" width="230" height="230">

        <label for="email" class="visually-hidden">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">

        <label for="senha" class="visually-hidden">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="Lembrar"> Lembrar-me
            </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" name="btn-log" type="submit">Entrar</button>
    </form>
</main>

<?php

    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;

	include_once '../global/log_footer.php';

?>