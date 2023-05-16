<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="m.css">
   
</head>
<body>


<table>
    <div class="table-responsive-md">
        <table class="table">
        <thead>
        <tr>
           <th>NAME</th>
           <th>TARIIKDA</th>
           <th>CADADKA LACAGTA</th>
           <th>RECEIVED</th>
           <th>BALANCE</th>
           <th>CONTACT US</th>
           <span class="bi bi-currency-dollar"></span>
        </tr>
       
        <?php
$conn = new mysqli("localhost","root","","daacad");
if($conn->connect_error){
    echo $conn->error;
}
$sql = "SELECT * FROM balanced"; // Added space after *
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>" . $row["Name"] .  "</td>
    <td>" . $row["tariikhda"] . "</td>
    <td>" . $row["cadadka lacagta"] . "</td>
    <td>" . $row["received"] . "</td>
    <td>" . $row["balanced"] . "</td>
    <td>" . $row["contact us"] . "</td>
    </tr>";
}
?>
    </table>

</body>
</html>