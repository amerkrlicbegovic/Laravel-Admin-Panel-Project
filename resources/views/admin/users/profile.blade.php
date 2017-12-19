@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit your profile
        </div>
        <div class="panel-body">
            <form   action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <lable for="name">User name</lable>
                    <input type="text" value="{{ $user->name }}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="name">Email</lable>
                    <input type="email" value="{{ $user->email }}" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="name">New Password</lable>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="avatar">Upload new avatar</lable>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="facebook">Facebook</lable>
                    <input type="email" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="name">Youtube</lable>
                    <input type="email" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="about">About you</lable>
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                           Update profile
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection