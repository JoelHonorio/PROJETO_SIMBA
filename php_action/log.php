<?php
if(isset($_POST['btn-log'])):
        $erros = array();
        $email = mysqli_escape_string($connect, $_POST['email']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if(empty($email) or empty($senha)):
            $erros[] ="<li> Os campos login e senha precisam estar preenchidos. </li>";
        else:
            $sql = "select email from usuario where email = '$email'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0):

                $sql = "select * from usuario where email = '$email' and senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: ../main/index.php');
                else:
                    $erros[] = "<li> Usuário ou senha não conferem. </li>";
                endif;

            else:
                $erros[] = "<li> Usuário não existe. </li>";
            endif;
        endif;
    endif;