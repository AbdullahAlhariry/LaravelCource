@extends('master.app')

@section('content')
<h1>All Posts <a href="{{ route('posts.create') }}" class='btn btn-primary btn-sm'>Add New</a></h1>
<div class="row">
    <div class="col-lg-10">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th colspan="2">Actions</th>
            </tr>
            @foreach($posts as $ps)
                <tr>
                    <td>{{$ps->post_id}}</td>
                    <td>{{$ps->title}}</td>
                    <td>{{$ps->body}}</td>
                    <td><a href="{{ route('posts.edit',$ps->post_id) }}" class="btn btn-xs btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('posts.destroy',$ps->post_id) }}" method='post'>
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value='DELETE'/>
                            <input type='submit' value='Delete' class='btn btn-xs btn-danger'/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection