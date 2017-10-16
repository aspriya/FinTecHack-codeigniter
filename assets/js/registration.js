$( document ).ready(function() {
    $('#member3').hide();
    $('#member4').hide();

    $('#members').change(function() {
        hide_show_member_details();
    });

    $('#register_now').click(function() {

    if(validate()){
        var auth_token = $("#auth_token").val();
        var group_name = $("#group_name").val();
        var university = $("#university").val();
        var members = $("#members").val();
        var leader_name = $("#leader_name").val();
        var leader_university_id = $("#leader_university_id").val();
        var leader_contact = $("#leader_contact").val();
        var leader_email = $("#leader_email").val();
        var leader_veg_non_veg = $("input[name=leader_veg_non_veg]:checked").val();
        var leader_tshirt = $("#leader_tshirt").val();
        var member_2_name = $("#member_2_name").val();
        var member_2_university_id = $("#member_2_university_id").val();
        var member_2_contact = $("#member_2_contact").val();
        var member_2_email = $("#member_2_email").val();
        var member_2_veg_non_veg = $("input[name=member_2_veg_non_veg]:checked").val();
        var member_2_tshirt = $("#member_2_tshirt").val();
        var member_3_name = $("#member_3_name").val();
        var member_3_university_id = $("#member_3_university_id").val();
        var member_3_contact = $("#member_3_contact").val();
        var member_3_email = $("#member_3_email").val();
        var member_3_veg_non_veg = $("input[name=member_3_veg_non_veg]:checked").val();
        var member_3_tshirt = $("#member_3_tshirt").val();
        var member_4_name = $("#member_4_name").val();
        var member_4_university_id = $("#member_4_university_id").val();
        var member_4_contact = $("#member_4_contact").val();
        var member_4_email = $("#member_4_email").val();
        var member_4_veg_non_veg = $("input[name=member_4_veg_non_veg]:checked").val();
        var member_4_tshirt = $("#member_4_tshirt").val();
        var idea_title = $("#idea_title").val();
        var idea_description = $("#idea_description").val();
        var terms_accept = $("#terms_accept").is(':checked');


        $.ajax({
        type: 'POST',
        url: 'register',
        ContentType: 'application/json',
        dataType: 'json',
        data: {'auth_token': auth_token, 'group_name': group_name, 'university': university, 'members': members, 'leader_name': leader_name, 'leader_university_id': leader_university_id,
        'leader_contact': leader_contact, 'leader_email': leader_email, 'leader_veg_non_veg': leader_veg_non_veg, 'leader_tshirt': leader_tshirt,
    'member_2_name': member_2_name, 'member_2_university_id': member_2_university_id, 'member_2_contact': member_2_contact, 'member_2_email': member_2_email,
'member_2_veg_non_veg': member_2_veg_non_veg, 'member_2_tshirt': member_2_tshirt, 'member_3_name': member_3_name, 'member_3_university_id': member_3_university_id, 
'member_3_contact': member_3_contact, 'member_3_email': member_3_email, 'member_3_veg_non_veg': member_3_veg_non_veg, 'member_3_tshirt': member_3_tshirt, 
'member_4_name': member_4_name, 'member_4_university_id': member_4_university_id, 'member_4_contact': member_4_contact, 'member_4_email': member_4_email,
'member_4_veg_non_veg': member_4_veg_non_veg, 'member_4_tshirt': member_4_tshirt, 'idea_title': idea_title, 'idea_description': idea_description, 'terms_accept': terms_accept},
        success:function(data){
            $("#submit_error").html("");
            $("#submit_success").html("Successfully Registered");
            setTimeout(function (){

            window.location.assign("http://www.fintechack.com");

            }, 5000);
        }
        });
    }

    else{ 
        $("#submit_error").html("Form details invalid");
        
    }
        
    });


});


