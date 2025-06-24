<!-- navbar-wrapper end -->
@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Payment Windows</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center">
                    <!-- Modal Trigger Button -->
                    <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="Add New Payment Window">
                        <i class="las la-plus"></i>Add New </button>
                </div>
            </div>
        </div>

        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="card b-radius--10 overflow-hidden">
                    <div class="card-body p-3">
                        Data not found
                    </div>
                </div>
            </div>
        </div>


        <div id="cuModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="las la-times"></i>
                        </button>
                    </div>
                    <form action="http://localhost/p2pexchange/admin/payment-window/store" method="POST">
                        <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Minutes</label>
                                <input type="number" class="form-control" name="minute" value="" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn--primary w-100 h-45">Save</button>
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
                        <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0">
                        <div class="modal-body">
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