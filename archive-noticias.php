<?php
// Template Name: Notícias
get_header();
?>
<?php $noticia = get_page_by_title('Notícias'); ?>
<?php $news = get_page_by_title('News'); ?>
<?php get_header(); ?>
<?php $idioma = get_locale();?> 
    <main>
        <section class="section__banner">
            <div class="content__banner">
                <div class="image">
                    <?php if ($idioma === 'pt_BR') : ?>
                    <img class="banner__desktop" src="<?php the_field('banner_noticias', $noticia); ?>" alt="Notícias">
                    <img class="banner__mobile" src="<?php the_field('banner_noticias_mobile', $noticia); ?>" alt="Notícias">
                    <?php elseif ($idioma === 'en_US') : ?>
                    <img class="banner__desktop" src="<?php the_field('banner_noticias', $news); ?>" alt="Notícias">
                    <img class="banner__mobile" src="<?php the_field('banner_noticias_mobile', $news); ?>" alt="Notícias">
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
                        <?php echo do_shortcode('[ajax_load_more css_classes="inner__posts" post_type="noticias" posts_per_page="6" order="DESC" scroll="false" button_label="Ver mais" button_done_label="Não existes mais notícias"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>