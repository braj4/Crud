<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" value="{{ $value }}"/>
    <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
    </span>
</div>