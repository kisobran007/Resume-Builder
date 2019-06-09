@extends('layouts.main')
@section('content')
    @foreach ($resumes as $resume)
        {{ $resume->job_applied_for }}
    @endforeach
@endsection