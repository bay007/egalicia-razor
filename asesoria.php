<?php
include("config.php");
$img = new Imagenes;
echo '<div id="contenido" class="col-md-8">
	<div class="row" id="rowES">
		<div class="jumbotron">
		  <div class="container">
			<p>En Razor Robot Design estamos para ayudarte en tu proyecto, sugiriendo y dando ideas para que obtengas la mejor eificiencia de tus piezas con el menor gasto posible respetando siempre tu diseño propio.</p>
			<p><h5> Envíanos archivos y platícanos lo que buscas.</h5></p>
		  </div>
		</div>

		<div class="row" id="row1">';
		
			$img->obtenerImagenes("asesoria/1/");
			$img->obtenerImagenes("asesoria/2/");
		
echo	'</div>

	</div>
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