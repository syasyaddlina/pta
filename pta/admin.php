<!DOCTYPE html>
<html>
<head>
<center>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: white;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
</style>
</head>

<body>
<HEADER>

  <table bgcolor="silver" border="2" width="100%">
    
    <tr><td align="center"><h1>SELAMAT DATANG KE SISTEM KEHADIRAN LEWAT</h1></td></tr>

  </table>
  
  <br><br>
  
<div class="topnav">
  <a class="active" href="#view">VIEW</a>
  <a href="analisis.html">ANALISIS</a>
  <div class="search-container">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

  <br><br><br>
  <table>
  <tr>
  <th> NAMA PELAJAR </th>
  <th> MASA KELEWATAN</th>
  <th> BILANGAN LEWAT</th>
  <th> SURAT PERTUDUHAN</th>
  <th> HAPUS</th>
  </tr>
  
  <tr>
  <td> Nur Adlina Aimi </td>
  <td> 8.45 AM</td>
  <td> 6 </td>
  <td><a href="surat.php">SURAT PERTUDUHAN</a></td>
  <td> <input type="button" value="DELETE"onclick="document.getElementById('myTable').deleteRow(0)"></td>
  </tr>
  
  <tr>
  <td> Ainul Busaina Syasya </td>
  <td> 8.10 AM </td>
  <td> 9 </td>
  <td><a href="surat.php">SURAT PERTUDUHAN</a></td>
  <td> <input type="button" value="DELETE"onclick="document.getElementById('myTable').deleteRow(0)"></td>
  </tr>
  
  <tr>
  <td> Aida Amyrah Binti Shahrulnizam </td>
  <td> 9.00 AM </td>
  <td> 3 </td>
  <td><a href="surat.php">SURAT PERTUDUHAN</a></td>
  <td> <input type="button" value="DELETE"onclick="document.getElementById('myTable').deleteRow(0)"></td>
  </tr>
  
  </table>
  </body>
</html>