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
                                <a class="nav-link" href="{{ route('customer.create') }}">Add Customer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.index') }}">Customer
                                    List</a>
                            </li>
                        </ul>
                        <br><br>


                        {{ __('Welcome To Admin Dashboard') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
