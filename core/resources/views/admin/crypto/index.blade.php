@include('layouts.admin.header')
   
   <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">All Crypto Currencies</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center has-search-form">
        <form action="" method="GET" class="d-flex flex-wrap gap-2">
            <div class="input-group w-auto flex-fill">
    <input type="search" name="search" class="form-control bg--white" placeholder="Search..." value="">
    <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
</div>
        </form>
        <a class="btn btn-outline--primary" href="http://localhost/p2pexchange/admin/crypto-currencies/add-new"><i class="las la-plus"></i>Add New</a>
    </div>
    </div>
</div>

                    
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10">
                <div class="card-body p-0">
                    <div class="table-responsive--md table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Symbol</th>
                                    <th>Rate</th>
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

    
    <div id="confirmationModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation Alert!</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times"></i>
                </button>
            </div>
            <form action="" method="POST">
                <input type="hidden" name="_token" value="PXRlq3B7ZoiOhWcwkbPqq4WrITEpwHjVJJgPOkh2">                <div class="modal-body">
                    <p class="question"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--dark" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn--primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>



            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>


@include('layouts.admin.footer')
