<?php
// Template Name: Atuação
get_header();
?>
    <?php $idioma = get_locale();?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__banner">
                <div class="content__banner">
                    <div class="image">
                        <img class="banner__desktop" src="<?php the_field('banner'); ?>" alt="Atuação">
                        <img class="banner__mobile" src="<?php the_field('banner_mobile'); ?>" alt="Atuação">
                    </div>
                </div>
            </section>

            <section class="section__escritorio">
                <div class="image">
                    <img src="<?php the_field('imagem_escritorio'); ?>" alt="">
                </div>
                
                <div class="shell">
                    <div class="content__escritorio">
                        <h2><?php the_field('titulo_escritorio'); ?></h2>
                        <div class="text__description">
                            <?php the_field('texto_escritorio'); ?>
                        </div>
                    </div>

                    <div class="inner__escritorio" data-group="services">
                        <?php if ($idioma === 'pt_BR') : ?>
                            <div class="wrapper__buttons">
                                <a href="" data-click="Tributário" class="btn__accordeon">Tributário</a>
                                <a href="" data-click="Societário, contratos e empresarial" class="btn__accordeon">Societário, contratos e empresarial</a>
                                <a href="" data-click="Títulos de dívida, Fundos de investimento e Mercado de Capitais" class="btn__accordeon">Títulos de dívida, Fundos de investimento e Mercado de Capitais</a>
                                <a href="" data-click="Infraestrutura e regulatório" class="btn__accordeon">Infraestrutura e regulatório</a>
                                <a href="" data-click="Governança corporativa" class="btn__accordeon">Governança corporativa</a>
                            </div>
                        <?php elseif ($idioma === 'en_US') : ?>
                            <div class="wrapper__buttons">
                                <a href="" data-click="Tributary" class="btn__accordeon">Tributary</a>
                                <a href="" data-click="Corporate, contracts and business" class="btn__accordeon">Corporate, contracts and business</a>
                                <a href="" data-click="Debt Securities, Investment Funds and Capital Markets" class="btn__accordeon">Debt Securities, Investment Funds and Capital Markets</a>
                                <a href="" data-click="Infrastructure and regulatory" class="btn__accordeon">Infrastructure and regulatory</a>
                                <a href="" data-click="Corporate governance" class="btn__accordeon">Corporate governance</a>
                            </div>
                        <?php endif ?>

                        <div class="box__escritorio">
                            <?php if(have_rows('conteudos_escritorio')): while(have_rows('conteudos_escritorio')) : the_row(); ?>
                            <div class="box" data-target="<?php the_sub_field('titulo'); ?>">
                                <h3><?php the_sub_field('titulo'); ?></h3>
                                <div class="text">
                                    <?php the_sub_field('texto'); ?>
                                </div>
                            </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__atuacao">
                <div class="shell">
                    <div class="content__atuacao">
                        <h1><?php the_field('titulo_atuacao'); ?></h1>
                        <h3><?php the_field('pre_texto'); ?></h3>
                    </div>
                </div>

                <div class="inner__atuacao__slide">
                    <div class="instrucao__mobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-purple.png" alt="">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <p>Arraste para o lado e conheça todas as áreas de atuação</p>
                        <?php elseif ($idioma === 'en_US') : ?>
                        <p>Drag to the side and learn about all areas of activity</p>
                        <?php endif ?>
                    </div>

                    <div class="row__wrapper__slide">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <a href="#zero" class="btn__wrapper active">
                            <i class="ico-energia"></i>
                            <p>Energia</p>
                        </a>
                        <a href="#one" class="btn__wrapper">
                            <i class="ico-oil"></i>
                            <p>Oil & Gas</p>
                        </a>
                        <a href="#two" class="btn__wrapper">
                            <i class="ico-meios"></i>
                            <p>Meios e Instituições de Pagamentos</p>
                        </a>
                        <a href="#three" class="btn__wrapper">
                            <i class="ico-wealth"></i>
                            <p>Wealth planning</p>
                        </a>
                        <a href="#four" class="btn__wrapper">
                            <i class="ico-relacoes"></i>
                            <p>Relações empresariais do esporte</p>
                        </a>
                        <a href="#five" class="btn__wrapper">
                            <i class="ico-mineracao"></i>
                            <p>Mineração</p>
                        </a>
                        <a href="#six" class="btn__wrapper">
                            <i class="ico-industria"></i>
                            <p>Indústria e varejo</p>
                        </a>
                        <a href="#seven" class="btn__wrapper">
                            <i class="ico-economia"></i>
                            <p>Economia colaborativa e digital</p>
                        </a>
                        <a href="#eight" class="btn__wrapper">
                            <i class="ico-financeiro"></i>
                            <p>Financeiro, Seguros e Previdência</p>
                        </a>
                        <?php elseif ($idioma === 'en_US') : ?>
                        <a href="#zero" class="btn__wrapper">
                            <i class="ico-energia"></i>
                            <p>Energy</p>
                        </a>
                        <a href="#one" class="btn__wrapper">
                            <i class="ico-oil"></i>
                            <p>Oil & Gas</p>
                        </a>
                        <a href="#two" class="btn__wrapper">
                            <i class="ico-meios"></i>
                            <p>Means and Institutions of Payments</p>
                        </a>
                        <a href="#three" class="btn__wrapper">
                            <i class="ico-wealth"></i>
                            <p>Wealth planning</p>
                        </a>
                        <a href="#four" class="btn__wrapper">
                            <i class="ico-relacoes"></i>
                            <p>Relations business of sport</p>
                        </a>
                        <a href="#five" class="btn__wrapper">
                            <i class="ico-mineracao"></i>
                            <p>Mining</p>
                        </a>
                        <a href="#six" class="btn__wrapper">
                            <i class="ico-industria"></i>
                            <p>Industry and retail</p>
                        </a>
                        <a href="#seven" class="btn__wrapper">
                            <i class="ico-economia"></i>
                            <p>Collaborative and digital economy</p>
                        </a>
                        <a href="#eight" class="btn__wrapper">
                            <i class="ico-financeiro"></i>
                            <p>Finance, Insurance and Pensions</p>
                        </a>
                        <?php endif ?>
                    </div>

                    <div class="content__atuacao__slide slider-atuacao">
                        <?php if(have_rows('conteudo_slider')): while(have_rows('conteudo_slider')) : the_row(); ?>
                        <div class="box__slide" data-hash="<?php the_sub_field('hash'); ?>">
                            <div class="image">
                                <img src="<?php the_sub_field('imagem'); ?>" alt="">
                            </div>

                            <div class="description">
                                <h3><?php the_sub_field('titulo'); ?></h3>
                                <div class="text">
                                    <?php the_sub_field('texto'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </section>

            <section class="section__servicos__reconhecimento">
                <?php if ($idioma === 'pt_BR') : ?>
                <h2>CONHEÇA O ALMA LAW</h2>
                <a href="<?php echo get_home_url(); ?>/institucional" class="btn btn__outline__white">
                    Saiba mais
                </a>
                <?php elseif ($idioma === 'en_US') : ?>
                <h2>GET TO KNOW ALMA LAW</h2>
                <a href="<?php echo get_home_url(); ?>/institutional" class="btn btn__outline__white">
                    Know more
                </a>
                <?php endif ?>
            </section>
        </main>
    <?php } } ?>
<?php get_footer(); ?>