@extends('admin.layouts.admin')

@section('content')

    <div class="">
        <form method="post" action="{{route('admin.user.store',['user_id' =>$user->id])}}">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline {{ $errors->has('name') ? 'has-error' : ''}}">
                    <label class="form-label" for="form3Example1">Name</label>
                  <input type="text" id="form3Example1" class="form-control" name="name" value="{{ old('name', $user->name) }}"/>
                  {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
              <div class="col">
                <div class="form-outline {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label class="form-label" for="form3Example2">Email</label>
                  <input type="email" id="form3Example2" class="form-control" name="email" value="{{ old('email', $user->email) }}"/>
                  {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
              </div>

              <div class="col">
                <div class="form-outline {{ $errors->has('phone') ? 'has-error' : ''}}">
                    <label class="form-label" for="form3Example2">Phone</label>
                  <input type="text" id="form3Example2" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}"/>
                  {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
            </div>
          
            <!-- Email input -->
            <div class="form-outline mb-4 {{ $errors->has('address') ? 'has-error' : ''}}">
                <label class="form-label" for="form3Example3">Address</label>
              <input type="text" id="form3Example3" class="form-control" name="address" value="{{ old('address', $user->address) }}"/>
              {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
            </div>
          
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" name="password" class="form-control" />             
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example5" name="password_confirmation" class="form-control" />             
                    </div>
                </div>
            </div>
  
          
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
          
          </form>
         
    
</div>
@endsection