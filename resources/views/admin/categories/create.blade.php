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
            Create a new category
        </div>
        <div class="panel-body">
            <form   action="{{route('category.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <lable for="name">Name</lable>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store category
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection