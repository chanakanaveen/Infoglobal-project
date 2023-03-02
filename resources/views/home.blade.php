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
                            {{-- <p class="card-text">
                                {{ __('You are logged in!') }}
                            </p> --}}
                            {{-- <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Registation Form</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form >
                                  <div class="card-body">

                                    <div class="form-group">
                                      <label >Name</label>
                                      <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Your Name">
                                    </div>

                                    <div class="form-group">
                                        <label >Address</label>
                                        <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Your Address">
                                    </div>

                                    <div class="form-group">
                                        <label >ID Number</label>
                                        <input type="text" class="form-control" id="exampleInputIDNumber" placeholder="Enter Your ID Number">
                                      </div>

                                      <div class="form-group">
                                        <label >Date of birth</label>
                                        <input type="date" class="form-control" id="exampleInputDob" placeholder="Enter Your Date of birth">
                                      </div>

                                      <div class="form-group">
                                        <label >Age</label>
                                        <input type="number" class="form-control" id="exampleInputAge" placeholder="Enter Your Age">
                                      </div>

                                      <div class="form-group">
                                        <label >Gender</label>
                                        <select type="text" name="gender" class="form-control">
                                            <option value={{ null }}>Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                      </div>

                                      <div class="form-group">
                                        <label >Mobile Number</label>
                                        <input type="number" class="form-control" id="exampleInputMobile" placeholder="Enter Your Mobile Number">
                                      </div>

                                      <div class="form-group">
                                        <label >Religion</label>
                                        <select type="text" name="religion" class="form-control">
                                            <option value={{ null }}>Select Your Religion</option>
                                            <option value="buddhist">Buddhist</option>
                                            <option value="christian">Christian</option>
                                            <option value="muslim">Muslim</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="other">Other</option>
                                        </select>
                                      </div>

                                      <div class="form-group">
                                        <label >Nationality</label>
                                        <select type="text" name="nationality" class="form-control">
                                            <option value={{ null }}>Select your Nationality</option>
                                            <option value="sinhala">Sinhala</option>
                                            <option value="tamil">Tamil</option>
                                            <option value="islam">Islam</option>
                                            <option value="other">Other</option>
                                        </select>
                                      </div>
                                </div>


                                  <!-- /.card-body -->

                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </form>
                              </div>
                        </div> --}}
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Registration Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="" class="form-horizontal">
                              <div class="card-body">

                                <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Your Name">
                                </div>

                                <div class="form-group">
                                  <label>Address</label>
                                  <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Your Address">
                                </div>

                                <div class="form-group">
                                  <label>ID Number</label>
                                  <input type="text" class="form-control" id="exampleInputIDNumber" placeholder="Enter Your ID Number">
                                </div>

                                <div class="form-group">
                                  <label>Date of birth</label>
                                  <input type="date" class="form-control" id="exampleInputDob" placeholder="Enter Your Date of birth">
                                </div>

                                <div class="form-group">
                                  <label>Age</label>
                                  <input type="number" class="form-control" id="exampleInputAge" placeholder="Enter Your Age">
                                </div>

                                <div class="form-group">
                                  <label>Gender</label>
                                  <select type="text" name="gender" class="form-control">
                                    <option value={{ null }}>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Mobile Number</label>
                                  <input type="number" class="form-control" id="exampleInputMobile" placeholder="Enter Your Mobile Number">
                                </div>

                                <div class="form-group">
                                  <label>Religion</label>
                                  <select type="text" name="religion" class="form-control">
                                    <option value={{ null }}>Select Your Religion</option>
                                    <option value="buddhist">Buddhist</option>
                                    <option value="christian">Christian</option>
                                    <option value="muslim">Muslim</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="other">Other</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Nationality</label>
                                  <select type="text" name="nationality" class="form-control">
                                    <option value={{ null }}>Select your Nationality</option>
                                    <option value="sinhala">Sinhala</option>
                                    <option value="tamil">Tamil</option>
                                    <option value="islam">Islam</option>
                                    <option value="other">Other</option>
                                  </select>
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
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection