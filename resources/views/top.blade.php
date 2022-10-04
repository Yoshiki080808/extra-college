@extends('layouts.default')

@section('content1')

<div id="top" class="sm:text-center mb-16 w-full bg-no-repeat bg-cover bg-left" style="background-image: url('https://cdn.pixabay.com/photo/2018/01/31/05/43/web-3120321_1280.png'); height:600px;">
    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl text-center">
        <span class="block xl:inline">Expand Your Vision</span>
        <span class="block text-indigo-600 xl:inline">新たな可能性を掴もう</span>
    </h1>
    <p class="mt-3 text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg">Extra Courageは、オンライン完結型の長期インターンシップを全ての大学生に提供し、人生に新たな可能性と選択肢を届けるためのAIマッチングプラットフォームです。</p>
</div>
<div class="mt-5 sm:mt-8 sm:flex sm:justify-center text-center">
  <div class="rounded-md shadow">
    <a href="{{ route('select.interns') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-10 md:text-lg">始める（インターンシップページへ）</a>
  </div>
  <div class="mt-3 sm:mt-0 sm:ml-3">
    <a href="{{ route('company.login.form') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-100 px-8 py-3 text-base font-medium text-indigo-700 hover:bg-indigo-200 md:py-4 md:px-10 md:text-lg">ログイン（企業用）</a>
  </div>
</div>

@endsection

@section('content2')
<div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
    <!-- Row1 -->
    <div id="students" class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">全ての学生に、新たな体験と機会を。</h2>
            <p class="mb-8 font-light lg:text-xl">-VUCAの時代-...変化の時代に対応し、生きていくために必要な素養を身につけるためには「自分自身が努力出来る興味領域の発見」が必要不可欠です。</p>
            <!-- List -->
            <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">オンライン完結の長期インターンシップ</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">自己理解と努力領域の発見</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">「新卒」から『即戦力』へ</span>
                </li>
            </ul>
            <p class="mb-8 font-light lg:text-xl">Extra Courageではより多くの若い才能が、自分自身を「発見」するための機会を長期インターンシップを通して提供します。</p>
        </div>
        <img class="w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('images/topImage1.jpg') }}" alt="dashboard feature image">
    </div>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
        <div class="inline-flex rounded-md shadow">
          <a href="{{ route('select.interns') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">始める（インターンシップページへ）</a>
        </div>
        {{-- <div class="ml-3 inline-flex rounded-md shadow">
          <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">より詳しく</a>
        </div> --}}
    </div>
    <!-- Row2 -->
    <div id="companies" class="flex items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16" style="flex-direction:column-reverse">
        <img class="w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('images/topImage2.jpg') }}" alt="feature image 2">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">企業に、まだ見ぬ才能との繋がりを。</h2>
            <p class="mb-8 font-light lg:text-xl">世界のDXが進むにつれて、日本企業は未曾有の採用競争時代に突入しています。企業文化に合ったダイヤの原石の発見は、多くの企業にとって喫緊の課題と言えるでしょう。</p>
            <!-- List -->
            <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">未開拓人材への早期アプローチ</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">インターンシップを通した人材育成</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">AIによるミスマッチ解消</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">採用・教育コストの大幅削減</span>
                </li>
            </ul>
            <p class="font-light lg:text-xl">Extra CourageではAIによるマッチングを採用し、企業と学生のミスマッチを解消。更にこれまで接点を持ちづらかった優秀な地方大生や海外学生への早期アプローチが可能になり、採用戦略への新たな選択肢を提供します。</p>
        </div>
    </div>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
        <div class="inline-flex rounded-md shadow">
          <a href="{{ route('register.company') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">提携企業登録（企業登録フォームへ）</a>
        </div>
        {{-- <div class="ml-3 inline-flex rounded-md shadow">
          <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">より詳しく</a>
        </div> --}}
    </div>
    <!-- Row3 -->
    <div id="institutes" class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
        <div class="text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">教育機関や自治体に、新たな価値を。</h2>
            <p class="mb-8 font-light lg:text-xl">学習者にとってより良い教育とは何なのか。教育の抜本的な改革のためには何が必要なのか。その最前線で戦う教育者や自治体職員にとって、それはいつの時代も変わらぬ課題としてその道を阻んでいます。
            </p>
            <!-- List -->
            <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">学生への新たな選択肢や可能性の提示</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">地方と都市部の機会格差の是正</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">次世代への投資と社会貢献</span>
                </li>
            </ul>
            <p class="mb-8 font-light lg:text-xl">地域の学生に対してより充実した、新たな価値を届けたい。そしてその地域の未来をより良くしていきたい。Extra Courageはそんな想いを持って取り組む教育機関や事業者と共に、次の世代へ新たな価値を提供します。</p>
        </div>
        <img class="w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('images/topImage3.jpg') }}" alt="dashboard feature image">
    </div>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
        <div class="inline-flex rounded-md shadow">
          <a href="institution/show-email" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">パートナー教育機関登録（お問合せフォームへ）</a>
        </div>
        {{-- <div class="ml-3 inline-flex rounded-md shadow">
          <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">より詳しく</a>
        </div> --}}
    </div>
