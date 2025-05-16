<?php
$con=mysqli_connect("localhost", "root","","demosells") or die("Unable to connect");

$conx2 = mysqli_connect("localhost", "root", "", "demosells") or die("Unable to connect");
$conx3 = mysqli_connect("localhost", "root", "", "demosells") or die("Unable to connect");
//$cont = mysqli_connect("localhost", "root", "", "dsecstocksystem") or die("Unable to connect");
//$cont1 = mysqli_connect("localhost", "root", "", "dsecstocksystem") or die("Unable to connect");
//$_SESSION["ldb"]='http://192.168.0.111:10080/nanoerp/'; //office
$_SESSION["ldb"]='http://192.168.0.108:8080/nanoerp/'; //home

$_SESSION["admin"]=7;
$_SESSION["controller"]=8;
$_SESSION["user"]=9;
$_SESSION["qcman"]=10;
$_SESSION["customer"]=11;
$_SESSION["staff"]=12;
$_SESSION["gateman"]=13;
$_SESSION["operator"]=14;
$_SESSION["postman"]=15;
$_SESSION["receiver"]=16;
$_SESSION["superadminadmin"]=18;
//$_SESSION["ldb"]='http://192.168.0.105:8080/nanoerp/'; //home
// seller 159085135324
// broker 159085170836
// pay 159085379542
// carry 159085417753
//ship 159085414944
//dco 159085836327
/*
function connect(){
  try{
    $db = new PDO("mysql:host=localhost;dbname=dsecstocksystem;charset=utf8","root","");
    //echo "connected";
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e){
    die($e->getMessage()); 
  }
  return $db; 
}
*/
?>
<?php
$servernamedb = "localhost";
$usernamedb = "username";
$passworddb = "";
$dbnamedb = "workprocess";

//$countrysimbol=$ipdat->geoplugin_currencySymbol; 
//$countrycode=$ipdat->geoplugin_currencyCode; 
//$timezone=$ipdat->geoplugin_timezone; 
// ip get
//insert deatils
/*
$servernamedb = "localhost";
$usernamedb = "username";
$passworddb = "password";
$dbnamedb = "workprocess";
try {

    $conpdo = new PDO("mysql:host=$servernamedb;dbname=$dbnamedb", $usernamedb, $passworddb);
    // set the PDO error mode to exception
    $conpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // prepare sql and bind parameters
    $stmt = $conpdo->prepare("INSERT INTO pagevisitip(pvp_visitoridd, pvp_countryname, pvp_cityname, pvp_latitude, pvp_longitude, pvp_visiturl, pvp_activity1, pvp_activity2, pvp_activity3, pvp_created) 
    VALUES (:pvp_visitoridd, :pvp_countryname, :pvp_cityname, :pvp_latitude, :pvp_longitude, :pvp_visiturl, :pvp_activity1, :pvp_activity2, :pvp_activity3, :pvp_created)");
    $stmt->bindParam(':pvp_visitoridd', $pvp_visitoridd);
    $stmt->bindParam(':pvp_countryname', $pvp_countryname);
    $stmt->bindParam(':pvp_cityname', $pvp_cityname);
    $stmt->bindParam(':pvp_latitude', $pvp_latitude);
    $stmt->bindParam(':pvp_longitude', $pvp_longitude);
    $stmt->bindParam(':pvp_visiturl', $pvp_visiturl);
    $stmt->bindParam(':pvp_activity1', $pvp_activity1);
    $stmt->bindParam(':pvp_activity2', $pvp_activity2);
    $stmt->bindParam(':pvp_activity3', $pvp_activity3);
    $stmt->bindParam(':pvp_created', $pvp_created);
    // insert a row
    $stmt->execute();
    echo "New records created successfully";
  } catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
  }
  $conpdo = null;
// insert details end
*/

  ?>
