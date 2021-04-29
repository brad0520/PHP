<?php
$dan = 2;
?>

<!-- JSTL과 비슷한 사용 방법-->

<h1>구구단 <?=$dan?>단</h1>

<section>
    <?php for ( $i = 1; $i <= 9; $i++ ) { ?>
    <div>
       <?=$dan?> * <?=$i?> = <?=$dan * $i?>
    </div>
    <?php } ?>
</section>