function hide_show_member_details(){
    var members = $("#members").val();
    if(members == "2"){
        $('#member3').fadeOut();
        $('#member4').fadeOut();
    }
    else if(members == "3"){
            $('#member3').fadeIn();
            $('#member4').fadeOut();
    }
    else{
        $('#member3').fadeIn();
            $('#member4').fadeIn();
    }
}

  function validate() {
        var auth_token = $("#auth_token").val();
        var member_3_name = $("#member_2_name").val();
        var member_3_university_id = $("#member_2_university_id").val();
        var member_3_contact = $("#member_2_contact").val();
        var member_3_email = $("#member_2_email").val();
        var member_3_veg_non_veg = $("input[name=member_2_veg_non_veg]:checked").val();
        var member_3_tshirt = $("#member_2_tshirt").val();
        var member_4_name = $("#member_2_name").val();
        var member_4_university_id = $("#member_2_university_id").val();
        var member_4_contact = $("#member_2_contact").val();
        var member_4_email = $("#member_2_email").val();
        var member_4_veg_non_veg = $("input[name=member_2_veg_non_veg]:checked").val();
        var member_4_tshirt = $("#member_2_tshirt").val();
        var idea_title = $("#idea_title").val();
        var idea_description = $("#idea_description").val();
        var terms_accept = $("#terms_accept").is(':checked');

        var group_name_validity = validate_group_name();
        var university_validity = validate_university();
        var members_count_validity = validate_members_count();
        var leader_validity = validate_leader();
        var member_2_validity = validate_member2();
        var member_3_validity = validate_member3();
        var member_4_validity = validate_member4();
        var idea_title_validity = validate_idea_title();
        var idea_description_validity = validate_idea_description();
        var terms_accept_validity = validate_terms_accept();
        var file_upload_validity = validate_file_upload();

    if(group_name_validity && university_validity && members_count_validity && leader_validity && member_2_validity && member_3_validity && member_4_validity && idea_title_validity && idea_description_validity && terms_accept_validity && file_upload_validity){
        return true;
    }
    else{
        return false;
    }
}

 function validate_group_name() {
    var validity = true;
    var group_name = $("#group_name").val();
    if(group_name.trim() == ""){
        $("#group_name_error").html("Too short");
        $("#group_name").addClass("invalid-data");
        validity = false;
    }
    else if(group_name.length > 100){
        $("#group_name_error").html("Too long");
        $("#group_name").addClass("invalid-data");
        validity = false;
    }
    else{
        $("#group_name_error").html("");
        $("#group_name").removeClass("invalid-data");
        validity = true;
    }
    return validity;
 }

function validate_university() {
    var validity = true;
    var university = $("#university").val();
    if(university.trim() == ""){
        $("#university_error").html("Too short");
        $("#university").addClass("invalid-data");
        validity = false;
    }
    else if(university.length > 255){
        $("#university_error").html("Too long");
        $("#university").addClass("invalid-data");
        validity = false;
    }
    else{
        $("#university_error").html("");
        $("#university").removeClass("invalid-data");
        validity = true;
    }
    return validity;
 }

function validate_members_count(){
    var validity = true;
    var members = $("#members").val();
    if(members != "2" && members != "3" && members != "4"){
        members_error
        $("#members_error").html("Invalid members");
        $("#members").addClass("invalid-data");
        validity = false;
    }
    else{
        $("#members_error").html("");
        $("#members").removeClass("invalid-data");
        validity = true;
    }
    return validity;
}

function validate_leader(){
    var validity = true;
    var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var leader_name = $("#leader_name").val();
    var leader_university_id = $("#leader_university_id").val();
    var leader_contact = $("#leader_contact").val();
    var leader_email = $("#leader_email").val();
    var leader_veg_non_veg = $("input[name=leader_veg_non_veg]:checked").val();
    var leader_tshirt = $("#leader_tshirt").val();
    if(leader_name.trim() == "" || leader_name.length > 255){
        $("#leader_error").html("Invalid name");
        validity = false;
    }
    else if(leader_university_id.trim() == "" || leader_university_id.length > 50){
        $("#leader_error").html("Invalid University ID");
        validity = false;
    }
    else if(leader_contact.trim() == "" || isNaN(leader_contact) || leader_contact.length != 10){
        $("#leader_error").html("Invalid Contact No");
        validity = false;
    }
    else if(!emailregex.test(leader_email)){
        $("#leader_error").html("Invalid Email");
        validity = false;
    }
    else if(typeof $("input[name=leader_veg_non_veg]:checked").val() == "undefined"){
        $("#leader_error").html("Select Veg or Non-veg");
        validity = false;
    }
    else if(leader_veg_non_veg != "veg" && leader_veg_non_veg != "non_veg"){
        $("#leader_error").html("Invalid Meal Type");
        validity = false;
    }
    else if(leader_tshirt != "xs" && leader_tshirt != "s" && leader_tshirt != "m" && leader_tshirt != "l" && leader_tshirt != "xl"){
        $("#leader_error").html("Invalid T shir Size");
        validity = false;
    }
    else {
        $("#leader_error").html("");
        validity = true;
    }

    return validity;
}

