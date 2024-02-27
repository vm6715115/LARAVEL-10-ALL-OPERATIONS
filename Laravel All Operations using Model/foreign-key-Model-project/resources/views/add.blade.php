@include ('header')
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="{{route('addStudent')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" value="{{old('fname')}}"/>
            <span style="color:red;">@error('fname'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" value="{{old('lname')}}"/>
            <span style="color:red;">@error('lname'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{old('email')}}"/>
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="{{old('password')}}"/>
            <span style="color:red;">@error('password'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confpassword" value="{{old('confpassword')}}"/>
            <span style="color:red;">@error('confpassword'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>gender</label>
            <input type="text" name="gender" value="{{old('gender')}}"/>
            <span style="color:red;">@error('gender'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address"  cols="30" rows="10" >{{old('address')}}</textarea>
            <span style="color:red;">@error('address'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                @foreach($student as $student)
                <option value="{{$student->cid}}" {{ old('class') == $student->cid ? 'selected' : '' }}>{{$student->class}}</option>
                @endforeach
                
            </select>
            <span style="color:red;">@error('class'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" name="phone" value="{{old('phone')}}"/>
            <span style="color:red;">@error('phone'){{$message}}@enderror</span>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
