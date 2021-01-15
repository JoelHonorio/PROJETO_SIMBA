<?php
	include_once '../global/header.php';
?>

<main class="form-signin">
    <form>
        <img class="mb-2" src="../../assets/img/login/logo_V2.svg" width="230" height="230">

        <label for="inputEmail" class="visually-hidden">E-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required>

        <label for="inputPassword" class="visually-hidden">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="Lembrar"> Lembrar-me
            </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    </form>
</main>

<?php
	include_once '../global/footer.php';
?>