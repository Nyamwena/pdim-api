@section('css')
    <link rel="stylesheet" href="{{url('assets/vendors/jquery-tags-input/jquery.tagsinput.min.css')}}">
@endsection
@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Products</h4>
                        <form class="form-sample" name="pro" method="post" action="{{route('product.save')}}">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="pname"  required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" data-inputmask="'alias': 'currency'" name="price" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Barcode</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="barcode"  required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Qr Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="qrcode"  required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Expiry Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="expDate" data-inputmask="'alias': 'datetime'" data-inputmask-placeholder="*" data-inputmask-inputformat="dd/mm/yyyy" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Manufacture Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="manuDate" data-inputmask="'alias': 'datetime'" data-inputmask-placeholder="*" data-inputmask-inputformat="dd/mm/yyyy" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <p class="card-description">

                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Shelve Row</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="shelveRow"  required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Shelve Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="shelveNumber"  required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="category" required>
                                                <option value="">----Select-----</option>
                                                <option value="Foods">Foods</option>
                                                <option value="Beverages">Beverages</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Si Unit</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="siunit" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Colour</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="colour"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Product Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="description"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <button style="background-color: #0a58ca" class="form-control btn btn-primary" type="submit">Submit</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button style="background-color: red" class="form-control btn btn-danger" type="reset">Cancel</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@endsection
@section('js')
            <script src="{{url('assets/vendors/inputmask/jquery.inputmask.bundle.js')}}"></script>
            <script src="{{url('assets/js/inputmask.js')}}"></script>
@endsection
