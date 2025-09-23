<?php
// El valor del campo 'username' del formulario
echo $_GET['username'];  // Output: el valor ingresado en el campo 'username'

echo "<br/>";
// También es accesible con $_REQUEST (aunque menos seguro porque mezcla fuentes)
echo $_REQUEST['username'];  // Output: mismo valor del campo
?>