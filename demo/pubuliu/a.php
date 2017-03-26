<?php
/**
 * 获取瀑布流图片数据
 */
$dataArr = array( 
    "status" => true,
);
for ($i = 1; $i <= 30; $i++) {
    $file = "./img/$i.jpg";
    if(!file_exists($file)){
        $file = "./img/$i.jpeg";
        $src  =  "/demo/pubuliu/img/$i.jpeg";
    }else{
        $src = "/demo/pubuliu/img/$i.jpg";
    }
    list($width, $height, $type, $attr) = getimagesize($file);
    $dataArr['data'][] = array(
        "src"   => $src,
        "width" =>  $width,
        "height"    =>  $height,
    );
}
echo json_encode($dataArr);
?>