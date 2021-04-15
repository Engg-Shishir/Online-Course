{{-- Include app.php file to clone this file. Where already include Sidebar and necessary css & js file--}} 
@extends('layouts.app')


@section('content')
{{-- Service Table Start ---- Service Table Start --}}
<div id="mainDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5"> 
            {{-- Add New Service Button  --}}
            <button id="addNewService" class="btn btn-sm btn-danger my-3"><b>Add New +</b></button>

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



{{-- Add New Service Modal Start---- Add New Service Modal Start--}}
<div class="modal fade"id="addServiceModal"data-backdrop="static"data-keyboard="false"tabindex="-1"aria-labelledby="addModalLabel"aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-body p-5">
                <h3 class="text-center text-danger w-900 mb-4">Add New Service</h3>
                <div id="addServiceForm" class="w-100">
                <input type="text" id="addServiceName" class="form-control my-1" placeholder="Service Name"/>

                <input type="text" id="addServiceDescription" class="form-control my-1" placeholder="Service Description"/>

                <input type="text" id="addServiceImage" class="form-control my-1" placeholder="Service Image Link"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
                <button data-id="" id="addServiceConfirm" type="button" class="btn btn-danger btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>
{{-- Add New Service Modal End---- Add New Service Modal End--}}




{{-- Delete Service Modal Start ---- Delete Service Modal Start --}}
<div class="modal fade"id="deleteServiceModal"data-backdrop="static"data-keyboard="false"tabindex="-1"aria-labelledby="deleteServiceModalLabel"aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="text-center p-3 mt-4">Do you want to delete</h5>
                <h3 id="serviceDeleteId"></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">
                    No
                </button>
                <button data-id="" id="serviceDeleteConfirm" type="button" class="btn btn-danger btn-sm">Yes</button>
            </div>
        </div>
    </div>
</div>
{{-- Delete Service Modal End ---- Delete Service Modal End --}}



{{-- Edit Service Modal Start ---- Edit Service Modal Start --}}
<div class="modal fade"id="editSeriviceModal"data-backdrop="static"data-keyboard="false"tabindex="-1"
aria-labelledby="editModalLabel"aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-body p-5">

                <h3 class="text-center d-none" id="serviceEditId"></h3>
                
                {{-- Upadate Form --}}
                <div id="serviceEditForm" class="w-100 d-none">
                    <input type="text" id="serviceNameId" class="form-control my-1" placeholder="Service Name"/>

                    <input type="text" id="serviceDescriptionId" class="form-control my-1" placeholder="Service Description"/>

                    <input type="text" id="serviceImageId" class="form-control my-1" placeholder="Service Image Link"/>
                </div>
                
                {{-- Upadate Loader --}}
                <div id="serviceEditLoader" style="width: 100% !important;display:flex;align-items:center;justify-content:center;">
                    <img class="loading-icon m-5 " src="{{asset('images/loader.svg')}}" alt="">
                </div>
                
                {{-- Warning message --}}
                <div id="serviceEditWrong" style="width: 100% !important;display:flex;align-items:center;justify-content:center;">
                    <h5  class="text-center d-none">Data Not Found.... Something went wrong</h5>
                </div>
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">
                Cancel
            </button>
            {{-- Update Confirm Button --}}
            <button data-id="" id="serviceUpdateConfirm" type="button" class="btn btn-danger btn-sm">Update</button>
            </div>
        </div>
    </div>
</div>
{{-- Edit Service Modal End ---- Edit Service Modal End --}}


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

            // Open Delete Service Modal 
            // This function wrote here because (serviceDeleteBtn) is written this section. Otherwise it is not work
            $('.serviceDeleteBtn').click(function(){
               var id = $(this).data('id');
               //$('#serviceDeleteConfirm').attr('data-id',id);
               $('#serviceDeleteId').html(id);
               $('#deleteServiceModal').modal('show');
            })


            //Service Edit Btn Click
            $('.serviceEditBtn').click(function(){
                var id = $(this).data('id');
                $('#serviceEditId').html(id);
                serviceUpdateDetails(id);
                $('#editSeriviceModal').modal('show');
            })

        }else{
            $('#wrongDiv').removeClass('d-none'); // Show warning message
            $('#loaderDiv').addClass('d-none'); // Hide data loader
        }

    }).catch(function (error) {
        $('#wrongDiv').removeClass('d-none'); // Show warning message
        $('#loaderDiv').addClass('d-none'); // Hide data loader
    });
}

