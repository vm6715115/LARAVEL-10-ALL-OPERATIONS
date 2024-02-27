<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h2><u><b>{{$title}}</b></u></h2>
    <h2><u>Date:{{$date}}</u></h2>

    <div id="main-content">
        <h2>All Records</h2>
        <table cellpadding="7px" border="1">
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
                </tr>
                @endforeach
                
                
            </tbody> 
        </table>
    </div>
</body>
</html>