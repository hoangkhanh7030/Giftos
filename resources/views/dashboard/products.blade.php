@extends('dashboard.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/table-product.css') }}">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="ftco-section">
        <div class="row wrapper border-bottom white-bg">
            <div class="col-lg-10">
                <h2 class="pl-3">Products Management</h2>
                <ol class="breadcrumb">
                    <li class="pr-1">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        |
                    </li>
                    <li class="active pl-1">
                        <strong>Products</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Image Product</th>
                                    <th>Name Product</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="alert" role="alert">
                                    <td>
                                        <label class="checkbox-wrap checkbox-primary">
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="img" style="background-image: url(images/product-1.png);"></div>
                                    </td>
                                    <td>
                                        <div class="email">
                                            <span>Sneakers Shoes 2020 For Men </span>
                                            <span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
                                        </div>
                                    </td>
                                    <td>$44.99</td>
                                    <td>$44.99</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-primary">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
