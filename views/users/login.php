<?php $this->title = 'Вход - Кухнята на Мони';

$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<h1><?= htmlspecialchars($this->heading) ?></h1>

<form method="post" class="usersForm">
    <input type="text" name="username" placeholder="Потребителско име"><br>
    <input type="password" name="password" placeholder="Парола"><br><br>
    <input type="submit" value="Вход">
</form>
