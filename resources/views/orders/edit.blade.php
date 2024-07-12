@extends('layout.main')

@section('section')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Update Order</h2>
                <form method="post" action="{{ route('orders.update',$order->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="detail">Details</label>
                        <input type="text" class="form-control" value="{{$order->details}}" id="detail" name="details" placeholder="Enter Detail" required>
                    </div>
                    <div class="form-group">
                        <label for="client">Client</label>
                        <input type="text" class="form-control" value="{{$order->client}}" name="client" placeholder="Enter Name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
