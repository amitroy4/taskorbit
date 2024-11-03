@extends('layouts.admin')
@section('content')
<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h3 class="fw-bold mb-3">Clients</h3>
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
								<a href="#">Manage Clients</a>
							</li>
						</ul>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header header-bg-1">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Manage Clients</h4>
										<a href="{{route('client.create')}}" class="btn btn-primary btn-round ms-auto">
											<i class="fa fa-plus"></i>
											Add Clients
										</a>
									</div>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Name</th>
													<th>Designation</th>
													<th>Company</th>
													<th>Company Phone</th>
													<th>Company Email</th>
													<th>Company Website</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Name</th>
													<th>Designation</th>
													<th>Company</th>
													<th>Company Phone</th>
													<th>Company Email</th>
													<th>Company Website</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
                                                @foreach ($clients as $client)
                                                    <tr>
                                                        <td>{{ $client->client_name ?? $client->contact_name }}</td>
                                                        <td>{{$client->client_designation ?? $client->contact_designation}}</td>
                                                        <td>{{$client->company_name ?? $client->organizational_name}}</td>
                                                        <td>{{$client->company_phone ?? $client->organizational_phone_number}}</td>
                                                        <td>{{$client->company_email ?? $client->organizational_email}}</td>
                                                        <td>{{$client->company_website ?? $client->organizational_website}}</td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <form action="{{ route('client.destroy', $client->id) }}" method="POST" class="delete-form" style="display: inline-block;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-link btn-danger delete-client" data-original-title="Remove" data-id="{{ $client->id }}">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('.delete-client').on('click', function () {
            var form = $(this).closest('form');
            deleteClient(form);
        });
    });

    function deleteClient(form) {
        swal({
            title: "Are you sure?",
            text: "Are you sure that you want to delete this client?",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: null,
                    visible: true,
                    className: "btn-secondary",
                    closeModal: true,
                },
                confirm: {
                    text: "Delete",
                    value: true,
                    visible: true,
                    className: "btn-danger",
                    closeModal: true // Close modal on confirmation
                }
            }
        }).then((willDelete) => {
            if (willDelete) {
                form.submit(); // Submit the form if confirmed
                swal("Deleted!", "The client has been deleted!", "success");
            }
        });
    }
</script>
@endpush


