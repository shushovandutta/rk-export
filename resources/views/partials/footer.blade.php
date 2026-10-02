<!-- Share Modal -->
<div class="modal fade share_modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <h3>Share</h3>

                <form>
                    <div class="row g-3 row-cols-1">
                        <div class="col">
                            <input type="email" placeholder="To:mail, name, group" class="form-control">
                        </div>

                        <div class="col">
                            <select class="form-control">
                                <option>Anyone with the link</option>
                            </select>
                        </div>

                        <div class="col share_btn_hldr">
                            <button type="button" class="me-2">Copy Link</button>
                            <button type="submit">Send Invite</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Drawing Files Modal -->
<div class="modal modal-lg fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
    aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title fs-6" id="exampleModalLabel2">
                    Drawing Files
                </h4>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="zmdi zmdi-close"></i>
                </button>
            </div>

            <div class="modal-body">
                <form class="common_form">

                    <div class="row">

                        <div class="col-lg-12 radio_btn_part">
                            <label class="drow_title">Inhouse Drawing</label>

                            <label class="switch">
                                <input class="switching" type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="col-lg-12 inhouse_form">
                            <div class="row g-3">

                                <div class="col-lg-6">
                                    <label>Location</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Project</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Paper Size</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Machine Code</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Sub Group</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Serial No</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit">Upload</button>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-12 outsourced_form">
                            <div class="row g-3">

                                <div class="col-lg-6">
                                    <label>Location<mark>*</mark></label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Project<mark>*</mark></label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Page Size<mark>*</mark></label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Machine Code</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Sub Group</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label>Serial No</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit">Upload</button>
                                </div>

                            </div>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- Create Client Modal -->
<div class="modal inner_folder modal-xl fade" id="createindent" tabindex="-1" aria-labelledby="createindentmodel"
    aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            @if(request()->is('dashboard*') || request()->is('client*') || request()->is('client/*'))
            <div class="modal-header">
                <h4 class="modal-title fs-6" id="createindentmodel">
                    Create Client
                </h4>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="zmdi zmdi-close"></i>
                </button>
            </div>

            <div class="modal-body">
                @includeIf('partials.create-client-modal')
            </div>
            @elseif (request()->is('entry-list*') || request()->is('entry-list/*'))
            <div class="modal-header">
                <h4 class="modal-title fs-6" id="createindentmodel">
                    Add Entry
                </h4>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="zmdi zmdi-close"></i>
                </button>
            </div>

            <div class="modal-body">
                @includeIf('partials.add-entry-modal')
            </div>
            @elseif (request()->is('project-details*') || request()->is('project-details/*'))
            <div class="modal-header">
                <h4 class="modal-title fs-6" id="createindentmodel">
                    Add Project
                </h4>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="zmdi zmdi-close"></i>
                </button>
            </div>

            <div class="modal-body">
                @includeIf('partials.add-project-modal')
            </div>
            @endif

        </div>
    </div>
</div>

<span class="screen-darken"></span>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/custom.js') }}"></script>