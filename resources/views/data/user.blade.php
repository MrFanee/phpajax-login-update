@extends('layout.layout')

    @section('title')
    <title>User</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    @section('conten')
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <label>USER</label>
                <br>
                <table class="table table-hover">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                    </tr>
                    @foreach ( $user as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->name}}</td>
                        <td>{{ $d->email}}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>{{ $d->updated_at }}</td>

                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
    @endsection
