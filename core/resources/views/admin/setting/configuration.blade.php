@include('layouts.admin.header')


<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">System Configuration</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form action="" method="post">
                        <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">User Registration</p>
                                        <p class="mb-0">
                                            <small>If you disable this module, no one can register on this system</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="registration" checked>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">Force SSL</p>
                                        <p class="mb-0">
                                            <small>By enabling <span>Force SSL (Secure Sockets Layer)</span> the system will force a visitor that he/she must have to visit in secure mode. Otherwise, the site will be loaded in secure mode.</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="force_ssl">
                                    </div>
                                </li>
                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">Agree Policy</p>
                                        <p class="mb-0">
                                            <small>If you enable this module, that means a user must have to agree with your system's <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/policy_pages">policies</a> during registration.</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="agree">
                                    </div>
                                </li>

                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">Force Secure Password</p>
                                        <p class="mb-0">
                                            <small>By enabling this module, a user must set a secure password while signing up or changing the password.</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="secure_password">
                                    </div>
                                </li>

                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">KYC Verification</p>
                                        <p class="mb-0">
                                            <small>If you enable <span>KYC (Know Your Client)</span> module, users must have to submit <a href="http://localhost/p2pexchange/admin/kyc-setting">the required data</a>. Otherwise, any money out transaction will be prevented by this system.</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="kv">
                                    </div>
                                </li>

                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">Email Verification</p>
                                        <p class="mb-0">
                                            <small>
                                                If you enable <span>Email Verification</span>, users have to verify their email to access the dashboard. A 6-digit verification code will be sent to their email to be verified. <br>
                                                <span><i>Note:</i></span> <i>Make sure that the <span>Email Notification </span> module is enabled</i>
                                            </small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="ev">
                                    </div>
                                </li>

                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">Email Notification</p>
                                        <p class="mb-0">
                                            <small>If you enable this module, the system will send email to users where needed. Otherwise, no email will be sent. <code>So be sure before disabling this module that, the system doesn't need to send any emails.</code></small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="en" checked>
                                    </div>
                                </li>

                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">Mobile Verification</p>
                                        <p class="mb-0">
                                            <small>
                                                If you enable <span>Mobile Verification</span>, users have to verify their mobile to access the dashboard. A 6-digit verification code will be sent to their mobile to be verified. <br>
                                                <span><i>Note:</i></span> <i>Make sure that the <span>SMS Notification </span> module is enabled</i>
                                            </small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="sv">
                                    </div>
                                </li>


                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">SMS Notification</p>
                                        <p class="mb-0">
                                            <small>If you enable this module, the system will send SMS to users where needed. Otherwise, no SMS will be sent. <code>So be sure before disabling this module that, the system doesn't need to send any SMS.</code></small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="sn">
                                    </div>
                                </li>

                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">Push Notification</p>
                                        <p class="mb-0">
                                            <small>If you enable this module, the system will send push notification to users in mobile application where needed. Otherwise, no push notification will be sent. <code>So be sure before disabling this module that, the system doesn't need to send any push notification.</code></small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="pn" checked>
                                    </div>
                                </li>

                                <li class="list-group-item d-flex flex-wrap flex-sm-nowrap gap-2 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0">Language Option</p>
                                        <p class="mb-0">
                                            <small>If you enable this module, users can change the language according to their needs</small>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-height="35" data-on="Enable" data-off="Disable" name="multi_language" checked>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div><!-- bodywrapper__inner end -->
</div><!-- body-wrapper end -->
</div>
@include('layouts.admin.footer')