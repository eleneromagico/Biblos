<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>login</title>
        <link href="./recursos/login.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="login">
            <H1>Login</H1>
            <h4>Bilioteca PAI</h4>
            <form action="loginP.php" method="post">
                DNI<br />
                <input name="dni" type="text" size="20" maxlength="20" /><br />
                Contrseña<br />
                <input name="clave" type="password" size="20" maxlength="20" /><br />
                Tema<br />
                <select name="tema" size="1" >
                    <option name="tema" value="0">DEFECTO</option>
                    <option name="tema" value="1">tema1</option>
                    <option name="tema" value="2">tema2</option>
                </select>
                <input type="submit" value="Logearse">
                <input type="reset" value="limpiar">
            </form>
        </div>
    </body>
</html>
