<?php get_header(); ?>
<!-- Header section -->
<?php
// ACF 변수 선언
$title = get_field('title');
$subtitle = get_field('subtitle');
?>
<section id="header" class="header-five">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                <div class="header-thumb">
                    <h1 class="wow fadeIn" data-wow-delay="0.6s"><?php echo $title; ?></h1>
                    <h3 class="wow fadeInUp" data-wow-delay="0.9s"><?php echo $subtitle; ?></h3>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Blog section -->
<section id="blog">
    <div class="container">
        <div class="row">
            <?php
            function echo_post($post_object, $delay, $size)
            {
                if ($post_object) :
                    $post = $post_object;
                    setup_postdata($post);
                    $title = get_the_title();
                    $img_src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0];
                    $author = get_the_author();
                    $date = get_the_date();
                    $content = get_the_content();
                    $permalink = get_the_permalink();
                    echo <<<CONTENTS
                    <div class="wow fadeInUp col-md-$size col-sm-$size" data-wow-delay="$delay">
                            <div class="blog-thumb">
                                <a href="$permalink"><img src="$img_src" class="img-responsive" alt="Blog"></a>
                                <a href="$permalink">
                                    <h1>$title</h1>
                                </a>
                                <div class="post-format">
                                    <span>By <a href="#">$author</a></span>
                                    <span><i class="fa fa-date"></i> $date </span>
                                </div>
                                $content;
                                <a href="$permalink" class="btn btn-default">Full Article</a>
                            </div>
                    </div>
                    CONTENTS;
                    wp_reset_postdata();
                endif;
            }
            // Array 
            if (have_rows('post_array')) :
                while (have_rows('post_array')) : the_row();
                    $post1 = get_sub_field('post1');
                    if ($post1) :
                        echo_post($post1, 1, 6); //딜레이1초, 사이즈 md-6, sm-6
                    endif;
                    $post2 = get_sub_field('post2');
                    if ($post2) :
                        echo_post($post2, 1.4, 6);
                    endif;
                    $post3 = get_sub_field('post3');
                    if ($post3) :
                        echo_post($post3, 1.6, 4);
                    endif;
                    $post4 = get_sub_field('post4');
                    if ($post4) :
                        echo_post($post4, 2, 4);
                    endif;
                    $post5 = get_sub_field('post5');
                    if ($post5) :
                        echo_post($post5, 2.2, 4);
                    endif;
                endwhile;
            else :
                echo 'post_array를 불러오지 못했습니다.';
            endif;
            ?>


            <!-- <div class="wow fadeInUp col-md-3 col-sm-3" data-wow-delay="2.4s">
                <div class="blog-thumb">
                    <a href="single-post.html"><img src="images/blog-img6.jpg" class="img-responsive" alt="Blog"></a>
                    <a href="single-post.html">
                        <h1>Mountain</h1>
                    </a>
                    <div class="post-format">
                        <span>By <a href="#">Linda</a></span>
                        <span><i class="fa fa-date"></i> 31 May 2016, Tuesday</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                    <a href="single-post.html" class="btn btn-default">Read More</a>
                </div>
            </div>

            <div class="wow fadeInUp col-md-3 col-sm-3" data-wow-delay="1.5s">
                <div class="blog-thumb">
                    <a href="single-post.html"><img src="images/blog-img7.jpg" class="img-responsive" alt="Blog"></a>
                    <a href="single-post.html">
                        <h1>Cloud</h1>
                    </a>
                    <div class="post-format">
                        <span>By <a href="#">Bill Gates</a></span>
                        <span><i class="fa fa-date"></i> 30 May 2016, Monday</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                    <a href="single-post.html" class="btn btn-default">Details</a>
                </div>
            </div>

            <div class="wow fadeInUp col-md-3 col-sm-3" data-wow-delay="1s">
                <div class="blog-thumb">
                    <a href="single-post.html"><img src="images/blog-img8.jpg" class="img-responsive" alt="Blog"></a>
                    <a href="single-post.html">
                        <h1>Blue Sky</h1>
                    </a>
                    <div class="post-format">
                        <span>By <a href="#">Elon Musk</a></span>
                        <span><i class="fa fa-date"></i> 29 May 2016, Sunday</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                    <a href="single-post.html" class="btn btn-default">Read More</a>
                </div>
            </div>

            <div class="wow fadeInUp col-md-3 col-sm-3" data-wow-delay="1.3s">
                <div class="blog-thumb">
                    <a href="single-post.html"><img src="images/blog-img9.jpg" class="img-responsive" alt="Blog"></a>
                    <a href="single-post.html">
                        <h1>Forest</h1>
                    </a>
                    <div class="post-format">
                        <span>By <a href="#">Jack Ma</a></span>
                        <span><i class="fa fa-date"></i> 28 May 2016, Saturday</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                    <a href="single-post.html" class="btn btn-default">Details</a>
                </div>
            </div> -->

            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
                <h1>Interdum et malesuada fames</h1>
                <p>Sed quis laoreet purus, a luctus ligula. Suspendisse nec urna a dolor sodales venenatis. Donec et sem quam. Fusce faucibus neque sit amet arcu auctor tincidunt. Etiam feugiat nibh orci, quis sagittis velit pretium ac. Suspendisse egestas ex a dolor dictum gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis urna id odio consequat fringilla.</p>
                <p>Integer eu rhoncus libero. Nulla dignissim laoreet eros quis interdum. Proin ut placerat dui, eget vehicula ipsum. Mauris id molestie eros. Vestibulum fringilla dui nunc, vitae euismod ligula consectetur eget. Sed accumsan, ipsum in scelerisque euismod, nisi quam placerat urna, ac porttitor augue sapien varius velit.</p>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>