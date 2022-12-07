$("#cnpwd").blur(function() {
            var pwd = $("#pwd").val();
            var cnpwd = $("#cnpwd").val();
            if (pwd == cnpwd) {
                $("#cnpwd").css("border", "1px solid green");
                $("#cnerrpwd").html("");
            } else {
                $("#cnpwd").val("");
                $("#cnpwd").css("border", "1px solid red");
                $("#cnerrpwd").html("Passwords doesn't match").css("color", "red");
            }
        });

    $("#email").blur(function(){
        var em=$("#email").val();
        var r=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        
        if(em.trim()==0)
        {
            $("#erremail").html("Please enter the Email Id").css("color","red");
            $("#email").css("border","1px solid red");
        }
        else if(r.test(em)==false)
        {
            $("#erremail").html("Enter correct Email Id").css("color","red");
            $("#email").css("border","1px solid red");
            $("#email").val("");
            
        }
        else{
            $("#erremail").html("Valid Email Id").css("color","green");
            $("#email").css("border","1px solid green");
        }
        
            
        
    });
    
    $("#pwd").blur(function(){
        
        var pw=$("#pwd").val();
        var r=/(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
        if(pw.trim()==0)
            {
            $("#errpwd").html("Password is required").css("color","red");
                $("#pwd").css("border","1px solid red");
            }
        else if(r.test(pw)==false)
            {
                $("#errpwd").html("Password format not satisfied").css("color","red");
                $("#pwd").css("border","1px solid red");
                $("#errpwd").val("");

            }
        else{
            $("#errpwd").html("Password Accepted").css("color","green");
            $("#pwd").css("border","1px solid green");
            }
    
    });
            
            $("#mob").blur(function(){
        var mob=$("#mob").val();
        var exp=/^[6-9]{1}[0-9]{9}$/;
      if(mob.trim()==0)
      {
                $("#errmob").html("Enter Mobile No.").css("color","red");
                $("#mob").css("border","1px solid red");
      
      }
      else if(exp.test(mob)==false)
                {
                    $("#errmob").html("Invalid Mobile No.").css("color","red");
                    
                    $("#mob").css("border","1px solid red");
                }
			else
					{
                        $("#mob").css("border","1px solid green");
                        $("#errmob").html("");
                    }
      
    });
     $("#cnpwd").blur(function() {
            var pwd = $("#pwd").val();
            var cnpwd = $("#cnpwd").val();
            if (pwd == cnpwd) {
                $("#cnpwd").css("border", "1px solid green");
                $("#cnerrpwd").html("");
            } else {
                $("#cnpwd").val("");
                $("#cnpwd").css("border", "1px solid red");
                $("#cnerrpwd").html("Passwords doesn't match").css("color", "red");
            }
        });

    
