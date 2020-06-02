<?

    include_once $_SERVER["DOCUMENT_ROOT"]."/admin/head.php";

    $query = "select * from project";
    $result = mq($query);
    $row = mysqli_fetch_array($result);
    include_once $_SERVER['DOCUMENT_ROOT']."/asset/inc/page_var.php";
?>
<!--리스트-->

<article class="work_list">
    <h2>프로젝트 리스트</h2>
    <ul>
        <?
            $query = "select * from project order by num desc limit $start_num,$list";
            $result = mq($query);
            while($row = mysqli_fetch_array($result)){
        ?>
        <li>
            <!--num, img, title, date, state
            update/delete-->
            <input type="checkbox">
            <a data-num="<?=$row['num']?>" class="view">
            <code><?=$row['num']?></code>
            <code><?=$row['name']?></code>
            <code><?=$row['subject']?></code>
            <code><?=$row['email']?></code>
            <code><?=$row['contents']?></code>
            <code><?=$row['date']?></code>
            </a>
            <a href="modify.php?num=<?=$row['num']?>" class="edit">[수정]</a>
            <a data-num="<?=$row['num']?>" class="del">[삭제]</a>
            
            <div class="contents"><?=$row['contents']?></div>
        </li>
        <? } ?>
    </ul>
    <div class="page">
        <?
            include_once $_SERVER['DOCUMENT_ROOT']."/asset/inc/paging.php";
        ?>   
    </div>
    <a href="request.php" class="btn">등록</a>
</article>
<div class="pop"></div>


<?
    fun('contact()');
    include_once $_SERVER["DOCUMENT_ROOT"]."/admin/foot.php";

?>