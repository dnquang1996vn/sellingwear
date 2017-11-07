@extends('layouts.app')

@section('content')
    <div class="sidebar col-md-3">
        <div id="category-heading">
            <h3 id="category-title">
                Category list
            </h3>
        </div>
        <div class="list-group">
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        App
                    </span>
                </a>
            </div>
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        Games
                    </span>
                </a>
            </div>
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        Mpvies
                    </span>
                </a>
            </div>
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        Books
                    </span>
                </a>
            </div>
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        Newspaper
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="main-content col-md-9">
        <div>
            <a href="{{route('create_product')}}">
                <button class="btn btn-primary add-product-btn">Add new product</button>
            </a>
        </div>
        <div class="category-list">
            <h3 class="category-name">
                App
            </h3>
        </div>
        <div class="content-product-list">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumtnail product-item">
                        <img src="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
