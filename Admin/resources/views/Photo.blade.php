@extends('layouts.app')
@section('title','Photo Gallery')
@section('content')

    <div class="container-fluid m-0 ">
        <div class="row">
            <div class="col-md-12">
                <button data-toggle="modal" data-target="#PhotoModal" id="addNewPhotoBtnId" class="btn my-3 btn-sm btn-success">Add New </button>
            </div>
        </div>
        <div class="row photoRow">
         {{-- Here dynamacally show image --}}
        </div>
        <button class="btn btn-primary float-right " id="LoadMoreBtn"> Load More </button>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="PhotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <input class="form-control" id="imgInput" type="file">
                    <img class="imgPreview mt-3" id="imgPreview" src="{{asset('images/default-image.png')}}">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button id="SavePhoto" type="button" class="btn btn-sm btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script type="text/javascript">

    // Call LoadPhoto() 
    LoadPhoto();
    
    // Show Image preview when image is chose
    $('#imgInput').change(function () {
        var reader=new FileReader(); // File reader object
        reader.readAsDataURL(this.files[0]); // read data
        reader.onload=function (event) {
            var ImgSource= event.target.result;
            $('#imgPreview').attr('src',ImgSource)
        }
    });


    // Upload & Save Photo
    $('#SavePhoto').on('click',function () {

        // Show spinner inside button
        $('#SavePhoto').html("<div class='spinner-border spinner-border-sm' role='status'>Saving....</div>");

        // Access photo file
        var PhotoFile = $('#imgInput').prop('files')[0];

        // Create formdata object
        var formData  = new FormData();
        //Bind photo file with object
        formData.append('photo',PhotoFile);
        //send ajax request to save data
        axios.post("/PhotoUpload",formData).then(function (response) {
            // If data save successfully
            if(response.status==200 && response.data==1){
                $('#PhotoModal').modal('hide');
                $('#SavePhoto').html('Save');
                // show succes Alert
                toastr.success('Photo Upload Success');
            }
            else{
                $('#PhotoModal').modal('hide');
                // show warning Alert
                toastr.error('Photo Upload Fail');
            }
        }).catch(function (error) {
            $('#PhotoModal').modal('hide');
            toastr.error('Photo Upload Fail');
            $('#SavePhoto').html('Save');
        })

    });


    var  ImgID=0;
    //Load photo inside admin view
    function LoadPhoto() {
        var URL="/LoadPhoto";
        // Send ajax request
        axios.get(URL).then(function (response) {
            
            console.log(response.data);
            var length = response.data.length;
            console.log(length);

            if(length < 6){
                toastr.error('First Insert Some Image');
            }else{
                ImgID = response.data[5]['id'];             
                // Load image dynamacally
                $.each(response.data, function(i, item) {
                    $("<div class='col-md-4 p-1'>").html(
                        "<img data-id="+ item['id']+" class='imgOnRow' src=" + item['location'] + ">"+
                        "<button onclick='deletePhoto("+ item['id']+")'  data-id="+ item['id']+" class='btn btn-sm btn-danger'><span class='fas fa-trash'>&nbsp;&nbsp;&nbsp;</span>Delete by function 1</button>"
                    ).appendTo('.photoRow'); // Append
                });
            }


        }).catch(function (error) {

        });
    }






    // Load more image
    $('#LoadMoreBtn').on('click',function () {
        let FirstImgID= $(this).closest('div').find('img').data('id');
        LoadMore(FirstImgID);
    });
    function LoadMore(FirstImgID){
        var StartImg=ImgID;
        //var PhotoID=ImgID+FirstImgID;
        var URL="/LoadMore/"+StartImg;
            
            // set loader
            $('#LoadMoreBtn').html("Load More..<div class='spinner-border spinner-border-sm'role='status'></div>")
            // Send ajax request
            axios.get(URL).then(function (response) {

            console.log(response.data);
            var length = response.data.length;
            console.log(length);
            


            if(length==0){
                toastr.error('No more image');
                $('#LoadMoreBtn').html("Load More");
            }else if(length==3){
            ImgID = response.data[2]['id'];
            print();
            }else if(length==2){
            ImgID = response.data[1]['id'];
            print();
            }else{
            ImgID = response.data[0]['id'];
            print();
            }

            function print(){
                $('#LoadMoreBtn').html("Load More");
                // show response data one by one
                $.each(response.data, function(i, item) {
                    $("<div class='col-md-4 p-1'>").html(
                        "<img data-id="+ item['id']+" class='imgOnRow' src=" + item['location'] + ">"+
                        "<button data-id="+ item['id']+" class='btn btn-sm deletePhoto btn-danger'><span class='fas fa-trash'>&nbsp;&nbsp;&nbsp;</span>Delete by function 2</button>"
                    ).appendTo('.photoRow');
                });

                // Delete Photo By Proces Two
                $('.deletePhoto').on('click',function (event) {
                    var id=$(this).data('id');
                    deletePhoto(id);
                    event.preventDefault();
                });
            }


        }).catch(function (error) {

        })

    }

    
    

    // Delete Photo By Proces One
    function deletePhoto(id){
        var URL="/deletePhoto";
        var MyFormData=new FormData();
        MyFormData.append('id',id);
        // Send ajax request with formData
        axios.post(URL,MyFormData).then(function (response) {
            if(response.status==200 && response.data==1){
                toastr.success('Photo Delete Success');
                window.location.href="/gallery";
            }
            else{
                toastr.error('Delete Fail Try Again');
            }
        }).catch(function () {
            toastr.error('Delete Fail Try Again');
        })
    }








    




</script>
@endsection