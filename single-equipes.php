<?php get_header(); ?>
    <?php $idioma = get_locale();?>
    <main>
        <section class="section__dados__pessoal">
            <div class="shell">
                <?php if ($idioma === 'pt_BR') : ?>
                <a href="<?php echo get_home_url(); ?>/nossa-equipe" class="before">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/SetaVoltar_Icone.svg" alt="">
                </a>
                <?php elseif ($idioma === 'en_US') : ?>
                <a href="<?php echo get_home_url(); ?>/our-team" class="before">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/SetaVoltar_Icone.svg" alt="">
                </a>
                <?php endif ?>

                <div class="content__dados__pessoal">
                    <h1 class="name__mobile"><?php the_field('nome'); ?></h1>
                    <h6 class="cargo__mobile"><?php the_field('cargo'); ?></h6>

                    <div class="photo">
                        <img src="<?php the_field('foto'); ?>" alt="">
                    </div>

                    <div class="description">
                        <h1><?php the_field('nome'); ?></h1>
                        <h6><?php the_field('cargo'); ?></h6>

                        <div class="contact">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/NomeECel_Icone_PaginaEquipe.svg" alt="">
                            </div>

                            <div class="info">
                                <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                                <a href="tel:+55<?php the_field('telefone'); ?>">C. <?php the_field('telefone'); ?></a>
                            </div>
                        </div>

                        <div class="redes">
                            <a href="<?php the_field('cartao_digital'); ?>" class="btn btn__outline__primary" download>Baixar cartão digital</a>

                            <a href="<?php the_field('link_do_linkedin'); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Linkedin_Icone_PaginaEquipe.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-equipe"></div>
        </section>

        <section class="section__formacao">
            <div class="shell">
                <div class="content__formacao">
                    <div class="education">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <h2>Educação</h2>
                        <?php elseif ($idioma === 'en_US') : ?>                        
                        <h2>EDUCATION</h2>
                        <?php endif ?>

                        <?php if(have_rows('educacao')): while(have_rows('educacao')) : the_row(); ?>
                        <ul>
                            <li>
                                <?php the_sub_field('texto'); ?>
                            </li>
                        </ul>
                        <?php endwhile; else : endif; ?>
                    </div>

                    <div class="idiomas">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <h2>idiomas</h2>
                         <?php elseif ($idioma === 'en_US') : ?>                        
                        <h2>LANGUAGES</h2>
                        <?php endif ?>

                        <?php if(have_rows('idiomas')): while(have_rows('idiomas')) : the_row(); ?>
                        <ul>
                            <li>
                                <?php the_sub_field('texto'); ?>
                            </li>
                        </ul>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__experiencia">
            <div class="shell">
                <div class="content__experiencia">
                    <?php if ($idioma === 'pt_BR') : ?>
                    <h2>Experiência</h2>
                    <?php elseif ($idioma === 'en_US') : ?>                        
                    <h2>EXPERIENCE</h2>
                    <?php endif ?>
                    
                    <div class="inner__experiencia">
                        <ul>
                            <?php if(have_rows('experiencia')): while(have_rows('experiencia')) : the_row(); ?>
                            <li>
                                <?php the_sub_field('texto'); ?>
                            </li>
                            <?php endwhile; else : endif; ?>
                        </ul>
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
            <a href="<?php echo get_home_url(); ?>/activities" class="btn btn__outline__white">
                Know more
            </a>
            <?php endif ?>
        </section>
    </main>
<?php get_footer(); ?>