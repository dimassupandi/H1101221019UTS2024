@extends('layout.main')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pegawai</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Pegawai</h6>
        </nav>
      </div>
</nav>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pegawai Pakde</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gaji</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jabatan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pendidikan</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Luhut Pandjaitan</h6>
                            <p class="text-xs text-secondary mb-0">luhut@menteri.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Rp 20.000.000</p>
                        <p class="text-xs text-secondary mb-0">MARITIM</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">MENTERI</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">S1 MEDAN</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                      <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Luhut Pandjaitan</h6>
                            <p class="text-xs text-secondary mb-0">luhut@menteri.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Rp 20.000.000</p>
                        <p class="text-xs text-secondary mb-0">MARITIM</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">MENTERI</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">S1 MEDAN</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Luhut Pandjaitan</h6>
                            <p class="text-xs text-secondary mb-0">luhut@menteri.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Rp 20.000.000</p>
                        <p class="text-xs text-secondary mb-0">MARITIM</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">MENTERI</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">S1 MEDAN</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Luhut Pandjaitan</h6>
                            <p class="text-xs text-secondary mb-0">luhut@menteri.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Rp 20.000.000</p>
                        <p class="text-xs text-secondary mb-0">MARITIM</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">MENTERI</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">S1 MEDAN</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Luhut Pandjaitan</h6>
                            <p class="text-xs text-secondary mb-0">luhut@menteri.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Rp 20.000.000</p>
                        <p class="text-xs text-secondary mb-0">MARITIM</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">MENTERI</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">S1 MEDAN</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
@endsection