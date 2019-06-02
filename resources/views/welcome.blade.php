@extends('layouts.main')
@section('content')
    <div class="top-section justify-content-center align-items-center">
        <h1 class="mt-4 text-center">Free Online Resume Creator You Deserve</h1>
        <p class="mt-4 text-center">Making a resume is the first step of any job search. Not sure how to make a resume?
            With our Resume Creator it was never easier. Register and try it.
        </p>
        <a href="{{ route('createResume') }}" class="create-resume-btn button">
            <button type="button" class="btn btn-primary btn-lg active">CREATE YOUR RESUME</button>
        </a>
    </div>
@endsection
