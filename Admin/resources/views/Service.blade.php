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
  // At first this script load this meathoad
  getServiceData();


  // Code for Datatable 
  $(document).ready(function () {
        $('#serviceDt').DataTable();
        $('.dataTables_length').addClass('bs-select');
  });


  // Send Ajax Request To Access Service Data
  function getServiceData(){
    // When this function exicute it hit this get route. Then (routes/web.php) call related controller meathoad to perform retrive data.
    axios.get('/getServiceData')
    // when ajax request is send it recive a response
    .then(function (response) {
        if(response.status==200){
            // access response data
            var dataJSON=response.data;
            // make loop with each() function to create dynamic service table data  use appendTo() meathoad.
            $.each(dataJSON, function(i, item) {
                $('<tr>').html(
                    "<td> <img class='table-img' src="+dataJSON[i].service_img+"></td>"+
                    "<td>"+dataJSON[i].service_name+"</td>"+
                    "<td>"+dataJSON[i].service_des+"</td>"+
                    "<td><a class='serviceEditBtn' data-id="+dataJSON[i].id+"><i class='fas fa-edit'></i></a></td>"+
                    "<td><a class='serviceDeleteBtn' data-id="+dataJSON[i].id+"><i class='fas fa-trash-alt'></i></a></td>").appendTo('#service_table');
            });




        }else{

        }

    }).catch(function (error) {

    });
    }
</script>
@endsection
