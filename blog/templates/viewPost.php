<?php include TEMPLATE_PATH."/header.php"; ?>
<!-- ============= CONTAINER STARTS HERE ============== -->
<div class="main-wrap">
    <div id="container">
        <?php //include TEMPLATE_PATH."/topsearch.php"; ?>


        <!-- ============= CONTENT AREA STARTS HERE ============== -->
        <div id="content" class="clearfix ">
            <div id="left-area" class="clearfix">

                <div class="post-<?php echo $results['post']->id ?> post" id="post-<?php echo $results['post']->id ?>">
                    <h1 class="single-post-title"><?php echo htmlspecialchars( $results['post']->title )?></h1>
                    <p class="meta">By : <a href="#" title="Posts by admin" rel="author">bhanley</a> <span>|</span> On : <?php echo date('j F Y', $results['post']->publicationDate)?> </p>
                    <div class="post-thumb single-img-box">
                        <?php if ( $imagePath = $results['post']->getImagePath() ) { ?>
                            <a title="<?php echo $results['post']->title; ?>">
                                <img id="articleImageFullsize" src="<?php echo $imagePath?>" alt="Article Image" />
                            </a>
                        <?php } ?>
                    </div>
                    <?php if(isset($results['post']->ingredients) || !empty($results['post']->ingredients) ){ ?>
                    <div>
                        <h2>Ingredients</h2>
                        <ul>
                            <?php foreach (json_decode($results['post']->ingredients) as $ingredient){ ?>
                                <li><?php echo $ingredient; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                    <p><em><?php echo htmlspecialchars( $results['post']->summary )?></em></p>
                    <p><?php echo $results['post']->content?></p>
                </div><!-- end of post div -->

            </div><!-- end of left-area -->
            <!-- LEFT AREA ENDS HERE -->

            <?php //include TEMPLATE_PATH.'/unused/sidebar.php'; ?>

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
