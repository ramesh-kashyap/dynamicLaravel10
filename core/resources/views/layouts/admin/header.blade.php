<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMC P2P Exchange - Dashboard</title>

    <link rel="shortcut icon" type="image/png" href="http://localhost/p2pexchange/assets/images/logoIcon/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/p2pexchange/assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/p2pexchange/assets/admin/css/vendor/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="http://localhost/p2pexchange/assets/global/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/p2pexchange/assets/global/css/line-awesome.min.css">


    <link rel="stylesheet" href="http://localhost/p2pexchange/assets/admin/css/vendor/select2.min.css">
    <link rel="stylesheet" href="http://localhost/p2pexchange/assets/admin/css/app.css">

    <style>
        .copyInput {
            display: inline-block;
            line-height: 50px;
            position: absolute;
            top: 0;
            right: 0;
            width: 40px;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
            -webkit-transition: all .3s;
            -o-transition: all .3s;
            transition: all .3s;
        }

        .copied::after {
            position: absolute;
            top: 8px;
            right: 12%;
            width: 100px;
            display: block;
            content: "COPIED";
            font-size: 1em;
            padding: 5px 5px;
            color: #fff;
            background-color: #4634ff;
            border-radius: 3px;
            opacity: 0;
            will-change: opacity, transform;
            animation: showcopied 1.5s ease;
        }

        @keyframes showcopied {
            0% {
                opacity: 0;
                transform: translateX(100%);
            }

            50% {
                opacity: 0.7;
                transform: translateX(40%);
            }

            70% {
                opacity: 1;
                transform: translateX(0);
            }

            100% {
                opacity: 0;
            }
        }
    </style>
    <style>
        .bg--red-shade {
            background-color: #f3d6d6;
        }
    </style>
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        <div class="sidebar bg--dark">
            <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
            <div class="sidebar__inner">
                <div class="sidebar__logo">
                    <a href="/admin" class="sidebar__main-logo"><img src="http://localhost/p2pexchange/assets/images/logoIcon/logo.png" alt="image"></a>
                </div>

                <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item active">
                            <a href="http://localhost/p2pexchange/admin/dashboard" class="nav-link ">
                                <i class="menu-icon las la-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                          <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-users"></i>
                                <span class="menu-title">Activation </span>

                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/users/active" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Active Users</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/users/banned" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Pending Users</span>
                                        </a>
                                    </li>

                              


                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-users"></i>
                                <span class="menu-title">Users Management </span>

                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                      <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/users/active" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Total Users</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/users/active" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Active Users</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/users/banned" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Block Users</span>
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </li>
                        <!-- 
                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title">Manage Ads </span>
                    </a>
                    <div class="sidebar-submenu  ">
                        <ul>
                            <li class="sidebar-menu-item ">
                                <a href="http://localhost/p2pexchange/admin/limit" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Limit</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a href="http://localhost/p2pexchange/admin/advertisement" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Advertisements</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon las la-exchange-alt"></i>
                        <span class="menu-title">Manage Trades </span>
                                            </a>
                    <div class="sidebar-submenu  ">
                        <ul>


                            <li class="sidebar-menu-item ">
                                <a href="http://localhost/p2pexchange/admin/trade/running" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Running</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a href="http://localhost/p2pexchange/admin/trade/reported" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Reported</span>

                                                                    </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a href="http://localhost/p2pexchange/admin/trade/completed" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Completed</span>
                                </a>
                            </li>

                              <li class="sidebar-menu-item ">
                                <a href="http://localhost/p2pexchange/admin/trade" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">All</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                        <!-- <li class="sidebar-menu-item ">
                    <a href="http://localhost/p2pexchange/admin/crypto-currencies" class="nav-link ">
                        <i class="menu-icon lab la-bitcoin"></i>
                        <span class="menu-title">Crypto Currencies</span>
                    </a>
                </li> -->

                        <!-- <li class="sidebar-menu-item ">
                    <a href="http://localhost/p2pexchange/admin/fiat-currencies" class="nav-link ">
                        <i class="menu-icon las la-coins"></i>
                        <span class="menu-title">Fiat Currencies</span>
                    </a>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="http://localhost/p2pexchange/admin/fiat-gateways" class="nav-link ">
                        <i class="menu-icon las la-wallet"></i>
                        <span class="menu-title">Fiat Gateways</span>
                    </a>
                </li> -->

                        <!-- <li class="sidebar-menu-item ">
                    <a href="http://localhost/p2pexchange/admin/payment-window" class="nav-link ">
                        <i class="menu-icon las la-stopwatch"></i>
                        <span class="menu-title">Payment Windows</span>
                    </a>
                </li> -->
                               <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/log" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">User Activatation</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/log" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Add Content</span>
                                        </a>
                                    </li>

                       <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-bank"></i>
                                <span class="menu-title">Deposit </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/pending" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Pending Deposit</span>

                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/approved" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Approved Deposit</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/rejected" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Rejected Deposit</span>
                                        </a>
                                    </li>

                                    


                                </ul>
                            </div>
                        </li>
   <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-bank"></i>
                                <span class="menu-title">Profit Summary </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/pending" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Staking Income</span>

                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/approved" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Direct Income</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/rejected" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Level Income</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/log" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Roi Income</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-bank"></i>
                                <span class="menu-title">Withdrawals </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/pending" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Pending Withdrawals</span>

                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/approved" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Approved Withdrawals</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/rejected" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Rejected Withdrawals</span>
                                        </a>
                                    </li>

                                    <!-- <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/withdraw/log" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Withdrawals</span>
                                        </a>
                                    </li> -->


                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-ticket"></i>
                                <span class="menu-title">Support Ticket </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/ticket/pending" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Pending Ticket</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/ticket/closed" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Closed Ticket</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/ticket/answered" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Answered Ticket</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/ticket" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Ticket</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- 
                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title">Report </span>
                    </a>
                    <div class="sidebar-submenu  ">
                        <ul>
                            <li class="sidebar-menu-item ">
                                <a href="http://localhost/p2pexchange/admin/report/transaction" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Transaction Log</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a href="http://localhost/p2pexchange/admin/report/login/history" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Login History</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a href="http://localhost/p2pexchange/admin/report/notification/history" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Notification History</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> -->

                        <!-- <li class="sidebar-menu-item  ">
                    <a href="http://localhost/p2pexchange/admin/subscriber" class="nav-link"
                       data-default-url="http://localhost/p2pexchange/admin/subscriber">
                        <i class="menu-icon las la-thumbs-up"></i>
                        <span class="menu-title">Subscribers </span>
                    </a>
                </li>
                 -->

                        <li class="sidebar__menu-header">Settings</li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/general-setting" class="nav-link">
                                <i class="menu-icon las la-life-ring"></i>
                                <span class="menu-title">General Setting</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/setting/system-configuration" class="nav-link">
                                <i class="menu-icon las la-cog"></i>
                                <span class="menu-title">System Configuration</span>
                            </a>
                        </li>


                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/cron/index" class="nav-link">
                                <i class="menu-icon las la-clock"></i>
                                <span class="menu-title">Cron Job Setting</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/api-setting" class="nav-link">
                                <i class="menu-icon las la-cogs"></i>
                                <span class="menu-title">Api Setting</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/referral" class="nav-link ">
                                <i class="menu-icon las la-sitemap"></i>
                                <span class="menu-title">Referral Setting</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/setting/logo-icon" class="nav-link">
                                <i class="menu-icon las la-images"></i>
                                <span class="menu-title">Logo & Favicon</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/extensions" class="nav-link">
                                <i class="menu-icon las la-cogs"></i>
                                <span class="menu-title">Extensions</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item  ">
                            <a href="http://localhost/p2pexchange/admin/language" class="nav-link"
                                data-default-url="http://localhost/p2pexchange/admin/language">
                                <i class="menu-icon las la-language"></i>
                                <span class="menu-title">Language </span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/seo" class="nav-link">
                                <i class="menu-icon las la-globe"></i>
                                <span class="menu-title">SEO Manager</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/kyc-setting" class="nav-link">
                                <i class="menu-icon las la-user-check"></i>
                                <span class="menu-title">KYC Setting</span>
                            </a>
                        </li>


                        <!-- <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-bell"></i>
                                <span class="menu-title">Notification Setting</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/notification/global" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Global Template</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/notification/email/setting" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Email Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/notification/sms/setting" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">SMS Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/notification/push-notification/setting" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Push Notification Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/notification/templates" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Notification Templates</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar__menu-header">Frontend Manager</li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/frontend/templates" class="nav-link ">
                                <i class="menu-icon la la-puzzle-piece"></i>
                                <span class="menu-title">Manage Templates</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/frontend/manage-pages" class="nav-link ">
                                <i class="menu-icon la la-list"></i>
                                <span class="menu-title">Manage Pages</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-html5"></i>
                                <span class="menu-title">Manage Section</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/advertisement" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Advertisement Page</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/banner" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Banner Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/breadcrumb" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/buy" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Buy Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/choose_us" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Why Choose Us</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/contact" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Contact Page</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/faq" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">FAQ Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/footer" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Footer Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/kyc" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">KYC Message</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/login" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Login Page</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/offer" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Offer Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/overview" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Overview Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/policy_pages" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Policy Pages</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/registration" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Registration Page</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/sell" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Sell Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/social_icon" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Social Icons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/subscribe" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Subscribe Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="http://localhost/p2pexchange/admin/frontend/frontend-sections/testimonial" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Testimonial Section</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->

                        <li class="sidebar__menu-header">Extra</li>

<!-- 
                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/maintenance-mode" class="nav-link">
                                <i class="menu-icon las la-robot"></i>
                                <span class="menu-title">Maintenance Mode</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/cookie" class="nav-link">
                                <i class="menu-icon las la-cookie-bite"></i>
                                <span class="menu-title">GDPR Cookie</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-server"></i>
                                <span class="menu-title">System</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/system/info" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Application</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/system/server-info" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Server</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/system/optimize" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Cache</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="http://localhost/p2pexchange/admin/system/system-update" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Update</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->

                        <li class="sidebar-menu-item ">
                            <a href="http://localhost/p2pexchange/admin/custom-css" class="nav-link">
                                <i class="menu-icon lab la-css3-alt"></i>
                                <span class="menu-title">Change Password</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item  ">
                            <a href="http://localhost/p2pexchange/admin/request-report" class="nav-link"
                                data-default-url="http://localhost/p2pexchange/admin/request-report">
                                <i class="menu-icon las la-bug"></i>
                                <span class="menu-title">Logout </span>
                            </a>
                        </li>
                    </ul>
                    <div class="text-center mb-3 text-uppercase">
                        <span class="text--primary">localcoins</span>
                        <span class="text--success">V2.2 </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        <nav class="navbar-wrapper bg--dark">
            <div class="navbar__left">
                <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
                <form class="navbar-search">
                    <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                        placeholder="Search here...">
                    <i class="las la-search"></i>
                    <ul class="search-list"></ul>
                </form>
            </div>
            <div class="navbar__right">
                <ul class="navbar__action-list">

                    <li class="dropdown">
                        <button type="button" class="primary--layer" data-bs-toggle="dropdown" data-display="static"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="las la-bell text--primary "></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                            <div class="dropdown-menu__header">
                                <span class="caption">Notification</span>
                                <p>No unread notification found</p>
                            </div>
                            <div class="dropdown-menu__body">
                            </div>
                            <div class="dropdown-menu__footer">
                                <a href="http://localhost/p2pexchange/admin/notifications"
                                    class="view-all-message">View all notification</a>
                            </div>
                        </div>
                    </li>


                    <li class="dropdown">
                        <button type="button" class="" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="navbar-user">
                                <span class="navbar-user__thumb"><img
                                        src="http://localhost/p2pexchange/assets/images/default.png"
                                        alt="image"></span>
                                <span class="navbar-user__info">
                                    <span
                                        class="navbar-user__name">admin</span>
                                </span>
                                <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                            <a href="http://localhost/p2pexchange/admin/profile"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-user-circle"></i>
                                <span class="dropdown-menu__caption">Profile</span>
                            </a>

                            <a href="http://localhost/p2pexchange/admin/password"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-key"></i>
                                <span class="dropdown-menu__caption">Password</span>
                            </a>
                            <a href="{{ route('admin.logout') }}" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>




                        </div>
                    </li>
                </ul>
            </div>
        </nav>