@extends('main')
@section('nav')
    <ul class="nav">
          <li>
            <a href="{{url('Dashboard')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{url('table-kegiatan')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="{{url('notification')}}">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="active ">
            <a href="{{url('user.data')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
@endsection
        
      
@section('content')
<div class="content"> 
  <div class="container-fluid">
    <div class="col-md-12">
      <br>
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Badan Bagian Umum</h4>
          <p class="card-category">Tabel Monitoring Kegiatan Bagian/Seksi Umum</p>
          <hr>
          <div class="pull-right">
            <a href="" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Create User
            </a>
        </div>
        </div>
        <div class="card-body">
          <div class="table table-striped table-responsive">
            <table class="table-bordered" cellspacing="0" width="100%">
              <thead class=" text-primary">
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>NIP</th>
                <th>Action</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Tri Widiyono</td>
                  <td>Kepala Kantor</td>
                  <td>197206151998031002</td>
                  <td>
                      <a class="btn btn-primary btn-sm" href="">
                          <i class="fa fa-pencil"></i>
                      </a>
                      <form class="d-line" action="">
                          <button class="btn btn-danger btn-sm">
                              <i class="fa fa-trash"></i>
                          </button>
                      </form>
                      
                  </td>
                  
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection    