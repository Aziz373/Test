@extends('layout.main')
@section('section')

    <a href="{{ route('orders.create') }}" class="btn btn-danger btn-sm">
        <i class="fa fa-trash"></i> Create
    </a>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Detail</th>
            <th scope="col">Client</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $item->details }}</td>
                <td>{{ $item->client }}</td>
                <td>
                        <a href="{{ route('orders.edit', $item->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                    <form action="{{ route('orders.destroy', $item->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
