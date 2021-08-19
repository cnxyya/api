<?php
// +================================+
// |       QQGroup:883643580        |
// |       By:天灵域api管理系统      +
// |        Time:2021-8-18 11:35    |
// |    website:tianyu.xfxyxw.cn    |
// +================================+
?>
<?php
require "./librarys/func/isEmpty.php";
$t = $_GET['t'];
if($t == null){
    $t = "default";
}
include "./template/".$t."/index.php";
?>