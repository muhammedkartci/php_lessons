<?php
    
    
     
    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname= "php_lessons";

    echo 'SERVER NAME : '.$servername;
    echo "<br/>";
    echo 'USER NAME : '.$username;
    echo "<br/>";
    echo 'PASSWORD : '.$password;
    echo "<br/>";
    echo 'DATABASE NAME : '.$dbname;
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    $conn = new mysqli($servername,$username,$password,$dbname);
    $new = mysqli_set_charset($conn,"utf8_general_ci");
    if($conn->connect_error){
        echo "Bağlantı Hatası : ".$conn->connect_error;        
    }
    else{
        echo "DataBase'e Bağlanıldı";
    }
    echo "<br/>";
    echo "<br/>";
    echo "<h1>Kullanıcılar</h1>";

    
    $users_bul = "SELECT * FROM users";    
    $users = $conn->query($users_bul);
    if($users->num_rows > 0) {
        
        while($user = $users->fetch_assoc()){
           
            echo "<br/>";
            echo "İsim : ".$user["isim"]; echo "<br/>";
            echo "Soyisim : ".$user["soyisim"]; echo "<br/>";
            echo "Email : ".$user["email"]; echo "<br/>";
            echo "Şifre : ".$user["sifre"];
            echo "<br/>";
            echo "--------------------------------";
        }
    }
?>