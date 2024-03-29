<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Posts;
use App\Profil;
use Auth;
use Request as reques;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller {

		/*
	 * Display the posts of a particular user
	 * 
	 * @param int $id
	 * @return Response
	 */
	public function user_posts($id)
	{
		//
		$posts = Posts::where('author_id',$id)->where('active','1')->orderBy('created_at','desc')->paginate(5);
		$title = User::find($id)->name;
		return view('home')->withPosts($posts)->withTitle($title);
	}

	public function user_posts_all(Request $request)
	{
		//
		$user = $request->user();
		$posts = Posts::where('author_id',$user->id)->orderBy('created_at','desc')->paginate(5);
		$title = $user->name;
		return view('home')->withPosts($posts)->withTitle($title);
	}
	
	public function user_posts_draft(Request $request)
	{
		//
		$user = $request->user();
		$posts = Posts::where('author_id',$user->id)->where('active','0')->orderBy('created_at','desc')->paginate(5);
		$title = $user->name;
		return view('home')->withPosts($posts)->withTitle($title);
	}

	/**
	 * profile for user
	 */
	public function profile(Request $request, $id) 
	{
		$data['user'] = User::find($id);
		if (!$data['user'])
			return redirect('/');

		if ($request -> user() && $data['user'] -> id == $request -> user() -> id) {
			$data['author'] = true;
		} else {
			$data['author'] = null;
		}
		$data['comments_count'] = $data['user'] -> comments -> count();
		$data['posts_count'] = $data['user'] -> posts -> count();
		$data['posts_active_count'] = $data['user'] -> posts -> where('active', '1') -> count();
		$data['posts_draft_count'] = $data['posts_count'] - $data['posts_active_count'];
		$data['latest_posts'] = $data['user'] -> posts -> where('active', '1') -> take(5);
		$data['latest_comments'] = $data['user'] -> comments -> take(5);
		return view('admin.profile', $data);
	}

	public function changepassword()
	{
		$user = Auth::user()->id;
		$old = User::findOrFail($user);
		return view('gantipassword', compact('old'));
	}

	public function ganti($id, Request $request)
	{
		$user = User::findOrFail($id);
		$old = User::findOrFail($id);

		$oldpass = reques::get('password_lama');
        $newpass = reques::get('password_baru');
        $confirm =  reques::get('konfirmasi_password');
		if (Hash::check($oldpass, $user->password)) {
			if ($newpass == $confirm) {
				$user->password = bcrypt($newpass);
				$user->save();
			}
			else
			{
				\Session::flash('flash_message_gagal1','');
				return view('gantipassword', compact('old'));	
			}
			
		}
		else
		{
			\Session::flash('flash_message_gagal2','');
			return view('gantipassword', compact('old'));
		}
		return redirect('/');
	}

	public function getData()
    {
        //return view('getData');
          $employeList = User::paginate(10);
          $employeProfile = Profil::paginate(10);
        
        //$booksList = Books::all();
        return view('admin.showuser')->with('employeList', $employeList)->with('employeProfile', $employeProfile);
    }

	public function cari() {


        $kata_kunci = reques::get('kata_kunci');

        if($kata_kunci==''){
        	// \Session::Flash('error', 'Keywords tidak boleh kosong');

        	return redirect('admin/daftaruser');
        }

        else{
        $employees = User::where('name', 'like', '%' . $kata_kunci . '%')->orWhere('email', 'like', '%' . $kata_kunci . '%')->paginate(10);
         $employees->setPath('search');
        return View('admin.showusercari')->with('employees', $employees);
        }
    }

    public function delete($id) {
        User::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        return Redirect('/daftaruser');
    }

     public function edit($id) {

		$book = Profil::where('profil_id', $id)->get();
        // $book = Profil::findOrFail($id);
        return view('admin.editprofiluser',  compact('book'));
    }


    public function update($id, Request $request) 
    {
    		
        $nama = reques::get('nama');
        $nip = reques::get('nip');
        $jabatan =  reques::get('jabatan');
        $npwp   = reques::get('npwp');
        $jenis_kelamin = reques::get('jenis_kelamin');
        $nm_status_pegawai = reques::get('nm_status_pegawai');
        $pangkat =reques::get('pangkat');
        $jenis_jabatan =reques::get('jenis_jabatan');
        $unit_organisasi = reques::get('unit_organisasi');
        $jabatan_grade = reques::get('jabatan_grade');
        $nama_bank = reques::get('nama_bank');
        $no_rekening = reques::get('no_rekening');
        $nama_rekening = reques::get('nama_rekening');
		// $filename = reques::get('fileToUpload')->getClientOriginalName();

        $uploadOk = 1;

	    $target_dir = "upload/rekening/";
	    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    // Check if image file is a actual image or fake image
	    if(isset($_POST["submit"])) {
	        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

	            $uploadOk = 1;

	    }
	    // Check if file already exists
	    if (file_exists($target_file)) {

	        $uploadOk = 1;
	    }
	    // Check file size
	    // Allow certain file formats
	    // Check if $uploadOk is set to 0 by an error
	    if ($uploadOk == 0) {
	      // \Session::flash('flash_message_gagalupload','');
	        // echo "Sorry, your file was not uploaded.";
	    // if everything is ok, try to upload file
	    }
	    else {
	            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	          // $this->import();
	          // \Session::flash('flash_message_', 'Data telah berhasil diimport');
	          }
	            else {
	              // \Session::flash('flash_message_berhasilupload','');
	                // echo "Sorry, there was an error uploading your file.";
	            }
	        }

		$filename = basename($_FILES["fileToUpload"]["name"]);

		$book = Profil::findOrFail($id);

		$book->nama = $nama;
		$book->nip = $nip;
		$book->jabatan = $jabatan;
		$book->npwp = $npwp;
		$book->jenis_kelamin = $jenis_kelamin;
		$book->nm_status_pegawai = $nm_status_pegawai;
		$book->pangkat = $pangkat;
		$book->jenis_jabatan = $jenis_jabatan;
		$book->unit_organisasi = $unit_organisasi;
		$book->jabatan_grade = $jabatan_grade;
		$book->nama_bank = $nama_bank;
		$book->no_rekening = $no_rekening;
		$book->nama_rekening = $nama_rekening;
		$book->filename = $filename;
		$book->save();

        // \Session::flash('flash_message', 'Data pegawai telah diperbarui');
        return redirect('admin/daftaruser');
    }

    public function changepassworduser($id)
	{
		$user = User::findOrFail($id);
		return view('admin.resetpassworduser', compact('user'));
	}

	public function resetpassworduser($id, Request $request)
	{
		$user = User::findOrFail($id);

        $newpass = reques::get('password_baru');
        $confirm =  reques::get('konfirmasi_password');
        if ($newpass == $confirm)
        {
        	$user->password = bcrypt($newpass);
			$user->save();
			return redirect('admin/daftaruser');
        }
        else
        {
			\Session::flash('flash_message_gagal','');
			return view('admin.resetpassworduser', compact('user'));
		}
	}
}

