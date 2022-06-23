<?php get_header(); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>Meu primeiro tema</h2>
			</div>
		</div>
	</div>

	<?php if (!is_page('contato')) { ?>
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
	<?php	} ?>
 
	<?php if (is_page('contato')) { ?>
		<div class="row">
			<div class="col-md-4">
				<?php the_content(); ?>
			</div>
			<div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.08105139095!2d-46.78754338536834!3d-24.168890090191535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce2a634639f1ad%3A0x880cccc8530ba600!2sETEC%20de%20Itanha%C3%A9m!5e0!3m2!1spt-BR!2sbr!4v1655575214534!5m2!1spt-BR!2sbr"></iframe>
			</div>
		</div>
	<?php } ?>

	<div class="row">
		<div class="col-md-12">
			<?php masterslider(1); ?>
		</div>
	</div>
	
	

	<div class="container">
		<div class="row">
	    <?php 
	    $cont= 0;
	    if ( have_posts() ){
	        While( have_posts() ){
	            the_post();
	            $cont++;
	            if($cont <= 3){
	    ?>
	                <div class="col-md-4">
	                    <h3><?php the_title();?></h3>
	                    <div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail();?></div>
	                    <p><?php the_excerpt();?></p>
	                    <a class="btn btn-primary" href="<?php the_permalink();?>">leia Mais</a>
	                </div>
	        <?php
	            }
	        }
	    }
	    ?>
	    </div>
	</div>

	<?php 
		if ( have_posts()) {
			while ( have_posts()) {
					the_post();
					the_title();
					the_excerpt();
			}
		}
	?>
	
<?php get_footer(); ?>