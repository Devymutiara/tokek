<?php
    if ($user_id) {
        header('location: '.BASE_URL);
    }
?>
<div id="container-user-akses">

    <form action="<?php echo BASE_URL."proses_register.php"; ?>" method="post">

    <?php 
        $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
        $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
        $email = isset($_GET['email']) ? $_GET['email'] : false;
        $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
        $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

        if ($notif == "require") {
            echo '<div class="notif">Maaf, Anda perlu melengkapi form di bawah ini</div>';
        } elseif ($notif == "password") {
            echo '<div class="notif">Maaf, password yang Anda masukkan tidak sama</div>';
        } elseif ($notif == "email") {
            echo '<div class="notif">Maaf, email Anda sudah terdaftar</div>';
        }
    ?>
        <div class="element-form">
            <label>Nama Lengkap</label>
            <span><input type="text" name="nama_lengkap" value="<?= $nama_lengkap; ?>"></span>
        </div>

        <div class="element-form">
            <label>Email</label>
            <span><input type="email" name="email" value="<?= $email; ?>"></span>
        </div>

        <div class="element-form">
            <label>No. Telepon / Handphone</label>
            <span><input type="text" name="phone" value="<?= $phone; ?>"></span>
        </div>

        <div class="element-form">
            <label>Alamat</label>
            <span><textarea name="alamat" id="" cols="30" rows="10"><?= $alamat; ?></textarea></span>
        </div>

        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password"></span>
        </div>
        
        <div class="element-form">
            <label>Konfirmasi Password</label>
            <span><input type="password" name="konfirmasi_password"></span>
        </div>
        
        <div class="element-form">
            <span><input type="submit" value="Register"></span>
        </div>

    </form>

</div>