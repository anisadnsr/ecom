@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
  <h1>Daftar User</h1>
  <table class="table">
    <tbody>
      <tr>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Action</b></td>
      </tr>
      @foreach($user as $ur)
        <tr>
          <td>{{$ur->name}}</td>
          <td>{{$ur->email}}</td>
          <td>
            <a href="{{URL::route('delete_book_from_cart',array($ur->id))}}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop