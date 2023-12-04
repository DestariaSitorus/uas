<?php
include 'koneksi.php';

    $result = mysqli_query($varkoneksi, "SELECT * FROM datamahasiswa ORDER BY 'id' DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles3.css">
    <title>Tabel</title>
</head>

<body>

    

    <div class="wrapper">
    
        <main>
            <section>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Prodi</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                    while($data = mysqli_fetch_array($result)) 
                     {         
                    echo "<tr>";
                      
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['prodi']."</td>";  
                        echo "<td>".$data['email']."</td>"; 
                        echo "<td>".$data['password']."</td>";  
                        echo "<td>".$data['alamat']."</td>";   
                        echo "<td>".$data['lahir']."</td>";  
                                
                }
            ?>
                    </tbody>
                </table>
            </section>

            <section class="copyright">
                <p>&copy; 2023 Desta</p>
            </section>
        </main>
    </div>

</body>

</html>
