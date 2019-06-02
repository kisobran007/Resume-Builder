@extends('layouts.main')
@section('content')
    <form>
        <h3>Personal Details</h3>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="first_name" value="{{$user->name}}">
            </div>
        </div>
    </form>
@endsection