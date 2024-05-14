<?php 
 session_start();
?>
<!DOCTYPE html> 
<html>
 <head>
 <meta charset="UTF-8">
 <title></title>
 <link href="estilo.css" rel="stylesheet">
 
 </head>
 <body>
    <center>
 <header>
 <?php include 'encabezado.php'; ?>
 </header>
 <section>
 <form method="POST" action="pregunta1.php">
 <table border="0" width="900" 
 cellspacing="5" cellpadding="20">
 <tr>
 <td>Nombres y apellidos</td>
 <td><input type="text" name="txtNombres" 
 size="50" /></td>
 </tr>
 <tr>
 <td>Numero DNI</td>
 <td><input type="text" name="txtDNI" 
 size="50" maxlength="8" /></td>
 </tr>
 <tr>
 <td>Empezar con la encuesta  </td>
 <td><input type="submit" value="Encuesta" /></td>
 </tr>
 </table>
 </form>
 </section> 
 <center>
 <footer>
 <?php include 'pie.php';?>
 </footer> 
 </body>