<?php

$html = '<table style="border: 1px solid #dddddd;">
    <thead>
      <tr>
        <th style="border: 1px solid #dddddd;">Nombres</th>
        <th style="border: 1px solid #dddddd;">Apellidos</th>
        <th style="border: 1px solid #dddddd;">Profesión</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="border: 1px solid #dddddd;">Luis</td>
        <td style="border: 1px solid #dddddd;">Lavado</td>
        <td style="border: 1px solid #dddddd;">Rodriguez</td>
      </tr>
      <tr>
        <td style="border: 1px solid #dddddd;">Jorge</td>
        <td style="border: 1px solid #dddddd;">Ramires</td>
        <td style="border: 1px solid #dddddd;">Rodriguez</td>
      </tr>
    </tbody>
</table>';

$mpdf->WriteHTML($html);

$mpdf->Output();

?>