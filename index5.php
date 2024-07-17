<?php
$session_id = 1;
if ($session_id == 0) 
{
    echo '
    <form method="post" action="login.php">
        Логін: <input type="text" name="username"><br>
        Пароль: <input type="password" name="password"><br>
        <input type="submit" value="Увійти">
    </form>';
} 
else 
{
    echo 'Ви зареєстровані, увійдіть';
}
?>