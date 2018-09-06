<!doctype html>
<html lang="pt-br" Xmanifest="appcache.manifest">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Publicar Serviço</title>
    <meta name="description" content="Publicar Serviço">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- <link rel="manifest" href="manifest.json"> -->
</head>  
  <body>
  
  
  
  <?php



include "conecta_mysql.php";

$sql = "INSERT INTO hello_world (text)
VALUES ('Hello World')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$query = select text from hello_world;
$result = mysql_query($query);

echo "<table>";

while($row = mysql_fetch_array($result)){   
echo "<tr><td>" . $row['text'] . "</td></tr>";  
}

echo "</table>"

mysqli_close($conn);
?>
</body>
</html>
