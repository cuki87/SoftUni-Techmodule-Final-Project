<?php $this->title = 'Редакция на профил - Кухнята на Мони';

$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<h1><?= htmlspecialchars($this->heading) ?></h1>
<form method="post" enctype="multipart/form-data">
    <div>Потребителско име:</div>
    <input type="text" name="username" value="<?=$_SESSION['username']?>" disabled><br>
    <div>Парола:</div>
    <input type="password" name="password"><br>
    <div>Потвърдете паролата:</div>
    <input type="password" name="passwordConfirm"><br>
    <div>Пълно име:</div>
    <input type="text" name="fullName" value="<?=htmlspecialchars($this->user['full_name'])?>"><br>
    <div>E-mail:</div>
    <input type="text" name="email" value="<?=htmlspecialchars($this->user['email'])?>"><br>
    <div>Телефон:</div>
    <input type="text" name="phone" value="<?=htmlspecialchars($this->user['phone'])?>"><br>
    <div>Профилна снимка:</div>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <div>
        <input type="submit" value="Редактирай">
    </div>
</form>