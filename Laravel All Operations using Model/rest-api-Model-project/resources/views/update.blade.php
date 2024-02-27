@include('header')
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="{{route('updateStudent',$student->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" value="{{$student->fname}}" />
            <span style="color:red;">@error('fname'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" value="{{$student->lname}}"/>
            <span style="color:red;">@error('lname'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{$student->email}}"/>
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="{{$student->password}}" />
            <span style="color:red;">@error('password'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confpassword" value="{{$student->confpassword}}" />
            <span style="color:red;">@error('confpassword'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>gender</label>
            <input type="text" name="gender" value="{{$student->gender}}"/>
            <span style="color:red;">@error('gender'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address"  cols="30" rows="10">{{$student->address}}</textarea>
            <span style="color:red;">@error('address'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <option value="BCA" @if($student->class == 'BCA')selected @endif>BCA</option>
                <option value="BSC" @if($student->class == 'BSC')selected @endif>BSC</option>
                <option value="B.TECH" @if($student->class == 'B.TECH')selected @endif>B.TECH</option>
            </select>
            <span style="color:red;">@error('class'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" name="phone" value="{{$student->phone}}"/>
            <span style="color:red;">@error('phone'){{$message}}@enderror</span>
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
</body>
</html>
