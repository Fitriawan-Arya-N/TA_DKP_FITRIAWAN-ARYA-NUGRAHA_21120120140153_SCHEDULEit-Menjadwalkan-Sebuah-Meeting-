

<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="css/style2.css">

</head>
        <form action="dashboard.php" method="post">
    <body>  
            <div class='center'>
            
            <div class='container'>
            <div class='text'>Yeay, Silahkan masukkan jadwal meeting Anda</div>
            
            <form action='#'>
                    <div class='box'>      
                        <td>Meeting</td>
                        <td> <input type="text" name="nama" placeholder="nama meeting"> </td>
                    </div>

                    <div class='tempat'>  
                        <td>Tempat</td>
                        <td> <input type="text" name="tempat" placeholder="tempat"> </td>
                    </div>

                    <div class='waktu'>  
                        <td>Waktu</td>
                        <td> <input type="time" name="waktu"> </td>
                    </div>

                    <div class='tanggal'>
                        <td><label>Tanggal</label></td>
                        <td> <input type="date" name="tanggal" /></td>
                    </div>

                    <div class='box'>
                        <td>Kategori</td> 
                        <td> <input type="radio" checked name="kategori" value="Penting">Penting 
                             <input type="radio" name="kategori" value="Normal">Normal

                    </div>
                    <div class='tombol1'>  
                    <td colspan="2"><button type="submit" name="save" >Save</button></td>
                    </div>
                    <div class='tombol2'> 
                    <td colspan="2"><button type="submit" name="unset">Unset</button></td>
                    </div>
                    <div class='tombol3'> 
                    <td colspan="2"><button type="submit" name="keluar">keluar</button></td>
                    </div>

            </form>
            </div>      
            </div>
               
            

            <div class='tabel'>
            <table border="1" cellpadding="10">
                <tr>
                    <th>Meeting</th>
                    <th>Tempat</th>
                    <th>Waktu</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>

                </tr>

                <?php 
                    session_start();

                    if (isset($_POST['unset'])) {
                        session_destroy();
                    }

                         if (isset($_POST['save'])) {
                            $_SESSION['data'][] = $_POST; ?>
                           <tr>
                           <?php foreach ($_SESSION['data'] as $data) : ?> 
                               <td><?php  echo $data['nama'] ?></td>
                               <td><?php  echo $data['tempat'] ?></td>
                               <td><?php  echo $data['waktu'] ?></td>
                               <td><?php  echo $data['tanggal'] ?></td>
                               <td><?php  echo $data['kategori'] ?></td>

                            </tr>
                            <?php endforeach; ?>
                          <?php } 
                                    if (isset($_POST['keluar'])) {
                                        header("Location:keluar.php");
                                    }
                          
                          ?>
            </table>

            </div>
            Gambar background oleh <a href="https://pixabay.com/id/users/yeskay1211-6332528/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2836301">Sathish kumar Periyasamy</a> dari <a href="https://pixabay.com/id/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2836301">Pixabay</a>

        </body>
</html>
