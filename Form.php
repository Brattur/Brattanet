<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Brattanet.css">
	<meta charset="UTF-8">
</head>

<head>
	
		<div class="Menu">
<ul>
  <li><img class="Logo" src="http://tsuts.tskoli.is/2t/3005992309/Brattanet-logo.png"></a></li>
  <li><a class="Heim" href="#Heim">Heim</a></li>
  <li><a class="Samband" href="#Samband">Hafa Samband</a></li>
  <li><a class="Um_Okkur" href="#Um_Okkur">Um Okkur</a></li>
  <li><a class="Leikirnir_okkar" href="#Leikirnir_okkar">Leikirnir okkar</a></li>
  <li><a class="Senda_inn_leik" href="#Senda_ínn_leik">Senda ínn leik</a></li>
  <li><a class="Flokkar" href="#Flokkar">Flokkar</a></li>

</ul>
	</div>
</head>
<body>
	<div class="Head">	
		
	</div>






<div class="contain">
<div class="Form"> 
	 <form method="POST" name="email_form_with_php" action="php-form-action.php" enctype="multipart/form-data"> 

<label for='name' style="color:white;">Nafn: </label>
<input type="text" name="name" >
<br>
<br>
<label for='email' style="color:white;">Emailið þitt: </label>
<input type="text" name="email" >
<br>
<br>
<label for='message' style="color:white;">Nafn á leik og stutt lysing af leiknum:</label>
<textarea name="message"></textarea>
<br>
<br>
<label for='uploaded_file' style="color:white;">Velja skrá:</label>
<input type="file" name="uploaded_file">
<br>
<br>
<input type="submit" value="Submit" name='submit'>
</form>
</div>
	 	</div>
	 
	 </aside>

	
</div>

</body>
<?php
//Get the uploaded file information
$name_of_uploaded_file =
    basename($_FILES['uploaded_file']['name']);
 
//get the file extension of the file
$type_of_uploaded_file =
    substr($name_of_uploaded_file,
    strrpos($name_of_uploaded_file, '.') + 1);
 
$size_of_uploaded_file =
    $_FILES["uploaded_file"]["size"]/1024;//size in KBs

    //Settings
$max_allowed_file_size = 100; // size in KB
$allowed_extensions = array("jpg", "jpeg", "gif", "bmp");
 
//Validations
if($size_of_uploaded_file > $max_allowed_file_size )
{
  $errors .= "\n Size of file should be less than $max_allowed_file_size";
}
 
//------ Validate the file extension -----
$allowed_ext = false;
for($i=0; $i<sizeof($allowed_extensions); $i++)
{
  if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
  {
    $allowed_ext = true;
  }
}
 
if(!$allowed_ext)
{
  $errors .= "\n The uploaded file is not supported file type. ".
  " Only the following file types are supported: ".implode(',',$allowed_extensions);
}


//copy the temp. uploaded file to uploads folder
$path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
$tmp_path = $_FILES["uploaded_file"]["tmp_name"];
 
if(is_uploaded_file($tmp_path))
{
  if(!copy($tmp_path,$path_of_uploaded_file))
  {
    $errors .= '\n error while copying the uploaded file';
  }
}
?>

</html>