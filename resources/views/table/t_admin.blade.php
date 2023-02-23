@extends('main')
@section('nav')
    <ul class="nav">
          <li>
            <a href="{{url('Dashboard')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
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
          <li>
            <a href="{{url('user')}}">
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
              </div>
              <div class="card-body">
                <div class="table table-striped table-responsive">
                  <table class="table-bordered">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Kegiatan
                      </th>
                      <th>
                        Nama Kegiatan
                      </th>
                      <th>
                        Tanggal Pelaksaan
                      </th>
                      <th>
                        Tempat
                      </th>
                      <th>
                        PIC
                      </th>
                      <th>
                        Sudah/Belum
                      </th>
                      <th>
                        Realisasi Pelaksaan
                      </th>
                      <th>
                        Bukti Kegiatan
                      </th>
                      <th>
                        Edit
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Rapat
                        </td>
                        <td>
                          Rapat Pembahasan SDM
                        </td>
                        <td>
                          15 Februari 2023
                        </td>
                        <td>
                          Aula KPPN
                        </td>
                        <td>
                          Guntoro
                        </td>
                        <td>
                          Belum
                        </td>
                        <td>
                          Belum
                        </td>
                        <td>
                          <button class="btn btn-primary btn-block" onclick="">Lihat Bukti</button>
                        </td>
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
                      <tr>
                        <td>
                          2
                        </td>
                        <td>
                          Rapat
                        </td>
                        <td>
                          Rapat Pembahasan SDM
                        </td>
                        <td>
                          15 Februari 2023
                        </td>
                        <td>
                          Aula KPPN
                        </td>
                        <td>
                          Guntoro
                        </td>
                        <td>
                          Belum
                        </td>
                        <td>
                          Belum
                        </td>
                        <td>
                          <button class="btn btn-danger btn-block" onclick="">Lihat Bukti</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          3
                        </td>
                        <td>
                          Rapat
                        </td>
                        <td>
                          Rapat Pembahasan SDM
                        </td>
                        <td>
                          15 Februari 2023
                        </td>
                        <td>
                          Aula KPPN
                        </td>
                        <td>
                          Guntoro
                        </td>
                        <td>
                          Belum
                        </td>
                        <td>
                          Belum
                        </td>
                        <td>
                          <button class="btn btn-danger btn-block" onclick="">Lihat Bukti</button>
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