<?php
class Imagenes {

    // Agregar $num artículos de $artnr al carrito


    // Sacar $num artículos de $artnr fuera del carrito

function obtenerImagenes($dirname,$col=6) {
	$num=rand(5, 15)+rand(6, 48);
$header='<div class="col-md-{col}">
			<div id="carousel-example-generic{0}" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <div class="carousel-inner">';
	echo str_replace("{col}",$col,str_replace("{0}",$num,$header));				  
		//$dirname = "inicio/1/";
		$images = glob($dirname."*.*");
		$k=0;
		foreach($images as $image) {
		if($k==0) echo '<div class="item active">';
		else echo '<div class="item ">';
		echo '<img src="'.$image.'" /><br />';
		echo ' <div class="carousel-caption"></div>' ;
		echo '</div>';
		$k++;
		}
$footer='</div>
			  <a class="left carousel-control" href="#carousel-example-generic{0}" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic{0}" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
		</div>';
	echo str_replace("{0}",$num,$footer);	
    }
	
	
	function obtenerImagenesBoton($dirname) {
		//$dirname = "inicio/1/";
		$s="";
		$images = glob($dirname."*.*");
		foreach($images as $image) {
		$s=$s.'{src:"'.$image.'"},';
		}
		echo rtrim($s,",");
    }
 
	
}
?>