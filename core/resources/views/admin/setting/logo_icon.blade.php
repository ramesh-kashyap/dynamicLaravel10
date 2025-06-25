@include('layouts.admin.header')



<!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Logo &amp; Favicon</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                    <div class="row mb-none-30">
        <div class="col-md-12 mb-30">
            <div class="card bl--5-primary">
                <div class="card-body">
                    <p class="text--primary">If the logo and favicon are not changed after you update from this page, please <span class="text--danger">clear the cache</span> from your browser. As we keep the filename the same after the update, it may show the old image for the cache. usually, it works after clear the cache but if you still see the old logo or favicon, it may be caused by server level or network level caching. Please clear them too.</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="k8A1JjngdlHd7aeFTgamuabnQSVaA1QhwaqaMJWb">                        <div class="row">
                            <div class="form-group col-xl-6">
                                <label>Logo</label>
                                <div class="image-upload">
                                    <div class="thumb">
                                        <div class="avatar-preview">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="profilePicPreview logoPicPrev" style="background-image: url(http://localhost/p2pexchange/p2pexchange/assets/images/logoIcon/logo.png)">
                                                        <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-sm-0 mt-4">
                                                    <div class="profilePicPreview logoPicPrev bg--dark" style="background-image: url(http://localhost/p2pexchange/p2pexchange/assets/images/logoIcon/logo.png)">
                                                        <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avatar-edit">
                                            <input type="file" class="profilePicUpload" id="profilePicUpload1" accept=".png, .jpg, .jpeg" name="logo">
                                            <label for="profilePicUpload1" class="bg--primary">Select Logo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-xl-6">
                                <label>Favicon</label>
                                <div class="image-upload">
                                    <div class="thumb">
                                        <div class="avatar-preview">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="profilePicPreview logoPicPrev" style="background-image: url(http://localhost/p2pexchange/p2pexchange/assets/images/logoIcon/favicon.png)">
                                                        <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-sm-0 mt-4">
                                                    <div class="profilePicPreview logoPicPrev bg--dark" style="background-image: url(http://localhost/p2pexchange/p2pexchange/assets/images/logoIcon/favicon.png)">
                                                        <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="avatar-edit">
                                            <input type="file" class="profilePicUpload" id="profilePicUpload2" accept=".png" name="favicon">
                                            <label for="profilePicUpload2" class="bg--primary">Select Favicon</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>




@include('layouts.admin.footer')
