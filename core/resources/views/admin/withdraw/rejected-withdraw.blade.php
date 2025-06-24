@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Rejected Withdrawals</h6>
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
            <div class="col-lg-12">
                <div class="card b-radius--10 ">
                    <div class="card-body p-0">
                        <div class="table-responsive--sm table-responsive">
                            <table class="table table--light style--two">
                                <thead>
                                    <tr>
                                 <th>S NO.</th>


                                        <th>Name</th>
                                        <th>User ID</th>
                                        <th>Request Amount</th>


                                        <th>Payment Mode.</th>
                                        <th>Transaction Date.</th>
                                        <th>Payment Address</th>
                        
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tbody>
                                    <tr>
                                         <td>
                                            1
                                        </td>
                                        <td>
                                            <span>Raj Kashyap</span>
                                            <br>
                                            <span class="small">
                                                <a href="http://localhost/p2pexchange/p2pexchange/admin/users/detail/4"><span>@</span>rajksp</a>
                                            </span>
                                        </td>

                                        <td>
                                            rajksp@gmail.com<br>918034561772
                                        </td>
                                        <td>
                                            <span title="India">IN</span>
                                        </td>

                                        <td>
                                            2024-04-24 11:59 AM <br> 1 year ago
                                        </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="http://localhost/p2pexchange/p2pexchange/admin/users/detail/4" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-desktop"></i> Details </a>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            <span>Pawan Sehrawat</span>
                                            <br>
                                            <span class="small">
                                                <a href="http://localhost/p2pexchange/p2pexchange/admin/users/detail/3"><span>@</span>pawan5335</a>
                                            </span>
                                        </td>

                                        <td>
                                            sehrawat.pawan5335@gmail.com<br>9109599649564
                                        </td>
                                        <td>
                                            <span title="India">IN</span>
                                        </td>

                                        <td>
                                            2024-04-21 01:42 PM <br> 1 year ago
                                        </td>
                                        <td>
                                            <div class="button--group">
                                                <a href="http://localhost/p2pexchange/p2pexchange/admin/users/detail/3" class="btn btn-sm btn-outline--primary">
                                                    <i class="las la-desktop"></i> Details </a>
                                            </div>
                                        </td>

                                    </tr>
                              

                                </tbody>
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