<style>
    ::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
    #ui-id-1{
        max-height:155px;
        overflow-y: auto;
        overflow-x: hidden;
    }
    
    #ui-id-2{
        max-height:155px;
        overflow-y: auto;
        overflow-x: hidden;
    }
    
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets1/js/moment.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
		<script src="assets1/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets1/js/popper.min.js"></script>

		<script src="assets1/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets1/js/sweetalert.min.js"></script>
		<script src="assets1/plugins/datatables/datatables.min.js"></script>
		<script src="assets1/js/cropper_profile_provider.js"></script>
		<script src="assets1/js/cropper.min.js"></script>
		<script src="assets1/js/script_crop.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="assets1/js/bootstrapValidator.min.js"></script>
		<!-- Sticky Sidebar JS -->
		<script src="assets1/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
		<script src="assets1/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		<!-- Toaster -->
		<script src="assets1/plugins/toaster/toastr.min.js"></script>
		<script src="assets1/plugins/owlcarousel/owl.carousel.min.js"></script>
		<!--<script src="assets1/plugins/jquery-ui/jquery-ui.min.js"></script>-->
		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEjIy8vdA9v42tMDkZjzwdO9eIm82xzHE&amp;v=3.exp&amp;libraries=places"></script> 
		<input type="hidden" name="google_map_api" id="google_map_api" value="AIzaSyAEjIy8vdA9v42tMDkZjzwdO9eIm82xzHE">
		<input type="hidden" id="modules_page" value="home">
		<input type="hidden" id="current_page" value="">
	
					<input type="hidden" id="service_location" class="asf">
	   		
								<input type="hidden" id="user_address_values" value="">
			<input type="hidden" id="user_latitude_values" value="">
			<input type="hidden" id="user_longitude_values" value="">
			
			<script src="assets1/js/place.js"></script>
		
		<script src="assets1/js/multi-step-modal.js"></script>
		<link rel="stylesheet" href="assets1/plugins/jquery-confirm/jquery-confirm.min.css">
		<script src="assets1/plugins/jquery-confirm/jquery-confirm.min.js"></script>
		<script src="assets1/js/functions.js"></script>
		<input type="hidden" id="user_type" value="">
		<input type="hidden" id="language_option" value="en">
		
		<!-- login -->
					<script src="assets1/js/login.js"></script>
		
		<script src="assets1/js/script.js"></script>

		<!-- External js-->
																					
						<!---External js end-->

		

		<div class="modal account-modal fade" id="tab_login_modal" data-keyboard="false" data-backdrop="static">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header p-0 border-0">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger text-center"  id="flash_error_message1" ></div>
						<div id="login_form_div">
							<div class="account-content">
								<div class="account-box">
									<div class="login-right">
										<div class="login-header">
											<h3>Login</h3>
											<p class="text-muted">Access to our Laptop Store</p>
										</div>
										<div class="form-group">
											<label>Mobile Number</label>
											<div class="row">
												<div class="col-4 pr-0">
													<input type="hidden" name="login_mode" id="login_mode" value="1">
													<input type="hidden" name="csrf_token_name" value="d959e80547b8a7fe39c73254005a6241" id="login_csrf">
													<select name="countryCode" id="login_country_code" class="form-control login_country_code">
																													<option  data-countryCode="AS" value="684">American Samoa(+684)</option>
																													<option  data-countryCode="AD" value="376">Andorra (+376)</option>
																													<option  data-countryCode="AO" value="244">Angola (+244)</option>
																													<option  data-countryCode="AI" value="1264">Anguilla (+1264)</option>
																													<option  data-countryCode="AQ" value="672">Antarctica(+672)</option>
																													<option  data-countryCode="AG" value="1268">Antigua & Barbuda (+1268)</option>
																													<option  data-countryCode="AR" value="54">Argentina (+54)</option>
																													<option  data-countryCode="AU" value="61">Australia (+61)</option>
																													<option  data-countryCode="AT" value="43">Austria (+43)</option>
																													<option  data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
																													<option  data-countryCode="BS" value="1242">Bahamas (+1242)</option>
																													<option  data-countryCode="BH" value="973">Bahrain (+973)</option>
																													<option  data-countryCode="BD" value="880">Bangladesh (+880)</option>
																													<option  data-countryCode="BB" value="1246">Barbados (+1246)</option>
																													<option  data-countryCode="BY" value="375">Belarus (+375)</option>
																													<option  data-countryCode="BE" value="32">Belgium (+32)</option>
																													<option  data-countryCode="BZ" value="501">Belize (+501)</option>
																													<option  data-countryCode="BJ" value="229">Benin (+229)</option>
																													<option  data-countryCode="BM" value="1441">Bermuda (+1441)</option>
																													<option  data-countryCode="BT" value="975">Bhutan (+975)</option>
																													<option  data-countryCode="BO" value="591">Bolivia (+591)</option>
																													<option  data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
																													<option  data-countryCode="BW" value="267">Botswana (+267)</option>
																													<option  data-countryCode="BV" value="55">Bouvet Island(+55)</option>
																													<option  data-countryCode="BR" value="55">Brazil (+55)</option>
																													<option  data-countryCode="IO" value="246">British Indian Ocean Territory(+246)</option>
																													<option  data-countryCode="BN" value="673">Brunei (+673)</option>
																													<option  data-countryCode="BG" value="359">Bulgaria (+359)</option>
																													<option  data-countryCode="BF" value="226">Burkina Faso (+226)</option>
																													<option  data-countryCode="BI" value="257">Burundi (+257)</option>
																													<option  data-countryCode="KH" value="855">Cambodia (+855)</option>
																													<option  data-countryCode="CM" value="237">Cameroon (+237)</option>
																													<option  data-countryCode="CA" value="1">Canada (+1)</option>
																													<option  data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
																													<option  data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
																													<option  data-countryCode="CF" value="236">Central African Republic (+236)</option>
																													<option  data-countryCode="TD" value="235">Chad(+235)</option>
																													<option  data-countryCode="CL" value="56">Chile (+56)</option>
																													<option  data-countryCode="CN" value="86">China (+86)</option>
																													<option  data-countryCode="CX" value="61">Christmas Island(+61)</option>
																													<option  data-countryCode="CC" value="61">Cocos (Keeling) Islands(+61)</option>
																													<option  data-countryCode="CO" value="57">Colombia (+57)</option>
																													<option  data-countryCode="KM" value="269">Comoros (+269)</option>
																													<option  data-countryCode="CG" value="242">Congo (+242)</option>
																													<option  data-countryCode="CD" value="243">Congo The Democratic Republic Of The(+243)</option>
																													<option  data-countryCode="CK" value="682">Cook Islands (+682)</option>
																													<option  data-countryCode="CR" value="506">Costa Rica (+506)</option>
																													<option  data-countryCode="CI" value="225">Cote D'Ivoire (Ivory Coast)(+225)</option>
																													<option  data-countryCode="HR" value="385">Croatia (+385)</option>
																													<option  data-countryCode="CU" value="53">Cuba (+53)</option>
																													<option  data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
																													<option  data-countryCode="CZ" value="42">Czech Republic (+42)</option>
																													<option  data-countryCode="DK" value="45">Denmark (+45)</option>
																													<option  data-countryCode="DJ" value="253">Djibouti (+253)</option>
																													<option  data-countryCode="DM" value="1809">Dominica (+1809)</option>
																													<option  data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
																													<option  data-countryCode="TP" value="670">East Timor(+670)</option>
																													<option  data-countryCode="EC" value="593">Ecuador (+593)</option>
																													<option  data-countryCode="EG" value="20">Egypt (+20)</option>
																													<option  data-countryCode="SV" value="503">El Salvador (+503)</option>
																													<option  data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
																													<option  data-countryCode="ER" value="291">Eritrea (+291)</option>
																													<option  data-countryCode="EE" value="372">Estonia (+372)</option>
																													<option  data-countryCode="ET" value="251">Ethiopia (+251)</option>
																													<option  data-countryCode="XA" value="672">External Territories of Australia(+672)</option>
																													<option  data-countryCode="FK" value="500">Falkland Islands (+500)</option>
																													<option  data-countryCode="FO" value="298">Faroe Islands (+298)</option>
																													<option  data-countryCode="FJ" value="679">Fiji (+679)</option>
																													<option  data-countryCode="FI" value="358">Finland (+358)</option>
																													<option  data-countryCode="FR" value="33">France (+33)</option>
																													<option  data-countryCode="GF" value="594">French Guiana (+594)</option>
																													<option  data-countryCode="PF" value="689">French Polynesia (+689)</option>
																													<option  data-countryCode="TF" value="262">French Southern Territories(262)</option>
																													<option  data-countryCode="GA" value="241">Gabon (+241)</option>
																													<option  data-countryCode="GM" value="220">Gambia (+220)</option>
																													<option  data-countryCode="GE" value="7880">Georgia (+7880)</option>
																													<option  data-countryCode="DE" value="49">Germany (+49)</option>
																													<option  data-countryCode="GH" value="233">Ghana (+233)</option>
																													<option  data-countryCode="GI" value="350">Gibraltar (+350)</option>
																													<option  data-countryCode="GR" value="30">Greece (+30)</option>
																													<option  data-countryCode="GL" value="299">Greenland (+299)</option>
																													<option  data-countryCode="GD" value="1473">Grenada (+1473)</option>
																													<option  data-countryCode="GP" value="590">Guadeloupe (+590)</option>
																													<option  data-countryCode="GU" value="671">Guam (+671)</option>
																													<option  data-countryCode="GT" value="502">Guatemala (+502)</option>
																													<option  data-countryCode="XU" value="44">Guernsey and Alderney(44 1481)</option>
																													<option  data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
																													<option  data-countryCode="GN" value="224">Guinea (+224)</option>
																													<option  data-countryCode="GY" value="592">Guyana (+592)</option>
																													<option  data-countryCode="HT" value="509">Haiti (+509)</option>
																													<option  data-countryCode="HM" value="672">Heard and McDonald Islands</option>
																													<option  data-countryCode="HN" value="504">Honduras (+504)</option>
																													<option  data-countryCode="HK" value="852">Hong Kong (+852)</option>
																													<option  data-countryCode="HU" value="36">Hungary (+36)</option>
																													<option  data-countryCode="IS" value="354">Iceland (+354)</option>
																													<option selected data-countryCode="IN" value="91">India (+91)</option>
																													<option  data-countryCode="ID" value="62">Indonesia (+62)</option>
																													<option  data-countryCode="IR" value="98">Iran (+98)</option>
																													<option  data-countryCode="IQ" value="964">Iraq (+964)</option>
																													<option  data-countryCode="IE" value="353">Ireland (+353)</option>
																													<option  data-countryCode="IL" value="972">Israel (+972)</option>
																													<option  data-countryCode="IT" value="39">Italy (+39)</option>
																													<option  data-countryCode="JM" value="1876">Jamaica (+1876)</option>
																													<option  data-countryCode="JP" value="81">Japan (+81)</option>
																													<option  data-countryCode="XJ" value="44">Jersey(+44)</option>
																													<option  data-countryCode="JO" value="962">Jordan (+962)</option>
																													<option  data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
																													<option  data-countryCode="KE" value="254">Kenya (+254)</option>
																													<option  data-countryCode="KI" value="686">Kiribati (+686)</option>
																													<option  data-countryCode="KP" value="850">Korea North (+850)</option>
																													<option  data-countryCode="KR" value="82">Korea South (+82)</option>
																													<option  data-countryCode="KW" value="965">Kuwait (+965)</option>
																													<option  data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
																													<option  data-countryCode="LA" value="856">Laos (+856)</option>
																													<option  data-countryCode="LV" value="371">Latvia (+371)</option>
																													<option  data-countryCode="LB" value="961">Lebanon (+961)</option>
																													<option  data-countryCode="LS" value="266">Lesotho (+266)</option>
																													<option  data-countryCode="LR" value="231">Liberia (+231)</option>
																													<option  data-countryCode="LY" value="218">Libya (+218)</option>
																													<option  data-countryCode="LI" value="417">Liechtenstein (+417)</option>
																													<option  data-countryCode="LT" value="370">Lithuania (+370)</option>
																													<option  data-countryCode="LU" value="352">Luxembourg (+352)</option>
																													<option  data-countryCode="MO" value="853">Macao (+853)</option>
																													<option  data-countryCode="MK" value="389">Macedonia (+389)</option>
																													<option  data-countryCode="MG" value="261">Madagascar (+261)</option>
																													<option  data-countryCode="MW" value="265">Malawi (+265)</option>
																													<option  data-countryCode="MY" value="60">Malaysia (+60)</option>
																													<option  data-countryCode="MV" value="960">Maldives (+960)</option>
																													<option  data-countryCode="ML" value="223">Mali (+223)</option>
																													<option  data-countryCode="MT" value="356">Malta (+356)</option>
																													<option  data-countryCode="XM" value="44">Man (Isle of)(+44)</option>
																													<option  data-countryCode="MH" value="692">Marshall Islands (+692)</option>
																													<option  data-countryCode="MQ" value="596">Martinique (+596)</option>
																													<option  data-countryCode="MR" value="222">Mauritania (+222)</option>
																													<option  data-countryCode="MU" value="230">Mauritius(+230)</option>
																													<option  data-countryCode="YT" value="269">Mayotte (+269)</option>
																													<option  data-countryCode="MX" value="52">Mexico (+52)</option>
																													<option  data-countryCode="FM" value="691">Micronesia (+691)</option>
																													<option  data-countryCode="MD" value="373">Moldova (+373)</option>
																													<option  data-countryCode="MC" value="377">Monaco (+377)</option>
																													<option  data-countryCode="MN" value="976">Mongolia (+976)</option>
																													<option  data-countryCode="MS" value="1664">Montserrat (+1664)</option>
																													<option  data-countryCode="MA" value="212">Morocco (+212)</option>
																													<option  data-countryCode="MZ" value="258">Mozambique (+258)</option>
																													<option  data-countryCode="MM" value="95">Myanmar(+95)</option>
																													<option  data-countryCode="NA" value="264">Namibia (+264)</option>
																													<option  data-countryCode="NR" value="674">Nauru (+674)</option>
																													<option  data-countryCode="NP" value="977">Nepal (+977)</option>
																													<option  data-countryCode="NL" value="31">Netherlands (+31)</option>
																													<option  data-countryCode="AN" value="599">Netherlands Antilles(+599)</option>
																													<option  data-countryCode="NC" value="687">New Caledonia (+687)</option>
																													<option  data-countryCode="NZ" value="64">New Zealand (+64)</option>
																													<option  data-countryCode="NI" value="505">Nicaragua (+505)</option>
																													<option  data-countryCode="NE" value="227">Niger (+227)</option>
																													<option  data-countryCode="NG" value="234">Nigeria (+234)</option>
																													<option  data-countryCode="NU" value="683">Niue (+683)</option>
																													<option  data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
																													<option  data-countryCode="MP" value="1">Northern Mariana Islands(+1)</option>
																													<option  data-countryCode="NO" value="47">Norway (+47)</option>
																													<option  data-countryCode="OM" value="968">Oman (+968)</option>
																													<option  data-countryCode="PK" value="92">Pakistan(+92)</option>
																													<option  data-countryCode="PW" value="680">Palau (+680)</option>
																													<option  data-countryCode="PS" value="970">Palestinian Territory Occupied(+970)</option>
																													<option  data-countryCode="PA" value="507">Panama (+507)</option>
																													<option  data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
																													<option  data-countryCode="PY" value="595">Paraguay (+595)</option>
																													<option  data-countryCode="PE" value="51">Peru (+51)</option>
																													<option  data-countryCode="PH" value="63">Philippines (+63)</option>
																													<option  data-countryCode="PN" value="64">Pitcairn Island(+64)</option>
																													<option  data-countryCode="PL" value="48">Poland (+48)</option>
																													<option  data-countryCode="PT" value="351">Portugal (+351)</option>
																													<option  data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
																													<option  data-countryCode="QA" value="974">Qatar (+974)</option>
																													<option  data-countryCode="RE" value="262">Reunion (+262)</option>
																													<option  data-countryCode="RO" value="40">Romania (+40)</option>
																													<option  data-countryCode="RU" value="7">Russia (+7)</option>
																													<option  data-countryCode="RW" value="250">Rwanda (+250)</option>
																													<option  data-countryCode="LC" value="1758">Saint Lucia(+1758)</option>
																													<option  data-countryCode="PM" value="508">Saint Pierre and Miquelon(+508)</option>
																													<option  data-countryCode="VC" value="1784">Saint Vincent And The Grenadines(+1784)</option>
																													<option  data-countryCode="WS" value="685">Samoa(+685)</option>
																													<option  data-countryCode="SM" value="378">San Marino (+378)</option>
																													<option  data-countryCode="ST" value="239">Sao Tome & Principe (+239)</option>
																													<option  data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
																													<option  data-countryCode="SN" value="221">Senegal (+221)</option>
																													<option  data-countryCode="RS" value="381">Serbia(+381)</option>
																													<option  data-countryCode="SC" value="248">Seychelles (+248)</option>
																													<option  data-countryCode="SL" value="232">Sierra Leone (+232)</option>
																													<option  data-countryCode="SG" value="65">Singapore (+65)</option>
																													<option  data-countryCode="SK" value="421">Slovak Republic (+421)</option>
																													<option  data-countryCode="SI" value="386">Slovenia (+386)</option>
																													<option  data-countryCode="XG" value="44">Smaller Territories of the UK</option>
																													<option  data-countryCode="SB" value="677">Solomon Islands (+677)</option>
																													<option  data-countryCode="SO" value="252">Somalia (+252)</option>
																													<option  data-countryCode="ZA" value="27">South Africa (+27)</option>
																													<option  data-countryCode="GS" value="500">South Georgia(+500)</option>
																													<option  data-countryCode="SS" value="211">South Sudan(+211)</option>
																													<option  data-countryCode="ES" value="34">Spain (+34)</option>
																													<option  data-countryCode="LK" value="94">Sri Lanka (+94)</option>
																													<option  data-countryCode="SH" value="290">St. Helena (+290)</option>
																													<option  data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
																													<option  data-countryCode="SD" value="249">Sudan (+249)</option>
																													<option  data-countryCode="SR" value="597">Suriname (+597)</option>
																													<option  data-countryCode="SJ" value="47">Svalbard And Jan Mayen Islands(+41)</option>
																													<option  data-countryCode="SZ" value="268">Swaziland (+268)</option>
																													<option  data-countryCode="SE" value="46">Sweden (+46)</option>
																													<option  data-countryCode="CH" value="41">Switzerland (+41)</option>
																													<option  data-countryCode="SY" value="963">Syria(+963)</option>
																													<option  data-countryCode="TW" value="886">Taiwan (+886)</option>
																													<option  data-countryCode="TJ" value="7">Tajikstan (+7)</option>
																													<option  data-countryCode="TZ" value="255">Tanzania(+255)</option>
																													<option  data-countryCode="TH" value="66">Thailand (+66)</option>
																													<option  data-countryCode="TG" value="228">Togo (+228)</option>
																													<option  data-countryCode="TK" value="690">Tokelau(+690)</option>
																													<option  data-countryCode="TO" value="676">Tonga (+676)</option>
																													<option  data-countryCode="TT" value="1868">Trinidad & Tobago (+1868)</option>
																													<option  data-countryCode="TN" value="216">Tunisia (+216)</option>
																													<option  data-countryCode="TR" value="90">Turkey (+90)</option>
																													<option  data-countryCode="TM" value="7">Turkmenistan (+7)</option>
																													<option  data-countryCode="TC" value="1649">Turks & Caicos Islands (+1649)</option>
																													<option  data-countryCode="TV" value="688">Tuvalu (+688)</option>
																													<option  data-countryCode="UG" value="256">Uganda (+256)</option>
																													<option  data-countryCode="GB" value="44">UK (+44)</option>
																													<option  data-countryCode="UA" value="380">Ukraine (+380)</option>
																													<option  data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
																													<option  data-countryCode="UM" value="246">United States Minor Outlying Islands(+246)</option>
																													<option  data-countryCode="UY" value="598">Uruguay (+598)</option>
																													<option  data-countryCode="US" value="1">USA (+1)</option>
																													<option  data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
																													<option  data-countryCode="VU" value="678">Vanuatu (+678)</option>
																													<option  data-countryCode="VA" value="379">Vatican City (+379)</option>
																													<option  data-countryCode="VE" value="58">Venezuela (+58)</option>
																													<option  data-countryCode="VN" value="84">Vietnam (+84)</option>
																													<option  data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
																													<option  data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
																													<option  data-countryCode="WF" value="681">Wallis & Futuna (+681)</option>
																													<option  data-countryCode="EH" value="212">Western Sahara(+212)</option>
																													<option  data-countryCode="YE" value="969">Yemen (North)(+969)</option>
																													<option  data-countryCode="YU" value="38">Yugoslavia(+38)</option>
																													<option  data-countryCode="ZM" value="260">Zambia (+260)</option>
																													<option  data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
																											</select>
												</div>
												<div class="col-8">
													<input class="form-control login_mobile" type="text" name="login_mobile" id="login_mobile" placeholder="Enter Mobile No" min="10" max="10">
													<span id="mobile_no_error"></span>
												</div>
											</div>
										</div>
										<button class="login-btn" id="login_submit" type="submit">Login</button>
									</div>
								</div>
							</div>
						</div>

						<div class="step-2" data-step="2" id="otp_final_div" >
							<div class="login-header">
								<h3>OTP</h3>
								<p class="text-muted">Verification your account</p>
							</div>
							<div class="form-group">
								<input type="hidden" name="" id="login_country_code_hide">
								<input type="hidden" name="" id="login_mobile_hide">
								<input type="hidden" name="" id="login_mode_hide">
							</div>
							<div class="form-group">								
																	<div class="alert alert-danger text-center" role="alert">
										We have used default otp for demo purpose.<br> <strong>Default OTP 1234</strong>
									</div>
																<input type="text" class="form-control form-control-lg no_only" autocomplete="off" maxlength="4" minlength="4" placeholder="Enter OTP Here.." name="otp_numbers" id='login_otp'>
								<span for='otp_number' id='otp_error_msg_login'></span>
							</div>
														<div>
								<button id='registration_finals' type="button" class="login-btn" >Enter</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Cancel Modal -->
		<div id="cancelModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Cancelation Reason</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p class="cancel_reason"></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Cancel Modal -->
		<span id="success_message"></span>
		<span id="error_message"></span>
        <script>
            $('#search-blk').autocomplete(
            {
                source:function(request,response)
                {
                    $.ajax(
                    {
                        url:'<?php echo base_url(); ?>Home/getServices',
                        data:{val:request.term},
                        type:'post',
                        success:function(res)
                        {
                            let parse = JSON.parse(res);
                            if(!parse.length){
                                var result = [
                                    {
                                        label: 'No matches found', 
                                        value: response.term
                                    }
                                ];
                                response(result);
                            }else
                            {
                                response($.map(parse, function (item) {
                                    return {
                                        label: item.service_name,
                                        value: item.service_name,
                                        slug:item.slug,
                                        id:item.id
                                    }
                                }));
                            }
                        }
                    })
                },
                select:function(event,ui)
                {
                    $('#serviceautoslug').val(ui.item.slug);
                    $('#serviceauto').val(ui.item.id);
                }
            })
            
            $('#cityauto').autocomplete({
                source:function(request,response)
                {
                    $.ajax(
                    {
                        url:'<?php echo base_url(); ?>Home/getCitiesForAutoComplete',
                        data:{val:request.term},
                        type:'post',
                        success:function(res)
                        {
                            let parse = JSON.parse(res);
                            if(!parse.length){
                                var result = [
                                    {
                                        label: 'No matches found', 
                                        value: response.term
                                    }
                                ];
                                response(result);
                            }else
                            {
                                response($.map(parse, function (item) {
                                    return {
                                        label: item.city,
                                        value: item.city,
                                        id:item.id
                                    }
                                }));
                            }
                        }
                    })
                },
                select:function(event,ui)
                {
                    $('#cityautovalue').val(ui.item.label);
                }
            })

            function change_language(e){
        var lg =  $(e).attr('lang');
        var tag =  $(e).attr('lang_tag'); 
        
        var csrf_token = $('#csrf_lang').val();
        
//        alert(csrf_token);
        
      	$.post(
      		'admin/language/change_language.html',
      		{
      			lg:lg,
      			tag:tag,
                        csrf_token_name: csrf_token
      		},
      		function(res){
           location.reload();
        })    

  	}
        
        function user_currency(code){
            
      if(code!=""){
          
          var csrf_token = $('#csrf_lang').val();
        $.ajax({
           type:'POST',
           url: 'https://truelysell.com/ajax/add_user_currency',
           data :  {code:code,csrf_token_name: csrf_token},
           dataType:'json',
           success:function(response)
           {  
             if(response.success)
             {
                 
               location.reload();
           }
           else {
               
            location.reload();
        }
    }
});
    }
}

