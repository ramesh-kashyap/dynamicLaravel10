@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Users Setting</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <a href="http://localhost/p2pexchange/admin/profile" class="btn btn-sm btn-outline--primary"><i class="las la-user"></i>Profile Setting</a>
            </div>
        </div>


        <div class="row mb-none-30">
        

            <div class="col-lg-9 col-md-9 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4 border-bottom pb-2">Edit Users</h5>

                        <form action="http://localhost/p2pexchange/admin/password" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="password" name="old_password" required>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="password" name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn--primary w-100 btn-lg h-45">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- bodywrapper__inner end -->
</div><!-- body-wrapper end -->
</div>


@include('layouts.admin.header')