<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administracion de Usuario</title>
  <link rel="stylesheet" href="administration.css">
  <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
  <?php
  session_start();
  include 'controladores/fetch_user_data.php';

  ?>
  <header >
      <div class="header-container">
        <div class="wrapper-name">
            <i class="fa-solid fa-bars bars" id="dropdown"></i>
        </div>
        <div class="wrapper">
            <i class="fa-solid fa-user-large img-user user" id="toggle-user"></i>
        </div>
      </div>
  </header>
  <div class="full-content">
    <aside class="menu">
      <div class="title_admin">
        <h2>Administración</h2>
      </div>
      <nav>
        <ul>
          <li class="bottom">
            <a href="administration.php" title="Administracion de Usuario" class="active">
              <i class="fa-solid fa-user-shield"></i>
              <span>Usuario</span>
            </a>
          </li>
          <?php if ($_SESSION['tipo_usuario'] != 'user') { ?>
            <li class="bottom">
              <a href="accounts.php" title="Administración de Cuentas">
                <i class="fa-solid fa-computer"></i>
                <span>Cuentas</span>
              </a>
            </li>
            <li class="bottom">
              <a href="staff.php" title="Administración del personal">
                <i class="fa-solid fa-users"></i>
                <span>Personal</span>
              </a>
            </li>
          <?php } ?>
        </ul>
      </nav>
      <div class="back">
        <a href="home.php" title="Volver al inicio">
          <i class="fa-solid fa-circle-left"></i>
          <span>Volver</span>
        </a>
      </div>
    </aside>
    <main>
      <div class="box">
        <div class="taps-box">
          <button class="taps active">Información</button>
          <button class="taps">Editar</button>
        </div>

        <div class="content-box">
          <div class="block active">
            <h1>Administración de Usuario</h1>
            <div class="card">
              <div class="text">
                <p><?php echo $_SESSION['username']; ?></p>
                <h3><?php echo $primer_nombre_persona . ' ' . $primer_apellido_persona; ?></h3>
                <p><?php echo $tipo_usuario == 'admin' ? 'Director Gerente' : 'Empleado'; ?></p>
              </div>
            </div>

            <div class="card">
              <h2>Información de la Persona</h2>
              <div class="align">
                <div class="input_product">
                  <input type="number" name="ci" class="input" readonly value="<?php echo $ci_persona; ?>">
                  <span>Cedula</span>
                </div>
                <div class="input_product">
                  <input type="number" name="phone" class="input" readonly value="<?php echo $num_telefono; ?>">
                  <span>Teléfono</span>
                </div>
                <div class="input_product">
                  <input type="text" name="mail" class="input" readonly value="<?php echo $correo; ?>">
                  <span>Correo electronico</span>
                </div>
              </div>
              <div class="align">
                <div class="input_product">
                  <input type="text" name="municipio" class="input" readonly value="<?php echo $municipio; ?>">
                  <span>Municipio</span>
                </div>
                <div class="input_product">
                  <input type="text" name="parroquia" class="input" readonly value="<?php echo $parroquia; ?>">
                  <span>Parroquía</span>
                </div>
                <div class="input_product">
                  <input type="text" name="ciudad" class="input" readonly value="<?php echo $ciudad; ?>">
                  <span>Ciudad</span>
                </div>
              </div>
              <div class="align">
                <div class="input_product">
                  <input type="text" name="estado" class="input" readonly value="<?php echo $estado; ?>">
                  <span>Estado</span>
                </div>
                <div class="input_product big">
                  <input type="text" name="adress" class="input" readonly value="<?php echo $direccion; ?>">
                  <span>Dirección</span>
                </div>
              </div>

            </div class="input_product">
            <div class="card qsegurity">
              <h2>Seguridad</h2>
              <div class="align">
                <div class="input_product">
                  <input type="password" name="respuestaUno" class="input">
                  <span><?php echo $pregunta_seguridad1; ?></span>
                </div>
                <div class="input_product">
                  <input type="password" name="respuestaDos" class="input">
                  <span><?php echo $pregunta_seguridad2; ?></span>
                </div>
                <div class="input_product">
                  <input type="password" name="respuestaTres" class="input">
                  <span><?php echo $pregunta_seguridad3; ?></span>
                </div>
              </div>
            </div>
          </div>

          <div class="block">
            <h1>Editar información</h1>
            <div class="card">
              <div class="text">
                <div class="input_product">
                  <input type="number" name="nombreUsuario" class="input">
                  <span>Nombre usuario</span>
                </div>
                <div class="input_product">
                  <input type="number" name="nombrePersona" class="input">
                  <span>Nombre Persona</span>
                </div>
                <div class="input_product">
                  <input type="number" name="cargo" class="input">
                  <span>cargo</span>
                </div>
              </div>
            </div>

            <div class="card">
              <h2>Información de la Persona</h2>
              <div class="align">
                <div class="input_product">
                  <input type="number" name="ci" class="input">
                  <span>Cedula</span>
                </div>
                <div class="input_product">
                  <input type="number" name="phone" class="input">
                  <span>Teléfono</span>
                </div>
                <div class="input_product">
                  <input type="text" name="mail" class="input">
                  <span>Correo electronico</span>
                </div>
              </div>
              <div class="align">
                <div class="input_product">
                  <input type="text" name="municipio" class="input">
                  <span>Municipio</span>
                </div>
                <div class="input_product">
                  <input type="text" name="parroquia" class="input">
                  <span>Parroquía</span>
                </div>
                <div class="input_product">
                  <input type="text" name="ciudad" class="input">
                  <span>Ciudad</span>
                </div>
              </div>
              <div class="align">
                <div class="input_product">
                  <input type="text" name="estado" class="input">
                  <span>estado</span>
                </div>
                <div class="input_product big">
                  <input type="text" name="adress" class="input">
                  <span>Dirección</span>
                </div>
              </div>

            </div class="input_product">
            <div class="card qsegurity">
              <h2>Preguntas de Seguridad</h2>
              <div class="align">
                <div class="input_product">
                  <input type="password" name="respuestaUno" class="input">
                  <span>Pregunta N°1</span>
                </div>
                <div class="input_product">
                  <input type="password" name="respuestaDos" class="input">
                  <span>Pregunta N°2</span>
                </div>
                <div class="input_product">
                  <input type="password" name="respuestaTres" class="input">
                  <span>Pregunta N°3</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <script src="system.js"></script>
  <script src="js/administration.js"></script>

</body>

</html>