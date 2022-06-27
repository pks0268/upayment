@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-md-3">
                <div class="card">
                    <div class="card-header fw-bold">
                        {{ __('Add New Product') }}
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-md-3">
                @if (session()->has('status'))
                    @if (session()->get('status') == false)
                    <div class="alert alert-danger">{{ session()->get('message') }}</div>
                    @endif

                    @if (session()->get('status') == true)
                    <div class="alert alert-success">{{ session()->get('message') }}</div>
                    @endif
                @endif

            <form method="post" action="{{route('products')}}" class="form-control" enctype="multipart/form-data">

                @csrf()

                <div class="col-md-12 form-label">
                    <label class="">Select Category <span class="text-danger">*</span></label>
                    <select name="product_category" id="product_category" class="form-control">
                        <option value="">Select</option>
                        @foreach($categories as $category)
                        <option value="{{$category['id']}}"  {{ old('product_category') == $category['id'] ? "selected" : "" }}>{{$category['name']}}</option>
                        @endforeach
                    </select>
                    @error('product_category')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12 form-label">
                    <label class="">Product Name <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" name="product_name" id="product_name" value="{{ old('product_name') }}" placeholder="Product Name" />
                    @error('product_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 form-label">
                    <label class="">Product Price <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="product_price" id="product_price" value="{{ old('product_price') }}" placeholder="Product Price" />
                    @error('product_price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 form-label">
                    <label class="">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="product_desc" id="product_desc" placeholder="Description">{{ old('product_desc') }}</textarea>
                    @error('product_desc')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 form-label">
                    <label class="">Image/Avtar <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="product_avtar" id="product_avtar" placeholder="" />
                    @error('product_avtar')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mt-3">
                    <input type="submit" class="btn btn-success" id="submit" name="submit" value="Submit" />
                </div>
            </form>
            </div>

        </div>
    </div>
@endsection
