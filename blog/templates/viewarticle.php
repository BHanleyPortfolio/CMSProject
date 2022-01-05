<?php include TEMPLATE_PATH."/header.php"; ?>
<!-- ============= CONTAINER STARTS HERE ============== -->
<div class="main-wrap">
    <div id="container">
        <!-- WEBSITE SEARCH STARTS HERE -->

        <div class="top-search  clearfix">
            <h3 class="head-pet"><span>Recipe Search</span></h3>

            <form action="#" id="searchform">
                <p>
                    <input type="text" name="s" id="s" class="field" value="" placeholder="Search for"/>
                    <input type="submit" name="s_submit" id="s-submit" value=""/>
                </p>
            </form>

            <p class="statement"><span class="fireRed">Recipe Types:</span>
                <a href="#">Beef</a> , <a href="#">Cheese</a> , <a href="#">Chicken</a> , <a href="#">Chocolate</a> , <a href="#">Fish</a> , <a href="#">Pizzas</a>, <a href="#">Potatos</a>, <a href="#">Rolls</a>
            </p>

        </div>
        <!-- end of top-search div-->


        <!-- ============= CONTENT AREA STARTS HERE ============== -->
        <div id="content" class="clearfix ">
            <div id="left-area" class="clearfix">

                <div class="post-53 post category-barbeque" id="post-53">
                    <h1 class="single-post-title"><?php echo htmlspecialchars( $results['post']->title )?></h1>
                    <p class="meta">By : <a href="#" title="Posts by admin" rel="author">admin</a> <span>|</span> <span class="comments">
                    <a href="#" title="Comment on Best Bread pairing for Barbeque?">1 Comment</a></span> <span>|</span> On : <?php echo date('j F Y', $results['post']->publicationDate)?> <span>|</span> Category : <span class="cats"><a href="#" rel="category tag">barbeque</a></span> </p>
                    <div class="post-thumb single-img-box">
                        <a  title="Best Bread pairing for Barbeque?">
                            <img src="images/demo/accor_33-575x262.jpg" alt="accor_3" />
                        </a>
                    </div>
                    <p><em><?php echo htmlspecialchars( $results['post']->summary )?></em></p>
                    <p><?php echo $results['post']->content?></p>
                    <div class="blog-post-social">
                        <h5>Share This Post!</h5><div class="share">
                            <a class="twitter" onclick="window.open('http://twitter.com/home?status=Best+Bread+pairing+for+Barbeque%3F - http://www.960demo.com/foodrecipes-dev/habitasse-augue-penatibus-sit-dictumst-arcu-in/','twitter','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" href="http://twitter.com/home?status=Best+Bread+pairing+for+Barbeque%3F%20-%20http://www.960demo.com/foodrecipes-dev/habitasse-augue-penatibus-sit-dictumst-arcu-in/" title="Best Bread pairing for Barbeque?" target="960development"></a>
                            <a class="facebook" onclick="window.open('http://www.facebook.com/share.php?u=http://www.960demo.com/foodrecipes-dev/habitasse-augue-penatibus-sit-dictumst-arcu-in/','facebook','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" href="http://www.facebook.com/share.php?u=http://www.960demo.com/foodrecipes-dev/habitasse-augue-penatibus-sit-dictumst-arcu-in/" title="Best Bread pairing for Barbeque?"  target="960development"></a>
                            <a class="google" href="https://m.google.com/app/plus/x/?v=compose&amp;content=Best+Bread+pairing+for+Barbeque%3F%20-%20http://www.960demo.com/foodrecipes-dev/habitasse-augue-penatibus-sit-dictumst-arcu-in/" onclick="window.open('https://m.google.com/app/plus/x/?v=compose&amp;content=Best+Bread+pairing+for+Barbeque%3F - http://www.960demo.com/foodrecipes-dev/habitasse-augue-penatibus-sit-dictumst-arcu-in/','gplusshare','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;"></a>
                            <a class="print" href="javascript:window.print()" title="Print"></a>
                            <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.960demo.com%2Ffoodrecipes-dev%2Fhabitasse-augue-penatibus-sit-dictumst-arcu-in%2F%26media=http://www.960demo.com/foodrecipes-dev/wp-content/uploads/2012/03/accor_3.jpg%26description=Best Bread pairing for Barbeque?" class="pin-it-button" count-layout="none"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
                        </div>
                    </div>
                </div><!-- end of post div -->


                <div class="comments">

                    <!-- You can start editing here. -->

                    <h2 id="comments">Comment <span>(1)</span></h2>
                    <span class="w-pet-border"></span>

                    <ol class="comment-list">
                        <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                            id="comment-7">

                            <div class="img-box">
                                <a href="#"> <img src='http://0.gravatar.com/avatar/66a10cd6fc9b85636291aa4fe7c32c7f?s=67&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D67&amp;r=G' class='avatar avatar-67 photo'  alt=''/> </a>
                            </div>
                            <div class="comment-body">
                                <p class="meta">posted by admin on <span> March 24, 2015 </span></p>

                                <div class="comment">
                                    <p>Habitasse egestas pulvinar? Ac? A egestas est sit augue! Ac est
                                        nunc mauris turpis, augue eu nisi vut et! Pulvinar! Scelerisque est parturient in,
                                        cras, et. Platea in et sit, et pulvinar tortor pid, sagittis. Risus porta. Rhoncus
                                        ut! Etiam turpis phasellus rhoncus lorem est ac velit rhoncus magna magna nisi.
                                    </p>
                                </div>
                                <div class="reply"> &nbsp;
                                    <a class='comment-reply-link'  href='#' aria-label='Reply to admin'>Reply</a>
                                </div>
                            </div>

                        </li>
                        <!-- #comment-## -->
                    </ol>

                </div>
                <!-- end of comments div -->
                <div class="comments">

                    <!-- You can start editing here. -->
                    <!-- If comments are open, but there are no comments. -->

                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">
                            Leave a Reply
                            <small>
                                <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                            </small>
                        </h3>
                        <form action="#" method="post" id="commentform" class="comment-form">
                            <p class="logged-in-as">Logged in as <a href="#">admin</a>.
                                <a href="images/demo/001-250x212.png" title="Log out of this account">Log out?</a>
                            </p>
                            <p class="comment-form-comment">
                                <label for="comment">Comment</label>
                                <textarea id="comment" name="comment" cols="45" rows="8" aria-describedby="form-allowed-tags" aria-required="true"></textarea>
                            </p>
                            <p class="form-allowed-tags" id="form-allowed-tags">
                                You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:
                                <code>
                                    &lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt;
                                </code>
                            </p>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                <input type="hidden" name="comment_post_ID" value="25" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                        </form>
                    </div><!-- #respond -->
                </div>

            </div><!-- end of left-area -->
            <!-- LEFT AREA ENDS HERE -->

            <!-- ========== START OF SIDEBAR AREA ========== -->
            <div id="sidebar">
                <div class="widget fav-recipes nostylewt">
                    <h2 class="w-bot-border"><span>MISC</span> Recipes</h2>

                    <div class="tabed">
                        <ul class="tabs clearfix">
                            <li class="current">Recent<span></span></li>
                            <li>Popular<span></span></li>
                            <li>Random<span></span></li>
                        </ul>
                        <div class="block current">
                            <ul class="highest">
                                <li>
                                    <a href="recipe-single-1.html" class="img-box"><img src="images/demo/7a0a46455c4ec56a5a02c097374fc513-63x53.jpg" class="attachment-sidebar-tabs wp-post-image" alt="7a0a46455c4ec56a5a02c097374fc513"/></a>
                                    <h5> <a href="recipe-single-1.html">Chocolate Earl Grey Pots de Creme Recipe</a></h5>

                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.3 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="recipe-single-1.html" class="img-box"><img src="images/demo/Pesto-Pizza-with-Roasted-Garlic-Potato2-63x53.jpg" class="attachment-sidebar-tabs wp-post-image" alt="Pesto-Pizza-with-Roasted-Garlic-Potato2"/></a>
                                    <h5> <a href="recipe-single-1.html">Pesto Pizza With Roasted Garlic &#038; Potato</a></h5>

                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.1 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="recipe-single-1.html" class="img-box"><img src="images/demo/Pimento-Cheese-Potato-Skins-63x53.jpg" class="attachment-sidebar-tabs wp-post-image" alt="Pimento-Cheese-Potato-Skins"/></a>
                                    <h5>
                                        <a href="recipe-single-1.html">Pimento Cheese Potato Skins</a></h5>

                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.4 / 5)
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- end of block div -->
                        <div class="block">
                            <ul class="highest">
                                <li>
                                    <a href="recipe-single-1.html" class="img-box">
                                        <img src="images/demo/Goat-Cheese-Chorizo-Rolls2-63x53.jpg" class="attachment-sidebar-tabs wp-post-image" alt="Goat-Cheese-Chorizo-Rolls2"/>
                                    </a>
                                    <h5> <a href="recipe-single-1.html">Goat Cheese and Chorizo Rolls</a></h5>

                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.3 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="recipe-single-1.html" class="img-box">
                                        <img src="images/demo/Pimento-Cheese-Potato-Skins-63x53.jpg" class="attachment-sidebar-tabs wp-post-image" alt="Pimento-Cheese-Potato-Skins"/>
                                    </a>
                                    <h5> <a href="recipe-single-1.html">Pimento Cheese Potato Skins</a></h5>

                                    <p class="rate"> <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.4 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="recipe-single-1.html" class="img-box">
                                        <img src="images/demo/Warm-Marinated-Flank-Steak-Salad-1-63x53.jpg" class="attachment-sidebar-tabs wp-post-image" alt="Warm-Marinated-Flank-Steak-Salad-1"/>
                                    </a>
                                    <h5> <a href="recipe-single-1.html">Warm Flank Steak Salad With Mint And Cilantro</a></h5>

                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        ( 4.2 / 5)
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- end of block div -->
                        <div class="block">
                            <ul class="highest">
                                <li>
                                    <a href="recipe-single-1.html" class="img-box"><img src="images/demo/Goat-Cheese-Chorizo-Rolls2-63x53.jpg" class="attachment-sidebar-tabs wp-post-image" alt="Goat-Cheese-Chorizo-Rolls2"/></a>
                                    <h5> <a href="recipe-single-1.html">Goat Cheese and Chorizo Rolls</a></h5>

                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.3 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="recipe-single-1.html"  class="img-box"><img src="images/demo/Jalapeno-Poppers-63x53.jpg" class="attachment-sidebar-tabs wp-post-image" alt="Jalapeño-Poppers"/></a>
                                    <h5><a href="http://www.960demo.com/foodrecipes-dev/recipe/jalapeno-poppers/">Jalapeno Poppers</a></h5>

                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.4 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="recipe-single-1.html" class="img-box"><img src="images/demo/7a0a46455c4ec56a5a02c097374fc513-63x53.jpg" class="attachment-sidebar-tabs wp-post-image" alt="7a0a46455c4ec56a5a02c097374fc513"/></a>
                                    <h5> <a href="recipe-single-1.html">Chocolate Earl Grey Pots de Creme Recipe</a></h5>

                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span  class="on"></span>
                                        <span class="off"></span>
                                        (4.3 / 5)
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- end of block div -->
                        <div class="bot-border"></div>
                    </div>
                    <!-- end of tabed div -->
                </div>
                <div id="recipes-from-recipe-type-2" class="widget nostylewt Recipes_from_Recipe_Type clearfix">
                    <div class="recipes-slider-widget rt">
                        <h2 class="w-bot-border"><span>Pizzas</span> &amp; Rolls</h2>
                        <ul class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="0" data-cycle-slides="li" data-cycle-next=".nrecipes-from-recipe-type-2" data-cycle-prev=".precipes-from-recipe-type-2">
                            <li class="cycle-slide cycle-sentinel">
                                <a href="#">
                                    <img src="images/demo/Pesto-Pizza-with-Roasted-Garlic-Potato21-302x196.jpg" class="attachment-recipe-slider-widget wp-post-image" alt="Pesto-Pizza-with-Roasted-Garlic-Potato2">                                </a>
                                <p class="info-box">Pesto Pizza With Roasted Garlic &amp; Potato</p>
                            </li>
                            <li class="cycle-slide">
                                <a href="#">
                                    <img src="images/demo/Pesto-Pizza-with-Roasted-Garlic-Potato21-302x196.jpg" class="attachment-recipe-slider-widget wp-post-image" alt="Pesto-Pizza-with-Roasted-Garlic-Potato2">                                </a>
                                <p class="info-box">Pesto Pizza With Roasted Garlic &amp; Potato</p>
                            </li>
                            <li class="cycle-slide cycle-slide-active">
                                <a href="#">
                                    <img src="images/demo/Goat-Cheese-Chorizo-Rolls21-302x196.jpg" class="attachment-recipe-slider-widget wp-post-image" alt="Goat-Cheese-Chorizo-Rolls2">                                </a>
                                <p class="info-box">Goat Cheese and Chorizo Rolls</p>
                            </li>
                        </ul>
                        <span class="prev precipes-from-recipe-type-2 cycle-prev"></span>
                        <span class="next nrecipes-from-recipe-type-2 cycle-next"></span>
                    </div>
                </div>
                <div class="widget nostylewt Weekly_Special_Widget wk-special clearfix">
                    <h2 class="w-bot-border"><span>Weekly</span> Special </h2>

                    <div class="img-box for-all">
                        <a href="recipe-single-1.html">
                            <img src="images/demo/Grilled-Five-Spice-Chicken-122x132.jpg" class="attachment-weekly-special-thumb wp-post-image" alt="Grilled-Five-Spice-Chicken"/>
                        </a>
                    </div>
                    <div class="for-res">
                        <a href="recipe-single-1.html">
                            <img src="images/demo/Grilled-Five-Spice-Chicken-251x132.jpg" class="attachment-weekly-for-res wp-post-image" alt="Grilled-Five-Spice-Chicken"/>
                        </a>
                    </div>
                    <h4> <a href="recipe-single-1.html">Vietnamese Style Grilled Five Spice Chicken</a></h4>

                    <p>It may not be in my best interest to admit this, but here goes nothing: grilling chicken scares  me. It’s just...
                        <a href="recipe-single-1.html"> more</a>
                    </p>
                    <a href="recipe-single-1.html" class="readmore">Read More</a>
                </div>
                <div class="widget newsEvent nostylewt">
                    <h2 class="w-bot-border">
                        <span>News</span> and Events</h2>
                    <ul class="list">
                        <li>
                            <h5><a href="single.html">Hello world!</a></h5>
                            <p>Welcome to WordPress. This is your first post. Edit or delete it,...<a href="single.html">more</a></p>
                        </li>
                        <li>
                            <h5> <a href="single.html">Best Bread pairing for Barbeque?</a></h5>
                            <p>Quis sed mid elit, risus aliquet placerat. Pid et, vel phasellus augue...<a href="single.html">more</a> </p>
                        </li>
                    </ul>
                </div>
                <div id="recipe_types-2" class="widget nostylewt Recipe_Types_Widget clearfix">
                    <h2 class="w-bot-border bmarginless"><span>Recipe</span> Types</h2>

                    <div class="archives clearfix">
                        <ul>
                            <li class="cat-item cat-item-26"><a href="#">Beef</a> </li>
                            <li class="cat-item cat-item-31"><a href="#">Cheese</a> </li>
                            <li class="cat-item cat-item-33"><a href="#">Chicken</a> </li>
                            <li class="cat-item cat-item-36"><a href="#">Chocolate</a> </li>
                            <li class="cat-item cat-item-41"><a href="#">Fish</a> </li>
                            <li class="cat-item cat-item-50"><a href="#">Pizzas</a> </li>
                            <li class="cat-item cat-item-52"><a href="#">Potatos</a> </li>
                            <li class="cat-item cat-item-53"><a href="#">Rolls</a> </li>
                        </ul>
                    </div>
                    <!-- end of fav-recipes widget -->
                </div>
                <div id="recent-posts-2" class="widget nostylewt widget_recent_entries clearfix">
                    <h2 class="w-bot-border"><span>Recent</span> Posts</h2>
                    <ul>
                        <li>
                            <a href="#">Hello world!</a>
                        </li>
                        <li>
                            <a href="#">Best  Bread pairing for Barbeque?</a>
                        </li>
                        <li>
                            <a href="#">baking question</a>
                        </li>
                        <li>
                            <a href="#">Fresh Food on TV: Weekend Edition</a>
                        </li>
                        <li>
                            <a href="#">Full Irish Breakfast In Manhattan</a>
                        </li>
                    </ul>
                </div>
            </div><!-- end of sidebar -->

        </div><!-- end of content div -->
        <div class="bot-ads-area">
            <div class="ads-642x79">
                <a href="#"><img src="images/ad-652x95.png" alt="Recipe Ads" /></a>
            </div>
        </div>
        <!-- CONTENT ENDS HERE -->

    </div><!-- end of container div -->
</div>
<div class="w-pet-border"></div>
<!-- ============= CONTAINER AREA ENDS HERE ============== -->
<?php include TEMPLATE_PATH."/footer.php" ?>
