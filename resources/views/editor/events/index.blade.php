<x-editor-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{__('Events') }}
            </h2>
            <div>
                <a href="{{route('editor.events.create')}}" class="text-gray-800 dark:text-gray-200 hover:text-slate-200">{{__('lang.buat_event')}}</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full text-sm text-center">
                    <thead class="uppercase text-lg text-black dark:text-white">
                    <tr>
                        <th scope="col" class="px-2 py-1.5 border border-b-white">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 border border-b-white">
                            {{__('lang.title')}}
                        </th>
                        <th scope="col" class="px-6 py-3 border border-b-white">
                            {{__('lang.image')}}
                        </th>
                        <th scope="col" class="px-6 py-3 border border-b-white">
                            {{__('lang.start_date')}}
                        </th>
                        <th scope="col" class="px-6 py-3 border border-b-white">
                            {{__('lang.end_date')}}
                        </th>
                        <th scope="col" class="px-6 py-3 border border-b-white">
                            {{__('lang.address')}}
                        </th>
                        <th scope="col" class="px-6 py-3 border border-b-white">
                            {{__('lang.action')}}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($events as $event)
                        <tr class="bg-gray-500 dark:border-gray-700">
                            <td class="px-1 py-2">
                                {{ $event->id}}
                            </td>
                            <th scope="row" class="px-3 py-2 font-medium">
                                {{ $event->title }}
                            </th>
                            <td class="px-1 py-2">
                                <img src="{{url('storage/')}}" alt="">
                                {{$event->image}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->start_date->format(config('app.date_format'))}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->end_date->format(config('app.date_format')) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->address }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('editor.events.edit', $event) }}" class="text-green-400 hover:text-green-600">{{__('lang.edit')}}</a>
                                    <div>|</div>
                                    <form method="POST" class="text-red-600 hover:text-red-600" action="{{ route('editor.events.destroy', $event) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('editor.events.destroy', $event) }}"
                                           onclick="event.preventDefault();
                                           this.closest('form').submit();">
                                            {{__('lang.delete')}}
                                        </a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-3 text-2xl text-gray-500 dark:text-gray-400">
                                {{__('lang.no_event')}}
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-editor-app-layout>
