<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>File</th>
                                <th>Is Approved</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <div>
                            <tbody class="text-center">
                                @foreach($users as $user)
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>{{ $user->country }}</td>
                                    <td>
                                        <img src="/storage/{{ $user->file }}" alt="" width="100px" height="100px">
                                    </td>
                                    @if($user->status == 1)
                                        <td>Rejected</td>
                                    @elseif($user->status == 2)
                                        <td>Approved</td>
                                    @endif
                                    <td>
                                    
                                    <a href="{{ route('users.edit', $user)}}">Edit</a>
                                    </td>
                                @endforeach
                            </tbody>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
