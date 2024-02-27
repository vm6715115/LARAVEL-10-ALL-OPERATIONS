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
                <th>Name :</th>
                <td>{{$student->name}}</td>
            </tr>
            <tr>
                <th>Languages :</th>
                <td>{{$student->language}}</td>
            </tr>
            <tr>
                <th>Password :</th>
                <td>{{$student->password}}</td>
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
            
            
        </tbody>
    </table>
</div>
</div>
</body>
</html>
