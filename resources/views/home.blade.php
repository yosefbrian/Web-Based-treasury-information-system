@extends('layouts.app')


@section('content')

                <div class="row">
    <div align="center">
        Sistem Informasi Bea Cukai
    </div>
    <br>
    <div align="center">
        @role(1)
<!-- Role Id =1 -->
     <a href="{!! url('admin') !!}"><button type="button" class="btn btn-default">Admin</button></a> 
@endrole
@role(3)
<!-- Member Role_id =3 -->
    <p align="center">SPD Area!!!</p>
@endrole
@role(2)
<!-- Member Role_id =3 -->
    <p align="center">BP Area!!!</p>
@endrole
@role(4)
<!-- Role Id =4 -->
     <p align="center">Klien Area!!!</p>
@endrole
    </div>

    @if ( !$posts->count() )
There is no post till now. Login and write a new post now!!!
@else
<div>
<h1 align="center">SLIDER</h1>
<br>
<hr>


</div>

<div style="float: left; width: 47%" class="">

<h3>Berita Terakhir</h3>
    @foreach( $posts as $post )
    <div class="list-group">
        <div class="list-group-item">
            <h3><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
    
                   
                    @role(1)
                    @if($post->active == '1')
                    <a style="float: right" href="{{ url('admin/edit/'.$post->slug)}}">Edit Post</a>
                    <!-- 
                    <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Edit Post</a></button> -->
                    @else
                    <a style="float: right" href="{{ url('admin/edit/'.$post->slug)}}">Edit Draft</a>
                    @endrole
                @endif
            </h3>
            <h5>{{ $post->created_at->format('M d,Y \a\t h:i a') }} by {{ $post->author->name }}</h5> 
            <!-- <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>  -->
            
        </div>
        <div class="list-group-item">
            <article>
                {!! str_limit($post->body, $limit = 100, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
            </article>
        </div>
    </div>
    @endforeach
    {!! $posts->render() !!}
</div>
@endif

</div>
@endsection
