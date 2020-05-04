@extends('layout.index')
@section('content')
    <center>
    <h1 >Active Email Sucess: {{$user_account->name}}</h1></center>
    <center><![if !mso]><a style="border-radius: 4px;display: inline-block;font-size: 14px;font-weight: bold;line-height: 24px;padding: 12px 24px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #ffffff !important;background-color: #e45d6b;font-family: Open Sans, sans-serif;" href="home">Go to the Homepage</a><![endif]></center>
@endsection
