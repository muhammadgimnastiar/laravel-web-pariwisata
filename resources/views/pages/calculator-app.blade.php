

@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/cal-style.css')}}">
@endsection

@section('script')
<script src="{{asset('js/calculator-app.js')}}"></script>
@endsection

@section('content')
<div class="title">
    Calculator App
</div>
<div class="content">
    <div class="display" id="display"> 
    </div>
    <table class="calculator">
        <tr>
            <td><button class="btn-clear" id="clear">C</button></td>
            <td><button class="btn-delete" id="delete"><</button></td>
            <td><button class="btn-operator" id="%">mod</button></td>
            <td><button class="btn-operator" id="-">-</button></td>
        </tr>

        <tr>
            <td><button class="btn-number" id="7">7</button></td>
            <td><button class="btn-number" id="8">8</button></td>
            <td><button class="btn-number" id="9">9</button></td>
            <td><button class="btn-operator" id="+">+</button></td>
        </tr>
        <tr>
            <td><button class="btn-number" id="4">4</button></td>
            <td><button class="btn-number" id="5">5</button></td>
            <td><button class="btn-number" id="6">6</button></td>
            <td><button class="btn-operator" id="/">:</button></td>
        </tr>
        <tr>
            <td><button class="btn-number" id="1">1</button></td>
            <td><button class="btn-number" id="2">2</button></td>
            <td><button class="btn-number" id="3">3</button></td>
            <td><button class="btn-operator" id="*">*</button></td>
        </tr>
        <tr>
            <td><button class="btn-number" id=".">.</button></td>
            <td><button class="btn-number" id="0">0</button></td>
            
            
            <td><button class="btn-operator" id="equal">=</button></td>
            <td><button class="btn-operator" id="**">^</button></td>
        </tr>
    </table>


</div>
@endsection