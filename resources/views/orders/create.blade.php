        @extends('layout.main')
        @section('section')
            <form method="post" action="{{ route('orders.store') }}">
                @csrf
                <div>
                    <div class="col-md-12">
                        <label for="detail">Details</label>
                        <input type="text" class="form-control" name="detail" placeholder="Enter Detail">
                    </div>
                    <div class="col-md-12" >
                        <label for="client">Client</label>
                        <input type="text" class="form-control" name="client" placeholder="Enter Name">
                    </div>
                    <div class="mt-4" style="margin-top: 7px;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        @endsection
