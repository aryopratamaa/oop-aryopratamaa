<?php

include "app/Post.php";
$id = $_GET['id'];
$post= new Post();
$row = $post->edit($id);

?>

<div class="container-xl">

    <h1 class="app-page-title">Post</h1>
    <div class="section-intro">Input form post dibawah ini, jika ada kendala dapat hubungi admin, <a href="#">help.</a></div>
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
                    <input type="hidden" name="post_id" value="<?php echo $id; ?>">
                        <div class="mb-3">
                            <label class="form-label">ID Kategori</label>
                            <input name="cat_id" class="form-control" type="text" value="<?php echo $row['cat_id']; ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Tanggal Post</label>
                            <input type="text" name="post_date" class="form-control" value="<?php echo $row['post_date']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Slug Post</label>
                            <input type="text" name="post_slug" class="form-control" id="setting-input-2" value="<?php echo $row['post_slug']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Judul Post</label>
                            <input type="text" name="post_title" class="form-control" id="setting-input-2" value="<?php echo $row['post_title']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Keterangan</label>
                            <input type="textarea" name="post_ket" class="form-control" id="setting-input-2" value="<?php echo $row['post_text']; ?>" required>
                        </div>
                        <input type="submit" name="btn_edit" class="btn app-btn-primary" value="Update">
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