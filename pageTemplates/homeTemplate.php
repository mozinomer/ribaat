<?php 
/* 
	Template Name: Home Page Template 
*/
    get_header(); ?>
    <section class="home-gifts padding-main">
        <div class="container">
            <div class="gift-flex">
                <?php if( have_rows('home_first_column') ): while( have_rows('home_first_column') ) : the_row(); ?>
                    <div class="width-gift">
                        <div class="gift-img">
                            <img src="<?php echo the_sub_field('icon_row_1'); ?>">
                            <h3><?php echo the_sub_field('heading_column'); ?></h3>
                        </div>
                        <div class="gift-para">
                            <p><?php echo the_sub_field('content_column'); ?></p>
                        </div>
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>
    <section class="home-shop padding-main">
        <div class="container">
            <div class="shop-flex">
                <div class="shop-width">
                    <div class="inner-shop">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/product1.png">
                        <div class="lock">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/lock.png">
                        </div>
                        <h2>Exclusives</h2>
                        <p>Exclusive flower bouquets and arrangements for any occasion</p>
                        <span>From $99</span>
                        <div class="adad">
                            <a href="#" class="default-btn1">SHOP NOW</a>
                        </div>

                    </div>

                </div>
                <div class="shop-width">
                    <div class="inner-shop">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/product2.png">
                        <div class="lock">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/lock.png">
                        </div>
                        <h2>Design Your Own</h2>
                        <div class="mn-flower">
                            <div class="uper all-dta">
                                <label class="image-checkbox" title="Yellow">
                                    <input type="radio" name="team[]">
                                    <span class="lala"><img src="<?php echo get_template_directory_uri(); ?>/images/yellow-mellow 1.png"></span>
                                </label>
                                <label class="image-checkbox" title="Light Pink">
                                    <input type="radio" name="team[]">
                                    <span class="lala"><img src="<?php echo get_template_directory_uri(); ?>/images/pink-duchess 1.png"></span>
                                </label>
                                <label class="image-checkbox" title="Dark Pink">
                                    <input type="radio" name="team[]">
                                    <span class="lala"><img src="<?php echo get_template_directory_uri(); ?>/images/glamour-fuschia 1.png"></span>
                                </label>
                                <label class="image-checkbox" title="Off White">
                                    <input type="radio" name="team[]">
                                    <span class="lala"><img src="<?php echo get_template_directory_uri(); ?>/images/blue-ocean 1.png"></span>
                                </label>
                                <label class="image-checkbox" title="Red">
                                    <input type="radio" name="team[]">
                                    <span class="lala"><img src="<?php echo get_template_directory_uri(); ?>/images/brown-cognac 1.png"></span>
                                </label>
                            </div>
                        </div>
                        <span class="colours">+10 more colors</span>
                        <span>From $139</span>
                        <div class="adad">
                            <a href="#" class="default-btn1">DESIGN THE BOX</a>
                        </div>

                    </div>


                </div>
                <div class="shop-width">
                    <div class="inner-shop">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/product3.png">
                        <h2>Occasions</h2>
                        <div class="lock">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/lock.png">
                        </div>
                        <p>Exclusive flower bouquets and arrangements for any occasion</p>
                        <span>From $139</span>
                        <div class="adad">
                            <a href="#" class="default-btn1">SHOP NOW</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="glam-home padding-main">
        <div class="container">
            <div class="glam-main">
                <h1><?php echo the_field('secret_heading'); ?></h1>
                <p><?php echo the_field('secret_content'); ?></p>
                <div class="learn-btn">
                    <a href="<?php echo the_field('secret_link'); ?>" class="learn">Learn more</a>
                </div>
                <div class="inside-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/genuine roses.png">
                </div>
            </div>
        </div>
    </section>
    <section class="picks-home padding-main">
        <div class="container">
            <div class="para-picks">
                <h2>Mother’s Day Picks</h2>
                <p>Let these lovely "Mother's Day Picks" help to express your appreciation</p>
            </div>
            <div class="pick-flex">
                <div class="pick-width">
                    <div class="picks-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/picks1.png">
                        <h3>Red Impala</h3>
                        <p>From $269</p>
                        <button class="default-btn1" type="button">SHOP NOW</button>
                    </div>

                </div>
                <div class="pick-width">
                    <div class="picks-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/picks2.png">
                        <h3>vintage and metallic copper</h3>
                        <p>From $269</p>
                        <button class="default-btn1" type="button">SHOP NOW</button>
                    </div>

                </div>
                <div class="pick-width">
                    <div class="picks-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/picks3.png">
                        <h3>Fuschia and Pink</h3>
                        <p>From $190</p>
                        <button class="default-btn1" type="button">SHOP NOW</button>
                    </div>

                </div>
            </div>
            <div class="view-all">
                <a href="#">View All Picks</a>
            </div>
        </div>
    </section>
    <section class="customer-slider padding-main">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <div class="owl-carousel home-slider owl-theme">
                <?php if( have_rows('customer_testimonials', 'option') ): while( have_rows('customer_testimonials', 'option') ) : the_row(); ?>
                    <div class="item">
                        <div class="in-shape">
                            <div class="inner-slider">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Srars.png">
                                <p><?php the_sub_field('customers_saying', 'option'); ?></p>
                                <span><?php the_sub_field('customer_date', 'option'); ?><br>
                                <?php the_sub_field('customer_name', 'option'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>
    <section class="insta-home">
        <div class="container">
            <div class="iner-insta">
                <img src="<?php echo get_template_directory_uri(); ?>/images/crown.png">
                <h2>Shop Our Instagram</h2>
                <p>@Ribaat ClothingOfficial</p>
            </div>
        </div>
    </section>
    <div class="home-popup">
        <div id="myModal22" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/X.png"></button>
                    <div class="popup-data">
                        <div class="modal-header">

                            <h1 class="modal-title">Want<br>
                            15% Off ?</h1>
                        </div>
                        <div class="modal-body">
                            <h3>Become a VIP and save
                            on your firts order</h3>
                            <form>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <input type="date" class="form-control" placeholder="mm/dd/yyyy">
                                </div>
                                <div class="form-group">
                                    <label>Anniversary</label>
                                    <input type="date" class="form-control" placeholder="mm/dd/yyyy">
                                </div>
                                <p>Who will you give roses to?</p>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Spouse/Partner</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Friends</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Myself</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Family</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Co-workers</label>
                                </div>
                                <div class="pop-btn">
                                    <button type="submit" class="btn btn-primary">GO VIP</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <?php get_footer(); ?>