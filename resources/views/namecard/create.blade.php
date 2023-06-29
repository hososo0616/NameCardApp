<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規名刺登録
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900">
                    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-8 mx-auto">
                        <div class="max-w-xl mx-auto">
                            <div class="text-center">
                                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
                                    新規登録
                                </h1>
                            </div>

                            <div class="mt-12">
                                @foreach ($errors->all() as $error)
                                <li class="text-red-500 mb-2">{{$error}}</li>
                                @endforeach
                                <form action="{{ route('namecard.store') }}" method="POST" enctype='multipart/form-data'>
                                    @csrf
                                    <div class="grid gap-4 lg:gap-6">
                                        <div class="gap-4 lg:gap-6">
                                            <div>
                                                <label for="name"
                                                    class="block text-sm text-gray-700 font-medium dark:text-white">お名前</label>
                                                <input type="text" name="name"
                                                    id="name"
                                                    class="py-3 px-4 block w-full border-gray-400 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <label for="email"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">メールアドレス</label>
                                            <input type="email" name="email"
                                                id="email" autocomplete="email"
                                                class="py-3 px-4 block w-full border-gray-400 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                        </div> --}}
                                        <div class="gap-4 lg:gap-6">
                                            <div>
                                                <label for="companyname"
                                                    class="block text-sm text-gray-700 font-medium dark:text-white">会社名</label>
                                                <input type="text" name="companyname"
                                                    id="companyname"
                                                    class="py-3 px-4 block w-full border-gray-400 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="image"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">名刺画像</label>
                                                <input type="file" name="image" accept=".jpg, .jpeg, .png"
                                                id="image"
                                                class="py-3 px-4 block w-full border-gray-400 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                        </div>
                                    </div>
                                    <div class="mt-6 grid">
                                        <button type="submit"
                                            class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">登録する</button>
                                    </div>
                                    <div class="p-8 w-full">
                                      <button type="button" onclick="location.href='{{ route('namecard.index') }}'" class="flex mx-auto text-white bg-gray-500 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg">戻る</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
