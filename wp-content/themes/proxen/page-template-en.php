<?php 
/*
    Template Name: Template en
*/
?>

<?php get_header( ); ?>

    <section class="first_section femida"> 
      <div class="first_section__content">
        <div class="first_section__content__slider">
          <div class="first_section__content__slider-slide">
            <h3 class="section_name_font"><?php the_field('first_slide_name') ?></h3>
            <h1 class="h1_font"><?php the_field('first_slide_big_text') ?></h1>
          </div>
          <div class="first_section__content__slider-slide">
            <h3 class="section_name_font"><?php the_field('second_slide_name') ?></h3>
            <h2 class="h2_font"><?php the_field('second_slide_heading') ?></h2>
            <p class="main_text"><?php the_field('second_slide_text') ?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="practice bg1">
      <div class="practice__content main_width">
        <h3 class="section_name_font"><?php the_field('practice_block_name') ?></h3>
        <div class="practice__content-box">
        <?php

            global $post;

            $args = array(
              'post_type'   => 'practice',
              'publish'     => true,
              'order'     => 'ASC',
              'posts_per_page' => -1,
              'nopaging' => true,
            );
            
            $myposts = get_posts( $args );

            foreach( $myposts as $post ){ setup_postdata($post);

              include( get_template_directory() . '/templates/practice-template.php' );

            }

            wp_reset_postdata();

        ?>
      </div>
    </section>
    <section class="industry">
      <div class="industry__content main_width">
        <h3 class="section_name_font"><?php the_field('industry_block_name') ?></h3>
        <div class="industry__content-box"> 
        <?php

          global $post;

            $args = array(
              'post_type'   => 'industry',
              'publish'     => true,
              'order'     => 'ASC',
              'posts_per_page' => -1,
              'nopaging' => true,
            );

            $myposts = get_posts( $args );

            foreach( $myposts as $post ){ setup_postdata($post);

              include( get_template_directory() . '/templates/industry-template.php' );

            }

            wp_reset_postdata();

          ?>
          <div class="industry__content-box-item message">
            <h5 class="h4_font"><?php the_field('industry_message_block_heading') ?></h5>
            <p><?php the_field('industry_message_block_text') ?></p>
          </div>
        </div>
      </div>
    </section>
    
<?php get_footer( ); ?>