<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- チャレンジ一覧 --}}
                <div class="w-full">
                    @foreach ($challenges as $challenge)
                        <div class="bg-white w-full px-10 py-8 hover:shadow-2xl transition duration-500">
                            <div class="mt-4">
                                <div class="flex justify-between text-sm items-center mb-4">
                                    <div></div>
                                    <div class="text-gray-700 text-right">
                                        <div>○○いいね</div>
                                    </div>
                                </div>
                                <h2 class="text-lg text-gray-700 font-semibold">{{ $challenge->title }}</h2>
                                <p>{{ $challenge->challenge }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
