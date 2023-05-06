    @extends('layouts.admin_layout')
    @section('content')
        
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Main</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <form action="{{ route('admin.main.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                        <div class="row">
                            <div class="form-group col-md-3 mt-3">
                                <h3>Background Image</h3>
                                <img style="height: 30vh" src="{{ url($main->bc_img) }}" alt="" class="img-thumbnail">
                                <input class="mt-3" type="file" id="bc-img" name="bc-img">
                            </div>
                            <div class="form-group col-md-4 mt-3">
                                <div>
                                <label for="title"><h4>Title</h4></label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ $main->title }}" >
                            </div>
                            <div class="form-group col-md-4 mt-3">
                                <label for="sub-title"><h4>Sub-Title</h4></label>
                                <input type="text" class="form-control" name="sub-title" id="sub-title" value="{{ $main->sub_title }}" >
                            </div>
                            <div>
                                <h4 class="mt-3">Upload Resume</h4>
                                <input type="file" id="resume" name="resume">
                            </div>

                        </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary mt-5">

                        </form>

                        <div style="height: 100vh"></div>
                    </div>
                </main>
    @endsection
                
