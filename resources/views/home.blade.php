@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Registation</h1>
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

                            <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Registation Form</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="{{route('person.store')}}" class="form-horizontal"  >
                                    @csrf

                                  <div class="card-body" >

                                    <div class="form-group">
                                      <label>Name</label>
                                      <input  type="text" name="name" class="form-control @error('name') is-invalid @enderror"  placeholder="Enter Your Name" required value="{{ old('name') }}">

                                      @error('name')
                                        <span class="error invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label >Address</label>
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"  placeholder="Enter Your Address" required value="{{ old('address') }}">

                                        @error('address')
                                        <span class="error invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label >ID Number</label>
                                        <input type="text" name="id_number" class="form-control @error('id_number') is-invalid @enderror"  placeholder="Enter Your ID Number" required value="{{ old('id_number') }}">

                                        @error('id_number')
                                        <span class="error invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                      </div>

                                      <div class="form-group">
                                        <label >Date of Birth</label>
                                        <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror"  placeholder="Enter Your Date of birth" required value="{{ old('dob') }}">

                                        @error('dob')
                                        <span class="error invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                      </div>

                                      <div class="form-group">
                                        <label >Age</label>
                                        <input type="number" name="age" class="form-control @error('age') is-invalid @enderror"  placeholder="Enter Your Age" required value="{{ old('age') }}">
                                        @error('age')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                      </div>

                                      <div class="form-group">
                                        <label >Gender</label>
                                        <select type="text" name="gender" class="form-control @error('gender') is-invalid @enderror" required value="{{ old('gender') }}">
                                            <option value={{ null }}>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>

                                        @error('gender')
                                        <span class="error invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                      </div>

                                      <div class="form-group">
                                        <label >Mobile Number</label>
                                        <input type="number" name="mobile" class="form-control @error('mobile') is-invalid @enderror"  placeholder="Enter Your Mobile Number" required value="{{ old('mobile') }}">

                                        @error('mobile')
                                        <span class="error invalid-feedback"> {{ $message }} </span>
                                        @enderror

                                      </div>

                                      <div class="form-group">
                                        <label >Religion</label>
                                        <select type="text" name="religion" class="form-control @error('religion') is-invalid @enderror" required value="{{ old('religion') }}">
                                            <option value={{ null }}>Select Your Religion</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Other">Other</option>
                                        </select>

                                        @error('religion')
                                        <span class="error invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                      </div>

                                      <div class="form-group">
                                        <label >Nationality</label>
                                        <select type="text" name="nationality" class="form-control @error('nationality') is-invalid @enderror" required value="{{ old('nationality') }}">
                                            <option value={{ null }}>Select your Nationality</option>
                                            <option value="Sinhala">Sinhala</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Other">Other</option>
                                        </select>

                                        @error('nationality')
                                        <span class="error invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                      </div>
                                </div>


                                  <!-- /.card-body -->

                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </form>
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

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection




