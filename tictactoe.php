<?php
include "head.php";
$page = 'tictactoe';

?>
<style>
    .tictac {
        display: grid;
        grid-template: repeat(3, 1fr) / repeat(3, 1fr);
        grid-gap: 10px;
        height: 360px;
        width: 360px;
        margin: 50px auto;
    }
    .tictac a{
        border: 1px solid black;
        text-align: center;
        line-height: 120px;
        vertical-align: middle;
        font-size: 80px;
        text-decoration: none;
    }
</style>

<div class="container">
<?php include "navigation.php"; ?>

<?php
/*
$table = [
    ["-", "-", "-"],
    ["-", "-", "-"],
    ["-", "-", "-"]
];
*/
$table = [];

if (
    array_key_exists('r', $_GET) &&
    array_key_exists('c', $_GET) &&
    is_string($_GET['r']) &&
    is_string($_GET['c'])
) :?>
    <div class="alert alert-warning">
    <?php echo 'Rinda ' . $_GET['r'] . ', kollona ' . $_GET['c']; ?>
        
    </div>
    <?php
    $table[$_GET['r']][$_GET['c']] = "x";
endif; ?>

    <div class="tictac">
        <?php
            for ($r=1; $r<=3; $r++) {
                for ($c=1; $c<=3; $c++) {
                    echo "<a href='?r=$r&c=$c'>" . @$table[$r][$c] . "</a>";
                }
            }
        ?>
    </div>
</div>