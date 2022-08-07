@extends('admin.app')
@section('title', "Dashboard Admin")

@section('main-content')
<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">



            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <h4>Total Lowongan Internship</h4>
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-clipboard">
                                            <path
                                                d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                            </path>
                                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">31.6K</p>
                                        <h5 class="">Lowongan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="w-btn">
                                    <a href="#" class="btn">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <h4>Total Pendaftar Internship</h4>
                                <div class="w-title">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">31.6K</p>
                                        <h5 class="">Pendaftar</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="w-btn">
                                    <a href="#" class="btn">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--  BEGIN FOOTER PART  -->
    @include('admin.layouts._footer')
    <!--  BEGIN CONTENT PART  -->

</div>
<!--  END CONTENT PART  -->
@endsection
