<?php
/**
 *  gabarit qui affiche une carte
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="carte carte--grande">
                <!-- <figure class="carte__image">
                    <img src="images/img1.jpg" alt="Image de voyage">
                </figure> -->
                <div class="carte__contenu">
                    <?php
                    if (has_post_thumbnail()) {
                        // permet d'afficher la petite image associé à l'article (image mise en avant)
                        the_post_thumbnail('thumbnail'); }
                    ?>
                    <a class="carte__titre" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
                    <p>Température minimale: <?php echo the_field("temperature_minimale"); ?> °C</p>
                    <p>Température maximale:<?php echo the_field("temperature_maximale"); ?> °C</p>
                    <div class="carte__categorie">
                      <?php the_category(); ?>
                    </div>
                </div>
            </article>
<?php endwhile; endif; ?>