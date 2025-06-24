
@include('layouts.admin.header')

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Pending Withdrawals</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <form action="" method="GET" class="d-flex flex-wrap gap-2">
            <div class="input-group w-auto flex-fill">
    <input type="search" name="search" class="form-control bg--white" placeholder="Search..." value="">
    <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
</div>
                <div class="input-group w-auto flex-fill">
    <input name="date" type="search" data-range="true" data-multiple-dates-separator=" - " data-language="en" data-format="Y-m-d" class="datepicker-here form-control bg--white pe-2" data-position='bottom right' placeholder="Start Date - End Date" autocomplete="off" value="">
    <button class="btn btn--primary input-group-text"><i class="la la-search"></i></button>
</div>


    </form>
    </div>
</div>

                    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                                <tr>
                                    <th>Initiated</th>
                                    <th>Transaction ID</th>
                                    <th>User</th>
                                    <th>Amount</th>
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
