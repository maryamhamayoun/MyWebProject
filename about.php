<?php
  // Get the current date and time
  $currentDate = date("Y-m-d");
  $currentTime = date("H:i:s");

  // Simple greeting based on hour
  $hour = (int)date("H");
  if ($hour < 12) {
    $greeting = "Good Morning";
  } elseif ($hour < 18) {
    $greeting = "Good Afternoon";
  } else {
    $greeting = "Good Evening";
  }

  // Simple array example
  $fruits = ["Apple", "Banana", "Mango", "Orange"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple PHP Page</title>
  <style>
    body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; background: #f4f4f4; color: #333; }
    h1 { color: #27ae60; }
    ul { background: white; padding: 15px 30px; border-radius: 6px; }
    li { margin: 5px 0; }
  </style>
</head>
<body>
  <h1><?php echo $greeting; ?>!</h1>
  <p>Today's date: <strong><?php echo $currentDate; ?></strong></p>
  <p>Current time: <strong><?php echo $currentTime; ?></strong></p>

  <h2>Fruit List</h2>
  <ul>
    <?php foreach ($fruits as $fruit): ?>
      <li><?php echo $fruit; ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
