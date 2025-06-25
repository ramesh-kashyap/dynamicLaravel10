@include('layouts.admin.header')
<style>
    .table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

    </style>
<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Pending Deposit </h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                <form action="" method="GET" class="d-flex flex-wrap gap-2">
                    <div class="input-group w-auto flex-fill">
                        <input type="search" name="search" class="form-control bg--white" placeholder="Search..." value="">
                        <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                    </div>
                    <div class="input-group w-auto flex-fill">
                        <input name="date" type="search" data-range="true" data-multiple-dates-separator=" - " data-language="en" data-format="Y-m-d" class="datepicker-here form-control bg--white pe-2" data-position='bottom right' placeholder="Start Date - End Date" autocomplete="off" value="">
                        <button class="btn btn--primary input-group-text"><i class="la la-search"></i></button>
                    </div>


                </form>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card b-radius--10">
                    <div class="card-body p-0">
<div class="table-responsive">
                            <table class="table table--light style--two">
                                <thead>
                                    <tr>
                                        <th>S NO.</th>
                                        <th>User Name</th>
                                        <th>User Id</th>
                                        <th>Amount</th>
                                        <th>Transaction Date.</th>

                                        <th>Transaction ID</th>

                                        <th>Status</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    <tr>
                                         <td>
                                            1
                                        </td>
                                        <td>
                                            <span>Raj Kashyap</span>
                                           
                                        </td>
                                         <td>
                                            www101
                                        </td>

                                        <td>
                                            100
                                        </td>
                                       

                                        <td>
                                            2024-04-24 11:59 AM <br> 1 year ago
                                        </td>
                                         <td>
                                            <span title="India">ruefjdsf22</span>
                                        </td>
                                         <td>
                                            <span title="India">Pending</span>
                                        </td>

                                    </tr>
                                   
                              

                                </tbody>
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