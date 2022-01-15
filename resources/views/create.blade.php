@extends('master.layout')

<div class="card">
    @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
    @endif
    <div class="row  justify-content-center">
        <div class="col-md-6 offset-md-2 m-5">
            <div class="card">
                <div class="card-header">
                    <h2> Ajoute Article</h2>

                </div>
                <div class="card-body">
                    <div>
                        <form action="{{route('post.createPost')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="enter title ">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="mb-3 form-check">
                                <textarea class="form-control" name="body" placeholder="enter description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                    <div>


                    </div>
                </div>

            </div>
        </div>

    </div>