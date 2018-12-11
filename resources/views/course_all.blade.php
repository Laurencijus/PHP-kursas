@extends ('layout');

@section('content');
<ul>
@foreach ($courses as $course);
<li>{{$course->name}}</li>

@endforeach
</ul>
@endsection
