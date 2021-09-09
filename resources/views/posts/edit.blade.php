@extends('layout.app')
           
           
            @section('content')
           
           
{!! Form::open(['Action' => 'PostsController@update',$post->id, 'method'=>'POST','enctype'=>'multipart/form-data']) !!}


   <div class=container>
<div class="form-group">
      {{Form::label('subject', 'Subject')}}
      {{Form::text('subject',$post->subject , ['class'=>'form-control'] ) }}
    </div>
 <div class="form-group">
      {{Form::label('firstname', 'First name')}}
      {{Form::text('firstname',$post->firstname,['class'=>'form-control']) }}
    </div>
<div class="form-group">
      {{Form::label('lastname', 'Last name')}}
      {{Form::text('lastname',$post->lastname,['class'=>'form-control' ]) }}
    </div>

<div class="form-group">
      {{Form::label('body', 'Discriptions')}}
      {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Discriptions','id'=>'article-ckeditor']) }}
    </div> 

   
 
<div class="form-group">
      
      {{Form::file('post_image', ['class'=>'btn ' ]) }}
    </div>   
    {{Form::hidden('_method','PUT')}}

{{Form::submit('update',['class'=>'btn btn-primary btn-lg' ] ) }}

   </div>


{!! Form::close() !!}
 
    
           @endsection



 

