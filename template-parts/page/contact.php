<!-- Contact section
================================================== -->
<section id="contact">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
                <div class="google_map">
                    <div id="map-canvas"></div>
                </div>
            </div>

            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
                <h1>Let's work together!</h1>
                <div class="contact-form">
                    <form id="contact-form" method="post" action="#">
                        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                        <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                        <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
                        <div class="contact-submit">
                            <input type="submit" class="form-control submit" value="Send a message">
                        </div>
                    </form>
                </div>
            </div>

            <div class="clearfix"></div>
            <?php
            // ACF 변수 선언
            $phone = get_field('phone');
            $email = get_field('email');
            $sns = get_field('sns');
            ?>
            <div class="col-md-4 col-sm-4">
                <div class="wow fadeInUp media" data-wow-delay="0.3s">
                    <div class="media-object pull-left">
                        <i class="fa fa-tablet"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Phone</h3>
                        <p><?php echo $phone; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="wow fadeInUp media" data-wow-delay="0.6s">
                    <div class="media-object pull-left">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Email</h3>
                        <p><?php echo $email; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="wow fadeInUp media" data-wow-delay="0.9s">
                    <div class="media-object pull-left">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SNS</h3>
                        <p><?php echo $sns; ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>