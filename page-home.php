<?php
// Template Name: Home
get_header();
?>
    <?php $idioma = get_locale();?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__home__banner">
                <div class="content__banner slide-banners">
                    <?php if(have_rows('banners')): while(have_rows('banners')) : the_row(); ?>
                        <div class="banner__image">
                            <img class="banner__desktop" src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                            <img class="banner__mobile" src="<?php the_sub_field('imagem_mobile'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                            
                            <div class="description">
                                <h3><?php the_sub_field('titulo_menor'); ?></h3>
                                <h2><?php the_sub_field('titulo'); ?></h2>

                                <div class="text">
                                    <?php the_sub_field('texto'); ?>
                                </div>
                                
                                <?php if ($idioma === 'pt_BR') : ?>
                                <a href="<?php the_sub_field('link_do_banner'); ?>" class="btn btn__outline__white" style="<?php echo ( get_sub_field('mostrar_botao') ? "display: flex;" : "display: none;") ;?>">
                                    Saiba mais
                                </a>
                                <?php elseif ($idioma === 'en_US') : ?>
                                <a href="<?php the_sub_field('link_do_banner'); ?>" class="btn btn__outline__white" style="<?php echo ( get_sub_field('mostrar_botao') ? "display: flex;" : "display: none;") ;?>">
                                    Know more
                                </a>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </section>

            <section class="section__home__nos__somos">
                <div class="shell">
                    <div class="content__nos__somos">
                        <div class="description__nos__somos">
                            <h2><?php the_field('titulo_nos_somos'); ?></h2>

                            <div class="description">
                                <?php the_field('descricao_nos_somos'); ?>
                            </div>
                            <?php if ($idioma === 'pt_BR') : ?>
                            <a href="<?php echo get_home_url(); ?>/institucional" class="btn btn__outline__primary">Saiba mais</a>
                            <?php elseif ($idioma === 'en_US') : ?>
                            <a href="<?php echo get_home_url(); ?>/institutional" class="btn btn__outline__primary">Know more</a>
                            <?php endif ?>
                        </div>
                        
                        <div class="box__purple__desk"></div>

                        <div class="image__desk">
                            <img src="<?php the_field('imagem_nos_somos'); ?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="box__purple__mobile"></div>

                <div class="image__mobile">
                    <img src="<?php the_field('imagem_nos_somos'); ?>" alt="">
                </div>

                <div class="content__explicativo">
                    <div class="shell">
                        <div class="text">
                            <?php the_field('texto_explicativo'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__home__reconhecimento">
                <div class="shell">
                    <div class="content__reconhecimento">
                        <div class="images__reconhecimento slide-home-reconhecimento">
                            <?php if(have_rows('imagens')): while(have_rows('imagens')) : the_row(); ?>
                                <div class="image">
                                    <img src="<?php the_sub_field('imagem_1'); ?>" alt="">
                                </div>

                                <div class="image">
                                    <img src="<?php the_sub_field('imagem_2'); ?>" alt="">
                                </div>

                                <div class="image">
                                    <img src="<?php the_sub_field('imagem_3'); ?>" alt="">
                                </div>

                                <div class="image">
                                    <img src="<?php the_sub_field('imagem_4'); ?>" alt="">
                                </div>

                                <div class="image">
                                    <img src="<?php the_sub_field('imagem_5'); ?>" alt="">
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>

                        <div class="text__reconhecimento">
                            <h2><?php the_field('titulo_reconhecimento'); ?></h2>
                            <p><?php the_field('paragrafo_1'); ?></p>
                            <p><?php the_field('paragrafo_2'); ?></p>

                            <?php if ($idioma === 'pt_BR') : ?>
                            <a href="<?php echo get_home_url(); ?>/reconhecimentos" class="btn btn__outline__primary">
                                Saiba mais
                            </a>
                            <?php elseif ($idioma === 'en_US') : ?>
                            <a href="<?php echo get_home_url(); ?>/recognition" class="btn btn__outline__primary">
                                Know more
                            </a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__home__atuacao">
                <div class="shell">
                    <div class="content__atuacao">
                        <h2><?php the_field('titulo_atuacao'); ?></h2>
                        <div class="description__atuacao">
                            <div class="limitador">
                                <?php the_field('descricao_atuacao'); ?>
                            </div>
                        </div>

                        <div class="icones__atuacao">
                            <?php if(have_rows('icones')): while(have_rows('icones')) : the_row(); ?>
                            <div class="icone">
                                <img src="<?php the_sub_field('icone'); ?>" alt="">
                                <p><?php the_sub_field('nome_icone'); ?></p>
                            </div>
                            <?php endwhile; else : endif; ?>
                        </div>

                        <?php if ($idioma === 'pt_BR') : ?>
                        <a href="<?php echo get_home_url(); ?>/atuacao" class="btn btn__outline__primary">
                            Saiba mais
                        </a>
                        <?php elseif ($idioma === 'en_US') : ?>
                        <a href="<?php echo get_home_url(); ?>/activities" class="btn btn__outline__primary">
                            Know more
                        </a>
                        <?php endif ?>
                    </div>
                </div>
            </section>

            <section class="section__home__sobre">
                <div class="shell">
                    <div class="content__sobre">
                        <h2><?php the_field('titulo_sobre'); ?></h2>
                        <div class="description">
                            <?php the_field('descricao_sobre'); ?>
                        </div>
                        <?php if ($idioma === 'pt_BR') : ?>
                        <a href="<?php echo get_home_url(); ?>/nossa-equipe" class="btn btn__outline__white">
                            Saiba mais
                        </a>
                        <?php elseif ($idioma === 'en_US') : ?>
                        <a href="<?php echo get_home_url(); ?>/our-team" class="btn btn__outline__white">
                            Know more
                        </a>
                        <?php endif ?>
                    </div>

                    <div class="image">
                        <img src="<?php the_field('imagem_sobre'); ?>" alt="">
                    </div>
                </div>
            </section>

            <section class="section__home__blog">
                <div class="shell">
                    <div class="content__blog">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <h2>ÚLTIMAS PUBLICAÇÕES</h2>
                        <?php elseif ($idioma === 'en_US') : ?>
                        <h2>LATEST PUBLICATIONS</h2>
                        <?php endif ?>

                        <div class="inner__blog slide-home-publicacoes">
                            <?php
                                $args = array (
                                    'post_type' => 'publicacoes',
                                    'order' => 'DESC',
                                    'showposts' => 20,
                                );
                                $the_query = new WP_Query ( $args );
                            ?>

                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <?php include(TEMPLATEPATH . '/include/post.php'); ?>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>