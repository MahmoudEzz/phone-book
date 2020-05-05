<div class="form-group">
    <label for="phone">Phone :</label>
    <input type="text" name="number" placeholder="number" value="{{old('number') ?? $phone->number}}" class="form-control">
</div>
<div>
    <span class="text-muted">{{$errors->first('number') }}</span>
</div>

@csrf