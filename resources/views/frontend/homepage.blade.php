@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="hero__item welcome_section" style="display:flex; align-itmes:center; height:90vh;">
    
    <div class="col-lg-6">
      <div id="docs-card" class="flex flex-col rounded-lg transition duration-300   border: 25px solid black;" style="">
        <img src="{{ URL('images/bg1.jpg')}}" alt="Furniture chairs" style="width: 100%;" />
      </div>
    </div>
    <div class="col-lg-6">
    <div class="pt-3 sm:pt-5">
            <h2 class=" font-semibold text-black dark:text-white" style="font-size: 50px; font-weight:bold; font-style:verdana;">
              Your Partner in <br> <span style="color:#e8aa00; font-weight:bold;">Home Furnitures,</span> Where Quality Meets Affordability</h2>
              <p class="mt-4 text-sm/relaxed">
                  Visit us in Tagudin, Mabini, Pangasinan for more information.
                  Follow us on our Social Media Account for Updates.
              </p>
              <a href="#" class="primary-btn">SHOP NOW</a>
          </div>
    </div>
  </section>
      <!-- Breadcrumb Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="categories__slider owl-carousel">
            @foreach($menu_categories as $menu_category)
              <div class="col-lg-3">
                <div
                  class="categories__item set-bg"
                  data-setbg="{{ $menu_category->photo ? $menu_category->photo->getUrl() : asset('frontend/img/default-category.jpg') }}"
                >
                  <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></h5>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Featured Product</h2>
            </div>
          </div>
        </div>
        <div class="row featured__filter" id="product-list">
        </div>
      </div>
    </section>
    <!-- Featured Section End -->


@endsection
