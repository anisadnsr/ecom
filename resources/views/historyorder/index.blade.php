@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
  <h1>Daftar History Order</h1>

  @foreach($orders as $order)
 <div class="accordion-group">
      <div class="accordion-heading country">
        <a class="accordion-toggle" data-toggle="collapse" href="#order{{$order->id}}">Order #{{$order->id}} - {{$order->User->name}} - {{$order->created_at}}</a>
      </div>
      <div id="order{{$order->id}}" class="accordion-body collapse">
        <div class="accordion-inner">
          <table class="table table-striped table-condensed">
            <thead>
              <tr>
                <th>Title</th>
                <th>Amount</th>
                <th>Price</th>
                <th>Total</th>
              </tr>
            </thead>   
            <tbody>
            @foreach($order->orderItems as $orderitem)
              <tr>
                <td>{{$orderitem->title}}</td>
                <td>{{$orderitem->pivot->amount}}</td>
                <td>{{$orderitem->pivot->price}}</td>
                <td>{{$orderitem->pivot->total}}</td>
              </tr>
            @endforeach
              <tr>
                <td></td>
                <td></td>
                <td><b>Total</b></td>
                <td><b>{{$order->total}}</b></td>
              </tr>
              <tr>
                <td><b>Shipping Address</b></td>
                <td>{{$order->address}}</td>
                <td>Status : </td>
                <td>
                  @if($order->status==1)
                    <b>On Processing Order</b>
                  @elseif($order->status==2)
                    <b>Order Sent</b>
                  @elseif($order->status==3)
                    <b>Order Rejected</b>
                  @else
                    <b>Error Occured please contact admin</b>
                  @endif
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endforeach
</div>
@stop