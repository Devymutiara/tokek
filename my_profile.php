<?php
    if ($user_id) {
        $module = isset($_GET['module']) ? $_GET['module'] : false;
        $action = isset($_GET['action']) ? $_GET['action'] : false;
        $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
    } else {
        header('location:'.BASE_URL.'index.php?page=login');
    }
?>
<div id="bg-page-profile">
    <div id="menu-profile">
        <ul>
            <li><a href="<?= BASE_URL.'index.php?page=my_profile&module=kategori&action=list'; ?>" <?php if($module == "kategori"){ echo 'class="active"';} ?>>Kategori</a></li>
            <li><a href="<?= BASE_URL.'index.php?page=my_profile&module=barang&action=list'; ?>" <?php if($module == "barang"){ echo 'class="active"';} ?>>Barang</a></li>
            <li><a href="<?= BASE_URL.'index.php?page=my_profile&module=kota&action=list'; ?>" <?php if($module == "kota"){ echo 'class="active"';} ?>>Kota</a></li>
            <li><a href="<?= BASE_URL.'index.php?page=my_profile&module=user&action=list'; ?>" <?php if($module == "user"){ echo 'class="active"';} ?>>User</a></li>
            <li><a href="<?= BASE_URL.'index.php?page=my_profile&module=banner&action=list'; ?>" <?php if($module == "banner"){ echo 'class="active"';} ?>>Banner</a></li>
            <li><a href="<?= BASE_URL.'index.php?page=my_profile&module=pesanan&action=list'; ?>" <?php if($module == "pesanan"){ echo 'class="active"';} ?>>Pesanan</a></li>
        </ul>
    </div>
    <div id="profile-content">
        <?php 
            $file = "module/$module/$action.php";
            if (file_exists($file)) {
                include_once $file;
            } else {
               echo "<h1>404</h1><br><h3>Maaf, halaman tidak ditemukan</h3>";
            }
        ?>
    </div>
</div>
