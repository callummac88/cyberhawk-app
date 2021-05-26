@extends('layouts.admin')

@section('main-content')

    <h1 class="h3 mb-4 text-gray-800">App Improvements</h1>
    <ol>
        <li>Turbine and inspection data should stored in a database</li>
        <li>Inspections could be timestamped</li>
        <li>By using timestamp, inspections could be archived and filtered by date</li>
        <li>Standard inspection notes could be stored in a database table with the ability to add/edit/delete from an admin interface</li>
        <li>As more turbines are added to the database these could be filtered by type/location on the dashboard</li>
    </ol>

    
@endsection
