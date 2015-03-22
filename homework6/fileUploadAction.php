<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="myStyles.css">
  <title>Action Page for File Upload</title>
</head>

<body>
  <div id="mainDiv">
    <?php
      echo "<h4>Array \$_FILES:</h4>\n";
      echo "<pre>";
      print_r($_FILES);
      echo "</pre>";
  
    $target_path = "images/";
    $baseFileName = basename( $_FILES['userfile']['name']);
    
    $target_path = $target_path . $baseFileName; 
    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target_path))
    {
      echo "<p>The file " . $baseFileName . 
      " has been uploaded to $target_path</p>";
      echo "<img src='$target_path' alt='image uploaded'>";
    }
    else
    {
      echo "<h4>There was an error uploading file " . 
      $baseFileName . "</h4>";
      switch ($_FILES['userfile']['error'])
      {
        case 2: $errorDescr = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
        break;
        
        case 3: $errorDescr = "The uploaded file was only partially uploaded.";
        break;
        
        case 4: $errorDescr = "No file was uploaded.";
        break;
        
        case 6: $errorDescr = "Missing a temporary folder.";
        break;
        
        case 7: $errorDescr = "Failed to write file to disk.";
        break;
        
        case 8: $errorDescr = "File upload stopped by extension.";
        break;
        
        default: $errorDescr = "There was an unknown error code.  The code was " . strval($_FILES['userfile']['error']) . ".";
      }
      echo "<p>$errorDescr</p>";
    }
  ?>
  </div>
</body>
</html>