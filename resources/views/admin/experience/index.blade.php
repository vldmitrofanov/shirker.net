@extends('admin.layouts.admin')

@section('content')
    <div class="row"><div class="col-12"><a class="float-right" href="{{route('admin.experience.create')}}">Add new</a></div></div>
    <div class="exp-list">
        <div class="exp-list__row">
            <strong>From</strong>
            <strong>To</strong>
            <strong>Description</strong>
            <strong>&nbsp;</strong>
        </div>
        @foreach($user->workExperiences as $exp)
        <div class="exp-list__row">
            <div class="dates">
                <span class="date">{{$exp->start_date}}</span>
                <span class="date">-</span>
                <span class="date">{{empty($exp->present)?$exp->end_date: 'Present'}}</span>
            </div>
            <span class="company-name">{{$exp->company_name}}</span>
            <div class="description">{!! $exp->description !!}</div>
            <div class="buttons">
                <a href="{{route('admin.experience.edit',['experience_id' => $exp->id ])}}">Edit</a>
                <a href="#" onclick="checkDelete({{$exp->id}})">Delete</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection

@section('js')
<script>
    async function checkDelete(id){
            if(confirm('Really Delete?')){
                const response = await axios.delete(`/admin/experience/${id}`)
                if(response.data.status == 'OK'){
                    window.location.href = '/admin/experience/list'
                }
            }
        }
    $( document ).ready(function() {
        
    });
    </script>
@endsection