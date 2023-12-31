@extends('layouts.mainlayout')

@section('title', 'User List')

@section('page-name', 'User List')

@section('content')
    <h2>User List</h2>

    <div class="mt-5 d-flex justify-content-end">
        
        <a href="/users-banned" class="btn btn-danger me-3">View Banned Users</a>

        <a href="/registered-users" class="btn btn-primary me-3">View Registered Users</a>
        
        <a href="/registered-users" class="btn btn-primary me-3">Activate User</a>

        <a href="/user-add" class="btn btn-success">Add User</a>
    </div>

    <div class='mt-5'>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    
    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            <a href="/user-detail/{{ $item->slug }}" class="me-4">View And/Or Edit Account</a>
                            <a href="/user-ban/{{ $item->slug }}" style="color: red; font-weight: bold;">Ban User</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
