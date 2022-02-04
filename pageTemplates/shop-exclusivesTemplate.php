<?php 
/* 
	Template Name: Shop Exclusives Template 
*/
    get_header(); ?>

    <section class="shop-exclusive padding-main">
        <div class="container">
            <div class="iner-shop-all">
                <div class="shop-flex-all">
                    <div class="shop-width-all">
                        <h1>Shop Exclusives</h1>
                    </div>
                    <div class="shop-width-all1">
                        <p>Choose the perfect luxury bouquet for any occasion from our large selection of artfully curated and perfectly preserved rose arrangements</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="picks-home padding-main">
        <div class="container">
            <div class="pick-flex">
                <?php  $args = array(  
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                );

                $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); global $product;  ?>
                
                <div class="pick-width">
                    <div class="picks-img">
                        <!-- <?php if( has_post_thumbnail() ) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <?php } else { ?>
                            <img src="images/picks1.png">
                        } ?> -->
                         <!-- <h3><?php the_title(); ?></h3> -->
                        <!-- <p>From $269</p> -->
                        <!-- <a class="default-btn1" href="<?php the_permalink(); ?>">SHOP NOW</a> -->
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata();  
            ?>
        </div>
        <div class="view-all" id="mobile-pad">
            <a href="#">Load More</a>
        </div>
    </div>
</div>
</section>
<section class="insta-home padding-main">
    <div class="container">
        <div class="iner-insta">
            <img src="images/crown.png">
            <h2>Shop Our Instagram</h2>
            <p>@Ribaat ClothingOfficial</p>
        </div>
    </div>
</section>
<footer class="main-footer">
    <div class="container">
        <div class="footer-flex">
            <div class="footer-width">
                <div class="inner-foter">
                    <p>Discover</p>
                    <div class="footer-na">
                        <ul>
                            <li><a href="#">Our Blog</a></li>
                            <li><a href="location.html">Store Locations</a></li>
                            <li><a href="gf-secret.html">Ribaat Clothing Expirience</a></li>
                            <li><a href="#">Shop Instagram</a></li>
                            <li><a href="faqs.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="footer-width">
                <div class="inner-foter">
                    <p>Customer Service</p>
                    <div class="footer-na">
                        <ul>
                            <li><a href="support.html">Support</a></li>
                            <li><a href="shipping-policy.html">Shipping Policy</a></li>
                            <li><a href="refund-policy.html">Refund Policy</a></li>
                            <li><a href="term-services.html">Terms of Service</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="footer-width">
                <div class="inner-foter">
                    <p id="border-none-mobile">Let’s Stay In Touch</p>
                    <div class="social" id="mobile-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="footer-width1" id="mobile-space">
                <div class="iner-d">
                    <div class="inner-foter">
                        <p id="space-mob">Be the first to hear about new releases, limited editions & more</p>
                        <form>
                            <div class="form-fo">
                                <input type="email" placeholder="Enter your email">
                                <button type="submit" class="plane"><img src="images/em.png"></button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="botom-line">
            <p>© Glam Flerur LLC. All Rights Reserved</p>
        </div>
    </div>
</footer>

<?php get_footer(); ?>