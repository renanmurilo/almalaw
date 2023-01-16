<?php
// Template Name: Vídeos e podcasts
get_header();
?>
<?php $video = get_page_by_title('Vídeos e podcasts'); ?>
<?php $player = get_page_by_title('Videos and podcasts'); ?>
<?php get_header(); ?>
<?php $idioma = get_locale();?>
    <main>
        <section class="section__banner">
            <div class="content__banner">
                <div class="image">
                    <?php if ($idioma === 'pt_BR') : ?>
                    <img class="banner__desktop" src="<?php the_field('banner_videos_e_podcasts', $video); ?>" alt="Vídeos e podcasts">
                    <img class="banner__mobile" src="<?php the_field('banner_videos_e_podcasts_mobile', $video); ?>" alt="Vídeos e podcasts">
                    <?php elseif ($idioma === 'en_US') : ?>
                    <img class="banner__desktop" src="<?php the_field('banner_videos_e_podcasts', $player); ?>" alt="Videos and podcasts">
                    <img class="banner__mobile" src="<?php the_field('banner_videos_e_podcasts_mobile', $player); ?>" alt="Videos and podcasts">
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
                        <?php echo do_shortcode('[ajax_load_more css_classes="inner__posts" post_type="videos_e_podcasts" posts_per_page="6" order="DESC" scroll="false" button_label="Ver mais" button_done_label="Não existes mais publicações"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>