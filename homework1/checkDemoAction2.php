<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="myStyles.css">
  <title>Checkbox Demo</title>
</head>
<body>
  <div id="mainDiv">
    <h1>Checkbox Demo</h1>
    
    <h3>Demonstrates reading checkboxes</h3>
    
    <?php

    $total = 0;

    if (filter_has_var(INPUT_POST, "chkFries"))
    {
      processCheckboxInfo("chkFries");
    }
    
    if (filter_has_var(INPUT_POST, "chkSoda"))
    {
      processCheckboxInfo("chkSoda");
    }
    
    if (filter_has_var(INPUT_POST, "chkShake"))
    {
      processCheckboxInfo("chkShake");
    }

    if (filter_has_var(INPUT_POST, "chkKetchup")) 
    {
      processCheckboxInfo("chkKetchup");
    }
    
    
    

    function processCheckboxInfo($itemName)
    {
      global $total;
      

      if (isset($_POST[$itemName]))
      {
        
        if ($itemName == "chkFries") 
        {
          print ("You chose Fries<br>");
          $chkFries = $_POST["chkFries"];
          $total += $chkFries;
        }

        if ($itemName == "chkSoda")
        {
          print ("You chose Soda<br>");
          $chkSoda = $_POST["chkSoda"];
          $total += $chkSoda;
        }

        if ($itemName == "chkShake")
        {
          print ("You chose a Shake<br>");
          $chkShake = $_POST["chkShake"];
          $total += $chkShake;
        }

        if ($itemName == "chkKetchup")
        {
          print("You chose Ketchup<br>");
          $chkKetchup = $_POST["chkKetchup"];
          $total += $chkKetchup;
        }
        
        
      }
    


    }

    print ("<br>The total cost is \$$total");
   ?> 
  </div>
</body>
</html>