<?php
include("config.php");
$img = new Imagenes;

echo '<div id="contenido" class="col-md-8">
	<div class="row" id="rowES">
		<div class="jumbotron">
		  <div class="container">
			<p>¿Tienes la idea pero se te complica diseñarla en Solid Works?, no te preocupes ya que en Razor Robot Design ofrecemos el servicio apartir de la información que quisieras darnos, desde un bosquejo a mano alzada hasta especificaciones técnicas y dimensiones.</p>
			
		  </div>
		</div>
		<div class="row" id="row1">';
			$img->obtenerImagenes("galeria/solid/1/");
			$img->obtenerImagenes("galeria/solid/2/");	
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