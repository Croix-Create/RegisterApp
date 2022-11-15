<!DOCTYPE html>

<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Register</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        @import url('https://fonts.googleapis.com/css?family=PT+Sans');

        body{
        background: #fff;
        font-family: 'PT Sans', sans-serif;
        }
        h2{
        padding-top: 1.5rem;
        }
        a{
        color: #333;
        }
        a:hover{
        color: #da5767;
        text-decoration: none;
        }
        .card{
        border: 0.40rem solid #f8f9fa;
        top: 10%;
        }
        .form-control{
        background-color: #f8f9fa;
        padding: 20px;
        padding: 25px 15px;
        margin-bottom: 1.3rem;
        }

        .form-control:focus {

            color: #000000;
            background-color: #ffffff;
            border: 3px solid #da5767;
            outline: 0;
            box-shadow: none;

        }

        .btn{
        padding: 0.6rem 1.2rem;
        background: #da5767;
        border: 2px solid #da5767;
        }
        .btn-primary:hover {

            
            background-color: #df8c96;
            border-color: #df8c96;
            transition: .3s;
        }
        #container {
            width: 60%;
            margin: auto;
            border: 1px solid black;
            display: inline-block;
            padding: 50px;

        }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

<div class="container justify-content-center">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <h2 class="card-title text-center">Register</h2>
                <div class="card-body py-md-4">
                <form method="POST" enctype="multipart/form-data" action="/register">
                @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" required placeholder="Name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"name="email" id="email" required placeholder="Email" value="{{ old('email') }}">
                    </div>                                              
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" required placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm-pasword" id="confirm-password" required placeholder="Confirm password" >
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <a href="/login">Login</a>
                        <button class="btn btn-primary" type="submit">Create Account</button>
                    </div>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
