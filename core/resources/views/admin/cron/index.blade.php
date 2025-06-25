@include('layouts.admin.header')


<!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Cron Jobs</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <button class="btn btn-outline--primary addCron" type="btn"><i class="las la-plus"></i> Add</button>
    <a class="btn btn-outline--primary" href="http://localhost/p2pexchange/p2pexchange/admin/cron/schedule"><i class="las la-clock"></i> Cron Schedule</a>
    </div>
</div>

                    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 bg--transparent shadow-none">
                <div class="card-body p-0">
                    <div class="table-responsive--md table-responsive">
                        <table class="table--light style--two table bg-white">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Schedule</th>
                                    <th>Next Run</th>
                                    <th>Last Run</th>
                                    <th>Is Running</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                    
                                    <tr>
                                        <td>
                                            Fiat Currency Cron  <br>
                                            <code>fiat_currency_cron</code>
                                        </td>
                                        <td>5 Minutes</td>
                                        <td>
                                                                                            2024-04-24 11:28:45
                                                <br> 1 year ago
                                                                                    </td>
                                        <td>
                                                                                            2024-04-24 11:23:45
                                                <br> 1 year ago
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Running</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--primary">Customizable</span>
                                                                                    </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline--primary" data-bs-toggle="dropdown" id="actionButton">
                                                    <i class="las la-ellipsis-v"></i>
                                                    Action                                                </button>
                                                <div class="dropdown-menu p-0">
                                                    <a class="dropdown-item" href="http://localhost/p2pexchange/p2pexchange/cron?alias=fiat_currency_cron"><i class="las la-check-circle"></i> Run Now</a>
                                                                                                            <a class="dropdown-item" href="http://localhost/p2pexchange/p2pexchange/admin/cron/schedule/pause/7"><i class="las la-pause"></i> Pause</a>
                                                                                                        <a class="dropdown-item updateCron" data-cron_schedule_id="1" data-default="0" data-id="7" data-name="Fiat Currency Cron" data-next_run="2024-04-24T11:28" data-url="" href=""><i class="las la-pen"></i> Edit</a>
                                                    <a class="dropdown-item" href="http://localhost/p2pexchange/p2pexchange/admin/cron/schedule/logs/7"><i class="las la-history"></i> Logs</a>
                                                                                                            <a class="dropdown-item confirmationBtn" data-action="http://localhost/p2pexchange/p2pexchange/admin/cron/delete/7" data-question="Are you sure to delete this cron?" href="javascript:void(0)"><i class="las la-trash"></i> Delete</a>
                                                                                                    </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    
                                    <tr>
                                        <td>
                                            Cryptocurrency Cron  <br>
                                            <code>cryptocurrency_cron</code>
                                        </td>
                                        <td>5 Minutes</td>
                                        <td>
                                                                                            2024-04-24 11:28:29
                                                <br> 1 year ago
                                                                                    </td>
                                        <td>
                                                                                            2024-04-24 11:23:29
                                                <br> 1 year ago
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--success">Running</span>
                                                                                    </td>
                                        <td>
                                                                                            <span class="badge badge--primary">Customizable</span>
                                                                                    </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline--primary" data-bs-toggle="dropdown" id="actionButton">
                                                    <i class="las la-ellipsis-v"></i>
                                                    Action                                                </button>
                                                <div class="dropdown-menu p-0">
                                                    <a class="dropdown-item" href="http://localhost/p2pexchange/p2pexchange/cron?alias=cryptocurrency_cron"><i class="las la-check-circle"></i> Run Now</a>
                                                                                                            <a class="dropdown-item" href="http://localhost/p2pexchange/p2pexchange/admin/cron/schedule/pause/8"><i class="las la-pause"></i> Pause</a>
                                                                                                        <a class="dropdown-item updateCron" data-cron_schedule_id="1" data-default="0" data-id="8" data-name="Cryptocurrency Cron" data-next_run="2024-04-24T11:28" data-url="" href=""><i class="las la-pen"></i> Edit</a>
                                                    <a class="dropdown-item" href="http://localhost/p2pexchange/p2pexchange/admin/cron/schedule/logs/8"><i class="las la-history"></i> Logs</a>
                                                                                                            <a class="dropdown-item confirmationBtn" data-action="http://localhost/p2pexchange/p2pexchange/admin/cron/delete/8" data-question="Are you sure to delete this cron?" href="javascript:void(0)"><i class="las la-trash"></i> Delete</a>
                                                                                                    </div>
                                            </div>
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
                <input type="hidden" name="_token" value="k8A1JjngdlHd7aeFTgamuabnQSVaA1QhwaqaMJWb">                <div class="modal-body">
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


    <div a aria-hidden="true" class="modal fade" id="addCron" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Cron Job</h4>
                    <button class="close" data-bs-dismiss="modal" type="button"><i class="las la-times"></i></button>
                </div>
                <form action="http://localhost/p2pexchange/p2pexchange/admin/cron/store" class="form-horizontal resetForm" method="post">
                    <input type="hidden" name="_token" value="k8A1JjngdlHd7aeFTgamuabnQSVaA1QhwaqaMJWb">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" required type="text">
                        </div>
                        <div class="form-group">
                            <label>Next Run</label>
                            <input class="form-control" name="next_run" required type="datetime-local">
                        </div>
                        <div class="form-group">
                            <label>Schedule</label>
                            <select class="form-control" name="cron_schedule_id" required>
                                                                    <option value="1">5 Minutes</option>
                                                                    <option value="2">10 Minutes</option>
                                                            </select>
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input class="form-control" name="url" required type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn--primary h-45 w-100" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div a aria-hidden="true" class="modal fade" id="updateCron" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Cron Job</h4>
                    <button class="close" data-bs-dismiss="modal" type="button"><i class="las la-times"></i></button>
                </div>
                <form action="http://localhost/p2pexchange/p2pexchange/admin/cron/update" class="form-horizontal resetForm" method="post">
                    <input type="hidden" name="_token" value="k8A1JjngdlHd7aeFTgamuabnQSVaA1QhwaqaMJWb">                    <input name="id" type="hidden">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" required type="text">
                        </div>
                        <div class="form-group">
                            <label>Next Run</label>
                            <input class="form-control" name="next_run" required type="datetime-local">
                        </div>
                        <div class="form-group">
                            <label>Schedule</label>
                            <select class="form-control" name="cron_schedule_id" required>
                                                                    <option value="1">5 Minutes</option>
                                                                    <option value="2">10 Minutes</option>
                                                            </select>
                        </div>
                        <div class="form-group urlGroup">
                            <label>Url</label>
                            <input class="form-control" name="url" type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn--primary h-45 w-100" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>



@include('layouts.admin.footer')
