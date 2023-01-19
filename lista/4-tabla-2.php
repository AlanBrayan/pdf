<?php

$mpdf->SetHTMLHeader('<img src="lista/1.jpg" style="float: left; margin: 0px 0px 40px 1px;" width="240  " height="50"/>');
$html = '
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PDF</title>
      <style>
      <style>
         table, td,th {
         border:0.1px solid black;
         }
         tad {
         border:0px;
         }
         table {
         border-spacing:0px;
         }
         em {
         font-weight: bold;
         }
         tabla3.th {
         text-align: left;
         padding: 1px;
         }
         td, th {
         }
         tbody {
         border-top: 1px solid #000;
         border-bottom: 1px solid #000;
         }
         tbody th, tfoot th {
         border: 0;
         }
         tabla-4.th{
         border:0;
         }
         grande, 1, 2 {
         }
         }
         table.center {
         margin-left:auto; 
         margin-right:auto;
         }
         table.center {
         width:70%; 
         margin-left:15%; 
         margin-right:15%;
         }
         div.container {
         width:98%; 
         margin:1%;
         }
         fecha{
         }
         table#table1 {
         text-align:center; 
         margin-left:auto; 
         margin-right:0%; 
         width:100px;
         border-collapse: collapse;
         }
         tr,td {text-align:left;}
         segunda{
         table, td, th{border: none;}
         border-collapse: collapse;
         }
         secretaria{ 
         float: right;
         }
         #columnaizq{
         border: 1px solid blue;
         float: left;
         width: 300px;
         height: 598px;
         height: 700px;
         margin-left: 2px;
         margin-top: 2px;
         background-color: rgb(122, 122, 124);
         position: absolute;
         }
         #columnader{
         /*border: 1px solid rgb(253, 237, 5);
         float: right;
         width: 496px;
         height: 700px;
         margin: 0;
         margin-top: 2px;
         position: relative;
         }
         .w1{
         width: 20%;
         padding: 70px;
         display: inline-block;
         }
         #light-table {
         border: 1px solid black;
         width: 100%;  
         height:
         padding-top: 0px;
         padding-bottom: 1px;
         text-align: left;
         margin-top: 1px;
         margin-bottom: 0px;
         }
         #light-table2 {
         width: 98%;  
         height:
         padding-top: 12px;
         padding-bottom: 10px;
         text-align: left;
         margin-top: -15px;
         margin-bottom: 12px;
         }
         #light-table3 {
         width: 98%;  
         height:
         padding-top: 12px;
         padding-bottom: 30px;
         text-align: left;
         margin-top: 0px;
         margin-bottom: 20px;
         }
         .leftdiv1 {
         float: left;
         position: relative;
         width:14%; 
         padding-top: 0px;
         padding-bottom: 12px;
         }     
         .leftdiv2 {
         float: left;
         position: relative;
         width:33%; 
         }
         pie-pagina{
         height: 130px;
         left: 50px;
         position: relative;
         top: -40px;
         width: 150px;
         }
         .leftdiv3 {
         float: left;
         position: relative;
         width:50%; 
         }
         .leftdiv p {
         display: block;
         width: 75%;
         margin: 0 auto !important;
         color:black;
         }
         #leftdivcontainer {
         vertical-align: middle;
         width: 100%;
         text-align: center;
         }
         #light-table-paragraph {
         font-family: Droid;
         font-size: 8pt;
         text-align: left;
         line-height: 40px;
         }
         h3 {
         padding: 0 4px;
         }
         .clearfix:after {
         clear: both;
         }
         .clearfix:before,
         .clearfix:after {
         content: " ";
         display: table;
         }
         input[type=checkbox] {
         transform: scale(14.5);
         }
         .sub_div {
         position: absolute;
         bottom:83px;
         left:600px;
         }
         p {
         margin-left:780px;
         }
         .leftdiv10 {
         float: left;
         left: 0%;
         position: absolute;
         width: 33%; 
         }
         #leftdivcontainer1 {
         vertical-align: middle;
         width: 100%;
         text-align: center;
         }
         .clearfix:after {
         clear: both;
         }
         .clearfix:before,
         .clearfix:after {
         content: " ";
         display: table;
         }
         #block_container {
         text-align: center;
         }
         #block_container > div {
         display: inline-block;
         vertical-align: middle;
         }
         #bloc1, #bloc2
         {
         display:inline;
         border: 1px solid rgb(253, 237, 5);
         }
         #block1{
         padding: 12px;
         }
         .leftdiv21 {
         float: left;
         position: relative;
         width:35%; 
         padding-top: 0px;
         padding-bottom: 1px;
         } 
         .leftdiv22 {
         float: right;
         position: relative;
         width:35%; 
         padding-top: 0px;
         padding-bottom: 1px;
         } 
         .leftdiv23 {
         float: left;
         position: relative;
         width:35%; 
         padding-top: 0px;
         padding-bottom: 1px;
         } 
         .leftdiv24 {
         float: right;
         position: relative;
         width:35%; 
         padding-top: 0px;
         padding-bottom: 1px;
         } 
      </style>
   </head>
   <body>
      <div class="sub_div">
         <p>20301/NP-101/16 </p>
      </div>
      <div clas="container">
      <br><br>
      <div class="table-responsive" >
         <table  id="table1" style="width:30%">
            <tr>
               <th style="width: 1px">Consecutivo</th>
               <th   style="text-align: right;">102</th>
            </tr>
         </table>
      </div>
      <br> 
      <div id="light-table">
      <table style="width:100%"   >
         <tr>
            <th colspan="3"  style="text-align: center;   background-color: rgb(156, 156, 156) ;" >RECIBO PARA TRÁMITE DE PAGOS</th>
         </tr>
      </table>
      <div id="light-table1">
         <div id="leftdivcontainer" class="clearfix">
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10">APELLIDO PATERNO</div>
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10">APELLIDO MATERNO</div>
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10">NOMBRE (S)</div>
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10"><em>{{paterno}}</em></div>
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10"><em>{{materno}}</em></div>
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv10"><em>{{nombre}}</em></div>
         </div>
      </div>
      <table width="100%">
         <tr  colspan="3">
            <td style="text-align: left; width: 10%;">CLAVE DE SERVIDOR PÚBLICO: {{csp}</td>
            <td  colspan="2" style="text-align: left; width: 50%;">R.F.C: {{rfc}}</td>
         </tr>
         <tr  colspan="3">
            <td style="text-align: left; width: 50%;">CURP: {{curp}</td>
            <td  colspan="2" style="text-align: left; width: 50%;">CÓDIGO DE LA DEPENDENCIA: {{cdld}}</td>
         </tr>
         <tr  >
            <td colspan="3" style="text-align: left;">CATEGORÍA Y PUESTO:  {{asis}}</td>
         </tr>
         <div>
         </div>
      </table>
      <h4  align="center" id="tabla1">TIPO DE PAGO POR TERMINACIÓN DE LA RELACIÓN LABORAL </h4>
      <div id="leftdivcontainer" class="clearfix"   >
         <div class="leftdiv1">
            <p id="light-table-paragraph" >
               <br>
               &nbsp;   &nbsp; &nbsp;<em>FINIQUITO</em>
            </p>
         </div>
         <div style="font-family: dejavusans;" style="font-size: 7.9pt" class="leftdiv2" id="light-table-paragraph"><input type="checkbox" style="-webkit-transform: scale(2);" style="height:30px;" id="coding" name="interest" value="coding" />&nbsp; Baja por renuncia
            <br>
            <input type="checkbox"  checked="checked" id="coding" name="interest" value="coding" />&nbsp; Baja por jubilación
            <br>
            <input type="checkbox" id="coding" name="interest" value="coding" />&nbsp; Indemnización por riesgo de trabajo
            <br>
            <input type="checkbox" id="coding" name="interest" value="coding" />&nbsp; Laudo por juicio laboral
         </div>
         <div style="font-family: dejavusans;" style="font-size: 7.9pt" class="leftdiv3" id="light-table-paragraph"><input type="checkbox" id="coding" name="interest" value="coding" />&nbsp; Baja por inhabilitación
            <br>
            <input type="checkbox" id="coding" name="interest" value="coding" />&nbsp; Baja por fallecimiento
            <br>
            <input type="checkbox" id="coding" name="interest" value="coding" />&nbsp; Vencimiento de contrato
            <br>          
            <input type="checkbox" id="coding" name="interest" value="coding" />&nbsp; Otro Especificar: <em>PAGO DE NÓMINA DE PERSONAL EVENTUAL</em>
         </div>
      </div>
      <div style="width: 100%;"  style=" height: 50%;">
      <div id="tabla1">
      <h4 id="tabla1">Partida Presupuestal: 126 010804010101 11010101 20706006000000L 1222 5100</h4>
      <table  style="width: 800px">
         <tr>
            <td style="text-align: center;" style="width: 10%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               CLAVE
            </td>
            <td style="text-align: center;">PERCEPCIONES
               CONCEPTO
            </td>
            <td style="text-align: center;">IMPORTE</td>
            <td style="text-align: center;">CLAVE </td>
            <td style="text-align: center;">DEDUCCIONES
               CONCEPTO 
            </td>
            <td style="text-align: center;">IMPORTE</td>
         </tr>
         <tr>
            <th>1222</th>
            <td style="text-align:center;" >SUELDOS Y SALARIOS</td>
            <td style="text-align:center;">1,000.00</td>
            <th>5408</th>
            <td>I.S.R.Maria Anders</td>
            <td style="text-align:right;">574.38</td>
         </tr>
         <tr>
            <td style="text-align:center;" ></td>
            <td style="text-align:center;" ></td>
            <td></td>
            <th>5540</th>
            <td>CUOTA SERV. SAL.</td>
            <td style="text-align:right;" >274.82</td>
         </tr>
         <tr>
            <td style="text-align:center;" ></td>
            <td style="text-align:center;" ></td>
            <td></td>
            <th>5541</th>
            <td>CUOTA SIST. SOL.</td>
            <td style="text-align:right;" >362.46</td>
         </tr>
         <tr>
            <td style="text-align:center;" ></td>
            <td style="text-align:center;" ></td>
            <td></td>
            <th>5542</th>
            <td>CUOTA SIST. CAP</td>
            <td style="text-align:right;" >83.19</td>
         </tr>
         <tr>
            <td style="text-align:center;" ></td>
            <td style="text-align:center;" ></td>
            <td></td>
            <th>5450</th>
            <td>DESC. TIEMPO NO LAB</td>
            <td style="text-align:right;" >0.00</td>
         </tr>
         <tr>
            <td style="text-align:center;" ></td>
            <td style="text-align:center;" ></td>
            <td></td>
            <th>5451</th>
            <td>SANCIÓN POR IMPUNTUALIDAD </td>
            <td style="text-align:right;" >0.00</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align:right;">&nbsp;</td>
         </tr>
         <tr>
            <td></td>
            <th style="text-align: right; " >SUBTOTAL</th>
            <td style="text-align: center; ">1,000.00</td>
            <td></td>
            <th style="text-align: right; " >SUBTOTAL</th>
            <td style="text-align:right;">1,294.85</td>
         </tr>
         <tr>
            <th style="font-weight: bold;" style="text-align: right; "  colspan="5">TOTAL LÍQUIDO A PAGAR $:</th>
            <td style="text-align:right;">1,294.85</td>
         </tr>
      </table>
      <div>
         <em>RECIBÍ</em> de la Caja General de Gobierno del Estado de México la cantidad de $ 5,942.00
      </div>
      <div>
         <em>(CINCO MIL NOVECIENTOS CUARENTA Y DOS PESOS 00/100 M.N.)</em>
      </div>
      <br>
      <div>
         Por concepto de:  PAGO DE NÓMINA POR LOS TRABAJOS DESEMPEÑADOS EN EL CENTRO DE ATENCIÓN TELEFÓNICA DEL GOBIERNO DEL ESTADO DE MÉXICO, CORRESPONDIENTE A LA SEGUNDA QUINCENA DE DICIEMBRE, DEL 16 AL 31 DE DICIEMBRE DE 2022. 
      </div>
      <br>
      <div class="fecha" align="right">
         Toluca, Estado de México; a 03 de octubre de 2022
      </div>
      <br><br>
      <div class="julian" align="center">
         _____________________________________
      </div>
      <div class="fecha" align="center">
         <em>Lopez Lopez Julian</em>
      </div>
      <br>
      <div>
         <div  
            style="float:left;width: 64%;underline: green solid thin">&nbsp;&nbsp; &nbsp;_____________________________________</div>
         <div style="float:right;width: 20%;underline: red solid thin" style="left: 100px;" >___________________________________________</div>
      </div>
      <div style="clear:both"></div>
      <br>
      <div id="light-table2">
         <div id="leftdivcontainer" class="clearfix">
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv21"><em>ALFONSO CAMPUZANO RAMÍREZ
               DIRECTOR GENERAL DE INNOVACIÓN</em>
            </div>
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv22" ><em>C.P. MARTHA BEATRIZ ARISTA VÁZQUEZ 
               COORDINADORA ADMINISTRATIVA 
               DE LA SECRETARÍA DE FINANZAS</em>
            </div>
         </div>
      </div>
      <br><br><br>
         <div  
            style="float:left;width: 64%;underline: green solid thin">&nbsp;&nbsp; &nbsp;_____________________________________</div>
         <div style="float:right;width: 20%;underline: red solid thin" style="left: 100px;" >___________________________________________</div>
      </div>
      <div id="light-table3">
         <div id="leftdivcontainer" class="clearfix">
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv21"><em>FERNANDO MATA RIVERA
               DELEGADO ADMINISTRATIVO DE LA
               DIRECCIÓN GENERAL DE INNOVACIÓN
               </em>
            </div>
            <div style="font-family: dejavusans;" style="font-size: 7.4pt" class="leftdiv22" ><em>MTRO. RODOLFO ALEJANDRO LÓPEZ VIDEZ
               DIRECTOR GENERAL DE PERSONAL
               </em>
            </div>
         </div>
      </div>
   </body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output();