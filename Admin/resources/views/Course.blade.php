{{-- Include app.php file to clone this file. Where already include Sidebar and necessary css & js file--}} 
@extends('layouts.app')

@section('content')

{{-- Service Table Start ---- Service Table Start --}}
<div id="courseMainDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5"> 
            {{-- Add New Service Button  --}}
            <button id="addNewCourse" class="btn btn-sm btn-danger my-3"><b>Add New +</b></button>

            <table  id="courseDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Fee</th>
                    <th class="th-sm">Class</th>
                    <th class="th-sm">Enroll</th>
                    <th class="th-sm">Details</th>
                    <th class="th-sm">Edit</th>
                    <th class="th-sm">Delete</th>
                    </tr>
                </thead>
                <tbody id="course_table">

                </tbody>
            </table>
        
        </div>
    </div>
</div>
{{-- Service Table End ---- Service Table End --}}





{{-- Data Loader Start ---- Data Loader Start --}}
<div id="courseLoaderDiv" class="container">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
          <img class="loading-icon m-5" src="{{asset('images/loader.svg')}}" alt="">
        </div>
    </div>
</div>
{{-- Data Loader End ---- Data Loader End --}}

{{-- Warnig Message Start---- Warnig Message Start--}}
<div id="courseWrongDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
            <h3>Data Not Found.... Something went wrong</h3>
        </div>
    </div>
</div>
{{-- Warnig Message End---- Warnig Message End--}}






{{-- Add New Service Modal Start---- Add New Service Modal Start--}}
<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add New Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body  text-center">
       <div class="container">
       	<div class="row">
       		<div class="col-md-6">
             	<input id="CourseNameId" type="text" id="" class="form-control mb-3" placeholder="Course Name">
          	 	<input id="CourseDesId" type="text" id="" class="form-control mb-3" placeholder="Course Description">
    		 	<input id="CourseFeeId" type="text" id="" class="form-control mb-3" placeholder="Course Fee">
     			<input id="CourseEnrollId" type="text" id="" class="form-control mb-3" placeholder="Total Enroll">
       		</div>
       		<div class="col-md-6">
     			<input id="CourseClassId" type="text" id="" class="form-control mb-3" placeholder="Total Class">      
     			<input id="CourseLinkId" type="text" id="" class="form-control mb-3" placeholder="Course Link">
     			<input id="CourseImgId" type="text" id="" class="form-control mb-3" placeholder="Course Image">
       		</div>
       	</div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
        <button  id="CourseAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
      </div>
    </div>
  </div>
</div>
{{-- Add New Service Modal End---- Add New Service Modal End--}}


{{-- Delete Service Modal Start ---- Delete Service Modal Start --}}
<div class="modal fade"id="deleteCourseModal"data-backdrop="static"data-keyboard="false"tabindex="-1"aria-labelledby="deleteServiceModalLabel"aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="text-center p-3 mt-4">Do you want to delete</h5>
                <h3 class="text-center" id="courseDeleteId"></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">
                    No
                </button>
                <button data-id="" id="courseDeleteConfirm" type="button" class="btn btn-danger btn-sm">Yes</button>
            </div>
        </div>
    </div>
</div>
{{-- Delete Service Modal End ---- Delete Service Modal End --}}


{{-- Edit Service Modal Start ---- Edit Service Modal Start --}}
<div class="modal fade"id="editCourseModal"data-backdrop="static"data-keyboard="false"tabindex="-1"
aria-labelledby="editModalLabel"aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-body p-5">

                <h3 class="text-center" id="courseEditId"></h3>
                
                {{-- Upadate Form --}}
                <div id="courseEditForm" class="container d-none">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" id="courseNameUpdateId" class="form-control my-1" placeholder="Service Name"/>
                            <input id="courseDesUpdateId" type="text" id="" class="form-control mb-3" placeholder="Course Description" />
                            <input id="courseFeeUpdateId" type="text" id="" class="form-control mb-3" placeholder="Course Fee" />
                            <input id="courseEnrollUpdateId" type="text" id="" class="form-control mb-3" placeholder="Total Enroll" />
                        </div>
                        <div class="col-md-6">
                            <input id="courseClassUpdateId" type="text" id="" class="form-control mb-3" placeholder="Total Class" />      
                            <input id="courseLinkUpdateId" type="text" id="" class="form-control mb-3" placeholder="Course Link" />
                            <input id="courseImgUpdateId" type="text" id="" class="form-control mb-3" placeholder="Course Image" />
                        </div>
                      </div>
                </div>
                
                {{-- Upadate Loader --}}
                <div id="courseEditLoader" style="width: 100% !important;display:flex;align-items:center;justify-content:center;">
                    <img class="loading-icon m-5 " src="{{asset('images/loader.svg')}}" alt="">
                </div>
                
                {{-- Warning message --}}
                <div id="courseEditWrong" style="width: 100% !important;display:flex;align-items:center;justify-content:center;">
                    <h5  class="text-center d-none">Data Not Found.... Something went wrong</h5>
                </div>
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">
                Cancel
            </button>
            {{-- Update Confirm Button --}}
            <button data-id="" id="courseUpdateConfirm" type="button" class="btn btn-danger btn-sm">Update</button>
            </div>
        </div>
    </div>
