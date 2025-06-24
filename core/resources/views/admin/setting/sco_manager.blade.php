@include('layouts.admin.header')

<!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">SEO Configuration</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                    <div class="row">
        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="http://localhost/p2pexchange/p2pexchange/admin/frontend/frontend-content/seo" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="iykhBNyYflf2iHFbGGmtUzt09Ed4qCyhnf74LWsK">                        <input type="hidden" name="type" value="data">
                        <input type="hidden" name="seo_image" value="1">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <div class="image-upload">
                                        <div class="thumb">
                                            <div class="avatar-preview">
                                                <div class="profilePicPreview" style="background-image: url(http://localhost/p2pexchange/p2pexchange/assets/images/seo/632f376d88a6d1664038765.png)">
                                                    <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="avatar-edit">
                                                <input type="file" class="profilePicUpload" name="image_input" id="profilePicUpload1" accept=".png, .jpg, .jpeg">
                                                <label for="profilePicUpload1" class="bg--primary">Upload Image</label>
                                                <small class="mt-2">Supported files: <b>jpeg, jpg, png</b>. Image will be resized into 1180x600px. </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 mt-xl-0 mt-4">
                                <div class="form-group ">
                                    <label>Meta Keywords</label>
                                    <small class="ms-2 mt-2  ">Separate multiple keywords by <code>,</code>(comma) or <code>enter</code> key</small>
                                    <select name="keywords[]" class="form-control select2-auto-tokenize"  multiple="multiple" required>
                                                                                                                                    <option value="crypto" selected>crypto</option>
                                                                                            <option value="cryptocurrency" selected>cryptocurrency</option>
                                                                                            <option value="cryptocurrencies" selected>cryptocurrencies</option>
                                                                                            <option value="exchange" selected>exchange</option>
                                                                                            <option value="cryptoexchange" selected>cryptoexchange</option>
                                                                                            <option value="bitcoin" selected>bitcoin</option>
                                                                                            <option value="etherium" selected>etherium</option>
                                                                                                                        </select>
                                </div>

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea name="description" rows="3" class="form-control" required>TMC P2P Exchange is a p2p crypto exchange marketplace where people can trade crypto directly with each other.</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Social Title</label>
                                    <input type="text" class="form-control" name="social_title" value="TMC P2P Exchange - Ultimate Peer to Peer Crypto Exchange Platform" required/>
                                </div>
                                <div class="form-group">
                                    <label>Social Description</label>
                                    <textarea name="social_description" rows="3" class="form-control" required>TMC P2P Exchange is a p2p crypto exchange marketplace where people can trade crypto directly with each other.</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>

@include('layouts.admin.footer')
