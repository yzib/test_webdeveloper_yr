@extends('app')
@section('content')
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="sys_uname" value="{{ old('sys_uname') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="sys_pass" />
            </div>
            <div class="mb-3">
                <label> <span class="text-danger">========</span></label>
            </div>
            <div class="mb-3">
                <label>Nama Lengkap<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name_loaner" value="{{ old('name_loaner') }}" />
            </div>
	
            <div class="mb-3">
                <label>No. KTP<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="id_num" value="{{ old('id_num') }}" />
            </div>					
            <div class="mb-3">
                <label>Alamat<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="addr" value="{{ old('addr') }}" />
            </div>
            <div class="mb-3">
                <label>No. Telp.<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
@endsection