<?php

header('Content-type: application/json; charset=utf-8');

$output_dir = '../posters/';
if(isset($_FILES["myfile"]))
{
	$ret = array();
	
	$error =$_FILES["myfile"]["error"];
	
	try {
	
		//You need to handle  both cases
		//If Any browser does not support serializing of multiple files using FormData() 
		if(!is_array($_FILES["myfile"]["name"])) //single file
		{
			$todays_date = date("mdYHis");
			// basename() may prevent filesystem traversal attacks;
			$fileName = basename($_FILES["myfile"]["name"]);
			$fileName = preg_replace('/\s+/', '_', addslashes($fileName));
			//$fileName = preg_match("`^[-0-9A-Z_\.]+$`i", '', $fileName);
			$fileName = $todays_date.'_'.$fileName;
			
			//echo (bool) ((mb_strlen($fileName,"UTF-8") > 225) ? true : false);
			
			$uploadfile = $output_dir.$fileName;
			
			if(is_writable($output_dir) && move_uploaded_file($_FILES["myfile"]["tmp_name"],$uploadfile)){
				$ret[]= $fileName;		
			}else {
			   echo "File was not uploaded";
			}
		}
		else  //Multiple files, file[]
		{
		  $fileCount = count($_FILES["myfile"]["name"]);

		  for($i=0; $i < $fileCount; $i++)
		  {
			$todays_date = date("mdYHis");
			// basename() may prevent filesystem traversal attacks;
			$fileName = basename($_FILES["myfile"]["name"][$i]);
			$fileName = preg_replace('/\s+/', '_', addslashes($fileName));
			//$fileName = preg_match("`^[-0-9A-Z_\.]+$`i", '', $fileName);
			$fileName = $todays_date.'_'.$fileName;
			  
			$uploadfile = $output_dir.$fileName;
			  
			if(is_writable($output_dir) && move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$uploadfile)){
				$ret[]= $fileName;	
			}else {
			   echo "File was not uploaded";
			}			
		  }
		}
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}	
	echo json_encode($ret);
	
 }

 ?>