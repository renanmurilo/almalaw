<?php
// Template Name: Nossa Equipe
get_header();
?>
    <?php $idioma = get_locale();?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__banner">
                <div class="content__banner">
                    <div class="image">
                        <img class="banner__desktop" src="<?php the_field('banner'); ?>" alt="Nossa Equipe">
                        <img class="banner__mobile" src="<?php the_field('banner_mobile'); ?>" alt="Nossa Equipe">
                    </div>
                </div>
            </section>

            <section class="section__nossa__equipe">
                <div class="shell">
                    <div class="content__nossa__equipe">
                        <h1><?php the_field('titulo'); ?></h1>

                        <div class="description">
                            <?php the_field('descricao'); ?>
                        </div>
                    </div>
                </div>

                <div class="content__equipe__destaque">
                    <div class="shell">
                        <div class="equipe__destaque">
                            <?php if(have_rows('equipe_destaque')): while(have_rows('equipe_destaque')) : the_row(); ?>
                            <a href="/<?php the_sub_field('link_do_perfil'); ?>" class="card">
                                <div class="image">
                                    <img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('nome'); ?>">
                                </div>

                                <h3><?php the_sub_field('nome'); ?></h3>
                            </a>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>

                <div class="content__membros__equipe">
                    <div class="shell">
                        <div class="membros__equipe">
                            <?php if(have_rows('equipe')): while(have_rows('equipe')) : the_row(); ?>
                            <a href="<?php the_sub_field('link_do_perfil'); ?>" class="card">
                                <div class="image">
                                    <img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('nome'); ?>">
                                </div>

                                <h3><?php the_sub_field('nome'); ?></h3>
                            </a>
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