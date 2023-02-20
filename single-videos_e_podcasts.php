<?php get_header(); ?>

    <?php $idioma = get_locale();?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
    <main>
        <section class="section__cabecalho">
            <div class="shell">
                <div class="content__cabecalho"> 
                    <?php if ($idioma === 'pt_BR') : ?>
                    <a href="<?php echo get_home_url(); ?>/videos_e_podcasts" class="before__page">
                        VÍDEOS E PODCASTS
                    </a>

                    <div class="wrapper__cabecalho">
                        <h1><?php $excerpt = the_title(); echo substr($excerpt, 0, 70); ?></h1>
                        <h2>Autor da notícia <?php the_author(); ?></h2>
                        <h3>Publicado em <?php the_time( 'd/m/Y' ); ?></h3>
                    </div>
                    <?php elseif ($idioma === 'en_US') : ?>
                    <a href="<?php echo get_home_url(); ?>/videos-and-podcasts" class="before__page">
                        VIDEOS AND PODCASTS
                    </a>

                    <div class="wrapper__cabecalho">
                        <h1><?php $excerpt = the_title(); echo substr($excerpt, 0, 70); ?></h1>
                        <h2>News author <?php the_author(); ?></h2>
                        <h3>Posted in <?php the_time( 'd/m/Y' ); ?></h3>
                    </div>
                    <?php endif ?>
                </div>
            </div>
            
            <div class="bg-cabecalho"></div>
        </section>

        <section class="section__descricao__post <?php echo ( get_field('mostrar_background') ? "active" : "") ;?>">
            <div class="shell">
                <div class="content__descricao__post">
                    <div class="banner">
                        <?php the_field('video'); ?>
                    </div>

                    <div class="text__description">
                        <?php the_field('texto'); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__ultimos__posts">
            <div class="shell">
                <div class="content__ultimos__posts">
                    <?php if ($idioma === 'pt_BR') : ?>
                    <h2>ÚLTIMAS PUBLICAÇÕES</h2>
                    <?php elseif ($idioma === 'en_US') : ?>
                    <h2>LATEST PUBLICATIONS</h2>
                    <?php endif ?>

                    <div class="inner__ultimos__posts">
                        <?php
                            $args = array (
                                'post_type' => 'videos_e_podcasts',
                                'order' => 'DESC',
                                'showposts' => 3,
                                'post__not_in'  => array( $post->ID ),
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

        <section class="section__servicos__posts">
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
    <?php } } ?>

<?php get_footer(); ?>