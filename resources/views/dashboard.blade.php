@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h5 class="card-title">{{ __('About us') }}</h5> --}}

                            <p class="card-text">
                                Welcome to our website, where we offer a reliable and efficient person registration system to store and maintain the personal data of individuals who deal with financial companies.
                            </p>
                            <p>Our system is designed to identify individuals uniquely by their national ID number, ensuring that their data is safe and secure. Our user-friendly and responsive UI ensures that individuals can easily navigate and use our system without any technical difficulties.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
