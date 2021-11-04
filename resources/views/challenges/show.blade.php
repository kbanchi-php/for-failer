<x-app-layout>
    <div class="container lg:w-3/4 md:w-4/5 w-11/12 mx-auto my-8 px-4 py-4 bg-white shadow-md">
        <article class="mb-2">
            <div class="flex justify-between text-sm">
                <div>
                    <span>いいね数</span>
                </div>
            </div>
            <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                {{ $challenge->title }}</h2>
            <div class="flex mt-1 mb-3">
                <h3 class="text-lg h-10 leading-10">{{ $challenge->user->name }}</h3>
            </div>
            <p class="text-gray-700 text-base">{!! nl2br(e($challenge->challenge)) !!}</p>
        </article>
        <div class="flex flex-col sm:flex-row items-center sm:justify-end text-center my-4">
            <form action="" method="post">
                @csrf
                <input type="submit" value="いいね"
                    class="w-full sm:w-40 bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500 w-full sm:w-32">
            </form>
        </div>
    </div>
</x-app-layout>
