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
                <div class="card mb-3">
                    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">List of students</h5>
                        <p class="card-text">You can find here all the informatins about students in the system</p>
                    
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">CNE</th>
                                <th scope="col">First name</th>
                                <th scope="col">Second Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Speciality</th>
                                <th scope="col">Operations</th>
                    
                            </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>fghfhg</td>
                                    <td>fhgfhfg</td>
                                    <td>fgds</td>
                                    <td>fgthfgf</td>
                                    <td>dfgdfgdfg</td>
                                    <td>
                    
                                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                    
                                    </td>
                    
                    
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                 </div>
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the new student</h5>
                        <form action="" method="post">
                         
                            <div class="form-group">
                                <label>CNE</label>
                                <input name="cne" type="text" class="form-control"  placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>

                            
                            <div class="form-group">
                                <label>second Name</label>
                                <input name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection