@extends('layout.masterlayout')
@section('title', 'Available Book')
@section('content')
 <!--start content-->
          <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Tables</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Available Books</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  {{-- <button type="button" class="btn btn-primary">Settings</button> --}}
                  {{-- <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span> --}}
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->
<div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                     <h5 class="mb-0">Available Books List</h5>
                      <form class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                        <input class="form-control ps-5" type="text" placeholder="search">
                      </form>
                  </div>
                  <div class="table-responsive mt-3">
                    <table class="table align-middle mb-0">
                      <thead class="table-light">
                       <tr>
                         <th>ID</th>
                         <th>Title</th>
                         <th>Author</th>
                         <th>Genre</th>
                         <th>ISBN</th>
                         <th>Publisher</th>
                         <th>Published Year</th>
                         <th>Language</th>
                         <th>Total Copies</th>
                         <th>Book Status</th>
                       </tr>
                       </thead>
                       <tbody><tr>
                        <td>Sport Shoes</td>
                        <td><img src="assets/images/products/01.png" class="product-img-2" alt="product img"></td>
                        <td>#9405822</td>
                        <td><span class="badge bg-light-success text-success w-100">Paid</span></td>
                        <td>$1250.00</td>
                        <td>03 Feb 2020</td>
                        <td><div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                          </div>
                        </td>
                       </tr>

                       <tr>
                        <td>Man Headcap</td>
                        <td><img src="assets/images/products/02.png" class="product-img-2" alt="product img"></td>
                        <td>#8304620</td>
                        <td><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                        <td>$1500.00</td>
                        <td>05 Feb 2020</td>
                        <td><div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"></div>
                          </div></td>
                       </tr>

                       <tr>
                        <td>Sunglass</td>
                        <td><img src="assets/images/products/03.png" class="product-img-2" alt="product img"></td>
                        <td>#4736890</td>
                        <td><span class="badge bg-light-danger text-danger w-100">Failed</span></td>
                        <td>$1400.00</td>
                        <td>06 Feb 2020</td>
                        <td><div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"></div>
                          </div></td>
                       </tr>

                       <tr>
                        <td>Shirt Formal</td>
                        <td><img src="assets/images/products/04.png" class="product-img-2" alt="product img"></td>
                        <td>#8543765</td>
                        <td><span class="badge bg-light-success text-success w-100">Paid</span></td>
                        <td>$1200.00</td>
                        <td>14 Feb 2020</td>
                        <td><div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                          </div></td>
                       </tr>
                       <tr>
                        <td>Black Coat Pant</td>
                        <td><img src="assets/images/products/06.png" class="product-img-2" alt="product img"></td>
                        <td>#9629240</td>
                        <td><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                        <td>$1500.00</td>
                        <td>18 Feb 2020</td>
                        <td><div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"></div>
                          </div></td>
                       </tr>
                       <tr>
                        <td>Heals</td>
                        <td><img src="assets/images/products/05.png" class="product-img-2" alt="product img"></td>
                        <td>#8506790</td>
                        <td><span class="badge bg-light-danger text-danger w-100">Failed</span></td>
                        <td>$1800.00</td>
                        <td>21 Feb 2020</td>
                        <td><div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"></div>
                          </div></td>
                       </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
@endsection
