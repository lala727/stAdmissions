@extends('layouts.dashboard')

@section('content')
    <div class="border border-gray-300">
            <!-- Heading Section -->
        <div class="flex justify-between items-center px-4 py-2 bg-gray-100">
            <!-- Undergraduate Heading with border-right -->
            <a href="{{ route('undergraduateSection') }}" 
            class="text-blue-500 w-1/2 text-center border-r border-gray-300 @if($scheme == 'undergraduate') font-bold @endif">
                Undergraduate
            </a>
            <!-- Postgraduate Heading -->
            <a href="{{ route('postgraduateSection') }}" 
            class="text-blue-500 w-1/2 text-center @if($scheme == 'postgraduate') font-bold @endif">
                Postgraduate
            </a>
        </div>
        <div class="border-t border-gray-300 px-4 py-2">
            <p class="schemeText">
                @if($scheme == 'undergraduate')
                    <p>This scheme is for undergraduate programs</p>
                @elseif($scheme == 'postgraduate')
                    <p>This scheme is for postgraduate programs</p>
                @else
                    Please select the scheme you would like to apply for.
                @endif
            </p>
        </div>
    </div>
    <div class="border-t border-gray-300 px-4 py-2 flex-grow">
            <!-- Main Content -->
                @if($scheme == 'undergraduate')
                    @yield('content')
                @elseif($scheme == 'postgraduate')
                    @yield('content')
                @else
                    Please ensure you select the right scheme to apply for.
                @endif
    </div>
@endsection