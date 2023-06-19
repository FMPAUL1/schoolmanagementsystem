@extends('layout')
@section('name')
<div class="container ">
    <form class="form my-4"  action="/sms/{{ $data->id }}/" method="POST" enctype="multipart/form-data">
@csrf
        @method('PATCH')
<div class="form-group">
    <label for="">NAME</label>
    <input value="{{$data->name}}" type="text" placeholder="ENTER YOUR FULL NAME"  name="name" class="form-control">
</div>

<div class="form-group my-3">
    
 <select name="subject" class="form-select" id="">
    <option >SELECT SUBJECT </option>
    <option  value="{{$data->subject}}" class="form-option">ENGLISH</option>
    <option value="{{$data->subject }}" class="form-option">MATHEMATICS</option>
    <option value="{{$data->subject }}" class="form-option">PHYSICS</option>
    <option value="{{$data->subject }}" class="form-option">CHEMISTRY</option>
    <option value="{{$data->subject }}"class="form-option">GEOGRAPHY</option>
    <option value="{{$data->subject }}"class="form-option">ECONOMICS</option>
    <option value="{{$data->subject  }}" class="form-option">FURTHER MATHEMATICS</option>
    <option value="{{$data->subject }}"class="form-option">BIOLOGY</option>
 </select>
</div>
<div class="form-group my-3">
    <label for=""> PHOTO</label>
    <input  type="file"   id="image" name="image" class="form-control">
    
    <img style="width:50px;height:50px"  src="/storage/{{$data->image}}" alt="no uploaded yet">
</div>

<div class="form-group my-3">
    <label for="">EMAIL ADDRESS</label>
    <input value="{{$data->email}}" type="email" placeholder="ENTER YOUR EMAIL" name="email" class="form-control">
</div>
<div class="form-group">
    <label for="">DATE OF BIRTH</label>
    <input value="{{$data->date}}" type="date"  name="date" class="form-control">
</div>
<div class="form-group my-3">
    <label for=""> STATUS</label>
   <select name="status" class="form-select" >
    <option  > SELECT YOUR STATUS</option>
    <option value="{{$data->status}}" class="form-option">Teacher</option>
    <option value="{{$data->status}}" class="form-option">Student</option>
   </select>
</div>
<input type="submit" class="btn btn-success" value="Update">
    </form>
</div>
@endsection