</div>
{{-- Edit Service Modal End ---- Edit Service Modal End --}}


@endsection


@section('script')
<script type="text/javascript">

// Get course data
getCourseData();

// Code for Datatable 
$(document).ready(function () {
    $('#courseDt').DataTable();
    $('.dataTables_length').addClass('bs-select');
});


// Send Ajax Request To Access Course Data
function getCourseData(){
    axios.get('/getCourseData')// When this function exicute it hit this get route. Then (routes/web.php) call related controller meathoad to perform retrive data.
    .then(function (response) {// when ajax request is send it recive a response
        if(response.status==200){ // if response is successfully done
            
            $('#courseLoaderDiv').addClass('d-none');// Hide Data Loader
            
            $('#courseMainDiv').removeClass('d-none');// Show Table
            
            $('#course_table').empty();// Fist Clar Table Data
            
            var dataJSON=response.data;// access response data
            
            $.each(dataJSON, function(i, item) {// make loop with each() function to create dynamic service table data  use appendTo() meathoad.
                $('<tr>').html(
                    "<td>"+dataJSON[i].course_name+"</td>"+
                    "<td>"+dataJSON[i].course_fee+"</td>"+
                    "<td>"+dataJSON[i].course_totalclass+"</td>"+
                    "<td>"+dataJSON[i].course_totalenroll +"</td>"+
                    "<td><a class='courseDetailsBtn' data-id="+dataJSON[i].id+"><i class='fas fa-eye'></i></a></td>"+
                    "<td><a class='courseEditBtn' data-id="+dataJSON[i].id+"><i class='fas fa-edit'></i></a></td>"+
                    "<td><a class='courseDeleteBtn' data-id="+dataJSON[i].id+"><i class='fas fa-trash-alt'></i></a></td>").appendTo('#course_table');
            });


            // Open Delete Service Modal 
            // This function wrote here because (serviceDeleteBtn) is written this section. Otherwise it is not work
            $('.courseDeleteBtn').click(function(){
                var id = $(this).data('id');
                //$('#serviceDeleteConfirm').attr('data-id',id);
                $('#courseDeleteId').html(id);
                $('#deleteCourseModal').modal('show');
             })

            //Service Edit Btn Click
            $('.courseEditBtn').click(function(){
                var id = $(this).data('id');
                $('#courseEditId').html(id);
                courseUpdateDetails(id);
                $('#editCourseModal').modal('show');
            })

        }else{
            $('#courseWrongDiv').removeClass('d-none'); // Show warning message
            $('#courseLoaderDiv').addClass('d-none'); // Hide data loader
        }

    }).catch(function (error) {
        $('#courseWrongDiv').removeClass('d-none'); // Show warning message
        $('#courseLoaderDiv').addClass('d-none'); // Hide data loader
    });
}



// Course Delete
$('#courseDeleteConfirm').click(function(){
    var id = $('#courseDeleteId').html();
    courseDelete(id);

})
function courseDelete(deleteId){
    axios.post('/courseDelete',{id:deleteId})
    .then(function (response) {
        if(response.status==200){
            if(response.data==1){
                   $('#deleteCourseModal').modal('hide');
                   getCourseData();
                   toastr.success('Deleted Successfully');
            }else{
                $('#deleteCourseModal').modal('hide');
                getCourseData();
               toastr.error('Delete Fail');
            }
        }else{
            $('#deleteCourseModal').modal('hide');
            toastr.error('Somethimg Gone Wrong');
        }
    })
    .catch(function (error) {
        toastr.error('Somethimg Gone Wrong');
    });

}



