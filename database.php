<?php
/* $server='localhost';
   $username='root';
   $password='123456789';
   $database='php_database_circuitfox';*/
      $server='localhost';
   $username='id15302245_userscircuit';
   $password='123456789Aa$';
   $database='id15302245_administrator';
 
 //este codigo me conecta la pagina con el administrador de bases de datos
   $datas=mysql_pconnect($server, $username, $password) or die("<h1>error al conectar con la base de datos sea serio maldita rata de alcantarilla</h1>");
mysql_select_db($database) or die("<h1><font color=red>no encuentro la base de datos</font></h1>");
//este codigo me conecta con la base de datos
   


  function registro($nombre, $apellido, $correo, $telefono, $escriba_algo){
  	
  	$consulta="INSERT INTO users (id, nombres, apellidos, email, telefono, comentarios) 
                VALUES (NULL, '$nombre', '$apellido', '$correo', '$telefono', '$escriba_algo');";

  	 mysql_query($consulta);
  	 //mysql_close($database);
  }

?>