// Add New Service
$('#addNewService').click(function(){ // open Add Modal
    $('#addServiceModal').modal('show');
})
$('#addServiceConfirm').click(function(){ // Confirm for adding
    var name = $('#addServiceName').val();
    var des = $('#addServiceDescription').val();
    var img = $('#addServiceImage').val();
    addService(name,des,img);

})
function addService(addServiceName,addServiceDes,addServiceImg){
    if(addServiceName.length==0)// If Service Name Length is Zero
    {
        toastr.error('Ensert Service Name');
    }else if(addServiceDes.length==0){// If Service Description Length is Zero
        toastr.error('Ensert Service Description');
    }else if(addServiceImg.length==0){// If Service Image Length is Zero
        toastr.error('Ensert Service Image');
    }else{// If Evrything is fine
        $('#addServiceConfirm').html("Saving..<div class='spinner-border spinner-border-sm'role='status'></div>");// Show a spinner inside save button
        axios.post('/addService',{// Send ajax post request to pass data. When  function exicute it hit this post route. Then (routes/web.php) call related controller meathoad to perform add data.
            name:addServiceName,
            des:addServiceDes,
            img:addServiceImg
        })
        .then(function (response) {// when ajax request is send it recive a response
            $('#addServiceConfirm').html("Save");// Set default Save text inside button
            if(response.status==200) // if response is successfully done
            {
                if(response.data==1){
                    // Blank form input field
                    $('#addServiceName').val('');
                    $('#addServiceDescription').val('');
                    $('#addServiceImage').val('');
                    $('#addServiceModal').modal('hide');

                    getServiceData(); // again call this function to sea instant change in database

                    toastr.success('Add Successfully');// Show toaster alert Success mesage
                }else{
                    toastr.error('Add Fail');// Show toaster alert Warning mesage
                }
            }else{
                toastr.error('Somethimg Gone Wrong');// Show toaster alert Warning mesage.Suppose net connection somehow off.
            }
        })
        .catch(function (error) {
            toastr.error('Somethimg Gone Wrong');// Show toaster alert Warning mesage.Suppose net connection somehow off.
        });
    }


}



// Service Delete
$('#serviceDeleteConfirm').click(function(){
    var id = $('#serviceDeleteId').html();
    serviceDelete(id);

})
function serviceDelete(deleteId){
    axios.post('/serviceDelete',{id:deleteId})
    .then(function (response) {
        if(response.status==200){
            if(response.data==1){
                   $('#deleteServiceModal').modal('hide');
                   getServiceData();
                   toastr.success('Deleted Successfully');
            }else{
                $('#deleteServiceModal').modal('hide');
                getServiceData();
               toastr.error('Delete Fail');
            }
        }else{
            $('#deleteServiceModal').modal('hide');
            toastr.error('Somethimg Gone Wrong');
        }
    })
    .catch(function (error) {
        toastr.error('Somethimg Gone Wrong');
    });

}



// Each Service Update Details
function serviceUpdateDetails(detailsId){
    axios.post('/serviceDetails',{id:detailsId})
    .then(function (response) {
      if(response.status==200){
        $('#serviceEditForm').removeClass('d-none');
        $('#serviceEditLoader').addClass('d-none');


          var dataJSON=response.data;
          $('#serviceNameId').val(dataJSON[0].service_name);
          $('#serviceDescriptionId').val(dataJSON[0].service_des);
          $('#serviceImageId').val(dataJSON[0].service_img);
      }else{
          $('#serviceEditLoader').addClass('d-none');
          $('#serviceEditWrong').removeClass('d-none');
      }
    })
    .catch(function (error) {
        $('#serviceEditLoader').addClass('d-none');
        $('#serviceEditWrong').removeClass('d-none');
    });

}
$('#serviceUpdateConfirm').click(function(){
    var id = $('#serviceEditId').html();
    var name = $('#serviceNameId').val();
    var des = $('#serviceDescriptionId').val();
    var img = $('#serviceImageId').val();
    serviceUpdate(id,name,des,img);
});
function serviceUpdate(serviceId,serviceName,serviceDes,serviceImg){
    /*========Form Validation==========*/
    if(serviceName.length==0)
    {
        toastr.error('Ensert Service Name');
    }else if(serviceDes.length==0){
        toastr.error('Ensert Service Description');
    }else if(serviceImg.length==0){
        toastr.error('Ensert Service Image');
    }else{
        $('#serviceUpdateConfirm').html("Updatting..<div class='spinner-border spinner-border-sm'role='status'></div>");
        /*========Send Post Request==========*/
        axios.post('/serviceUpdate',{id:serviceId,name:serviceName,des:serviceDes,img:serviceImg})
        .then(function (response) {
            $('#serviceAddConfirm').html("Update");
            /*========If request send successfully==========*/
            if(response.status==200)
            {
                $('#editSeriviceModal').modal('hide');
                getServiceData();
                toastr.success('Updated Successfully');
            }else{
                $('#editSeriviceModal').modal('hide');
                 getServiceData();
                toastr.error('Update Fail');
            }
        })
        .catch(function (error) {
            $('#editSeriviceModal').modal('hide');
            toastr.error('Somethimg Gone Wrong two');
        });
   
    }


}






</script>
@endsection
