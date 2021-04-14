{{-- Include app.php file to clone this file. Where already include Sidebar and necessary css & js file--}} 
@extends('layouts.app')


@section('content')
{{-- Service Table Start ---- Service Table Start --}}
<div id="mainDiv" class="container d-none">
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
{{-- Service Table End ---- Service Table End --}}



{{-- Data Loader Start ---- Data Loader Start --}}
<div id="loaderDiv" class="container">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
          <img class="loading-icon m-5" src="{{asset('images/loader.svg')}}" alt="">
        </div>
    </div>
</div>
{{-- Data Loader End ---- Data Loader End --}}


{{-- Warnig Message Start---- Warnig Message Start--}}
<div id="wrongDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
            <h3>Data Not Found.... Something went wrong</h3>
        </div>
    </div>
</div>
{{-- Warnig Message End---- Warnig Message End--}}



@endsection




@section('script')
<script type="text/javascript">
  // At first this script load this meathoad
  getServiceData();


  // Code for Datatable 
  $(document).ready(function () {
        $('#serviceDt').DataTable();
        $('.dataTables_length').addClass('bs-select');
  });


  // Send Ajax Request To Access Service Data
  function getServiceData(){
    axios.get('/getServiceData')// When this function exicute it hit this get route. Then (routes/web.php) call related controller meathoad to perform retrive data.
    .then(function (response) {// when ajax request is send it recive a response
        if(response.status==200){ // if response is successfully done
            
            $('#loaderDiv').addClass('d-none');// Hide Data Loader
            
            $('#mainDiv').removeClass('d-none');// Show Table
            
            $('#service_table').empty();// Fist Clar Table Data
            
            var dataJSON=response.data;// access response data
            
            $.each(dataJSON, function(i, item) {// make loop with each() function to create dynamic service table data  use appendTo() meathoad.
                $('<tr>').html(
                    "<td> <img class='table-img' src="+dataJSON[i].service_img+"></td>"+
                    "<td>"+dataJSON[i].service_name+"</td>"+
                    "<td>"+dataJSON[i].service_des+"</td>"+
                    "<td><a class='serviceEditBtn' data-id="+dataJSON[i].id+"><i class='fas fa-edit'></i></a></td>"+
                    "<td><a class='serviceDeleteBtn' data-id="+dataJSON[i].id+"><i class='fas fa-trash-alt'></i></a></td>").appendTo('#service_table');
            });
        }else{
            $('#wrongDiv').removeClass('d-none'); // Show warning message
            $('#loaderDiv').addClass('d-none'); // Hide data loader
        }

    }).catch(function (error) {
        $('#wrongDiv').removeClass('d-none'); // Show warning message
        $('#loaderDiv').addClass('d-none'); // Hide data loader
    });
    }
</script>
@endsection
