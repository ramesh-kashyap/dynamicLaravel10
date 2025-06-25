@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Profile</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <a href="{{route('admin.password')}}" class="btn btn-sm btn-outline--primary"><i class="las la-key"></i>Password Setting</a>
            </div>
        </div>

        <div class="row mb-none-30">
            <div class="col-xl-3 col-lg-4 mb-30">

                <div class="card b-radius--5 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="d-flex p-3 bg--primary align-items-center">
                            <div class="avatar avatar--lg">
                                <img src="http://localhost/p2pexchange/placeholder-image/400x400" alt="Image">
                            </div>
                            <div class="ps-3">
                                <h4 class="text--white">Super Admin</h4>
                            </div>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Name <span>Super Admin</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Username <span>admin</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Email <span>admin@site.com</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4 border-bottom pb-2">Profile Information</h5>

                        <form action="http://localhost/p2pexchange/admin/profile" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <div class="image-upload">
                                            <div class="thumb">
                                                <div class="avatar-preview">
                                                    <div class="profilePicPreview" style="background-image: url(http://localhost/p2pexchange/placeholder-image/400x400)">
                                                        <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="avatar-edit">
                                                    <input type="file" class="profilePicUpload" name="image" id="profilePicUpload1" accept=".png, .jpg, .jpeg">
                                                    <label for="profilePicUpload1" class="bg--primary">Upload Image</label>
                                                    <small class="mt-2  ">Supported files: <b>jpeg, jpg, png.</b> Image will be resized into 400x400px </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-group ">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" value="Super Admin" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email" value="admin@site.com" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn--primary h-45 w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- bodywrapper__inner end -->
</div><!-- body-wrapper end -->
</div>


@include('layouts.admin.footer')