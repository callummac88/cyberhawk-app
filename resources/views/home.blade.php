@extends('layouts.admin')

@section('main-content')

<script>
$(document).ready(function(){
    $.get( "/inspection", function( data ) {
        for(var key in data) {
        $('#inspectionData').append("<tr><td>Item #"+key+"</td><td>"+data[key].notes+"</td></tr>");
    }    
    })
});
</script>

    <h1 class="h3 mb-4 text-gray-800">{{ __('Inspection Dashboard') }}</h1>

    <div class="card" style="width: 18rem;">
            <img src="img/turbine1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Alpha Wind Turbine</h5>
                <button id="show" class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseData" aria-expanded="false" aria-controls="collapseData">
                View Inspection Data
                </button>
            </div>
    </div>
    <div class="collapse" id="collapseData">
            <div class="card card-body">
            <p><strong>Wind Turbine Inspection</strong><?php echo " " . date("d/m/Y");?></p>

            <div class="table-wrapper-scroll-y custom-scrollbar">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Item No.</th>
                        <th>Inspection Notes</th>
                    </tr>
                </thead>
                <tbody id="inspectionData">

                </tbody>
            </table>
            </div>
        </div>
    
@endsection
