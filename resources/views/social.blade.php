@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{route('socials')}}" enctype="multipart/form-data">
            @csrf

       {{-- <form method="post">
            @csrf
            <h1>Social links<button class="btn btn-sm btn-success">Add More</button> </h1>
            <div>
                <button class="float-right btn-danger" type="button">X</button>
                <div class="form-group">
                    <label for="socialName">Social link name</label>
                    <input type="text" class="form-control" id="socialName" name="socialName">
                </div>
                <div class="form-group">
                    <label for="url">Link:</label>
                    <input type="text" class="form-control" id="link" placeholder="link" name="url">
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>--}}
        <social-form/>
        </form>
    </div>
@endsection
