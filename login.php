<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="images/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="images/assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="images/assets/css/style.css" rel="stylesheet">

  <title>Login</title>

  <script>
    function validateForm() {
      const usuario = document.forms["loginForm"]["nombre"].value;
      const password = document.forms["loginForm"]["contrasena"].value;
      let valid = true;

      if (usuario == "") {
        alert("El campo de usuario no puede estar vacío.");
        valid = false;
      }

      if (password == "") {
        alert("El campo de contraseña no puede estar vacío.");
        valid = false;
      } else if (password.length < 1) {
        alert("La contraseña debe tener al menos 6 caracteres.");
        valid = false;
      }

      return valid;
    }
  </script>
</head>

<body>
  <section class="form-02-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="_lk_de">
            <div class="form-03-main">
              <div class="logo">
                <img src="images/assets/images/user.png">
              </div>
              <form name="loginForm" action="control/control.php" method="post" onsubmit="return validateForm()">
                <div class="d-flex align-items-center mb-3 pb-1">
                  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                  <span class="h1 fw-bold mb-0">Inicia Sesion</span>
                </div>
                <br>
                <div class="form-outline mb-4">
                  <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder=" " name="nombre" />
                  <label class="form-label" for="form2Example17">Usuario</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder=" " name="contrasena" />
                  <label class="form-label" for="form2Example27">Password</label>
                </div>

                <div class="pt-1 mb-4">
                  <button class="btn btn-dark btn-lg btn-block" type="submit" value="ingresar">Login</button>
                </div>
                <br>
                <a href="admin/RegUsu.php" class="">REGISTRARSE</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
