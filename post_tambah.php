<?php

require_once "app/Kategori.php";

$kategori = new Kategori();
$kategoris = $kategori->tampil();

?>

<div class="container-xl">

    <h1 class="app-page-title">Post</h1>
    <div class="section-intro">Input form post dibawah in, jika ada kendala dapat hubungi admin, <a href="#">help.</a></div>
    <hr class="mb-4">
    <div class="row g-4 settings-section">
        <!--//<div class="col-12">
            <h3 class="section-title">General</h3>
            <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. <a href="help.html">Learn more</a></div>
        </div>-->
        <div class="col-12">
            <div class="app-card app-card-settings shadow-sm p-4">

                <div class="app-card-body">
                    <form method="POST" action="index.php?page=post_proses" class="settings-form">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">ID Kategori
                                <span class="ms-2"
                                    data-container="body" data-bs-toggle="popover" data-trigger="hover"
                                    data-placement="top"
                                    data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                                    <svg
                                        width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg>
                                </span>
                            </label>
                            <select name="cat_id" class="form-control" required>
                                <option value="">- Pilih -</option>
                                    <?php foreach($kategoris as $kategori) { ?>
                                <option value="<?php echo $kategori['cat_id']; ?>"><?php echo $kategori['cat_name']; ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Tanggal Post</label>
                            <input type="date" name="post_date" class="form-control" id="setting-input-2" required>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Slug Post</label>
                            <input type="text" name="post_slug" class="form-control" id="setting-input-2" required>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Judul Post</label>
                            <input type="text" name="post_title" class="form-control" id="setting-input-2" required>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Keterangan</label>
                            <input type="text" name="post_ket" class="form-control" id="setting-input-2" required>
                        </div>
                        <input type="submit" name="btn_tambah" class="btn app-btn-primary" value="Tambah">
                        <input type="reset" name="reset" class="btn app-btn-secondary" value="Reset">
                    </form>
                </div>
                <!--//app-card-body-->

            </div>
            <!--//app-card-->
        </div>
    </div>
    <!--//row-->

</div>