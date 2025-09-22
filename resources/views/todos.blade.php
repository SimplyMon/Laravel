<x-layout>

    <div style='color: white;'>
        @foreach ($todoLists as $todoList)
            <p><span>{{ $todoList['id'] }}. </span>{{ $todoList['title'] }}</p>
        @endforeach

    </div>

</x-layout>
