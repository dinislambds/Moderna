<?php 
// Template Name: Contact Template
get_header(); ?>

    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>

  

    </section>
    <section id="content">
    <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2s!4v1487504703256!6m8!1m7!1s3kGrdRSfw4cgIGHbpPINpQ!2m2!1d23.79137365585335!2d90.34846095694229!3f173.40483612023533!4f-4.783760082561727!5f0.7820865974627469" width="1500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4>Get in touch with us by filling <strong>contact form below</strong></h4>
                
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                } ?>
                
                

            </div>
        </div>
    </div>
    </section>

<?php get_footer(); ?>
