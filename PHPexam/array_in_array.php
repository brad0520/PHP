<?php
$article3 = [];
$article3["id"] = 3;
$article3["regDate"] = "2021-04-29 15:12:54";
$article3["writer"] = "임꺽정";
$article3["title"] = "제목3";
$article3["body"] = "내용3";

$article2 = [];
$article2["id"] = 2;
$article2["regDate"] = "2021-04-29 15:05:23";
$article2["writer"] = "김철수";
$article2["title"] = "제목2";
$article2["body"] = "내용2";

$article1 = [];
$article1["id"] = 1;
$article1["regDate"] = "2021-04-29 14:52:16";
$article1["writer"] = "홍길동";
$article1["title"] = "제목1";
$article1["body"] = "내용1";

$articles = [$article3, $article2, $article1];

?>
<h1>게시물 리스트 v3</h1>

<style>
.table-1 {
    border-collapse:collapse;
}

.table-1 th, .table-1 td {
    border:1px solid black;
    padding:10px;
}
</style>

<table class="table-1">
    <thead>
        <tr>
            <th>번호</th>
            <th>날짜</th>
            <th>작성자</th>
            <th>제목</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ( $articles as $article ) { ?>
    <tr>
        <td><?=$article['id']?></td>
        <td><?=$article['regDate']?></td>
        <td><?=$article['writer']?></td>
        <td><a href="#"><?=$article['title']?></a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>


<h1>게시물 리스트 v2</h1>

<table class="table-1">
    <tr>
        <td>번호</td>
        <td>날짜</td>
        <td>작성자</td>
        <td>제목</td>
    </tr>
    <?php for ( $i = 0; $i < count($articles); $i++ ) { ?>
    <tr>
        <td><?=$articles[$i]['id']?></td>
        <td><?=$articles[$i]['regDate']?></td>
        <td><?=$articles[$i]['writer']?></td>
        <td><?=$articles[$i]['title']?></td>
    </tr>
    <?php } ?>
</table>

<h1>게시물 리스트 v1</h1>

<table class="table-1">
    <tr>
        <td>번호</td>
        <td>날짜</td>
        <td>작성자</td>
        <td>제목</td>
    </tr>
    <tr>
        <td><?=$articles[0]['id']?></td>
        <td><?=$articles[0]['regDate']?></td>
        <td><?=$articles[0]['writer']?></td>
        <td><?=$articles[0]['title']?></td>
    </tr>
    <tr>
        <td><?=$articles[1]['id']?></td>
        <td><?=$articles[1]['regDate']?></td>
        <td><?=$articles[1]['writer']?></td>
        <td><?=$articles[1]['title']?></td>
    </tr>
        <tr>
        <td><?=$articles[2]['id']?></td>
        <td><?=$articles[2]['regDate']?></td>
        <td><?=$articles[2]['writer']?></td>
        <td><?=$articles[2]['title']?></td>
    </tr>
</table>
