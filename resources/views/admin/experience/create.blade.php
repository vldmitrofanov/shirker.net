@extends('admin.layouts.admin')

@section('content')

    <div class="">

<form method="post" action={{route('admin.experience.store')}}>
    @csrf
    <div class="row">
        <div class="form-outline mb-4 col-12 {{ $errors->has('company_name') ? 'has-error' : ''}}">
            <label class="form-label" for="form4Example1" >Company Name</label>
            <input type="text" id="form4Example1" class="form-control" name="company_name" value="{{ old('company_name') }}"/>
            {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
  
    <div class="row">
        <div class="form-outline mb-4 col-4  {{ $errors->has('start_date') ? 'has-error' : ''}}">
            <label class="form-label" for="form4Example2">Start Date</label>
            <input type="date" id="formStartDate" class="form-control" name="start_date" value="{{ old('start_date') }}"/>    
            {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!} 
        </div>

        <div class="form-outline mb-4 col-4  {{ $errors->has('end_date') ? 'has-error' : ''}}">
        <label class="form-label" for="formEndDate">End Date</label>
        <input type="date" id="formEndDate" class="form-control" name="end_date" value="{{ old('start_date') }}"/>    
        {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}     
      </div>

    <!-- Checkbox -->
    <div class="form-check mt-4 col-4">
        <input
            class="form-check-input me-2"
            type="checkbox"
            name="present"
            value="1"
            id="formCheckbox"
        />
        <label class="form-check-label" for="form4Example4">
            Present
        </label>
    </div>
    </div>
    <p class="mb-0">Use paragraph tag and following class to add more space below the text:</p>
    <pre class="mb-0">
        &#x3C;p class=&#x22;sm-bt&#x22;&#x3E;&#x3C;/p&#x3E;
    </pre>
    <!-- Message input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">Description</label>
        <textarea class="form-control" id="form4Example3" name="description" rows="4">{{ old('description') }}</textarea>     
    </div>
  

  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
</div>

@endsection

@section('js')
<script>
$( document ).ready(function() {
    console.log( "ready!" );
    $("#formCheckbox").change(function() {
    if(this.checked) {
        $('#formEndDate').prop( "disabled", true );
        $('#formEndDate').val('')
    } else {
        $('#formEndDate').prop( "disabled", false );
        $('#formEndDate').val('')
    }
});
});
</script>

@endsection