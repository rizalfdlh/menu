<div class="modal fade text-left modal-borderless modal-lg" id="border-less" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <form action="" id="formadduser" class="form form-horizontal" method="POST"
            enctype="multipart/form-data">
            <input type="hidden" name="csrf_token" value="086e0d3f286609fb448e5bdfdd426a238368dfd96e77f4326afc0e7c69bd45a4">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add User</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Username</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" name="username" id="username" class="form form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" name="name" id="name" class="form form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Password</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="password" name="password" id="password" class="form form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Profile</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="file" name="profile" id="profile" class="form form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Role</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <select name="role_id" id="role_id" class="form form-control">
                                    <option value="Administrator">Administrator</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" id="adduser" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>