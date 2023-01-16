<?php
// Template Name: Contato
get_header();
?>
    <?php $idioma = get_locale();?> 
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__banner">
                <div class="content__banner">
                    <div class="image">
                        <img class="banner__desktop" src="<?php the_field('banner'); ?>" alt="Contato">
                        <img class="banner__mobile" src="<?php the_field('banner_mobile'); ?>" alt="Contato">
                    </div>
                </div>
            </section>

            <section class="section__contato">
                <div class="shell">
                    <div class="content__contato">
                        <div class="text__description">
                            <h1><?php the_field('titulo'); ?></h1>
                            <h3><?php the_field('sub_titulo'); ?></h3>

                            <div class="infos">
                                <a href="mailto:<?php the_field('email'); ?>">
                                    <?php the_field('email'); ?>
                                </a>

                                <a href="tel:+<?php the_field('telefone'); ?>">
                                    <?php the_field('telefone'); ?>
                                </a>

                                <p><?php the_field('endereco_1'); ?></p>
                                <p><?php the_field('endereco_2'); ?></p>
                            </div>
                        </div>

                        <div class="form__class">
                            <?php if ($idioma === 'pt_BR') : ?>
                            <?php echo do_shortcode('[contact-form-7 id="215" title="Contato"]'); ?>
                            <?php elseif ($idioma === 'en_US') : ?>
                            <?php echo do_shortcode('[contact-form-7 id="800" title="Contato US"]'); ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__trabalhe__contato">
                <div class="bg-mobile"></div>
                <div class="image__desktop">
                    <img src="<?php the_field('imagem'); ?>" alt="">
                </div>

                <div class="shell">
                    <div class="content__trabalhe">
                        <h2><?php the_field('titulo_trabalhe_conosco'); ?></h2>
                        <p><?php the_field('texto'); ?></p>
                    </div>
                </div>
                <div class="image__mobile">
                    <img src="<?php the_field('imagem_mobile'); ?>" alt="">
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>