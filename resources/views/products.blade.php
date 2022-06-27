@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-md-3">
                <div class="card">
                    <div class="card-header fw-bold">
                        {{ __('Products') }}
                        @auth()
                        <a type="button" href="{{ route('products.addnew') }}" class="btn btn-primary float-end">Add New Product</a>
                        @endauth
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://www.w3schools.com/bootstrap5/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
