<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create and List Users</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

<?php include 'connection.php'; ?>
<!-- 
╔════════════════════════════════════════════════════════════════════════╗
║ Conexión a la base de datos                                           ║
╚════════════════════════════════════════════════════════════════════════╝
-->

<div class="main-container">

  <div class="add-user-button">
    <form method="get" action="add_user.php">
      <input type="submit" value="Añadir usuario" class="btn-submit">
      <!--  
      ╔══════════════════════════════════════════════════════════════════════╗
      ║ Botón para añadir un nuevo usuario, redirige a add_user.php         ║
      ╚══════════════════════════════════════════════════════════════════════╝
      -->
    </form>
  </div>
  <div class="search-user-button">
    <form method="get" action="search_user.php">
      <input type="submit" value="Buscar usuario" class="btn-search">
      <!--  
      ╔══════════════════════════════════════════════════════════════════════╗
      ║ Botón para buscar usuarios, redirige a search_user.php              ║
      ╚══════════════════════════════════════════════════════════════════════╝
      -->
    </form>
  </div>

  <div class="user-list">
    <h2>Usuarios Registrados</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Curso</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $result = $con->query("SELECT * FROM alumnos"); // Obtiene todos los registros de la tabla alumnos
          
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['ID']}</td>
                    <td>{$row['NOMBRE']}</td>
                    <td>{$row['APELLIDO']}</td>
                    <td>{$row['CURSO']}</td>
                    <td>
                      <div class='action-buttons'>
                        <form method='post' action='delete_user.php' class='action-form'>
                          <input type='hidden' name='id' value='{$row['ID']}'>
                          <input type='submit' value='Delete' class='btn-delete'>
                        </form>
                        <form method='get' action='update_user.php' class='action-form'>
                          <input type='hidden' name='id' value='{$row['ID']}'>
                          <input type='submit' value='Update' class='btn-update'>
                        </form>
                      </div>
                    </td>
                  </tr>";
          }
          /* 
          ╔══════════════════════════════════════════════════════════════════════╗
          ║ Genera la tabla con los usuarios y agrega botones de acción         ║
          ║ para eliminar y actualizar cada registro.                           ║
          ╚══════════════════════════════════════════════════════════════════════╝
          */
        ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
