@include('header')
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="{{route('updateStudent',$data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" value="{{$data->fname}}" />
            <span style="color:red;">@error('fname'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" value="{{$data->lname}}"/>
            <span style="color:red;">@error('lname'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{$data->email}}"/>
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="{{$data->password}}" />
            <span style="color:red;">@error('password'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confpassword" value="{{$data->confpassword}}" />
            <span style="color:red;">@error('confpassword'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>gender</label>
            <input type="text" name="gender" value="{{$data->gender}}"/>
            <span style="color:red;">@error('gender'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address"  cols="30" rows="10">{{$data->address}}</textarea>
            <span style="color:red;">@error('address'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                @foreach($data1 as $student)
                <option value="{{$student->cid}}" @if($data->class == $student->cid) selected @endif>{{$student->class}}</option>
                @endforeach
            </select>
            <span style="color:red;">@error('class'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" name="phone" value="{{$data->phone}}"/>
            <span style="color:red;">@error('phone'){{$message}}@enderror</span>
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
</body>
</html>
