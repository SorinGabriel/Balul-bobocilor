<?php

$conn = new mysqli('localhost', 'asmiro_sorin', '1a2b3c', 'asmiro_balboboci');
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

$sql1="SELECT * FROM `voturi` WHERE `concurent`='Andrei Tutulan'";
$sql2="SELECT * FROM `voturi` WHERE `concurent`='Bogdan Mihalache'";
$sql3="SELECT * FROM `voturi` WHERE `concurent`='Adrian Ghica'";
$sql4="SELECT * FROM `voturi` WHERE `concurent`='Andrei Paunescu'";
$sql5="SELECT * FROM `voturi` WHERE `concurent`='Adi Petrovai'";
$sql6="SELECT * FROM `voturi` WHERE `concurent`='Lucian Tanase'";
$sql7="SELECT * FROM `voturifete` WHERE `concurent`='Georgiana-Andreea Sinescu'";
$sql8="SELECT * FROM `voturifete` WHERE `concurent`='Malina Stoicanescu'";
$sql9="SELECT * FROM `voturifete` WHERE `concurent`='Antonela Catalina Tamas'";
$sql10="SELECT * FROM `voturifete` WHERE `concurent`='Eva Georgia Adam'";
$sql11="SELECT * FROM `voturifete` WHERE `concurent`='Cristina Radu'";
$sql12="SELECT * FROM `voturifete` WHERE `concurent`='Simona Anastasiu'";

$res=$conn->query($sql1);
echo '<table><tr><td>';
echo '<h1>Voturi Andrei Tutulan - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql2);
echo '<td><h1>Voturi Bogdan Mihalache - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql3);
echo '<td><h1>Voturi Adrian Ghica - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql4);
echo '<td><h1>Voturi Andrei Paunescu - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql5);
echo '<td><h1>Voturi Adi Petrovai - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql6);
echo '<td><h1>Voturi Lucian Tanase - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td></tr>';

$res=$conn->query($sql7);
echo '<tr><td><h1>Voturi Georgiana-Andreea Sinescu - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql8);
echo '<td><h1>Voturi Malina Stoicanescu - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql9);
echo '<td><h1>Voturi Antonela Catalina Tamas - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql10);
echo '<td><h1>Voturi Eva Georgia Adam - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql11);
echo '<td><h1>Voturi Cristina Radu - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td>';

$res=$conn->query($sql12);
echo '<td><h1>Voturi Simona Anastasiu - Total:'.$res->num_rows.'</h1><br>';
echo '<table>';
while ($row=$res->fetch_assoc())
{
	echo htmlspecialchars('<tr><td>'.$row['ip'].geoip_country_name_by_name($row['ip']).'</td></tr>');
}
echo '</table></td></tr></table>';


$conn->close();
?>