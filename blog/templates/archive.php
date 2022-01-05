<?php include TEMPLATE_PATH."/header.php" ?>
<!-- ============= CONTAINER STARTS HERE ============== -->
<div class="main-wrap">
    <div id="container">

        <?php //include TEMPLATE_PATH."/topsearch.php"; ?>

        <!-- ============= CONTENT AREA STARTS HERE ============== -->
        <div id="content" class="clearfix ">
            <div id="left-area" class="clearfix">
                <?php foreach ( $results['posts'] as $post ) { ?>
                <div class="post">
                    <h1 class="post-title entry-title">
                        <a href=".?action=<?php echo $results['articleAction'] ?>&amp;postId=<?php echo $post->id?>"><?php echo htmlspecialchars( $post->title )?></a>
                    </h1>
                    <p class="meta vcard"> By: <a class="author fn" href="#"> bhanley </a>
                        <span>|</span>
                        <time class="entry-date update" datetime=""><?php echo date('j F Y', $post->publicationDate)?></time>
                    </p>
                    <div class="post-thumb single-img-box">
                        <?php if ( $imagePath = $post->getImagePath( IMG_TYPE_THUMB ) ) { ?>
                            <a href=".?action=<?php echo $results['articleAction'] ?>&amp;postId=<?php echo $post->id ?>" title="<?php echo $post->title ?>">
                                <img class="attachment-thumbnail-blog wp-post-image" class="articleImageThumb" src="<?php echo $imagePath ?>" alt="<?php echo $post->title ?> Thumbnail" />
                            </a>
                        <?php } ?>
                    </div>
                    <p>
                        <?php echo htmlspecialchars( $post->summary )?>
                    </p>
                    <a href=".?action=<?php echo $results['articleAction'] ?>&amp;postId=<?php echo $post->id?>" class="readmore rightbtn">Read more</a>
                </div>
                <?php } ?>
                <!-- end of post div -->

                <?php if($results['totalRows']>10){ ?>
                    <div id="pagination">
                        <a href="#" class="btn current">1</a>
                        <a href="#" class="btn">2</a>
                        <?php echo $results['totalRows']?> post<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.
                    </div>
                <?php } ?>
            </div>
            <!-- end of left-area -->
            <!-- LEFT AREA ENDS HERE -->

            <?php //include TEMPLATE_PATH."/unused/sidebar.php"; ?>
        </div>
        <!-- end of content div -->
        <div class="bot-ads-area">
            <div class="ads-642x79">
                <a href="#"><img src="images/ad-652x95.png" alt="Recipe Ads"/></a>
            </div>
        </div>
        <!-- CONTENT ENDS HERE -->

    </div>
    <!-- end of container div -->
</div>
<div class="w-pet-border"></div>
<!-- ============= CONTAINER AREA ENDS HERE ============== -->
<?php include TEMPLATE_PATH."/footer.php" ?>