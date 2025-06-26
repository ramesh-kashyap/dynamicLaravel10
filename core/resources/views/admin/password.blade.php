@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Password Setting</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <a href="{{route('admin.profile')}}" class="btn btn-sm btn-outline--primary"><i class="las la-user"></i>Profile Setting</a>
            </div>
        </div>


        <div class="row mb-none-30">
            <div class="col-lg-3 col-md-3 mb-30">

                <div class="card b-radius--5 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="d-flex p-3 bg--primary">
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

            <div class="col-lg-9 col-md-9 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4 border-bottom pb-2">Change Password</h5>

                        <form action="" method="POST" enctype="multipart/form-data">
                            <!-- <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0"> -->
                             @csrf
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="old_password" required>
                            </div>

                            <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
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


@include('layouts.admin.footer')