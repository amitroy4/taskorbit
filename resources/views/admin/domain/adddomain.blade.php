@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Domain</h3>
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
                        <a href="#">Manage Domain</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="row">
                <div class="card">
                    <div class="row">
                        <div class="card-header header-bg-1">
                            <div class="d-flex">
                                <h4 class="card-title">Add Domain</h4>
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
                                        <label for="doamin">Domain</label>
                                        <select id="doamin" class="form-control">
                                            <option value="">Select Domain</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="date">Purchase Date</label>
                                        <input id="purchaseDate" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="box border p-3 rounded mt-4">
                                    <div class="row">
                                        <div class="d-flex">
                                            <h4 class="title">Registrant Contact</h4>
                                        </div>
                                        <hr>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="firstname">First Name</label>
                                            <input id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="lastname">Last Name</label>
                                            <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="city">City</label>
                                            <input id="city" name="city" type="text" class="form-control" placeholder="Enter city">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="state">State</label>
                                            <input id="state" name="state" type="text" class="form-control" placeholder="Enter State">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="zipcode">Zip Code</label>
                                            <input id="zipCode" name="zipCode" type="text" class="form-control" placeholder="Enter Zip code">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="country">Country</label>
                                            <input id="country" name="country" type="text" class="form-control" placeholder="Enter Country">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" id="" name="address" rows="2" placeholder="Enter address here"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="box border p-3 rounded mt-4">
                                    <div class="row">
                                        <div class="d-flex">
                                            <h4 class="title">Administration Contact</h4>
                                        </div>
                                        <hr>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="firstname">First Name</label>
                                            <input id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="lastname">Last Name</label>
                                            <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="city">City</label>
                                            <input id="city" name="city" type="text" class="form-control" placeholder="Enter city">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="state">State</label>
                                            <input id="state" name="state" type="text" class="form-control" placeholder="Enter State">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="zipcode">Zip Code</label>
                                            <input id="zipCode" name="zipCode" type="text" class="form-control" placeholder="Enter Zip code">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="country">Country</label>
                                            <input id="country" name="country" type="text" class="form-control" placeholder="Enter Country">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" id="" name="address" rows="2" placeholder="Enter address here"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="box border p-3 rounded mt-4">
                                    <div class="row">
                                        <div class="d-flex">
                                            <h4 class="title">Technical Contact</h4>
                                        </div>
                                        <hr>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="firstname">First Name</label>
                                            <input id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="lastname">Last Name</label>
                                            <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="city">City</label>
                                            <input id="city" name="city" type="text" class="form-control" placeholder="Enter city">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="state">State</label>
                                            <input id="state" name="state" type="text" class="form-control" placeholder="Enter State">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="zipcode">Zip Code</label>
                                            <input id="zipCode" name="zipCode" type="text" class="form-control" placeholder="Enter Zip code">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="country">Country</label>
                                            <input id="country" name="country" type="text" class="form-control" placeholder="Enter Country">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" id="" name="address" rows="2" placeholder="Enter address here"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="box border p-3 rounded mt-4">
                                    <div class="row">
                                        <div class="d-flex">
                                            <h4 class="title">Billing Contact</h4>
                                        </div>
                                        <hr>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="firstname">First Name</label>
                                            <input id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="lastname">Last Name</label>
                                            <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="city">City</label>
                                            <input id="city" name="city" type="text" class="form-control" placeholder="Enter city">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="state">State</label>
                                            <input id="state" name="state" type="text" class="form-control" placeholder="Enter State">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="zipcode">Zip Code</label>
                                            <input id="zipCode" name="zipCode" type="text" class="form-control" placeholder="Enter Zip code">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="country">Country</label>
                                            <input id="country" name="country" type="text" class="form-control" placeholder="Enter Country">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" id="" name="address" rows="2" placeholder="Enter address here"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="box border p-3 rounded mt-4">
                                    <div class="row">
                                        <div class="d-flex">
                                            <h4 class="title">Supporting Documents</h4>
                                        </div>
                                        <hr>
                                        <div class="form-group col-md-4">
                                            <label class="form-label" for="personName">Name</label>
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label" for="lastname">Email</label>
                                            <input id="email" name="email" type="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <input id="phone" name="phone" type="text" class="form-control" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="">Mailing Address</label>
                                            <input id="" name="" type="text" class="form-control" placeholder="Enter Mailing Address">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="form-label" for="">Nid Number</label>
                                            <input id="" name="" type="text" class="form-control" placeholder="Enter Nid Number">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="image" class="form-label">Person Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            <img id="img_preview" alt="Image Preview" width="100" class="mb-2 d-none mt-2">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="image" class="form-label">Nid Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            <img id="img_preview" alt="Image Preview" width="100" class="mb-2 d-none mt-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="currencyType">Receiving Currency Type</label>
                                        <select id="currencyType" class="form-control" name="currency_type">
                                            <option value="">Select Currency Type</option>
                                            <option value="usd">USD</option>
                                            <option value="bdt">BDT</option>
                                            <option value="inr">INR</option>
                                            <option value="eur">EUR</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="rate">Rate</label>
                                        <input id="rate" type="number" class="form-control" placeholder="Enter Rate" name="rate">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="amount">Amount</label>
                                        <input id="amount" type="number" class="form-control" placeholder="Enter Amount" name="amount">
                                    </div>

                                    <div class="form-group col-md-3">
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
