@extends('master.layout')
<div class="container">

    <div class="card center">
        <img src="{{asset($Post->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$Post->title}}</h5>
            <p class="card-text">
                {{$Post->body}}
            </p>

        </div>
    </div>

</div>