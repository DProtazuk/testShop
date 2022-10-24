<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include($root."/config/connect.php"); ?>


<?php 
    include($root."/config/link-css.php");
    include($root."/config/link-js.php");
?>

<header class="myContainer m-auto bg-dark p-3 d-flex justify-content-between">
    <span class="text-warning fs-2 col-2 fw-bold pointer">@DProtazuk</span>

    <div class="search col-5 d-flex">
        <input placeholder="Искать:" type="text" class="form-control">
        <button class="btn bg-primary mx-1" style="--bs-bg-opacity: .8;">Поиск</button>
    </div>

    <div class="col-4 d-flex justify-content-between">
        <div class="col-9 d-flex justify-content-around align-items-center">
            <span class="text-white fw-bold fs-5 pointer">Adminner</span>
            <div class="col-3 bg-danger p-2">

            </div>
        </div>

        <div class="col-3 px-3 d-flex justify-content-end">
            <button class="btn fw-bold bg-success px-4 text-white btnEntrance" style="--bs-bg-opacity: .5;">Войти</button>
        </div>
    </div>
</header>

<div class="myContainer p-2 d-flex justify-content-around bg-secondary">
    <div class="menu-mini p-1 px-3 fw-bold text-white border-secondary border border-2 fs-5 pointer">
        Каталог
    </div>

    <div class="menu-mini p-1 px-3 fw-bold text-white border-secondary border border-2 fs-5 pointer">
        О нас
    </div>

    <div class="menu-mini p-1 px-3 fw-bold text-white border-secondary border border-2 fs-5 pointer">
        Контакты
    </div>
</div>


<?php 
    include($root."/php/Entrance.php");
    $instance = new Entrance();
    //echo $instance->authentication("admin", $db);
    echo "<pre>";
    var_dump($instance->authentication("admin", $db));
?>