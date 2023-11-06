
@extends('productinfos.layout')
@section('content')



<div class="row justify-content-center mt-3">

    <div class="col-md-8">



        @if ($message = Session::get('success'))

            <div class="alert alert-success" role="alert">

                {{ $message }}

            </div>

        @endif



        <div class="card">

            <div class="card-header">

                <div class="float-start">

                    Edit Product

                </div>

                <div class="float-end">

                    <a href="{{ route('productinfos.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>

                </div>

            </div>

            <div class="card-body">

                <form action="{{ route('productinfos.update', $productinfos->id) }}" method="post">

                    @csrf

                    @method("PUT")



                    <div class="mb-3 row">

                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">Code</label>

                        <div class="col-md-6">

                          <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $productinfos->code }}">

                            @if ($errors->has('code'))

                                <span class="text-danger">{{ $errors->first('code') }}</span>

                            @endif

                        </div>

                    </div>



                    <div class="mb-3 row">

                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>

                        <div class="col-md-6">

                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $productinfos->name }}">

                            @if ($errors->has('name'))

                                <span class="text-danger">{{ $errors->first('name') }}</span>

                            @endif

                        </div>

                    </div>



                    <div class="mb-3 row">

                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start">Quantity</label>

                        <div class="col-md-6">

                          <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ $productinfos->quantity }}">

                            @if ($errors->has('quantity'))

                                <span class="text-danger">{{ $errors->first('quantity') }}</span>

                            @endif

                        </div>

                    </div>



                    <div class="mb-3 row">

                        <label for="price" class="col-md-4 col-form-label text-md-end text-start">Price</label>

                        <div class="col-md-6">

                          <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $productinfos->price }}">

                            @if ($errors->has('price'))

                                <span class="text-danger">{{ $errors->first('price') }}</span>

                            @endif

                        </div>

                    </div>



                    <div class="mb-3 row">

                        <label for="productdescription" class="col-md-4 col-form-label text-md-end text-start">Description</label>

                        <div class="col-md-6">

                            <textarea class="form-control @error('productdescription') is-invalid @enderror" id="productdescription" name="productdescription">{{ $productinfos->productdescription }}</textarea>

                            @if ($errors->has('productdescription'))

                                <span class="text-danger">{{ $errors->first('productdescription') }}</span>

                            @endif

                        </div>

                    </div>



                    <div class="mb-3 row">

                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">

                    </div>



                </form>

            </div>

        </div>

    </div>

</div>



@endsection