@extends('layouts.app')


@section('content')
<div class="">
<h3 align="center">Berita Terakhir</h3>
<br>
<a href="{!! url('diarynewpost') !!}"><button type="button" class="btn btn-default">Buat Berita</button></a>
    @foreach( $diarys as $diary )
    <div class="list-group">
        <div class="list-group-item">
            <h3><a href="{{ url('/'.$diary->slug) }}">{{ $diary->title }}</a>
    
                   
                    @role(1)
                    @if($diary->active == '1')
                    <a style="float: right" href="{{ url('admin/edit/'.$diary->slug)}}">Edit Post</a>
                    @else
                    <a style="float: right" href="{{ url('admin/edit/'.$diary->slug)}}">Edit Draft</a>
                    @endrole
                    @endif
            </h3>
            <h5>{{ $diary->created_at->format('M d,Y \a\t h:i a') }} by {{ $diary->author->name }}</h5> 
            
        </div>
        <div class="list-group-item">
            <article>
                {!! str_limit($diary->body, $limit = 100, $end = '....... <a href='.url("/diary/".$diary->slug).'>Read More</a>') !!}
            </article>
        </div>
    </div>
    @endforeach
    {!! $diarys->render() !!}
</div>
@endsection
