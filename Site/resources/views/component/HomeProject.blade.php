<div class="container section-marginTop text-center">
    <h1 class="section-title">Projects</h1>
    <h1 class="section-subtitle">Learners around the world are launching new careers, advancing in their fields, and enriching their lives.</h1>
    <div class="row">

        <div id="one"  class="owl-carousel mb-4 owl-theme">
            @foreach ($projectData as $data)
            <div class="item m-1 card">
                <div class="text-center">
                    <img class="w-100" src="{{$data['project_img']}}" alt="Card image cap">
                    <h5 class="service-card-title mt-4">{{$data['project_name']}}</h5>
                    <h6 class="service-card-subTitle p-0 m-0">{{$data['project_desc']}}</h6>
                    <button class="normal-btn-outline mt-2 mb-4 btn">Details</button>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="d-inline ml-2">
        <i id="customPrevBtn" class="btn normal-btn"><</i>
        <i id="customNextBtn" class="btn normal-btn">></i>
        <button class="normal-btn  btn">Show All</button>
    </div>
</div>