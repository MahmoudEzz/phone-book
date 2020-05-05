<div class="form-group">
    <label for="contact">User Name :</label>
    <input type="text" name="username" placeholder="user name" value="{{old('username')}}" class="form-control">
    <span class="text-muted">{{$errors->first('username') }}</span>
</div>

@csrf