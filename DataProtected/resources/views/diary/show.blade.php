@extends('layouts.app')

@section('title')
	@if($diary)
		{{ $diary->title }}
		@role(1)
			<button class="btn" style="float: right"><a href="{{ url('edit/'.$diary->slug)}}">Edit Post</a></button>
		@endrole
	@else
		Page does not exist
	@endif
@endsection

@section('title-meta')
<p>{{ $diary->created_at->format('M d,Y \a\t h:i a') }} By {{ $diary->author->name }}</p>
@endsection


@section('content')

@if($diary)
	<div>
		{!! $diary->body !!}
	</div>	
	<div>
		<h2>Leave a comment</h2>
	</div>
	@if(Auth::guest())
		<p>Login to Comment</p>
	@else
		<div class="panel-body">
			<form method="post" action="{{url('/comment/add')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="on_post" value="{{ $diary->id }}">
				<input type="hidden" name="slug" value="{{ $diary->slug }}">
				<div class="form-group">
					<textarea required="required" placeholder="Enter comment here" name = "body" class="form-control"></textarea>
				</div>
				<input type="submit" name='post_comment' class="btn btn-success" value = "Post"/>
			</form>
		</div>
	@endif
	
	<div>
		@if($comments)
		<ul style="list-style: none; padding: 0">
			@foreach($comments as $comment)
				<li class="panel-body">
					<div class="list-group">
						<div class="list-group-item">

						<div class="btn-group pull-right" role="group" >
                      <button type="button" class="btn btn-danger btn-simple" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $comment->id;?>"><span class="fa fa-trash"></button>
                    </div>

                    <div class="modal fade" id="modaldelete<?php echo $comment->id;?>" tabindex="-1" role="dialog" >
                      <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  <h4 class="modal-title"><b>Perhatian</b></h4>
                              </div>

                              <div class="modal-body">
                                  <input type="hidden" value="<?php echo $comment->id;?>" name="id">
                                  <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                              </div>
                              <div class="modal-footer">
                                  <a type="button" class="btn btn-info btn-simple pull-left" data-dismiss="modal" style="width:60px;">Tidak</a>
                                  <a class="btn btn-danger btn-simple pull-right" title="Hapus" href="{{  url('/commentdelete/'.$comment->id.'?_token='.csrf_token()) }}"style="width:60px;">Ya</a>
                              </div>
                            </div>
                          </div>
                      </div>


							<h3>{{ $comment->author->name }}</h3>
							<p>{{ $comment->created_at->format('M d,Y \a\t h:i a') }}</p>
						</div>
						<div class="list-group-item">
							<p>{{ $comment->body }}</p>
						</div>
					</div>
				</li>
			@endforeach
		</ul>
		@endif
	</div>


		
{!!$comments->render()!!}

@else
404 error
@endif



@endsection