<!DOCTYPE html>
<html>
<head>
<center>

</head>
<body>
<HEADER>

  <table bgcolor="silver" border="2" width="100%">
    
    <tr><td align="center"><h1>SELAMAT DATANG KE SISTEM KEHADIRAN LEWAT</h1></td></tr>

  <table>

</HEADER>
<br><br><br><br><br><br>
<form method="post" action="admin.php">
  <table align="center" width="584" border="0">
    <tbody>
      <tr>
        <th align="left" width="300" scope="row">Nama Pelajar</th>
        <td width="8">:</td>
        <td width="350"><input width="350" type="text" name="namapel" id="namapel" placeholder="Nama Pelajar"></td>
      </tr>
      <tr>
        <th align="left" scope="row">No. IC</th>
        <td>:</td>
        <td><input width="350" type="text" name="icpel" id="icpel" placeholder="Kad Pengenalan"></td>
      </tr>
    <tr>
        <th align="left" scope="row">Kelas</th>
        <td>:</td>
        <td><select name="kelas" id="kelas">
            <option value="" disabled selected hidden>1 SVM / 2 SVM / 1 DVM / 2 DVM </option>
            <option name="1" value="KPD">1 KPD</option>
            <option name="2" value="KRG">1 KRG</option>
			<option name="3" value="KSK">1 KSK</option>
            <option name="4" value="ETN">1 ETN</option>
			<option name="5" value="ETE">1 ETE</option>
			<option name="6" value="KPD">2 KPD</option>
            <option name="7" value="KRG">2 KRG</option>
			<option name="8" value="KSK">2 KSK</option>
            <option name="9" value="ETN">2 ETN</option>
			<option name="10" value="ETE">2 ETE</option>
			<option name="11" value="KPD">3 KPD</option>
            <option name="12" value="KRG">3 KRG</option>
			<option name="13" value="KSK">3 KSK</option>
            <option name="14" value="ETN">3 ETN</option>
			<option name="15" value="ETE">3 ETE</option>
			<option name="16" value="KPD">4 KPD</option>
            <option name="17" value="KRG">4 KRG</option>
			<option name="18" value="KSK">4 KSK</option>
            <option name="19" value="ETN">4 ETN</option>
			<option name="20" value="ETE">4 ETE</option>

        </select></td>
      </tr>
	  
	  <tr>
	   <th align="left" width="300" scope="row">Masa</th>
        <td width="8">:</td>
	    <td><input type="time" id="appt" name="appt"></td>
		</tr>
	  
	  <tr>
      <th align="left" scope="row">Sebab</th>
       <td> : </td>
		<td><textarea id="sebab" name="sebab" value="sila nyatakan sebab"></textarea><td>
		</tr>
		
  <tr><td>
  <input type="submit" name="submit" id="submit" value="Submit">
	</td> </tr>
	
	      </tbody>
  </table>
</body>
</html>