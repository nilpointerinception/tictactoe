<?php

	class Renderer {

		public static function row($inside) {
			echo '<div class="row text-center">';
				$inside();
			echo '</div>';
		}

		public static function box($id, $class = null) {
			echo '<div class="col-xs-4 game-box" id="'.$id.'">';
				echo '<div class="outer">';
					echo '<div class="inner">';
					if($class != null) {
						echo '<i class="fa fa-'.$class.'"></i>';
					}
					echo '</div>';
				echo '</div>';
			echo '</div>';
		}

		public static function grid() {
			for ($x=1; $x <= 3; $x++) {
				echo '<div class="row text-center">';
				for ($y=0; $y < 3; $y++) {
			   		Renderer::box(($x * $y), "circle-o");
			   	}
			   	echo '</div>';
			} 
		}

	}