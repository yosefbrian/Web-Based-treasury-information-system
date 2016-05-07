@extends('layouts.app')


@section('content')
<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#">Diary</a></li>
</ol>

<h2>DIARY
<a type="button" class="btn btn-success btn-simple pull-right" style="float:right; margin-top:-5px" data-toggle="collapse" data-target="#tambahdiary"><i class="fa fa-plus-square" style="margin-right:10px" ></i>Tambah</a>
</h2>
<div class="x_title">
</div>

<div id="tambahdiary" class="collapse" style="margin-left:0px; margin-right:0px; margin-top:0px">
  <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
  <script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
  });
  </script>

  <form action="{{ url('diarynewpost') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
    </div>
    <div class="form-group">
      <textarea name='body'class="form-control">{{ old('body') }}</textarea>
    </div>
    <input type="submit" name='publish' class="btn btn-success pull-right" value = "Publish"/>
    <input type="submit" name='save' class="btn btn-default pull-right" value = "Save Draft" />
  </form>
  <hr>
</div>


<!-- <a href="{!! url('diarynewpost') !!}"><button type="button" class="btn btn-default">Buat Diary</button></a> -->

    @foreach( $diarys as $diary )
    <div class="list-group" style="margin-top:5px">
        <div class="list-group-item">
            <h3><a href="{{ url('/'.$diary->slug) }}">{{ $diary->title }}</a>


                    @role(1)
                    @if($diary->active == '1')
                    <div class="btn-group pull-right" role="group" >
                      <button type="button" class="btn btn-warning btn-simple" data-toggle="collapse" data-target="#editdiary<?php echo $diary->id;?>"> <i class=" fa fa-pencil-square-o"></i></button>
                      <button type="button" class="btn btn-danger btn-simple" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $diary->id;?>"><span class="fa fa-trash"></button>
                    </div>

                    <div class="modal fade" id="modaldelete<?php echo $diary->id;?>" tabindex="-1" role="dialog" >
                      <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  <h4 class="modal-title"><b>Perhatian</b></h4>
                              </div>

                              <div class="modal-body">
                                  <input type="hidden" value="<?php echo $diary->id;?>" name="id">
                                  <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                              </div>
                              <div class="modal-footer">
                                  <a type="button" class="btn btn-info btn-simple pull-left" data-dismiss="modal" style="width:60px;">Tidak</a>
                                  <a class="btn btn-danger btn-simple pull-right" title="Hapus" href="{{  url('/diarydelete/'.$diary->id.'?_token='.csrf_token()) }}"style="width:60px;">Ya</a>
                              </div>
                            </div>
                          </div>
                      </div>

                    <div id="editdiary<?php echo $diary->id;?>" class="collapse" style="margin-left:10px; margin-right:10px; margin-top:50px;">

                      <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
                      <script type="text/javascript">
                      tinymce.init({
                        selector : "textarea",
                        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
                        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages"
                      });
                      </script>

                      <form action="{{ action('DiaryController@update') }}" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <input type="hidden" name="diary_id" value="{{ $diary->id }}{{ old('diary_id') }}">
                             <div class="form-group">
                               <input required="required" value="@if(!old('title')){{$diary->title}}@endif{{ old('title') }}" placeholder="Judul" type="text" name = "title"class="form-control" />
                             </div>
                             <div class="form-group">
                               <textarea name='body'class="form-control">
                                 @if(!old('body'))
                                 {!! $diary->body !!}
                                 @endif
                                 {!! old('body') !!}
                               </textarea>
                             </div>

                             @if($diary->active == '1')
                             <input type="submit" name='publish' class="btn btn-success" value = "Update" style="float:right; margin-left:10px" />
                             @else
                             <input type="submit" name='publish' class="btn btn-success" value = "Publish" style="float:right; margin-left:10px"/>
                             @endif
                             @role(1)
                             <a type="button" href="{{  url('/diarydelete/'.$diary->id.'?_token='.csrf_token()) }}" class="btn btn-danger" style="float:right">Delete</a>
                             @endrole
                            </form>
                    @endrole
                    @endif
            </h3>
            <h5>{{ $diary->created_at->format('M d,Y \a\t h:i a') }} by {{ $diary->author->name }}</h5>

            <div class="text" style="width:100%; overflow:auto"  >
              <?php echo $diary->body ?>
              <!-- <article>
              {!! str_limit($diary->body, $limit = 100, $end = '....... <a href='.url("/diary/".$diary->slug).'>Read More</a>') !!}
            </article> -->
          </div>
        </div>
    </div>
    @endforeach
    {!! $diarys->render() !!}
</div>
@endsection
