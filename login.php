<?php
    if ($user_id) {
        header('location: '.BASE_URL);
    }
?>
<div id="container-user-akses">

    <form action="<?php echo BASE_URL."proses_login.php"; ?>" method="post">

    <?php 
        $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
        // $email = isset($_GET['email']) ? $_GET['email'] : false;

        if ($notif == "true") {
            echo '<div class="notif">Maaf, email atau password yang Anda masukkan salah!</div>';
        } 
        // elseif ($notif == "email") {
        //     echo '<div class="notif">Maaf, email Anda sudah terdaftar</div>';
        // }
    ?>
        <div class="element-form">
            <label>Email</label>
            <span><input type="email" name="email"></span>
        </div>

        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password"></span>
        </div>

        <div class="element-form">
            <span><input type="submit" value="Login"></span>
        </div>

    </form>

</div>