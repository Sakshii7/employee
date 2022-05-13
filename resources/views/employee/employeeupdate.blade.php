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
                    
                     <form action="{{ url('updateemployee',$data->id) }}" method="post" > 
                        @csrf

                        @if(Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                      @endif
                      @if(Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                      @endif

                        <div style="padding:15px;">
                            <label> First Name </label>
                            <input type="text" name="first_name" value="{{ $data->first_name }}" class="form{{ $errors->has('first_name') ? ' is-invalid' : '' }}" >
                            @if ($errors->has('first_name'))
                  <span class="invalid-feedback">
                    {{ $errors->first('first_name') }}
                  </span>
                @endif
                        </div>

                        <div style="padding:15px;">
                            <label> Last Name </label>
                            <input type="text" name="last_name" value="{{ $data->last_name }}" class="form{{ $errors->has('last_name') ? ' is-invalid' : '' }}" >
                            @if ($errors->has('last_name'))
                  <span class="invalid-feedback">
                    {{ $errors->first('last_name') }}
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
                            <label> Phone </label>
                            <input type="text" name="phone" value="{{ $data->phone }}" class="form{{ $errors->has('phone') ? ' is-invalid' : '' }}" >
                            @if ($errors->has('phone'))
                  <span class="invalid-feedback">
                    {{ $errors->first('phone') }}
                  </span>
                @endif
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
    