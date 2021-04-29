<?php
// 배열 생성
$article = [];
$article["id"] = 1;
$article["regDate"] = "2021-04-29 14:52:16";
$article["writer"] = "홍길동";
$article["title"] = "제목1";
$article["body"] = "내용1";

// 출력
echo "<hr>";
print_r($article);

echo "<hr>";

// 키만 출력
foreach ( $article as $key => $value ) {
    echo $key. "<br>";
}
echo "<hr>";

// 값만 출력
foreach ( $article as $key => $value ) {
    echo $value. "<br>";
}
echo "<hr>";

// 출력
foreach ( $article as $key => $value ) {
    echo $key . " : " . $value . "<br>";
}
