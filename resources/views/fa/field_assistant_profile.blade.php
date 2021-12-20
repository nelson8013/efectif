@extends('layouts.app')
    @section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container">
            <div class="main-body">
                <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="#">
                    <div class="flex items-center">
                        <svg
                        class="w-5 h-5 mr-2"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        ></path>
                      </svg>
                    <span>{{ $field_assistant->users->first_name . " " . $field_assistant->users->last_name}}'s profile</span>
                    </div>
                </a>
                <div class="row gutters-sm">
                    <div class="col-md-4">
                        <div class="card mb-1">
                            <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $field_assistant->users->first_name . " " . $field_assistant->users->last_name}}</h4>
                                    <p class="text-secondary mb-1">{{$field_assistant->users->roles->name}}</p>
                                    <p class="text-muted font-size-sm">{{$field_assistant->zones->name}}</p>
                                    {{-- if role is 2: show notify. if role is 5: show edit --}}
                                    <button class="btn btn-primary mt-2">Notify</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class=" bio_data mb-1" style="padding-bottom:-2rem">
                             <!-- Inputs with icons -->
                            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <label class="block mt-4 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Full Name</span>
                                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" value="{{ $field_assistant->users->first_name . " " . $field_assistant->users->last_name}}" disabled/>
                                    <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                                        </svg>
                                    </div>
                                    </div>
                                </label>

                                <label class="block mt-4 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" value="{{$field_assistant->users->email}}" disabled/>
                                    <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
                                        </svg>
                                    </div>
                                    </div>
                                </label>

                                <label class="block mt-4 text-sm" style="padding-bottom: 1rem">
                                    <span class="text-gray-700 dark:text-gray-400">Adress</span>
                                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                                    <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" value="{{$field_assistant->address}}" disabled/>
                                    <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                        </svg>
                                    </div>
                                    </div>
                                </label>
                            </div>

                        </div>

                        <div class="row gutters-sm">
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                        <small>Web Design</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Website Markup</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>One Page</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Mobile Template</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Backend API</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                        <small>Web Design</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Website Markup</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>One Page</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Mobile Template</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Backend API</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
