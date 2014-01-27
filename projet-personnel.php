
        <li>
            <a href="<?php the_permalink(); ?>" title="Voir la fiche du projet <?php the_title(); ?> et le voir en ligne">
                <figure><img src="<?php the_field('logo'); ?>" alt="Logo du projet <?php the_title(); ?>"></figure>
                <span class="title"><?php the_title(); ?></span>
                <div class="hover">
                    <span>Voir le projet</span>
                </div>
            </a>
        </li>