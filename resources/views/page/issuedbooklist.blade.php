 @extends('layout.masterlayout')
@section('title', 'Ishued Books')
@section('content')

       <!--start content-->
          <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Tables</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Books Mangement</li>
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
                      <h5 class="mb-0">Issued Book List</h5>
                       <form class="ms-auto position-relative">
                         <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                         <input class="form-control ps-5" type="text" placeholder="search">
                       </form>
                   </div>
                   <div class="table-responsive mt-3">
                     <table class="table align-middle">
                       <thead class="table-secondary">
                         <tr>
                          <th>#</th>
                          <th>Student Name</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Pin Code</th>
                          <th>Country</th>
                          <th>Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                          <td>1</td>
                           <td>
                             <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="44" height="44" alt="">
                                <div class="">
                                  <p class="mb-0">Thomas Hardy</p>
                                </div>
                             </div>
                           </td>
                           <td>89 Chicago UK</td>
                           <td>Chicago</td>
                           <td>8574201</td>
                           <td>United Kingdom</td>
                           <td>
                             <div class="table-actions d-flex align-items-center gap-3 fs-6">
                               <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                               <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                               <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                             </div>
                           </td>
                         </tr>
                         <tr>
                          <td>2</td>
                           <td>
                             <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="44" height="44" alt="">
                                <div class="">
                                  <p class="mb-0">Victoria Hardy</p>
                                </div>
                             </div>
                           </td>
                           <td>77 New York UK</td>
                           <td>New York</td>
                           <td>8956370</td>
                           <td>United Kingdom</td>
                           <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                         </tr>
                         <tr>
                          <td>3</td>
                           <td>
                             <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="44" height="44" alt="">
                                <div class="">
                                  <p class="mb-0">Maria Anders</p>
                                </div>
                             </div>
                           </td>
                           <td>56 Poland UK</td>
                           <td>Poland</td>
                           <td>3265840</td>
                           <td>United Kingdom</td>
                           <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                         </tr>
                         <tr>
                          <td>4</td>
                           <td>
                             <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="44" height="44" alt="">
                                <div class="">
                                  <p class="mb-0">Maria Anders</p>
                                </div>
                             </div>
                           </td>
                           <td>47-A Delhi India</td>
                           <td>Delhi</td>
                           <td>6535420</td>
                           <td>India</td>
                           <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                         </tr>
                         <tr>
                          <td>5</td>
                           <td>
                             <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="assets/images/avatars/avatar-5.png" class="rounded-circle" width="44" height="44" alt="">
                                <div class="">
                                  <p class="mb-0">Martin Loother</p>
                                </div>
                             </div>
                           </td>
                           <td>37 B Columbo Shri Lanka</td>
                           <td>Columbo</td>
                           <td>9645230</td>
                           <td>Shri Lanka</td>
                           <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                         </tr>
                         <tr>
                          <td>6</td>
                           <td>
                             <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="assets/images/avatars/avatar-6.png" class="rounded-circle" width="44" height="44" alt="">
                                <div class="">
                                  <p class="mb-0">Martin Loother</p>
                                </div>
                             </div>
                           </td>
                           <td>68 New York UK</td>
                           <td>New York</td>
                           <td>7854230</td>
                           <td>United Kingdom</td>
                           <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>


@endsection
