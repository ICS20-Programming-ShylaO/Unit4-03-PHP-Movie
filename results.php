<?php

// initializing $userAge

  $userAge = $_POST['user-age'];

// response for when user age is less than or equal to 0 

if ($userAge <= 0) {
      echo "Please enter a valid age.";
} 

// response for when user age is 17 or greater

else if ($userAge >= 17) {
      echo "You can see an R rated movie alone.";
}

// response for when user age is 13 or greater (but less than 17)

else if ($userAge >= 13) {
      echo "You can see a PG-13 movie alone.";
}

// response for when user age is 5 or greater (but less than 13)

else if ($userAge >= 5) {
      echo "You can see a G and PG rated movie alone.";
}

// response for when user age is less than 5 (greater than 0)

else if ($userAge < 5) {
      echo "You cannot see any movies alone.";
}

// response for when user does not enter an age

else if ($userAge = "") {
      echo "Please enter your age.";
}