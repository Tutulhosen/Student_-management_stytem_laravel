<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
<div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">You can find here all the informatins about students in the system</p>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">CODE</th>
            <th scope="col">First name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Operations</th>

        </tr>
        </thead>
        <tbody>
        
            @forelse ($data as $student)
            <tr>
                <td>{{$student->code}}</td>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->speciality}}</td>
                <td>

                    <a href="{{route('student.edit', $student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{route('student.destroy', $student->id)}}" class="btn btn-sm btn-warning">Delete</a>
                   

                </td>


            </tr>
            @empty
                
            @endforelse
            
        
        </tbody>
    </table>
</div>
</div>