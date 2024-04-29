<?php
$conn = new mysqli('localhost:2648','root','','bookhub');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
$sql = " SELECT * FROM registration ";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BookHub Users Details</title>
    <style>
        body {
              background-image: url("bgImg.webp");
              background-repeat: no-repeat;
              background-size: 100%;
              padding: 0;
              margin: 0;
             }
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        h1 {
            text-align: center;
            color: wheat;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        td {
            background-color:  rgb(236, 185, 153);;
            border: 1px solid black;
        }
        th, td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        td {
            font-weight: bolder;
        }
        th {
            color:white;
        }

    </style>
</head>
 
<body>
    <section>
        <h1>BookHub Users Details</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Country</th>
                <th>Pincode</th>
                <th>State</th>
            </tr>
            <?php 
              while($rows=$result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['Password'];?></td>
                <td><?php echo $rows['Country'];?></td>
                <td><?php echo $rows['Pincode'];?></td>
                <td><?php echo $rows['State'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>