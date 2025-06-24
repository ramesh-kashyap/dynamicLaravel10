@include('layouts.admin.header')

<!-- navbar-wrapper end -->

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Email to Subscribers</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <a href="http://localhost/p2pexchange/admin/subscriber" class="btn btn-sm btn-outline--primary">
                    <i class="la la-undo"></i> Back</a>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <form action="http://localhost/p2pexchange/admin/subscriber/send-email" method="POST">
                        <input type="hidden" name="_token" value="IrQnk9Fv9UrISNltFfyg8fBQF94JeiK9knrbB2L0">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject" required value="" />
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Body</label>
                                    <textarea name="body" rows="10" class="form-control nicEdit"></textarea>
                                </div>
                            </div>
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