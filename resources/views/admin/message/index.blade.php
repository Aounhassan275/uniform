@extends('admin.layout.index')

@section('title')
    Messages
@endsection

@section('content')
<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Message::all() as $message)
            <tr>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->subject}}</td>
                <td>{{$message->message}}</td>
                <td>
                    <div class="btn-group">
                        <form action="{{route('admin.message.destroy',$message->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-dark btn-sm">Delete</button>
                        </form>
                      
                      </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
