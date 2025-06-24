<!-- navbar-wrapper end -->
@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Running Trades</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <div class="d-flex justify-content-end align-items-center flex-wrap gap-2">
                    <form action="" method="GET" class="d-flex flex-wrap gap-2">
                        <div class="input-group w-auto flex-fill">
                            <input type="search" name="search" class="form-control bg--white" placeholder="Unique ID / Seller / Buyer" value="">
                            <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card b-radius--10">
                    <div class="card-body p-0">
                        <div class="table-responsive--md table-responsive">
                            <table class="table--light style--two table">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Buyer</th>
                                        <th>Seller</th>
                                        <th>Unique ID</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Exchange Rate</th>
                                        <th>Crypto Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-muted text-center" colspan="100%">Data not found</td>
                                    </tr>
                                </tbody>
                            </table><!-- table end -->
                        </div>
                    </div>
                </div><!-- card end -->
            </div>
        </div>


    </div><!-- bodywrapper__inner end -->
</div><!-- body-wrapper end -->
</div>


@include('layouts.admin.footer')