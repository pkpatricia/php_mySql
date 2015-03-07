<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>State Name</title>
</head>
<body>
  <?php


      $stateName = filter_input(INPUT_POST, 'state');

      $stateName = strtoupper($stateName);

      $stateName = trim($stateName);

      $stateInfo = array();

      $stateInfo["AL"] = "Alabama";
      $stateInfo["AK"] = "Alaska";
      $stateInfo["AZ"] = "Arizona";
      $stateInfo["AR"] = "Arkansas";
      $stateInfo["CA"] = "California";
      $stateInfo["CO"] = "Colorado";
      $stateInfo["CT"] = "Connecticut";
      $stateInfo["DE"] = "Delaware";
      $stateInfo["DC"] = "District of Columbia";
      $stateInfo["FL"] = "Florida";
      $stateInfo["GA"] = "Georgia";
      $stateInfo["HI"] = "Hawaii";
      $stateInfo["ID"] = "Idaho";
      $stateInfo["IL"] = "Illinois";
      $stateInfo["IN"] = "Indiana";
      $stateInfo["IA"] = "Iowa";
      $stateInfo["KS"] = "Kansas";
      $stateInfo["KY"] = "Kentucky";
      $stateInfo["LA"] = "Louisiana";
      $stateInfo["ME"] = "Maine";
      $stateInfo["MD"] = "Maryland";
      $stateInfo["MA"] = "Massachusetts";
      $stateInfo["MI"] = "Michigan";
      $stateInfo["MN"] = "Minnesota";
      $stateInfo["MS"] = "Mississippi";
      $stateInfo["MO"] = "Missouri";
      $stateInfo["MT"] = "Montana";
      $stateInfo["NE"] = "Nebraska";
      $stateInfo["NV"] = "Nevada";
      $stateInfo["NH"] = "New Hampshire";
      $stateInfo["NJ"] = "New Jersey";
      $stateInfo["NM"] = "New Mexico";
      $stateInfo["NY"] = "New York";
      $stateInfo["NC"] = "North Carolina";
      $stateInfo["ND"] = "North Dakota";
      $stateInfo["OH"] = "Ohio";
      $stateInfo["OK"] = "Oklahoma";
      $stateInfo["OR"] = "Oregon";
      $stateInfo["PA"] = "Pennsylvania";
      $stateInfo["RI"] = "Rhode Island";
      $stateInfo["SC"] = "South Carolina";
      $stateInfo["SD"] = "South Dakota";
      $stateInfo["TN"] = "Tennessee";
      $stateInfo["TX"] = "Texas";
      $stateInfo["UT"] = "Utah";
      $stateInfo["VT"] = "Vermont";
      $stateInfo["VA"] = "Virginia";
      $stateInfo["WA"] = "Washington";
      $stateInfo["WV"] = "West Virginia";
      $stateInfo["WI"] = "Wisconsin";
      $stateInfo["WY"] = "Wyoming";

      if(array_key_exists($stateName, $stateInfo))
      {
        print("The full state name is: " . $stateInfo[$stateName]);
      }

      else
      {
        print("Not a valid state abbreviation.  Please go back and try again.");
      }

  ?>
</body>
</html>