<?php
 //static public function imageUpHandle(){
        if ($_FILES['image']['error']>0) {
            echo "problem";
            switch ($_FILES['image']['error']) {
                case 1: echo "File exceeded upload_max_filesize";
                break;
                case 2: echo "File exceeded max_file_size";
                break;
                case 3: echo "File only partially uploaded";
                break;
                case 4: echo "No file uploaded";
                break;
                case 6: echo "Cannot upload file: No temp directory specified";
                break;
                case 7: echo "Upload failed: Cannot write to disk";
                break;
            }
            exit;
        }
        // Does the file have the right MIME type?
        if ($_FILES["image"]["type"] != "image/jpeg" && $_FILES["image"]["type"] != "image/x-png")
        {
            echo "Problem: file is not of the specified type";
            exit;
        }
        // put the file where we"d like it
        $upfileDir = "products/images/".$_FILES["image"]["name"] ;
        if (is_uploaded_file($_FILES["image"]["tmp_name"]))
        {
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $upfileDir))
            {
                echo "Problem: Could not move file to destination directory";
                exit;
            }
        }
        else
        {
            echo "Problem: Possible file upload attack. Filename: ";
            echo $_FILES["image"]["name"];
            exit;
        }
        return true;
   // }

 ?>
