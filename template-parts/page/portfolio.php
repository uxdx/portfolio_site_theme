<!-- Portfolio section
================================================== -->
<section id="portfolio">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">

                <!-- iso section -->
                <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">
                    <ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <?php
                        // 자식 카테고리들로 리스트 생성
                        $parent_id = get_category_by_slug('portfolio')->cat_ID;
                        $categories = get_categories(
                            array('parent' => $parent_id)
                        );
                        foreach ($categories as $category) {
                            $category_link = sprintf(
                                '<a href="%1$s" alt="%2$s" class="%4$s opc-main-bg" data-filter=".%4$s">%3$s</a>',
                                esc_url("#"),
                                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
                                esc_html($category->name),
                                strtolower($category->slug)
                            );
                            // 아래는 각종 예시용
                            // echo '<p>' . sprintf( esc_html__( 'Category: %s', 'textdomain' ), $category_link ) . '</p> ';
                            // echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
                            // echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';

                            echo '<li>' . $category_link . '</li>';
                        }
                        ?>
                        <!-- 아래는 템플릿  -->
                        <!-- <li><a href="#" class="opc-main-bg" data-filter=".graphic">Graphic</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".template">Web template</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".branding">Branding</a></li> -->
                    </ul>
                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                        <div class="iso-box-wrapper col4-iso-box">
                            <?php
                            // 포트폴리오 박스 동적 생성 원리
                            // 1차적으로 portfolio 카테고리에 속한 포스트를 생성,
                            // 2차로 세부 카테고리에 속한 포스트를 클래스로 추가
                            // html부분(div선언 및 클래스추가)만 php로 담당하고 디자인부분은 js와 css에 넘김

                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'category_name' => 'portfolio', // 상위 카테고리 
                            );
                            $arr_posts = new WP_Query($args);

                            // Generate
                            if ($arr_posts->have_posts()) :
                                while ($arr_posts->have_posts()) :
                                    $arr_posts->the_post();
                                    // 

                            ?>
                                    <div class="iso-box col-md-4 col-sm-6 <?php $categories = get_the_category(get_the_ID());
                                                                            foreach ($categories as $cat) {
                                                                                echo $cat->slug;
                                                                                echo ' ';
                                                                            } ?>">
                                        <div class="portfolio-thumb">
                                            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]; ?>" class="img-responsive" alt="Portfolio">
                                            <div class="portfolio-overlay">
                                                <div class="portfolio-item">
                                                    <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                                                    <h2><?php the_title(); ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>