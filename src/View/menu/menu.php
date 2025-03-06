<?php if (\Support\Session::hasFlash('error')): ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'error',
            text: "<?= \Support\Session::flash('error') ?>",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
<?php endif; ?>

<?php if (\Support\Session::hasFlash('succes')): ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            // title: 'berhasil',
            text: "<?= \Support\Session::flash('succes') ?>",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
<?php endif; ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Menu</h3>
                <!-- <p class="text-subtitle text-muted">The default layout.</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Menu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <!-- <h4 class="card-title">test</h4> -->
            </div>

            <div class="card-body">
                <button class="btn btn-primary block mb-3" data-bs-toggle="modal" data-bs-target="#border-less">Add</button>
                <?php include includeFile('menu/modal-menu.php'); ?>
                <table id="table1" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Menu</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 0;
                    foreach ($menu as $mn):
                        $no++;
                    ?>
                        <tbody>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $mn->menu ?></td>
                                <td><?= $mn->price ?></td>
                                <td><?= $mn->stock ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#border-less-edit<?= $mn->id_menu ?>">Edit</button>
                                        <?php include includeFile('menu/modal-edit.php'); ?>

                                        <form action="<?= base_url() ?>/menu-delete/<?= $mn->id_menu ?>" method="post">
                                            <?= csrf() ?>
                                            <?= method('DELETE') ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>
</div>