<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark"></a>
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <i class="fa fa-users fs-1 text-primary"></i>
                    <h4 class="my-2">Visitors {{ $totalVisitors }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark"></a>
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <i class="fa fa-eye fs-1 text-primary"></i>
                    <h4 class="my-2">Visits {{ $totalVisits }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark"></a>
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <i class="fa fa-comments fs-1 text-primary"></i>
                    <h4 class="my-2">Feedback {{ $totalFeedback }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark"></a>
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <i class="fa fa-search fs-1 text-primary"></i>
                    <h4 class="my-2">Lost Item {{ $totalLostItem }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
