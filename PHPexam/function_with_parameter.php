<?php
$article3 = [];
$article3['id'] = 3;
$article3['title'] = "제목3";

$article2 = [];
$article2['id'] = 2;
$article2['title'] = "제목2";

$article1 = [];
$article1['id'] = 1;
$article1['title'] = "제목1";

function getArticles() {
    // 함수 외부에서 선언된 객체를 사용할 때는 함수 내부에서 global 선언이 필요
    global $article1;
    global $article2;
    global $article3;

    $articles = [];

    $articles[] = $article3; // 인덱스 0
    $articles[] = $article2; // 인덱스 1
    $articles[] = $article1; // 인덱스 2

    return $articles;
}

// 함수 내부의 $articles와 다른 변수로 함수 getArticles()로 부터 얻어진 배열
$articles = getArticles();
echo $articles[0]['title'];
echo "<hr/>";
echo $articles[1]['title'];
echo "<hr/>";
echo $articles[2]['title'];
?>
