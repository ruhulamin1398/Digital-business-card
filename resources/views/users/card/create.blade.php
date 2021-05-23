@extends("users.app")
@section('css')


@endsection



@section("content")


<div class="container">
    <div class="row">
        <div class="col-12 col-md-8  ">




            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="components-preview wide-md mx-auto">

                            <div class="nk-block nk-block-lg">

                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <form action="{{route('cards.store')}}" id="venueCreationForm" method="post" class="nk-wizard nk-wizard-simple is-alter" enctype="multipart/form-data">
                                            @csrf
                                            <div class="nk-wizard-head">
                                                <h5>Basic info</h5>
                                            </div>
                                            <div class="nk-wizard-content">



                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name"> Card Title<span class="text-danger">* </span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="title" class="form-control" id="cardTitle" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{----
                                                <div class="row mt-4 g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="logo">Logo <img src="" width="40px" alt="" id="new"><span class="text-danger">* </span> </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <div class="custom-file">
                                                                    <input type="file" name="logo" class="custom-file-input" id="logo" accept=".png, .jpg, .jpeg" required>
                                                                    <label class="custom-file-label" for="logo">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>





                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name"> Name <span class="text-danger">* </span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="name" class="form-control" id="name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name"> Position <span class="text-danger">* </span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="position" class="form-control" id="position" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>





                                                <div class="row mt-4 g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="logo">Your Photo <img src="" width="40px" alt="" id="new"><span class="text-danger">* </span> </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <div class="custom-file">
                                                                    <input type="file" name="profile_photo" class="custom-file-input" id="profile_photo" accept=".png, .jpg, .jpeg" required>
                                                                    <label class="custom-file-label" for="profile_photo">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>






                                                <div class="row mt-4  align-center">


                                                    <div class="col-sm-6 pt-2">
                                                        <div class="form-group">
                                                               <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-6 pt-2">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="fixed_line" name="fixed_line" placeholder="fixed line">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    
                                                    <div class="col-sm-6 pt-2">
                                                        <div class="form-group">
                                                               <div class="form-control-wrap">
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="email">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="col-sm-6 pt-2">
                                                        <div class="form-group">
                                                               <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="website" name="website" placeholder="website">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    
                                                    <div class="col-sm-6 pt-2">
                                                        <div class="form-group">
                                                               <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="street_1" name="street_1" placeholder="street_1">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="col-sm-6 pt-2">
                                                        <div class="form-group">
                                                               <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="street_2" name="street_2" placeholder="street_2">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-4 pt-2">
                                                        <div class="form-group">
                                                               <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="postal" name="postal" placeholder="postal">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-4 pt-2">
                                                        <div class="form-group">
                                                               <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="city" name="city" placeholder="city">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-4 pt-2">
                                                        <div class="form-group">
                                                               <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="state" name="state" placeholder="State/Province">
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>



                                                <div class="row pt-4 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-country">Country <span class="text-danger">* </span> </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap ">
                                                                <div class="form-control-select">
                                                                    <select name="country" class="form-control" id="site-country" value="" required>
                                                                        <option value="">Select country</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>






                                                --------------------------------------------------------------------------------------------------

                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for=" ">Address<span class="text-danger">* </span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="address" class="form-control" id="site-address" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-city">City<span class="text-danger">* </span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="city" class="form-control" id="site-city" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-country">Country <span class="text-danger">* </span> </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap ">
                                                                <div class="form-control-select">
                                                                    <select name="country" class="form-control" id="site-country" value="" required>
                                                                        <option value="">Select country</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>











                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-description">Description</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">


                                                                <textarea type="text" name="description" class="form-control summernote-minimal" id="site-description">
                                                        </textarea>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-how_to_prepare">How to Prepare<label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">


                                                                <textarea type="text" name="how_to_prepare" class="form-control summernote-minimal" id="site-how_to_prepare">
                                                        </textarea>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-how_to_get_here">How to get there
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">


                                                                <textarea type="text" name="how_to_get_there" class="form-control summernote-minimal" id="site-how_to_get_here">

                                                        </textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
--}}




                                            </div>

                                            ///////////////////////////////////////////////////////////////////////////////
                                            <div class="nk-wizard-head">
                                                <h5>Additional Info</h5>
                                            </div>
                                            <div class="nk-wizard-content">


                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-address">mobile2 </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="mobile2" class="form-control" id="mobile2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="  text-center font-weight-bold ml-4 mr-4 mt-1 mb-4 p-1" style="color: #3F5161;
