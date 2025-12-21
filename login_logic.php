<?php require_once "config.php";



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];


 $stmt=$pdo->prepare("select * from users where username = ? ");
 $stmt->execute([$user]);
 $result=$stmt->fetch();
}
 if($result && password_verify($pass,$result["password"]))
    {
        session_start();
        $stmt=$pdo->prepare("update users set login_time = Now() where id=?");
        $stmt->execute([$result["id"]]);
        $_SESSION["id"]=$result["id"];
        $_SESSION["username"]=$result["username"];
        header("location: profile.php");
        
 }else{
    header("location: login.php");
 };

?>
