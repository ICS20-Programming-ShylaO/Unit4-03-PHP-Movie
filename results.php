<?php
// initializing $userAge

  $userAge = $_POST['user-age'];
// response for when user does not enter an age

if (empty($userAge)) {
      echo "Please enter your age.";
}
// response for when user age is less than or equal to 0

elseif ($userAge <= 0) {
      echo "Please enter a valid age.";
}
// response for when user age is 17 or greater

elseif ($userAge >= 116) {
      echo "You must be alive to watch a movie. Thank you for using this tool!";
}
// response for when user age is 17 or greater

elseif ($userAge >= 17) {
      echo "You can see an R rated movie alone. Thank you for using this tool!";
}
// response for when user age is 13 or greater (but less than 17)

elseif ($userAge >= 13) {
      echo "You can see a PG-13 movie alone. Thank you for using this tool!";
}
// response for when user age is 5 or greater (but less than 13)

elseif ($userAge >= 5) {
      echo "You can see a G and PG rated movie alone. Thank you for using this tool!";
}
// response for when user age is less than 5 (greater than 0)

elseif ($userAge < 5) {
      echo "You cannot see any movies alone. Thank you for using this tool!";
}
