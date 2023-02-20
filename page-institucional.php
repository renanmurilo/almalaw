<?php
// Template Name: Institucional
get_header();
?>
    <?php $idioma = get_locale();?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__banner">
                <div class="content__banner">
                    <div class="image">
                        <img class="banner__desktop" src="<?php the_field('imagem'); ?>" alt="Institucional">
                        <img class="banner__mobile" src="<?php the_field('imagem_mobile'); ?>" alt="Institucional">
                    </div>
                </div>
            </section>

            <section class="section__institucional">
                <div class="shell">
                    <div class="content__institucional">
                        <div class="description__institucional">
                            <h1><?php the_field('titulo_servicos_institucional'); ?></h1>
                            <div class="pre__text first">
                                <?php the_field('texto_1'); ?>
                            </div>

                            <h2><?php the_field('pre_titulo_1'); ?></h2>
                            <div class="pre__text">
                                <?php the_field('texto_2'); ?>
                            </div>

                            <h2><?php the_field('pre_titulo_2'); ?></h2>
                            <div class="pre__text">
                                <?php the_field('texto_3'); ?>
                            </div>

                            <h2><?php the_field('pre_titulo_3'); ?></h2>
                            <div class="pre__text">
                                <?php the_field('texto_4'); ?>
                            </div>
                        </div>

                        <div class="box__purple__desk"></div>

                        <div class="image__desk">
                            <img src="<?php the_field('imagem_servicos'); ?>" alt="">
                        </div>
                    </div>

                    <div class="box__purple__mobile"></div>

                    <div class="image__mobile">
                        <img src="<?php the_field('imagem_servicos_mobile'); ?>" alt="">
                    </div>
                </div>

                <div class="background__institucional">
                    <div class="shell">
                        <div class="text">
                            <p><?php the_field('texto_em_cima_da_faixa'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__formacao__institucional">
                <div class="shell">
                    <div class="content__formacao">
                        <div class="image__desk">
                            <img src="<?php the_field('imagem_formacao'); ?>" alt="">
                        </div>

                        <div class="box__purple__desk"></div>

                        <div class="description__formacao">
                            <h2 class="first"><?php the_field('titulo_formacao_1'); ?></h2>
                            <div class="pre__text">
                                <?php the_field('texto_formacao_1'); ?>
                            </div>

                            <h2><?php the_field('titulo_formacao_2'); ?></h2>
                            <div class="pre__text">
                                <?php the_field('texto_formacao_2'); ?>
                            </div>

                            <h2><?php the_field('titulo_formacao_3'); ?></h2>
                            <div class="pre__text">
                                <?php the_field('texto_formacao_3'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image__mobile">
                    <img src="<?php the_field('imagem_formacao_mobile'); ?>" alt="">
                </div>

                <div class="box__purple__mobile"></div>
            </section>

            <section class="section__historia__institucional">
                <div class="shell">
                    <div class="content__historia">
                        <h2><?php the_field('titulo_historia'); ?></h2>
                        <div class="pre__text">
                            <?php the_field('texto_historia'); ?>
                        </div>
                        
                        <a href="" class="btn btn__outline__white">
                            Saiba mais
                        </a>
                    </div>
                </div>

                <div class="image">
                    <img class="image__desktop" src="<?php the_field('imagem_historia'); ?>" alt="">
                    <img class="image__mobile" src="<?php the_field('imagem_historia_mobile'); ?>" alt="">
                </div>
            </section>

            <section class="section__responsabilidade__institucional">
                <div class="shell">
                    <div class="content__responsabilidade">
                        <h2><?php the_field('titulo_responsabilidade'); ?></h2>
                        <h6><?php the_field('pre_titulo_resposabilidade'); ?></h6>

                        <div class="inner__responsabilidade slide-home-reconhecimento">
                            <?php if(have_rows('box_valores_responsabilidade')): while(have_rows('box_valores_responsabilidade')) : the_row(); ?>
                            <div class="box">
                                <div class="image">
                                    <img class="imagem__desktop" src="<?php the_sub_field('imagem'); ?>" alt="">
                                    <img class="imagem__mobile" src="<?php the_sub_field('imagem_mobile'); ?>" alt="">
                                </div>
                                
                                <div class="description__box">
                                    <h3><?php the_sub_field('titulo'); ?></h3>
                                    
                                    <div class="box__description">
                                        <?php the_sub_field('texto'); ?>
                                    </div>
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
                <h2>Discover our services</h2>
                <a href="<?php echo get_home_url(); ?>/activities" class="btn btn__outline__white">
                    know more
                </a>
                <?php endif ?>
            </section>  
        </main>
    <?php } } ?>

<?php get_footer(); ?>