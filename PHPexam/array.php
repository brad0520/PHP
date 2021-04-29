<?php
// 배열 생성(길이가 2인 배열)
$arr = [10, 20];

echo "배열의 길이 : " . count($arr) . "<br>";

// 배열의 요소 추가
$arr[2] = 30;
$arr[3] = 40;
$arr[4] = 50;
// 배열의 요소를 인텍스 없이 추가하면 자동으로 다음 인덱스 사용하여 추가
$arr[] = 60;
$arr[] = 70;

echo "<hr>";

// 배열의 내용 출력
print_r($arr);

echo "<hr>";

// 배열의 0번째 요소 접근
echo $arr[0];

echo "<hr>";

// 배열의 4번째 요소 접근
echo $arr[3];

echo "<hr>";

// 반복문 사용
foreach ( $arr as $index => $num ) {
    echo "arr[{$index}] : {$num}";
    echo "<br>";
    echo $num;
    echo "<br>";
}
?>