background-color: rgba(140,150,160,0.15);"> Company Data</div>
                                                <div class="row g-3 align-center">
                                                    
                                                 
                                                <div class="col-sm-6 pt-2">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="company" name="company" placeholder="company">
                                                            </div>
                                                        </div>
                                                    </div>
                                                 
                                                 <div class="col-sm-6 pt-2">
                                                     <div class="form-group">
                                                         <div class="form-control-wrap">
                                                             <input type="text" class="form-control" id="department" name="department" placeholder="department">
                                                         </div>
                                                     </div>
                                                 </div>


                                                </div>




                                                <div class="  text-center font-weight-bold ml-4 mr-4 mt-1 mb-4 p-1" style="color: #3F5161;
background-color: rgba(140,150,160,0.15);"> Secondary Address </div>





<div class="row    align-center">


<div class="col-sm-6 pt-2">
    <div class="form-group">
           <div class="form-control-wrap">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile">
        </div>
    </div>
</div>


<div class="col-sm-6 pt-2">
    <div class="form-group">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="fixed_line" name="fixed_line" placeholder="fixed line">
        </div>
    </div>
</div>




<div class="col-sm-6 pt-2">
    <div class="form-group">
           <div class="form-control-wrap">
            <input type="email" class="form-control" id="email" name="email" placeholder="email">
        </div>
    </div>
</div>


<div class="col-sm-6 pt-2">
    <div class="form-group">
           <div class="form-control-wrap">
            <input type="text" class="form-control" id="website" name="website" placeholder="website">
        </div>
    </div>
</div>




<div class="col-sm-6 pt-2">
    <div class="form-group">
           <div class="form-control-wrap">
            <input type="text" class="form-control" id="street_1" name="street_1" placeholder="street_1">
        </div>
    </div>
</div>


<div class="col-sm-6 pt-2">
    <div class="form-group">
           <div class="form-control-wrap">
            <input type="text" class="form-control" id="street_2" name="street_2" placeholder="street_2">
        </div>
    </div>
</div>


<div class="col-sm-4 pt-2">
    <div class="form-group">
           <div class="form-control-wrap">
            <input type="text" class="form-control" id="postal" name="postal" placeholder="postal">
        </div>
    </div>
</div>


<div class="col-sm-4 pt-2">
    <div class="form-group">
           <div class="form-control-wrap">
            <input type="text" class="form-control" id="city" name="city" placeholder="city">
        </div>
    </div>
</div>


<div class="col-sm-4 pt-2">
    <div class="form-group">
           <div class="form-control-wrap">
            <input type="text" class="form-control" id="state" name="state" placeholder="State/Province">
        </div>
    </div>
</div>




</div>




                                                ////////////////

                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-address">website </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="website" class="form-control" id="site-address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-address">Facebook </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="facebook" class="form-control" id="site-address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-address">Twitter </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="twitter" class="form-control" id="site-address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-address">Instragram </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="instragram" class="form-control" id="site-address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-address">Youtube </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" name="youtube" class="form-control" id="site-address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{---


                                        <hr style="margin:25px 0 ;">
                                        <div class="row g-3 align-center">

                                            <div class="nk-block nk-block-lg">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h6 class="title nk-block-title">Business attributes</h6>
                                                        <div class="nk-block-des">
                                                            <p>Let ClassPass members know more about your business</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card ">
                                                    <div class="card-inner">
                                                        <div class="row gy-4">

                                                        @foreach($businessAttributes as $businessAttribute)
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="preview-block">
                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox" name="business_attributes[]" value="{{$businessAttribute->id}}" class="custom-control-input" id="business_attributes{{$businessAttribute->id}}">
                                                <label class="custom-control-label" for="business_attributes{{$businessAttribute->id}}">{{$businessAttribute->name}}</label>
                                            </div>
                                    </div>
                                </div>

                                @endforeach


                            </div>
                        </div>
                    </div><!-- .card-preview -->
                </div><!-- .nk-block -->

            </div>






            <hr style="margin:25px 0 ;">
            <div class="row g-3 align-center">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h6 class="title nk-block-title">Amenities</h6>
                            <div class="nk-block-des">
                                <p>Help users know what to expect at your facilities</p>
                            </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-inner">
                            <div class="row gy-4">

                                @foreach($amenities as $amenitie)

                                <div class="col-md-4 col-sm-6">
                                    <div class="preview-block">
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="checkbox" name="amenities[]" value="{{$amenitie->id}}" class="custom-control-input" id="amenities{{$amenitie->id}}">
                                            <label class="custom-control-label" for="amenities{{$amenitie->id}}">{{$amenitie->name}}</label>
                                        </div>
                                    </div>
                                </div>

                                @endforeach














                            </div>
                        </div>
                    </div><!-- .card-preview -->
                </div><!-- .nk-block -->

            </div>






            <hr style="margin:25px 0 ;">
            <div class="row g-3 align-center">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h6 class="title nk-block-title">Safety & Cleanliness <span class="badge badge-outline-success">Recommanded</span> </h6>
                            <div class="nk-block-des">
                                <p>Help users know what to expect at your facilities</p>
                            </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-inner">
                            <div class="row gy-4">



                                @foreach($safetyCleanliness as $safetyClean)
                                <div class="col-12">
                                    <div class="preview-block">
                                        <div class="custom-control  custom-control-sm custom-control-sm custom-checkbox">
                                            <input type="checkbox" name="safety_cleanness[]" value="{{$safetyClean->id}}" class="custom-control-input" id="safety_cleanness{{$safetyClean->id}}">
                                            <label class="custom-control-label font-weight-bold" for="safety_cleanness{{$safetyClean->id}}">{{$safetyClean->name}}</label>
                                        </div>
                                    </div>
                                </div>
                                @endforeach





                            </div>
                        </div>
                    </div><!-- .card-preview -->
                </div><!-- .nk-block -->

            </div>


            --}}
            Reservation Deadline <input type="text" name="reservation_deadlines" size="5" id="" value="120" required> Minute



        </div>

        </form>
    </div>
