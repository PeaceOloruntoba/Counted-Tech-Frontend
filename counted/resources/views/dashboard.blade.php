<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-5 mb-xl-8">
                        <div class="py-3">
                            <div class="row">
                              <div class="fv-row mb-7 col-lg-1"></div>
                                <div class="fv-row mb-7 col-lg-2 col-md-6 col-sm-12">
                                    <div class="bg-gray-900 text-center rounded-lg">
                                        <div class="card-body">
                                          <h5 class="card-title">All</h5>
                                          <p class="card-text"><button class="btn btn-success w-20">4</button></p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="fv-row mb-7 col-lg-2 col-md-6 col-sm-12">
                                  <div class="card text-center">
                                    <div class="card-body">
                                      <h5 class="card-title">Available</h5> <hr>
                                      <p class="card-text"><button class="btn btn-success w-20">4</button></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="fv-row mb-7 col-lg-2 col-md-6 col-sm-12">
                                    <div class="card text-center">
                                      <div class="card-body">
                                        <h5 class="card-title">Inactive</h5> <hr>
                                        <p class="card-text"><button class="btn btn-danger w-20">4</button></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="fv-row mb-7 col-lg-2 col-md-6 col-sm-12">
                                    <div class="card text-center">
                                      <div class="card-body">
                                        <h5 class="card-title">Absent</h5> <hr>
                                        <p class="card-text"><button class="btn btn-primary w-20">4</button></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="fv-row mb-7 col-lg-2 col-md-6 col-sm-12">
                                    <div class="card text-center">
                                      <div class="card-body">
                                        <h5 class="card-title">Vacation</h5> <hr>
                                        <p class="card-text"><button class="btn btn-warning btn-block w-20">4</button></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="fv-row mb-7 col-lg-1"></div>
                              </div> 
                        </div>
                    </div>
                    
                    <div class="container">
                      <div class="card-body py-3">
                        <div class="row">
                            
                            <div class="fv-row mb-7 col-lg-4 col-md-6 col-sm-12">
                              <div class="card text-center">
                                <div class="card-body position-relative" >
                                  <div class="d-flex justify-content-around">
                                    <span class="text-start">
                                      <button class="btn btn-danger">4</button> &nbsp;<button class="btn btn-success">4</button>
                                    </span>  
                                    <span class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-danger">4</button>
                                        <button type="button" class="btn btn-success">555555</button>
                                      </div> 
                                    </span>
                    
                                    <span class="position-absolute text-end mx-1">
                                      <a [routerLink]="['/location']"><img src="/assets/images/location-pin.png" width="10%" class="img-fluid inline-block" alt=""></a>
                                    </span>
                                </div>
                              </div>
                                <section class="card-text py-3">
                                  <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Tooltip placeholder">
                                    TStreet Number + House Number +Zipcode +Location
                                  </button>
                                </section>
                              </div>
                            </div>
                            <div class="fv-row mb-7 col-lg-4 col-md-6 col-sm-12">
                              <div class="card text-center">
                                <div class="card-body position-relative" >
                                  <div class="d-flex justify-content-around">
                                    <span class="text-start">
                                      <button class="btn btn-danger">4</button> &nbsp;<button class="btn btn-success">4</button>
                                    </span>  
                                    <span class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-danger">4</button>
                                        <button type="button" class="btn btn-success">555555</button>
                                      </div> 
                                    </span>
                    
                                    <span class="position-absolute text-end mx-1">
                                      <a [routerLink]="['/location']"><img src="/assets/images/location-pin.png" width="10%" class="img-fluid inline-block" alt=""></a>
                                    </span>
                                </div>
                              </div>
                                <section class="card-text py-3">
                                  <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Tooltip placeholder">
                                    TStreet Number + House Number +Zipcode +Location
                                  </button>
                                </section>
                              </div>
                            </div>
                            <div class="fv-row mb-7 col-lg-4 col-md-6 col-sm-12">
                              <div class="card text-center">
                                <div class="card-body position-relative" >
                                  <div class="d-flex justify-content-around">
                                    <span class="text-start">
                                      <button class="btn btn-danger">4</button> &nbsp;<button class="btn btn-success">4</button>
                                    </span>  
                                    <span class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-danger">4</button>
                                        <button type="button" class="btn btn-success">555555</button>
                                      </div> 
                                    </span>
                    
                                    <span class="position-absolute text-end mx-1">
                                      <a [routerLink]="['/location']"><img src="/assets/images/location-pin.png" width="10%" class="img-fluid inline-block" alt=""></a>
                                    </span>
                                </div>
                              </div>
                              <section class="card-text py-3">
                                <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Tooltip placeholder">
                                  TStreet Number + House Number +Zipcode +Location
                                </button>
                              </section>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="container">
                      <div class="card-body py-3">
                        <div class="row">
                            
                          <div class="fv-row mb-7 col-lg-4 col-md-6 col-sm-12">
                            <div class="card text-center">
                              <div class="card-body position-relative" >
                                <div class="d-flex justify-content-between">
                                  <span class="text-start">
                                    <button class="btn btn-danger">4</button> &nbsp;<button class="btn btn-success">4</button>
                                    
                                  </span>  
                                  <span class="position-absolute text-end mx-3">
                                    <a><img src="/assets/images/location-pin.png" width="10%" class="img-fluid inline-block" alt=""></a>
                                  </span>
                                      
                                   
                              </div>
                            </div>
                            <section class="card-text py-3">
                              Section Name
                            </section>
                            </div>
                          </div>
                          
                          <div class="fv-row mb-7 col-lg-4 col-md-6 col-sm-12">
                            <div class="card text-center">
                              <div class="card-body position-relative" >
                                <div class="d-flex justify-content-between">
                                  <span class="text-start">
                                    <button class="btn btn-danger">4</button> &nbsp;<button class="btn btn-success">4</button>
                                    
                                  </span>  
                                  <span class="position-absolute text-end mx-3">
                                    <a><img src="/assets/images/location-pin.png" width="10%" class="img-fluid inline-block" alt=""></a>
                                  </span>
                                      
                                   
                              </div>
                            </div>
                              <section class="card-text py-3">
                                Section Name
                              </section>
                            </div>
                          </div>
                    
                          <div class="fv-row mb-7 col-lg-4 col-md-6 col-sm-12">
                            <div class="card text-center">
                              <div class="card-body position-relative" >
                                <div class="d-flex justify-content-between">
                                  <span class="text-start">
                                    <button class="btn btn-danger">4</button> &nbsp;<button class="btn btn-success">4</button>
                                    
                                  </span>  
                                  <span class="position-absolute text-end mx-3">
                                    <a><img src="/assets/images/location-pin.png" width="10%" class="img-fluid inline-block" alt=""></a>
                                  </span>
                                      
                                   
                              </div>
                            </div>
                            <section class="card-text py-3">
                              Section Name
                            </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
