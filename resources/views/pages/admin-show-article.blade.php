@extends('layouts.master-admin')

@section('content')
<div class="clearfix"></div>
	
    <div class="container-fluid">
     
      
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Responsive Table</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      
                      <th scope="col">Judul</th>
                      <th scope="col">Content</th>
                      <th scope="col">Opsi</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    
                      
                      
                      @foreach ($berita as $item)
                      <tr>
                      
                      <td>{{$item->judul}}</td>
                      <td>{{$item->content}}</td>
                      <td>
                        <a href="/berita/edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                        <a href="/berita/hapus/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                      </tr>
                      @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

      
	  
	  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
@endsection