@extends('admin.layouts.master')

@section('content')

<!-- Main Content -->

    <section class="section">
      <div class="section-header">
        <h1>Advertisement</h1>
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-2">
                      <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-homepage-banner-one-list" data-toggle="list" href="#list-homepage-banner-one" role="tab">Homepage banner section one</a>
                        <a class="list-group-item list-group-item-action" id="list-homepage-banner-two-list" data-toggle="list" href="#list-homepage-banner-two" role="tab">Homepage banner section two</a>
                        <a class="list-group-item list-group-item-action" id="list-homepage-banner-three-list" data-toggle="list" href="#list-homepage-banner-three" role="tab">Homepage banner section three</a>
                        <a class="list-group-item list-group-item-action" id="list-homepage-banner-four-list" data-toggle="list" href="#list-homepage-banner-four" role="tab">Homepage banner section four</a>
                        <a class="list-group-item list-group-item-action" id="list-product-page-banner-list" data-toggle="list" href="#list-product-page-banner" role="tab">Product page banner</a>
                        <a class="list-group-item list-group-item-action" id="list-cart-page-banner-list" data-toggle="list" href="#list-cart-page-banner" role="tab">Cart page banner</a>
                        <a class="list-group-item list-group-item-action" id="list-flash-sales-banner-list" data-toggle="list" href="#list-flash-sales-banner" role="tab">Flash Sales Page banner</a>

                      </div>
                    </div>
                    <div class="col-10">
                      <div class="tab-content" id="nav-tabContent">
                        @include('admin.advertisement.homepage-banner-one')

                        @include('admin.advertisement.homepage-banner-two')

                        @include('admin.advertisement.homepage-banner-three')

                        @include('admin.advertisement.homepage-banner-four')

                        @include('admin.advertisement.product-page-banner')

                        @include('admin.advertisement.cart-page-banner')

                        @include('admin.advertisement.flash-sales-page-banner')
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </section>

@endsection

