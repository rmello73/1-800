@extends('layout.main')

@section('main')
<div align="center">
	<p>{{ $city }}</p>
	<p><a href="{{route('test', $city)}}" class="btn btn-info btn-xs" role="button">know more</a>
</div>
@endsection