@include('header')
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="{{route('updateStudent',$data->id)}}" method="post" enctype="multipart/form-data">
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
                <option value="BCA" @if($data->class == 'BCA')selected @endif>BCA</option>
                <option value="BSC" @if($data->class == 'BSC')selected @endif>BSC</option>
                <option value="B.TECH" @if($data->class == 'B.TECH')selected @endif>B.TECH</option>
            </select>
            <span style="color:red;">@error('class'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" name="phone" value="{{$data->phone}}"/>
            <span style="color:red;">@error('phone'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Image</label>
            <img src="{{$data->image}}" alt="image" style="width:30%;height:100px;">
            <input type="file" name="image" style="margin-left:30%"/>
            <span style="color:red;">@error('image'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
</body>
</html>
