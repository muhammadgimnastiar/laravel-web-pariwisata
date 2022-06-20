@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{asset('css/cal-style.css')}}">
@endsection

@section('script')

<script src="{{asset('js/watch-list.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>

@endsection

@section('content')
<div class="title">
    Watch list
</div>
<div class="content">

    <form class="form-add-movie">
        <input type="text" name="movie-name-input" id="movie-name-input" class="field"
            placeholder="Movie title">


        <input type="text" name="movie-rating-input" id="movie-rating-input" class="field"
            placeholder="Movie rating">
        <input type="button" value="Add movie" class="button" id="add">
    </form>



    <div class="table-wrapper">


        <form class="align-right">
            <input type="text" id="search-movie" class="field" placeholder="Search">
        </form>

        <table class="movie-table">
            <thead>
            <tr>
                <th data-column="title" data-order="desc" class="rating-filter">Movie Title</th>
                <th data-column="rating" data-order="desc" class="rating-filter">Movie Rating &triangledown;</th>
                <th data-column="action">Action</th>
            </tr>
        </thead>
        <tbody id="movie-table">
            <!-- <tr>
                <td>Toy story</td>
                <td>8.2</td>
                <td><input type="button" value="Delete" class="button btn-delete"></td>
            </tr>
            <tr>
                <td>Jelangkung</td>
                <td>8.2</td>
                <td><input type="button" value="Delete" class="button btn-delete"></td>
            </tr> -->
        </tbody>
        </table>
    </div>
</div>
@endsection