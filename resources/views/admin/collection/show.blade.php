
<x-layouts.admin>

    <!-- ============================================================== -->
    @include('sweetalert::alert')

    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Collection Details</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Collection Details</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="" class="btn btn-success">Add Widget</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="container-fluid">

                <div class="page-content-wrapper">




                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <h2 class="text-center mt-4">Collection Detail</h2>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="collection-detail">
                                                <div class="row">
                                                        <div class="mb-3">
                                                            <label class="form-label font-size-44"> Name : </label>
                                                            @dd($collection->id)
                                                            {{$collection->products}}
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label font-size-44"> Title : </label>
                                                            {{$collection->title}}
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label font-size-44">Discount Price : </label>
                                                            {{$collection->discount_percentage}}
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label font-size-44">Banner Image : </label>
                                                            <img src="{{ asset("storage/collections/$collection->banner_image")}}"
                                                            alt="this image" class="img-fluid mx-auto d-block">                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label font-size-44">Description : </label>
                                                            {{$collection->description}}
                                                        </div>



                                                </div>
                                            </div>
                                            <!-- end product img -->
                                        </div>

                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->



        </div>


    </div> <!-- container-fluid -->









    <!-- ============================================================== -->




</x-layouts.admin>
