@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Dashboard') }}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('customer.create') }}">Add Customer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('customer.index') }}">Customer
                                    List</a>
                            </li>
                        </ul>


                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $key => $customer)

                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->email }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('customer.edit', $customer->id) }}"
                                                            class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="{{ route('customerdelete', $customer->id) }}"
                                                            class="btn btn-danger btn-sm">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
