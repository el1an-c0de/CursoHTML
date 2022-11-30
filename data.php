<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>Formulario con Grid</title>
  </head>
  <script
    src="https://kit.fontawesome.com/add6c239a7.js"
    crossorigin="anonymous"
  ></script>

  <body>
    <section>
      <!-- Equipo de etiquetas pongan algo de su magia aqui -->
    </section>
    <div class="content">
      <h1 class="logo">Registro De <span>Personal</span></h1>
      <div class="contacto-wrapper">
        <div class="contact-form">
          <form method="POST" action="data.php">
            <fieldset>
              <legend>Datos personales</legend>
              <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" required pattern="[A-Za-z]+" required/>
              </p>
              <p>
                <label for="nombre">Nombres</label>
                <input type="text" name="nombre" id="nombre" required/>
              </p>
              <p>
                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" id="telefono" required/>
              </p>
              <p>
                <label for="edad">Edad</label>
                <input type="number" max="200" min="18" name="edad" id="edad" />
              </p>
              <p>
                <label for="">Fecha Nacimiento</label>
                <input type="date" required/>
              </p>
              <p>
                <label for="provincia">Provincia</label>
                <select id="provincia" name="provincia" required>
                  <option value="Azuay">Azuay</option>
                  <option value="Bolívar">Bolívar</option>
                  <option value="Cañar">Cañar</option>
                  <option value="Chimborazo">Chimborazo</option>
                  <option value="Cotopaxi">Cotopaxi</option>
                  <option value="El Oro	">El Oro</option>
                  <option value="Esmeraldas">Esmeraldas</option>
                  <option value="Galápagos">Galápagos</option>
                  <option value="Guayas">Guayas</option>
                  <option value="Imbabura">Imbabura</option>
                  <option value="Loja">Loja</option>
                  <option value="Los Ríos	">Los Ríos</option>
                </select>
              </p>
              <p class="block">
                <label for="direccion">Dirección</label required>
                <textarea name="direccion" id="direccion" rows="3"></textarea>
              </p>
            </fieldset>
            <br />
            <fieldset>
              <legend>Datos de Usuario</legend>
              <p>
                <label for="user">Usuario</label>
                <input type="text" name="user" id="user" minlength="5" required/>
              </p>
              <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required/>
              </p>
              <p>
                <label for="">Contraseña</label>
                <input type="password" required/>
              </p>
              <p>
                <label for="genero">Genero</label>
                <input list="generos" name="genero" id="genero" />
                <datalist id="generos">
                  <option value="Masculino"></option>
                  <option value="Femenino"></option>
                </datalist>
              </p>
              <p>
                <label for="rol">Rol</label>
                <select name="rol" id="rol" required>
                  <optgroup label="Staff">
                    <option value="Administrador">Administrador</option>
                    <option value="Supervisor">Supervisor</option>
                  </optgroup>
                  <optgroup label="Usuarios">
                    <option value="Asistente">Asistente</option>
                  </optgroup>
                </select>
              </p>
            </fieldset>
            <p class="block">
              <button type="submit">Send</button>
            </p>
          </form>
        </div>
        <div class="contact-info">
        <h4>Usuario Registrado</h4>
          <ul>
            <li>
              <i class="fa-solid"> <?php echo $_POST["nombre"]; ?> </i>
            </li>
            <li>
              <i class="fa-solid"><?php echo $_POST["apellidos"]; ?></i>
            </li>
            <li>
              <i class="fa-solid"><?php echo $_POST["rol"]; ?></i>
            </li>
          </ul>
          <p>
            Atento al correo electronico, pronto recibiras una respuesta de parte de la administracion.
          </p>
          <p>Company.com</p>
        </div>
      </div>
    </div>
  </body>
</html>

