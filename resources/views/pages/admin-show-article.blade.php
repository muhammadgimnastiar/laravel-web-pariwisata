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
                      <th scope="col">#</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
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