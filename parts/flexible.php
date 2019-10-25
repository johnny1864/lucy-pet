<?php

	if( have_rows('flexible_content') ){
	
		while ( have_rows('flexible_content') ){ the_row();

			$layout = get_row_layout();

			include( locate_template( 'flexible/'.$layout.'.php', false, false ) ); 
//			get_template_part('flexible/'.$layout);

		}//endwhile;
	}//endif;

?>