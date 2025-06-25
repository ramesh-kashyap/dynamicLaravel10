@include('layouts.admin.header')

<!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Advertisement Limit</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center">
        <!-- Modal Trigger Button -->
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="Add New Limit">
            <i class="las la-plus"></i>Add New        </button>
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
                                    <th>Completed Trade</th>
                                    <th>Advertise Limit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                                                    <tr>
                                        <td class="text-muted text-center" colspan="100%">Data not found</td>
                                    </tr>
                                                            </tbody>
                        </table>
                    </div>
                </div>

                            </div>
        </div>
    </div>

    
    <div id="cuModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> New Advertise Limit</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form action="http://localhost/p2pexchange/admin/limit/store" method="POST">
                    <input type="hidden" name="_token" value="mqOAscW9zhbOCY3lf6SO5g51bOFar8tcAiGLsNBa">                    <div class="modal-body">
                        <div class="form-group">
                            <label>Completed Trade</label>
                            <input type="number" class="form-control" placeholder="0" name="completed_trade" required>
                        </div>

                        <div class="form-group">
                            <label>Advertisement Limit</label>
                            <input type="number" class="form-control" placeholder="0" name="ad_limit" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary h-45 w-100">Submit</button>
                    </div>
                </form>
            </div>
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
                <input type="hidden" name="_token" value="mqOAscW9zhbOCY3lf6SO5g51bOFar8tcAiGLsNBa">                <div class="modal-body">
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
