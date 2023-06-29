<?php
include "../admin/model/pdo.php";
include "header.php";
// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
           
            // kiểm tra xem người dùng có click vào danh mục hay không
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $sql="insert into danhmuc(name) values('$tenloai')";
                pdo_execute($sql);
                $thongbao="Thêm thành công";
            }
            include "danhmuc/add.php";
            break;

            include "danhmuc/add.php.php";
            break;

        case 'listdm':
            $sql="select * from danhmuc order by name";
            $listdanhmuc=pdo_query($sql);
            include "danhmuc/list.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";

?>
