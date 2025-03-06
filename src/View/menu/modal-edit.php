<div class="modal fade text-left modal-borderless modal-lg" id="border-less-edit<?= $mn->id_menu ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <form action="<?= base_url() ?>/menu-edit/<?= $mn->id_menu ?>" id="formadduser" class="form form-horizontal" method="POST"
            enctype="multipart/form-data">
            <?= csrf() ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Menu</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                            <!-- Input Nama Menu -->
                            <div class="col-md-4">
                                <label>Menu</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <!-- <input type="hidden" name="id_menu" value="<?= $mn->id_menu ?>"> -->
                                <input type="text" name="menu" id="menu" class="form-control" value="<?= $mn->menu ?>" required>
                            </div>

                            <!-- Input Harga dengan Format IDR -->
                            <div class="col-md-4">
                                <label>Price (IDR)</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" name="price" id="price" class="form-control" onkeyup="formatRupiah(this)" value="<?= $mn->price ?>" required>
                            </div>


                            <div class="col-md-4">
                                <label>Stock</label>
                            </div>
                            <div class="col-md-8 form-group d-flex">
                                <input type="text" name="stock" class="form-control text-center stock-input"
                                    value="<?= $mn->stock ?>" required>
                                <button type="button" class="btn btn-danger" onclick="changeStock(-1, this)">-</button>
                                <button type="button" class="btn btn-success" onclick="changeStock(1, this)">+</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" id="adduser">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // Fungsi untuk menambah/mengurangi stok
    function formatRupiah(input) {
        let value = input.value.replace(/\D/g, ''); // Hanya angka

        if (value === '') {
            input.value = ''; // Jika kosong, biarkan kosong
            return;
        }

        input.value = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(value);
    }

    // Fungsi untuk menambah/mengurangi stok
    function changeStock(amount, button) {
        let stockInput = button.parentElement.querySelector('.stock-input');
        let currentStock = parseInt(stockInput.value) || 0;
        let newStock = currentStock + amount;
        stockInput.value = newStock < 0 ? 0 : newStock; // Tidak boleh kurang dari 0
    }
</script>