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

        $imageArray = scandir("images/");    
    }  
    
    function randomNumber()
    {
        global $indexNumber, $indexArray;

        for($i=0; $i < count($indexArray); $i++)
        {
          $indexNumber = rand(2,53);
          $indexArray[$i] = $indexNumber;
        }   
    }

    function removeDuplicates()
    {
      global $indexArray;

        set_time_limit(0);
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