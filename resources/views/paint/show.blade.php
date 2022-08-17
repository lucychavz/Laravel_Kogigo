@extends('layouts.app')

@section('template_title')
    {{ $paint->name ?? 'Show Paint' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paint</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paints.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Product:</strong>
                            {{ $paint->product }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $paint->description }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $paint->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $paint->price }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategory:</strong>
                            {{ $paint->idCategory }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
