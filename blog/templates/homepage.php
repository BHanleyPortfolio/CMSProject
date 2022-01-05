<?php require TEMPLATE_PATH."/header.php"; ?>
<!-- ============= CONTAINER STARTS HERE ============== -->
<div class="main-wrap">
    <div id="container">

        <?php //include TEMPLATE_PATH."/unused/topsearch.php"; ?>


        <!-- ============= CONTENT AREA STARTS HERE ============== -->
        <div id="content" class="clearfix homepage"><!-- SLIDER STARTS HERE -->
            <div id="slider" class="slider2">
                <?php //include TEMPLATE_PATH.'/unused/most-rated.php'; ?>

                <h2 class="slider-head"> <span>New Recipes</span> For You!</h2>

                <!-- Top recipes statement -->
                <p class="slogan">Sliding recipes are much more tasty as food than sliding images. :D </p>

                <!-- Start of Slides -->
                <div class="slides right-slider">
                    <ul class="cycle-slideshow" data-cycle-fx=scrollHorz data-cycle-timeout=4000 data-cycle-slides="li" data-cycle-pager=".cycle-pager">
                        <?php foreach ($results['recipes'] as $post) { ?>
                        <li>
                            <?php if ( $imagePath = $post->getImagePath( IMG_TYPE_THUMB ) ) { ?>
                                    <a href=".?action=viewRecipe&amp;postId=<?php echo $post->id?>" class="img-box"><img class="attachment-li-slider-thumb wp-post-image" src="<?php echo $imagePath; ?>" alt="<?php echo $post->title; ?>" /></a>
                                <?php } ?>
                            <div class="slide-info">
                                <h2>
                                    <span class="pubDate"><?php echo date('j F', $post->publicationDate)?></span> <a href=".?action=viewRecipe&amp;postId=<?php echo $post->id?>"><?php echo htmlspecialchars( $post->title )?></a>
                                </h2>
                                <?php //include TEMPLATE_PATH.'/unused/rating.php'; ?>

                                <p>
                                    <?php echo htmlspecialchars( $post->summary )?>
                                </p>
                                <a href=".?action=viewRecipe&amp;postId=<?php echo $post->id?>"
                                   class="readmore">Read more</a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="sliderNav">
                        <div class="cycle-pager"></div>
                    </div>
                </div>
                <!-- end of slides -->

            </div>
            <!-- end of Slider div -->

            <!-- Home Page Whats Hot Recipe Area -->
            <div id="whats-hot">
                <h2 class="w-bot-border">Blog <span>Posts</span></h2>
                <ul class="cat-list clearfix">
                    <?php foreach ($postResults['posts'] as $post) { ?>
                        <li>
                            <?php if ( $imagePath = $post->getImagePath( IMG_TYPE_THUMB ) ) { ?>
                                <a href=".?action=viewPost&amp;postId=<?php echo $post->id?>"><img class="attachment-recipe-4column-thumb wp-post-image" src="<?php echo $imagePath; ?>" alt="<?php echo $post->title; ?>" /></a>
                            <?php } ?>
                            <h3><span><?php echo date('j F', $post->publicationDate)?></span><a href=".?action=viewPost&amp;postId=<?php echo $post->id?>"> <?php echo htmlspecialchars( $post->title )?></a></h3>
                            <p><?php echo htmlspecialchars( $post->summary )?><a href=".?action=viewPost&amp;postId=<?php echo $post->id?>">more</a></p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- end of whats-hot div -->

            <span class="w-pet-border"></span>

            <?php //include TEMPLATE_PATH.'/unused/home-infos.php' ?>

        </div>
        <!-- end of content div -->
        <div class="bot-ads-area">
            <div class="ads-642x79">
                <a href="#"><img src="images/ad-652x95.png" alt="Recipe Ads" /></a>
            </div>
        </div>
        <!-- CONTENT ENDS HERE -->
    </div>
    <!-- end of container div -->
</div>
<div class="w-pet-border"></div>
<!-- ============= CONTAINER AREA ENDS HERE ============== -->
<?php include TEMPLATE_PATH."/footer.php" ?>