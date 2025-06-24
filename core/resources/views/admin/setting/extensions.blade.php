@include('layouts.admin.header')

<!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Extensions</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <div class="d-inline">
        <div class="input-group justify-content-end">
            <input type="text" name="search_table" class="form-control bg--white" placeholder="Search...">
            <button class="btn btn--primary input-group-text"><i class="fa fa-search"></i></button>
        </div>
    </div>
    </div>
</div>

                    <div class="row">
        <div class="col-md-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two custom-data-table">
                            <thead>
                                <tr>
                                    <th>Extension</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                                            <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb"><img src="http://localhost/p2pexchange/p2pexchange/assets/images/extensions/customcaptcha.png" alt="Custom Captcha" class="plugin_bg"></div>
                                            <span class="name">Custom Captcha</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span><span class="badge badge--warning">Disabled</span></span>                                    </td>
                                    <td>
                                        <div class="button--group">
                                            <button type="button" class="btn btn-sm btn-outline--primary ms-1 mb-2 editBtn"
                                                    data-name="Custom Captcha"
                                                    data-shortcode="{&quot;random_key&quot;:{&quot;title&quot;:&quot;Random String&quot;,&quot;value&quot;:&quot;SecureString&quot;}}"
                                                    data-action="http://localhost/p2pexchange/p2pexchange/admin/extensions/update/3">
                                                <i class="la la-cogs"></i> Configure                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline--dark ms-1 mb-2 helpBtn"
                                                    data-description="Just Put Any Random String"
                                                    data-support="na">
                                                <i class="la la-question"></i> Help                                            </button>
                                                                                            <button type="button"
                                                        class="btn btn-sm btn-outline--success ms-1 mb-2 confirmationBtn"
                                                        data-action="http://localhost/p2pexchange/p2pexchange/admin/extensions/status/3"
                                                        data-question="Are you sure to enable this extension?">
                                                    <i class="la la-eye"></i> Enable                                                </button>
                                                                                    </div>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb"><img src="http://localhost/p2pexchange/p2pexchange/assets/images/extensions/google_analytics.png" alt="Google Analytics" class="plugin_bg"></div>
                                            <span class="name">Google Analytics</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span><span class="badge badge--warning">Disabled</span></span>                                    </td>
                                    <td>
                                        <div class="button--group">
                                            <button type="button" class="btn btn-sm btn-outline--primary ms-1 mb-2 editBtn"
                                                    data-name="Google Analytics"
                                                    data-shortcode="{&quot;app_key&quot;:{&quot;title&quot;:&quot;App Key&quot;,&quot;value&quot;:&quot;------&quot;}}"
                                                    data-action="http://localhost/p2pexchange/p2pexchange/admin/extensions/update/4">
                                                <i class="la la-cogs"></i> Configure                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline--dark ms-1 mb-2 helpBtn"
                                                    data-description="Key location is shown bellow"
                                                    data-support="ganalytics.png">
                                                <i class="la la-question"></i> Help                                            </button>
                                                                                            <button type="button"
                                                        class="btn btn-sm btn-outline--success ms-1 mb-2 confirmationBtn"
                                                        data-action="http://localhost/p2pexchange/p2pexchange/admin/extensions/status/4"
                                                        data-question="Are you sure to enable this extension?">
                                                    <i class="la la-eye"></i> Enable                                                </button>
                                                                                    </div>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb"><img src="http://localhost/p2pexchange/p2pexchange/assets/images/extensions/recaptcha3.png" alt="Google Recaptcha 2" class="plugin_bg"></div>
                                            <span class="name">Google Recaptcha 2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span><span class="badge badge--warning">Disabled</span></span>                                    </td>
                                    <td>
                                        <div class="button--group">
                                            <button type="button" class="btn btn-sm btn-outline--primary ms-1 mb-2 editBtn"
                                                    data-name="Google Recaptcha 2"
                                                    data-shortcode="{&quot;site_key&quot;:{&quot;title&quot;:&quot;Site Key&quot;,&quot;value&quot;:&quot;6LdPC88fAAAAADQlUf_DV6Hrvgm-pZuLJFSLDOWV&quot;},&quot;secret_key&quot;:{&quot;title&quot;:&quot;Secret Key&quot;,&quot;value&quot;:&quot;6LdPC88fAAAAAG5SVaRYDnV2NpCrptLg2XLYKRKB&quot;}}"
                                                    data-action="http://localhost/p2pexchange/p2pexchange/admin/extensions/update/2">
                                                <i class="la la-cogs"></i> Configure                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline--dark ms-1 mb-2 helpBtn"
                                                    data-description="Key location is shown bellow"
                                                    data-support="recaptcha.png">
                                                <i class="la la-question"></i> Help                                            </button>
                                                                                            <button type="button"
                                                        class="btn btn-sm btn-outline--success ms-1 mb-2 confirmationBtn"
                                                        data-action="http://localhost/p2pexchange/p2pexchange/admin/extensions/status/2"
                                                        data-question="Are you sure to enable this extension?">
                                                    <i class="la la-eye"></i> Enable                                                </button>
                                                                                    </div>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb"><img src="http://localhost/p2pexchange/p2pexchange/assets/images/extensions/tawky_big.png" alt="Tawk.to" class="plugin_bg"></div>
                                            <span class="name">Tawk.to</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span><span class="badge badge--warning">Disabled</span></span>                                    </td>
                                    <td>
                                        <div class="button--group">
                                            <button type="button" class="btn btn-sm btn-outline--primary ms-1 mb-2 editBtn"
                                                    data-name="Tawk.to"
                                                    data-shortcode="{&quot;app_key&quot;:{&quot;title&quot;:&quot;App Key&quot;,&quot;value&quot;:&quot;------&quot;}}"
                                                    data-action="http://localhost/p2pexchange/p2pexchange/admin/extensions/update/1">
                                                <i class="la la-cogs"></i> Configure                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline--dark ms-1 mb-2 helpBtn"
                                                    data-description="Key location is shown bellow"
                                                    data-support="twak.png">
                                                <i class="la la-question"></i> Help                                            </button>
                                                                                            <button type="button"
                                                        class="btn btn-sm btn-outline--success ms-1 mb-2 confirmationBtn"
                                                        data-action="http://localhost/p2pexchange/p2pexchange/admin/extensions/status/1"
                                                        data-question="Are you sure to enable this extension?">
                                                    <i class="la la-eye"></i> Enable                                                </button>
                                                                                    </div>
                                    </td>
                                </tr>
                                                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
    <div id="editModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Extension: <span class="extension-name"></span></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form method="POST">
                    <input type="hidden" name="_token" value="iykhBNyYflf2iHFbGGmtUzt09Ed4qCyhnf74LWsK">                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-12 control-label fw-bold">Script</label>
                            <div class="col-md-12">
                                <textarea name="script" class="form-control" required rows="8" placeholder="Paste your script with proper key"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary w-100 h-45" id="editBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <div id="helpModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Need Help?</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="modal-body">

                </div>
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
                <input type="hidden" name="_token" value="iykhBNyYflf2iHFbGGmtUzt09Ed4qCyhnf74LWsK">                <div class="modal-body">
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
