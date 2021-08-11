@extends('layouts.app')
@section('title','Terms & Condtion')
@section('content')

<div id="mainDivReview"  class="container">
    <div class="row">
        <div class="col-md-12 p-3">
        <div class="card">
            <div class="card-header text-center bg-dark text-light h4">Terms & Condition</div>
            <div class="card-body"></div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="post">
                        @csrf
                        <textarea id="mytext">Hello, This is not working fine.It something work if it is online</textarea>
                      </form>
                </div>
            </div>
        </div>
    </div>

</div>
    
    

@endsection


@section('script')
<script src="https://cdn.tiny.cloud/1/1rj0mo50fkayfurkjas8lys13090arzhtpcrczn2f2dtwn67/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
{{-- <script src="{{ asset('node_modules/tinymce/tinymce.min.js') }}"></script> --}}
<script type="text/javascript">
    tinymce.init({
        selector:'#mytext',
        height: 300
    });
</script>

@endsection
