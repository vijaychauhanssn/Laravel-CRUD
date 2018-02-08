@extends('layouts.default')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Post CRUD</h2>

        </div>

    </div>

</div>

@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif

<table class="table table-bordered">

    <tr>

        <th width="80px">No</th>

        <th>Title</th>

        <th>Content</th>

        <th width="200px" class="text-center">

            <a class="btn btn-success btn-sm" href="{{ route('posts.create') }}">Create New Post</a>

        </th>

    </tr>

@foreach ($posts as $post)

<tr>

    <td>{{ ++$i }} </td>

    <td>{{ $post->title }}</td>

    <td>{{ $post->content }}</td>

    <td>

        <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Post </a>

        <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit <i class="fa fa-edit"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">Delete </button>

        {!! Form::close() !!}

    </td>

</tr>

@endforeach

</table>

{!! $posts->render() !!}

@endsection