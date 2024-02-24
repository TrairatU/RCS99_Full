@extends('layouts.master_backend')

@section('sidebar')

<div>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('backend/assets/img/logoicon.png') }}" alt="">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">
                IT Shop
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.product') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                <div data-i18n="Analytics">Product</div>
            </a>
        </li>

    </ul>

</aside>
</div>
@endsection

@section('con')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="col-lg-12 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success" class="rounded" />
                            </div>

                        </div>
                        <span class="fw-semibold d-block mb-1">User</span>
                        <h3 class="card-title mb-2"> 2 คน</h3>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success" class="rounded" />
                            </div>

                        </div>
                        <span class="fw-semibold d-block mb-1">Category</span>
                        <h3 class="card-title mb-2"> 5 ประเภท</h3>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success" class="rounded" />
                            </div>

                        </div>
                        <span class="fw-semibold d-block mb-1">Product</span>
                        <h3 class="card-title mb-2"> 10 ชิ้น</h3>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

@endsection
