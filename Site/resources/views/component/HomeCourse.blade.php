<div class="container section-marginTop text-center">
    <h1 class="section-title">Courses</h1>
    <h1 class="section-subtitle">Instructors from around the world teach millions of students on MSB Simplified. We provide the tools and skills to teach what you love. </h1>
    <div class="row">
        @foreach ($courseData as $data)
        <div class="col-md-4 thumbnail-container">
                <img src="{{$data['course_img']}}" alt="Avatar" class="thumbnail-image ">
                <div class="thumbnail-middle">
                    <h1 class="thumbnail-title"> {{$data['course_name']}}</h1>
                    <h1 class="thumbnail-subtitle">{{$data['course_des']}}</h1>
                    <button class="normal-btn btn">Start Now</button>
                </div>
        </div>
            
        @endforeach
        
    </div>
</div>