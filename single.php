<?php get_header(); ?>
        <main role="main">
            <section class="jumbotron text-center backgroundImg">
                <img src="<?php header_image(); ?>" />
                <div class="container">
                    <h1 class="jumbotron-heading"><?php bloginfo('name'); ?></h1>
                    <p class="lead text-muted"><?php bloginfo('description'); ?></p>
                    <p>
                        <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary my-2"><?php echo get_theme_mod('btn_text', 'Read More'); ?></a>
                        <a href="<?php echo get_theme_mod('btn2_url', 'http://test.com'); ?>" class="btn btn-secondary my-2"><?php echo get_theme_mod('btn2_text', 'Other Button'); ?></a>
                    </p>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <?php if(have_posts()) : ?>
                            <?php while(have_posts()) : the_post(); ?>
                                <div class="col-md-12">
                                    <div class="card mb-4 shadow-sm">
                                        <div class='thumbnailPost'>
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="card-body">
                                            <h2 class='postName'><?php the_title(); ?></h2>
                                            <p class="card-text"><?php the_content(); ?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a class="text-muted" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                    <?php the_author(); ?>
                                                </a>
                                                <small class="text-muted"><?php the_time('F j, Y g:i a'); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p>No posts</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </main>
<?php get_footer(); ?>