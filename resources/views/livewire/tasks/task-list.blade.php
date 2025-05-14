
<section>
     <div class="row mt-5">
        <div class="col-12">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-12 align-items-center text-center">
                            <h4 class="mb-0">Task Management System</h4>
                        </div>
                    </div>

                    @if($errors->any())
                        <div class="row mt-3 justify-content-center">
                            <div class="col-6">
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger text-white" role="alert">
                                        <strong>Error!</strong> {{ $error }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif


                </div>
                <div class="card-body p-3 pb-0">

                </div>
            </div>
        </div>
    </div>

        <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Tasks</h6>
                        </div>
                        <div class="col-6 align-items-end text-end">
                            <button type="button" class="btn btn-sm bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#add-new-task"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add New Task</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Projects</h6>
                        </div>
                        <div class="col-6 align-items-end text-end">
                            <button type="button" class="btn btn-sm bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#add-new-project"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add New Project</button>
                        </div>
                    </div>

                </div>
                <div class="card-body p-3 pb-0">



                        <div class="row mt-5">
                            <div class="col-12 text-center">

                                <i style="font-size: 40px" class="fa fa-warning text-muted"></i>

                                <h3 class="text-muted mt-2">No project attached at the moment! Try adding a new one.</h3>

                            </div>
                        </div>




                </div>
            </div>
        </div>

    </div>
</section>
