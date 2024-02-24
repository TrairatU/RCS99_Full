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
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item active">
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
    <div class="card">
        <h5 class="card-header">Products</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{ route('admin.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i>
                เพิ่มข้อมูล</a>
            <table class="table mt-4">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>images</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>1</td>
                        <td>iphone 14 Pro Max</td>
                        <td>iphone.jpg</td>
                        <td>45,990 บาท</td>
                        <td>ผลิตโดยบริษัทแอปเปิ้ล</td>
                        <td>2022-07-25 12:46:29</td>
                        <td>2022-07-25 12:46:29</td>
                        <td>
                            <a href="#"><i class='bx bxs-edit'></i></a>
                            <a href="#"><i class='bx bx-trash'></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@endsection
