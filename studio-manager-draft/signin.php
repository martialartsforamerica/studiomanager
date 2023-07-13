<?php
session_start();
include "db.php";
$user = $_POST['user_id'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $sql = mysql_query("SELECT * FROM users WHERE user_id='$user' AND password='$password'");
    if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysql_fetch_array($sql);
        $_SESSION['user_id'] = $qry['user_id'];
        $_SESSION['password'] = $qry['password'];
        $_SESSION['role'] = $qry['role'];
        if($qry['role']=="superadmin"){
            header("location:home_admin.php");
        }else if($qry['role']=="student"){
            header("location:home_user.php");
        }
    }else{
        ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
            document.location='index.php';
        </script>
        <?php
    }
}else if($op=="out"){
    unset($_SESSION['user_id']);
    unset($_SESSION['role']);
    header("location:index.php");
}
?>