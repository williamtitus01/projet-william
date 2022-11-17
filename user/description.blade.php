@extends('layouts.home')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4">  <img class="w-full" src="{{ Storage::url($product->gallery) }}" alt=""> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-uppercase">Category - {{$product->category}}</h5>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{$product->name}}</span>
                                <h5 class="">Description : {{$product->description}}</h5>
                                <br>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">Quantity : {{$product->quantity}} ML</span></div>
                            </div>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Price : {{$product->price}} €</h6>
                            </div>
                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
