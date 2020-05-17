<?php get_header(); ?>



<!-- Header section -->

<?php
// ACF 변수 선언
$title = get_field('title');
$subtitle = get_field('subtitle');
?>


<section id="header" class="header-three">
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

<!-- About section -->
<?php
get_template_part('template-parts/page/about');
?>


<?php get_footer(); ?>