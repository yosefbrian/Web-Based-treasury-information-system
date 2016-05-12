@extends('layouts.app')


@section('content')
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
</ol>

@if(Session::has('flash_message_tambahberita'))
    <div class="alert alert-success"><strong>Sukses!</strong> Anda berhasil menambah berita.<em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_hapusberita'))
    <div class="alert alert-danger"><strong>Sukses!</strong> Anda berhasil menghapus berita.<em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_editberita'))
    <div class="alert alert-warning"><strong>Sukses!</strong> Anda berhasil mengubah berita.<em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_tambahpemberitahuan'))
    <div class="alert alert-success"><strong>Sukses!</strong> Anda berhasil menambah pemberitahuan.<em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_hapuspemberitahuan'))
    <div class="alert alert-danger"><strong>Sukses!</strong> Anda berhasil menghapus pemberitahuan.<em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_editpemberitahuan'))
    <div class="alert alert-success"><strong>Sukses!</strong> Anda berhasil mengubah pemberitahuan.<em> {!! session('flash_message') !!}</em></div>
@endif
<script type="text/javascript">
$('div.alert').delay(5000).slideUp(300);
</script>


<!-- slider -->
<div id="carousel" class="col-md-12">
  <!--
  IMPORTANT - This carousel can have a special class for a smooth transition "gsdk-transition". Since javascript cannot be overwritten, if you want to use it, you can use the bootstrap.js or bootstrap.min.js from the GSDKit or you can open your bootstrap.js file, search for "emulateTransitionEnd(600)" and change it with "emulateTransitionEnd(1200)"

-->
<div id="carousel-example-generic" class="carousel slide gsdk-transition" data-ride="carousel" >

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active" style="width:100%; max-height:500px !important;">
      <img src="img/2.jpg" alt="">
      <div class="carousel-caption">
        <h2>Caption 1</h2>
        <p> bla bla bla </p>
      </div>
    </div>
    <div class="item" style="width:100%; max-height:500px !important;">
      <img src="img/5.jpg" alt="">
      <div class="carousel-caption">
        <h2>Caption 2</h2>
        <p> bla bla bla </p>
      </div>
    </div>
    <div class="item" style="width:100%; max-height:500px !important;">
      <img src="img/4.jpg" alt="">
      <div class="carousel-caption">
        <h2>Caption 3</h2>
        <p> bla bla bla </p>
      </div>
    </div>
  </div>

  <!-- Controls -->

  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span style="margin-left:-100px; margin-top:250px" class="fa fa-angle-left" ></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span style="margin-right:-100px; margin-top:250px" class="fa fa-angle-right"></span>
  </a>

</div>
</div>



<!-- end carousel -->


<div class="row">
    <br>
  <div align="center">
        @role(1)
<!-- Role Id =1 -->
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



<div style="float: left; width: 47%; margin-top:10px; margin-left:10px" class="panel-heading">
  <!-- <a class="btn btn-success pull-right" href="{{ url('admin/new-post') }}">
   <i class="fa fa-plus-square"></i> Tambah</a> -->
   <div class="btn-group pull-right" role="group" data-toggle="collapse" data-target="#tambahberita" style="margin-top:5px; margin-right:0px;">
   @role(1)
     <button type="button" class="btn btn-success"><i class="fa fa-plus-square" style="margin-right:10px"></i>Tambah</button>
     <!-- <button type="button" class="btn btn-success">Tambah</button> -->
   @endrole

   </div>
   <h4 align="left" style="margin-left:0px; font-family:"Helvetica Neue"">BERITA TERAKHIR</h4>
<hr>
      <div id="tambahberita" class="collapse" style="margin-left:0px; margin-right:0px; margin-top:0px">
        <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
        <script type="text/javascript">
        tinymce.init({
          selector : "textarea",
          plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
          toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        });
        </script>

        <form action="{{ url('admin/new-post') }}" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <input required="required" value="{{ old('title') }}" placeholder="Judul" type="text" name = "title"class="form-control" />
          </div>
          <div class="form-group">
            <textarea name='body'class="form-control">{{ old('body') }}</textarea>
          </div>
          <input type="submit" name='publish' class="btn btn-success" value = "Publish" style="float:right"/>
          <input type="submit" name='save' class="btn btn-default" value = "Save Draft" style="float:right"/>
        </form>
        <hr>
      </div>
