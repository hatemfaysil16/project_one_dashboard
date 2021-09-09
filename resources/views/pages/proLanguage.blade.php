@extends('layout.app')


        @section('content')
            <div class="content">
                <div class="title m-b-md">
                    programming languages
                </div>
            </div>


            <div class="content">
                <div class="title m-b-md">
                    @foreach ($myname as $pll)
                    {{$pll}}
                    @endforeach
                </div>
            </div>



        @endsection
