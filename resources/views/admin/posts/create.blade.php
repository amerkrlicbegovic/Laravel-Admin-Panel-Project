@extends('layouts.app')

@section('content')

    @if ($errors->any())
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                @endforeach
            </ul>
    @endif

<div class="panel panel-default">
    <div class="panel-heading">
        Create a new post
    </div>
    <div class="panel-body">
        <form   action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <lable for="title">Title</lable>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <lable for="feature">Feature image</lable>
                <input type="file" name="feature" class="form-control">
            </div>
            <div class="form-group">
                <lable for="content">Content</lable>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Store post
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection