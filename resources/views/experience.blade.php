@extends('layouts.app')
 @section('content')
         <form action="{{route('sanjaya')}}" method="post" enctype="multipart/form-data">
             @csrf
         <experience-form/>
         </form>


 @endsection

