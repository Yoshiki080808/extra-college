@extends('layouts.default')

@section('content1')
<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

  <div class="mb-6 text-center text-red-400 md:col-span-2 md:mt-0">
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
  </div>
  
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h2 class="text-lg font-medium leading-6 text-gray-900">新規生徒登録</h2>
          <p class="mt-1 text-sm text-gray-600">現在の住所とメールアドレス、大学名等をご記載ください</p>
        </div>
      </div>
      <div class="mt-5 md:col-span-2 md:mt-0">
        <form action="{{ route('store.student') }}" method="POST">
          @csrf
          <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium text-gray-700">名前</label>
                  <input type="text" name="name" value="{{ old('name') }}" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
                </div>
  
                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">メールアドレス</label>
                  <input type="text" name="email" value="{{ old('email') }}" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  border">
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="password" class="block text-sm font-medium text-gray-700">パスワード</label>
                  <input type="password" name="password" value="{{ old('password') }}" id="password" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  border">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-sm font-medium text-gray-700">郵便番号（ZIP / Postal code）</label>
                  <input type="text" name="zipcode" value="{{ old('zipcode') }}" id="postal-code" autocomplete="postal-code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="country" class="block text-sm font-medium text-gray-700">居住国</label>
                  <select id="country" name="country" value="{{ old('country') }}" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    <option>日本</option>
                    <option>それ以外</option>
                  </select>
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="region" class="block text-sm font-medium text-gray-700">都道府県（State / Province）</label>
                  <input type="text" name="address_1" value="{{ old('address_1') }}" id="region" autocomplete="address-level1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-700">市町村（City）</label>
                  <input type="text" name="address_2" value="{{ old('address_2') }}" id="city" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
                </div>
  
                <div class="col-span-6">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">その後の住所（Street address）</label>
                  <input type="text" name="address_3" value="{{ old('address_3') }}" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">電話番号</label>
                  <input type="text" name="tel" value="{{ old('tel') }}" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  border">
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">写真</label>
                  <input type="text" name="image" value="{{ old('image') }}" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  border">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="country" class="block text-sm font-medium text-gray-700">学位（Degree）</label>
                  <select id="country" name="degree" value="{{ old('degree') }}" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    <option>高校</option>
                    <option>高専</option>
                    <option>大学</option>
                    <option>大学院</option>
                    <option>その他</option>
                  </select>
                </div>

                <div class="col-span-6">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">大学名（College Name）</label>
                  <input type="text" name="university" value="{{ old('university') }}" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
                </div>

                <div class="col-span-6">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">学部（Department）</label>
                  <input type="text" name="department" value="{{ old('department') }}" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
                </div>

                <div class="col-span-6">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">学科（Faculty）</label>
                  <input type="text" name="faculty" value="{{ old('faculty') }}" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
                </div>

              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">新規生徒登録</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    
@endsection

@section('content2')
<div>
  <p class="mt-10 text-center text-sm text-gray-600">
    <a href="{{ route('student.login.form') }}" class="font-medium text-indigo-600 hover:text-indigo-500">既に生徒用アカウントをお持ちですか？</a>
  </p>
  <p class="mt-4 text-center text-sm text-gray-600">
    <a href="{{ route('company.login.form') }}" class="font-medium text-indigo-600 hover:text-indigo-500">既に企業用アカウントをお持ちですか？</a>
  </p>
  <p class="mt-4 text-center text-sm text-gray-600">
    <a href="{{ route('register.company') }}" class="font-medium text-indigo-600 hover:text-indigo-500">企業用登録ページはこちら</a>
  </p>      
</div>
@endsection