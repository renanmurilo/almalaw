<?php
// Template Name: Publicações
get_header();
?>
<?php $publicacoes = get_page_by_title('Publicações'); ?>
<?php $publications = get_page_by_title('Publications'); ?>
<?php get_header(); ?>
<?php $idioma = get_locale();?>
    <main>
        <section class="section__banner">
            <div class="content__banner">
                <div class="image">
                    <?php if ($idioma === 'pt_BR') : ?>
                    <img class="banner__desktop" src="<?php the_field('banner_publicacoes', $publicacoes); ?>" alt="Publicações">
                    <img class="banner__mobile" src="<?php the_field('banner_publicacoes_mobile', $publicacoes); ?>" alt="Publicações">
                    <?php elseif ($idioma === 'en_US') : ?>
                    <img class="banner__desktop" src="<?php the_field('banner_publicacoes', $publications); ?>" alt="Publications">
                    <img class="banner__mobile" src="<?php the_field('banner_publicacoes_mobile', $publications); ?>" alt="Publications">
                    <?php endif ?>
                </div>
            </div>
        </section>

        <section class="section__posts">
            <div class="shell">
                <div class="wrapper__posts">
                    <div class="busca">
                         <?php echo do_shortcode( '[searchandfilter fields="search" search_placeholder="Busca"]' ); ?>
                    </div>

                    <div class="filter">
<!--?php echo do_shortcode( '[searchandfilter fields="search,category,post_tag" order_dir=",asc,desc" order_by=",id,name" types=",checkbox,radio" headings=",Categories,Tags"]' ); ?-->
                    </div>
                </div>
                
                <div class="content__posts">
                    <div class="inner__posts">
                        <?php echo do_shortcode('[ajax_load_more css_classes="inner__posts" post_type="publicacoes" posts_per_page="6" order="DESC" scroll="false" button_label="Ver mais" button_done_label="Não existes mais publicações"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>