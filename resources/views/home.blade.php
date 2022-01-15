@extends('master.layout')


@section('content')
<div class="container mt-5">
  <a href="{{route('post.create')}}">
    <button type="button" class="btn btn-primary btn-lg m-3"><i class="fas fa-plus"></i></button>
  </a>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th>Image</th>

        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($Posts as $post)
      <tr>
        <td>
          {{$post->title}}
        </td>
        <td>
          {{Str::limit($post->body , 50)}}
        </td>

        <td>
          <img width="50" height="50" src={{asset($post->image)}} class="card-img-top" alt={{$post->title}}>
        </td>

        <td>
          <div style="display:inline-block;">
            <a href="{{route('post.show' ,$post->slug)}}">
              <button type="button" class="btn btn-warning"><i class="fas fa-info-circle"></i></button>
            </a>
            <a href="{{route('post.edit' ,$post->slug)}}">
              <button type="button" class="btn btn-primary"><i class="far fa-edit"></i></i></button>
            </a>


            <a href=>
              <form action="{{route('post.delete' ,$post->slug)}}" method="POST">
                @csrf
                @method("delete")
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </form>

            </a>




          </div>
        </td>

      </tr>

      @endforeach


    </tbody>
  </table>


  <div class="justify-content-center center">
    {{ $Posts->links() }}

  </div>
  @endsection