<html>
<head>
<style>
.box-title{
  font-weight:bold;
}
.heading-row td{
  font-weight:bold;
  text-align:center;
  border-bottom:solid 1px red;
}
.total-row td{
  font-weight:bold;
}
.v-row td{
  border:none;
}
@media print{
  button .print-btn{
    display:none;
  }
}
</style>
 </head>
 <body style="background-color:gray;">
 <center>
 <div class="container-fluid">
  <div id="bill-display" style="background-color:white;width:260px;padding:20px;border:1px solid black;">
  <center><div style="border:1px solid black;">
    <!-- ----- HEADER ---- -->
    <table class="table" style="width:100%;">
      <H4><B>Amrutha Sanghama M.P.C.S</B></H4>
		<tr align="center">
		<td colspan="2" >
          <div class="box-title">Date</div>
          <div class="box-content">10-08-2016</div>
        </td>
		
		<td colspan="2" >
          <div class="box-title">Time</div>
          <div class="box-content">Morning</div>
        </td>
		</tr>
      <tr align="center">
	    <td colspan="2">
          <div class="box-title">User Number </div>
          <div class="box-content">452</div>
        </td>
		<td colspan="2">
          <div class="box-title">Cattle</div>
          <div class="box-content">Cow</div>
        </td>
        
        </tr>
      <tr align="center">
        <td colspan="3" rowspan="3">
          <div class="box-title">Name</div>
          <div class="box-content">
   Mahesh Nidchal<br>
         </div>
		</td>
        </tr>
   <tr></tr><tr></tr>
 
      <!-- ----- BODY ---- -->
      <tr align="center" class="heading-row v-row" >
	  <th rowspan="3">
        <th>FAT</th>
        <th>CLR</th>
        <th>SNF</th>
		<th>Liter</th></th>
       </tr>
      <tr align="center" class="v-row">
        <td>3.5</td>
        <td>9.00</td>
        <td>8.5</td>
        <td>3.9</td>
      </tr>
      
      <!-- ----- FOOTER ---- -->
      <tr>
        <th colspan="2">Amount
        </th><td>29.00</td></tr>
	<tr>
        <th colspan="3" > Total Amonut</th><td>113.10</td>
      </tr>
      
    </table>
  </div></center>
  </div>
  <button class="btn btn-default .print-btn" onclick="jsvascript:window.print()">Print Bill</button>
</div></center>
 </body>
</html>
