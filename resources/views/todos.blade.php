<x-layout>
    @foreach ($todos as $todo)
        <p>{{ $todo['title'] }}</p>
    @endforeach
    $list = json_decode($response->body(), true);

</x-layout>
