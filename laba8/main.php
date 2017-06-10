<html>
<head>
    <meta charset="UTF-8">
    <title>Working with DB and AJAX</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.1/jquery.autocomplete.js"></script>


</head>
<style>
    .ui-helper-hidden-accessible {
        display: none !important;

    }
    .ui-autocomplete{
        font-size: 17px;
        background-color: skyblue;
    }

    #goods {
        text-align: center;
    }

    #addgoo {
        margin-left: 20px;
    }
    ul {
        list-style-type: none;
    }
    #autoco{
        padding-bottom: 15px;
    }
  
    

</style>
<body>
<div class="row" >
    <div class="col-md-8 col-md-offset-4" id="formsrch">
        <form action="javascript:void(0);" method="get" class="form-inline">
            <div class="form-group" id="search">
                <label>Поиск заказов</label>
                <input type="text" class="form-control" id="srch">
            </div>
            <div class="form-group">
                <button class="btn btn-info" id="srchB">Искать</button>
            </div>
        </form>
    </div>
    <div id="autoco" class="col-md-2 col-md-offset-4"> </div>
</div>
<div class="row" id="result">
    <div class="col-md-1"></div>
</div>
<script src="scripts/autocompletedata.js"></script>
<script src="scripts/output.js"></script>

<h3 id="goods">Товары</h3>
<div class="col-md-12 ">
    <?php foreach ($tovar as $tov) {
        $id = $tov->getId();
        echo "<div class='col-md-4'> <table class='table table-striped table-hover'>
<tr><td>Id: </td><td>$id</td></tr>
<tr><td>Название: </td><td>$tov->name</td></tr>
<tr><td>Описание: </td><td>$tov->description</td></tr>
<tr><td>Цена: </td><td>$tov->price</td></tr>
<tr><td>Количество на складе: </td><td>$tov->quantity</td></tr>
</table></div>
";
    } ?>
</div>


<div class="row" id="form-ins">

    <div class="col-md-4 col-md-offset-1">
        <h4 id="addgoo">Добавление товаров</h4>
        <form action="scripts/insertTovar.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label>Название товара</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="form-group">
                <label>Описание</label>
                <div class="col-sm-4">
                    <textarea type="text" class="form-control" name="description" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label>Количество на складе</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="quantity">
                </div>
            </div>
            <div class="form-group">
                <label>Цена</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="price">
                </div>
            </div>
                <input type="submit" class="btn btn-warning"  value="Добавить">
        </form>
    </div>
    <div class="col-md-4 ">
        <form action="scripts/deletetovar.php" method="get" class="form-horizontal">
            <div class="form-group">
                <label>Удаление товара по названию</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
                <button type="submit" class="btn btn-danger" >Удалить</button>
        </form>
    </div>
</div>
</body>
</html>