<!-- <hr style="margin-top:0px"> -->

    @foreach( $posts as $post )
    <div class="list-group " style="margin-top:5px">
        <div class="list-group-item">
            <h4><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>



                    @if($post->active == '1')
                    <!-- <a style="float: right" href="{{ url('admin/edit/'.$post->slug)}}">Edit Post</a> -->
                    <div class="btn-group pull-right" role="group" >
                    @role(1)
                      <button type="button" class="btn btn-warning btn-simple" data-toggle="collapse" data-target="#editberita<?php echo $post->id;?>"> <i class=" fa fa-pencil-square-o"></i></button>
                    <button type="button" class="btn btn-danger btn-simple" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $post->id;?>"><span class="fa fa-trash"></button>
                    @endrole
                    </div>

                        <div class="modal fade" id="modaldelete<?php echo $post->id;?>" tabindex="-1" role="dialog" >
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title"><b>Perhatian</b></h4>
                                            </div>

                                            <div class="modal-body">
                                                <input type="hidden" value="<?php echo $post->id;?>" name="id">
                                                <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <a type="button" class="btn btn-info btn-simple pull-left" data-dismiss="modal" style="width:60px;">Tidak</a>
                                                <a class="btn btn-danger btn-simple pull-right" title="Hapus" href="{{  url('admin/delete/'.$post->id.'?_token='.csrf_token()) }}"style="width:60px;">Ya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          <div id="editberita<?php echo $post->id;?>" class="collapse" style="margin-left:10px; margin-right:10px; margin-top:50px; ">
                            <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
                            <script type="text/javascript">
                            tinymce.init({
                              selector : "textarea",
                              plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
                              toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages"
                            });
                            </script>

                                  <form method="post" action='{{ action("PostController@update") }}'>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="post_id" value="{{ $post->id }}{{ old('post_id') }}">
                                    <div class="form-group">
                                      <input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}"/>
                                    </div>
                                    <div class="form-group">
                                      <textarea name='body'class="form-control">
                                        @if(!old('body'))
                                        {!! $post->body !!}
                                        @endif
                                        {!! old('body') !!}
                                      </textarea>
                                    </div>
                                    @if($post->active == '1')
                                    <input type="submit" name='publish' class="btn btn-success" value = "Update" style="float:right; margin-left:10px" />
                                    @else
                                    <input type="submit" name='publish' class="btn btn-success" value = "Publish" style="float:right; margin-left:10px"/>
                                    @endif
                                    <input type="submit" name='save' class="btn btn-default" value = "Save As Draft" style="float:right; margin-left:10px"/>
                                    @role(1)
                                    <a type="button" href="{{  url('admin/delete/'.$post->id.'?_token='.csrf_token()) }}" class="btn btn-danger" style="float:right">Delete</a>


                                    @endrole
                                  </form>
                                  <!--
                                  <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Edit Post</a></button> -->
                                  @else
                                  <a style="float: right" href="{{ url('admin/edit/'.$post->slug)}}">Edit Draft</a>

                                  <hr>
                                  @endif
                              </div>


                    </h5>

                    <h6>{{ $post->created_at->format('M d,Y \a\t h:i a') }} by {{ $post->author->name }}</h6>
                    <!-- <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>  -->
                    <div class="text" style="width:100%; overflow:auto"  >
                      <?php echo $post->body ?>

                      <!-- {!! str_limit($post->body, $limit = 100, $end = '.......') !!} -->
                      <!-- {!! str_limit($post->body, $limit = 100, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!} -->
                    </div>
                  </div>

        <!-- <div class="list-group-item">
        </div> -->
    </div>
    @endforeach
    {!! $posts->render() !!}
</div>



<div style="float: right; width: 47%; margin-top:10px; margin-right:10px" class="panel-heading">
<div class="btn-group pull-right" role="group" data-toggle="collapse" data-target="#tambahpemberitahuan" style="margin-top:5px; margin-right:0px;">

 @role(1)
  <!-- <button type="button" class="btn btn-success"><i class="fa fa-plus-square"></i></button>
  <button type="button" class="btn btn-success">Tambah</button> -->
  <button type="button" class="btn btn-success"><i class="fa fa-plus-square" style="margin-right:10px"></i>Tambah</button>
  @endrole
</div>
<h4 align="left" style="margin-left:10px; font-family:"Helvetica Neue"">PEMBERITAHUAN</h4>
<hr>
   <div id="tambahpemberitahuan" class="collapse" style="margin-left:0px; margin-right:0px; margin-top:0px">
     <form action="{{ action('pemberitahuanController@store') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input required="required"  placeholder="Judul" type="text" name = "judul1" class="form-control" />
            <input required="required"  placeholder="Deskripsi" type="text" name = "deskripsi1" class="form-control" style="margin-top:10px"/>
     <div class="col-xs-8">
      <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" required="required"  style="margin-top:10px; margin-left:-10px"/>
      </div>
      <input type="submit" class="btn btn-success" value="Tambah Pemberitahuan" name="submit"  style="margin-top:10px"/>
           </form>
           <hr>
   </div>



@foreach($pemberitahuan_list as $pemberitahuan)
    <div class="list-group" style="margin-top:10px">
     <div class="list-group-item">
        <h4><a href="upload/pemberitahuan/<?php echo $pemberitahuan->filename;?>">{{ $pemberitahuan->judul }}</a>

           @role(1)

            <button class="btn btn-danger" style="float: right;" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $pemberitahuan->id;?>"><span class="glyphicon glyphicon-trash"><center></button>

            @endrole
            <div class="modal fade" id="modaldelete<?php echo $pemberitahuan->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $pemberitahuan->id;?>" name="id">
                                    <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                      <button type="button" class="btn btn-info btn-simple pull-left" data-dismiss="modal" style="width:60px;">Tidak</button>
                                      <!-- <a class="btn btn-danger btn-simple pull-right" title="Hapus" href="{{ action('pemberitahuanController@delete', $pemberitahuan->id) }}"style="width:60px;">Ya</a> -->

                                       <a class="btn btn-danger btn-simple pull-right" title="Hapus" href="{{  url('admin/'.$pemberitahuan->id.'/delete?_token='.csrf_token() ) }}"style="width:60px;">Ya</a>

                                      

                                </div>
                            </div>
                        </div>
                    </div>


        </h3>
        <h5>{{ $pemberitahuan->created_at}}</h5>
        <p>{{$pemberitahuan->deskripsi}}</p>

     </div>

</div>
@endforeach
{!! $pemberitahuan_list->render() !!}
</div>
@endsection
