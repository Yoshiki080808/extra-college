<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Extra College')</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.29.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <style type="text/tailwindcss">
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }

          .btn {
              @apply font-bold py-2 px-4 rounded ml-4;
          }

          .btn-blue {
              @apply bg-blue-500 text-white;
          }

          .btn-blue:hover {
              @apply bg-blue-600;
          }
        }
      </style>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                body: "#050505",
                "selected-text": "#A3A3FF",
                theme: "#5045E4",
                primary: {
                    100: '#ebf8ff',
                }
              },
              fontFamily: {
                poppins:['Poppins', 'sans-serif']
            }
            }
          }
        }
      </script>
      <title>Extra Courage</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="container">
      {{-- ナビゲーションバー --}}
  <header class="py-6">
    <div class="container mx-auto flex justify-between items-center px-8 md:px-14 lg:px-24 w-full">
      <div class="text-xl font-bold">Extra Courage</div>
      <div class="space-x-6 hidden xl:flex items-center">
        <a href="/" class="hover:text-selected-text transition-all duration-300">トップ</a>
        <a href="#students" class="hover:text-selected-text transition-all duration-300">大学生へ</a>
        <a href="#companies" class="hover:text-selected-text transition-all duration-300">企業様へ</a>
        <a href="#institutes" class="hover:text-selected-text transition-all duration-300">教育機関様へ</a>
        <a href="#about" class="hover:text-selected-text transition-all duration-300">Extra Courage</a>
        <a href="{{ route('company.login.form') }}" class="px-6 py-2 bg-theme font-bold text-white rounded-lg hover:bg-indigo-700 transition-all duration-300"><button>ログイン</button></a>
      </div>
      <div class="xl:hidden">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>
  </header>

  <main class="mx-auto mt-10 max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
    @yield('content1')
    @yield('content2')
    @yield('content3')
    @yield('content4')
    @yield('content5')
  </main>


  <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Extra Courage™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#about" class="mr-4 hover:underline md:mr-6 ">About</a>
        </li>
        <li>
            <a href="#policy" class="mr-4 hover:underline md:mr-6">プライバシーポリシー</a>
        </li>
        <li>
            <a href="#twitter" class="mr-4 hover:underline md:mr-6">twitter</a>
        </li>
        <li>
            <a href="#contact" class="hover:underline">お問い合わせ</a>
        </li>
    </ul>
  </footer>
    
</div>
</body>
</html>