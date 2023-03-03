@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Details</h1>
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
                            {{-- <p class="card-text">
                                {{ __('You are logged in!') }}
                            </p> --}}

                            <table class="table" id="peopleTable">
                                <thead>
                                <tr>
                                    <th>NIC</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>DOB</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Mobile</th>
                                    <th>Religion</th>
                                    <th>Nationality</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($people as $person)
                                    <tr>
                                        <td>{{ $person->id_number }}</td>
                                        <td>{{ $person->name }}</td>
                                        <td>{{ $person->address }}</td>
                                        <td>{{ $person->dob }}</td>
                                        <td>{{ $person->age }}</td>
                                        <td>{{ $person->gender }}</td>
                                        <td>{{ $person->mobile }}</td>
                                        <td>{{ $person->religion }}</td>
                                        <td>{{ $person->nationality }}</td>
                                        <td><a href="{{ route('person.show', $person->id) }}"
                                            class="btn btn-success btn-block">{{ __('View') }}</a>

                                            <a href="{{ route('person.edit', $person->id) }}"
                                                class="btn btn-warning btn-block" role="button">{{ __('Edit') }}
                                            </a>

                                            <a onclick="return confirm('Are you sure?')"
                                               href="{{ route('person.delete', $person->id) }}"
                                               class="btn btn-danger btn-block">{{ __('Delete') }}</a>



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
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
