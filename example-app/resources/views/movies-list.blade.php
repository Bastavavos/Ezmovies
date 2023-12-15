<x-layout>
    <div class="flex justify-center w-3/5 flex-wrap gap-3.5">
        @foreach($movies as $movie)
            <x-displaymovies title="{{$movie->title}}" director="{{$movie->director}}" type="{{$movie->type}}" date="{{$movie->date}}">
            </x-displaymovies>
        @endforeach
    </div>
</x-layout>
