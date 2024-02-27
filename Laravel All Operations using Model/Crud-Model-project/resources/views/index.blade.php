
@include ('header')
<div id="main-content">
    <h2>All Records</h2>
    
    @if(Session::has('success'))
    <div style="border:2px solid white;width:100%;background-color:rgb(142, 208, 142);padding:5px;border-radius:30px;">
        <p>{{Session::get('success')}}</p>
    </div>
        @endif
        @if(Session::has('denger'))
        <div style="border:2px solid white;(204, 90, 14);width:100%;background-color:rgb(214, 107, 13);padding:5px;border-radius:30px;">
            <p>{{Session::get('denger')}}</p>
        </div>
            @endif

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Class</th>
        <th>Language</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Address</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->password}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->language}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->address}}</td>
                

                <td ><a style="background-color:green;" href={{route('singleStudent',$student->id)}}>View</a></td>
                <td ><a style="background-color:blue;" href={{route('updatePage',$student->id)}}  onclick="return confirm('Are you sure ?')">Edit</a></td>
                <td> <a href={{route('deleteStudent',$student->id)}} onclick="return confirm('Are you sure ?')">Delete</a></td>
            </tr>
            @endforeach
            
            
        </tbody> 
    </table>
</div>
</div>
</body>
</html>
