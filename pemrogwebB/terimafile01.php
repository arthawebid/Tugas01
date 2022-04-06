<?php
    if(isset($_POST["kirimdata"])){
        print_r( $_FILES["fldata"] );
        $path = "imgdata/"; // menentukan folder/direktori tempat file
        $nmfile = $path . basename($_FILES["fldata"]["name"]); // nama file yang di upload
        
        $imgtype = strtolower(pathinfo($nmfile,PATHINFO_EXTENSION));

        if((($imgtype == "jpg") || ($imgtype == "png")) || ($imgtype == "gif")) {
            move_uploaded_file($_FILES["fldata"]["tmp_name"], $nmfile);

            echo '<img src="'.$nmfile.'">';
        }
    }