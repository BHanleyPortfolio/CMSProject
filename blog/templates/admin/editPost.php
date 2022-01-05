<?php include TEMPLATE_PATH."/header.php"; ?>
    <script>

        // Prevents file upload hangs in Mac Safari
        // Inspired by http://airbladesoftware.com/notes/note-to-self-prevent-uploads-hanging-in-safari

        function closeKeepAlive() {
            if ( /AppleWebKit|MSIE/.test( navigator.userAgent) ) {
                var xhr = new XMLHttpRequest();
                xhr.open( "GET", "/ping/close", false );
                xhr.send();
            }
        }

    </script>
    <div id="adminHeader">
        <h2>Widget News Admin</h2>
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
    </div>

    <h1><?php echo $results['pageTitle']?></h1>

    <?php //enctype="multipart/form-data" always required when creating a form with a file upload field ?>
    <form action="admin.php?action=<?php echo $results['formAction']?>" method="post" enctype="multipart/form-data" onsubmit="closeKeepAlive()">
        <input type="hidden" name="postId" value="<?php echo $results['post']->id ?>"/>

        <?php if ( isset( $results['errorMessage'] ) ) { ?>
            <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
        <?php } ?>

        <ul>

            <li>
                <label for="title">Post Title</label>
                <input type="text" name="title" id="title" placeholder="Name of the post" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['post']->title )?>" />
            </li>

            <li>
                <label for="summary">Post Summary</label>
                <textarea name="summary" id="summary" placeholder="Brief description of the post" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars( $results['post']->summary )?></textarea>
            </li>

            <li>
                <label for="content">Post Content</label>
                <textarea name="content" id="content" placeholder="The HTML content of the post" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars( $results['post']->content )?></textarea>
            </li>

            <li>
                <label for="publicationDate">Publication Date</label>
                <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['post']->publicationDate ? date( "Y-m-d", $results['post']->publicationDate ) : "" ?>" />
            </li>

            <?php if ( $results['post'] && $imagePath = $results['post']->getImagePath() ) { ?>
                <li>
                    <label>Current Image</label>
                    <img id="articleImage" src="<?php echo $imagePath ?>" alt="Article Image" />
                </li>

                <li>
                    <label></label>
                    <input type="checkbox" name="deleteImage" id="deleteImage" value="yes"/ > <label for="deleteImage">Delete</label>
                </li>
            <?php } ?>

            <li>
                <label for="image">New Image</label>
                <input type="file" name="image" id="image" placeholder="Choose an image to upload" maxlength="255" />
            </li>


        </ul>

        <div class="buttons">
            <input type="submit" name="saveChanges" value="Save Changes" />
            <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>

    </form>

<?php if ( $results['post']->id ) { ?>
    <p><a href="admin.php?action=deletePost&amp;postId=<?php echo $results['post']->id ?>" onclick="return confirm('Delete This Post?')">Delete This Post</a></p>
<?php } ?>

<?php include TEMPLATE_PATH."/footer.php" ?>