<?php
$submitted = isset($_POST['username']) && isset($_POST['password']);
if($submitted)
{
    setcookie('username',$_POST['username']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Learn Conditional</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen'>
    
</head>
<body>
    <?php if ($submitted): ?>
    <p>Your login info</p>
    <ul>
        <li><b>username</b>: <?php echo $_POST['username']; ?></li>
        <li><b>passsword</b>: <?php echo $_POST['password']; ?></li>
    </ul>
<?php else: ?>
    <p>Masukkan Username dan Password.</p>
<?php endif; ?>

</body>
</html>