<?php
$day = date('l');

$upacara = $day == 'monday' ? "Hari ini Upacara" : "Hari ini tidak upacara";

echo $upacara
;?>