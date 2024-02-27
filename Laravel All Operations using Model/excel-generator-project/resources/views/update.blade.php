@include('header')
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="{{route('updateStudent',$students->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{$students->name}}" />
            <span style="color:red;">@error('name'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{$students->email}}"/>
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="{{$students->password}}"/>
            <span style="color:red;">@error('password'){{$message}}@enderror</span>
        </div>
        
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <option value="BCA" @if($students->class == 'BCA')selected @endif>BCA</option>
                <option value="BSC" @if($students->class == 'BSC')selected @endif>BSC</option>
                <option value="B.TECH" @if($students->class == 'B.TECH')selected @endif>B.TECH</option>
            </select>
            <span style="color:red;">@error('class'){{$message}}@enderror</span>
        </div>
        <div class="form-check">
        <div class="form-group">
            <label>Language</label>
        </div>
        
            <input class="form-check-input" type="checkbox" name="language[]" value="Hindi" @if(in_array('Hindi',explode(',',$students->language)))checked @endif>
            <label class="form-check-label" for="flexCheckDefault">Hindi</label>
            <input class="form-check-input" type="checkbox" name="language[]" value="English" @if(in_array('English',explode(',',$students->language)))checked @endif>
            <label class="form-check-label" for="flexCheckDefault">English</label>
            <span style="color:red;">@error('language'){{$message}}@enderror</span>
        </div><br>
        <div class="form-check">
        <div class="form-group">
            <label>Gender</label>
        </div>
            <input class="form-check-input" type="radio" name="gender" value="male" @if($students->gender == 'male')checked @endif>
            <label class="form-check-label" for="male">Male</label>
            <input class="form-check-input" type="radio" name="gender" value="female" @if($students->gender == 'female')checked @endif>
            <label class="form-check-label" for="female">Female</label>
            <span style="color:red;">@error('gender'){{$message}}@enderror</span>
        </div><br>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" value="{{$students->phone}}"/>
            <span style="color:red;">@error('phone'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" id="" cols="40" rows="5">{{$students->address}}</textarea>
            <span style="color:red;">@error('address'){{$message}}@enderror</span>
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
</body>
</html>
