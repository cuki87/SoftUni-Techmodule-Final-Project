<?php $this->title = 'Добави потребител - Кухнята на Мони';
$this->heading = str_replace(" - Кухнята на Мони","",$this->title);
?>
<main>
    <h1><?= htmlspecialchars($this->heading) ?></h1>
    <form method="post" class="usersForm reg">
        <input type="text" name="username" placeholder="Потребителско име"><br>
        <input type="password" name="password" placeholder="Парола"><br>
        <input type="password" name="passwordConfirm" placeholder="Потвърждение на парола"><br>
        <input type="text" name="fullName" placeholder="Име и фамилия"><br>
        <input type="email" name="email" placeholder="E-mail"><br>
        <input type="text" name="phone" placeholder="Телефон"><br>
        <input type="file" name="profilePic" id="file" class="inputfile" />
        <label for="file">
            Качи профилна снимка
        </label>
        <div>Администратор?</div>
        <div class="select">
            <select name="admin">
                <option value="">Не</option>
                <option value="1">Да</option>
            </select>
        </div>
        <br><br>

        <input type="submit" value="Добави">
    </form>

    <script type="text/javascript">
        fileInput();
    </script>