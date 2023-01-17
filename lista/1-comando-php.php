<?php


$mpdf->Bookmark('Start of the document');
$mpdf->WriteHTML('<div>PDF mediante comando PHP</div>');

$mpdf->Output();

?>