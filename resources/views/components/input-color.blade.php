{{--@props(['disabled' => false])--}}

{{--<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>--}}
<label class="form-label">{{$label}}</label>
<input type="color" name="{{$name}}" class="form-control-color @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}">
@error($name)
<em class="text-danger">{{ $message  }}</em>
@enderror
