<html>
<head>
<title>www.rw</title>
 <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
 <link rel="stylesheet" type="text/css" href="css/style3.css" />
</script>
</head>
<body>
<?php

$mail=$_POST['mail']; 

if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}

$name = htmlspecialchars(trim($name));
$email = htmlspecialchars(trim($email));
$mess = htmlspecialchars(trim($mess));

//if (isset($name) && isset($email) && isset($mess))

if (empty($name))

{
echo "<h4>Вы не указали имя!</h4><A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>";
exit;
} 
else 
if (empty($email))
{
echo "<h4>Вы не указали E-mail!</h4><A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>";
exit;
}
else
if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email))
{
echo "<h4>Вы указали неверный E-mail!</h4><A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>";
exit;
}
else 
if (empty($mess))
{
echo "<h4>Вы не написали собщение!</h4><A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>";
exit;
}
else
$to = "$mail"; /*УКАЗАТЬ СВОЙ АДРЕС!*/
$charset = "windows-1251";
$subject = "Письмо с сайта - www.rw";
$messages = "Имя пославшего: $name \nЭлектронный адрес: $email \nСообщение: $mess";
$send = mail ($to,$subject,$messages);
if ($send == 'true')
{
echo "<h4>Ваше сообщение успешно отправлено!</h4><A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>";
}
else 
{
echo "<h4>Ваше сообщение не отправлено!</h4><A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>";
}
?>
</body>
</html>