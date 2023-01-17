<?php
$mpdf->SetHTMLHeader('<img src="lista/1.jpg" style="float: left; margin: 0px 0px 40px 1px;" width="220  " height="50"/>');
$html = '
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mi pdf</title>
      <style>
      <style>
         table {
         font-family: serif; 
         font-size: 5pt; 
         border-collapse: collapse;
         width: 120px;
         margin-left:auto;margin-right:auto;
         margin-top:40px;
         border-collapse: collapse;
         }
         em {
         font-weight: bold;
         }
         td, th {
         border: 0.5px solid  rgb(44, 44, 44);
         text-align: left;
         padding: 1px;
         }
         grande, 1, 2 {
         border: 1px solid black;
         border-collapse: collapse;
         padding: 10px;
         }
         tr:nth-child(even) {
         background-color: #ffffff;
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
      </style>
   </head>
   <body>
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
      <table style="width:100%"   >
         <tr>
            <th colspan="3" style="text-align: center; background-color: rgb(168, 168, 168);" >RECIBO PARA TRÁMITE DE PAGOS</th>
         </tr>
         <tr style="text-align: center;">
            <td width="80px" style="font-size: 57 ;" style="text-align: center;">APELLIDO PATERNO</td>
            <td style="font-size: 2%;" style="text-align: center;">Apellido MATERNO</td>
            <td style="font-size: 2%;" style="text-align: center;">NOMBRE (S)</td>
         </tr>
         <tr style="border: peru;">
            <td   style="text-align: center;">{{paterno}}</td style="border: peru;">
            <td   style="text-align: center;">{{Materno}}</td style="border: peru;">
            <td    style="text-align: center;" style="  border-collapse: separate;"style="text-align: center;">{{nombre}}</td>
         </tr>
         <tr  colspan="3">
            <td style="text-align: left; width: 50%;">CLAVE DE SERVIDOR PÚBLICO: {{csp}</td>
            <td  colspan="2" style="text-align: left; width: 50%;">R.F.C: {{rfc}}</td>
         </tr>
         <tr  colspan="3">
            <td style="text-align: left; width: 50%;">CURP: {{curp}</td>
            <td  colspan="2" style="text-align: left; width: 50%;">CÓDIGO DE LA DEPENDENCIA: {{cdld}}</td>
         </tr>
         <tr  >
            <td colspan="3" style="text-align: left;">CATEGORÍA Y PUESTO:  {{asis}}</td>
         </tr>
         <tr>
            <th colspan="3" style="text-align: center;" >TIPO DE PAGO POR TERMINACIÓN DE LA RELACIÓN LABORAL</th>
            
         </tr>




      </table>
      

      
      <div class="segunda">
      
         <table   style=" border-collapse:collapse;">
         <tr style="border: none;">
            <td rowspan="4"  style="border: inset 0pt" style="border: 0px solid rgb(255, 252, 252);" style="border: hidden" style="text-align: center; width: 150px; ">FINIQUITO</td>
               <td  style="border: inset 0pt" style="border: none;"  style="border: 0px solid rgb(255, 252, 252);" style="border: hidden" style="text-align: center; width: 370px; "><input type="checkbox" id="cbox1" value="first_checkbox"> Baja por renuncia</td>
               <td style="border: inset 0pt" style="border: none;"style="border: 0px solid rgb(255, 252, 252);"  style="text-align: center; width: 344px; "><input type="checkbox" id="cbox1" value="first_checkbox">Baja por inhabilitación</td>
               
            </tr>
            <tr   style="border: 0px none black">
               <td   style="border: 0px solid rgb(255, 252, 252);" style="border: hidden" style="text-align: center; width: 344px; "><input type="checkbox" id="cbox1" value="first_checkbox">Baja por jubilación</td>
               <td  style="border: 0px solid rgb(255, 252, 252);"  style="text-align: center; width: 344px; "><input type="checkbox" id="cbox1" value="first_checkbox">Baja por fallecimiento</td>
            </tr>
            <tr   style="border: 0px none black">
               <td   style="border: 0px solid rgb(255, 252, 252);" style="border: hidden" style="text-align: center; width: 344px; "> <input type="checkbox" id="cbox1" value="first_checkbox">Indemnización por riesgo de trabajo</td>
               <td  style="border: 0px solid rgb(255, 252, 252);"  style="text-align: center; width: 344px; "><input type="checkbox" id="cbox1" value="first_checkbox">Vencimiento de contrato</td>
            </tr>
            <tr   style="border: 0px none black">
               <td   style="border: 0px solid rgb(255, 252, 252);" style="border: hidden" style="text-align: center; width: 344px; "><input type="checkbox" id="cbox1" value="first_checkbox">Laudo por juicio laboral</td>
               <td  style="border: 0px solid rgb(255, 252, 252);"  style="text-align: center; width: 344px; "><input type="checkbox" id="cbox1" value="first_checkbox">Otro Especificar {{valor}}</td>
            </tr>
            <tr>
               <th  style="width: 10%;" colspan="3" style="text-align: left" >Partida Presupuestal: {{valor}}</th>
            </tr>
         </table>
      </div>
      <div style="width: 100%;"  style=" height: 50%;">
      <table  style="width: 800px">
      <tr>
         <td style="text-align: center; " style="width: 30%;"  >CLAVE</td>
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
         <td>SUELDOS Y SALARIOS</td>
         <td>1,000.00</td>
         <td>5408</td>
         <td>I.S.R.Maria Anders</td>
         <td>574.38</td>
      </tr>
      <tr>
         <td></td>
         <td></td>
         <td></td>
         <th>5540</th>
         <td>CUOTA SERV. SAL.</td>
         <td>274.82</td>
      </tr>
      <tr>
         <td></td>
         <td></td>
         <td></td>
         <th>5541</th>
         <td>CUOTA SIST. SOL.</td>
         <td>362.46</td>
      </tr>
      <tr>
         <td></td>
         <td></td>
         <td></td>
         <th>5542</th>
         <td>CUOTA SIST. CAP</td>
         <td>83.19</td>
      </tr>
      <tr>
         <td></td>
         <td></td>
         <td></td>
         <th>5450</th>
         <td>DESC. TIEMPO NO LAB</td>
         <td>0.00</td>
      </tr>
      <tr>
         <td></td>
         <td></td>
         <td></td>
         <th>5451</th>
         <td>SANCIÓN POR IMPUNTUALIDAD </td>
         <td>0.00</td>
      </tr>
      <tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td></td>
         <th style="text-align: right; " >SUBTOTAL</th>
         <td>1,000.00</td>
         <td></td>
         <th style="text-align: right; " >SUBTOTAL</th>
         <td>1,294.85</td>
      </tr>
      <tr>
         <th style="font-weight: bold;" style="text-align: right; "  colspan="5">TOTAL LÍQUIDO A PAGAR $:</th>
         <td>1,294.85</td>
      </tr>
      </table>
      <div>
         <em>RECIBI</em> de la Caja General de Gobierno del Estado de México la cantidad de $ 5,942.00
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
         Lopez Lopez Julian
      </div>
      <br><br>
      <div>
         <div style="float:left;width: 69%;outline: green solid thin"> _____________________________________</div>
         <div style="float:left;width: 30%;outline: red solid thin"> _____________________________________</div>
      </div>
      <div style="clear:both"></div>
      <br>
      <div>
         <div style="float:left;width: 68%;outline: green solid thin" >
         &nbsp;&nbsp; ALFONSO CAMPUZANO RAMÍREZ
            <div>
               DIRECTOR GENERAL DE INNOVACIÓN
            </div>
         </div>
         <div  style="font-zize=2; " tyle="float:left;width: 30%;outline: red solid thin">
            C.P. MARTHA BEATRIZ ARISTA VÁZQUEZ 
            <div>  
            &nbsp;    &nbsp;&nbsp;&nbsp;COORDINADORA ADMINISTRATIVA 
            </div>
            <div>
            &nbsp;     &nbsp;&nbsp;&nbsp;   DE LA SECRETARÍA DE FINANZAS
            </div>
         </div>
      </div>
      <div style="clear:both"></div>
      <br><br><br>
      <div>
         <div style="float:left;width: 69%;outline: green solid thin">_____________________________________</div>
         <div style="float:left;width: 30%;outline: red solid thin">_____________________________________</div>
      </div>
      <div style="clear:both"></div>
      <br>
      <div>
         <div style="float:left;width: 68%;outline: green solid thin">
         &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FERNANDO MATA RIVERA
            <div>
            &nbsp; DELEGADO ADMINISTRATIVO DE LA
            </div>
            DIRECCIÓN GENERAL DE INNOVACIÓN
         </div>
         <div style="float:left;width: 4%;outline: red solid thin" style="font-size: 8pt">MTRO. RODOLFO ALEJANDRO LÓPEZ 
         &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  VIDEZ
           <div>
           &nbsp;  &nbsp; DIRECTOR GENERAL DE PERSONAL
           </div>
         </div>
      </div>
      <div style="clear:both">
         <br><br><br>
         <div class="pie-pagina" align="right">
            <h6 align="right">
               20301/NP-101/16
            </h6>
         </div>
      </div>
      </div>

        


   </body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output();