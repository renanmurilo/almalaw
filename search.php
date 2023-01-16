
<?php get_header(); ?>
    <main>

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
                        <?php
                            $term = sanitize_text_field($_GET['s']);
                        if(empty($term)){
                            $term = 'WordPress';
                        }
                            echo do_shortcode('[ajax_load_more css_classes="inner__posts" post_type="publicacoes, noticias, videos_e_podcasts" search="'. $term .'" orderby="relevance" posts_per_page="6" scroll="false" button_label="Ver mais" button_done_label="Não existes mais notícias"]');
                        ?>

                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>