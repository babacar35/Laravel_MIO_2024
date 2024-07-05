@extends('layouts1.app')

@section('template_title')
    {{ $licence->name ?? __('Show') . " " . __('Licence') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Licence</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('licences.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $licence->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Section:</strong>
                                    {{ $licence->Section }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ufr:</strong>
                                    {{ $licence->ufr }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
