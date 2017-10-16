 <?php
        
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        ?>
<html>

    <head>

       


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <title>FinTecHack 2k17</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Start The SEO Framework by Sybre Waaijer -->

        <meta name="description" content="Sri Lanka's 1st Fintech hackathon - Nations Trust FinTech Hack 2017">
        <meta property="og:image" content="Fintech Hack 2017 @ Kaffeine Lab by Nations Trust Bank PLC">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Sri Lanka's 1st Fintech hackathon @ Kaffeine Lab by Nations Trust Bank PLC">
        <meta property="og:description" content="Nations Trust FinTecHack 2017 in collaboration with the University of Moratuwa and Sri Lanka Association for Artificial Intelligence">
        <meta property="og:url" content="www.fintechack.com">
        <meta property="og:site_name" content="Nations Trust FinTecHack">
        <meta name="twitter:card" content="Nations Trust FinTecHack 2017 in collaboration with the University of Moratuwa and Sri Lanka Association for Artificial Intelligence">
        <meta name="twitter:title" content="Sri Lanka's 1st Fintech hackathon - Nations Trust FinTech Hack 2017">
        <meta name="twitter:description" content="Nations Trust FinTecHack 2017 in collaboration with the University of Moratuwa and Sri Lanka Association for Artificial Intelligence">


        <title>Nations Trust FinTecHack Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <script src="//code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

         <script src='https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js'></script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>



        <style>
            body{background-color: #2cb5e9;}
            .block{width:100%;background-color:#fff;min-height:100%;}
            .form-group{float:left;}
            .inner-block{margin-top:15px;background-color:#e9e9e9;padding:10px;}
        </style>

        <script>


          function callMyReg(){


//            $('#mf').validator();

           //validate();
              
              
            var group_name = $("#group_name").val();
            var university_name = $("#university_name").val();
            var member_count = $("#member_count").val();

            var ddt = $("#ddt").val();
            var ddth = $("#ddth").val();

            var name_1 = $("#name-1").val();
                    var reg_1 = $("#reg-1").val();
                    var contact_1 = $("#contact-1").val();
                    var mail_1 = $("#mail-1").val();
                    var meal_1 = $("#meal-1").val();
                    var tshirt_1 = $("#tshirt-1").val();

            var name_2 = $("#name-2").val();
                    var reg_2 = $("#reg-2").val();
                    var contact_2 = $("#contact-2").val();
                    var mail_2 = $("#mail-2").val();
                    var meal_2 = $("#meal-2").val();
                    var tshirt_2 = $("#tshirt-2").val();



            var name_3 = $("#name-3").val();
                    var reg_3 = $("#reg-3").val();
                    var contact_3 = $("#contact-3").val();
                    var mail_3 = $("#mail-3").val();
                    var meal_3 = $("#meal-3").val();
                    var tshirt_3 = $("#tshirt-3").val();

            var name_4 = $("#name-4").val();
                    var reg_4 = $("#reg-4").val();
                    var contact_4 = $("#contact-4").val();
                    var mail_4 = $("#mail-4").val();
                    var meal_4 = $("#meal-4").val();
                    var tshirt_4 = $("#tshirt-4").val();
                    
            var idea = $("#idea").val();
            var c_name = $("#c_name").val();
            var c_mail = $("#c_mail").val();
            var c_number = $("#c_number").val();
            var problem = $("#problem").val();
            var solve = $("#solve").val();
            var solution = $("#solution").val();
            var poc = $("#poc").val();
            var api = $("#api").val();

/*
            if ($('#group_name').val()==""){
                    alert("Please complete the application");
                }else{
  */                  
              if(group_name!=""&&group_name!=" "&&name_1!=""&&name_1!=" "&&contact_1!=""&&contact_1!=" "&&idea!=""|idea!=" "){
                   var state = true; 
              }else{
                alert("Please fill the application properly !");
              }

            if(state==true){
                $.ajax({
                method: "POST",
                url: "/index.php/RegistrationController/register",
                data: { group_name: group_name, 
                        university_name: university_name,
                        member_count:member_count,
                        
                        name_1:name_1,
                        reg_1:reg_1,
                        contact_1:contact_1,
                        mail_1:mail_1,
                        meal_1:meal_1,
                        tshirt_1:tshirt_1,
                        
                        name_2:name_2,
                        reg_2:reg_2,
                        contact_2:contact_2,
                        mail_2:mail_2,
                        meal_2:meal_2,
                        tshirt_2:tshirt_2,
                        
                        name_3:name_3,
                        reg_3:reg_3,
                        contact_3:contact_3,
                        mail_3:mail_3,
                        meal_3:meal_3,
                        tshirt_3:tshirt_3,
                        
                        name_4:name_4,
                        reg_4:reg_4,
                        contact_4:contact_4,
                        mail_4:mail_4,
                        meal_4:meal_4,
                        tshirt_4:tshirt_4,
                        
                        idea:idea,
                        c_name:c_name,
                        c_mail:c_mail,
                        c_number:c_number,
                        problem:problem,
                        solve:solve,
                        solution:solution,
                        poc:poc,
                        api:api,
                        csrf_dilan_name:ddth
                        }
            })
                    .done(function (msg) {
                        alert("Data Saved: ");
                       window.location.replace("https://www.fintechack.com/");

                    });
            }
                    
          //   }
          }




          // for validation


            // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.group_name.value == "" )
         {
            alert( "Please provide your group name!" );
            document.myForm.group_name.focus() ;
            return false;
         }
         
         if( document.myForm.idea.value == "" )
         {
            alert( "Please provide your idea title!" );
            document.myForm.idea.focus() ;
            return false;
         }

         if( document.myForm.c_name.value == "" )
         {
            alert( "Please provide contact person's name!" );
            document.myForm.c_name.focus() ;
            return false;
         }
         
         if( document.myForm.c_number.value == "" ||
         isNaN( document.myForm.c_number.value ) ||
         document.myForm.c_number.value.length != 10 )
         {
            alert( "Please provide a valid phone number!" );
            document.myForm.c_number.focus() ;
            return false;
         }
         
         
         return( true );
      }
   //-->
        </script>
    </head>

    <body>
        
        
       

        <div class="container">
            <div class="col-lg-12">

                <div class="row">
                    <div class="block" style="margin-top:15px;padding:15px;margin-bottom:15px">
                        <div class="text-center col-lg-12">
                            <img  style="width:14em;height:10em;" src="<?php echo base_url(); ?>assets/img/cover.jpg">
                            <h3>Nations Trust FinTecHack Registration</h3>
                        </div>

                        <div class="form-content col-lg-12">

                            <form method="post" id="mf" name="myForm" action="<?php echo base_url() ?>index.php/RegistrationController/register">

                                <div class="col-lg-12">

                                    <div class="row inner-block">

                                        <div class="form-group col-lg-4">
                                            <label for="group_name">Group Name</label>
                                            <input type="text" name="group_name" class="form-control" id="group_name" aria-describedby="emailHelp" placeholder="" required>
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        
                                        <div class="form-group col-lg-4">
                                            <label for="university_name">University/Institution (Optional)</label>
                                            <input type="text" class="form-control" name="university_name" id="university_name" placeholder="">
                                        </div>

                                        <div class="form-group col-lg-4">
                                            <label for="member_count">Number of Members</label>
                                            <select class="form-control" name="member_count" id="member_count" onchange="memberRoll()">

                                                <option val="2">2</option>
                                                <option val="3">3</option>
                                                <option val="4">4</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                                <!-- idea section -->
                                <div class="col-lg-12">

                                    <div class="row inner-block">
                                        <div class="form-group col-lg-6">
                                            <label for="idea" >Idea Title</label>
                                            <input type="text" name="idea" class="form-control" id="idea" aria-describedby="emailHelp" placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="c_name" >Contact person's name</label>
                                            <input type="text" name="c_name" class="form-control" id="c_name" aria-describedby="fileHelp" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="c_mail" >Contact person's e-mail</label>
                                            <input type="email" name="c_mail" class="form-control" id="c_mail" aria-describedby="fileHelp" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="c_number" >Contact person's number</label>
                                            <input type="text" name="c_number" class="form-control" id="c_number" aria-describedby="fileHelp" required>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label for="problem" >What is the problem that you intend solving ? </label>
                                            <textarea class="form-control" name="problem" id="problem" rows="3" required></textarea>
                                        </div>
                                      <!--  <div class="form-group col-lg-12">
                                            <label for="solve" >how do you solve this problem ?</label>
                                            <textarea class="form-control" name="solve" id="solve" rows="3"></textarea>
                                        </div>  -->
                                        <div class="form-group col-lg-12">
                                            <label for="solution" >What is your proposed solution ? </label>
                                            <textarea class="form-control" name="solution" id="solution" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label for="poc" >Can you develop the Project POC within the 12 hours hackathon?</label>
                                         <!--   <textarea class="form-control" name="poc" id="poc" rows="3"></textarea> -->
                                            <select class="form-control" id="poc" name="poc">
                                                <option val="Yes">--</option>
                                                <option val="Yes">Yes</option>
                                                <option val="No">No</option>
                                            </select>


                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label for="api" >How do you plan to use FinTech APIs in your project?</label>
                                            <textarea class="form-control" name="api" id="api" rows="3" required></textarea>
                                        </div>
                                    </div>



                                </div>
                                <!-- idea end  -->

                                <div class="col-lg-12">

                                    <div class="row inner-block">
                                        <div class="form-group col-lg-12"><h4>Member 1</h4></div>
                                        <div class="form-group col-lg-4">
                                            <label for="name" >Name</label>
                                            <input type="text" name="name-1" class="form-control" id="name-1" aria-describedby="emailHelp" placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="reg_no" >University Registration  / NIC / Passport Number</label>
                                            <input type="text" name="reg-1" class="form-control" id="reg-1" aria-describedby="emailHelp" placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="contact" >Contact Number</label>
                                            <input type="text" name="contact-1" class="form-control" id="contact-1" aria-describedby="emailHelp" placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="mail" >E-mail </label>
                                            <input type="email" name="mail-1" class="form-control" id="mail-1" aria-describedby="emailHelp" placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="meal">Meal</label>
                                            <select class="form-control" id="meal-1" name="meal-1">
                                                <option val="veg">--</option>
                                                <option val="veg">Veg</option>
                                                <option val="non-veg">Non-veg</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="tshirt">T-shirt size</label>
                                            <select class="form-control" id="tshirt-1" name="tshirt-1">
                                                <option val="veg">--</option>
                                                <option val="s">S</option>
                                                <option val="m">M</option>
                                                <option val="l">L</option>
                                                <option val="xl">XL</option>
                                                <option val="xl">XXL</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>


                                <div class="col-lg-12">

                                    <div class="row inner-block">
                                        <div class="form-group col-lg-12"><h4>Member 2</h4></div>
                                        <div class="form-group col-lg-4">
                                            <label for="name" >Name</label>
                                            <input type="text" name="name-2" class="form-control" id="name-2" aria-describedby="emailHelp" placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="reg_no" >University Registration / NIC / Passport Number</label>
                                            <input type="text" name="reg-2" class="form-control" id="reg-2" aria-describedby="emailHelp" placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="contact" >Contact Number</label>
                                            <input type="text" name="contact-2" class="form-control" id="contact-2" aria-describedby="emailHelp" placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="mail" >E-mail </label>
                                            <input type="email" name="mail-2" class="form-control" id="mail-2" aria-describedby="emailHelp" placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="meal">Meal</label>
                                            <select class="form-control" id="meal-2" name="meal-2">
                                                <option val="veg">--</option>
                                                <option val="veg">Veg</option>
                                                <option val="non-veg">Non-veg</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="tshirt">T-shirt size</label>
                                            <select class="form-control" id="tshirt-2" name="tshirt-2">
                                                <option val="veg">--</option>
                                                <option val="s">S</option>
                                                <option val="m">M</option>
                                                <option val="l">L</option>
                                                <option val="xl">XL</option>
                                                <option val="xl">XXL</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>


                                <div  id="mem3" class="col-lg-12">

                                    <div class="row inner-block">
                                        <div class="form-group col-lg-12"><h4>Member 3</h4></div>
                                        <div class="form-group col-lg-4">
                                            <label for="name" >Name</label>
                                            <input type="text" name="name-3" class="form-control" id="name-3" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="reg_no" >University Registration Number / NIC / Passport Number</label>
                                            <input type="text" name="reg-3" class="form-control" id="reg-3" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="contact" >Contact Number</label>
                                            <input type="text" name="contact-3" class="form-control" id="contact-3" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="mail" >E-mail </label>
                                            <input type="email" name="mail-3" class="form-control" id="mail-3" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="meal">Meal</label>
                                            <select class="form-control" id="meal-3" name="meal-3">
                                                <option val="veg">--</option>
                                                <option val="veg">Veg</option>
                                                <option val="non-veg">Non-veg</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="tshirt">T-shirt size</label>
                                            <select class="form-control" id="tshirt-3" name="tshirt-3">
                                                <option val="veg">--</option>
                                                <option val="s">S</option>
                                                <option val="m">M</option>
                                                <option val="l">L</option>
                                                <option val="xl">XL</option>
                                                <option val="xl">XXL</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>


                                <div id="mem4" class="col-lg-12">

                                    <div class="row inner-block">
                                        <div class="form-group col-lg-12"><h4>Member 4</h4></div>
                                        <div class="form-group col-lg-4">
                                            <label for="name" >Name</label>
                                            <input type="text" name="name-4" class="form-control" id="name-4" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="reg_no" >University Registration / NIC / Passport Number</label>
                                            <input type="text" name="reg-4" class="form-control" id="reg-4" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="contact" >Contact Number</label>
                                            <input type="text" name="contact-4" class="form-control" id="contact-4" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="mail" >E-mail </label>
                                            <input type="email" name="mail-4" class="form-control" id="mail-4" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="meal">Meal</label>
                                            <select class="form-control" id="meal-4" name="meal-4">
                                                <option val="veg">--</option>
                                                <option val="veg">Veg</option>
                                                <option val="non-veg">Non-veg</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="tshirt">T-shirt size</label>
                                            <select class="form-control" id="tshirt-4" name="tshirt-4">
                                                <option val="veg">--</option>
                                                <option val="s">S</option>
                                                <option val="m">M</option>
                                                <option val="l">L</option>
                                                <option val="xl">XL</option>
                                                <option val="xl">XXL</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>  
                                <input type="hidden" id="ddt" name="<?=$csrf['name'];?>" value="<?=$csrf['name'];?>" />
                                <input type="hidden" id="ddth" name="<?=$csrf['hash'];?>" value="<?=$csrf['hash'];?>" />


                                <div  class="col-lg-12 text-center" style="padding:15px">
                                    <button
                                        class="g-recaptcha"
                                        data-sitekey="6LcT_jMUAAAAAIYE96nf36BjiB1T2yXCXrwUrW61"
                                        data-callback="callMyReg"
                                        class="btn btn-primary">
                                        Submit
                                    </button>
                                    
                                    
                                </div>
                                <!--                                <div class="col-lg-12 text-center" style="padding:15px">
                                                                    <button class="btn btn-primary">Submit</button>
                                                                </div>-->

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">

                                                $(document).ready(function () {
                                                    console.log("ready!");
                                                    $("#mem3").hide();
                                                    $("#mem4").hide();
                                                });


                                                function memberRoll() {

                                                    var x = $("#member_count").val();


                                                    if (x == 3) {
                                                        console.log("option 3");
                                                        $("#mem3").show();
                                                        $("#mem4").hide();
                                                    }
                                                    if (x == 4) {
                                                        console.log("option 4");

                                                        $("#mem3").show();
                                                        $("#mem4").show();
                                                    } else if (x < 3) {

                                                        console.log("option 2");
                                                        $("#mem3").hide();
                                                        $("#mem4").hide();
                                                    }

                                                }

</script>