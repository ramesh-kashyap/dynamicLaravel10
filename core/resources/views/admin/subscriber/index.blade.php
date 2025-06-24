@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Subscriber Manager</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <a href="http://localhost/p2pexchange/admin/subscriber/send-email" class="btn btn-sm btn-outline--primary"><i class="las la-paper-plane"></i>Send Email</a>
            </div>
        </div>


        <div class="row">

            <div class="col-lg-12">
                <div class="card b-radius--10 ">
                    <div class="card-body p-0">
                        <div class="table-responsive--sm table-responsive">
                            <table class="table table--light style--two">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Subscribe At</th>
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
