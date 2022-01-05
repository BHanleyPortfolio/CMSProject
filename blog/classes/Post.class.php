<?php
/**
 * Class to handle post
 *
 */

class Post
{
    //Properties
    /**
     * @var int The post ID from the DB
     */
    public $id = null;

    /**
     * @var int When the post was made
     */
    public $publicationDate = null;

    /**
     * @var string Full title of the post
     */
    public $title = null;

    /**
     * @var string A short summary of the post
     */
    public $summary = null;

    /**
     * @var string The HTML content of the post
     */
    public $content = null;

    /**
     * @var string The filename extension of the post's fullsize and thumbnail image
     */
    public $imageExtension = "";

    /**
     * Sets the object's properties using the values in the supplied array
     *
     * @param assoc The property values
     */
    public function __construct($data=array()){
        if (isset($data['id'])) $this->id = (int) $data['id'];
        if (isset($data['publicationDate'])) $this->publicationDate = (int) $data['publicationDate'];
        if (isset($data['title'])) $this->title = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title']);
        if (isset($data['summary'])) $this->summary = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['summary']);
        if (isset($data['content'])) $this->content = $data['content'];
        if (isset($data['imageExtension'])) $this->imageExtension = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\$ a-zA-Z0-9()]/", "", $data['imageExtension'] );
    }

    /**
     * Sets the object's properties using the edit form post values in the supplied array
     *
     * @param assoc The form post values
     */
    public function storeFormValues ($params) {
        //Store all the parameters
        $this->__construct($params);

        //Parse and store publication date
        if(isset($params['publicationDate'])){
            $publicationDate = explode('-', $params['publicationDate']);

            if(count($publicationDate)==3){
                list($y,$m,$d)=$publicationDate;
                $this->publicationDate = mktime(0,0,0,$m,$d,$y);
            }
        }
    }

    /**
     * Returns an post object matching the given post ID
     *
     * @param int The post ID
     * @return Post|false The post object, or false if the record was not found or there was a problem
     */

    public static function getById( $id ) {
        //Use PHP Data Objects (PDO) library to connect to database
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        //Query with PDO placeholder
        $sql = "SELECT *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM posts WHERE id = :id";
        $st = $conn->prepare( $sql );
        //Replace the placeholder with PDO syntax to define data and datatype
        $st->bindValue( ":id", $id, PDO::PARAM_INT );
        $st->execute();
        $row = $st->fetch();
        $conn = null;
        if ( $row ) return new Post( $row );
    }


    /**
     * Returns all (or a range of) post objects in the DB
     *
     * @param int Optional The number of rows to return (default=all)
     * @return Array|false A two-element array : results => array, a list of post objects; totalRows => Total number of posts
     */

    public static function getList( $numRows=1000000 ) {
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $sql = "SELECT SQL_CALC_FOUND_ROWS *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM posts
            ORDER BY publicationDate DESC LIMIT :numRows";

        $st = $conn->prepare( $sql );
        $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
        $st->execute();
        $list = array();

        while ( $row = $st->fetch() ) {
            $post = new Post( $row );
            $list[] = $post;
        }

        // Now get the total number of posts that matched the criteria
        $sql = "SELECT FOUND_ROWS() AS totalRows";
        $totalRows = $conn->query( $sql )->fetch();
        $conn = null;
        return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
    }


    /**
     * Inserts the current post object into the database, and sets its ID property.
     */

    public function insert() {

        // Does the Post object already have an ID?
        if ( !is_null( $this->id ) ) trigger_error ( "Post::insert(): Attempt to insert a post object that already has its ID property set (to $this->id).", E_USER_ERROR );

        // Insert the post
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $sql = "INSERT INTO posts ( publicationDate, title, summary, content, imageExtension ) VALUES ( FROM_UNIXTIME(:publicationDate), :title, :summary, :content, :imageExtension )";
        $st = $conn->prepare ( $sql );
        $st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
        $st->bindValue( ":title", $this->title, PDO::PARAM_STR );
        $st->bindValue( ":summary", $this->summary, PDO::PARAM_STR );
        $st->bindValue( ":content", $this->content, PDO::PARAM_STR );
        $st->bindValue(":imageExtension", $this->imageExtension, PDO::PARAM_STR);
        $st->execute();
        $this->id = $conn->lastInsertId();
        $conn = null;
    }


    /**
     * Updates the current post object in the database.
     */

    public function update() {

        // Does the post object have an ID?
        if ( is_null( $this->id ) ) trigger_error ( "Post::update(): Attempt to update a post object that does not have its ID property set.", E_USER_ERROR );

        // Update the Post
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $sql = "UPDATE posts SET publicationDate=FROM_UNIXTIME(:publicationDate), title=:title, summary=:summary, content=:content, imageExtension=:imageExtension WHERE id = :id";
        $st = $conn->prepare ( $sql );
        $st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
        $st->bindValue( ":title", $this->title, PDO::PARAM_STR );
        $st->bindValue( ":summary", $this->summary, PDO::PARAM_STR );
        $st->bindValue( ":content", $this->content, PDO::PARAM_STR );
        $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
        $st->bindValue(":imageExtension", $this->imageExtension, PDO::PARAM_STR);
        $st->execute();
        $conn = null;
    }


    /**
     * Deletes the current post object from the database.
     */

    public function delete() {

        // Does the post object have an ID?
        if ( is_null( $this->id ) ) trigger_error ( "Post::delete(): Attempt to delete a post object that does not have its ID property set.", E_USER_ERROR );

        // Delete the post
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $st = $conn->prepare ( "DELETE FROM posts WHERE id = :id LIMIT 1" );
        $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
        $st->execute();
        $conn = null;
    }

    public function storeUploadedImage($image) {
        if($image['error'] == UPLOAD_ERR_OK) {
            if(is_null($this->id)) trigger_error("Recipe::storeUploadedImage():Attempt to upload an image for a post object that does not have its ID property set.", E_USER_ERROR );
        }

        // Delete any previous image(s) for this post
        $this->deleteImages();

        // Get and store the image filename extension
        $this->imageExtension = strtolower( strrchr( $image['name'], '.' ) );
        // Store the image

        $tempFilename = trim( $image['tmp_name'] );

        if ( is_uploaded_file ( $tempFilename ) ) {
            if ( !( move_uploaded_file( $tempFilename, $this->getImagePath() ) ) ) trigger_error( "Recipe::storeUploadedImage(): Couldn't move uploaded file.", E_USER_ERROR );
            if ( !( chmod( $this->getImagePath(), 0666 ) ) ) trigger_error( "Recipe::storeUploadedImage(): Couldn't set permissions on uploaded file.", E_USER_ERROR );
        }

        // Get the image size and type
        $attrs = getimagesize ( $this->getImagePath() );
        $imageWidth = $attrs[0];
        $imageHeight = $attrs[1];
        $imageType = $attrs[2];

        // Load the image into memory
        switch ( $imageType ) {
            case IMAGETYPE_GIF:
                $imageResource = imagecreatefromgif ( $this->getImagePath() );
                break;
            case IMAGETYPE_JPEG:
                $imageResource = imagecreatefromjpeg ( $this->getImagePath() );
                break;
            case IMAGETYPE_PNG:
                $imageResource = imagecreatefrompng ( $this->getImagePath() );
                break;
            default:
                trigger_error ( "Recipe::storeUploadedImage(): Unhandled or unknown image type ($imageType)", E_USER_ERROR );
        }

        // Copy and resize the image to create the thumbnail
        //$imageResource = imagecrop($imageResource,['width'=>512,'height'=>270]);
        $thumbHeight = 270;//intval ( $imageHeight / $imageWidth * POST_THUMB_WIDTH );
        $thumbResource = imagecreatetruecolor ( POST_THUMB_WIDTH, $thumbHeight );
        imagecopyresampled( $thumbResource, $imageResource, 0, 0, 0, 0, POST_THUMB_WIDTH, $thumbHeight, 514/*$imageWidth*/, 270/*$imageHeight*/ );

        // Save the thumbnail
        switch ( $imageType ) {
            case IMAGETYPE_GIF:
                imagegif ( $thumbResource, $this->getImagePath( IMG_TYPE_THUMB ) );
                break;
            case IMAGETYPE_JPEG:
                imagejpeg ( $thumbResource, $this->getImagePath( IMG_TYPE_THUMB ), JPEG_QUALITY );
                break;
            case IMAGETYPE_PNG:
                imagepng ( $thumbResource, $this->getImagePath( IMG_TYPE_THUMB ) );
                break;
            default:
                trigger_error ( "Recipe::storeUploadedImage(): Unhandled or unknown image type ($imageType)", E_USER_ERROR );
        }

        $this->update();
    }

    /**
     * Deletes any images and/or thumbnails associated with the post
     */

    public function deleteImages() {

        // Delete all fullsize images for this post
        foreach (glob( POST_IMAGE_PATH . "/" . IMG_TYPE_FULLSIZE . "/" . $this->id . ".*") as $filename) {
            if ( !unlink( $filename ) ) trigger_error( "Post::deleteImages(): Couldn't delete image file.", E_USER_ERROR );
        }

        // Delete all thumbnail images for this article
        foreach (glob( POST_IMAGE_PATH . "/" . IMG_TYPE_THUMB . "/" . $this->id . ".*") as $filename) {
            if ( !unlink( $filename ) ) trigger_error( "Post::deleteImages(): Couldn't delete thumbnail file.", E_USER_ERROR );
        }

        // Remove the image filename extension from the object
        $this->imageExtension = "";
    }


    /**
     * Returns the relative path to the post's full-size or thumbnail image
     *
     * @param string The type of image path to retrieve (IMG_TYPE_FULLSIZE or IMG_TYPE_THUMB). Defaults to IMG_TYPE_FULLSIZE.
     * @return string|false The image's path, or false if an image hasn't been uploaded
     */

    public function getImagePath( $type=IMG_TYPE_FULLSIZE ) {
        return ( $this->id && $this->imageExtension ) ? ( POST_IMAGE_PATH . "/$type/" . $this->id . $this->imageExtension ) : false;
    }

}