// Each Course Update Details
function courseUpdateDetails(detailsId){
    axios.post('/courseDetails',{id:detailsId})
    .then(function (response) {
      if(response.status==200){
        $('#courseEditForm').removeClass('d-none');
        $('#courseEditLoader').addClass('d-none');


          var dataJSON=response.data;

          $('#courseNameUpdateId').val(dataJSON[0].course_name);
          $('#courseDesUpdateId').val(dataJSON[0].course_des);
          $('#courseFeeUpdateId').val(dataJSON[0].course_fee);
          $('#courseEnrollUpdateId').val(dataJSON[0].course_totalenroll);
          $('#courseClassUpdateId').val(dataJSON[0].course_totalclass);
          $('#courseLinkUpdateId').val(dataJSON[0].course_link);
          $('#courseImgUpdateId').val(dataJSON[0].course_img);

          $('#courseEditLoader').addClass('d-none');
          $('#courseEditWrong').removeClass('d-none');
      }
    })
    .catch(function (error) {
        $('#courseEditLoader').addClass('d-none');
        $('#courseEditWrong').removeClass('d-none');
    });

}
$('#courseUpdateConfirm').click(function(){
    var courseId = $('#courseEditId').html();
    var courseName = $('#courseNameUpdateId').val();
    var courseDes=$('#courseDesUpdateId').val();
    var courseFee=$('#courseFeeUpdateId').val();
    var courseEnroll=$('#courseEnrollUpdateId').val();
    var courseClass=$('#courseClassUpdateId').val();
    var courseLink=$('#courseLinkUpdateId').val();
    var courseImg=$('#courseImgUpdateId').val();
    courseUpdate(courseId,courseName,courseDes,courseFee,courseEnroll,courseClass,courseLink,courseImg);
});
function courseUpdate(courseID,courseName,courseDes,courseFee,courseEnroll,courseClass,courseLink,courseImg){
    /*========Form Validation==========*/
    if(courseName.length==0){
        toastr.error('Course Name is Empty !');
    }
    else if(courseDes.length==0){
    toastr.error('Course Description is Empty !');
    }
    else if(courseFee.length==0){
        toastr.error('Course Fee is Empty !');
    }
    else if(courseEnroll.length==0){
        toastr.error('Course Enroll is Empty !');
    }
    else if(courseClass.length==0){
        toastr.error('Course Class is Empty !');
    }
    else if(courseLink.length==0){
        toastr.error('Course Link is Empty !');
    }
    else if(courseImg.length==0){
        toastr.error('Course Image is Empty !');
    }else{
        $('#courseUpdateConfirm').html("Updatting..<div class='spinner-border spinner-border-sm'role='status'></div>");
        /*========Send Post Request==========*/
        axios.post('/courseUpdate',{id:courseID,course_name:courseName,course_des:courseDes,course_fee:courseFee,course_totalenroll:courseEnroll,course_totalclass:courseClass,course_link:courseLink,course_img:courseImg})
        .then(function (response) {
            $('#courseUpdateConfirm').html("Update");
            /*========If request send successfully==========*/
            if(response.status==200)
            {
                $('#editCourseModal').modal('hide');
                getCourseData();
                toastr.success('Updated Successfully');
            }else{
                $('#editCourseModal').modal('hide');
                getCourseData();
                toastr.error('Update Fail');
            }
        })
        .catch(function (error) {
            $('#editCourseModal').modal('hide');
            toastr.error('Somethimg Gone Wrong two');
        });
   
    }


}


// Add New Course
$('#addNewCourse').click(function(){
    $('#addCourseModal').modal('show');
});
$('#CourseAddConfirmBtn').click(function(){
    var CourseName=$('#CourseNameId').val();
    var CourseDes=$('#CourseDesId').val();
    var CourseFee=$('#CourseFeeId').val();
    var CourseEnroll=$('#CourseEnrollId').val();    
    var CourseClass=$('#CourseClassId').val();
    var CourseLink=$('#CourseLinkId').val();
    var CourseImg=$('#CourseImgId').val();
    
      CourseAdd(CourseName,CourseDes,CourseFee,CourseEnroll,CourseClass,CourseLink,CourseImg);
  
})
function CourseAdd(CourseName,CourseDes,CourseFee,CourseEnroll,CourseClass,CourseLink,CourseImg) {
  
    if(CourseName.length==0){
     toastr.error('Course Name is Empty !');
    }
    else if(CourseDes.length==0){
     toastr.error('Course Description is Empty !');
    }
    else if(CourseFee.length==0){
      toastr.error('Course Fee is Empty !');
    }
    else if(CourseEnroll.length==0){
      toastr.error('Course Enroll is Empty !');
    }
    else if(CourseClass.length==0){
      toastr.error('Course Class is Empty !');
    }
    else if(CourseLink.length==0){
      toastr.error('Course Link is Empty !');
    }
    else if(CourseImg.length==0){
      toastr.error('Course Image is Empty !');
    }

    else{
        //Animation....
        $('#CourseAddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") 
        axios.post('/addCourse', {course_name: CourseName,course_des: CourseDes,course_fee: CourseFee,course_totalenroll: CourseEnroll,course_totalclass: CourseClass,course_link: CourseLink,course_img:CourseImg 
        })
        .then(function(response) {
            $('#CourseAddConfirmBtn').html("Save");

            if(response.status==200){

                if (response.data == 1) {
                    $('#addCourseModal').modal('hide');
                    toastr.success('Add Success');
                    getCourseData();
                }else {
                    $('#addCourseModal').modal('hide');
                    toastr.error('Add Fail');
                    getCourseData();
                }  
            } 
            else{
                $('#addCourseModal').modal('hide');
                toastr.error('Something Went Wrong Two!');
            }   

        })
        .catch(function(error) {
                $('#addCourseModal').modal('hide');
                toastr.error('Something Went Wrong !');
        });

    }

}



   
</script> 
@endsection