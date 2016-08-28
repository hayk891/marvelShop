
<?php

require ("../classes/marvelShop.php");

$shops = marvelShop::getAll();

echo "<pre>"; print_r($shops); echo "</pre>";

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
    <link rel="shortcut icon" href="../img/favicon.ico" />


    <script type="text/javascript" src="../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <form action="" id="formData">
            <div class="col-lg-2">
                <fieldset>
                    <legend>- Магазин -</legend>
                    <input type="text" id="shop" name="shop" class="form-control input-sm" placeholder="Магазин">
                </fieldset>
            </div>
            <div class="col-lg-2">
                <fieldset>
                    <legend>- Деиствия -</legend>
                <input type="button" class="form-control input-sm btn btn-primary" value="Фильтровать" id="filter"/>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"></div>
        </form>
    </div>
    <hr>
    <div class="row">

    </div>
</div>

</body>
</html>