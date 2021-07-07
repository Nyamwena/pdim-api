@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data table</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                <tr>
                                    <th># </th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Price</th>
                                    <th>Barcode</th>
                                    <th>Exipire Dare</th>
                                    <th>Manufacture Date</th>
                                    <th>Shelve Number</th>
                                    <th>Shelve Row</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($getProducts as $product ):
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->productName}}</td>
                                    <td>{{$product->productDescription}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->barcode}}</td>
                                    <td>{{$product->expiryDate}}</td>
                                    <td>{{$product->manufactureDate}}</td>
                                    <td>{{$product->shelveNumber}}</td>
                                    <td>{{$product->shelveRow}}</td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-outline-danger">Delete</button>

                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


@section('js')
            <script src="{{url('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
            <script src="{{url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
            <script src="{{url('assets/js/data-table.js')}}"></script>
@endsection
