<?php $this->title = 'Потребители - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <br>
    <div class="add">
        <a href="<?=APP_ROOT?>/users/add">Добави потребител</a>
    </div>
    <br>
    <table>
        <thead>
        <td>ID</td>
        <td>Потребителско име</td>
        <td>Пълно име</td>
        <td>E-mail</td>
        <td>Телефон</td>
        <td>Профилна снимка</td>
        <td>Администратор?</td>
        <td>Администриране</td>
        </thead>
        <?php foreach ($this->users as $user){?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['username']?></td>
                <td><?=$user['full_name']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['phone']?></td>
                <td class="image"><img src="<?=substr(APP_ROOT, 0, 8).$user['profile_picture']?>" class="thumbnail" alt="Няма снимка"></td>
                <td style="text-align: center; font-weight: bold;">
                  <?php if ($user['admin'] == 1) {
                      echo '<span style="color: red;">Да</span>';
                  }
                  else {
                       echo 'Не';
                   }?>
                </td>
                <td class="admintab">
                    <a href="<?=APP_ROOT?>/users/edit/<?=$user['id']?>">Промени</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=APP_ROOT?>/users/delete/<?=$user['id']?>" onclick="return confirm('Сигурни ли сте, че искате да изтриете този потребител?')">Изтрий</a>
                </td>
            </tr>
        <?php } ?>
    </table>