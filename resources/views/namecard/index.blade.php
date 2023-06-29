<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            名刺管理
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                            <div class="flex justify-end mb-4">
                                <button type="button" onclick="location.href='{{ route('namecard.create') }}'" class="text-white bg-indigo-500 border-0 mt-4 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">新規登録</button>
                            </div>
                            <div class="flex flex-wrap -m-4">
                                @if (isset($cards))
                                    @foreach ($cards as $card)
                                        <div class="xl:w-1/4 md:w-1/2 p-4 pb-8 mb-8">
                                            <div class="bg-gray-100 p-6 pb-2 rounded-lg">
                                                <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('storage/namecards/' . $card->path ) }}" alt="content">
                                                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ $card->companyname}}</h3>
                                                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ $card->name}}</h2>
                                                <!-- <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p> -->
                                                <div class="flex justify-around">
                                                    <button type="button" onclick="location.href='{{ route('namecard.show', ['namecard' => $card->id]) }}'" class="text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">編集</button>
                                                    <button class="text-white bg-red-500 border-0 py-2 px-5 focus:outline-none hover:bg-red-600 rounded">削除</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
