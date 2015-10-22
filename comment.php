<?php

$text = $_POST['comdesc'];
$tt = $_POST['toptt'];
$us = $_POST['usern'];

$con=mysql_connect("localhost","root","");
mysql_select_db("waggle");


$arr = explode('+',$tt);
$tt = implode(' ', $arr);
echo "<script language='javascript'>alert('$tt'); </script>";
$query = mysql_query("SELECT id FROM user WHERE name = '$us'");
$id='';
					while($rec=mysql_fetch_array($query)) 
					{ $id = $rec['id']; }
					
$query1 = mysql_query("SELECT ID FROM topic WHERE title = '$tt'")
					or die(mysql_error());
$id1="";					
					while($rec1=mysql_fetch_array($query1)) 
					{ 
						$id1=$rec1['ID']; 	
					}
					
					
$date = date("Y-m-d H:i:s");

$idlastcom="";
 $sql = "INSERT INTO comment (userID, date, text, topicID )
         VALUES ('".$id."','".$date."','".$text."','".$id1."')";
		 $res1 = mysql_query($sql) or die('Error:'.mysql_error());

$query3 = mysql_query("select ID from comment where userID='$id' and text='$text' and topicID='$id1'");

		while($rec1= mysql_fetch_array($query3)) 
					{ $idlastcom = $rec1['ID']; }

		 if (isset($_FILES['thefiles']) && $_FILES['thefiles']['size'] > 0)
		 {
$file_ary = array();
    $file_count = count($_FILES['thefiles']['name']);
    $file_keys = array_keys($_FILES['thefiles']);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $_FILES['thefiles'][$key][$i];
        }
    }
			foreach ($file_ary as $file)
			{ $name = $file['name'];	
			  $file_tmpname = $file['tmp_name'];  
			  
				$sql1 = "INSERT INTO files (filename, topicID)
					VALUES ('".$name."','".$id1."')";
		 $res1 = mysql_query($sql1) or die('Error:'.mysql_error());
		 
		 $upload_dir = "S:/uploads";
        $ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
        $allowed_extensions=explode(',',$ext_str);
        $max_file_size = 10485760;
        $ext = substr($name, strrpos($name, '.') + 1);
        if (!in_array($ext, $allowed_extensions))
            echo "<script language='javascript'> alert('only $ext_str files are allowed'); </script>";
        if($file['size']>=$max_file_size)
		 echo "<script language='javascript'> alert('only the file less than $max_file_size mb are allowed to upload'); </script>";

        if(move_uploaded_file($file_tmpname, "$upload_dir/$name" ))
		
		 echo "<script language='javascript'> alert('only $ext_str files are allowed'); </script>";
}
}
		 
	echo "<script language='javascript'> window.location=\"discussions.php?topiC=$tt&userfname=$us\"; </script>";


?>