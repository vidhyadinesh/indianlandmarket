<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Reset your password</h1>
<form action="<?php echo site_url('home/user_password_reset');?>" method="post">
<input type="hidden" name="token" value="<?php $temp_pass ?>"
<label>Password:</label>
<input type="password" name="password">
<label>Retype password:</label>
<input type="password" name="confirm_password">
<input type="submit" value="submit">
</form>
</body>
</html>