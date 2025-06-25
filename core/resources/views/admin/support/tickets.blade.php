@include('layouts.admin.header')

<div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Support Tickets</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light">
                            <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Submitted By</th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Last Reply</th>
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
