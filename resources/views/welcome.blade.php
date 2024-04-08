@extends('layouts.welcome')

@section('content')
<div class="flex flex-col justify-center items-center min-h-screen bg-gray-100">
    <h1 class="text-4xl font-bold mb-8">Student Admissions</h1>
    <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Apply Now
    </a>
</div>
@endsection