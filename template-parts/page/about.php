<!-- About section
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'about',
            );
            $arr_posts = new WP_Query($args);
            // Generate
            if ($arr_posts->have_posts()) :
                $index = 1;
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
            ?>
                    <?php if ($index == 1) : ?>
                        <div class="wow fadeInUp col-md-4 col-sm-5" data-wow-delay="1.3s">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <?php the_content(); ?>
                        </div>

                    <?php elseif ($index == 2) : ?>
                        <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="1.6s">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <?php the_content(); ?>
                        </div>

                    <?php elseif ($index < 6) : ?>
                        <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="<?php echo ($index - 2) * 0.4; ?>s">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <?php the_content(); ?>
                        </div>

                    <?php else : ?>
                        <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="<?php echo 1.4 + ($index - 6) * 0.2; ?>s">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <?php the_content(); ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // Clear Fix Part
                    if ($index == 2 || $index == 5) : ?>
                        <div class="clearfix"></div>
                    <?php endif; ?>
            <?php
                    $index++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>