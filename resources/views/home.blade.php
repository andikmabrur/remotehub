@php
    use App\User;
    use App\Message;
    $users = User::all();
    $messages = Message::all();    
    $counter = 0;
@endphp

@extends('layouts.app-template')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col s24">
                <div class="login-form">
                    <div class="form-body">
                        <h3>Users list</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Birth Date</th>
                                <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    @php
                                        $counter++;
                                    @endphp
                                    <td>{{ $counter }}</td>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ Carbon\Carbon::parse($user->birthdate)->format('d/m/Y') }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $counter = 0;
    @endphp

    <div class="container">
            <div class="row justify-content-center">
                <div class="col s24">
                    <div class="login-form">
                        <div class="form-body">
                            <h3>Messages list</h3>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $message)
                                    <tr>
                                        @php
                                            $counter++;
                                        @endphp
                                        <td>{{ $counter }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->message }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
