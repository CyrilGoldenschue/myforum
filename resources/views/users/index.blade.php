@extends ('layout')

@section ('content')
    @php $userId = array (""); @endphp
    @foreach ($users as $user)
        @if(!array_search($user->user->id, $userId))
            <div class="border border-dark p-2">{{ $user->user->pseudo }}


                @if($users->contains('user_id', $user->user->id))
                    @foreach($users as $role)
                        @if($user->user->id == $role->user->id)
                    <span class="badge badge-light float-right">{{ $role->role->name }}</span>
                        @endif
                    @endforeach
                @else
                    <span class="badge badge-light float-right">{{ $user->role->name }}</span>
                @endif

            </div></a>
            @php array_push($userId, $user->user->id); @endphp
        @endif
    @endforeach
@endsection
