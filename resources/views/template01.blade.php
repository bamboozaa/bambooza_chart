@extends('layouts.app')
@section('title', 'Welcome to Advisers System 1.2')

@section('importcss')
    @parent
    {{ Html::style('css/custom.css') }}
@stop

@section('importjs')
    @parent
    {{ Html::script('js/custom.js') }}
    <script type="module">
        $("button").click(function() {
            // alert("Thanks");
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            })
        });
    </script>
@stop

@section('content')

    <main class="container">
        <h1> How to Install JQuery in Laravel 10? - TechvBlogs.com</h1>

        <button class="btn btn-success">Click Me</button>
    </main>

@endsection
