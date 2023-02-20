<?php $idioma = get_locale();?>
<div class="destaque">
    <a href="<?php the_permalink(); ?>">
        <div class="image">
            <img src="<?php the_field('banner_destaque_noticia_fixada'); ?>" alt="<?php the_title(); ?>">
        </div>

        <div class="description">
            <h2><?php echo substr(get_the_title(), 0, 40); ?></h2>

            <p><?php $excerpt = get_field('texto'); echo substr($excerpt, 0, 234); ?></p>

            <?php if ($idioma === 'pt_BR') : ?>
                <a href="<?php the_permalink(); ?>" class="btn btn__outline__white">
                    Saiba mais
                </a>
            <?php elseif ($idioma === 'en_US') : ?>
                <a href="<?php the_permalink(); ?>" class="btn btn__outline__white">
                    Know more
                </a>
            <?php endif ?>
        </div>
    </a>
</div>