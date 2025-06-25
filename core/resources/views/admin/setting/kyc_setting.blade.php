@include('layouts.admin.header')

<!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">KYC Setting</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                    <div class="row mb-none-30">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg--primary d-flex justify-content-between">
                    <h5 class="text-white">KYC Form for User</h5>
                    <button type="button" class="btn btn-sm btn-outline-light float-end form-generate-btn"> <i class="la la-fw la-plus"></i>Add New</button>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="_token" value="iykhBNyYflf2iHFbGGmtUzt09Ed4qCyhnf74LWsK">                        <div class="row addedField">
                                                    </div>
                        <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formGenerateModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Generate Form</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <i class="las la-times"></i>
          </button>
        </div>
        <form class="generate-form">
            <input type="hidden" name="_token" value="iykhBNyYflf2iHFbGGmtUzt09Ed4qCyhnf74LWsK">              <div class="modal-body">
                <input type="hidden" name="update_id" value="">
                <div class="form-group">
                    <label>Form Type</label>
                    <select name="form_type" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="text">Text</option>
                        <option value="textarea">Textarea</option>
                        <option value="select">Select</option>
                        <option value="checkbox">Checkbox</option>
                        <option value="radio">Radio</option>
                        <option value="file">File</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Is Required</label>
                    <select name="is_required" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="required">Required</option>
                        <option value="optional">Optional</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Form Label</label>
                    <input type="text" name="form_label" class="form-control" required>
                </div>
                <div class="form-group extra_area">

                </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn--primary w-100 h-45 generatorSubmit">Add</button>
              </div>
          </form>
      </div>
    </div>
</div>




            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>


@include('layouts.admin.footer')
