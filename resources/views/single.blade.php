@extends('layout')
@section('name')
<div class="container mx-4">
<div class="d-flex my-4  ">
    <a class="btn btn-dark " href="/sms"> GO BACK</a>
</div>
    <div class="card">
        <div class="card-header text-bg-primary">
            <p class="text-center">{{ $data->name }} </p>

        </div>
        <div class="card-body">
<div class="container mx-auto " style="height:200px; width:150px">
    <img class="img rouded img-fluid mx-auto my-auto  d-block w-20 " src="/storage/{{$data->image}}" alt="Image here">
</div>
<div class="text-center mt-auto row">
    
<div class="col-4">
<div class="list-style-group r">
    <p>POSITION :  </p>
    <p> DATE OF BIRTH:  </p>
    <p>EMAIL : </p>
    <p>SUBJECT:  </p>
</div>
</div>
    <div class="col-8">
<div class="list-style-group row">
   <p>{{ $data->status}} </p>  
   <p>{{ $data->date }} </p> 
   <p> {{ $data->email }}</p>  
   <p>{{ $data->subject}}  </p>  
</div>
    

        </div>
        <div class="card-footer d-flex ">
            <a class="btn btn-success me-auto" href="/sms/{{ $data->id }}/edit">UPDATE</a>
       <form    action="/sms/{{ $data->id }}" method="post" > 
    @method('DELETE')
    @csrf
    <button class="btn btn-danger float-right" type="submit">DELETE</button>
    </form>
        </div>
    </div>

</div>
@endsection