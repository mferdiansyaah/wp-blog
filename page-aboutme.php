<?php
get_header();
?>

<section class="about-page">

    <div class="about-intro">
        <div class="about-intro__image">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail(
                    'large',
                    array(
                        'class' => 'about-intro__photo',
                    )
                );
            }
            ?>
        </div>
        <div class="about-intro__content">

            <p class="about-intro__eyebrow">
                <?php esc_html_e('About Me', 'mhdferdiansyah-blog'); ?>
            </p>

            <h1 class="about-intro__title">
                Hi, I'm Muhammad Ferdiansyah.
            </h1>

            <p class="about-intro__lead">
                I'm a Network Engineer with 4+ years of experience
                in Network Engineering and Infrastructure Operations.
                Experienced in team coordination and operational management. Passionate about
                Offensive Security, Backend Development, and Blockchain/Web3.
            </p>

            <div class="about-intro__text">
                <?php
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>

            <?php
            $email     = get_theme_mod('mhdferdiansyah_blog_email');
            $linkedin  = get_theme_mod('mhdferdiansyah_blog_linkedin_url');
            $github    = get_theme_mod('mhdferdiansyah_blog_github_url');
            $instagram = get_theme_mod('mhdferdiansyah_blog_instagram_url');
            $x_url     = get_theme_mod('mhdferdiansyah_blog_x_url');
            ?>

            <div
                class="about-social"
                aria-label="<?php esc_attr_e('Social links', 'mhdferdiansyah-blog'); ?>">

                <?php if ($email) : ?>
                    <a
                        href="mailto:<?php echo esc_attr(antispambot($email)); ?>"
                        aria-label="<?php esc_attr_e('Email', 'mhdferdiansyah-blog'); ?>">
                        Email
                    </a>
                <?php endif; ?>

                <?php if ($linkedin) : ?>
                    <a
                        href="<?php echo esc_url($linkedin); ?>"
                        target="_blank"
                        rel="me noopener noreferrer">
                        LinkedIn
                    </a>
                <?php endif; ?>

                <?php if ($github) : ?>
                    <a
                        href="<?php echo esc_url($github); ?>"
                        target="_blank"
                        rel="me noopener noreferrer">
                        GitHub
                    </a>
                <?php endif; ?>

                <?php if ($instagram) : ?>
                    <a
                        href="<?php echo esc_url($instagram); ?>"
                        target="_blank"
                        rel="me noopener noreferrer">
                        Instagram
                    </a>
                <?php endif; ?>

                <?php if ($x_url) : ?>
                    <a
                        href="<?php echo esc_url($x_url); ?>"
                        target="_blank"
                        rel="me noopener noreferrer">
                        X
                    </a>
                <?php endif; ?>

            </div>

        </div>

    </div>
    <section class="about-section">

        <div class="about-section__heading">
            <span>01</span>
            <h2>Experience</h2>
        </div>

        <div class="experience-list">
            <article class="experience-company">

                <div class="experience-company__header">
                    <div>
                        <h3>J&amp;T Express</h3>
                        <p class="experience-company__type">
                            Part-time · 1 yr 7 mos
                        </p>
                        <p class="experience-company__location">
                            Medan, North Sumatra, Indonesia · On-site
                        </p>
                    </div>
                </div>


                <div class="experience-roles">
                    <div class="experience-role">
                        <div class="experience-role__marker"></div>
                        <div class="experience-role__content">
                            <div class="experience-role__top">

                                <h4>
                                    Assistant Warehouse Coordinator
                                </h4>
                                <time>
                                    Mar 2026 — Present
                                </time>
                            </div>

                            <p class="experience-role__duration">
                                6 mos
                            </p>
                        </div>

                    </div>

                    <div class="experience-role">
                        <div class="experience-role__marker"></div>
                        <div class="experience-role__content">
                            <div class="experience-role__top">
                                <h4>
                                    Warehouse Keeper
                                </h4>
                                <time>
                                    Feb 2025 — Jun 2026
                                </time>
                            </div>
                            <p class="experience-role__duration">
                                1 yr 5 mos
                            </p>
                        </div>
                    </div>
                </div>

            </article>

            <article class="experience-company">

                <div class="experience-company__header">

                    <div>
                        <h3>WanXP Internet Service Provider</h3>
                        <p class="experience-company__type">
                            Full-time · 2 yrs 3 mos
                        </p>
                        <p class="experience-company__location">
                            Pekanbaru, Riau, Indonesia · On-site
                        </p>
                    </div>
                </div>


                <div class="experience-roles">
                    <div class="experience-role">
                        <div class="experience-role__marker"></div>
                        <div class="experience-role__content">
                            <div class="experience-role__top">
                                <h4>
                                    Network Operations Center Engineer
                                </h4>
                                <time>
                                    Apr 2024 — Sep 2024
                                </time>
                            </div>
                            <p class="experience-role__duration">
                                6 mos
                            </p>
                        </div>
                    </div>

                    <div class="experience-role">
                        <div class="experience-role__marker"></div>
                        <div class="experience-role__content">
                            <div class="experience-role__top">
                                <h4>
                                    Network Engineer
                                </h4>
                                <time>
                                    Jul 2022 — Sep 2024
                                </time>
                            </div>
                            <p class="experience-role__duration">
                                2 yrs 3 mos
                            </p>
                        </div>
                    </div>
                </div>

            </article>
            <article class="experience-company experience-company--single-role">

                <div class="experience-company__header">
                    <div>
                        <h3>Network Support Engineer — Politeknik Caltex Riau</h3>
                        <p class="experience-company__type">
                            Contract
                        </p>
                        <p class="experience-company__location">
                            Pekanbaru, Riau, Indonesia · On-site
                        </p>
                    </div>
                </div>
                <div class="experience-roles">
                    <div class="experience-role">
                        <div class="experience-role__content">
                            <div class="experience-role__top">
                                <time>
                                    Jun 2024 — Aug 2024
                                </time>
                            </div>
                            <p class="experience-role__duration">
                                3 mos
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="experience-company experience-company--single-role">
                <div class="experience-company__header">
                    <div>
                        <h3>Network Engineer — Global Komunikasi Mandiri, PT</h3>
                        <p class="experience-company__type">
                            Contract
                        </p>
                        <p class="experience-company__location">
                            Samarinda, East Kalimantan, Indonesia · On-site
                        </p>
                    </div>
                </div>

                <div class="experience-roles">
                    <div class="experience-role">
                        <div class="experience-role__content">
                            <div class="experience-role__top">
                                <time>
                                    Oct 2023 — Apr 2024
                                </time>
                            </div>
                            <p class="experience-role__duration">
                                7 mos
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="experience-company experience-company--single-role">
                <div class="experience-company__header">
                    <div>
                        <h3>Network Engineer — APP Group - OKI Pulp & Paper Mills</h3>
                        <p class="experience-company__type">
                            Contract
                        </p>
                        <p class="experience-company__location">
                            Palembang, South Sumatra, Indonesia · On-site
                        </p>
                    </div>
                </div>

                <div class="experience-roles">
                    <div class="experience-role">
                        <div class="eperience-role__content">
                            <div class="experience-role__top">
                                <time>
                                    Dec 2022 — Apr 2023
                                </time>
                            </div>
                            <p class="experience-role__duration">
                                5 mos
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>

    </section>


    <section class="about-section about-education">

        <div class="about-section__heading">
            <span>02</span>
            <h2>Education</h2>
        </div>

        <div class="education-list">


            <article class="education-item">

                <div class="education-item__content">

                    <h3>
                        Universitas Muhammadiyah Sumatera Utara
                    </h3>

                    <p>
                        Bachelor's Degree, Information Technology
                    </p>

                    <time>
                        2024 — 2028
                    </time>

                </div>

            </article>


            <article class="education-item">

                <div class="education-item__content">

                    <h3>
                        SMK Telkom 1 Medan
                    </h3>

                    <p>
                        Computer Network Engineering
                    </p>

                    <time>
                        2019 — 2022
                    </time>

                </div>

            </article>

        </div>

    </section>

</section>

<?php
get_footer();
