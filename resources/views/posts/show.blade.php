@extends('layout.app')
           



           



            @section('content')
         <div class="panel panel-danger container">
  <div class="panel-heading">
    <h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3>

  </div>


    @if(!Auth::guest())

    @if(Auth::user()->id == $post->user_id)


    <a class="pull-right" href="/posts/{{$post->id}}/edit" class="btn btn-warning">edit</a>
    

    <div class="panel-body">


      {!! Form::open(['Action' => 'PostsController@destory',$post->id, 'method'=>'POST']) !!}
      {{Form::hidden('_method','DELETE')}}
      {{Form::submit('DELETE',['class'=>'pull-right btn btn-danger btn-lg' ] ) }}
  
      {!! Form::close() !!}

      @endif
      @endif
      

      <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" > 



        <h2> {{$post->subject}}</h2> 
        <p> {{$post->body}}</p> 
        <span class="label label-danger">created at : {{$post->created_at}}  </span>
    </div>
    <a class="pull-right" href="/posts" class="btn btn-warning">Back</a>
</div>

           @endsection

