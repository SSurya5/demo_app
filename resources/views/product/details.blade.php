@extends('layouts.master')
 
@section('title', 'Product Details')

 
@section('content')
<div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">{{$product->name}}</p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a  class="btn btn-sm btn-outline-secondary" href="https://junipurr-jewelry-demo.myshopify.com/cart/{{$product->sku}}:1?storefront=true">Add to Cart</a>
            </div>
                <small class="text-body-secondary">{{$product->current_price}}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
