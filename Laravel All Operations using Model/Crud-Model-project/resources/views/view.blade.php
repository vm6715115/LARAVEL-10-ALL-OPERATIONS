@include('header')
<div id="main-content" align='center'>
    <h2>Single Record</h2>
    <table cellpadding="7px" style="width:50%; text-align:center;">
        <tbody>
           
            <tr>
                <th>Id :</th>
                <td>{{$students->id}}</td>
            </tr>
            <tr>
                <th>Name :</th>
                <td>{{$students->name}}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{$students->email}}</td>
            </tr>
           
            <tr>
                <th>Password :</th>
                <td>{{$students->password}}</td>
            </tr>
           
            <tr>
                <th>Class :</th>
                <td>{{$students->class}}</td>
            </tr>
            <tr>
                <th>Language :</th>
                <td>{{$students->language}}</td>
            </tr>
            <tr>
                <th>Gender :</th>
                <td>{{$students->gender}}</td>
            </tr>
            <tr>
                <th>Phone :</th>
                <td>{{$students->phone}}</td>
            </tr>
            <tr>
                <th>Address :</th>
                <td>{{$students->address}}</td>
            </tr>
           
            
        </tbody>
    </table>
</div>
</div>
</body>
</html>
