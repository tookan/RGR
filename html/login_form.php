<?php
echo "<form method='post' action=\"../crutches/sendLogForm.php\" class=\"form-inline logins\" >
    <div class=\"form-group\">
        <label for=\"login\"> Логин:</label>
        <input id='login' class=\"form-control\" name='login'>
    </div>
    <div class=\"form-group\">
        <label for=\"pwd\"> Пароль:</label>
        <input type=\"password\" class=\"form-control\" id=\"pwd\" name='pwd'>
    </div>
    <button type=\"submit\" class=\"btn btn-default\"> Войти</button>
</form>";
