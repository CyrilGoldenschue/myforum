@extends ('layout')

@section ('content')


    @foreach($userInfos as $key => $user)
            @if($key === 0)
            <div class="p-2">Utilisateur : {{ $user->user->pseudo }}</div>

                @foreach($userInfos as $role)
                    @if($user->user->id == $role->user->id)
                        <div class="border border-dark p-2">{{ $role->role->name }} <a href="{{ route('users.destroy', $user->user->id, $role->role->id) }}" class="btn-red float-right">supprimer</a> </div>
                    @endif
                @endforeach



    <div id="accordionnew">
        <button class="btn btn-primary" data-toggle="collapse" data-target="#collapsenew" aria-expanded="true" aria-controls="collapsenew">
            Ajouter un sujet
        </button>
        <div id="collapsenew" class="collapse" data-parent="#accordionnew">
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <textarea class="form-control" name="newtop"></textarea>
                <button class="btn btn-success" type="submit">Envoyer</button>
                <input type="hidden" name="theme">
            </form>
        </div>
    </div>

        @endif
    @endforeach
@endsection
