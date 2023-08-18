@extends('admin.layouts.app')

@section('content')
    <!-- Basic Layout -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Add Product</h4>
        <div class="col-xxl  ">
            <div class="card mb-4">

                <div class="card-body ">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="categoryName" id="categoryName" class="form-control"
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
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="subcategory" name="subcategory"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" name="quantity" id="quantity" class="form-control"
                                    id="basic-default-name" placeholder="10" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                            <div class="col-sm-10">
                                <input type="number" name="price" id="price" class="form-control"
                                    id="basic-default-name" placeholder="200" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Short Description</label>
                            <div class="col-sm-10">
                                <textarea id="shortDesc" name="shortDesc" class="form-control" placeholder="Short Description"
                                    aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Long Description</label>
                            <div class="col-sm-10">
                                <textarea id="longDesc" name="longDesc" class="form-control" placeholder="Long description"
                                    aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="image" name="image" />
                            </div>
                        </div>



                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
