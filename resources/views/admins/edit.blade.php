<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('users.update', $user) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                         <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{ $user->city }}" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="country" :value="__('Country')" />

                            <x-input id="country" class="block mt-1 w-full" type="text" name="country" value="{{ $user->country }}" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $user->phone }}" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="status" :value="__('Status')" />
                            <select name="status" id="status">
                                <option>Choose Status</option>
                                <option value="1">Rejected</option>
                                <option value="2">Approved</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                               <x-button class="ml-4">
                                    {{ __('Update') }}
                               </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>