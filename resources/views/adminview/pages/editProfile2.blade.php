@extends('layouts.admin')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Profile') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="row">
            <div class="col-6">
                @include('adminview.partials.profile.profile')
            </div>
            <div class="col-6">
                @include('adminview.partials.profile.password')
            </div>

        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('adminview.partials.profile.delete')
            </div>
        </div>
    </div>
</div>
@endsection