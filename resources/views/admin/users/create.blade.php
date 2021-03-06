@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new user
        </div>
        <div class="panel-body">
            <form   action="{{route('user.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <lable for="name">Name</lable>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="name">Email</lable>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                           Add user
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


