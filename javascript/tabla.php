<?php
 require_once 'LIGA3/LIGA.php';
 //BD('localhost', 'root', '', 'base');
 $liga = LIGA('base.usuarios');
 $cols = array('0','1','3','Acciones'=>'<button class="borrar" data="@[0]"><input type="image" name="valor" value="borrar" src="imagenes/eliminar.png" style= "width:15px; height:10px"></button>');
 
 echo '<label>Filtro: <input id="filtro" name="filtro" /></label>';
 //<input name="borrar" src="eliminar.png" type="image" />
 
 $props = array('nombre'=>array('class'=>'busca')/*, 'fecha'=>'class="busca"'*/);
 
 HTML::tabla($liga, 'Usuarios registrados', $cols, $props);
?>
