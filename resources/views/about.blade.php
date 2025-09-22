<x-layout>
    <h1 class="text-2xl text-bold text-white flex justify-center">this is a test about
        section</h1>

    <div class="bg-red-500 p-20 border border-red-400">
        @foreach ($kuninMona as $haha)
            <p class="mr-4">{{ $haha['id'] }}. {{ $haha['title'] }}</p>
            <h1 class="text-bold text-2xl"> <span class="text-yellow-500">BODY: </span>{{ $haha['body'] }}</h1>
        @endforeach
    </div>
</x-layout>
