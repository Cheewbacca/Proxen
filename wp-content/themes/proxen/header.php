<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head() ?>
    </head>
    <body>
    <div class="header"><img class="logo" src="<?php echo the_field('logo') ?>" alt="">
        <div class="header__buttons"><a class="btn_font btn" href="#footer"><?php the_field('top_link') ?></a>
          <ul> 
            <li> <a class="btn_font" href=""<?php echo get_site_url() ?>">En</a></li>
            <li> <a class="btn_font active" href="<?php echo get_site_url() . '/ru/homepage-2/' ?>">Рус</a></li>
            <li> <a class="btn_font" href="<?php echo get_site_url() . '/uk/homepage-3/' ?>">Укр</a></li>
            <li> <a class="btn_font" href="<?php echo get_site_url() . '/fr/homepage-4/' ?>">Fr </a></li>
          </ul>
        </div>
      </div>