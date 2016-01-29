@extends('main_layout')

@section('content')

<div class="container" style="width:60%">
  <h1>{{$book->title}}</h1>
    <div class="thumbnail">
            <div style="background-repeat: no-repeat; background-image: url('{{asset('/asset/img/'.$book->cover)}}'); height:300px; width:300px; background-size: cover;"></div>
            <div class="caption">
              <h4>{{$book->title}}</h4>
              <p>Author : <b>{{$book->author->name}} {{$book->author->surname}}</b></p>
              <p>Price : <b>{{$book->price}}</b></p>
              @if(Auth::check())
              <form action="/cart/add" name="add_to_cart" method="post" accept-charset="UTF-8">
                <input type="hidden" name="book" value="{{$book->id}}" />
                <select name="amount" style="width: 100%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                {!! csrf_field() !!}
              <p align="center"><button class="btn btn-info btn-block">Add to Cart</button></p>
            </form>
            @endif
            </div>
          </div>
</div>
@stop