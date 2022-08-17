@extends('layouts.app')

@section('template_title')
    {{ $plumbing->name ?? 'Show Plumbing' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Plumbing</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('plumbings.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Product:</strong>
                            {{ $plumbing->product }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $plumbing->description }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $plumbing->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $plumbing->price }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategory:</strong>
                            {{ $plumbing->idCategory }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
