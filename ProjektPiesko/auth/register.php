<?php
require_once "../settings.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<?php require_once BASE_DIR."/template/header.php"?>
</head>
<body>
<div class="container">

<form method="post" action="">
   <div class="form-group">
      <label for="username">Username:</label>
      <input id="username" class="form-control" type="text" maxlength="<?USER_USERNAME_MAX?>" name="username" required>
   </div>
   <div class="form-group">
      <label for="email">Email:</label>
      <input id="email" class="form-control" type="email" name="email" required>
   </div>
   <div class="form-group">
      <label for="password">Password:</label>
      <input id="password" class="form-control" type="password" name="password" required>
   </div>
   <div class="form-group">
      <label for="confirm_password">Confirm password:</label>
      <input id="confirm_password" class="form-control" type="password" name="confirm_password" required>
   </div>
   <div class="custom-control custom-checkbox">
      <input id="accept_tos" class="custom-control-input" type="checkbox" name="true" required>
      <label for="accept_tos" class="custom-control-label">I accept Terms of Service</label>
   </div>

   </form>

      
      
   
   

</div>
<?php require_once BASE_DIR."/template/footer.php"?>
</body>
</html>