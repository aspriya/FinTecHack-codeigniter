<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/form-validation.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/form-basic.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/registration.js"></script>


</head>

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->
        
        <form class="form-basic" onsubmit="return validate()" action="register" method="post" enctype="multipart/form-data">    

            <div class="form-title-row">
                <h1>FinTechHack Registration</h1>
            </div>
            <input type="hidden" value="<?php echo $auth_token?>" name="auth_token" id="auth_token"/>

            <div class="form-row form-invalid-data">
                <label>
                    <span>Group name</span>
                    <input type="text" name="group_name" id="group_name">
                </label>
                <div class="error_message">
                        <p id="group_name_error"></p>
                </div>
            </div>

            <div class="form-row">
                <label>
                    <span>University/Institution</span>
                    <input type="text" name="university" id="university">
                </label>
                <div class="error_message">
                        <p id="university_error"></p>
                </div>
            </div>

            <div class="form-row">
                <label>
                    <span>Number of members</span>
                    <select name="members" id="members">
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                    </select>
                </label>
                <div class="error_message">
                        <p id="members_error"></p>
                </div>
            </div>

            <hr>
             <br/>
            <h3> Member Details </h3>
            <h4>Member 1 (Leader) </h4>
                <div class="error_message">
                        <p id="leader_error"></p>
                </div>
             <br/>
            <div class="form-row">
                <label>
                    <span>Name</span>
                    <input type="text" name="leader_name" id="leader_name">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>University Regisration Number</span>
                    <input type="text" name="leader_university_id" id="leader_university_id">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Contact Number</span>
                    <input type="text" name="leader_contact" id="leader_contact">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="leader_email" id="leader_email">
                </label>
            </div>

            <div class="form-row">
                <label><span>Veg/Non-Veg</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" name="leader_veg_non_veg" value="veg">
                            <span>Veg</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="leader_veg_non_veg" value="non_veg">
                            <span>Non-veg</span>
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-row">
                <label>
                    <span>T shirt size</span>
                    <select name="leader_tshirt" id="leader_tshirt">
                        <option value="xs">Extra Small</option>
                        <option value="s">Small</option>
                        <option value="m" selected>Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">Extra Large</option>
                    </select>
                </label>
            </div>

            <div id="member2">
                <h4>Member 2</h4>
                <div class="error_message">
                        <p id="member_2_error"></p>
                </div>
                <div class="form-row">
                    <label>
                        <span>Name</span>
                        <input type="text" name="member_2_name" id="member_2_name">
                    </label>
                </div>
                <div class="form-row">
                <label>
                    <span>University Regisration Number</span>
                    <input type="text" name="member_2_university_id" id="member_2_university_id">
                </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Contact Number</span>
                        <input type="text" name="member_2_contact" id="member_2_contact">
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Email</span>
                        <input type="email" name="member_2_email" id="member_2_email">
                    </label>
                </div>

                <div class="form-row">
                    <label><span>Veg/Non-Veg</span></label>
                    <div class="form-radio-buttons">

                        <div>
                            <label>
                                <input type="radio" name="member_2_veg_non_veg" value="veg">
                                <span>Veg</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="member_2_veg_non_veg" value="non_veg">
                                <span>Non-veg</span>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-row">
                <label>
                    <span>T shirt size</span>
                    <select name="member_2_tshirt" id="member_2_tshirt">
                       <option value="xs">Extra Small</option>
                        <option value="s">Small</option>
                        <option value="m" selected>Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">Extra Large</option>
                    </select>
                </label>
                </div>
            </div>

                <div id="member3">
                <h4>Member 3</h4>
                <div class="error_message">
                        <p id="member_3_error"></p>
                </div>
                <div class="form-row">
                    <label>
                        <span>Name</span>
                        <input type="text" name="member_3_name" id="member_3_name">
                    </label>
                </div>
                <div class="form-row">
                <label>
                    <span>University Regisration Number</span>
                    <input type="text" name="member_3_university_id" id="member_3_university_id">
                </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Contact Number</span>
                        <input type="text" name="member_3_contact" id="member_3_contact">
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Email</span>
                        <input type="email" name="member_3_email" id="member_3_email">
                    </label>
                </div>

                <div class="form-row">
                    <label><span>Veg/Non-Veg</span></label>
                    <div class="form-radio-buttons">

                        <div>
                            <label>
                                <input type="radio" name="member_3_veg_non_veg" value="veg">
                                <span>Veg</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="member_3_veg_non_veg" value="non_veg">
                                <span>Non-veg</span>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-row">
                <div class="error_message">
                        <p id="group_name_error"></p>
                </div>
                <label>
                    <span>T shirt size</span>
                    <select name="member_3_tshirt" id="member_3_tshirt">
                      <option value="xs">Extra Small</option>
                        <option value="s">Small</option>
                        <option value="m" selected>Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">Extra Large</option>
                    </select>
                </label>
                </div>
            </div>

            <div id="member4">
                <h4>Member 4</h4>
                <br/>
                <div class="error_message">
                        <p id="member_4_error"></p>
                </div>
                <div class="form-row">
                    <label>
                        <span>Name</span>
                        <input type="text" name="member_4_name" id="member_4_name">
                    </label>
                </div>
                <div class="form-row">
                <label>
                    <span>University Regisration Number</span>
                    <input type="text" name="member_4_university_id" id="member_4_university_id">
                </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Contact Number</span>
                        <input type="text" name="member_4_contact" id="member_4_contact">
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span>Email</span>
                        <input type="email" name="member_4_email" id="member_4_email">
                    </label>
                </div>

                <div class="form-row">
                    <label><span>Veg/Non-Veg</span></label>
                    <div class="form-radio-buttons">

                        <div>
                            <label>
                                <input type="radio" name="member_4_veg_non_veg" value="veg">
                                <span>Veg</span>
                            </label>
                        </div>

                        <div>
                            <label>
                                <input type="radio" name="member_4_veg_non_veg" value="non_veg">
                                <span>Non-veg</span>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-row">
                <label>
                    <span>T shirt size</span>
                    <select name="member_4_tshirt" id="member_4_tshirt">
                       <option value="xs">Extra Small</option>
                        <option value="s">Small</option>
                        <option value="m" selected>Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">Extra Large</option>
                    </select>
                </label>
                </div>
            </div>

            <br/>
            <hr/>
            <br/>

            <div class="form-row">
                <label>
                    <span>Idea Title</span>
                    <input type="text" name="idea_title" id="idea_title">
                </label>
                <div class="error_message">
                        <p id="idea_title_error"></p>
                </div>
            </div>

            <div class="form-row">
                <label>
                    <span>Biref Description of Idea</span>
                    <textarea name="idea_description" id="idea_description"></textarea>
                </label>
                <div class="error_message">
                        <p id="idea_description_error"></p>
                </div>
            </div>

            <div class="form-row">
                <label>
                    <span>Attach Proposal</span>
                    <input type="file" accept=".pdf" name="file_upload" id="file_upload">
                </label>
                <div class="error_message">
                        <p id="file_upload_error"></p>
                </div>
            </div>

            <div class="form-row">
                <label>
                    <span></span>
                    <input type="checkbox" name="terms_accept" id="terms_accept"> Accept Rules and Conditions
                </label>
                <div class="error_message">
                        <p id="terms_accept_error"></p>
                </div>
            </div>

 
            <h3 align="center" style="color: red;" id="submit_error"> </h3>
            <h3 align="center" style="color: red;" id="submit_success"> </h3>
            
            <div class="form-row">
                <button type="submit" class="register_button">Register Now</button>
            </div>
            <div class="form-row">
                <button type="button" id="go_back_button" onclick="go_to_home_page()">Go Back</button>
            </div>

        </form>

    </div>



</body>

</html>
