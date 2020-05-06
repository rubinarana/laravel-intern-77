@extends('layouts.boot-profile')

@section('saurav')
<div class="row">
    <div class="col-sm-4">

        @include('components.profile_card', $user)

        @include('components.profile_links')
        
        <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
        @foreach ([1,2, 3, 4] as $item)
            @include('components.posts')
            <br></br>
        @endforeach
    </div>
</div>
@endsection