@extends('layout')
@section('name')
<div class="container">
    <div class="card container my-4 float-left">
<a class="btn btn-dark" href="/sms"> GO BACK </a>
    </div>
    <form class="form my-4" action="/sms"  method="post" enctype="multipart/form-data" >
       
        @csrf

<div class="form-group my-4">
    <label for="">NAME</label>
    <input type="text" placeholder="ENTER YOUR FULL NAME" name="name" class="form-control">
</div>
<div class="form-group">
 <select name="subject" class="form-select" id="">
    <option value=""> SELECT SUBJECT</option>
    <option value="ENGLISH" class="form-option">ENGLISH</option>
    <option value="MATHEMATICS" class="form-option">MATHEMATICS</option>
    <option value="PHYSICS" class="form-option">PHYSICS</option>
    <option value="CHEMISTRY" class="form-option">CHEMISTRY</option>
    <option value="GEOGRAPHY" class="form-option">GEOGRAPHY</option>
    <option value="ECONOMICS" class="form-option">ECONOMICS</option>
    <option value="FURTHER MATHEMATICS" class="form-option">FURTHER MATHEMATICS</option>
    <option value="BIOLOGY" class="form-option">BIOLOGY</option>
 </select>
</div>
<div class="form-group my-4">
    <label for="">PHOTO</label>
    <input type="file" name="image" id="image" class="form-control"/>
</div>
<div class="form-group">
    <label for="">EMAIL ADDRESS</label>
    <input type="email" placeholder="ENTER YOUR EMAIL" name="email" class="form-control">
</div>
<div class="form-group my-4">
    <label for="">DATE OF BIRTH</label>
    <input type="date"  name="date" class="form-control">
</div>
<div class="form-group my-4">
    <label for=""> STATUS</label>
   <select class="form-select" name="status" >
    <option value="Teacher" class="form-option">Teacher</option>
    <option value="Student" class="form-option">Student</option>
   </select>
</div>
<div class="form-group my3">
    <input type="submit" class="btn btn-success" value=" Submit">
</div>
    </form>
</div>
@endsection