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
        <h2 class="text-lg font-medium leading-6 text-gray-900">企業情報設定</h2>
        <p class="mt-1 text-sm text-gray-600">現在の住所とメールアドレス、企業名等をご記載ください</p>
      </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="{{ route('store.company') }}" method="POST">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6">
                <label for="name" class="block text-sm font-medium text-gray-700">企業名（Company Name）</label>
                <input type="text" name="name" value="{{ old('name') }}" id="name" autocomplete="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="industry" class="block text-sm font-medium text-gray-700">業種</label>
                <select id="industry" name="industry" value="{{ old('industry') }}" autocomplete="industry" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option>金融</option>
                  <option>IT技術</option>
                  <option>サービス</option>
                  <option>教育</option>
                  <option>建設</option>
                  <option>マーケティング</option>
                  <option>その他</option>
                </select>
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="zipcode" class="block text-sm font-medium text-gray-700">郵便番号（ZIP / Postal code）</label>
                <input type="text" name="zipcode" value="{{ old('zipcode') }}" id="zipcode" autocomplete="postal-code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">国</label>
                <select id="country" name="country" value="{{ old('country') }}" autocomplete="country" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option>日本</option>
                  <option>それ以外</option>
                </select>
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="address_1" class="block text-sm font-medium text-gray-700">都道府県（State / Province）</label>
                <input type="text" name="address_1" value="{{ old('address_1') }}" id="address_1" autocomplete="address-level1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
              </div>

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="address_2" class="block text-sm font-medium text-gray-700">市町村（City）</label>
                <input type="text" name="address_2" value="{{ old('address_2') }}" id="address_2" autocomplete="address_2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
              </div>

              <div class="col-span-6">
                <label for="address_3" class="block text-sm font-medium text-gray-700">その後の住所（Street address）</label>
                <input type="text" name="address_3" value="{{ old('address_3') }}" id="address_3" autocomplete="address_3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="pic_name" class="block text-sm font-medium text-gray-700">担当者名</label>
                <input type="text" name="pic_name" value="{{ old('pic_name') }}" id="pic_name" autocomplete="pic_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="email" class="block text-sm font-medium text-gray-700">担当者メールアドレス</label>
                <input type="text" name="email" value="{{ old('email') }}" id="email" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  border">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="password" class="block text-sm font-medium text-gray-700">担当者パスワード</label>
                <input type="password" name="password" value="{{ old('password') }}" id="password" autocomplete="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  border">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="tel" class="block text-sm font-medium text-gray-700">担当者電話番号</label>
                <input type="text" name="tel" value="{{ old('tel') }}" id="tel" autocomplete="tel" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  border">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="image" class="block text-sm font-medium text-gray-700">写真</label>
                <input type="text" name="image" value="{{ old('image') }}" id="image" autocomplete="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  border">
              </div>

            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">新規企業登録</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- <div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
        <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like to receive and how.</p>
      </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="#" method="POST">
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
            <fieldset>
              <legend class="sr-only">By Email</legend>
              <div class="text-base font-medium text-gray-900" aria-hidden="true">By Email</div>
              <div class="mt-4 space-y-4">
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <input id="comments" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="comments" class="font-medium text-gray-700">Comments</label>
                    <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <input id="candidates" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                    <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="flex h-5 items-center">
                    <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="offers" class="font-medium text-gray-700">Offers</label>
                    <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend class="contents text-base font-medium text-gray-900">Push Notifications</legend>
              <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
              <div class="mt-4 space-y-4">
                <div class="flex items-center">
                  <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                  <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">Everything</label>
                </div>
                <div class="flex items-center">
                  <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                  <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Same as email</label>
                </div>
                <div class="flex items-center">
                  <input id="push-nothing" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                  <label for="push-nothing" class="ml-3 block text-sm font-medium text-gray-700">No push notifications</label>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> --}}

@endsection

@section('content2')
<div>
  <p class="mt-10 text-center text-sm text-gray-600">
    <a href="{{ route('company.login.form') }}" class="font-medium text-indigo-600 hover:text-indigo-500">既に企業用アカウントをお持ちですか？</a>
  </p>
  {{-- <p class="mt-4 text-center text-sm text-gray-600">
    <a href="{{ route('student.login.form') }}" class="font-medium text-indigo-600 hover:text-indigo-500">既に生徒用アカウントをお持ちですか？</a>
  </p>
  <p class="mt-4 text-center text-sm text-gray-600">
    <a href="{{ route('register.company') }}" class="font-medium text-indigo-600 hover:text-indigo-500">生徒用登録ページはこちら</a>
  </p>       --}}
</div>
@endsection