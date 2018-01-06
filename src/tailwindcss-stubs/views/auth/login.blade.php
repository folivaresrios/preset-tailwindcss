@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="sm:w-5/6 mx-auto lg:w-1/3">
        <div class="rounded shadow">
            <div class="font-medium text-sm text-brand-darker bg-white p-3 rounded-t border-b border-grey-light">
                Login
            </div>
            <div class="bg-white p-3 rounded-b">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="flex sm:flex-col md:flex-row items-stretch mb-3">
                        <label for="email" class="md:text-right sm:text-left font-semibold text-grey-dark text-sm pt-2 pr-3 sm:pb-1 align-middle w-1/4 leading-normal">E-Mail Address</label>
                        <div class="flex flex-col md:w-3/5 sm:w-full">
                            <input id="email" type="email" class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required autofocus>
                            {!! $errors->first('email', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex sm:flex-col md:flex-row items-stretch mb-4">
                        <label for="password" class="md:text-right sm:text-left font-semibold text-grey-dark text-sm pt-2 pr-3 sm:pb-1 align-middle w-1/4 leading-normal">Password</label>
                        <div class="flex flex-col md:w-3/5 sm:w-full">
                            <input id="password" type="password" class="flex-grow h-8 px-2 rounded border {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password" required>
                            {!! $errors->first('password', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex mb-4">
                        <label class="w-3/4 md:ml-auto">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="text-sm text-grey-dark"> Remember Me</span>
                        </label>
                    </div>

                    <div class="flex">
                        <div class="w-3/4 md:ml-auto">
                            <button type="submit" class="bg-brand hover:bg-brand-dark text-white text-sm font-semibold py-2 px-4 rounded mr-3">
                                Login
                            </button>
                            <a class="no-underline hover:underline text-brand-dark text-sm" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
