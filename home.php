<?php $blog = get_page_by_title('Alma Contents'); ?>
<?php $idioma = get_locale();?>
<?php get_header(); ?>
    <main>
        <section class="section__banner">
            <div class="content__banner">
                <div class="image">
                    <img class="banner__desktop" src="<?php the_field('banner', $blog); ?>" alt="<?php the_title(); ?>">
                    <img class="banner__mobile" src="<?php the_field('banner_mobile', $blog); ?>" alt="<?php the_title(); ?>">
                </div>
            </div>
        </section>

        <section class="section__blog">
            <div class="shell">
                <div class="content__blog">
                    <div class="row__buttons">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <a href="<?php echo get_home_url(); ?>/noticias" class="btn btn__outline__primary">Notícias</a>
                        <a href="<?php echo get_home_url(); ?>/publicacoes" class="btn btn__outline__primary">Publicações</a>
                        <a href="<?php echo get_home_url(); ?>/videos_e_podcasts" class="btn btn__outline__primary">Vídeos e podcasts</a>
                        <?php elseif ($idioma === 'en_US') : ?>
                        <a href="<?php echo get_home_url(); ?>/news" class="btn btn__outline__primary">News</a>
                        <a href="<?php echo get_home_url(); ?>/publications" class="btn btn__outline__primary">Publications</a>
                        <a href="<?php echo get_home_url(); ?>/videos-and-podcasts" class="btn btn__outline__primary">Videos and podcasts</a>
                        <?php endif ?>
                    </div>

                    <div class="content__destaque">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <h1>Destaques</h1>
                        <?php elseif ($idioma === 'en_US') : ?>
                        <h1>Highlights</h1>
                        <?php endif ?>

                        <div class="inner__destaques slide-post-destaque">
                            <?php
                                $args = array (
                                    'post_type' => 'noticias',
                                    'showposts' => 10,
		                            'post__in' => get_option( 'sticky_posts' )
                                );
                                $the_query = new WP_Query ( $args );
                            ?>

                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <?php include(TEMPLATEPATH . '/include/post-destaque.php'); ?>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__blog__noticias">
            <div class="shell">
                <div class="content__noticias">
                    <div class="widget">
                         <?php if ($idioma === 'pt_BR') : ?>
                        <h2>Notícias</h2>
                        <a href="<?php echo get_home_url(); ?>/noticias" class="btn btn__outline__primary">Saiba mais</a>
                         <?php elseif ($idioma === 'en_US') : ?>
                        <h2>News</h2>
                        <a href="<?php echo get_home_url(); ?>/news" class="btn btn__outline__primary">Know more</a>
                        <?php endif ?>
                    </div>

                    <div class="inner__noticias">
                        <?php
                            $args = array (
                                'post_type' => 'noticias',
                                'order' => 'DESC',
                                'showposts' => 3,
                                'post__not_in',
                                'ignore_sticky_posts' => true,
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

        <section class="section__blog__publicacoes">
            <div class="shell">
                <div class="content__publicacoes">
                    <div class="widget">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <h2>Publicações</h2>
                        <a href="<?php echo get_home_url(); ?>/publicacoes" class="btn btn__outline__white">Saiba mais</a>
                         <?php elseif ($idioma === 'en_US') : ?>
                        <h2>Publications</h2>
                        <a href="<?php echo get_home_url(); ?>/publications" class="btn btn__outline__white">Know more</a>
                        <?php endif ?>
                    </div>

                    <div class="inner__publicacoes">
                        <?php
                            $args = array (
                                'post_type' => 'publicacoes',
                                'order' => 'DESC',
                                'showposts' => 3,
                            );
                            $the_query = new WP_Query ( $args );
                        ?>

                        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <?php include(TEMPLATEPATH . '/include/post.php'); ?>
                        <?php endwhile; else : endif; ?>
                        <?php  wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__blog__videos">
            <div class="shell">
                <div class="content__videos">
                   <div class="widget">
                        <?php if ($idioma === 'pt_BR') : ?>
                        <h2>Vídeos e podcasts</h2>
                        <a href="<?php echo get_home_url(); ?>/videos_e_podcasts" class="btn btn__outline__primary">Saiba mais</a>
                         <?php elseif ($idioma === 'en_US') : ?>
                        <h2>Videos and podcasts</h2>
                        <a href="<?php echo get_home_url(); ?>/videos-and-podcasts" class="btn btn__outline__primary">Know more</a>
                        <?php endif ?>
                   </div>

                    <div class="inner__videos">
                        <?php
                            $args = array (
                                'post_type' => 'videos_e_podcasts',
                                'order' => 'DESC',
                                'showposts' => 3,
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
<?php get_footer(); ?>