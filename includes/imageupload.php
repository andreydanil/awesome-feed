<?php
$ds = DIRECTORY_SEPARATOR;

$storeFolder = '../uploads';

if (!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = dirname( __FILE__ ) . $ds . $storeFolder . $ds;
    $targetFile =  $targetPath. $_FILES['file']['name'];
    move_uploaded_file($tempFile,$targetFile);   
} else {
	$result  = array();
    $files = scandir($storeFolder);
    if ( false!==$files ) {
    	foreach ( $files as $file ) {
    		if ( '.'!=$file && '..'!=$file) {
    			$obj['name'] = $file;
    			$obj['size'] = filesize($storeFolder.$ds.$file);
    			$result[] = $obj;
    		}
    	}
    }
    header('Content-type: text/json');
    header('Content-type: application/json');
    echo json_encode($result);
}
?>