<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="Estilosp3.css">
    <script src="main.js"></script>
</head>
<body >
    <header >
        <div class="encabezado">
            <input type="submit" class="boton_encabezado" id="IniciarSesion" value="Iniciar Sesion" onclick="IniciarSesion()" >
            <input type="submit" class="boton_encabezado" id="Registrarte" value="Registrarse" onclick="Registrarte()" >
        </div>

    </header>
    <div>
        <div class="encabezado_2">
            <img src="../imagenes/logo2.jpg"  class="logo" width="80" height="55">
            <h1 class="text">Veterinaria El Refugio</h1>
        </div>
       
    </div>

    <nav>
        <input type="submit" class="boton" id="Registrarte" value="Inicio " onclick="Admin()" >
        <input type="submit" class="boton" id="Registrarte" value="Tabla usuarios" onclick="Usuarios()" >
        <input type="submit" class="boton" id="Registrarte" value="Tabla Productos" onclick="Productos()" >
    </nav><br>


        <form class="formularios" action="registros_users_admin.php" method="post">
            <h1>Alta de Usuarios</h1>
            
            </h2>    
                 
                    <label class="text23">Nombre</label><br>
                        <input class="validacion" id="usuario" name="usuario" minlength="3" maxlength="30" required spellcheck="true" type="text" size="30" placeholder="Usuario" >
                    <br><br>                        
                    <label class="text23">Correo Electronico</label><br>
                        <input class="validacion" id="correo" name="correo" minlength="8" maxlength="30" required spellcheck="true" type="email" size="30" placeholder="Email">
                    <br><br>
                    <label class="text23">Crea una contraseña</label><br>
                    <input class="validacion" id="clave01" name="clave01" minlength="5" maxlength="15" pattern="[0-9]+" title="solo se aceptan numeros" required spellcheck="true" type="password" size="30" placeholder="Contraseña" >
                    <br><br>
                    <label class="text23">Confirme contraseña</label><br>
                    <input class="validacion" id="clave02" name="clave02" minlength="5" maxlength="15" pattern="[0-9]+" title="solo se aceptan numeros" required spellcheck="true" type="password" size="30" placeholder="Confirmacion" ><br><br>
                   
                    <input type="submit" class="boton_ejecucion"  value="Registrarte" required checked="true" ><br><br>
                    
                
        </form>
        <br><br><br>
      
    <br><br>
    <footer class="piepagina">
        <label class="textpp">La Veterinaria El Refugio nace tras muchos años de experiencia, calidad y formacion para ofrecer<br>
                            el mejor ofreciendo el mejor servicio a la salud y bienestar de tu mascota
        </label>
    </footer>
</body>
</html>