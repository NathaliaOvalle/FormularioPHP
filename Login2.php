<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css.css">
    <title>Login</title>
</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Formulario Login</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="Login2.php" class="login" method="post">
            <pre>
            </pre>
            <div class="field">
              <input type="text" name="Usuario" id="Usuario" placeholder="Usuario" required>
            </div>
            <div class="field">
              <input type="password" name="Contraseña" id="Contraseña" placeholder="Contraseña" required>
            </div>
            <div class="pass-link"><a href="#">Olvido su Contraseña?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="INGRESAR">
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php
   $Usuario= $_POST['Usuario'];
   $Contraseña= $_POST['Contraseña'];

    if ($Usuario == 'admin' && $Contraseña == '1234')
    {
        header ('Location: validar.php');
    }
    if (empty($Usuario)) {
        echo "El usuario es obligatorio";
    }
    if (empty($Contraseña)) {
        echo "La contraseña es obligatoria";
    }
    ?>
</body>
</html>