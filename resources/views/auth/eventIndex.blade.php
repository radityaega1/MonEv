<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('List Event') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                @foreach ($events as $event)
                    <div class="card lg:flex dark:bg-gray-900 rounded-md">
                        <img class="card-img-top object-cover w-full h-56 rounded-lg lg:w-64" src="{{ asset('/storage/' . $event->image) }}" alt="{{ $event->title }}">
                        <div class="card-body flex flex-col justify-between py-6 lg:mx-6 ">
                            <a href="{{ route('eventShow', $event->id) }}"
                               class="text-xl font-semibold text-black hover:underline dark:text-white ">
                                {{ $event->title }}
                            </a>
                            <p>{{ $event->start_date }}, {{ $event->start_time }}</p>
                            <br>
                            <span class="flex flex-wrap space-x-2">
                                <p class="text-white dark:text-gray-300 text-sm p-1 bg-indigo-400 rounded-md">{{ $event->country->name }}</p>
                            </span>
                            <span class="flex flex-wrap space-x-2">
                                @foreach ($event->tags as $tag)
                                    <p class="text-sm p-1 bg-slate-200 rounded-md">{{ $tag->name }}</p>
                                @endforeach
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $events->links() }}
        </div>
    </div>
</x-app-layout>
