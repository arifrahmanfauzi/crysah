@extends('layouts.layout')
@section('css')

@endsection
@section('sidebar')
<div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="../assets/img/Developer.png" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                {{ Auth::user()->name }}
                                <span class="user-level"></span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#profile">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="dashboard">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="/home">
                                        <span class="sub-item">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-credit-card"></i>
                            <p>Top Up</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ url('/deposit') }}">
                                        <span class="sub-item">TopUp</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#sidebarLayouts">
                            <i class="fab fa-cc-amazon-pay"></i>
                            <p>Transfer</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Transfer</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#forms">
                            <i class="fas fa-hand-holding-usd"></i>
                            <p>Withdraw</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">WidthDraw</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#tables">
                            <i class="fab fa-btc"></i>
                            <p>Exchange</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Exchange</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#maps">
                            <i class="fas fa-info-circle"></i>
                            <p>Information</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="maps">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Information</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>

@endsection
@section('main')
<div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <!-- Card -->
                <div class="page-header">
                    <h4 class="page-title">TopUp</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="fas fa-credit-card"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">TopUp</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-4 col-lg-6">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="icon-big text-center">
                                            <i class="fab fa-bitcoin"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-lg-10">
                                        <div class="numbers">
                                            <p class="card-category">Your Address</p>
                                            <h4 class="card-title">0x1332B04371C27C8E4c2689b9D743ad66c6f1d8e6</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-5">
                        <div class="card card-stats card-info card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="icon-big text-center">
                                            <i class="flaticon-interface-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-5 col-lg-10 bottom-1">
                                        <div class="numbers">
                                            <p class="card-category">Ammount</p>
                                            <input class="form-control" style="padding:1px; font-size:20px; font-style:bold" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="col-sm-6 col-md-3 col-lg-6">
                <div class="accordion accordion-secondary">
                    <div class="card">
                        <div
                            class="card-header"
                            id="headingOne"
                            data-toggle="collapse"
                            data-target="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne">
                            <div class="span-icon">
                                <div class="flaticon-box-1"></div>
                            </div>
                            <div class="span-title">
                                BCA
                            </div>
                            <div class="span-mode"></div>
                        </div>

                        <div
                            id="collapseOne"
                            class="collapse show"
                            aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                            <ul>

                                <li>Masukkan</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div
                            class="card-header collapsed"
                            id="headingTwo"
                            data-toggle="collapse"
                            data-target="#collapseTwo"
                            aria-expanded="false"
                            aria-controls="collapseTwo">
                            <div class="span-icon">
                                <div class="flaticon-box-1"></div>
                            </div>
                            <div class="span-title">
                                Mandiri
                            </div>
                            <div class="span-mode"></div>
                        </div>
                        <div
                            id="collapseTwo"
                            class="collapse"
                            aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div
                            class="card-header collapsed"
                            id="headingThree"
                            data-toggle="collapse"
                            data-target="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree">
                            <div class="span-icon">
                                <div class="flaticon-box-1"></div>
                            </div>
                            <div class="span-title">
                                BRI
                            </div>
                            <div class="span-mode"></div>
                        </div>
                        <div
                            id="collapseThree"
                            class="collapse"
                            aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
                </div>
            </div>
        </footer>
    </div>
@endsection
