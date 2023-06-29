<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            名刺編集画面
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <section class="text-gray-600 body-font">
                        <form action="{{ route('namecard.update', ['namecard' => $card->id]) }}" method="POST" enctype='multipart/form-data'>
                            @method('PUT')
                            @csrf
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 mb-2">{{$error}}</li>
                                @endforeach
                            <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center">
                                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                                    <img class="object-cover object-center rounded" alt="hero"
                                        src="{{ asset('storage/namecards/' . $card->path) }}">
                                </div>
                                <div
                                    class="lg:flex-grow md:w-1/2 lg:pl-12 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                                    <div class="w-1/2 pb-4">
                                        <label for="name"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">氏名</label>
                                        <input type="text" name="name" id="name" value="{{ $card->name }}"
                                            class="py-3 px-4 block w-full text-3xl border-none outline-none">
                                    </div>
                                    <div class="w-1/2 pb-4">
                                        <label for="companyname"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">会社名</label>
                                        <input type="text" name="companyname" id="companyname"
                                            value="{{ $card->companyname }}"
                                            class="py-3 px-4 block w-full text-xl border-none outline-none">
                                    </div>
                                    <div class="w-1/2 pb-4">
                                        <label for="image"
                                                class="block text-sm text-gray-700 font-medium dark:text-white border-none outline-none">名刺画像</label>
                                                <input type="file" name="image" accept=".jpg, .jpeg, .png"
                                                id="image"
                                                class="py-3 px-4 w-full border-none outline-none">
                                    </div>
                                    <div class="flex justify-center mt-4">
                                        <button type="submit"
                                            class="mr-8 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集する</button>
                                        <button type="button" onclick="location.href='{{ route('namecard.index') }}'"
                                            class="flex mx-auto text-white bg-gray-500 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg">戻る</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
