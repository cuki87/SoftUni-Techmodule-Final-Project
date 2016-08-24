<?php $this->title = 'Регистрация - Кухнята на Мони';

$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<h1><?= htmlspecialchars($this->heading) ?></h1>

<form method="post" class="usersForm">
    <input type="text" name="username" placeholder="Потребителско име"><br>
    <input type="password" name="password" placeholder="Парола"><br>
    <input type="password" name="passwordConfirm" placeholder="Парола"><br>
    <input type="text" name="fullName" placeholder="Име и фамилия"><br>
    <input type="email" name="email" placeholder="E-mail"><br>
    <input type="text" name="phone" placeholder="Телефон"><br>
    Профилна снимка:<br> <input type="file" name="profilePic"><br><br>
    <input type="submit" value="Регистрирай ме">
</form>
