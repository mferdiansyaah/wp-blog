<?php

get_header();
?>

<section class="posts-archive">
    <header class="posts-archive__header">

        <h1 class="posts-archive__title">
            <?php the_title(); ?>
        </h1>

        <p class="posts-archive__description">
            All the things I've written, learned, and documented.
        </p>
    </header>

    <div class="posts-archive__tools">

        <form
            class="posts-search"
            role="search"
            method="get"
            action="<?php echo esc_url(home_url('/')); ?>">

            <label
                class="screen-reader-text"
                for="posts-search-input">
                <?php esc_html_e('Search posts', 'mhdferdiansyah-blog'); ?>
            </label>

            <input
                type="search"
                id="posts-search-input"
                name="s"
                value="<?php echo esc_attr(get_search_query()); ?>"
                placeholder="<?php esc_attr_e('Search my posts...', 'mhdferdiansyah-blog'); ?>"
                required>

            <button type="submit">
                Search
            </button>

        </form>


        <nav
            class="posts-categories"
            aria-label="<?php esc_attr_e('Post categories', 'mhdferdiansyah-blog'); ?>">

            <a
                class="posts-category <?php echo ! is_category() ? 'is-active' : ''; ?>"
                href="<?php echo esc_url(get_permalink()); ?>">
                All
            </a>
            <?php
            $categories = get_categories(
                array(
                    'hide_empty' => true,
                )
            );

            foreach ($categories as $category) :
            ?>
                <a
                    class="posts-category <?php echo is_category($category->term_id) ? 'is-active' : ''; ?>"
                    href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                    <?php echo esc_html($category->name); ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </div>


    <div class="posts-archive__list">

        <?php
        $posts_query = new WP_Query(
            array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
            )
        );
        ?>

        <?php if ($posts_query->have_posts()) : ?>

            <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>

                <article class="archive-post">

                    <a
                        class="archive-post__link"
                        href="<?php the_permalink(); ?>">

                        <div class="archive-post__main">

                            <h2 class="archive-post__title">
                                <?php the_title(); ?>
                            </h2>

                            <?php
                            $categories = get_the_category();

                            if (! empty($categories)) :
                            ?>

                                <span class="archive-post__category">
                                    <?php echo esc_html($categories[0]->name); ?>
                                </span>

                            <?php endif; ?>

                        </div>


                        <div class="archive-post__meta">

                            <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                                <?php echo esc_html(get_the_date('d M Y')); ?>
                            </time>

                            <span
                                class="archive-post__arrow"
                                aria-hidden="true">
                                →
                            </span>
                        </div>
                    </a>

                </article>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <p class="posts-archive__empty">
                <?php
                esc_html_e(
                    'No posts have been published yet.',
                    'mhdferdiansyah-blog'
                );
                ?>
            </p>

        <?php endif; ?>

    </div>

</section>

<?php
get_footer();
