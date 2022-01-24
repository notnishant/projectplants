<?php
$servername = "localhost";
$database = "plants";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if($conn){
    echo "DB connected";
    $sql = "select * from sheet1";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['sno.'] = $row ['sno.'];
            $response[$i]['Name'] = $row ['Name'];
            $response[$i]['imageURL'] = $row ['imageURL'];
            $response[$i]['Botanical Name or Family'] = $row ['Botanical Name or Family'];
            $response[$i]['Diseases'] = $row ['Diseases'];
            $i++;
    }
    echo json_encode($response,JSON_PRETTY_PRINT);
  }
  else{
      echo "Database Connection Failed";
  }
}
?>