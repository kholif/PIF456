<?php
defined('_VALID') or die ('not allowed');
//Pembuatan session
session_start();

function init_login(){
    //Simulasi data user nama dan password
    $nama = 'umi';
    $pass = 'umi'; 

    if (isset($_POST['nama']) && isset ($_POST['pass'])){
        $n = trim($_POST['nama']);
        $p = trim($_POST['pass']);

        if(($n===$nama) && ($p ===$pass)){         

            if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){
                $_SESSION['nlogin'] = $n;
                $_SESSION['time'] = time();
            }
            ?>
            <script type="text/javascript">
            document.location.href="./";
            </script>
            <?php
            }
            else {
                echo "<script>alert('Nama atau Password salah');</script>";
                return false;
            }
        }
    }

function validate(){
    if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){?>
            <style type="text/css">
<!--
.style1 {color: #FFF000}
-->
            </style>
           
    <div class="inner">
    <form action="" method="post">
    <table border=0 cellpadding=5>
    <tr>
            <td colspan="2" bgcolor="#FF0000"><div align="center" class="style1">LOGIN USER FORM</div></td>
      </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="L O G I N" /></td>
        </tr>
    </table>
    </form>
    </div>

    <?php
    exit;
    }
    if(isset($_GET['m']) && $_GET['m'] == 'logout'){
    //hapus session
    if(isset($_SESSION['nlogin'])){
        unset($_SESSION['nlogin']);
        }
    if(isset($_SESSION['time'])){
        unset($_SESSION['time']);
        }
    //redireksi halaman
    ?>
    <script type="text/javascript">
    document.location.href="./";
    </script>
    <?php
    }
}
?>
