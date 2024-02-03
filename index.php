<?php
   //Task 1: Setting Up Your PHP Environment
   
   //Task 2: Variable Declaration and Data Types
   //Declare three variables: one for a string, one for an integer, and one for a boolean value.
   $name = "Johnsen"; // variable for string
   $age = 18;         // variable for integer
   $isAlive = true;   // variable for boolean

   //Output
   echo "Hello my name is " . $name . " I am " . $age . " years of age and currently " . $isAlive;

   echo "<br/>";

   //Task 3: Conditionals
   if ($age >= 18) {
      echo "You're an adult";
   } else if ($age >= 1 ) {
      echo "You're a minor";
   } else {
      echo "You're not been born yet";
   }

   echo "<br/>";

   //Task 4: Loops

   //For Loop:
   for ($i = 1; $i <= 5; $i++){
      echo $i;
   }
   echo "<br/>";

   //While Loop:
   $counter = 5;

   while($counter >= 1){
      echo $counter;
      $counter--;
   }
   echo "<br/>";

   //Task 5: Arrays
   //Indexed Array:
   $fruits = array("Banana", "Apple", "Orange");

   //output
   foreach($fruits as $fruit) {
      echo $fruit; 
   } 


   //Associative Array:
   $person = array(
      "name" => "Johnsen",
      "age" => 21,
      "city" => "Cebu"
   );
   

   //output
   echo "Name: " . $person["name"] . "<br>";
   echo "Age: " . $person["age"] . "<br>";
   echo "City: " . $person["city"] . "<br>";

   echo "<br/>";

   //Task 6: Functions
   //Create function:
   function addNumbers($x, $y) {
      echo $x + $y;
   }

   //Function call:
   addNumbers(21, 18)
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f4f4f4;
         margin: 1.0rem;
         padding: 10px;
         height: 100vh;
      }

      form {
         background-color: #fff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      label {
         display: block;
         margin-bottom: 8px;
      }

      input {
         width: 100%;
         padding: 8px;
         margin-bottom: 16px;
         box-sizing: border-box;
         border: 1px solid #ccc;
         border-radius: 4px;
      }

      button {
         background-color: #000;
         color: #fff;
         padding: 10px 20px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
      }

      button:hover {
         background-color: #;
      }
   </style>
</head>
<body>
   <div>
      <div class="container">
         <form method="POST" action="addMember.php">
            <h1>Add New Member</h1>
            <label for="addName">Add new name:</label>
            <input type="text" name="addName" id="addName" required> <br>
            <button>Add</button>
         </form>
      </div>
   </div>
</body>
</html>