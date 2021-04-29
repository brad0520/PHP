<?php
$isLogined = rand() % 2 == 0;
?>

<div>
  <?php if ( $isLogined ) { ?>
  <button>로그아웃</button>
  <button>글쓰기</button>
  <?php } else { ?>
  <button>로그인</button>
  <button>회원가입</button>
  <?php } ?>
</div>
