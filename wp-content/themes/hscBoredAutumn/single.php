<?php get_header(); ?>
            <div class="row">
                <h2 style="margin-top: 0;"><?php echo strtoupper(get_the_title($PostID)); /*PageID from header*/ ?></h2>
            </div>
            <div class="eventWrapper eventContent" style="margin: 0 -15px;">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <?php
                                    // check if the post has a Post Thumbnail assigned to it.
                                    if ( has_post_thumbnail() ) {
                                    	the_post_thumbnail('full', array('class' => 'img-responsive'));
                                    }
                                ?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h3 style="margin: 0;">Thursday, July 10 at 8 PM</h3>
                                <p style="line-height: 1.7;">
                                    <?php
                                    if((get_post_meta($post->ID, 'location', true)))
                                    {
                                    ?>
                                    <strong>LOCATION:</strong> <?php $key="location"; echo get_post_meta($post->ID, $key, true); ?><br>
                                    <?php
                                    }

                                    if((get_post_meta($post->ID, 'price', true)))
                                    {
                                    ?>
                                    <strong>PRICE:</strong> <?php $key="price"; echo get_post_meta($post->ID, $key, true); ?><br>
                                    <?php
                                    }

                                    if((get_post_meta($post->ID, 'ticket_url', true)))
                                    {
                                    ?>
                                    <strong>GET TICKETS:</strong> <a href="<?php $key='ticket_url'; echo get_post_meta($post->ID, $key, true); ?>" target="_blank">Click Here</a><br>
                                    <?php
                                    }

                                    if((get_post_meta($post->ID, 'interests', true)))
                                    {
                                    ?>
                                    <strong>INTERESTS:</strong> <?php $key='interests'; echo get_post_meta($post->ID, $key, true); ?><br>
                                    <?php
                                    }

                                    if((get_post_meta($post->ID, 'facebook_url', true)))
                                    {
                                    ?>
                                    <a href="<?php $key='facebook_url'; echo get_post_meta($post->ID, $key, true); ?>">
                                        <i class="fa fa-lg fa-facebook-square" style="color: #3B5998;" title="Facebook"></i> View on Facebook
                                    </a><br>
                                    <?php
                                    }

                                    if((get_post_meta($post->ID, 'twitter_url', true)))
                                    {
                                    ?>
                                    <a href="<?php $key='twitter_url'; echo get_post_meta($post->ID, $key, true); ?>">
                                        <i class="fa fa-lg fa-twitter-square" style="color: #4099FF;" title="Twitter"></i> View on Twitter</a>
                                    </a>
                                    <?php
                                    }
                                    ?>
                                </p>
                            </div>
                        </div><!-- End Row-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <hr style="margin-top: 0;" />
                                <?php
                                    $postObject = get_post( $post->ID);
                                    echo apply_filters( 'the_content', $postObject->post_content );
                                ?>
                                <hr />
                                <?php comments_template(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>

<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>
