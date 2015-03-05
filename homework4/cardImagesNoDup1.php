<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Homework 4</title>
</head>
<body>
  <?php  
    function initializeArray()
    {
        global $indexArray, $imageArray;

        $indexArray = array(0,0,0,0,0);
        $imageArray = array("1.png", "2.png", "3.png", "4.png", "5.png", "6.png",
        "7.png", "8.png", "9.png", "10.png", "11.png", "12.png", "13.png", "14.png",
        "15.png", "16.png", "17.png", "18.png", "19.png", "20.png", "21.png", "22.png",
        "23.png", "24.png", "25.png", "26.png", "27.png", "28.png", "29.png", "30.png",
        "31.png", "32.png", "33.png", "34.png", "35.png",   )
        ;

        $imagesDir = opendir("images/");
        chdir("images/");

        $currentFile = readdir($imagesDir);

        while ($currentFile !== false)
        {
         $imageArray[] = $currentFile; 
         $currentFile = readdir($imagesDir);
         
        }
        
    }  
    
    function randomNumber()
    {
        global $indexNumber, $indexArray;

        for($i=0; $i < count($indexArray); $i++)
        {
          $indexNumber = rand(1,52);
          $indexArray[$i] = $indexNumber;
        }   
    }

    function removeDuplicates()
    {
      global $indexArray;
       $indexArray = array_unique($indexArray);
       while (count($indexArray) < 5) 
       {
         randomNumber();
         $indexArray = array_unique($indexArray); 
        } 
    }

    function printArray()
    {
        global $imageIndex, $imageName, $indexArray, $imageArray;

        for ($i = 0; $i < count($indexArray); $i++)
        {
          $imageIndex = $indexArray[$i];
          $imageName = "images/" . $imageArray[$imageIndex];
          print "<img src='$imageName' width='200' height='200' alt='Card Images' />\n";
        } 
    } 

    initializeArray();
    randomNumber();
    removeDuplicates();
    printArray();

  ?>
</body>
</html>