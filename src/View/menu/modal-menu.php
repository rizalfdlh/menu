<div class="modal fade text-left modal-borderless modal-lg" id="border-less" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <form action="" id="formadduser" class="form form-horizontal" method="POST"
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
                                <input type="text" name="menu" id="menu" class="form-control" required>
                            </div>

                            <!-- Input Harga dengan Format IDR -->
                            <div class="col-md-4">
                                <label>Price (IDR)</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" name="price" id="price" class="form-control" onkeyup="formatRupiah(this)" required>
                            </div>

                            <!-- Input Stok dengan Tombol Tambah dan Kurang -->
                            <div class="col-md-4">
                                <label>Stock</label>
                            </div>
                            <div class="col-md-8 form-group d-flex">
                                <input type="text" name="stock" id="stock" class="form-control text-center"
                                    value="0" required>
                                <button type="button" class="btn btn-danger" onclick="changeStock(-1)">-</button>
                                <button type="button" class="btn btn-success" onclick="changeStock(1)">+</button>
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
    // Format IDR untuk input harga
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
    function changeStock(amount) {
        let stockInput = document.getElementById('stock');
        let currentStock = parseInt(stockInput.value) || 0;
        let newStock = currentStock + amount;
        stockInput.value = newStock < 0 ? 0 : newStock; // Tidak boleh kurang dari 0
    }
</script>