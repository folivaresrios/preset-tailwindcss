@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="sm:w-5/6 mx-auto lg:w-1/3">
        <div class="rounded shadow">
            <div class="font-medium text-sm text-brand-darker bg-white p-3 rounded-t border-b border-grey-light">
                Dashboard
            </div>
            <div class="bg-white p-3 rounded-b">
                @if (session('status'))
                    <div class="bg-green-lightest border border-green-light text-green-dark text-sm px-4 py-3 rounded mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="text-grey-dark text-sm">
                    You are logged in!
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
