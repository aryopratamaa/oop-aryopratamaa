<?php
require_once "app/Post.php";
$post = new Post();
$rows = $post->tampil();
?>

<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0">Post</h1>
    </div>
</div>
<!--//row-->
<div class="tab-content" id="orders-table-tab-content">
    <div class="table-responsive">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn app-btn-primary" href="index.php?page=post_tambah">+ POST</a> 
            <a class="btn app-btn-secondary" href="index.php">Back to Home</a>
        </div>
        <br>
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">

                    <table class="table app-table-hover mb-0 text-left">

                        <thead>
                            <tr>
                                <th class="cell">Nomor</th>
                                <th class="cell">ID Post</th>
                                <th class="cell">ID Kategori</th>
                                <th class="cell">Tanggal Post</th>
                                <th class="cell">Slug</th>
                                <th class="cell">Judul</th>
                                <th class="cell">Keterangan</th>
                                <th class="cell">Action</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <?php 
							$no = 1;
						?>
                        <?php foreach ($rows as $row) { ?>
                        <tbody>
                            <tr>
                                <td class="cell">
                                    <?php echo $no++?>
                                </td>
                                <td class="cell">
                                    <?php echo $row['post_id']; ?>
                                </td>
                                <td class="cell">
                                    <?php echo $row['cat_id']; ?>. <?php echo $row['cat_name']; ?>
                                </td>
                                <td class="cell">
                                    <?php echo $row['post_date']; ?>
                                </td>
                                <td class="cell"><span class="truncate">
                                    <?php echo $row['post_slug']; ?>
                                    </span></td>
                                </td>
                                <td class="cell">
                                    <?php echo $row['post_title']; ?>
                                </td>
                                <td class="cell"><span class="truncate">
                                    <?php echo $row['post_text']; ?>
                                    </span></td>
                                <td class="cell">
                                    <a class="btn-sm app-btn-primary" href="index.php?page=post_edit&id=<?php echo $row['cat_id']; ?>">Edit</a>
                                    <a class="delete btn-sm app-btn-secondary"
                                        href="index.php?page=post_proses&delete-id=<?php echo $row['cat_id']; ?>">Delete</a>
                                </td>
                            </tr>

                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                <!--//table-responsive-->

            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
        <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <!--//app-pagination-->

    </div>
    <!--//tab-pane-->

</div>