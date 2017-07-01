<div class="container register">
    <div class="col-md-8 register">
    <form action="../crutches/sendRegForm.php" method="post" class="form-horizontal">
        <div class="form-group ">
            <label class="control-label col-sm-2" for="login">Логин:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="login" id="login" placeholder="Enter login">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
        </div>
        
        <div class="form-group ">
            <label class="control-label col-sm-2" for="pwd">Пароль:</label>
            <div class="col-sm-10">
                <input type="password"  class="form-control" name="pwd" placeholder="Введите пароль" id="pawd">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2" for="retype_pwd">Повторите пароль:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="retype_pwd" id="retype_pwd" placeholder="Повторите пароль">
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2" for="tel">Телефон:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tel" id="tel" >
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2" for="last">Фамилия:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="last" id="last" >
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2" for="first">Имя:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="first" id="first" >
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2" for="middle">Отчество:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="middle" id="middle" >
            </div>
        </div>

        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" id="reg_submit" class="btn btn-default">Submit</button>
            </div>
        </div>


        
    </form>
    </div>
    <div class="col-md-3" id="passes">

    </div>
</div>
<script src="../jquery/passesCheck.js"></script>
