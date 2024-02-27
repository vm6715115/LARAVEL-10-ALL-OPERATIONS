@include('header')
<div id="main-content" align='center'>
    <h2>Single Record</h2>
    <table cellpadding="7px" style="width:50%; text-align:center;">
        <tbody>
           
            <tr>
                <th>Id :</th>
                <td>{{$student->id}}</td>
            </tr>
            <tr>
                <th>First Name :</th>
                <td>{{$student->fname}}</td>
            </tr>
            <tr>
                <th>Last Name :</th>
                <td>{{$student->lname}}</td>
            </tr>
            <tr>
                <th>Password :</th>
                <td>{{$student->password}}</td>
            </tr>
            <tr>
                <th>Conf Password :</th>
                <td>{{$student->confpassword}}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{$student->email}}</td>
            </tr>
            <tr>
                <th>Class :</th>
                <td>{{$student->class}}</td>
            </tr>
            <tr>
                <th>Gender :</th>
                <td>{{$student->gender}}</td>
            </tr>
            <tr>
                <th>Phone :</th>
                <td>{{$student->phone}}</td>
            </tr>
            <tr>
                <th>Address :</th>
                <td>{{$student->address}}</td>
            </tr>
            <tr>
                <th>Image :</th>
                <td>
                    <img src="{{$student->image}}" alt="image" style="width:90%;height:200px;">
                </td>
            </tr>
            
            
        </tbody>
    </table>
    <center>
        <button style="border-radius:10px;text-decoration:none;background-color:green;color:white;"><a style="text-decoration:none;" href="{{route('home')}}"><h1 style="color:white;">Home</h1></a></button>
    </center>
</div>
</div>
</body>
</html>
