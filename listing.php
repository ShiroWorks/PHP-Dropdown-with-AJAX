<?php

require 'app/start.php';

$usersQuery = "SELECT users.id, users.username, users_profiles.first_name, users_profiles.last_name FROM users LEFT JOIN  users_profiles ON users.id = users_profiles.user_id";


$users = $db->query($usersQuery);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
        <select name="user" id="user-select">
            <option value="">Choose a user</option>
            <?php foreach($users->fetchAll() as $user): ?>
                <option value="<?php echo $user['id']; ?>"><?php echo $user['username']; ?></option>
                <?php endforeach; ?>
        
        </select>
 
   <div id="user-profile"></div>
   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="js/global.js"></script>
</body>
</html>