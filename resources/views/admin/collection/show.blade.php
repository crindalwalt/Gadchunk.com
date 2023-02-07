
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
                                      <!-- Button trigger modal -->
                                      <button type="button" class="btn btn-sm btn-outline-warning"
                                      {{-- id="{{$collection->id}}" --}}
                                      data-bs-toggle="modal"
                                      data-bs-target="#exampleModal">
                                      Show
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal"
                                      tabindex="-1" aria-labelledby="exampleModalLabel"
                                      aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-scrollable">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title"
                                                      id="exampleModalLabel">Collection
                                                  </h5>
                                                  <button type="button"
                                                      class="btn-close"
                                                      data-bs-dismiss="modal"
                                                      aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                  {{$collection->id}}
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button"
                                                      class="btn btn-secondary"
                                                      data-bs-dismiss="modal">Close</button>
                                                  <button type="button"
                                                      class="btn btn-primary">Save
                                                      changes</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
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
