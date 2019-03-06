@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('user.store')}}" class="form-horizontal" method="POST">
        {{ csrf_field() }}
        @include('user_managment.user.partials.form')
    </form>    
</div>    
@endsection