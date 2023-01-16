<?php
// Template Name: Reconhecimentos
get_header();
?>
    <?php $idioma = get_locale();?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__banner">
                <div class="content__banner">
                    <div class="image">
                        <img class="banner__desktop" src="<?php the_field('banner'); ?>" alt="Reconhecimentos">
                        <img class="banner__mobile" src="<?php the_field('banner_mobile'); ?>" alt="Reconhecimentos">
                    </div>
                </div>
            </section>

            <section class="section__reconhecimento">
                <div class="shell">
                    <div class="content__reconhecimento">
                        <h3><?php the_field('descricao'); ?></h3>
                        <h1><?php the_field('titulo'); ?></h1>

                        <div class="inner__reconhecimento">
                            <?php if(have_rows('clientes')): while(have_rows('clientes')) : the_row(); ?>
                            <div class="box">
                                <div class="image">
                                    <img src="<?php the_sub_field('logo'); ?>" alt="">
                                </div>
                                <div class="text">
                                    <p class="name"><?php the_sub_field('nome'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__servicos__reconhecimento">
                <?php if ($idioma === 'pt_BR') : ?>
                <h2>Conheça nossos serviços</h2>
                <a href="<?php echo get_home_url(); ?>/atuacao" class="btn btn__outline__white">
                    Saiba mais
                </a>
                <?php elseif ($idioma === 'en_US') : ?>
                <h2>KNOW OUR SERVICES</h2>
                <a href="<?php echo get_home_url(); ?>/atuacao" class="btn btn__outline__white">
                    Know more
                </a>
                <?php endif ?>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>