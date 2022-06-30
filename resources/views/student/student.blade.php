@extends('student.layouts.app')

@section('main-content')
<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>


    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    <!-- student list  -->
                    
                    @include('student.layouts.studentlist')

                </section>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                <!-- student list  -->
                @include('student.layouts.studentlist')
            </section>
            @if ($type==='add')
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the new student</h5>
                        @include('validate.validate')
                        <form action="{{route('student.create')}}" method="post">
                         @csrf
                            <div class="form-group">
                                <label>CODE</label>
                                <input name="code" type="text" class="form-control" value="{{old('code')}}"  placeholder="Enter code">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control" value="{{old('firstName')}}" placeholder="Enter the first name">
                            </div>

                            
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="lastName" type="text" class="form-control" value="{{old('lastName')}}" placeholder="Enter last name">
                            </div>
                            
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control" value="{{old('age')}}" placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control" value="{{old('speciality')}}" placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
            @endif

            @if ($type==='edit')
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Edit informations of a student</h5>
                        @include('validate.validate')
                        <form action="{{route('student.update', $edit_id->id)}}" method="post">
                         @csrf
                            <div class="form-group">
                                <label>CODE</label>
                                <input name="code" type="text" class="form-control" value="{{$edit_id->code}}"  placeholder="Enter code">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control" value="{{$edit_id->first_name}}" placeholder="Enter the first name">
                            </div>

                            
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="lastName" type="text" class="form-control" value="{{$edit_id->last_name}}" placeholder="Enter last name">
                            </div>
                            
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control" value="{{$edit_id->age}}" placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control" value="{{$edit_id->speciality}}" placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
            @endif
        </div>
    </div>
@endsection