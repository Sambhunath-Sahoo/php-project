<?php
	if($_FILES["file"]["error"]>0)
	{
		echo $_FILES["file"]["error"],"<br>";
	}
	else
	{
        echo "Uploaded:",$_FILES["file"]["name"],"<br>";
        echo "Type:",$_FILES["file"]["type"],"<br>";
        echo "Size:",($_FILES["file"]["size"]/1024),"kB<br>";
        echo "Stored in:",$_FILES["file"]["tmp_name"],"<br>";

        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);

        echo "Stored in:","upload/", $_FILES["file"]["name"],"<br>";
    }
?>