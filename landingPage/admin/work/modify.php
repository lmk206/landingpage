<?
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/head.php";
    $num = $_GET['num'];
    $query = "select * from project where num='$num'";
    $result = mq($query);
    $row = mysqli_fetch_array($result);
?>
<!-- 글쓰기 -->
<!-- 1. 썸네일
2. 제목
3. 상세설명 (editor)
4. 프로젝드 url
5. 날짜 -->
<script type="text/javascript" src="/editor/js/HuskyEZCreator.js" charset="utf-8"></script>
<article class="request">
    <h2>프로젝트 등록</h2>
    <form action="request_res.php" name="popol" enctype="multipart/form-data" method="post">
        <ul>
            <li><input type="text" name="title" value="<?=$row['title']?>"></li>
            <li><input type="text" name="url" value="<?=$row['url']?>"></li>
            <li><input type="date" name="date" value="<?=$row['date']?>"></li>
            <li>
                <?
                    if(!empty($row['upload'])){
                        echo "<img src=$row[upload]>";
                    }        
                ?>
                <input type="file" name="upload"></li>
            <li>
                <textarea name="contents" id="ir1"><?=$row['contents']?></textarea>
                
            </li>
            <li><input type="submit" value="Edit PROJECT" class="btn"></li>
        </ul>
        <input type="hidden" name="num" value="<?=$_GET['num']?>">
        <input type="hidden" name="mode" value="modify">
    </form>
</article>
<?
    fun('request()');
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/foot.php";
?>