function validate_member2(){
    var validity = true;
    var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var member_2_name = $("#member_2_name").val();
    var member_2_university_id = $("#member_2_university_id").val();
    var member_2_contact = $("#member_2_contact").val();
    var member_2_email = $("#member_2_email").val();
    var member_2_veg_non_veg = $("input[name=member_2_veg_non_veg]:checked").val();
    var member_2_tshirt = $("#member_2_tshirt").val();
    if(member_2_name.trim() == "" || member_2_name.length > 255){
        $("#member_2_error").html("Invalid name");
        validity = false;
    }
    else if(member_2_university_id.trim() == "" || member_2_university_id.length > 50){
        $("#member_2_error").html("Invalid University ID");
        validity = false;
    }
    else if(member_2_contact.trim() == "" || isNaN(member_2_contact) || member_2_contact.length != 10){
        $("#member_2_error").html("Invalid Contact No");
        validity = false;
    }
    else if(!emailregex.test(member_2_email)){
        $("#member_2_error").html("Invalid Email");
        validity = false;
    }
    else if(typeof $("input[name=member_2_veg_non_veg]:checked").val() == "undefined"){
        $("#member_2_error").html("Select Veg or Non-veg");
        validity = false;
    }
    else if(member_2_veg_non_veg != "veg" && member_2_veg_non_veg != "non_veg"){
        $("#member_2_error").html("Invalid Meal Type");
        validity = false;
    }
    else if(member_2_tshirt != "xs" && member_2_tshirt != "s" && member_2_tshirt != "m" && member_2_tshirt != "l" && member_2_tshirt != "xl"){
        $("#member_2_error").html("Invalid T shir Size");
        validity = false;
    }
    else {
        $("#member_2_error").html("");
        validity = true;
    }

    return validity;
}


function validate_member3(){
    var validity = true;
    var members = $("#members").val();
    if(members == "3"){
        var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var member_3_name = $("#member_3_name").val();
        var member_3_university_id = $("#member_3_university_id").val();
        var member_3_contact = $("#member_3_contact").val();
        var member_3_email = $("#member_3_email").val();
        var member_3_veg_non_veg = $("input[name=member_3_veg_non_veg]:checked").val();
        var member_3_tshirt = $("#member_3_tshirt").val();
        if(member_3_name.trim() == "" || member_3_name.length > 255){
            $("#member_3_error").html("Invalid name");
            validity = false;
        }
        else if(member_3_university_id.trim() == "" || member_3_university_id.length > 50){
            $("#member_3_error").html("Invalid University ID");
            validity = false;
        }
        else if(member_3_contact.trim() == "" || isNaN(member_3_contact) || member_3_contact.length != 10){
            $("#member_3_error").html("Invalid Contact No");
            validity = false;
        }
        else if(!emailregex.test(member_3_email)){
            $("#member_3_error").html("Invalid Email");
            validity = false;
        }
        else if(typeof $("input[name=member_2_veg_non_veg]:checked").val() == "undefined"){
            $("#member_3_error").html("Select Veg or Non-veg");
            validity = false;
        }
        else if(member_3_veg_non_veg != "veg" && member_3_veg_non_veg != "non_veg"){
            $("#member_3_error").html("Invalid Meal Type");
            validity = false;
        }
        else if(member_3_tshirt != "xs" && member_2_tshirt != "s" && member_3_tshirt != "m" && member_3_tshirt != "l" && member_3_tshirt != "xl"){
            $("#member_3_error").html("Invalid T shir Size");
            validity = false;
        }
        else {
            $("#member_3_error").html("");
            validity = true;
        }

    }
    else {

    }

    return validity;
}

function validate_member4(){
    var validity = true;
    var members = $("#members").val();
    if(members == "4"){
        var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var member_4_name = $("#member_4_name").val();
        var member_4_university_id = $("#member_4_university_id").val();
        var member_4_contact = $("#member_4_contact").val();
        var member_4_email = $("#member_4_email").val();
        var member_4_veg_non_veg = $("input[name=member_4_veg_non_veg]:checked").val();
        var member_4_tshirt = $("#member_4_tshirt").val();
        if(member_4_name.trim() == "" || member_4_name.length > 255){
            $("#member_4_error").html("Invalid name");
            validity = false;
        }
        else if(member_4_university_id.trim() == "" || member_4_university_id.length > 50){
            $("#member_4_error").html("Invalid University ID");
            validity = false;
        }
        else if(member_4_contact.trim() == "" || isNaN(member_4_contact) || member_4_contact.length != 10){
            $("#member_4_error").html("Invalid Contact No");
            validity = false;
        }
        else if(!emailregex.test(member_4_email)){
            $("#member_4_error").html("Invalid Email");
            validity = false;
        }
        else if(typeof $("input[name=member_2_veg_non_veg]:checked").val() == "undefined"){
            $("#member_4_error").html("Select Veg or Non-veg");
            validity = false;
        }
        else if(member_4_veg_non_veg != "veg" && member_4_veg_non_veg != "non_veg"){
            $("#member_4_error").html("Invalid Meal Type");
            validity = false;
        }
        else if(member_4_tshirt != "xs" && member_4_tshirt != "s" && member_4_tshirt != "m" && member_4_tshirt != "l" && member_4_tshirt != "xl"){
            $("#member_4_error").html("Invalid T shir Size");
            validity = false;
        }
        else {
            $("#member_4_error").html("");
            validity = true;
        }

    }
    else {

    }

    return validity;
}

function validate_idea_title() {
    var validity = true;
    var idea_title = $("#idea_title").val();
    if(idea_title.trim() == ""){
        $("#idea_title_error").html("Too short");
        $("#idea_title").addClass("invalid-data");
        validity = false;
    }
    else if(idea_title.length > 255){
        $("#idea_title_error").html("Too long");
        $("#idea_title").addClass("invalid-data");
        validity = false;
    }
    else{
        $("#idea_title_error").html("");
        $("#idea_title").removeClass("invalid-data");
        validity = true;
    }
    return validity;
}

function validate_idea_description() {
    var validity = true;
    var idea_description = $("#idea_description").val();
    if(idea_description.trim() < "10"){
        $("#idea_description_error").html("Too short");
        $("#idea_description").addClass("invalid-data");
        validity = false;
    }
    else if(idea_description.length > 50000){
        $("#idea_description_error").html("Too long");
        $("#idea_description").addClass("invalid-data");
        validity = false;
    }
    else{
        $("#idea_description_error").html("");
        $("#idea_description").removeClass("invalid-data");
        validity = true;
    }
    return validity;
}

function validate_terms_accept(){
    var validity = true;
    var terms_accept = $("#terms_accept").is(':checked');
    if(terms_accept == false){
        $("#terms_accept_error").html("Accept the agreement");
        $("#terms_accept").addClass("invalid-data");
        validity = false;
    }
    else{
        $("#terms_accept_error").html("");
        $("#terms_accept").removeClass("invalid-data");
        validity = true;
    }
    return validity;
}

function validate_file_upload(){
    var validity = true;
    var input = document.getElementById("file_upload");
    var attached_file = input.files[0];
    if(input.files.length == 0){
        $("#file_upload_error").html("Attach the proposal");
        $("#file_upload").addClass("invalid-data");
        validity = false;
    }
 //   else if(attached_file.size > 1024 * 5){
   //     $("#file_upload_error").html("Size exceeds 5 MB");
     //   $("#file_upload").addClass("invalid-data");
       // validity = false;
    }
    else{
        $("#file_upload_error").html("");
        $("#file_upload").removeClass("invalid-data");
        validity = true;
    }
    return validity;
}

function go_to_home_page(){
    window.location.assign("http://www.fintechack.com");
}

