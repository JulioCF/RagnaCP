<?php
/* Template Name: [ Rank PVP ] */

include_once 'includes/config.php'; // loads config variables
include_once 'includes/functions.php';
$resumo = get_the_excerpt();
if ( is_page() ) get_header();
?>

<section class="conteudo limit">
    <aside class="left">
    	<?php include( get_template_directory() . '/includes/menu-left.php' ); ?>
    </aside>

    <article>
    <div class="box">

        <?php while ( have_posts() ) : the_post();?>

            <h3 class="box-title"><?php the_title(); ?></h3>
            
            <div class="spacer">
            
                <?php if($resumo){ ?>

                    <h4><?php echo $resumo; ?></h4>

                <?php }; ?>

                <?php the_content(); ?>

                <?php include( get_template_directory() . '/includes/rank-pvp.php' ); ?>

            </div>

            <div class="box-footer">
                
            </div>

        <?php endwhile;?>

    </div>

    </article>

    <aside class="right">
    	<?php include( get_template_directory() . '/includes/vote.php' ); ?>
    </aside>
    
</section>




<?php get_footer(); ?>