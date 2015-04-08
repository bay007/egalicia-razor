<?php
include("config.php");
$img = new Imagenes;
echo '<div id="contenido" class="col-md-8">';
	echo '<div class="row" id="row1">';
			$img->obtenerImagenes("inicio/1/");
			$img->obtenerImagenes("inicio/2/");
	echo '</div>';	
		echo '<div class="row" id="row2">';
			$img->obtenerImagenes("inicio/3/");
			$img->obtenerImagenes("inicio/4/");
	echo '</div>';	
echo '</div>';	
	
echo '<script>
		$(".item img").click(function(){
			$(".img-rounded").attr("src",$(this).attr("src"));
			$(".tiempo1").modal("show");
			});
		 $("#row1").addClass("animated rotateInUpLeft ");
		 $("#row2").addClass("animated lightSpeedIn ");
	</script>';
	?>