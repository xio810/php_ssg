<?php
$dan = $_GET['dan'];
$limit = $_GET['limit'];
?>
<meta charset="UTF-8">

<select onchange="location.href = 'dan.php?limit=20&dan=' + this.value">
    <?php for ( $i = 1; $i <= 10; $i++ ) { ?>
    <option <?=$dan == $i ? 'selected' : ''?> value="<?=$i?>"><?=$i?>단</option>
    <?php } ?>
</select>

<h1><?=$dan?>단</h1>

<?php
$i = 1;
?>
<?php for ( $i = 1; $i <= $limit; $i++ ) { ?>
<div>
    <?=$dan?> * <?=$i?> = <?=$dan * $i?>
</div>
<?php } ?>