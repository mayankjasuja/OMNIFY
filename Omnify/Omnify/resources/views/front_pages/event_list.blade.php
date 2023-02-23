@include('front_pages.header2')


<div style="margin-top: 10%;margin-left: auto;margin-right: auto" class="col-xl-8">
    <!-- Account details card-->
    <div class="card mb-4">
        <div class="card-header">Event List</div>
        <div class="card-body">
            <div class="panel-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-bordered table-striped datatable" id="table-2">
                    <thead>
                        <tr>

                            <th>Start date</th>
                            <th>start time & end time</th>

                        </tr>
                    </thead>

                    <tbody>
                        @if (!empty($Schedule))
                            @foreach ($Schedule as $event_list)
                                <tr>




                                    <td>{{ $event_list->start_date }}</td>
                                    <td>{{ $event_list->end_time }}</td>






                                </tr>
                            @endforeach

                        @endif


                    </tbody>

                </table>
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
