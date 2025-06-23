@include('layouts.admin.header')

<!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Notification to Verified Users</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <span class="text--primary">Notification will send via              <span class="badge badge--warning">Email</span>
                 </span>
    </div>
</div>

                    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <form class="notify-form" action="">
                    <input type="hidden" name="_token" value="mqOAscW9zhbOCY3lf6SO5g51bOFar8tcAiGLsNBa">                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Being Sent </label>
                                    <div class="input-group">
                                        <span class="input-group-text">To</span>
                                        <select class="form-control" name="being_sent_to" required>
                                                                                            <option value="allUsers">All Users</option>
                                                                                            <option value="selectedUsers">Selected Users</option>
                                                                                            <option value="kycUnverified">Kyc Unverified Users</option>
                                                                                            <option value="kycVerified">Kyc Verified Users</option>
                                                                                            <option value="kycPending">Kyc Pending Users</option>
                                                                                            <option value="withBalance">With Balance Users</option>
                                                                                            <option value="emptyBalanceUsers">Empty Balance Users</option>
                                                                                            <option value="twoFaDisableUsers">2FA Disable User</option>
                                                                                            <option value="twoFaEnableUsers">2FA Enable User</option>
                                                                                            <option value="hasDepositedUsers">Deposited Users</option>
                                                                                            <option value="notDepositedUsers">Not Deposited Users</option>
                                                                                            <option value="pendingDepositedUsers">Pending Deposited Users</option>
                                                                                            <option value="rejectedDepositedUsers">Rejected Deposited Users</option>
                                                                                            <option value="topDepositedUsers">Top Deposited Users</option>
                                                                                            <option value="hasWithdrawUsers">Withdraw Users</option>
                                                                                            <option value="pendingWithdrawUsers">Pending Withdraw Users</option>
                                                                                            <option value="rejectedWithdrawUsers">Rejected Withdraw Users</option>
                                                                                            <option value="pendingTicketUser">Pending Ticket Users</option>
                                                                                            <option value="answerTicketUser">Answer Ticket Users</option>
                                                                                            <option value="closedTicketUser">Closed Ticket Users</option>
                                                                                            <option value="notLoginUsers">Last Few Days Not Login Users</option>
                                                                                    </select>
                                    </div>
                                </div>
                                <div class="input-append"></div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Subject </label>
                                    <input class="form-control" name="subject" type="text" placeholder="Email subject" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Message </label>
                                    <textarea class="form-control nicEdit" name="message" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 start-from-col">
                                        <div class="form-group">
                                            <label>Start Form </label>
                                            <input class="form-control" name="start_form" type="number" placeholder="Start form user" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 per-batch-col">
                                        <div class="form-group">
                                            <label>Per Batch </label>
                                            <div class="input-group">
                                                <input class="form-control" name="batch" type="number" placeholder="How many user" required />
                                                <span class="input-group-text">
                                                    User                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 cooling-period-col">
                                        <div class="form-group">
                                            <label>Cooling Period </label>
                                            <div class="input-group">
                                                <input class="form-control" name="cooling_time" type="number" placeholder="Waiting time" required />
                                                <span class="input-group-text">
                                                    Seconds                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn w-100 h-45 btn--primary me-2" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="notificationSending" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Notification Sending</h5>
                </div>
                <div class="modal-body">
                    <h4 class="text--danger dontCloseWarning text-center">Don't close or refresh the window till finish.</h4>

                    <div class="mail-wrapper">
                        <div class="sendingIcon mail-icon world-icon"><i class="las la-globe"></i></div>
                        <div class="coolingIcon mail-icon world-icon"><i class="fas fa-spinner fa-spin"></i></div>
                        <div class='sendingIcon mailsent'>
                            <div class='envelope'>
                                <i class='line line1'></i>
                                <i class='line line2'></i>
                                <i class='line line3'></i>
                                <i class="icon fa fa-envelope"></i>
                            </div>
                        </div>
                        <div class="sendingIcon mail-icon mail-icon"><i class="las la-envelope-open-text"></i></div>
                    </div>
                    <div class="finalStatistics d-none">
                        <div class="mail-icon text--success fw-bold text-center">
                            <i class="fas fa-check"></i> Done                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Start From<span class="fw-bold startFrom">0</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Ended at<span class="fw-bold sent">0</span>
                            </li>
                        </ul>
                    </div>
                    <h4 class="text--primary remainingTime d-none text-center"></h4>

                    <div class="mt-3">
                        <p class="sentStatistics text-center mb-2">Email sent <span class="startFrom">0</span> to <span class="sent">-</span> users                        </p>
                        <p class="text-center sentStatistics">
                            <button class="btn btn--danger stopSending"><i class="la la-power-off"></i>Stop</button>
                        </p>
                        <div class="modelCloseButton d-none text-end">
                            <button class="btn btn--danger" data-bs-dismiss="modal" type="button" aria-label="Close">
                                Close                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>



@include('layouts.admin.footer')
