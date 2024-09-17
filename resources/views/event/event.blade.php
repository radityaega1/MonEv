<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- component -->
                    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                        @foreach ($events as $event)
                            <div class="card lg:flex bg-gray-800 rounded-md">
                                <img class="card-img-top object-cover w-full h-56 rounded-lg lg:w-64" src="{{ asset('/storage/' . $event->image) }}" alt="{{ $event->title }}">
                                <div class="card-body flex flex-col justify-between py-6 lg:mx-6 ">
                                    <a href="{{ route('eventShow', $event->id) }}"
                                       class="text-xl font-semibold text-black hover:underline dark:text-white ">
                                        {{ $event->title }}
                                    </a>
                                    <p>{{ $event->start_date }}, {{ $event->start_time }}</p>
                                    <br>
                                    <span class="flex flex-wrap space-x-2">
                                        <p class="text-white dark:text-gray-300 text-sm p-1 bg-indigo-400 rounded-md">{{ $event->district->name }}</p>
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
        </div>
    </div>
{{--    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">--}}
{{--        <h2 class="sr-only">Products</h2>--}}
{{--        @foreach ($events as $event)--}}
{{--            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">--}}
{{--                <a href="{{ route('eventShow', $event->id) }}" class="group">--}}
{{--                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">--}}
{{--                        <img src="{{ asset('/storage/' . $event->image) }}" alt="{{ $event->title }}" class="h-full w-full object-cover object-center group-hover:opacity-75">--}}
{{--                    </div>--}}
{{--                    <h2 class="mt-4 text-sm text-gray-700">{{ $event->title }}</h2>--}}
{{--                    <h4 class="mt-1 text-lg font-medium text-gray-900">$48</h4>--}}
{{--                    <p class="mt-1 text-lg font-medium text-gray-900">{{ $event->start_date }}, {{ $event->start_time }}</p>--}}
{{--                </a>--}}

{{--                <a href="#" class="group">--}}
{{--                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">--}}
{{--                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">--}}
{{--                    </div>--}}
{{--                    <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>--}}
{{--                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>--}}
{{--                </a>--}}

{{--                <a href="#" class="group">--}}
{{--                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">--}}
{{--                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">--}}
{{--                    </div>--}}
{{--                    <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>--}}
{{--                    <p class="mt-1 text-lg font-medium text-gray-900">$89</p>--}}
{{--                </a>--}}

{{--                <a href="#" class="group">--}}
{{--                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">--}}
{{--                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">--}}
{{--                    </div>--}}
{{--                    <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>--}}
{{--                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            {{ $events->links() }}--}}
{{--        @endforeach--}}
{{--    </div>--}}
</x-app-layout>
