
<?php
if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['dni']) && isset($_POST['edad']) && isset($_POST['pass'])) {
  //si el usuario rellena todos los campos, llamamos al archivo de la db y creamos el objeto.
  include '\modelo\usuario.php';
  $usuarios=new Usuario();
  //llamada a la funcion de insertar usuario en la db
  $resultado=$usuarios->insertarUsuario($_POST['nombre'], $_POST['apellidos'], $_POST['usuario'], $_POST['email'], $_POST['dni'], $_POST['edad'], $_POST['pass']);
  if ($resultado==null) {
    echo "Error";
  }else {
    //si se inserta con exito, sacamos un mensaje i lo llevamos a login.php
   ?>
   <script type="text/javascript">
     alert("Usuario registrado con exito.");
   </script>
   <?php
  header('Location: login.php');
    }
}else {
 ?>
  <!--Formulario de registro de los usuarios -->
  <form class="registro" action="registro.php" method="post">
    <fieldset>
      <legend>REGISTRO</legend>
      Nombre: <input type="text" name="nombre" value=""> <br><br>
      Apellidos:<input type="text" name="apellidos" value=""> <br><br>
      Usuario: <input type="text" name="usuario" value=""> <br><br>
      Email: <input type="text" name="email" value=""> <br><br>
      DNI:<input type="text" name="dni" value=""><br><br>
      Edad: <input type="text" name="edad" value=""><br><br>
      Contraseña:<input type="password" name="pass" value=""> <br><br>
    </fieldset>
    <input type="submit" name="Registrarse" value="Registrarse">
  </form>

<?php } ?>
