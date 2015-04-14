<?php
include("config.php");
$img = new Imagenes;
echo '<div id="contenido" class="col-md-8">
	<div class="row" id="rowES">
		<div class="jumbotron">
		  <div class="container">
			<p>Actualmente imprimir en 3D es una realidad al alcance de todos y en Razor Robot Design nos damos a la tarea de hacer realidad tus proyectos.</p>
			<p>Pueden imprimirse en PLA y en ABS dependiendo de la temperatura y los esfuerzos a los que se pueda someter tu pieza, ademas se puede vaciar de tal manera que se minimice el peso de la misma.</p>
			<p><h5> Contamos con resoluciones de 0.2 mm y 0.1 mm.</h5></p>
		  </div>
		</div>
		<div class="row" id="row2">';
$img->obtenerImagenes("galeria/impresion/1/");
$img->obtenerImagenes("galeria/impresion/2/");		
echo		'</div>';
echo		'<div class="row" id="row1">';
$img->obtenerImagenes("galeria/impresion/3/",4);
$img->obtenerImagenes("galeria/impresion/4/",4);
$img->obtenerImagenes("galeria/impresion/5/",4);			
			
echo	'</div>
	</div>
</div>
<script>
		$(".item img").click(function(){
			$(".img-rounded").attr("src",$(this).attr("src"));
			$(".tiempo1").modal("show");
			});
		 $("#row1").addClass("animated rotateInUpLeft ");
		 $("#row2").addClass("animated lightSpeedIn");
		

	</script>';
?>	