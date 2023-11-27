@extends('layouts.master')

@section('body')
    <div class="bg-gray-700 text-gray-300 p-6 relative md:ml-64 min-h-screen overflow-x-hidden">
        <form method="post">
            @csrf
            <select name="type" id="type">
                <option value="cspe">cspe</option>
                <option value="cspeplus">cspeplus</option>
            </select>
            <input type="date" name="date_start" id="date_start">
            <input type="date" name="date_end" id="date_end">
            <button>export</button>
        </form>
    </div>
@endsection
