<!doctype html>
<html lang="es">

<head>
  <title>TaskTeam - Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main class="container">

    <div class="row">
      <div class="col-md-4">
      </div>

      <div class="col-md-4">
        </br>
        </br>

        <div class="card">

          <div class="card-header">
            Bienvenido a TaskTeam!
          </div>
          <div class="card-body">

            <!-- MENSAJE ERROR LOGIN -->
            <?php if (isset($mensaje)) { ?>
              <div class="alert alert-danger" role="alert">
                <strong>
                  <?php echo $mensaje ?>
                </strong>
              </div>
            <?php } ?>

            <!-- FORMULARIO: LOS DATOS ENVIADOS POR EL FORMULARIO SON MANEJADOS POR EL ARCHIVO LOGIN.PHP  -->
            <form action="" method="post">
              <div class="mb-3">
                <label for="mail_input" class="form-label">Email:</label>
                <input type="text" class="form-control" name="mail_input" id="mail_input" aria-describedby="helpId"
                  placeholder="Email de acceso">
              </div>

              <div class="mb-3">
                <label for="password_input" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="password_input" id="password_input"
                  placeholder="Contraseña de acceso">
              </div>

              <button type="submit" class="btn btn-primary">Acceder</button>
            </form>

          </div>
        </div>
      </div>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>