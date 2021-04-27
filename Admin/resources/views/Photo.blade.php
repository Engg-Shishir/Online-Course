@extends('layouts.app')
@section('title','Photo Gallery')
@section('content')

    <div class="container-fluid m-0 ">
        <div class="row">
            <div class="col-md-12">
                <button data-toggle="modal" data-target="#PhotoModal" id="addNewPhotoBtnId" class="btn my-3 btn-sm btn-danger">Add New </button>
            </div>
        </div>
        <div class="row photoRow">
         {{-- Here dynamacally show image --}}
        </div>
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
</script>
@endsection