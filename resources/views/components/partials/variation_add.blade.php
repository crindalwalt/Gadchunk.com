{{-- <div class="modal fade bs-example-modal-center " id="modalForAttrDel-{{ $var->id }}" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0"> <b>Attribute Values </b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> --}}
<div class="modal fade bs-example-modal-center modalForAttrDel"
id="modalForAttrDel-{{ $var->id }}"
tabindex="-1" role="dialog"
aria-labelledby="mySmallModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0">
                <b>Attribute Values </b></h5>
            <button type="button" class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close">

            </button>
        </div>
        <div class="modal-body">
            {{-- // route('prod_variation_value.storeValues')
            // "/admin/attribute/$var->id" --}}
            <form
                action="{{ route('prod_variation_value.storeValues') }}"
                id="variationOptionForm-{{ $var->id }}"
                method="POST">
                @csrf

                <h4 class="header-title">Assigning
                    Attributes
                    Values</h4>
                <p class="card-title-desc">You can
                    add Multiple
                    Values to the Attribute
                    <b>{{ $var->attribute_name }}</b>
                </p>
                <div class="row">

                    <div class="col-12 mb-3">
                        <label for="attr_value_name"
                            class="col-sm-12 col-form-label">Add
                            Value</label>
                        <div class="col-sm-12"
                            id="attr_values_box">
                            <input
                                class="form-control"
                                type="text"
                                placeholder="please enter comma separated values "
                                id="attr_value-{{ $var->id }}"
                                name="attr_value_name">
                            @error('attr_value_name')
                                <div
                                    class="text-danger">
                                </div>
                            @enderror
                        </div>
                        <input type="hidden"
                            name="options"
                            id="options-{{ $var->id }}"
                            >
                        <input type="hidden"
                            name="attribute"
                            id="attribute-{{ $var->id }}"
                            value="{{ $var->id }}">
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="#">
                        <button
                            class="btn btn-md  btn-success add_attr_value"
                            type="button"
                            title="Add another value"
                            onclick="commaSeparation({{$var->id  }})">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="25"
                                height="25"
                                fill="currentColor"
                                class="bi bi-plus-lg"
                                viewBox="0 0 16 16">
                                <path
                                    fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                        </button>


                        <div id="outputBox-{{ $var->id }}"
                            class="p-3">

                        </div>

                        {{-- <hr> --}}
                        <input
                            class="btn btn-md px-4 py-2 btn-primary"
                            type="submit"
                            value="Add Variation"
                            id="example-email-input">
                    </div>
                </div>


            </form>


        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
