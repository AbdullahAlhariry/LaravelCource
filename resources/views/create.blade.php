@extends('master.app')

@section('content')
<h1 style='width:70%; margin:15px auto'>Add New Post</h1>
    <div class="row" style='width:70%; margin:15px auto'>
        <div class="col-lg-10">
            <form action="{{ route('posts.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class='form-control' name='title'>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="body" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type='submit' class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection