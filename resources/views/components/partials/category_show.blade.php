<div class="modal fade bs-example-modal-center  modalForAttrDel" id="modalForCatShow-{{ $category->id }}" tabindex="-1"
    role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">
                    <b>Category with Attributes </b>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body ">
                <div class="container">
                    @if ($category->attributes->isNotEmpty())
                    <table class="table table-hover rounded-lg ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Value</th>

                            </tr>
                        </thead>
                        <tbody>

                                @foreach ($category->attributes as $variation)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td col-span="2">{{ $variation->attribute_name }}</td>

                                    </tr>
                                @endforeach



                        </tbody>
                    </table>
                    @else
                    <div
                        class="text-center text-warning text-lg font-size-24 font-semibold d-flex justify-content-center align-items-center
                                ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <span class="mx-3">
                            No Variation Attribute to show <br>

                        </span>
                    </div>
                @endif
                </div>



            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
