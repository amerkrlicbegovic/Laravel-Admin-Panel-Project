@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit post
        </div>
        <div class="panel-body">
            <form   action="{{route('post.update', ['id'=> $post-> id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <lable for="title">Title</lable>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <lable for="featured">Feature image</lable>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                            @if($post->category->id == $category->id)
                                selected
                            @endif

                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Select tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                              <label><input type="checkbox" name="tags[]" value="{{$tag->id}}"
                                @foreach($post->tags as $t)
                                    @if($tag->id == $t->id)
                                        checked
                                    @endif
                                @endforeach
                                    >{{$tag->tag}}
                              </label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <lable for="content">Content</lable>
                    <textarea name="content" id="summernote" cols="5" rows="5" class="form-control">{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection