<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table 
{
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Donar's emailID</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "plasmad");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT email FROM register";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["email"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<br>
<table>
	<tr>
    <th>Hospital Name</th>
    <th>Location</th>
    <th>Website</th>
  </tr>
  <tr>
    <td>Sunshine Hospital </td>
    <td>Gachibowli</td>
    <td><a href="https://www.credihealth.com/hospital/sunshine-hospital-gachibowli/appointment">click here</td>
    </tr>
    <tr>
    <td>Care Hospitals</td>
    <td>Banajara Hills</td>
    <td><a href="https://www.credihealth.com/hospital/care-hospitals-banjara-hills/appointment">click here</td>
    </tr>
    <tr>
    <td>Gleneagles Global Hospitals</td>
    <td>Lakdikapul</td>
    <td><a href="https://www.credihealth.com/hospital/gleneagles-global-hospitals-lakdikapul/appointment">click here</td>
    </tr>
</table>
</body>
</html>