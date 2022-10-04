@extends('layouts.company-d')

@section('content1')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="overflow-hidden bg-white shadow sm:rounded-lg">
  <form action="" method="POST">

    {{-- <div class="col-span-6 sm:col-span-3">
      <label for="last-name" class="block text-sm font-medium text-gray-700">名前</label>
      <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  border">
    </div> --}}

    <div class="px-4 py-5 sm:px-6">
      <h3 class="sm:text-lg lg:text-3xl font-medium leading-6 text-gray-900">マーケティングコンサル/法人営業</h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">インターンシップ詳細と添付資料</p>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">企業名</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
            <input type="text">KANEKO コンサルティング
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">タイトル</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">マーケンティングコンサルのサポート業務</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">担当者名</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">金子佳樹</dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">連絡用メールアドレス</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">kaneko@example.com</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">担当者電話番号</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">06012345678</dd>
          </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">ポジション名</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">法人営業</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">期間</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">2023年2月からの3ヶ月間</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">給与形態</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">1,200円/時間</dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">内容詳細</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">マーケティングコンサルティング会社の一員として、新規法人顧客獲得のための法人営業をして頂きます。マーケティングの基礎知識の学習と会社方針に合わせたプレゼン資料の作成、プレゼン等をメインの業務として経験して頂き予定ですので、実際の現場で営業を経験したいと思う学生は是非ご応募ください。</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">募集人数</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">10人</dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">写真</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">写真添付しましょう</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">添付資料（インターン概要と契約書）</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
            <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
              <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                <div class="flex w-0 flex-1 items-center">
                  <!-- Heroicon name: mini/paper-clip -->
                  <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                  </svg>
                  <span class="ml-2 w-0 flex-1 truncate">internship.pdf</span>
                </div>
                <div class="ml-4 flex-shrink-0">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                </div>
              </li>
              <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                <div class="flex w-0 flex-1 items-center">
                  <!-- Heroicon name: mini/paper-clip -->
                  <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                  </svg>
                  <span class="ml-2 w-0 flex-1 truncate">companyinfo.pdf</span>
                </div>
                <div class="ml-4 flex-shrink-0">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                </div>
              </li>
            </ul>
          </dd>
        </div>
      </dl>
    </div>
  </form>
</div>
@endsection