</div>

@endsection

@section('content3')
<div id="about" class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-lg font-semibold text-indigo-600">Extra Courageとは</h2>
        <p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">オンライン完結型インターンシップ</p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">大学生と企業を繋ぐ、オンライン完結型インターンシップAIマッチングプラットフォーム</p>
      </div>
  
      <div class="mt-10">
        <dl class="space-y-10 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10 md:space-y-0">
          <div class="relative">
            <dt>
              <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/globe-alt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
              </div>
              <p class="ml-16 text-lg font-medium leading-6 text-gray-900">世界中の企業と提携</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">オンラインで完結する強みを活かして、各分野で社会に貢献する様々な企業とのマッチングが可能です。世界のどこにいても社会の一員として働けるということを実感出来ます。</dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/scale -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                </svg>
              </div>
              <p class="ml-16 text-lg font-medium leading-6 text-gray-900">AIで学生と企業をマッチング</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">学生の希望や興味と、企業の求める学生像の傾向データを蓄積し、徐々にAIによるマッチング精度を向上させていく予定です。最終的には人の手から離れたAIマッチングを実現します。</dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                </svg>
              </div>
              <p class="ml-16 text-lg font-medium leading-6 text-gray-900">学生の自己理解と努力領域発見</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">学生に足りない「実社会での経験値」を補い、教育機関で学ぶ内容と実社会との繋がりへの理解を促します。より深く自己を探求し、今後長期に渡って努力出来る領域の発見をサポートします。</dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/chat-bubble-bottom-center-text -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>
              </div>
              <p class="ml-16 text-lg font-medium leading-6 text-gray-900">社会で活躍する即戦力を輩出</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">より多くの学生が社会での経験を早期から積める環境を整えることで、社会全体において「即戦力」として社会に貢献し、活躍出来る人材の増加を目指します。</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>


@endsection

@section('content4')
<div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
    <figure class="max-w-screen-md mx-auto">
    <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"></path>
    </svg>
    <blockquote>
    <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"２０代を有効に活かすということは、仕事や恋愛、幸福に関して、そして場合によっては世界への貢献の可能性さえも決めるのです。これは私個人の意見ではなく、事実なのです。"</p>
    </blockquote>
    <figcaption class="flex items-center justify-center mt-6 space-x-3">
    <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
    <div class="pr-3 font-medium text-gray-900 dark:text-white">メグ・ジェイ</div>
    <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">アメリカの臨床心理学者</div>
    </div>
    </figcaption>
    </figure>
    </div>
@endsection

@section('content5')
<div class="bg-gray-50">
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        <span class="block">Like No Other</span>
        <span class="block text-indigo-600">人生を、冒険しよう。</span>
      </h2>
      <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
        <div class="inline-flex rounded-md shadow">
          <a href="{{ route('select.interns') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">始める（大学生）</a>
        </div>
        <div class="ml-3 inline-flex rounded-md shadow">
          <a href="/" class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">より詳しく</a>
        </div>
      </div>
    </div>
  </div>


@endsection