<?php
    // $name = $_GET['name'];
    // $mimes = array
    // (
    //     'jpg' => 'image/jpg',
    //     'jpeg' => 'image/jpg',
    //     'gif' => 'image/gif',
    //     'png' => 'image/png'
    // );

    // $ext = strtolower(end(explode('.', $name)));

    // $file = '../uploads'.$name;
    // header('content-type: '. $mimes[$ext]);
    // header('content-disposition: inline; filename="'.$name.'";');
    // readfile($file);

    $dir = './uploads';
    $file_display = array('jpg', 'jpeg', 'png', 'gif');

    if (file_exists($dir) == false) 
    {
        echo 'Directory "', $dir, '" not found!';
    } 
    else 
    {
        $dir_contents = scandir($dir);

        foreach ($dir_contents as $file) 
        {
            $file_type = strtolower(end(explode('.', $file)));
            if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true)     
            {
                $name = basename($file);
                echo "<center><img src='uploads/" . "$name' class = 'resize'> <br></center><h3>";
            }
        }
    }
?>
