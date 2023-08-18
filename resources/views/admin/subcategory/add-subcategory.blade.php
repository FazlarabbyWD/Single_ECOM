@extends('admin.layouts.app')
@section('content')
    <!-- Basic Layout -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category/</span> Add Sub Category</h4>
        <div class="col-xxl  ">
            <div class="card mb-4">

                <div class="card-body ">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">SUB Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="subCategoryName" id="subCategoryName" class="form-control"
                                    id="basic-default-name" placeholder="Electronics" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="category" name="category"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Sub Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
