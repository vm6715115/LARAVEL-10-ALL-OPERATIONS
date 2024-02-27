@include('header')
<div id="main-content" align='center'>
    <h2>Single Record</h2>
    <table cellpadding="7px" style="width:50%; text-align:center;">
        <tbody>
            
            <tr>
                <th>Id :</th>
                <td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>Name :</th>
                <td>{{$data->name}}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{$data->email}}</td>
            </tr>
            <tr>
                <th>Password :</th>
                <td>{{$data->password}}</td>
            </tr>
            <tr>
                <th>Class :</th>
                <td>{{$data->class}}</td>
            </tr>
            <tr>
                <th>Language :</th>
                <td>{{$data->language}}</td>
            </tr>
           
            <tr>
                <th>Gender :</th>
                <td>{{$data->gender}}</td>
            </tr>
            <tr>
                <th>Phone :</th>
                <td>{{$data->phone}}</td>
            </tr>
            <tr>
                <th>Address :</th>
                <td>{{$data->address}}</td>
            </tr>
           
            
        </tbody>
    </table>
</div>
</div>
</body>
</html>
