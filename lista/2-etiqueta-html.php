<?php

$html = '<bookmark content="Start of the document" />';
$html .= '<div>PDF mediante etiqueta HTML personalizada</div>';

$mpdf->WriteHTML($html);

$mpdf->Output();

?>