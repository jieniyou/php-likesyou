<?php
session_start();
?>

<?php
include_once 'connect.php';
$url = 'https://www.kikiw.cn/Love/likev5.php';
$lines_array = file($url);
$lines_string = implode('', $lines_array);
$userurl = 'https://www.kikiw.cn/Love/user.php';
$userarray = file($userurl);
$userstring = implode('', $userarray);
?>
<?php
include_once 'Nav.php';
?>

<style>
    .btn-success {
        border-radius: 10px;
        border: 2px solid #fff;
    }

    .btn-success:hover {
        background-color: 0;
        border-color: 0;
        opacity: 0.7;
    }

</style>

<div class="row">

    <div class="col-sm-12">
        <?php echo($userstring); ?>
    </div>

    <div class="col-md-12">
        <?php echo($lines_string); ?>
    </div>

</div>

<?php
include_once 'Footer.php';
?>

</body>
</html>