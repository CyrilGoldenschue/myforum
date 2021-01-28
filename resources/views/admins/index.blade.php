@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">List User</h1>

    @foreach($users as $user)
        <div class="border border-dark p-2">{{ $user->pseudo }}

            <span class=" float-right">

                {{ $user->roles }}

            </span>
        </div>
    @endforeach

@endsection

