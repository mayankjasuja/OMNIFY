@include('front_pages.header2')
@include('Front_pages.css')


<div style="margin-top: 10%;margin-left: auto;margin-right: auto" class="col-xl-8">
    <!-- Account details card-->
    <div class="card mb-4">
        <div class="card-header">Event Details</div>
        <div class="card-body">
            <div class="panel-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="post" action="{{ url('event_store') }}" enctype="multipart/form-data" role="form"
                    class="form-horizontal form-groups-bordered">
                    @csrf
                    <!-- Form Group (username)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="inputUsername">Name</label>
                        <input class="form-control" name="name" id="inputUsername" type="text" placeholder=""
                            value="">
                    </div>
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (first name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputFirstName">Description</label>
                            <textarea class="form-control" name="description" id="inputFirstName" rows="4" cols="50"></textarea>
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Start Time</label>
                            <input class="form-control" name="start_time" id="inputLastName" type="datetime-local"
                                placeholder="Enter your last name" value="Luna">
                        </div>
                    </div>
                    <!-- Form Row        -->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (organization name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">End Time</label>
                            <input class="form-control" name="end_time" id="inputLastName" type="time"
                                placeholder="Enter your last name" value="Luna">
                        </div>
                        <!-- Form Group (location)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLocation">Day Of The Week</label>
                            <select multiple class="form-control" id="day_of_week" name="day_of_week"
                                id="inputLocation">
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thrusday">Thrusday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                    </div>
                    <!-- Form Group (email address)-->

            </div>
            <!-- Save changes button-->

            </form>
        </div>
    </div>
</div>


<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->


<!-- all plugins here -->
<script src="{{ asset('front_assets/js/vendor.js') }}"></script>
<!-- main js  -->
<script src="{{ asset('front_assets/js/main.js') }}"></script>
@include('front_pages.footer')
</body>

<!-- Mirrored from solverwp.com/demo/html/edumint/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 04:46:34 GMT -->

</html>
