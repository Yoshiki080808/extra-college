@extends('layouts.default')

@section('content1')
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">企業用アカウントにログイン</h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          <a href="{{ route('register.company') }}" class="font-medium text-indigo-600 hover:text-indigo-500">まだ企業登録していませんか？</a>
        </p>
      </div>

      @if ($errors->any())
         <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
           <p class="text-red-400">ログインに失敗しました</p>
         </div>
      @endif

      <form class="mt-8 space-y-6" action="{{ route('company.login') }}" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="-space-y-px rounded-md shadow-sm">
          <div>
            <label for="email" class="sr-only">メールアドレス</label>
            <input id="email" name="email" value="{{ old('email') }}" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="メールアドレス">
          </div>
          <div>
            <label for="password" class="sr-only">パスワード</label>
            <input id="password" name="password" type="password" autocomplete="password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="パスワード">
          </div>
        </div>
  
        {{-- <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
          </div>
  
          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
          </div>
        </div> --}}
  
        <div>
          <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <!-- Heroicon name: mini/lock-closed -->
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
              </svg>
            </span>
            ログイン
          </button>
        </div>
      </form>
      {{-- <div>
        <p class="mt-2 text-center text-sm text-gray-600">
          <a href="{{ route('student.login.form') }}" class="font-medium text-indigo-600 hover:text-indigo-500">生徒用ログインページはこちら</a>
        </p>
        <p class="mt-2 text-center text-sm text-gray-600">
          <a href="{{ route('register.student') }}" class="font-medium text-indigo-600 hover:text-indigo-500">生徒用登録ページはこちら</a>
        </p>      
      </div> --}}
    </div>
  </div>
@endsection