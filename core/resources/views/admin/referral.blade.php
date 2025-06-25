@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Manage Referral</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
        </div>

        <div class="row gy-4">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header d-flex gap-2 justify-content-between align-items-center">
                        <span>
                            Deposit Commission <span class="badge badge--danger">Disabled</span>
                        </span>

                        <a href="http://localhost/p2pexchange/admin/referral/status/update/deposit_commission" class="btn btn-outline--success">Enable Now</a>

                    </h5>

                    <div class="card-body parent">
                        <div class="table-responsive--sm">
                            <table class="table table--light style--two">
                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>Commission</th>
                                    </tr>
                                </thead>

                                <tbody>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mt-4 pt-3 border-top">
                            <div class="flex-fill">
                                <input type="number" name="level" placeholder="How many level" class="form-control levelGenerate">
                            </div>
                            <button type="button" class="btn btn--primary generate flex-fill">
                                GENERATE </button>
                        </div>

                        <form action="http://localhost/p2pexchange/admin/referral/store" method="POST">
                            <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0"> <input type="hidden" name="commission_type" value="deposit">
                            <div class="d-none levelForm">
                                <div class="form-group">
                                    <label class="text--success"> Level & Commission : <small>(Old Levels will Remove After Generate)</small>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="description referral-desc">
                                                <div class="row">
                                                    <div class="col-md-12 planDescriptionContainer"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn--primary w-100">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header d-flex gap-2 justify-content-between align-items-center">
                        <span>
                            Trade Commission <span class="badge badge--success">Enabled</span>
                        </span>

                        <a href="http://localhost/p2pexchange/admin/referral/status/update/trade_commission" class="btn btn-outline--danger">Disable Now</a>
                    </h5>

                    <div class="card-body parent">
                        <div class="table-responsive--sm">
                            <table class="table table--light style--two">
                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>Commission</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table><!-- table end -->
                        </div>

                        <div class="d-flex flex-wrap gap-2 mt-4 pt-3 border-top">
                            <div class="flex-fill">
                                <input type="number" name="level" placeholder="How many level" class="form-control input-lg levelGenerate">
                            </div>
                            <button type="button" class="btn btn--primary generate flex-fill"> GENERATE </button>
                        </div>

                        <form action="http://localhost/p2pexchange/admin/referral/store" method="POST">
                            <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0"> <input type="hidden" name="commission_type" value="trade">
                            <div class="d-none levelForm">
                                <div class="form-group">
                                    <label class="text--success"> Level & Commission : <small>(Old Levels will Remove After Generate)</small>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="description referral-desc">
                                                <div class="row">
                                                    <div class="col-md-12 planDescriptionContainer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn--primary w-100">Submit</button>
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
