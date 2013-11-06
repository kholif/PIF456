<!DOCTYPE html >
 <html>
 <head>
 <title>Konfirmasi Hapus</title>

 <script language="JavaScript">
    // konfirmasi menghapus record tertentu
    function konfirmasi(ket)
    {
        tanya = confirm('Apakah Anda ingin menghapus '+ket + '?');
        if (tanya == true)
            return true;
        else
            return false;
    }
 </script>
 </head>

 <body background="Globe.JPG">
    <?php
		error_reporting(0);
        include "koneksi.php";
       
        $id = $_GET['id'];
        if ($id)
        {
            $query = mysql_query("DELETE FROM mahasiswa WHERE nim=$id");
            header("Location:".$_SERVER['PHP_SELF']);
        }
    ?>
	<form id="form1" name="form1" method="post" action="">
	<table border=1 cellpadding=4 cellspacing=0 align="center" bgcolor="#CC0066">
    <tr>
      <td colspan="4" align="center">Data Siswa</td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>Nama </td>
      <td>Alamat</td>
	  <td>Menu</td> 
    </tr>
    <?php
        $sql = mysql_query("SELECT * FROM mahasiswa");
    while ($row = mysql_fetch_array($sql))
    {
        $id = $row['nim'];
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $_SERVER['PHP_SELF'];
    ?>
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $nama; ?></td>
      <td><?php echo $alamat; ?></td>
      <td><?php echo "<a href=\"".$_SERVER['PHP_SELF']."?id=$id\" onclick=\"return konfirmasi('".$row[0],' : ',$row[1]."')\">Hapus</a>"; ?></td>
    </tr>
    <?php
    }
    ?>
  </table>
 </form>
 <br/> <br/> <br/>
 <a href ="index.php"> <h4 align="center">Back Home</h4></a>
 </body>
 </html>