// function getSubcategory() {
//     var category_id = $('#categories').val();
//     var csrf_token = $('#csrf_lang').val();

//     $.ajax({
//         type: "POST",
//         url: 'https://truelysell.com/user/service/get_subcategory',
//         data:{id:category_id,csrf_token_name:csrf_token}, 
//         beforeSend :function(){
//             $("#subcategories option:gt(0)").remove(); 
//             $('#subcategories').find("option:eq(0)").html("Please wait..");
//         },                         
//         success: function (data) {   
//             $('#subcategories').find("option:eq(0)").html("Select SubCategory");
//             var obj=jQuery.parseJSON(data);       
//             $(obj).each(function(){
//                 var option = $('<option />');
//                 option.attr('value', this.value).text(this.label);           
//                 $('#subcategories').append(option);
//             });       
//         }
//     });
// }

$('#search').click(function()
{
    // let cityval = $('#cityautovalue').val();
    let slug = $('#serviceautoslug').val();
    let citvalwithgoogle = $('#citywithgoogleapi').val();
    let serviceId = $('#serviceauto').val();
    if(slug == '' || citvalwithgoogle == '')
    {
        alert('Please Select Service Name and Location');
    }else
    {
        $.ajax({
            url:'<?php echo base_url(); ?>Home/check_location',
            data:{city:citvalwithgoogle},
            type:'post',
            success:function(res)
            {
                if(res.isAvailable == 0)
                {
                    alert('No Services Available On Your Location');
                }
                else
                {
                    location.href="<?php echo base_url(); ?>service_details/" + citvalwithgoogle + '/' + slug + '/' + serviceId;
                }
            }
        })
    }
})

