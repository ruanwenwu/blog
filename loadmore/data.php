<?php
$page = $_POST['page'];
$arr = array(
	array("id"=>"3553","pic"=>"zolqrcode.jpg","title"=>"page:{$page}-title one"),
	array("id"=>"3553","pic"=>"zolqrcode.jpg","title"=>"page:{$page}-title two"),
);
echo json_encode($arr);
die;
