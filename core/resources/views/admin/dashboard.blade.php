<!-- navbar-wrapper end -->
@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Dashboard</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-12">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">
                        <h3 class="card-title"> New Version Available <button class="btn btn--dark float-end">Version 3.2.1</button> </h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-dark">What is the Update?</h5>
                        <p>
                        <pre class="f-size--24"></pre>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->



        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-4">
                <div class="card bg--primary overflow-hidden box--shadow2">
                    <a href="{{ route('admin.users.all') }}" class="item-link"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="la las la-users f-size--56 f-size--56 text--white"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--white text--small">Total Users</span>
                                <h2 class="text--white">{{\App\Models\User::count()}}</h2>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-xxl-3 col-sm-4">
                <div class="card bg--success overflow-hidden box--shadow2">
                    <a href="http://localhost/p2pexchange/admin/users/active" class="item-link"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="la las la-user-check f-size--56 f-size--56 text--white"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--white text--small">Active Users</span>
                                <h2 class="text--white">{{\App\Models\User::where('active_status','Active')->count()}}</h2>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-xxl-3 col-sm-4">
                <div class="card bg--success overflow-hidden box--shadow2">
                    <a href="http://localhost/p2pexchange/admin/users/active" class="item-link"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="la las la-user-check f-size--56 f-size--56 text--white"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--white text--small">Active Users</span>
                                <h2 class="text--white">{{\App\Models\User::where('active_status','Active')->count()}}</h2>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- row end-->

        <div class="row gy-4 mt-2">
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--primary">
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="lar la-credit-card"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white"> {{ number_format((\App\Models\Withdraw::where('status','Approved')->sum('amount')),2)   }}</h3>
                        <p class="text-white">Approved Withdrawal</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/withdraw/log" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--warning">
                    <div class="widget-two__icon b-radius--5 bg--warning">
                        <i class="las la-sync"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Withdraw::where('status','Pending')->sum('amount')),2)   }}</h3>
                        <p class="text-white">Pending Withdrawals</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/withdraw/pending" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--red">
                    <div class="widget-two__icon b-radius--5 bg--red">
                        <i class="las la-times-circle"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Withdraw::where('status','Failed')->sum('amount')),2)   }}</h3>
                        <p class="text-white">Rejected Withdrawals</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/withdraw/rejected" class="widget-two__btn">View All</a>
                </div>
            </div>

        </div><!-- row end-->

        <!-- <div class="row gy-4 mt-2">
            <div class="col-md-12">
                <h4>Deposit Summary</h4>
            </div>
        </div> -->
        <div class="row gy-4 mt-2">
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--19">
                    <div class="widget-two__icon b-radius--5 bg--19">
                        <i class="lab la-adversal"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Investment::where('status', '!=', 'Decline')->sum('amount')), 2) }}</h3>
                        <p class="text-white">Total Investment</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/advertisement" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--primary">
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="las la-exchange-alt"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Investment::where('status', 'Active')->sum('amount')), 2) }}</h3>
                        <p class="text-white">Approve Investment </p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/trade" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--1">
                    <div class="widget-two__icon b-radius--5 bg--1">
                        <i class="lab la-bitcoin"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Investment::where('status', 'Pending')->sum('amount')), 2) }}</h3>
                        <p class="text-white">Pending Investment </p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/crypto-currencies" class="widget-two__btn">View All</a>
                </div>
            </div>

        </div>
        <div class="row gy-4 mt-2">

            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--19">
                    <div class="widget-two__icon b-radius--5 bg--19">
                        <i class="la la-bank"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">
                            {{ number_format((\App\Models\Withdraw::where('status', '!=', 'Failed')->sum('amount')), 2) }}
                        </h3>
                        <p class="text-white">Total Withdrawals</p>
                    </div>

                    <a href="http://localhost/p2pexchange/admin/withdraw/log" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--success">
                    <div class="widget-two__icon b-radius--5 bg--success">
                        <i class="las la-coins"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Investment::where('status', 'Decline')->sum('amount')), 2) }}</h3>
                        <p class="text-white">Reject Investment</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/fiat-currencies" class="widget-two__btn">View All</a>
                </div>
            </div>
                <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--19">
                    <div class="widget-two__icon b-radius--5 bg--19">
                        <i class="lab la-adversal"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Income::where('remarks', 'Roi Bonus')->sum('comm')), 2) }}</h3>
                        <p class="text-white">Roi Incomes</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/advertisement" class="widget-two__btn">View All</a>
                </div>
            </div>
        </div>

        <!-- row end-->

      

        <div class="row gy-4 mt-2">
        
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--primary">
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="las la-exchange-alt"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Income::where('remarks', 'Level Bonus')->sum('comm')), 2) }}</h3>
                        <p class="text-white">Level Incomes </p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/trade" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--1">
                    <div class="widget-two__icon b-radius--5 bg--1">
                        <i class="lab la-bitcoin"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Income::where('remarks', 'Direct Bonus')->sum('comm')), 2) }}</h3>
                        <p class="text-white">Direct Incomes </p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/crypto-currencies" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-4">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--success">
                    <div class="widget-two__icon b-radius--5 bg--success">
                        <i class="las la-coins"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">{{ number_format((\App\Models\Income::where('remarks', 'Royalty Bonus')->sum('comm')), 2) }}</h3>
                        <p class="text-white">Royalty Incomes</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/fiat-currencies" class="widget-two__btn">View All</a>
                </div>
            </div>
        </div><!-- row end-->








    </div><!-- bodywrapper__inner end -->
</div><!-- body-wrapper end -->
</div>
@include('layouts.admin.footer')