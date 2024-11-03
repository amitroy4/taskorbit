@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Hosting</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Add Hosting</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="row">
                <div class="card">
                    <div class="row">
                        <div class="card-header header-bg-1">
                            <div class="d-flex">
                                <h4 class="card-title">Add Hosting</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="" action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("POST")
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="client">Client</label>
                                        <div class="input-group">
                                            <select id="client" class="form-control">
                                                <option value="">Select Client</option>
                                            </select>
                                            <a href="{{ route('client.create') }}" class="btn btn-primary">
                                                <i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="domain">Domain</label>
                                        <div class="input-group">
                                            <select id="domain" class="form-control">
                                                <option value="">Select Domain</option>
                                            </select>
                                            <a href="{{ route('domain.create') }}" class="btn btn-primary">
                                                <i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="currencyType">Currency Type</label>
                                        <select id="currencyType" class="form-control" name="currency_type">
                                            <option value="">Select Currency Type</option>
                                            <option value="usd">USD</option>
                                            <option value="bdt">BDT</option>
                                            <option value="inr">INR</option>
                                            <option value="eur">EUR</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="rate">Rate</label>
                                        <input id="rate" type="number" class="form-control" placeholder="Enter Rate" name="rate">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="amount">Amount</label>
                                        <input id="amount" type="number" class="form-control" placeholder="Enter Amount" name="amount">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="date">Purchase Date</label>
                                        <input id="purchaseDate" type="date" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                            <label for="date">Renewal Date</label>
                                            <input id="renewalDate" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end mt-4">
                                    <button type="Submit" class="ms-2 btn btn-secondary">Submit</button>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
