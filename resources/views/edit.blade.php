@extends('master.app')

@section('content')
    <h1 style='width:70%; margin:15px auto'>Edit Post</h1>
    <div class="row" style='width:70%; margin:15px auto'>
        <div class="col-lg-10">
            <form action="{{ route('posts.update',$post->post_id)}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value='PUT'>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class='form-control' name='title' value='{{$post->title}}'>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="body" rows="4" class="form-control">{{$post->body}}</textarea>
                </div>
                <div class="form-group">
                    <button type='submit' class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection