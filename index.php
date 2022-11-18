<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOS Finance</title>
    <link rel="stylesheet" href="/libs/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="/libs/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #F8FAFB;
        }
        .mh-100 {
            min-height: 100vh;
        }
        .br-4{
            border-radius: 4px;
        }
        .fs-12{
            font-size: 12px;
        }
        .fs-7 {
            font-size: 12px;
        }
        .float-top {
            float: right;
        }
        .aside-top {
            color: #FFAB2B;
            font-size: 20px;
            line-height: 24px;
        }
        .nav-link {
            color: #252631;
            font-size: 14px;
            line-height: 30px;
        }
        .product-add{
            font-size: 14px;
            color: #98A9BC;
        }
        .muted-color {
            color: #FFFFFF;
        }
        .active {
            background-color: #F8FAFB;
        }
        .border-end {
            border-right: 2px solid #E8ECEF;
        }
        .fs-16 {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <main class="">
        
        <section class="row gx-0">
            
            <aside class="col-3 bg-white mh-100 border-end">
                <div class="container">
                    <h1 class="mt-3 mb-3 ps-3 align-items-center aside-top">iOFINANCE</h1>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TRANSACTIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ACCOUNTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">PAYMENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">REPORTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SETTINGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">UI KIT</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-between m-2 product-add">
                    <span class="ms-2">Products</span>
                    <span class="me-2">
                     <i class="bi bi-plus-circle"></i>
                     <span>Add</span>
                    </span>
                </div>

                <div>
                    <div class="m-3">
                        Card xxxx-8004
                    </div>
                    <div class="m-3">
                        Card xxxx-1902
                    </div>
                    <div class="m-3">
                        Card xxxx-1804
                    </div>
                    <div class="m-3">
                        Bitcoin wallet
                    </div>
                </div>
            </aside>

            <section class="col-9 mh-100 d-flex flex-column justify-content-between">
                
                <header class="p-2 bg-white d-flex justify-content-between align-items-center"> 
                   
                    <div class="d-flex align-items-center">
                        <nav class="navbar navbar-light">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </nav>
                        <span class="fw-bold ms-2">Payments V2</span>
                    </div>

                    <span class="d-flex justify-content-between align-items-center me-4">
                        <span class="me-4"><i class="bi bi-search"></i></span>
                        <span class="me-4"><i class="bi bi-envelope"></i></span>
                        <span class="me-4"><i class="bi bi-bell-fill"></i></span>
                        <span class="me-4"><img src="/assets/imgs/proto.jpg" alt="Resfresh" class="img-top border border-2 rounded-circle" style = "width: 45px; height: 40px;"></span>
                        <span>Barry Armstrong</span>
                    </span> 
                </header>

                <main class="p-3">
                    <section class="card p-3 border-0">
                        <p>Saved templates</p>
                        <div class="d-flex text-center justify-content-around">
                            <div class="card" style="width:8rem;">
                                <div class="card-body">
                                    <p class="card-title fw-bold" style="font-size: 12px">NEW TEMPLATE</p>
                                </div>
                            </div>
                            <div class="card" style="width:8rem;">
                                <div class="card-body">
                                    <p class="card-title fw-bold" style="font-size: 12px">NEW TEMPLATE</p>
                                </div>
                            </div>
                            <div class="card" style="width:8rem;">
                                <div class="card-body">
                                    <p class="card-title fw-bold" style="font-size: 12px">NEW TEMPLATE</p>
                                </div>
                            </div>
                            <div class="card" style="width:8rem;">
                                <div class="card-body">
                                    <p class="card-title fw-bold" style="font-size: 12px">NEW TEMPLATE</p>
                                </div>
                            </div>
                            <div class="card" style="width:8rem;">
                                <div class="card-body">
                                    <p class="card-title fw-bold" style="font-size: 12px">NEW TEMPLATE</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="row my-4">
                        <div class="col-6">
                            <div class="bg-white p-3 br-4">
                                <div class="p-0 m-0 d-flex justify-content-between border-bottom">
                                    <p>Payment Providers</p> 
                                    <nav class="d-flex fs-12 text-uppercase">
                                        <span class="bi bi-search"></span>
                                        <span class="ps-1">find providers</span>
                                    </nav>
                                </div>

                                <div>
                                    <div class="border-bottom pt-2">
                                        <span class="d-flex justify-content-between">
                                            <span class="fw-bold fs-16"> Mobile Services </span>
                                            <span class="fw-bold">1-2%  <span class="text-muted fw-normal">...</span></span>
                                        </span>
                                        <div class="text-muted fs-7">Vodafone, O2,T-Mobile, Telia</div>
                                    </div>
                                    <div class="border-bottom">
                                        <span class="d-flex justify-content-between">
                                            <span class="fw-bold"> Transport </span>
                                            <span class="text-muted fw-normal">  ...</span>
                                        </span>
                                        <div class="text-muted fs-7">Uber, Gett, Lyft</div>
                                    </div>
                                    <div class="border-bottom">
                                        <span class="d-flex justify-content-between">
                                            <span class="fw-bold"> Ecommerce </span>
                                            <span class="fw-bold">1.5%  <span class="text-muted fw-normal">...</span></span>
                                        </span>
                                        <div class="text-muted fs-7">Ebay, Amazon, Aliexpress</div>
                                    </div>
                                    <div class="border-bottom">
                                        <span class="d-flex justify-content-between">
                                            <span class="fw-bold"> Utilities </span>
                                            <span class="fw-bold">1-2%  <span class="text-muted fw-normal">...</span></span>
                                        </span>
                                        <div class="text-muted fs-7">Water, gas, electricity, rent</div>
                                    </div>
                                    <div class="border-bottom">
                                        <span class="d-flex justify-content-between">
                                            <span class="fw-bold"> Electronic payments </span>
                                            <span class="fw-bold">3-4%  <span class="text-muted fw-normal">...</span></span>
                                        </span>
                                        <div class="text-muted fs-7">Paypal, Skrill, Payoneer</div>
                                    </div>
                                    <div class="pb-3 text-muted muted-color">
                                        <span class="d-flex justify-content-between">
                                            <span class="fw-bold"> Delivery services </span>
                                            <span class="text-muted fw-normal">...</span>
                                        </span>
                                        <div class="text-muted fs-7">Delivery Club, Uber Eats</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white p-3">jkklsdjksdksd</div>
                        </div>
                    </section>
                </main>


                <footer class="bg-white">
                    <span class="fs-6 text-muted ms-2">@ 2018 WhiteOnWhite - All Rights Reserved.</span>
                </footer>
            </section>
        </section>

    </main>
</body>
</html>