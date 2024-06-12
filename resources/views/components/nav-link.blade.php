{{-- attributes with no complexities --}}
{{-- <a {{$attributes}}>{{$slot}}</a> --}}



{{-- displaying attributes using laravel methods, it is used the header not in the component files --}}
 {{-- <a class="{{request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium " aria-current="page">{{$slot}}</a> --}}


{{-- displaying attributes using laravel blade template --}}
@props(['active' => false])
  <a {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium " aria-current="page">{{$slot}}</a>