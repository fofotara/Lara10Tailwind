<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mb-4 sm:mb-0">
        <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Article Detail ✨</h1>
    </div>

    <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
        <x-url-button href="{{ route('dashboard.articles.index') }}"> Back </x-url-button>
    </div>

    <div class="bg-white shadow-lg rounded-sm border border-slate-200 mb-8">
        <div class="overflow-x-auto m-4">

             <div class="sm:1/3 mb-2">
                 <label class="text-2xl md:text-3xl text-slate-800 font-bold">Article Code :{{$article->article_number}} </label>

             </div> <div class="sm:1/3 mb-4">
                 <label class="text-2xl md:text-3xl text-slate-800 font-bold">Status :{{$article->status}} </label>
             </div>
            <div class="sm:1/3 mb-4">
                <label class="text-2xl md:text-2xl text-slate-800">Short :{{$article->short}} </label>
            </div>
            <div class="sm:1/3 mb-2">
                <label class="text-slate-800">Detail :{{$article->long}} </label>
            </div>

        </div>


        </div>
    </div>
</x-app-layout>
