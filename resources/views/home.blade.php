@extends('layouts.admin_app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="zmdi zmdi-home"></i> Home</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Employee List </h2>
                        <ul class="header-dropdown">
                        <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#largeModal" onclick="resetfn()">Add Employee</button>
                        </ul>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Talent ID</th>
                                    <th>Skillset</th>
                                    <th>Experience</th>
                                    <th>Turnaround time</th>
                                    <th>Availability</th>
                                    <th>Rate(USD)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Talent ID</th>
                                    <th>Skillset</th>
                                    <th>Experience</th>
                                    <th>Turnaround time</th>
                                    <th>Availability</th>
                                    <th>Rate</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$employee->employee_id}}</td>
                                    <td>{{$employee->skill_set}}</td>
                                    <td>{{$employee->experience}}</td>
                                    <td>{{$employee->turnaround_time}}</td>
                                    <td>{{$employee->availability}}</td>
                                    <td>{{$employee->rate}}</td>
                                    <td><button type="button" class="btn btn-raised btn-primary waves-effect" onclick="editfn({{$employee->id}})"><i class='fas fa-edit'></i></button>
                                    <form method="POST" action="{{ route('employee.destroy', $employee->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class='fas fa-trash'></i></button>
                        </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('modal')
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Add Employee</h4>
            </div>
            <div class="modal-body">
                <form id="employee_add" method="POST" action="{{route('employee.store')}}">
                    @csrf
                    <input type="hidden" name="userid" id="userid" value="">
                            <div class="form-group">
                            <label class="form-label">Employee Name</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Employee name" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Email</label>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Employee email">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Phone No</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Employee phone">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Talent ID</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="talentid" id="talentid" placeholder="Enter Talent Id" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Skill Set</label>
                                <div class="form-line">
                                    <textarea name="skillset" id="skillset" cols="30" rows="5" class="form-control no-resize" required placeholder="php,jquery,symfony"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Experience</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter employee experience in years" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Turnaround Time</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="time" id="time" placeholder="Enter Turnaround time" required>
                               </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Availability</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="availability" id="availability" placeholder="Enter availability" required>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label">Rate(USD)</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="rate" id="rate" placeholder="Enter employee rate" required>
                               </div>
                            </div>
                        </div>
            <div class="modal-footer">
                <button class="btn btn-link waves-effect" type="submit" id="submitbtn">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection