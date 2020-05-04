<h2 class="h2">{{$user->name}}</h2>
{{-- <h5>
    @if($user != auth()->user())
        <follow-unfollow :follows="{{ auth()->user()->follows($user) ? "true" : "false" }}" :user_id={{ $user->id}}></follow-unfollow>
    @endif
</h5> --}}
<div>

    <profile-state 
        :followers={{ $user->followers->count() }} 
        :following={{ $user->following->count() }} 
        :user_id={{$user->id}}
        :follows="{{ auth()->user()->follows($user) ? "true" : "false" }}"
        :own_profile="{{ $user == auth()->user() ? "true" : "false" }}"
        />
</div>
