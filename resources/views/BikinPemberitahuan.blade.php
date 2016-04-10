<<!DOCTYPE html>
<html>
<head>
	<title>create</title>
</head>
<body>
<form action="{{ action('pemberitahuanController@store') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              
                    <input required="required"  placeholder="Judul" type="text" name = "judul1" class="form-control" />
           

            
                    <input required="required"  placeholder="Deskripsi" type="text" name = "deskripsi1" class="form-control" />
      
                                 
                <div class="col-xs-8">
                    <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" required="required"/>
                </div>
          
                    <input type="submit" class="btn btn-success" value="Tambah Pemberitahuan" name="submit"/>
         

                </form>
</body>
</html>