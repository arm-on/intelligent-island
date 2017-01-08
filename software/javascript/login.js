$(document).ready(function(){


            $("#remember_me").click(function(){
                if($("#remember_me").val()=='dontremember') $("#remember_me").attr('value','remember');
                else if($("#remember_me").val()=='remember') $("#remember_me").attr('value','dontremember');
            });


            $("#logincheck").click(function(){



                            $.ajax({
                            url: '../software/membership/check.php',
                            type: 'POST',
                            data: {
                                username:$("#user_name").val(),
                                password:$("#password").val(),
                                remember:$("#remember_me").val()
                            },
                            success: function(response) {
                                $("#loginbox").html('<ul class="collection" style="margin-left:40px;margin-right:40px">'+response+'</ul>');
                            },
                            fail: function(){alert("error");}
                          });

            });
});
