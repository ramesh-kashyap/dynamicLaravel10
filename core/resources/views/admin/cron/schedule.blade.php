@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Cron Schedules</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <button class="btn btn-sm btn-outline--primary addSchedule"><i class="las la-plus"></i> Add New</button>
                <a href="http://localhost/p2pexchange/admin/cron/index" class="btn btn-sm btn-outline--primary">
                    <i class="la la-undo"></i> Back</a>
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
                                        <th>Name</th>
                                        <th>Interval</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5 Minutes</td>
                                        <td>300 Seconds</td>
                                        <td> <span class="badge badge--success">Enabled</span> </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline--primary updateSchedule"
                                                data-id="1" data-name="5 Minutes" data-interval="300"><i
                                                    class="las la-pen"></i>
                                                Edit</button>

                                            <button type="button"
                                                class="btn btn-sm btn-outline--danger confirmationBtn"
                                                data-action="http://localhost/p2pexchange/admin/cron/schedule/status/1"
                                                data-question="Are you sure to disable this schedule?">
                                                <i class="la la-eye-slash"></i> Disable </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10 Minutes</td>
                                        <td>600 Seconds</td>
                                        <td> <span class="badge badge--success">Enabled</span> </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline--primary updateSchedule"
                                                data-id="2" data-name="10 Minutes" data-interval="600"><i
                                                    class="las la-pen"></i>
                                                Edit</button>

                                            <button type="button"
                                                class="btn btn-sm btn-outline--danger confirmationBtn"
                                                data-action="http://localhost/p2pexchange/admin/cron/schedule/status/2"
                                                data-question="Are you sure to disable this schedule?">
                                                <i class="la la-eye-slash"></i> Disable </button>
                                        </td>
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


        <div class="modal fade" id="addSchedule" tabindex="-1" role="dialog" a aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Cron Schedule</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"><i class="las la-times"></i></button>
                    </div>
                    <form class="form-horizontal resetForm" method="post" action="http://localhost/p2pexchange/admin/cron/schedule/store">
                        <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0"> <input type="hidden" name="id">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Interval</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="interval" required>
                                        <span class="input-group-text">Seconds</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn--primary h-45 w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div><!-- bodywrapper__inner end -->
</div><!-- body-wrapper end -->
</div>

@include('layouts.admin.header')