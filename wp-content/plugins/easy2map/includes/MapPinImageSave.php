<?php
include 'ImageFunctions.php';

$imagesDirectory = WP_CONTENT_DIR . "/uploads/easy2map/images/map_pins/uploaded/" . intval($_GET["map_id"]) . "/";
echo $imagesDirectory;
$imagePlusLocation = "";
$errorMessage = "";

try{

    if (is_uploaded_file($_FILES["pinicon"]['tmp_name'])) {

        if (!file_exists($imagesDirectory)) {
            mkdir($imagesDirectory);
        }

        $imageName = $_FILES["pinicon"]['name'];
        $uploadedFile = $_FILES["pinicon"]['tmp_name'];
        $extension = strtolower(getExtension($imageName));

        list($width, $height, $type, $attr) = getimagesize($uploadedFile);
        $uploadedImageLocation = $imagesDirectory . $imageName;
        $imageNameExplode = explode(".", $imageName);

        $resizeWidth = '100';
        $resizeHeight = '100';

        //only resize if is valid image
        if( isset($type)
            && in_array($type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF))
            && isset($_POST['max_marker_width']) 
            && isset($_POST['max_marker_height']) 
            && is_numeric($_POST['max_marker_width'])
            && is_numeric($_POST['max_marker_height'])
            && intval($_POST['max_marker_width']) > 0
            && intval($_POST['max_marker_height']) > 0){

            $resizeWidth = $_POST['max_marker_width'];
            $resizeHeight = $_POST['max_marker_height'];

        }
    
        //sanitize data before uploading icon
        if ($_FILES["pinicon"]['size'] < 5000000 
            && is_numeric($_GET["map_id"]) 
            && intval($_GET["map_id"]) > 0) {

            $arrSmallImage = resizeImage($imagesDirectory, $uploadedFile, 
                $imageName, $width, $height, $type, $attr, 
                $resizeWidth, $resizeHeight, "SMALL");

            $imagePlusLocation = WP_CONTENT_URL . "/uploads/easy2map/images/map_pins/uploaded/" . intval($_GET["map_id"]) . "/" . $arrSmallImage[0];
            
        }
    }
} catch(Exception $e){
    $errorMessage = $e->getMessage();
}
?>

<script type="text/javascript">

    window.onload = function(){

        <?php if (strlen($errorMessage) > 0) { ?>
            alert('<?php echo str_replace("'", "", $errorMessage); ?>');
            <?php } else { ?>
                window.parent.jQuery('#divUploadPinIcon').fadeOut();
                window.parent.jQuery('#draggable').attr('src', '<?php echo $imagePlusLocation; ?>');
                window.parent.easy2map_mappin_functions.setMapPinImage(parent.window.document.getElementById('draggable'));      
                <?php } ?>
            };

        </script>
