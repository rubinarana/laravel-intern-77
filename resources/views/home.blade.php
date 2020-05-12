@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                        <tr>
                            <th>
                                name
                            </th>
                            <th>
                                created_at
                            </th>
                            <th>
                                Followers
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        @foreach($user as $u)
                            <tr>
                                <td>
                                    <a href="{{ url('/'.$u->username) }}">{{ $u->name }}</a>
                                </td>
                                <td>
                                    {{ $u->created_at }}
                                </td>
                                <td>
                                    @foreach($u->followers as $follower)

                                        <span>{{ $follower->user->name }}, </span>
                                    @endforeach
                                </td>
                                <td>
                                    {{-- @if(auth()->user()->follows($u))
                                    <form action="{{ route('unfollow') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$u->id}}" name="user_id">
                                        <button type="submit">UnFollow</button>
                                    </form>
                                    @else
                                    <form action="{{ route('follow') }}" method="POST">
                                        @csrf
    -+                             @endif --}}.
                                    <follow-unfollow v-bind:follows="{{ auth()->user()->follows($u) ? "true" : "false" }}" v-bind:user_id={{ $u->id}} ></follow-unfollow>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $user->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
