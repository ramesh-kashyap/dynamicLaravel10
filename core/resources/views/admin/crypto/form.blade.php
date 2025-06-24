
@include('layouts.admin.header')
      
      <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Add New Crypto Currency</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <a href="http://localhost/p2pexchange/admin/crypto-currencies" class="btn btn-sm btn-outline--primary">
    <i class="la la-undo"></i> Back</a>
    </div>
</div>

                    
    <form action="http://localhost/p2pexchange/admin/crypto-currencies/store/0" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="PXRlq3B7ZoiOhWcwkbPqq4WrITEpwHjVJJgPOkh2">        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-3 col-lg-5 ">
                                <label>Image</label>

                                <div class="form-group">
                                    <div class="image-upload">
                                        <div class="thumb">
                                            <div class="avatar-preview">
                                                <div class="profilePicPreview" style="background-image: url(http://localhost/p2pexchange/placeholder-image/256x256)">
                                                    <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="avatar-edit">
                                                <input type="file" class="profilePicUpload" name="image" id="profilePicUpload1" accept=".png, .jpg, .jpeg">
                                                <label for="profilePicUpload1" class="bg--primary">Upload Image</label>
                                                <small class="mt-2  ">Supported files: <b>jpeg, jpg, png.</b> Image will be resized into  <span>256x256</span> px</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-9 col-lg-7 ">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" value="" placeholder="e.g. Bitcoin" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Code</label>
                                        <input class="form-control" type="text" name="code" value="" placeholder="e.g. BTC" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Symbol</label>
                                        <input class="form-control" type="text" name="symbol" value="" placeholder="e.g. ₿" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Rate</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><span>1&nbsp;</span> <span class="currency-symbol"></span> &nbsp; =</div>
                                            <input class="form-control" type="number" step="any" name="rate" value="0" required>
                                            <span class="input-group-text">USD</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 border-line-area mt-3">
                                        <h5 class="card-title border-bottom pb-2 text-center">Deposit Charges</h5>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Fixed Charge</label>
                                        <div class="input-group">
                                            <input class="form-control" type="number" step="any" name="deposit_charge_fixed" value="0" placeholder="0" required>
                                            <span class="input-group-text currency-symbol"></span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Percentage Charge</label>
                                        <div class="input-group">
                                            <input class="form-control" type="number" step="0.01" max="100" name="deposit_charge_percent" value="0" placeholder="0" required>
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 border-line-area mt-3">
                                        <h5 class="card-title border-bottom pb-2 text-center">Withdrawal Charges</h5>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fixed Charge</label>
                                        <div class="input-group">
                                            <input class="form-control" type="number" step="any" name="withdraw_charge_fixed" value="0" placeholder="0" required>
                                            <span class="input-group-text currency-symbol"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Percentage Charge</label>
                                        <div class="input-group">
                                            <input class="form-control" type="number" step="0.01" max="100" name="withdraw_charge_percent" value="0" placeholder="0" required>
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
@include('layouts.admin.footer')
