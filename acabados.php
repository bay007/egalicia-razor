<?php
include("config.php");
$img = new Imagenes;
echo '<div id="contenido" class="col-md-8">
	<div class="row" id="rowES">
		<div id="contenido" class="col-md-8">
			<div class="jumbotron">
			  <div class="container">
				<p>La apariencia de tu proyecto tambien importa, es por ello que te ofrecemos presentarlo en diversos colores y acabados, desde eliminar las líneas de impresión hatsa darle textura y color de tu preferencia.</p>
				<p><h5> Existe un costo por éste servicio en proporción a la dificultad del mismo y el número de galeria/piezas.</h5></p>
			  </div>
			</div>
		</div>
		
		<div class="col-md-4" id="row2">
			<div class="parent-container1">
				<button type="button" class="btn btn-primary btn-lg">Eliminado líneas de impresión</button>
				<hr>
			</div>
			<div class="parent-container2">
				<button type="button" class="btn btn-primary btn-lg">Pintura y acabado suave</button>
				<hr>
			</div>
			<div class="parent-container3">
				<button type="button" class="btn btn-primary btn-lg">Pintura y acabado pulido</button>
				<hr>
			</div>
			<div class="parent-container4">
				<button type="button" class="btn btn-primary btn-lg">Pintura metálica</button>
				<hr>
			</div>
		</div>
	</div>

	<div class="row" id="row1">';
	$img->obtenerImagenes("galeria/piezas/1/","8 col-md-offset-2");

echo '</div>
	</div>
<script>
		$(".item img").click(function(){
			$(".img-rounded").attr("src",$(this).attr("src"));
			$(".tiempo1").modal("show");
			});
		 $("#row1").addClass("animated rotateInUpLeft ");
		 $("#row2").addClass("animated lightSpeedIn ");
$(".parent-container1").magnificPopup({
    items: [';
$img->obtenerImagenesBoton("acabados/1/");	
echo    '],
    gallery: {
      enabled: true
    },
    type: "image" // this is default type
});

$(".parent-container2").magnificPopup({
    items: [';
	$img->obtenerImagenesBoton("acabados/2/");	
echo    '],
    gallery: {
      enabled: true
    },
    type: "image" // this is default type
});


$(".parent-container3").magnificPopup({
    items: [';
	$img->obtenerImagenesBoton("acabados/3/");	
echo    '],
    gallery: {
      enabled: true
    },
    type: "image" // this is default type
});

$(".parent-container4").magnificPopup({
    items: [';
    $img->obtenerImagenesBoton("acabados/4/");	
echo    '],
    gallery: {
      enabled: true
    },
    type: "image" // this is default type
});
	</script>';
?>