

<?php
session_start();
?>

<?php
include_once 'connect.php';
$ipkiki = "select * from warning order by id desc";
$ipki = mysqli_query($connect, $ipkiki);
?>

<?php
include_once 'Nav.php';
?>

<link href="/admin/assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css"/>
<link href="/admin/assets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css"/>
<link href="/admin/assets/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css"/>
<link href="/admin/assets/css/vendor/select.bootstrap4.css" rel="stylesheet" type="text/css"/>
<!-- third party css end -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3 size_18">文件列表</h4>
                <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">
               

<?php
header("Access-Control-Allow-Origin: *");
header('content-type:application/json');
header("Content-type:text/html;charset=utf-8");
$dir = "upload/";
$docArray = array();
if (is_dir($dir)) {
	if ($dh = opendir($dir)) {
		while (($file = readdir($dh)) !== false) {
			$end = $file + "/admin/list2.php";
			$final = array_push($docArray,"$file");
		}
		//  echo json_encode($docArray);
		closedir($dh);
	}
}
foreach ($docArray as $key=>$value) {
	if ($value === '.' || $value === '..')
	    unset($docArray[$key]);
}
// echo   json_encode($docArray);
array_walk(
    $docArray,
    function (&$s, $k, $prefix = '/admin/upload/') {
	$s = str_pad($s, strlen($prefix) + strlen($s), $prefix, STR_PAD_LEFT);
}
);
// var_dump($docArray);
// echo json_encode($docArray);
echo "<pre>";print_r($docArray);echo "<pre>";


?>

                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<?php
include_once 'Footer.php';
?>

<!-- third party js -->
<script src="/admin/assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="/admin/assets/js/vendor/dataTables.bootstrap4.js"></script>
<script src="/admin/assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="/admin/assets/js/vendor/responsive.bootstrap4.min.js"></script>
<script src="/admin/assets/js/vendor/dataTables.buttons.min.js"></script>
<script src="/admin/assets/js/vendor/buttons.bootstrap4.min.js"></script>
<script src="/admin/assets/js/vendor/buttons.html5.min.js"></script>
<script src="/admin/assets/js/vendor/buttons.flash.min.js"></script>
<script src="/admin/assets/js/vendor/buttons.print.min.js"></script>
<script src="/admin/assets/js/vendor/dataTables.keyTable.min.js"></script>
<script src="/admin/assets/js/vendor/dataTables.select.min.js"></script>
<!-- third party js ends -->
<!-- demo app -->
<script src="/admin/assets/js/pages/demo.datatable-init.js"></script>
<!-- end demo js-->


</body>
</html>