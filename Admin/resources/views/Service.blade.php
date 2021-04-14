{{-- Include app.php file to clone this file. Where already include Sidebar and necessary css & js file--}} 
@extends('layouts.app')


@section('content')
<div id="mainDiv" class="container">
    <div class="row">
        <div class="col-md-12 p-5"> 

            <table  id="serviceDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th class="th-sm">Image</th>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Description</th>
                    <th class="th-sm">Edit</th>
                    <th class="th-sm">Delete</th>
                    </tr>
                </thead>
                <tbody id="service_table">

                </tbody>
            </table>
        
        </div>
    </div>
</div>
@endsection




@section('script')
<script type="text/javascript">
  // Code for Datatable 
  $(document).ready(function () {
        $('#serviceDt').DataTable();
        $('.dataTables_length').addClass('bs-select');
  });
</script>
@endsection