$('.get_services').click(function()
{
    let data = {};
    if($('#categories').val() != '')
    {
        data.category = $('#categories').val();
    }else
    {
        data.category = '';
    }
    if($('#subcategories').val() != '')
    {
        data.subcategory = $('#subcategories').val();
    }else
    {
        data.subcategory = '';
    }
    location.href='<?php echo base_url(); ?>Home/service_type?catId='+data.category + '&subCatId='+data.subcategory;
})

$('#locationpopup').click(function()
{
    $.ajax({
        url:'<?php echo base_url(); ?>Home/getCities',
        type:'get',
        success:function(res)
        {
            let parse = JSON.parse(res);
            if(parse.length > 0)
            {
                var html = `<div class="row">`;
                for(let i=0;i<parse.length;i++)
                {
                    html += `<div class="col-md-2" title="`+parse[i].city+`" onclick="addCityToSession('`+parse[i].city+`')" style="height:100px;cursor:pointer;width:50%;"><div class="row"><div class="col-md-12"><img src="<?php echo base_url(); ?>` + parse[i].image +`" style="height:50px;width:50px;"></div></div><div class="row mt-2"><div class="col-md-12"><p>`+ parse[i].city + `</p></div></div></div>`;
                }
                html += '</div>';
                Swal.fire({
                  title: 'Choose Your City',
                  text: 'This would help us in providing you quick service',
                  customClass:{
                      popup:'locpop'
                  },
                  showConfirmButton:false,
                  showCloseButton:true,
                  html:html
                })          
            }
        }
    })
})

function addCityToSession(city)
{
    $.ajax({
        url:'<?php echo base_url(); ?>Home/saveCityNameToSession',
        data:{community:city},
        type:'post',
        success:function(res)
        {
           location.href="<?php echo base_url(); ?>"
        }
    })
}

function delete_img(img_id) {
	var csrf_token = $('#csrf_lang').val();
	$('#service_img_'+img_id).remove();
   	$.ajax({
        type: "POST",
        url: 'https://truelysell.com/user/service/delete_service_img',
        data:{img_id:img_id,csrf_token_name:csrf_token},                        
        success: function (data) {   
            console.log(data); return false;    
        }
    });
}

</script>