@extends('layouts.admin')

@section('title', 'Dashboard | Admin')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			 <div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary card-header-icon">
					 <div class="card-icon">
	                    <i class="material-icons">people</i>
	                  </div>
	                  <h4 class="card-title">All Users</h4>
					</div>



					{{-- card body --}}

					<div class="card-body">
						<div class="toolbar">
							
						</div>

						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
								 <thead>
			                        <tr>
			                          <th>Name</th>
			                          <th>Position</th>
			                          <th>Office</th>
			                          <th>Age</th>
			                          <th>Date</th>
			                          <th class="disabled-sorting text-right">Actions</th>
			                        </tr>
			                      </thead>
			                      <tfoot>
			                        <tr>
			                          <th>Name</th>
			                          <th>Position</th>
			                          <th>Office</th>
			                          <th>Age</th>
			                          <th>Start date</th>
			                          <th class="text-right">Actions</th>
			                        </tr>
			                      </tfoot>
			                       <tbody>
				                        <tr>
				                          <td>Tiger Nixon</td>
				                          <td>System Architect</td>
				                          <td>Edinburgh</td>
				                          <td>61</td>
				                          <td>2011/04/25</td>
				                          <td class="text-right">
				                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
				                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
				                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
				                          </td>
				                        </tr>
				                        <tr>
				                          <td>Tiger Nixon</td>
				                          <td>System Architect</td>
				                          <td>Edinburgh</td>
				                          <td>61</td>
				                          <td>2011/04/25</td>
				                          <td class="text-right">
				                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
				                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
				                            <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
				                          </td>
				                        </tr>
				                    </tbody>
							</table>
						</div>
					</div>
				</div>
				{{-- end of card --}}
			 </div>
		</div>
	</div>
    
</div>
@endsection
