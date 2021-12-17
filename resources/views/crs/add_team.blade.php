@extends('layouts.app')
    @section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Create Team </h2>
          <!-- CTA -->
          <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="https://github.com/estevanmaito/windmill-dashboard">
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
              <span>Add a team member</span>
            </div>
          </a>

          <form id="team_form" class="team_form" method="POST" action="/store_team">
            @csrf
            <!-- Inputs with icons -->
            <div class="team_row">
                <div class="team_col one">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">First Name</span>
                            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                              <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Hassan" type="text" name="first_name" required autofocus autocomplete="off"/>
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
                            <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="hassan.ahmed@wacotmail.com" type="email" name="email" required autocomplete="off"/>
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">

                              <svg class="svg-icon" viewBox="0 0 20 20">
                                  <path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
                              </svg>
                            </div>
                          </div>
                        </label>


                        <label class="block mt-4 text-sm">
                          <span class="text-gray-700 dark:text-gray-400">Phone</span>
                          <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="08012345678" type="text" name="phone" required autocomplete="off"/>
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">

                              <svg class="svg-icon" viewBox="0 0 20 20">
                                <path d="M13.372,1.781H6.628c-0.696,0-1.265,0.569-1.265,1.265v13.91c0,0.695,0.569,1.265,1.265,1.265h6.744c0.695,0,1.265-0.569,1.265-1.265V3.045C14.637,2.35,14.067,1.781,13.372,1.781 M13.794,16.955c0,0.228-0.194,0.421-0.422,0.421H6.628c-0.228,0-0.421-0.193-0.421-0.421v-0.843h7.587V16.955z M13.794,15.269H6.207V4.731h7.587V15.269z M13.794,3.888H6.207V3.045c0-0.228,0.194-0.421,0.421-0.421h6.744c0.228,0,0.422,0.194,0.422,0.421V3.888z"></path>
                              </svg>
                            </div>
                          </div>
                        </label>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Gender</span>
                            <select class="mb-2 block w-full mt-3 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required >
                                <option value="" readonly>- Choose Gender - </option>

                                @foreach ($genders as $gender)
                                <option value="{{$gender->id}}">{{$gender->name}}</option>
                                @endforeach
                            </select>
                        </label>
                      </div>
                </div>


                <div class="team_col two">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Last Name</span>
                            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                              <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Ahmed" type="text" name="last_name" required autocomplete="off"/>
                              <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">

                                <svg class="svg-icon" viewBox="0 0 20 20">
                                  <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                                </svg>
                              </div>
                            </div>
                          </label>

                        <label class="block mt-4 text-sm">
                          <span class="text-gray-700 dark:text-gray-400 ">Password
                          </span>
                          <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" type="password" name="password" placeholder="******"/>
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                              <svg class="svg-icon" viewBox="0 0 20 20">
                                <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                              </svg>
                            </div>
                          </div>
                        </label>


                        <label class="block mt-4 text-sm">
                          <span class="text-gray-700 dark:text-gray-400">Staff Number</span>
                          <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="16101173" type="text" name="employee_code" required autocomplete="off"/>
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">

                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <path d="M15.94,10.179l-2.437-0.325l1.62-7.379c0.047-0.235-0.132-0.458-0.372-0.458H5.25c-0.241,0-0.42,0.223-0.373,0.458l1.634,7.376L4.06,10.179c-0.312,0.041-0.446,0.425-0.214,0.649l2.864,2.759l-0.724,3.947c-0.058,0.315,0.277,0.554,0.559,0.401l3.457-1.916l3.456,1.916c-0.419-0.238,0.56,0.439,0.56-0.401l-0.725-3.947l2.863-2.759C16.388,10.604,16.254,10.22,15.94,10.179M10.381,2.778h3.902l-1.536,6.977L12.036,9.66l-1.655-3.546V2.778z M5.717,2.778h3.903v3.335L7.965,9.66L7.268,9.753L5.717,2.778zM12.618,13.182c-0.092,0.088-0.134,0.217-0.11,0.343l0.615,3.356l-2.938-1.629c-0.057-0.03-0.122-0.048-0.184-0.048c-0.063,0-0.128,0.018-0.185,0.048l-2.938,1.629l0.616-3.356c0.022-0.126-0.019-0.255-0.11-0.343l-2.441-2.354l3.329-0.441c0.128-0.017,0.24-0.099,0.295-0.215l1.435-3.073l1.435,3.073c0.055,0.116,0.167,0.198,0.294,0.215l3.329,0.441L12.618,13.182z"></path>
                                </svg>
                            </div>
                          </div>
                        </label>

                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Role</span>
                            <select onchange="toggle_field_assistant()" id="roles" class="mb-2 block w-full mt-3 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required >
                                <option value="0" readonly>- Choose role - </option>
                                @foreach( $roles as $role)
                                <option value="{{ $role->id}}"> {{ $role->name}}</option>
                                @endforeach
                            </select>

                        </label>
                      </div>
                </div>
            </div> {{-- End of first row --}}

            {{-- Field Assistants Forms --}}
            <div id="field_assistants" class="team_row field_assistants">

                <div class="team_col one">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Zone *</span>
                            <select id="zone" class="mb-2 block w-full mt-3 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('zone_id') is-invalid @enderror" name="zone_id" value="{{ old('zone_id') }}"  required>
                                <option value="" readonly>- Choose Zone - </option>
                                @foreach ($zones as $zone)
                                <option value="{{$zone->id}}">{{$zone->name}}</option>
                                @endforeach
                            </select>
                        </label>

                        <label class="block mt-4 text-sm">
                          <span class="text-gray-700 dark:text-gray-400">Address *</span>
                          <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                            <input id="address" class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="#45 factory road off market street." type="text" name="address"  autocomplete="off" required/>
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">

                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                </svg>
                            </div>
                          </div>
                        </label>

                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">State *</span>
                            <select id="state" onchange="getLga()"  class="mb-2 block w-full mt-3 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('state_id') is-invalid @enderror" name="state_id" value="{{ old('state_id') }}" required>
                                <option value="" readonly>- Choose State - </option>
                                @foreach ($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </label>
                      </div>
                </div>

                <div class="team_col two">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Activate Team</span>
                            <select id="is_active" class="mb-2 block w-full mt-3 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('is_active') is-invalid @enderror" name="is_active" value="{{ old('is_active') }}" required>
                                <option value="" readonly>- Is active - </option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                        </label>

                        <label class="block mt-4 text-sm">

                            <span class="text-gray-700 dark:text-gray-400">Reports To</span>
                            <select id="reports_to" required class="mb-2 block w-full mt-3 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('reports_to') is-invalid @enderror" name="reports_to" value="{{ old('reports_to') }}"  >
                                <option value="" readonly>- Choose Manager - </option>
                                @foreach ($users as $user)
                                    @if ($user->roles->name == 'Team Lead')
                                      <option value="{{$user->id}}">{{$user->first_name . " " . $user->last_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                          </label>
                          <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Lga</span>
                            <select id="lgas" class="mb-2 block w-full mt-3 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('lga_id') is-invalid @enderror" name="lga_id" value="{{ old('lga_id') }}" required>
                                <option value="" readonly>- Choose Lga - </option>
                                @foreach ($lgas as $lga)
                                <option value="{{$lga->id}}">{{$lga->name}}</option>
                                @endforeach
                            </select>
                        </label>
                      </div>
                </div>
            </div>  {{-- End of Field assistants div --}}
            <div>
                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" style="margin-bottom: 2rem; margin-right: 5rem">
                    Add Team
                </button>
            </div>

          </form>
       </div>
    </main>
    @endsection


<script>

    window.onload = function() {
        $('#field_assistants').hide();
    };



    function toggle_field_assistant(e){
        let role_value  = $('#roles').val();
        let role_text = $('#roles option:selected').text();

        if(role_text == 'Field Assistant' || role_value == 5) {
            $('#field_assistants').show();
            $("#zone").attr('required','required');
            $("#house_no").attr('required','required');
            $("#state").attr('required','required');
            $("#is_active").attr('required','required');
            $("#street").attr('required','required');

            // $('#team_form input').blur(function(){
            //     if(!$this.val()){
            //         alert("things are empty")
            //     }
            // });

        }else{
            $('#field_assistants').hide();
        }

    }



    function getLga(){
        let state_id;
        let lgas = [];
        state_id = document.getElementById('state').value;
        $.get( "{{ url('/api/lga') }}" + '/' + state_id, function(data){
            lgas = data;
            $("#lgas option").remove();
            $("#lgas").append("<option value='0' selected disabled >-- Choose Lga -- </option>");
            for(let i = 0; i < lgas.length; i++){
            $('#lgas').append(`<option value="${lgas[i].id}"> ${lgas[i].name} </option>` );
        }
        });
    }

</script>
