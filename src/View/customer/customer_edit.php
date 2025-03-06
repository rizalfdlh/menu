<h1><?= $user->id_user ?></h1>
<p><?= $user->name ?></p>
<p><?= $user->email ?></p>
<p><?= $user->password ?></p>
<p><?= $user->phone ?></p>


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
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/customer">Customer</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Customers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">test</h4>
            </div>
            <div class="card-body">
                <form action="<?= base_url() ?>/update-customer/<?= $user->id_user ?>" method="post">
                    <?= csrf() ?>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?= $user->name ?>" class="form-control">
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>