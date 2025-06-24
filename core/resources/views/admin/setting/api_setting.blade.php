@include('layouts.admin.header')


        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Api Setting</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                    <div class="row mb-none-30">
        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0">                        <div class="row">
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Fiat Currency Rate Api Key </label>
                                    ( <small>For the api key please visit :                                        <a target="_blank" class="text--info" href="https://currencylayer.com/">Currency Layer</a>
                                    </small> )
                                    <input class="form-control" type="text" name="fiat_api_key" value="--------">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Cryptocurrency Rate Api Key </label>
                                    ( <small>For the api key please visit :                                        <a target="_blank" class="text--info" href="https://coinmarketcap.com/">CoinMarketCap</a>
                                    </small> )
                                    <input class="form-control" type="text" name="crypto_api_key" value="-----------">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-4 mt-4">
                                <h4>CoinPayment Setting</h4>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label> Public Key</label>
                                    <input type="text" class="form-control" name="public_key" value="*************************************" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label> Private Key</label>
                                    <input type="text" class="form-control" name="private_key" value="****************************" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label> Merchant ID</label>
                                    <input type="text" class="form-control" name="merchant_id" value="***********************************" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn--primary w-100 btn-lg h-45">Update</button>
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
