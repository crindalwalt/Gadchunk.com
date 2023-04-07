<x-main-layout>
    {{-- Selective header  --}}

    <x-layouts.header :wishlists=$wishlists />



    <!-- main body - start
  ================================================== -->
    <main>

        <!-- main_contact_section - start
   ================================================== -->
        <section class="main_contact_section  sec_ptb_100 clearfix">
            <div class="container shadow rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                class="rounded-circle mt-5" width="150px"
                                src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                                class="font-weight-bold">{{ $user->name }}</span><span
                                class="text-black-50">{{ $user->email }}</span><span> </span></div>
                    </div>
                    <div class="col-md-9 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Setting</h4>
                            </div>
                            <form>
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label text-dark">UserName</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="inputname"
                                            value="{{ $user->name }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label text-dark">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="staticEmail"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputphone" class="col-sm-2 col-form-label text-dark">Contact #</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputphone"
                                            value="{{ $user->phone }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword"
                                        class="col-sm-2 col-form-label text-dark">Old Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputsecondPassword"
                                        class="col-sm-2 col-form-label text-dark">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputsecondPassword"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                        type="submit">Save Profile</button></div>
                            </form>


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
