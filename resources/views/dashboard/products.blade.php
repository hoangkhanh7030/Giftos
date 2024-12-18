@extends('dashboard.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/table-product.css') }}">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="ftco-section">
        <div class="container mt-4">
            <div class="filter d-flex justify-content-end"><a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a></div>
            <div class="row mt-3">
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
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr class="alert" role="alert">
                                    <td>
                                        <label class="checkbox-wrap checkbox-primary">
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <img src="{{ $product->image }}" alt="" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <div class="name">
                                            <span>{{ $product->product_name }}</span>
                                        </div>
                                    </td>
                                    <td style="width: 250px;">{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->status->name }}</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-primary">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
