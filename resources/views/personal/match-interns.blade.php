@extends('layouts.default')

@section('content1')
<h1 class="text-3xl">インターンシップ一覧</h1>
<p>検索または自分の特性にマッチしたインターンシップを選びましょう！</p>
<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>
  
      <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

        {{-- 繰り返し処理で企業が個別で作ったインターンシップを表示 --}}
        @foreach($internships as $internship)
        <a href="{{ route('show.interns', ['id' => $internship->company_id]) }}" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="{{ $internship->image }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">{{ $internship->title }}</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">{{ $internship->company_name }}</p>
        </a>
        @endforeach

        {{-- <a href="curriculum" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
        </a> --}}
  
        <!-- More products... -->
      </div>
    </div>
  </div>
@endsection