<?php

    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
    $kategori = "";
    $status = "";
    $button = "Tambah";

    if ($kategori_id) {
        $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id='$kategori_id'");
        $row = mysqli_fetch_assoc($queryKategori);

        $kategori = $row['kategori'];
        $status = $row['status'];
        $button = "Update";
    }

?>

<form action='<?= BASE_URL . "module/kategori/action.php?kategori_id=$kategori_id"; ?>' method="post">

    <div class="element-form">
        <label>Kategori</label>
        <span><input type="text" name="kategori" value="<?= $kategori; ?>"></span>
    </div>

    <div class="element-form">
        <label>Status</label>
        <span>
            <input type="radio" name="status" value="on" <?php if($status == 'on'){ echo 'checked="true"'; } ?>>On
            <input type="radio" name="status" value="off" <?php if($status == 'off'){ echo 'checked="false"'; } ?>>Off
        </span>
    </div>

    <div class="element-form">
        <span><input type="submit" name="button" value="<?= $button; ?>"></span>
    </div>

</form>