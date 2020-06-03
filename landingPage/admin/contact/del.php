<?
    //data_query.php
    //query
    include_once
    $_SERVER['DOCUMENT_ROOT']."/admin/admin_check.php";

    $num = $_POST['num'];
    
    //삭제
    
    $query = "delete from contact where num ='$num'";
    mq($query);
    
?>