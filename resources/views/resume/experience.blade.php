@extends('front.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="px-4 pt-4 pb-0 mt-3 mb-3">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{$error}}
                @endforeach
            </div>
            @endif
            <form id="form" action="{{route('resume.experience.post')}}" method="POST">
                @csrf
                <ul id="progressbar">
                    <li class="active" id="step1"><strong>About Me</strong></li>
                    <li class="active" id="step2"><strong>My Experience</strong></li>
                    <li id="step3"><strong>My Education</strong></li>
                    <li id="step4"><strong>Languages I Know</strong></li>
                    <li id="step5"><strong>My Skills</strong></li>
                    <li id="step6"><strong>Courses I Have Completed</strong></li>
                    <li id="step7"><strong>Contact Details</strong></li>
                    <li id="step8"><strong>Job Preferences</strong></li>
                    <li id="step9"><strong>Documents</strong></li>
                </ul>
                <div class="progress">
                    <div class="progress-bar" style="width: 22%;"></div>
                </div> <br>

                <fieldset>

                    <div class="form-row">

                        <h2>MY EXPERIENCE</h2>
                        <hr width="27%" />
                        <div class="form-row">
                            @foreach ($experiences as $experience)
                            <div class="form-group col-md-12">
                                <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-4">
                                    <ul class="list-group">
                                        <li class="list-group-item active" style="background-color: #2F8D46;">{{$experience->company_name}} / {{$experience->location}}</li>
                                        <li class="list-group-item">{{$experience->position}}</li>
                                        <li class="list-group-item">{{$experience->position_title}}</li>
                                        <li class="list-group-item">{{$experience->from_time}} - {{$experience->to_time}}</li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-2">
                                    <a href="#" class="btn btn-danger"><span class="material-icons">delete</span></a>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                            <hr>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="employer-company-name">Employer/Company name</label>
                                <input type="text" class="form-control" name="company_name" placeholder="e.g This Company">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="position">Position</label>
                                <input type="text" class="form-control" name="position" placeholder="e.g Retail Sales Manager " required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="last-name">Position Title</label>

                                <select class="form-control dropdown" id="position_title" name="position_title" required>
                                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                    <optgroup label="Healthcare Practitioners and Technical Occupations:">
                                        <option value="Chiropractor">- Chiropractor</option>
                                        <option value="Dentist">- Dentist</option>
                                        <option value="Dietitian">- Dietitian</option>
                                        <option value="Nutritionist">- Nutritionist</option>
                                        <option value="Optometrist">- Optometrist</option>
                                        <option value="Pharmacist">- Pharmacist</option>
                                        <option value="Physician">- Physician</option>
                                        <option value="Physician Assistant">- Physician Assistant</option>
                                        <option value="Podiatrist<">- Podiatrist</option>
                                        <option value="Registered Nurse">- Registered Nurse</option>
                                        <option value="Therapist">- Therapist</option>
                                        <option value="Veterinarian">- Veterinarian</option>
                                        <option value="Health Technologist">- Health Technologist</option>
                                        <option value="Technician">- Technician</option>
                                    </optgroup>
                                    <optgroup label="Healthcare Support Occupations:">
                                        <option value="Nursing">- Nursing</option>
                                        <option value="Psychiatric">- Psychiatric</option>
                                        <option value="Home Health Aide">- Home Health Aide</option>
                                        <option value="Occupational and Physical Therapist Assistant/Aide">- Occupational and Physical Therapist Assistant/Aide</option>
                                    </optgroup>
                                    <optgroup label="Business, Executive, Management, and Financial Occupations:">
                                        <option value="Chief Executive">- Chief Executive</option>
                                        <option value="General Manager">- General Manager</option>
                                        <option value="Operations Manager">- Operations Manager</option>
                                        <option value="Advertising Manager">- Advertising Manager</option>
                                        <option value="Marketing Manager">- Marketing Manager</option>
                                        <option value="Promotions Manager">- Promotions Manager</option>
                                        <option value="Public Relations Manager">- Public Relations Manager</option>
                                        <option value="Sales Manager">- Sales Manager</option>
                                        <option value="Operations Specialties Manager">- Operations Specialties Manager (e.g., IT or HR Manager)</option>
                                        <option value="Construction Manager">- Construction Manager</option>
                                        <option value="Engineering Manager">- Engineering Manager</option>
                                        <option value="Accountant">- Accountant</option>
                                        <option value="Auditor">- Auditor</option>
                                        <option value="Business Operations">- Business Operations</option>
                                        <option value="Financial Specialist">- Financial Specialist</option>
                                        <option value="Business Owner">- Business Owner</option>
                                    </optgroup>
                                    <optgroup label="Architecture and Engineering Occupations:">
                                        <option value="Architect">- Architect</option>
                                        <option value="Surveyor">- Surveyor</option>
                                        <option value="Cartographer">- Cartographer</option>
                                        <option value="Engineer">- Engineer</option>
                                    </optgroup>
                                    <optgroup label="Education, Training, and Library Occupations:">
                                        <option value="Postsecondary Teacher">- Postsecondary Teacher (e.g., College Professor)</option>
                                        <option value="Primary School Teacher">- Primary School Teacher</option>
                                        <option value="Secondary School Teacher">- Secondary School Teacher</option>
                                        <option value="Special Education School Teacher">- Special Education School Teacher</option>
                                        <option value="Trainer">- Trainer</option>
                                        <option value="Instructor">- Instructor</option>
                                        <option value="Librarian">- Librarian</option>
                                    </optgroup>
                                    <optgroup label="Other Professional Occupations:">
                                        <option value="Artist">- Artist</option>
                                        <option value="Designer">- Designer</option>
                                        <option value="Entertainer">- Entertainer</option>
                                        <option value="Sportsman">- Sportsan</option>
                                        <option value="Computer Specialist">- Computer Specialist</option>
                                        <option value="Mathematical Scientist">- Mathematical Scientist</option>
                                        <option value="Counselor">- Counselor</option>
                                        <option value="Social Worker">- Social Worker</option>
                                        <option value="Community and Social Service Specialist">- Community and Social Service Specialist</option>
                                        <option value="Lawyer">- Lawyer</option>
                                        <option value="Judge">- Judge</option>
                                        <option value="Life Scientist">- Life Scientist (e.g., Animal, Food, Soil)</option>
                                        <option value="Biological Scientist">- Biological Scientist</option>
                                        <option value="Zoologist">- Zoologist</option>
                                        <option value="Astronomer">- Astronomer</option>
                                        <option value="Physicist">- Physicist</option>
                                        <option value="Chemist">- Chemist</option>
                                        <option value="Hydrologist">- Hydrologist</option>
                                        <option value="Clergy">- Clergy</option>
                                        <option value="Director of Religious Activities/Education">- Director of Religious Activities/Education</option>
                                        <option value="Social Scientist and Related Worker">- Social Scientist and Related Worker</option>
                                    </optgroup>
                                    <optgroup label="Office and Administrative Support Occupations:">
                                        <option value="Supervisor of Administrative Support Workers">- Supervisor of Administrative Support Workers</option>
                                        <option value="Financial Clerk">- Financial Clerk</option>
                                        <option value="Secretary">- Secretary or Administrative Assistant</option>
                                        <option value="Administrative Assistant">- Administrative Assistant</option>
                                        <option value="Material Recording, Scheduling, and Dispatching Worker">- Material Recording, Scheduling, and Dispatching Worker</option>
                                    </optgroup>
                                    <optgroup label="Services Occupations:">
                                        <option value="Fire Fighting">- Fire Fighting</option>
                                        <option value="Police Officer">- Police Officer</option>
                                        <option value="Correctional Officer">- Correctional Officer</option>
                                        <option value="Chef/Head Cook">- Chef/Head Cook</option>
                                        <option value="Cook">- Cook</option>
                                        <option value="Food Preparation Worker">- Food Preparation Worker</option>
                                        <option value="Bartender">- Bartender</option>
                                        <option value="Waiter">- Waiter</option>
                                        <option value="Waitress">- Waitress</option>
                                        <option value="Building and Grounds Cleaning and Maintenance">- Building and Grounds Cleaning and Maintenance</option>
                                        <option value="Hairdresser">- Hairdresser</option>
                                        <option value="Flight Attendant">- Flight Attendant</option>
                                        <option value="Concierge">- Concierge</option>
                                        <option value="Sales Supervisor">- Sales Supervisor</option>
                                        <option value="Retail Sales Worker">- Retail Sales Worker</option>
                                        <option value="Insurance Sales Agent">- Insurance Sales Agent</option>
                                        <option value="Sales Representative">- Sales Representative</option>
                                        <option value="Real Estate Sales Agent">- Real Estate Sales Agent</option>
                                    </optgroup>
                                    <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
                                        <option value="Construction Laborer">- Construction Laborer</option>
                                        <option value="Electrician">- Electrician</option>
                                        <option value="Farmer">- Farmer</option>
                                        <option value="Fisher">- Fisher</option>
                                        <option value="Forester">- Forester</option>
                                        <option value="Mechanic">- Mechanic</option>
                                        <option value="Producer">- Producer</option>
                                    </optgroup>
                                    <optgroup label="Transportation Occupations:">
                                        <option value="Aircraft Pilot">- Aircraft Pilot</option>
                                        <option value="Flight Engineer">- Flight Engineer</option>
                                        <option value="Motor Vehicle Operator">- Motor Vehicle Operator</option>
                                    </optgroup>
                                    <optgroup label="Other Occupations:">
                                        <option value="Military">- Military</option>
                                        <option value="Homemaker">- Homemaker</option>
                                        <option value="Student">- Student</option>
                                        <option value="Not Applicable">- Not Applicable</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="location">Location</label>
                            <select id="location" name="location" class="form-control" required>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <input type="checkbox" onclick="enable_text(this.checked)" class="form-check-input" id="currently-working" checked />
                            <label for="currently-working">I currently-working</label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Time Period(From)*</label>
                            <input type="date" class="form-control" name="from_time" min="1900-01-01" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="to-now">Time Period(To)*</label>
                            <input type="date" class="form-control" disabled id="date" name="to_time" min="1900-01-01" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" placeholder="A short summary of what you did in this position; goals, accomplishments, projects. Boast about yourself."></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <center>
                                <input type="submit" name="submit" class="btn btn-warning" value="Add Experience" />
                            </center>
                        </div>
                    </div>

                    <a href="{{ route('resume.education')}}" class="btn btn-primary next-step">Next Step</a>
                    <a href="{{ route('resume.about')}}" class="btn btn-primary previous-step">Previous Step</a>

                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
@section('js')
<script>
    $("input:checkbox").click(function() {
        $("#date").prop("disabled", this.checked);
    });
</script>
@endsection
@endsection