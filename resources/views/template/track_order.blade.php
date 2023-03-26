<x-main-layout>
	{{-- Selective header  --}}

    <x-layouts.header :wishlists=$wishlists  />



		<!-- main body - start
		================================================== -->
		<main>

			<!-- main_contact_section - start
			================================================== -->
			<section class="main_contact_section  sec_ptb_100 clearfix">
                <div class="container shadow rounded bg-white mt-5 mb-5">
                    <div class="row">
                        {{-- <div class="col-md-3 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
                        </div> --}}
                        <div class="col-md-12 border-right">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Order Details</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" value="{{$user->name}}" ></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control"value="{{$user->phone}}"></div>
                                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" value="{{$user->email}}"></div>
                                </div>
                                
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
                </div>
			</section>
			<!-- main_contact_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->





</x-main-layout>


