<?php

require("../classes/marvelShop.php");

$shops = marvelShop::getAll();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marvel shop</title>

    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/favicon.ico"/>


    <script type="text/javascript" src="../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="../scripts/marvelshop.js"></script>
    <script type="text/javascript" src="../scripts/global.js"></script>

</head>
<body>

<div class="container-fluid">
    <div class="row filter_block">
        <form action="" id="formData">
            <div class="col-lg-2">
                <fieldset>
                    <legend>- Магазин -</legend>
                    <input type="text" id="shop" name="shop" class="form-control input-sm" placeholder="Магазин">
                </fieldset>
            </div>
            <div class="col-lg-2">
                <div class="row">
                    <fieldset>
                        <legend>- Деиствия -</legend>
                        <button type="button" class="btn btn-primary" id="filter">Фильтровать</button>
                    </fieldset>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
        </form>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-1">
            <button type="button" class="btn btn-success " id="add">Добавить</button>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-2" id="shop_div">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Магазин</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($shops as $shop){?>
                        <tr>
                            <td><span class="shop_span" data-id="<?=$shop['id']?>"><?=$shop['name']?></span></td>
                        </tr>
                    <?}?>
                </tbody>
            </table>
        </div>

        <div class="col-lg-10"></div>
    </div>
</div>

<div class="modal fade mymodal" tabindex="-1" role="dialog" id="mymodal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Новый магазин</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="shopname" id="shopname" class="form-control input-sm" placeholder="Назшани магазина"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="saveshop">Сохранить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>