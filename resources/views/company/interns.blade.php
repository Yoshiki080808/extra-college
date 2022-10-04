@extends('layouts.company-d')

@section('content1')
<div class="bg-white">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">作成したインターンシップ</h2>
  
      <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

        {{-- 繰り返し処理で企業が個別で作ったインターンシップを表示 --}}
        @foreach($internships as $internship)
        <a href="create-interns" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://cdn.pixabay.com/photo/2021/03/03/16/28/search-engine-optimization-6065663_1280.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">{{ $internship->title }}</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$</p>
        </a>
        @endforeach

        <a href="create-interns" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://cdn.pixabay.com/photo/2021/03/03/16/28/search-engine-optimization-6065663_1280.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
        </a>
  
        <a href="#" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
        </a>
  
        <a href="#" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
        </a>
  
        <a href="{{ route('create.internship') }}" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img src="https://cdn.pixabay.com/photo/2017/11/10/05/24/add-2935429_960_720.png" alt="新規作成" class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">インターンシップを作成する</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">新規作成</p>
        </a>
  
        <!-- More products... -->
      </div>
    </div>
  </div>
@endsection