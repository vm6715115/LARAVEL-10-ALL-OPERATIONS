@include('header')
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="{{route('addStudent')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{old('name')}}" />
            <span style="color:red;">@error('name'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{old('email')}}"/>
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="{{ old('password') }}" />
            <span style="color:red;">@error('password'){{$message}}@enderror</span>
        </div>
        
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <option value="BCA" {{ old('class') == 'BCA' ? 'selected' : '' }}>BCA</option>
                <option value="BSC" {{ old('class') == 'BSC' ? 'selected' : '' }}>BSC</option>
                <option value="B.TECH" {{ old('class') == 'B.TECH' ? 'selected' : '' }}>B.TECH</option>
            </select>
            
            <span style="color:red;">@error('class'){{$message}}@enderror</span>
        </div>
        <div class="form-check">
        <div class="form-group">
            <label>Language</label>
        </div>
                <input class="form-check-input" type="checkbox" name="language[]" value="Hindi" {{ in_array('Hindi', old('language', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="flexCheckDefault">Hindi</label>
                <input class="form-check-input" type="checkbox" name="language[]" value="English" {{ in_array('English', old('language', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="flexCheckDefault">English</label>
                <span style="color:red;">@error('language'){{ $message }}@enderror</span>
            </div>
            <br>
        <div class="form-check">
        <div class="form-group">
            <label>Gender</label>
        </div>
            <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
            <label class="form-check-label" for="male">Male</label>
            <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
            <label class="form-check-label" for="female">Female</label>
            <span style="color:red;">@error('gender'){{$message}}@enderror</span>
        </div><br>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" value="{{old('phone')}}"/>
            <span style="color:red;">@error('phone'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" id="" cols="40" rows="5">{{old('address')}}</textarea>
            <span style="color:red;">@error('address'){{$message}}@enderror</span>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
