@extends('layouts.admin')
@section('content')
<div class="container">
				<div class="page-inner">
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
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header header-bg-1">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Domain List</h4>
										<a href="{{route('domain.create')}}" class="btn btn-secondary ms-auto">
                                            <i class="fa fa-plus"></i>
                                            Add
                                        </a>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Domain Name</th>
													<th>Client Name</th>
													<th>Phone</th>
													<th>Email</th>
													<th>Purchase Date</th>
													<th>Renewal Date</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Domain Name</th>
													<th>Client Name</th>
                                                    <th>Phone</th>
													<th>Email</th>
													<th>Purchase Date</th>
													<th>Renewal Date</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
                                                @foreach ($domains as $domain)
                                                    <tr>
                                                        <td>{{ $domain->domain_name }}</td>
                                                        <td>{{ $domain->client->client_name ?? $domain->client->organizational_name }}</td>
                                                        <td>{{ $domain->person_phone }}</td>
                                                        <td>{{ $domain->person_email }}</td>
                                                        <td>{{ $domain->purchase_date }}</td>
                                                        <td>{{ $domain->renewal_date }}</td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <form action="{{ route('domain.destroy', $domain->id) }}" method="POST" class="delete-form" style="display: inline-block;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-link btn-danger delete-domain" data-original-title="Remove" data-bs-toggle="tooltip" data-id="{{ $domain->id }}" title="Delete Domain">
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
    // Use event delegation to attach the click event to the delete button
    $(document).on('click', '.delete-domain', function () {
        var form = $(this).closest('form');
        deleteDomain(form);
    });
});

function deleteDomain(form) {
    swal({
        title: "Are you sure?",
        text: "Are you sure that you want to delete this domain?",
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
            swal("Deleted!", "The domain has been deleted!", "success");
        }
    });
}

</script>
@endpush
