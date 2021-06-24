<?php
require_once "app/Kategori.php";
$kategori = new Kategori();
$rows = $kategori->tampil();
?>

<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0">Kategori</h1>
    </div>
</div>
<!--//row-->
<div class="tab-content" id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">Nomor</th>
                                <th class="cell">ID Kategori</th>
                                <th class="cell">Nama Kategori</th>
                                <th class="cell">Keterangan Detail Kategori</th>
                                <th class="cell"></th>
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
                                    <?php echo $row['cat_id']; ?>
                                </td>
                                <td class="cell">
                                    <?php echo $row['cat_name']; ?>
                                </td>
                                <td class="cell"><span class="truncate">
                                        <?php echo $row['cat_text']; ?>
                                    </span></td>
                                <td class="cell">
                                    <a class="btn-sm app-btn-primary" href="#">Edit</a>
                                    <a class="delete btn-sm app-btn-secondary"
                                        href="index.php?page=kategori_proses&delete-id=<?php echo $row['cat_id']; ?>">Delete</a>
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