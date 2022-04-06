<?php
    //print_r($_FILES["fldata"]);
    
    if(isset($_POST["kirimfile"])){
        $jdata = count($_FILES["fldata"]["name"]);
        print_r( $_FILES["fldata"] );
        $path = "imgdata/"; // menentukan folder/direktori tempat file
        
        for($i=0;$i<$jdata;$i++){
            $nmfile = $path . basename($_FILES["fldata"]["name"][$i]); // nama file yang di upload
            $imgtype = strtolower(pathinfo($nmfile,PATHINFO_EXTENSION));

            if(((($imgtype == "jpg") || ($imgtype == "jpeg")) || ($imgtype == "png")) || ($imgtype == "gif")) {
                move_uploaded_file($_FILES["fldata"]["tmp_name"][$i], $nmfile);

                echo '<img src="'.$nmfile.'">';
            }
        }
    }

