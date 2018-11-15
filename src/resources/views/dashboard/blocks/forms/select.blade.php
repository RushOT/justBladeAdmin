<div class="form-group">
    @if(isset($label)) <label class="@if(isset($labelClass)) {{$labelClass}} @endif" @if(isset($id)) for="{{$id}}" @endif >{{$label}}</label> @endif
    <select class="form-control @if(isset($inputClass)) {{$inputClass}} @endif"
            @if(isset($id)) id="{{$id}}" @endif
            @if(isset($name)) name="{{$name}}" @endif
            @if(isset($required) && $required) required @endif
            @if(isset($disabled) && $disabled) disabled @endif
    >
        @foreach($options as $option)
            <option>{{$option}}</option>
        @endforeach
    </select>
</div>
