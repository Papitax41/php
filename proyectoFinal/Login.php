<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Login</title>
</head>

<body>
    <div class="login-form">
        <header>
        </header>
        <section>
            <?php
            error_reporting(0);
            function getUsuario()
            {
                return $_POST['txtUsuario'];
            }
            function getPassword1()
            {
                return $_POST['txtPassword1'];
            }
            function getPassword2()
            {
                return $_POST['txtPassword2'];
            }
            $usuario = getUsuario();
            $clave1 = getPassword1();
            $clave2 = getPassword2();

            ?>
            <center>
                <form action="Login.php" method="POST">
                    <center>
                        <table border="0" cellpadding="5" cellspacing="5" aling="center">
                    </center>
                    <tr>
                        <td>Usuario</td>
                        <td><input type="User" name="txtUsuario" maxlength="6" value="" /></td>
                    </tr>
                    <tr>
                        <td>Contraseña1</td>
                        <td><input type="password" name="txtPassword1" maxlength="5" value="" /></td>
                    </tr>
                    <tr>
                        <td>Contraseña2</td>
                        <td><input type="password" name="txtPassword2" maxlength="5" value="" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2" id="centrado">
                            <input type="submit" value="INGRESAR" name="btnIngresar" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" id="centrado">
                            <?php
                            error_reporting(0);
                            if (isset($_POST['btnIngresar'])) {
                                include("Contraseña.php");
                                if (valida($usuario, $clave1, $clave2) == 'ok')
                                    echo "bienvenido";
                                else {
                                    echo 'error de datos..';
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    </table>
                </form>
            </center>
        </section>
    </div>
    <footer>
        <h6>
            <center>DERECHOS RESERVADOS 2023</center>
        </h6>
    </footer>
</body>

</html>