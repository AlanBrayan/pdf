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
        
         width: 100px;
         margin-left:auto;margin-right:auto;
         margin-top:30px;
         
         }
         em {
         font-weight: bold;
         }
         tabla3.th {
         text-align: left;
         padding: 1px;
         }

         td, th {
          border: 0.5px solid  rgb(44, 44, 44);
          text-align: left;
          padding: 1px;
          }
         grande, 1, 2 {
         border: 1px solid black;
         border-collapse: collapse;
         padding: 1px;
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

        #light-table {
          border: 1px solid black;
          width: 100%;  
          padding-top: 0px;
          padding-bottom: 1px;
          text-align: left;
          margin-top: 1px;
          margin-bottom: 0px;
       }
       .leftdiv1 {
        float: left;
        position: relative;
        width:20%; 
        padding-top: 0px;
        padding-bottom: 12px;
      
      }     
       .leftdiv2 {
         float: left;
         position: relative;
         width:37%; 
        
       }

       pie-pagina{
         height: 150px;
         left: 50px;
         position: relative;
         top: -50px;
         width: 150px;

       }

       .leftdiv3 {
        float: left;
        position: relative;
        width:37%; 
      
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
         font-size: 12px;
         color: #2e2e2e;
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
            <th colspan="3" style="text-align: center;   background-color: rgb(156, 156, 156) ;" >RECIBO PARA TRÁMITE DE PAGOS</th>
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
      

      

      <div id="light-table">
      <div id="leftdivcontainer" class="clearfix">
        <div class="leftdiv1"><p id="light-table-paragraph">
        <br>
        &nbsp; &nbsp;   &nbsp; &nbsp;FINIQUITO</p></div>
        
        <div class="leftdiv2" id="light-table-paragraph"><input type="checkbox" id="coding" name="interest" value="coding" />Baja por renuncia
        <br>
        <input type="checkbox" id="coding" name="interest" value="coding" />Baja por jubilación
        <br>
        <input type="checkbox" id="coding" name="interest" value="coding" />Indemnización por riesgo de trabajo
        <br>
        <input type="checkbox" id="coding" name="interest" value="coding" />Laudo por juicio laboral
        </div>


        <div class="leftdiv3" id="light-table-paragraph"><input type="checkbox" id="coding" name="interest" value="coding" />Baja por inhabilitación
        <br>
        <input type="checkbox" id="coding" name="interest" value="coding" />Baja por fallecimiento
        <br>
        <input type="checkbox" id="coding" name="interest" value="coding" />Vencimiento de contrato
        <br>          
        <input type="checkbox" id="coding" name="interest" value="coding" />Otro Especificar {{valor}}
        </div>



      
    </div>







      <div style="width: 100%;"  style=" height: 50%;">
      <table  style="width: 800px">
      <tr>
      <th   style="border-style: hidden;"  style="width: 100px;" colspan="6" style="text-align: left" >Partida Presupuestal: 126 010804010101 11010101 20706006000000L 1222 5100</th>
      </tr>
      
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
      <br>
      <div>
         <div style="float:left;width: 69%;outline: green solid thin">&nbsp;&nbsp; &nbsp;_____________________________________</div>
         <div style="float:left;width: 30%;outline: red solid thin"> &nbsp;_____________________________________</div>
      </div>
      <div style="clear:both"></div>
      <br>
      <div>
         <div style="float:left;width: 68%;outline: green solid thin" >
         &nbsp;&nbsp;    &nbsp;&nbsp; ALFONSO CAMPUZANO RAMÍREZ
            <div>
            &nbsp;&nbsp; DIRECTOR GENERAL DE INNOVACIÓN
            </div>
         </div>
         <div   style="font-size: 8pt" tyle="float:left;width: 2%;outline: red solid thin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C.P. MARTHA BEATRIZ ARISTA 
         <div>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VÁZQUEZ 
         </div>
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
         <div style="float:left;width: 69%;outline: green solid thin">&nbsp;&nbsp;&nbsp;&nbsp;_____________________________________</div>
         <div style="float:left;width: 30%;outline: red solid thin">_____________________________________</div>
      </div>
      <div style="clear:both"></div>
      <br>
      <div>
         <div style="float:left;width: 68%;outline: green solid thin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FERNANDO MATA RIVERA
         
            <div>
            &nbsp; &nbsp;&nbsp; DELEGADO ADMINISTRATIVO DE LA
            </div>
            &nbsp;&nbsp;   DIRECCIÓN GENERAL DE INNOVACIÓN
         </div>
         <div style="float:left;width: 3%;outline: red solid thin" style="font-size: 8pt">MTRO. RODOLFO ALEJANDRO LÓPEZ 
       &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;VIDEZ
           <div>
           &nbsp;  &nbsp; DIRECTOR GENERAL DE PERSONAL
           </div>
         </div>
         
      </div>
      <div style="clear:both">
         <br><br><br>

      </div>
      
      </div>
      <div style="float: left">
      <h6 align="right">
         20301/NP-101/16
      </h6>
   </div>  
        


   </body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output();