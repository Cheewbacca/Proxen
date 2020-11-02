<footer id="footer">
      <div class="footer-top"><img src="<?php echo the_field('logo') ?>" alt=""></div>
      <div class="footer-content main_width">
        <div class="footer-content-item"><span class="main_text"><?php the_field('footer_first_block_name') ?></span>
          <ul>
            <li><?php the_field('address') ?></li>
          </ul>
        </div>
        <div class="footer-content-item"><span class="main_text"><?php the_field('contacts') ?></span>
          <ul>
            <li class="small_text"><?php the_field('phone_number') ?>, <?php the_field('phone_number_2') ?>, <?php the_field('phone_number_3') ?></li>
            <li class="small_text"><?php the_field('faks') ?></li>
            <li class="small_text"><?php the_field('e-mail') ?></li>
            <li> 
              <ul class="icons"> <a href="#"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/icon.png' ?>" alt=""></a><a href="#"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/icon-2.png' ?>" alt=""></a><a href="#"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/icon-3.png' ?>"" alt=""></a></ul>
            </li>
          </ul>
        </div>
        <div class="footer-content-item"><span class="main_text"><?php the_field('footer_last_block_name') ?></span>
          <ul>
            <li><a class="small_text" href="<?php the_field('site_url') ?>"><?php the_field('site_url') ?></a></li>
          </ul>
        </div>  
      </div>
      <div class="footer-bottom">
        <p class="main_text"><?php the_field('copyright_text') ?></p>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>