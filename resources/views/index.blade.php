@extends('layout')
@section('name')
<div class="container  mx-4">
    <div class="container card my-4">
        <div class="my-3 text-center  text-bg-danger">
            SCHOOL MANAGEMENT SYSTEM BY ABEL PAUL : 07080824483 
        </div>
<a class="btn btn-primary float-right"  href="/sms/create"> ADD  RECORD</a>
    </div>

    

<table class="table table-bordered ">
    <thead >
<tr >
    <th>#</th>
    <th>NAME</th>
    
    <th>EMAIL </th>
    <th>STATUS</th>
</tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            
        <tr>
<td>
    {{ $item->id }}
</td>
<td>
    {{ $item->name }}

</td>
<td>
{{ $item->email}}
</td>
<td>
{{ $item->status}}
</td>
<td>

    <a href="/sms/{{ $item->id }}" class=" btn btn-primary">DETAIL </a>
</td>

        </tr>

        @endforeach
    </tbody>

</table>

    
</div>
    
@endsection