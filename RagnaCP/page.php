<?php
/* Template Name: [ Posts ] */
include_once 'includes/config.php'; // loads config variables
include_once 'includes/functions.php';
$resumo = get_the_excerpt();
get_header(); ?>

	<section class="conteudo">
	    <aside class="left">
	    	<?php include( get_template_directory() . '/includes/menu-left.php' ); ?>
	    </aside>

	    <article>
	        <div class="box">
				<h3 class="box-title"><?php the_title(); ?></h3>
	            
	            <div class="spacer">
	            	<?php if($resumo){ ?>

                        <h4><?php echo $resumo; ?></h4>

                    <?php }; ?>

		            <?php if ( $_SESSION["usuario"] ) : ?>

		                <?php the_content(); ?>
		                
		                <?php if ( have_posts() ) : ?>

								<header class="page-header">
									<?php
										the_archive_title( '<h1 class="page-title">', '</h1>' );
										the_archive_description( '<div class="taxonomy-description">', '</div>' );
									?>
								</header><!-- .page-header -->

								<?php
								// Start the Loop.
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'content', get_post_format() );

								// End the loop.
								endwhile;

								// Previous/next page navigation.
								the_posts_pagination( array(
									'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
									'next_text'          => __( 'Next page', 'twentyfifteen' ),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
								) );

							// If no content, include the "No posts found" template.
							else :
								get_template_part( 'content', 'none' );

							endif;
							?>

		            <?php endif;?>
						

	            </div>

				<div class="box-footer">
					<div id="comments" class="comments-area">

		

					</div>

				</div>
			</div>

	    </article>

	    <aside class="right">
	    	<?php include( get_template_directory() . '/includes/vote.php' ); ?>
	    </aside>
	</section>
	
<?php get_footer(); ?>