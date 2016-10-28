<!--Сериализация - Курс Изучаем PHP онлайн. Часть I от Devionity-->
<form action="index.php" method="POST">
    <fieldset>
        <p> Введите свое имя</p>
        <input type="text" name="userName">
        <p> Введите свою почту</p>
        <input type="email" name="userEmail">
        <p> Введите текст</p>
        <input type="text" name="userMassage">
    </fieldset>
    <input type="submit"name="submit"value="Отправить">
</form>
<?php
echo $str  = serialize($_POST);
echo '<br>';

$arr = unserialize($str);
print_r($arr);
?>