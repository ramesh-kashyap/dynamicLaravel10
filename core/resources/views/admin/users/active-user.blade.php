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
            <h6 class="page-title">Active User </h6>
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
                <div class="card b-radius--10">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table--light style--two">
                                <thead>
                                    <tr>
                                        <th>S NO.</th>
                                        <th>User Name</th>
                                        <th>User Id</th>
                                        <th>Email ID</th>

                                        <!-- <th>Mobile No.</th> -->
                                        <!--<th>Rank</th>-->
                                        <th>Joining Date</th>
                                        <th>Activation Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $sr = ($deposit_list->currentPage() - 1) * $deposit_list->perPage() + 1;
                                    @endphp

                                    @forelse($deposit_list as $value)
                                    <tr>
                                        <td>{{ $sr++ }}</td>
                                        <td>{{ $value->name ?? 'N/A' }}</td>
                                        <td>{{ $value->username }}</td>
                                        <td>{{ $value->email }}</td>
                                        <!-- <td>{{ $value->phone }}</td> -->
                                        <td>{{ $value->jdate }}</td>
                                        <td>{{ $value->adate }}</td>
                                        <td>
                                            {{ $value->active_status == 'Active' ? 'Activation' : 'Renewal' }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-muted text-center" colspan="100%">Data not found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="custom-pagination text-center mt-4">
                    {{ $deposit_list->onEachSide(1)->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>
    </div>
</div>


@include('layouts.admin.footer')