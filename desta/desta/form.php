<?php

    include 'koneksi.php';

    if(isset($_POST['submit'])) 
    {
        $nama=$_POST['nama'];
        $prodi=$_POST['prodi'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $alamat=$_POST['alamat'];
        $lahir=$_POST['lahir'];

        $insertdata=mysqli_query($varkoneksi,"insert into datamahasiswa (nama,prodi,email,password,alamat,lahir) VALUES('$nama','$prodi','$email','$password','$alamat','$lahir')");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Form</title>
</head>

<body>

    <header>
        <h1>Header Form</h1>
    </header>

    <div class="wrapper">
       

        <nav class="sidebar">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="form.php">FROM</a></li>
                <li><a href="tabel.php">TABEL</a></li>
            </ul>
        </nav>

        <main>
            

            <section>
                <h2>Mahasiswa</h2>
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="nama" name="nama" required>

                    <label for="email">Prodi:</label>
                    <input type="text" id="prodi" name="prodi" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Password:</label>
                    <input type="text" id="password" name="password" required>

                    <label for="message">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" required>

                    <label for="message">Tanggal Lahir:</label>
                    <input type="text" id="lahir" name="lahir" required>


                    <button type="submit" name="submit" id="submit" >Submit</button>
                </form>
            </section>

            
        </main>
    </div>

    <section class="copyright">
        <p>&copy; 2023 Desta</p>
    </section>

</body>

</html>
