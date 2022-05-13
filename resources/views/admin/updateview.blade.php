<style type="text/css">
    .title {
        "color:white;
        padding-top: 25px;
        font-size: 25px;
        "
    }
    
    label {
        display: inline-block;
        width: 200px;
    }
    
</style>

@extends('layout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div style="background-color:black;" class="container-fluid page-body-wrapper">
                
                <div class="container" align="center">
                    <h2 style=" margin-top:20px;" class="title"> Update Companies </h2>
                    
                     <form action="{{ url('updatecompany',$data->id) }}" method="post" enctype="multipart/form-data"> 
                        @csrf

                        @if(Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                      @endif
                      @if(Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                      @endif

                        <div style="padding:15px;">
                            <label> Name </label>
                            <input type="text" name="name" value="{{ $data->name }}" class="form{{ $errors->has('name') ? ' is-invalid' : '' }}" >
                            @if ($errors->has('name'))
                  <span class="invalid-feedback">
                    {{ $errors->first('name') }}
                  </span>
                @endif
                        </div>
                        
                        <div style="padding:15px;">
                            <label> Email </label>
                            <input type="text" name="email" value="{{ $data->email }}"  class="form{{ $errors->has('email') ? ' is-invalid' : '' }}"  >
                            @if ($errors->has('email'))
                  <span class="invalid-feedback">
                    {{ $errors->first('email') }}
                  </span>
                @endif
                        </div>
                        
                        
                        <div style="padding:15px;">
                            <label> Website </label>
                            <input type="text" name="website" value="{{ $data->website }}"  class="form{{ $errors->has('website') ? ' is-invalid' : '' }}" >
                            @if ($errors->has('website'))
                  <span class="invalid-feedback">
                    {{ $errors->first('website') }}
                  </span>
                @endif
                        </div>
                        
                        <div style="padding:15px;">
                            {{-- <label> Logo </label> --}}
                            <input type="file" name="file">
                        </div>
                        
                        
                        <div style="padding:15px;">
                            <input class="btn btn-success" type="submit">
                        </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    