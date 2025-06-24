@include('layouts.admin.header')

<!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">Language Manager</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            <button type="button" class="btn btn-sm btn-outline--primary" data-bs-toggle="modal" data-bs-target="#createModal"><i class="las la-plus"></i>Add New</button>
    <button type="button" class="btn btn-sm btn-outline--info keyBtn" data-bs-toggle="modal" data-bs-target="#getLangModal"><i class="las la-code"></i>Language Keywords</button>
    </div>
</div>

                    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card bl--5-primary">
                <div class="card-body">
                    <p class="text--primary">While you are adding a new keyword, it will only add to this current language only. Please be careful on entering a keyword, please make sure there is no extra space. It needs to be exact and case-sensitive.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two custom-data-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Default</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                                            <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb">
                                                <img  src="http://localhost/p2pexchange/p2pexchange/assets/images/language/6502fd2e3e1181694694702.png">
                                            </div>
                                            <span class="name">English</span>
                                        </div>
                                   </td>
                                    <td><strong>en</strong></td>
                                    <td>
                                                                                    <span class="badge badge--success">Default</span>
                                                                            </td>
                                    <td>
                                        <div class="button--group">
                                            <a href="http://localhost/p2pexchange/p2pexchange/admin/language/edit/1" class="btn btn-sm btn-outline--success">
                                                <i class="la la-language"></i> Translate                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline--primary ms-1 editBtn" data-url="http://localhost/p2pexchange/p2pexchange/admin/language/update/1" data-lang="{&quot;name&quot;:&quot;English&quot;,&quot;text_align&quot;:0,&quot;is_default&quot;:1}">
                                                <i class="la la-pen"></i> Edit                                            </a>
                                                                                    </div>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb">
                                                <img  src="http://localhost/p2pexchange/p2pexchange/placeholder-image/30x20">
                                            </div>
                                            <span class="name">中文</span>
                                        </div>
                                   </td>
                                    <td><strong>zh</strong></td>
                                    <td>
                                                                                    <span class="badge badge--warning">Selectable</span>
                                                                            </td>
                                    <td>
                                        <div class="button--group">
                                            <a href="http://localhost/p2pexchange/p2pexchange/admin/language/edit/2" class="btn btn-sm btn-outline--success">
                                                <i class="la la-language"></i> Translate                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline--primary ms-1 editBtn" data-url="http://localhost/p2pexchange/p2pexchange/admin/language/update/2" data-lang="{&quot;name&quot;:&quot;\u4e2d\u6587&quot;,&quot;text_align&quot;:0,&quot;is_default&quot;:0}">
                                                <i class="la la-pen"></i> Edit                                            </a>
                                                                                            <button class="btn btn-sm btn-outline--danger confirmationBtn" data-question="Are you sure to remove this language from this system?" data-action="http://localhost/p2pexchange/p2pexchange/admin/language/delete/2">
                                                    <i class="la la-trash"></i> Remove                                                </button>
                                                                                    </div>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb">
                                                <img  src="http://localhost/p2pexchange/p2pexchange/placeholder-image/30x20">
                                            </div>
                                            <span class="name">Bangla</span>
                                        </div>
                                   </td>
                                    <td><strong>bn</strong></td>
                                    <td>
                                                                                    <span class="badge badge--warning">Selectable</span>
                                                                            </td>
                                    <td>
                                        <div class="button--group">
                                            <a href="http://localhost/p2pexchange/p2pexchange/admin/language/edit/3" class="btn btn-sm btn-outline--success">
                                                <i class="la la-language"></i> Translate                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline--primary ms-1 editBtn" data-url="http://localhost/p2pexchange/p2pexchange/admin/language/update/3" data-lang="{&quot;name&quot;:&quot;Bangla&quot;,&quot;text_align&quot;:0,&quot;is_default&quot;:0}">
                                                <i class="la la-pen"></i> Edit                                            </a>
                                                                                            <button class="btn btn-sm btn-outline--danger confirmationBtn" data-question="Are you sure to remove this language from this system?" data-action="http://localhost/p2pexchange/p2pexchange/admin/language/delete/3">
                                                    <i class="la la-trash"></i> Remove                                                </button>
                                                                                    </div>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb">
                                                <img  src="http://localhost/p2pexchange/p2pexchange/placeholder-image/30x20">
                                            </div>
                                            <span class="name">Español</span>
                                        </div>
                                   </td>
                                    <td><strong>es</strong></td>
                                    <td>
                                                                                    <span class="badge badge--warning">Selectable</span>
                                                                            </td>
                                    <td>
                                        <div class="button--group">
                                            <a href="http://localhost/p2pexchange/p2pexchange/admin/language/edit/4" class="btn btn-sm btn-outline--success">
                                                <i class="la la-language"></i> Translate                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline--primary ms-1 editBtn" data-url="http://localhost/p2pexchange/p2pexchange/admin/language/update/4" data-lang="{&quot;name&quot;:&quot;Espa\u00f1ol&quot;,&quot;text_align&quot;:0,&quot;is_default&quot;:0}">
                                                <i class="la la-pen"></i> Edit                                            </a>
                                                                                            <button class="btn btn-sm btn-outline--danger confirmationBtn" data-question="Are you sure to remove this language from this system?" data-action="http://localhost/p2pexchange/p2pexchange/admin/language/delete/4">
                                                    <i class="la la-trash"></i> Remove                                                </button>
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



    
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="createModalLabel"> Add New Language</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                </div>
                <form class="form-horizontal" method="post" action="http://localhost/p2pexchange/p2pexchange/admin/language" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="iykhBNyYflf2iHFbGGmtUzt09Ed4qCyhnf74LWsK">                    <div class="modal-body">
                        <div class="row form-group">
                            <label>Language Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="" name="name" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label>Language Code</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="" name="code" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label>Flag</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control"  name="flag" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="inputName">Default Language</label>
                                <input type="checkbox" data-width="100%" data-height="40px" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-on="SET" data-off="UNSET" name="is_default">
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary w-100 h-45" id="btn-save" value="add">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editModalLabel">Edit Language</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="iykhBNyYflf2iHFbGGmtUzt09Ed4qCyhnf74LWsK">                    <div class="modal-body">
                        <div class="form-group">
                            <label>Language Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="" name="name" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label>Flag</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control"  name="flag" required>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="inputName">Default Language</label>
                            <input type="checkbox" data-width="100%" data-height="40px" data-onstyle="-success" data-offstyle="-danger" data-bs-toggle="toggle" data-on="SET" data-off="UNSET" name="is_default">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary w-100 h-45" id="btn-save" value="add">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="getLangModal" tabindex="-1" role="dialog" aria-labelledby="getLangModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="getLangModalLabel">Language Keywords</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                </div>
                <div class="modal-body">
                    <p class="mb-3">All of the possible language keywords are available here. However, some keywords may be missing due to variations in the database. If you encounter any missing keywords, you can add them manually.</p>
                    <p class="text--primary mb-3">You can import these keywords from the translate page of any language as well.</p>
                    <div class="form-group copy-texts-wrapper position-relative">
                        <div class="copy-texts">
                            <span class="copy">Copy</span>
                        </div>
                        <textarea name="" class="form-control langKeys key-added" id="langKeys" rows="25" readonly></textarea>
                    </div>
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
