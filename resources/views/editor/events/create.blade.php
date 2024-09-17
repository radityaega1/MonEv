<x-editor-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('lang.event') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('editor.events.store') }}"
{{--                  x-data="{--}}
{{--                    province: null,--}}
{{--                    district: null,--}}
{{--                    districts: [],--}}
{{--                    onProvinceChange(event) {--}}
{{--                        axios.get(`/provinces/${event.target.value}`).then(res => {--}}
{{--                            this.districts = res.data--}}
{{--                        })--}}
{{--                    }--}}
{{--                  }" enctype="multipart/form-data"--}}
                  class="p-4 bg-white dark:bg-gray-800 rounded-md">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{__('lang.title')}}
                        </label>
                        <input type="text" id="title" name="title" placeholder="{{__('lang.isiTitle')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        @error('title')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="province_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{__('lang.province')}}
                        </label>
                        <select id="province_id" name="province_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-select input">
                            <option>{{__('lang.pilih')}}</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                        @error('province_id')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="district_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{__('lang.district')}}
                        </label>
                        <select id="district_id" name="district_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-select input">

                        </select>
                        @error('district_id')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{__('lang.address')}}
                        </label>
                        <input type="text" id="address" name="address" placeholder="{{__('lang.isiAddress')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        @error('address')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
                            {{__('lang.image')}}
                        </label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                               type="file" id="file_input" name="image" accept=".jpeg, .png, .jpg" required>
                        @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{__('lang.start_date')}}
                        </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               type="date" id="start_date" name="start_date" required>
                        @error('start_date')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{__('lang.end_date')}}
                        </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               type="date" id="end_date" name="end_date" required>
                        @error('end_date')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{__('lang.start_time')}}
                        </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               type="time" id="start_time" name="start_time" required>
                        @error('start_time')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{__('lang.end_time')}}
                        </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               type="time" id="end_time" name="end_time" required>
                        @error('end_time')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{__('lang.description')}}
                        </label>
                        <textarea class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  id="description" name="description" rows="4" placeholder="{{__('lang.isiDescription')}}" required></textarea>
                        @error('description')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">{{__('lang.tags')}}</h3>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @foreach ($tags as $tag)
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center pl-3">
                                    <input id="vue-checkbox-list" type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="vue-checkbox-list"
                                           class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $tag->name }}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        {{__('lang.create')}}
                    </button>
                </div>
            </form>
        </div>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>
            document.getElementById('start_date').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
            document.getElementById('end_date').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
            document.getElementById('start_date').addEventListener('change', function() {
                document.getElementById('end_date').min = this.value;
            });
            $(function () {
                $.ajaxSetup({
                    header: {'X-CSRF-TOKEN': $('meta[name="csrf-token]').attr('content')}
                })
                $(function() {
                    $('#province_id').on('change', function () {
                        let idProvinsi = $('#province_id').val();
                        console.log(idProvinsi);
                        $.ajax({
                            type  : 'GET',
                            url   : 'getKabupaten' + id,
                            data  : {province_id: idProvinsi},
                            cache : false,

                            success:function ($msg) {
                                $('#district_id').html(msg);
                            },

                            error: function (data) {
                                console.log('error', data)
                            }

                        })
                    })
                })
            })
            $(document).ready(function() {
                $('#province_id').on('change', function() {
                    var id = $(this).val();
                    if(id) {
                        console.log(id);
                        $.ajax({
                            url: '/getKabupaten/' + id,
                            dataType: 'json',
                            success: function (data) {
                                console.log(data)
                            }
                        })
                    }
                });
            })
        </script>
    </div>
</x-editor-app-layout>
