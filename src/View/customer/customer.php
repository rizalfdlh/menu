<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Customers</h3>
                <!-- <p class="text-subtitle text-muted">The default layout.</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Customers</li>
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
                <div class="table-responsive">
                    <table id="table1" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Created</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <?php
                        $no = 0;
                        foreach ($viewuser as $usr):
                            $no++;
                        ?>
                            <tbody>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $usr->name ?></td>
                                    <td><?= $usr->email ?></td>
                                    <td><?= $usr->password ?></td>
                                    <td><?= $usr->phone ?></td>
                                    <td><?= $usr->created_at ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href='<?= base_url() ?>/customer/<?= $usr->id_user ?>' class=' btn btn-success'
                                                title="Edit data"><i class="fas fa-pen"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>