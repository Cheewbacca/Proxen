<div class="practice__content-box-item">
    <h4 class="h4_font romb"><?php the_title(); ?></h4>
    <p class="main_text"><?php wp_filter_nohtml_kses( the_content() ); ?></p>
</div>