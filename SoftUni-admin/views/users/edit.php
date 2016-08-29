<?php $this->title = 'Добави потребител - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <form method="post" class="usersForm reg">
        <div>ID:</div>
        <input type="text" name="id" value="<?=htmlspecialchars($this->user['id'])?>" disabled><br>

        <div>Потребителско име:</div>
        <input type="text" name="username" value="<?=htmlspecialchars($this->user['username'])?>"><br>

        <div>Пълно име:</div>
        <input type="text" name="fullName" value="<?=htmlspecialchars($this->user['full_name'])?>"><br>

        <div>E-mail:</div>
        <input type="email" name="email" value="<?=htmlspecialchars($this->user['email'])?>"><br>

        <div>Телефон:</div>
        <input type="text" name="phone" value="<?=htmlspecialchars($this->user['phone'])?>"><br>

        <?php if ($this->user['profile_picture'] != null){ ?>
            <div>Снимка:</div>
            <a href="<?=substr(APP_ROOT, 0, 8).htmlspecialchars($this->user['profile_picture'])?>" target="_blank" title="Кликни за пълен размер">
                <img src="<?=substr(APP_ROOT, 0, 8).htmlspecialchars($this->user['profile_picture'])?>" alt="Няма снимка">
            </a><br>
        <?php }
        else{
            ?>
            <div><i><u>Няма снимка</u></i></div>
        <?php }?>
        <input type="file" name="profilePic" id="file" class="inputfile" />
        <label for="file">
            Нова профилна снимка
        </label>

        <div>Администратор?</div>
        <div class="select">
            <select name="admin">
                <option value="" <?=$this->user['admin']? '':'selected'?>>Не</option>
                <option value="1" <?=$this->user['admin']? 'selected':''?>>Да</option>
            </select>
        </div>
        <br><br>

        <input type="submit" value="Редактирай">
    </form>

    <script type="text/javascript">
        fileInput();
    </script>