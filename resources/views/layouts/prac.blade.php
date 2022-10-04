<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@2.29.0/dist/full.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script>
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
                theme: "#5c318c",
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
      </script> --}}
      <title>Tailwind</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-poppins bg-body text-white">
  {{-- ナビゲーションバー --}}
  <header class="py-6">
    <div class="container mx-auto flex justify-between items-center px-8 md:px-14 lg:px-24 w-full">
      <div class="text-xl font-bold">Extra Courage</div>
      <div class="space-x-6 hidden xl:flex items-center">
        <a href="#home" class="hover:text-selected-text transition-all duration-300">ホーム</a>
        <a href="#students" class="hover:text-selected-text transition-all duration-300">大学生へ</a>
        <a href="#companies" class="hover:text-selected-text transition-all duration-300">企業様へ</a>
        <a href="#institutes" class="hover:text-selected-text transition-all duration-300">教育機関様へ</a>
        <a href="#about" class="hover:text-selected-text transition-all duration-300">Extra Courage</a>
        <a href="#contact" class="px-6 py-2 bg-theme font-boild rounded-lg hover:bg-purple-600 transition-all duration-300"><button>お問い合わせ</button></a>
        <a href="#login" class="px-6 py-2 bg-theme font-boild rounded-lg hover:bg-purple-600 transition-all duration-300"><button>ログイン</button></a>
      </div>
      <div class="xl:hidden">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>
  </header>

  {{-- ヒーローセクション --}}
  <div id="home" class="container mt-16 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
    <div class="flex flex-wrap md:flex-nowrap">
      <div class="md:my-36 lg:ml-20 z-10">
        <h1 class="font-bold text-5xl text-center md:text-left lg:text-7xl md:text-6xl">
          Extra Courageで <br/>
          未来の可能性を <br/>
          広げよう
        </h1>
        <button class="px-6 py-4 bg-theme font-boild rounded-lg hover:bg-purple-600 transition-all duration-300 mt-10">
          <i class="fa-solid fa-meteor mr-1"></i>
          <span>始める</span>
        </button>
      </div>
      {{-- <img src="{{ asset('images/topImage3.jpg') }}" alt="image" class="md:absolute lg:top-2 lg:right-52 md:w-3/5 w-10/12 mt-12 md:mt-0 right-6"> --}}
      <img src="{{ asset('images/topImage3.jpg') }}" alt="image" class="bg-contain bg-center">
    </div>
  </div>


</body>
</html>


{{-- <div class="border border-blue-400 p-16 my-10">
    <h1 class="lg:text-7xl font-bold text-3xl sm:text-red-400 md:text-blue-400">TailwindCSS入門</h1>
</div>

<button class="btn btn-blue">ボタン</button>

<button class="btn bg-primary-100 hover:btn-blue">ボタン</button> --}}