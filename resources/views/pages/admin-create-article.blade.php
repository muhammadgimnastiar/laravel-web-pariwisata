@extends('layouts.master-admin')

@section('content')
<div class="clearfix"></div>
	
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Bikin Artikel apa Hari ini?</div>
           <hr>
            <form method="post" action="/store-article">
              {{ csrf_field() }}
              @method('post')
           <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul artikel">
            @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif
           </div>
           <div class="form-group">
            <label for="picture">Thumbnail</label>
            <input type="text" class="form-control" id="picture" name="picture" placeholder="Masukkan url thumbnail artikel (http://urlimg.png)">
            @if($errors->has('picture'))
                                <div class="text-danger">
                                    {{ $errors->first('picture')}}
                                </div>
                            @endif
           </div>
           <div class="form-group">
            <label for="content">Isi Content</label>
            <input type="text" class="form-control" id="content" name="content" placeholder="Masukkan isi artikel">
            @if($errors->has('content'))
                                <div class="text-danger">
                                    {{ $errors->first('content')}}
                                </div>
                            @endif
           </div>
           
           {{-- <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox1" checked=""/>
            <label for="user-checkbox1">I Agree Terms & Conditions</label>
            </div>
           </div> --}}
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-post"></i> Posting</button>
          </div>
          </form>
         </div>
         </div>
      </div>

      

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
@endsection