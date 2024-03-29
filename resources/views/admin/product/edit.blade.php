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
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-9">
                <h5 class="card-header">Edit Product</h5>
                <div class="card-body">
                    <form action="{{ url('admin/product/update/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                        <label for="defaultFormControlInput" class="form-label">ชื่อสินค้า</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-2" id="defaultFormControlInput"
                            placeholder="กรุณากรอกชื่อสินค้า" aria-describedby="defaultFormControlHelp" />
                            <div class="mt-1">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                        <label for="defaultFormControlInput" class="form-label">ราคา</label>
                        <input type="text" name="price" value="{{ $product->price }}" class="form-control mb-2" id="defaultFormControlInput"
                            placeholder="กรุณากรอกราคาสินค้า" aria-describedby="defaultFormControlHelp" />
                            <div class="mt-1">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                        <label for="defaultFormControlInput" class="form-label">รายละเอียด</label>
                        <input type="text" name="description" value="{{ $product->description }}" class="form-control mb-2" id="defaultFormControlInput"
                            placeholder="กรุณากรอกรายละเอียดสินค้า" aria-describedby="defaultFormControlHelp" />
                            <div class="mt-1">
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                        <label for="defaultFormControlInput" class="form-label">รูปภาพ</label>
                        <div class="input-group mb-2">
                            <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                            <label class="input-group-text" for="inputGroupFile02">อัพโหลด</label>
                        </div>
                            <div class="mt-1">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        <div class="mt-3">
                            <img src="{{ asset('backend/upload/resize/'.$product->image) }}" alt="">
                        </div>

                        <input type="submit" value="อัพเดท" class="btn btn-primary mt-3">
                        <a href="{{ route('admin.product') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
