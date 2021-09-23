PERCOBAAN-PERCOBAAN BUAT WESHOP

munculin pesan pakai GET "notif"

di file proses_registrasi.php
if (empty($nama_lengkap)) {
        header('location'.BASE_URL.'index.php?page=register&notif=nama_lengkap');
    } elseif (empty($email)) {
        header('location'.BASE_URL.'index.php?page=register&notif=email');
    } elseif (empty($phone)) {
        header('location'.BASE_URL.'index.php?page=register&notif=phone');
    } elseif (empty($alamat)) {
        header('location'.BASE_URL.'index.php?page=register&notif=alamat');
    } elseif (empty($password)) {
        header('location'.BASE_URL.'index.php?page=register&notif=password');
    } else {

di file registrasi.php
if ($notif == "nama_lengkap") {
            echo '<div class="notif">Maaf, Anda belum mengisi NAMA LENGKAP!</div>';
        } elseif ($notif == "email") {
            echo '<div class="notif">Maaf, Anda belum mengisi EMAIL!</div>';
        } elseif ($notif == "phone") {
            echo '<div class="notif">Maaf, Anda belum mengisi NO. TELEPON / HP!</div>';
        } elseif ($notif == "alamat") {
            echo '<div class="notif">Maaf, Anda belum mengisi ALAMAT TEMPAT TINGGAL!</div>';
        } elseif ($notif == "password") {
            echo '<div class="notif">Maaf, Anda belum mengisi PASSWORD!</div>';
        }