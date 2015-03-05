<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Homework 4</title>
</head>
<body>
  <?php  

    $indexArray = array(0,0,0,0,0);

    $imagesDir = opendir("images/");
    chdir("images/");

    $currentFile = "";

    while ($currentFile !== false)
    {
     $currentFile = readdir($imagesDir);
     $imageArray[] = $currentFile;
    }  

    print(count($imageArray));
    
    for($i=0; $i < count($indexArray); $i++)
    {
      $indexNumber = rand(2,53);
      $indexArray[$i] = $indexNumber;
    }

    for ($i = 0; $i < count($indexArray); $i++)
    {
      $imageIndex = $indexArray[$i];
      $imageName = "images/" . $imageArray[$imageIndex];
      print "<img src='$imageName' width='200' height='200' alt='Card Images' />\n";
    }  

  ?>
</body>
</html>