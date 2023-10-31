<!doctype html>
<html lang="en" dir="ltr">

<head>
@include('admin.includes.header_link')
   <title>RD-Edit Teacher</title>
</head>

<body class="layout-light side-menu">
   <div class="mobile-search">
      <form action="/" class="search-form">
         <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
         <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
      </form>
   </div>

   <div class="mobile-author-actions"></div>

   <!-- header  -->
   @include('admin.includes.header')

<main class="main-content">
      
         <!-- sidebar -->
          @include('admin.includes.sidebar')
      
      <div class="contents">

         <div class="crm mb-25">
            <div class="container-fluid">
               <div class="row ">
                  <!-- content area -->

                  <div class="col-lg-12">
                     <!-- breadcrumb -->
                     <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Teacher</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Teacher Manage</a>
                                 </li>
                                 <li class="breadcrumb-item active" aria-current="page">Edit Teacher</li>
                              </ol>
                           </nav>
                        </div>
                     </div>

                  </div>

                     <div class="col-lg-12">
                     <div class="card card-default card-md mb-4">
                        <div class="card-header">
                           <h6>Profile Details</h6>
                        </div>
                        <div class="card-body py-md-25">
                           <form action="#">
                              <div class="row">
                                  
                              <div class="col-4">
                                   <div class="card-body">
                           <div class="dm-tag-wrap">

                              <div class="dm-upload">
                                 <div class="dm-upload-avatar">
                                    <img class="avatrSrc" src="{{ asset('assets/img/author-nav.jpg') }}" alt="Avatar Upload">
                                 </div>
                                 <div class="avatar-up">
                                    <input type="file" name="upload-avatar-input" class="upload-avatar-input">
                                 </div>
                              </div>

                           </div>
                        </div>
                                </div>
                                   <div class="col-8">
                            <div class="card  card-default card-md mb-4">
                              
                               <div class="card-body py-md-30">
                                
                                    <p class="color-light mt-0 fs-14">Click image preview to RESET your image  </p>
                                       <p class="color-light mt-0 fs-14">Allowed JPG, JPEG, MAx size of 1MB </p>
                                  </div>
                               </div>
                                </div>
                        <div class="col-md-4">
                                    <div class="form-group">
                                       <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">First Name</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a1" placeholder="First Name">
                                    </div>
                                 </div> 
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label for="a2" class="il-gray fs-14 fw-500 align-center mb-10">Last Name</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a2" placeholder="Last Name">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label for="a3" class="il-gray fs-14 fw-500 align-center mb-10">Gender</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a3" placeholder="Gender">
                                    </div>
                                 </div>
                                      <div class="col-md-4">
                                    <div class="form-group">
                                       <label for="a1" class="il-gray fs-14 fw-500 align-center mb-10">Birth of Date</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a1" placeholder="First Name">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label for="a2" class="il-gray fs-14 fw-500 align-center mb-10">Email</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a2" placeholder="Last Name">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label for="a3" class="il-gray fs-14 fw-500 align-center mb-10">NIC</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a3" placeholder="Gender">
                                    </div>
                                 </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="a8" class="il-gray fs-14 fw-500 align-center mb-10">Address line 1</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a8" placeholder="Address line 1">
                                    </div>
                                 </div>
                                 
                                 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="a2" class="il-gray fs-14 fw-500 align-center mb-10">Contact Number</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a2" placeholder="One of Three Columns">
                                    </div>
                                 </div>
                              
                              </div>
                          
                        </div>
                          

                         <div class="card-header">
                           <h6>Class Details</h6>
                        </div>
                        <div class="card-body py-md-25">
                        
                              <div class="row">
                                 
                    
                               
                    
                                      <div class="col-md-4">
                                 
                                        <div class="form-group select-px-15">
                                    <label for="countryOption" class="il-gray fs-14 fw-500 align-center mb-10">Subject Name</label>
                                    <select class="form-control px-15" id="countryOption1">
                                       <option>1</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                       <option>5</option>
                                    </select>
                                 </div>
                                   
                                 </div>
                                  <div class="col-md-4">
                                  
                                        <div class="form-group select-px-15">
                                    <label for="countryOption" class="il-gray fs-14 fw-500 align-center mb-10">Class Type</label>
                                    <select class="form-control px-15" id="countryOption2">
                                       <option>1</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                       <option>5</option>
                                    </select>
                                 </div>
                                   
                                 </div>
                                 <div class="col-md-4">
                                  
                                        <div class="form-group select-px-15">
                                    <label for="countryOption" class="il-gray fs-14 fw-500 align-center mb-10">Class Payment</label>
                                    <select class="form-control px-15" id="countryOption3">
                                       <option>1000</option>
                                       <option>1500</option>
                                       <option>2000</option>
                                       <option>2500</option>
                                       <option>3000</option>
                                    </select>
                                 </div>
                                   
                                 </div>
                           
                                
                                 
                                 
                                 <div class="layout-button mt-25">
                                 <button type="button" class="btn btn-default btn-squared btn-light px-20 ">cancel</button>
                                 <button type="button" class="btn btn-primary btn-default btn-squared px-30">Submit</button>
                              </div>
                              </div>
                           </form>
                        </div>
                         </form>
                     </div>
                     <!-- ends: .card -->
                  </div>

               </div>
               <!-- ends:content area -->
            </div>
         </div>

      </div>
     @include('admin.includes.footer')    
     
   </main>
  
  @include('admin.includes.footer_link')
</body>

</html>