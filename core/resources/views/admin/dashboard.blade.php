<!-- navbar-wrapper end -->
@include('layouts.admin.header')

<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Dashboard</h6>
            <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
        </div>

        <div class="row">
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
        </div>



        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6">
                <div class="card bg--primary overflow-hidden box--shadow2">
                    <a href="http://localhost/p2pexchange/admin/users" class="item-link"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="la las la-users f-size--56 f-size--56 text--white"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--white text--small">Total Users</span>
                                <h2 class="text--white">0</h2>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="card bg--success overflow-hidden box--shadow2">
                    <a href="http://localhost/p2pexchange/admin/users/active" class="item-link"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="la las la-user-check f-size--56 f-size--56 text--white"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--white text--small">Active Users</span>
                                <h2 class="text--white">0</h2>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="card bg--danger overflow-hidden box--shadow2">
                    <a href="http://localhost/p2pexchange/admin/users/email-unverified" class="item-link"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="la lar la-envelope f-size--56 f-size--56 text--white"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--white text--small">Email Unverified Users</span>
                                <h2 class="text--white">0</h2>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="card bg--red overflow-hidden box--shadow2">
                    <a href="http://localhost/p2pexchange/admin/users/mobile-unverified" class="item-link"></a>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <i class="la las la-comment-slash f-size--56 f-size--56 text--white"></i>
                            </div>
                            <div class="col-8 text-end">
                                <span class="text--white text--small">Mobile Unverified Users</span>
                                <h2 class="text--white">0</h2>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- row end-->

        <div class="row gy-4 mt-2">
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--primary">
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="lar la-credit-card"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">0</h3>
                        <p class="text-white">Approved Withdrawal</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/withdraw/log" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--warning">
                    <div class="widget-two__icon b-radius--5 bg--warning">
                        <i class="las la-sync"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">0</h3>
                        <p class="text-white">Pending Withdrawals</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/withdraw/pending" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--red">
                    <div class="widget-two__icon b-radius--5 bg--red">
                        <i class="las la-times-circle"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">0</h3>
                        <p class="text-white">Rejected Withdrawals</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/withdraw/rejected" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--19">
                    <div class="widget-two__icon b-radius--5 bg--19">
                        <i class="la la-bank"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">0</h3>
                        <p class="text-white">Total Withdrawals</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/withdraw/log" class="widget-two__btn">View All</a>
                </div>
            </div>
        </div><!-- row end-->

        <div class="row gy-4 mt-2">
            <div class="col-md-12">
                <h4>Deposit Summary</h4>
            </div>
        </div>

        <div class="row gy-4 mt-2">
        </div>

        <div class="row gy-4 mt-2">
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--19">
                    <div class="widget-two__icon b-radius--5 bg--19">
                        <i class="lab la-adversal"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">0</h3>
                        <p class="text-white">Total Adveretisements</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/advertisement" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--primary">
                    <div class="widget-two__icon b-radius--5 bg--primary">
                        <i class="las la-exchange-alt"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">0</h3>
                        <p class="text-white">Total Trades</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/trade" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--1">
                    <div class="widget-two__icon b-radius--5 bg--1">
                        <i class="lab la-bitcoin"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">0</h3>
                        <p class="text-white">Total Cryptocurrency</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/crypto-currencies" class="widget-two__btn">View All</a>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="widget-two style--two box--shadow2 b-radius--5 bg--success">
                    <div class="widget-two__icon b-radius--5 bg--success">
                        <i class="las la-coins"></i>
                    </div>

                    <div class="widget-two__content">
                        <h3 class="text-white">0</h3>
                        <p class="text-white">Total Fiat Currency</p>
                    </div>
                    <a href="http://localhost/p2pexchange/admin/fiat-currencies" class="widget-two__btn">View All</a>
                </div>
            </div>
        </div><!-- row end-->

        <div class="row gy-4 mt-2">
            <div class="col-md-12">
                <h4>Withdrawal Summary</h4>
            </div>
        </div>

        <div class="row gy-4 mt-2">
        </div>

        <div class="row mb-none-30 mt-5">
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h5 class="card-title">Login By Browser (Last 30 days)</h5>
                        <canvas id="userBrowserChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login By OS (Last 30 days)</h5>
                        <canvas id="userOsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login By Country (Last 30 days)</h5>
                        <canvas id="userCountryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="cronModal" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Please Set Cron Job Now</h5>
                        <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button">
                            <i class="las la-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group text-center border-bottom mb-4">
                            <div class="text--primary">
                                <i class="las la-info-circle"></i>
                                Set the Cron time ASAP
                            </div>
                            <p class="fst-italic">
                                Once per 5-15 minutes is ideal while once every minute is the best option </p>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="justify-content-between d-flex flex-wrap">
                                        <div>
                                            <label class="fw-bold">Cron Command</label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control form-control-lg" id="cron" readonly type="text" value="curl -s http://localhost/p2pexchange/cron">
                                        <button class="input-group-text copytext btn--primary copyCronPath border--primary" data-id="cron" type="button"> Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cronModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cron Job Setting Instruction</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="las la-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-center border-bottom mb-4">
                                    <div class="text--primary">
                                        <i class="las la-info-circle"></i>
                                        Set the Cron time ASAP
                                    </div>
                                    <p class="fst-italic">
                                        Once per 5-15 minutes is ideal while once every minute is the best option </p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Cron Command</label>
                                <div class="input-group">
                                    <input type="text" class="form-control copyText" value="curl -s http://localhost/p2pexchange/cron"
                                        readonly>
                                    <button class="input-group-text btn--primary copyBtn border-0"> COPY</button>
                                </div>
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