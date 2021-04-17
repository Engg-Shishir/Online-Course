<div class="container section-marginTop text-center">
    <h1 class="section-title">কোর্স সমূহ </h1>
    <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
    <div class="row">
        @foreach ($courseData as $data)
        <div class="col-md-4 thumbnail-container">
                <img src="images/android.jpg" alt="Avatar" class="thumbnail-image ">
                <div class="thumbnail-middle">
                    <h1 class="thumbnail-title"> {{$data['course_name']}}</h1>
                    <h1 class="thumbnail-subtitle">{{$data['course_des']}}</h1>
                    <button class="normal-btn btn">শুরু করুন</button>
                </div>
        </div>
            
        @endforeach
        
    </div>
</div>