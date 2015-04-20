<?php
include("config.php");
$img = new Imagenes;
echo '<div id="contenido" class="col-md-8">
	<div class="row" id="rowES">
		<div id="contenido" class="col-md-12">
			<div class="jumbotron">
			  <div class="container">
				<p>La apariencia de tu proyecto tambien importa, es por ello que te ofrecemos presentarlo en diversos colores y acabados, desde eliminar las líneas de impresión hatsa darle textura y color de tu preferencia.</p>
				<p><h5> Existe un costo por éste servicio en proporción a la dificultad del mismo y el número de piezas.</h5></p>
			  </div>
			</div>
		</div>
		
	</div>

	<div class="row" id="row1">';
	$img->obtenerImagenes("galeria/acabados/1/","8 col-md-offset-2");

echo '</div>
	</div>
<script>
		$(".item img").click(function(){
			$(".img-rounded").attr("src",$(this).attr("src"));
			$(".tiempo1").modal("show");
			});
		 $("#row1").addClass("animated rotateInUpLeft ");
		 $("#row2").addClass("animated lightSpeedIn ");
</script>';
?>