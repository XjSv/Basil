<?php

global $bx_options;	
	
while ( have_posts() ) : the_post();

	get_template_part( '_theme/_templates/content', get_post_format() );

endwhile;
	
?>