</div>
</div><!-- .nk-block -->
</div><!-- .components-preview -->
</div>
</div>
</div>








</div>



<div class="col-12 col-md-4">


    <!-- Banner Section start-->
    <div class="container-card-area banner-main">
        <div class="row">
            <div class="col-12">
                <div class="banner d-flex justify-content-center align-items-center">
                    <img src="{{asset('img/anthil.png')}}" alt="anthil" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section end-->
    <!-- user section start -->
    <div class="container-fluid bg-card ">
        <div class="container-card-area share-main">
            <div class="share-sub">
                <a href="#">
                    <i class="fas fa-share-alt text-light"></i>
                </a>
            </div>
            <div class="row">
                <div class="col-3 no-gutters">
                    <img src="{{asset('img/person.jpg')}}" alt="user" class="image img-fluid">
                </div>
                <div class="col-9 user no-gutters">
                    <div class="d-flex h-100 justify-content-start align-items-center text-white">
                        <div class="user-des">
                            <h2 class="name">Anica Wilton</h2>
                            <span class="position">Web Designer and Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- user section end -->
    <!-- social media section start -->
    <div class="container-fluid social-media bg-card text-light text-center">
        <div class="container-card-area pb-5">
            <div class="row">
                <div class="col-12 pt-5">
                    <div class="row social-box">
                        <div class="col-3 social-icon">
                            <div class="social-single-icon">
                                <i class="fas fa-phone-alt"></i>
                                <p class="phone">Phone</p>
                            </div>
                        </div>
                        <div class="col-3 social-icon">
                            <div class="social-single-icon">
                                <i class="fas fa-file-alt"></i>
                                <p class="text">Text</p>
                            </div>
                        </div>
                        <div class="col-3 social-icon">
                            <div class="social-single-icon">
                                <i class="fas fa-envelope"></i>
                                <p>Email</p>
                            </div>
                        </div>
                        <div class="col-3 social-icon">
                            <div class="social-single-icon">
                                <i class="fas fa-globe-africa"></i>
                                <p class="wiki">Wiki</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 pt-5">
                    <div class="row social-box">
                        <div class="col-3 social-icon">
                            <div class="social-single-icon">
                                <i class="fas fa-map-marker-alt"></i>
                                <p class="map">Migrate</p>
                            </div>
                        </div>
                        <div class="col-3 social-icon">
                            <div class="social-single-icon">
                                <i class="fab fa-youtube"></i>
                                <p class="youtube">Youtube</p>
                            </div>
                        </div>
                        <div class="col-3 social-icon">
                            <div class="social-single-icon">
                                <i class="fab fa-twitter"></i>
                                <p class="twitter">Twitter</p>
                            </div>
                        </div>
                        <div class="col-3 social-icon">
                            <div class="social-single-icon">
                                <i class="fab fa-linkedin-in"></i>
                                <p class="Linkedin">Linkdin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- social media section end-->

    <div class="container-fluid bg-card">
        <div class="container-card-area">
            <div class="row text-light footer-text pt-3 pb-3 user-top">
                <div class="col-3">
                    <a href="#" class="text-light">
                        <i class="fas fa-angle-down"></i>
                    </a>
                </div>
                <div class="col-9">
                    <p>More Details</p>
                </div>
            </div>
        </div>
    </div>


</div>



</div>
</div>

@endsection


@section('js')

<script>
    $(document).on('click', 'a[href="#finish"]', function() {

        $("#venueCreationForm").submit();

    });



    $('#new').hide();

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#new').attr('src', e.target.result);

                $("#new").show();
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#logo").change(function() {

        readURL(this);
    });
</script>