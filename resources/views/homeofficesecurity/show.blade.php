@extends('layouts.app')

@section('template_title')
    {{ $homeofficesecurity->name ?? 'Show Homeofficesecurity' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Homeofficesecurity</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('homeofficesecurities.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Product:</strong>
                            {{ $homeofficesecurity->product }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $homeofficesecurity->description }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $homeofficesecurity->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $homeofficesecurity->price }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategory:</strong>
                            {{ $homeofficesecurity->idCategory }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
