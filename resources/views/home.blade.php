<x-layout>
    <div class="flex flex-col gap-6 p-6">
        @foreach ($postings as $index => $posting)
            <div class="card bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
                <!-- Image -->
                <figure class="h-40">
                    <img src="https://picsum.photos/seed/{{ $index }}/800/300" alt="Post image"
                        class="object-cover w-full h-full" />
                </figure>

                <!-- Content -->
                <div class="card-body">
                    <h2 class="card-title text-lg font-semibold text-gray-800">
                        {{ $posting['author'] }}
                    </h2>
                    <p class="text-gray-600">
                        {{ $posting['message'] }}
                    </p>
                    <div class="mt-4 text-sm text-gray-400">
                        {{ $posting['time'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
