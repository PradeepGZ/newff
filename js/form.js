function handleAppointmentClickEvent()
{
    var name = $("#name").val();
    var phoneno = $("#phoneno").val();
    var email_id = $("#email_id").val();
    var city = $("#city").val();
    var study_destination = $("#study_destination").val();
    var utm_source = $("#utm_source").val();
    var utm_medium = $("#utm_medium").val();
    var utm_campaign = $("#utm_campaign").val();
    var utm_term = $("#utm_term").val();
    var utm_content = $("#utm_content").val();

//     if(name == "" || phoneno == "" || email_id == "" || city == "" || study_destination == "")
//   {
//      $("#appointError").css("opacity", "1");
//       return false;
//     }

   
    

 if (name == '') {
     $("#nameError").css("opacity", "1");
      return false;
 }

 if (phoneno == '') {
      $("#phoneError").css("opacity", "1");
      return false;
 }
 
  if ( phoneno.length < 10 || phoneno.length > 12) {
        $("#phoneError").css("opacity", "1");
      return false;
    }

 if (email_id == '') {
     $("#emailError").css("opacity", "1");
      return false;
 }

if(IsEmail(email_id)==false){
      $("#emailError").css("opacity", "1");
      return false;
}


if (city == '') {
    $("#cityError").css("opacity", "1");
      return false;
 }

 if (study_destination == '') {
     $("#stydyError").css("opacity", "1");
      return false;
 }

let data = {
    name: name,
    phoneno: phoneno,
    email_id: email_id,
    city: city,
    study_destination: study_destination,
    utm_source: utm_source,
    utm_medium: utm_medium,
    utm_campaign: utm_campaign,
    utm_term: utm_term,
    utm_content: utm_content,
}

 var base_url = "https://gozoop.us/gz-projects/fairfuture/";

$.ajax({
    url: base_url + `form.php?action=consultation`,
    data: data,
    method: "POST",
    dataType: "JSON",
    success: function(res) {
        $("#appointMsg").text(res.msg);
            setTimeout(() => {
                $("#appointMsg").text("");
            }, 8000);
            window.location.href = "https://gozoop.us/gz-projects/fairfuture/thank-you.php";
        if (res.status == 1) {                
            $('#register-form')[0].reset();            
        }
    }
});

}


//  ============================= Contact Us ========================


function handleContactClickEvent()
{
    var cname = $("#cname").val();
    var cphoneno = $("#cphoneno").val();
    var cemail_id = $("#cemail_id").val();
    var ccity = $("#ccity").val();
    var cstudy_destination = $("#cstudy_destination").val();
    var cutm_source = $("#cutm_source").val();
    var cutm_medium = $("#cutm_medium").val();
    var cutm_campaign = $("#cutm_campaign").val();
    var cutm_term = $("#cutm_term").val();
    var cutm_content = $("#cutm_content").val();

    // if(cname == "" || cphoneno == "" || cemail_id == "" || ccity == "" || cstudy_destination == "")
    // {
    //   $("#ContactError").css("opacity", "1");
    //   return false;
    //  }

    


 if (cname == '') {
      $("#nameError1").css("opacity", "1");
       return false;
 }

 if (cphoneno == '') {
      $("#phoneError1").css("opacity", "1");
       return false;
 }
 
  if ( cphoneno.length < 10 || cphoneno.length > 12) {
          $("#phoneError1").css("opacity", "1");
       return false;
    }

 if (cemail_id == '') {
      $("#emailError1").css("opacity", "1");
       return false;
 }
 
if(IsEmail(cemail_id)==false){
      $("#emailError1").css("opacity", "1");
      return false;
}

 if (ccity == '') {
       $("#cityError1").css("opacity", "1");
       return false;
 }

 if (cstudy_destination == '') {
       $("#stydyError1").css("opacity", "1");
       return false;
 }

let data = {
    cname: cname,
    cphoneno: cphoneno,
    cemail_id: cemail_id,
    ccity: ccity,
    cstudy_destination: cstudy_destination,
    cutm_source: cutm_source,
    cutm_medium: cutm_medium,
    cutm_campaign: cutm_campaign,
    cutm_term: cutm_term,
    cutm_content: cutm_content,
}

 var base_url = "https://gozoop.us/gz-projects/fairfuture/";

$.ajax({
    url: base_url + `form.php?action=contact`,
    data: data,
    method: "POST",
    dataType: "JSON",
    success: function(res) {
        $("#ContactUsMsg").text(res.msg);
            setTimeout(() => {
                $("#ContactUsMsg").text("");
            }, 8000);
            window.location.href = "https://gozoop.us/gz-projects/fairfuture/thank-you.php";
        if (res.status == 1) {                
            $('#contact-form')[0].reset();            
        }
    }
});

}




//  ============================= Get In Touch ========================


function SubmitPopup()
{
    var tname = $("#tname").val();
    var tphoneno = $("#tphoneno").val();
    var temail = $("#temail").val();
    var tcity = $("#tcity").val();
    var tstudy_destination = $("#tstudy_destination").val();
    var tutm_source = $("#tutm_source").val();
    var tutm_medium = $("#tutm_medium").val();
    var tutm_campaign = $("#tutm_campaign").val();
    var tutm_term = $("#tutm_term").val();
    var tutm_content = $("#tutm_content").val();

    // if(tname == "" || tphoneno == "" || temail == "" || tcity == "" || tstudy_destination == "")
    // {
   
    //  $("#ContactPopUsErr").css("opacity", "1");
    //   return false; 
      
    // }

   


if (tname == '') {
    $("#nameError2").css("opacity", "1");
      return false; 
}

if (tphoneno == '') {
     $("#phoneError2").css("opacity", "1");
      return false;
}

 if ( tphoneno.length < 10 || tphoneno.length > 12) {
        $("#ContactPopUsErr").css("opacity", "1");
      return false; 
    }

if (temail == '') {
    $("#emailError2").css("opacity", "1");
      return false;
}

if(IsEmail(temail)==false){
      $("#emailError2").css("opacity", "1");
      return false;
}

if (tcity == '') {
     $("#cityError2").css("opacity", "1");
      return false;
}

if (tstudy_destination == '') {
     $("#stydyError2").css("opacity", "1");
      return false;
}

let data = {
    tname: tname,
    tphoneno: tphoneno,
    temail: temail,
    tcity: tcity,
    tstudy_destination: tstudy_destination,
    tutm_source: tutm_source,
    tutm_medium: tutm_medium,
    tutm_campaign: tutm_campaign,
    tutm_term: tutm_term,
    tutm_content: tutm_content,
}

 var base_url = "https://gozoop.us/gz-projects/fairfuture/";

$.ajax({
    url: base_url + `form.php?action=getInTouch`,
    data: data,
    method: "POST",
    dataType: "JSON",
    success: function(res) {
        $("#ContacttMsg").text(res.msg);
            setTimeout(() => {
                $("#ContacttMsg").text("");
            }, 5000000);
            window.location.href = "https://gozoop.us/gz-projects/fairfuture/thank-you.php";
        if (res.status == 1) {                
            $('#register-form2')[0].reset();            
        }
    }
});

}






function IsEmail(temail) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(temail)) {
    return false;
  }else{
    return true;
  }
}

function IsEmail(cemail_id) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(cemail_id)) {
    return false;
  }else{
    return true;
  }
}


function IsEmail(email_id) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email_id)) {
    return false;
  }else{
    return true;
  }
}

