@extends('layouts.home')
@section('content')
<!---->
<h1>My Bubble Tea</h1>
<div class="container d-flex justify-content-center mb-4">
<form action="" method="POST" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" placeholder="enter your name">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" name="price" placeholder="10 €">
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">Quantity</label>
    <input type="text" name="quantity" placeholder="2">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" name="category" placeholder="bubble tea fruité">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" name="description" placeholder="gout fraise ...">
  </div>
  <label for="gallery">Choose a profile picture:</label>
    <input type="file"
       id="gallery" name="gallery"
       accept="image/png, image/jpeg">
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary bg-pink-400">Submit</button>
  <a href="{{ url('/dashboard') }}" class="btn btn-danger">annuler</a>
</form>
</div>
@endsection


<!--création d'un formulaire de recherche -->
<!-- <form id="form" method="POST" action="submit">
    @csrf
   <div>
        <label for="product">Produits</label>
        <input type="text" name="product">
   </div>
   <div>
        <label for="tea">Tea</label>
        <input type="text" name="tea">
   </div>
   <button type="submit">envoyer</button>
</form> -->

