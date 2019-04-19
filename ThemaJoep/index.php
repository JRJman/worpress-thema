<?php
// header toevoegen
get_header();

// de worpress loop
  if( have_posts() ) :
    while ( have_posts() ) : the_post()
    ?>
    <article class="bericht">
      <div class="container">
        <a herf="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
        <?php the_content(); ?>
      </div>
    </article>
<?php endwhile;
  else :
    echo 'geen berichtren gevonden';

  endif;
  // einde wordpress loop
  // footer toevoegen
  get_footer();
?>
