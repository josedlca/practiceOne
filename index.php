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
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php get_template_part('content', get_post_format()); ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php __('No Posts Found'); ?></p>
                    <?php endif; ?>
                </div>
                </div>
            </div>

        </main>
<?php get_footer(); ?>