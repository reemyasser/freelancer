$(document).ready(function (){
    $('#search').keyup(function (){
       var key = $(this).val();
       
        if(key != ''){
          
                $.ajax({
                    url:'find.php',
                    type:'GET',
                    data:'K='+key,

                    success:function(response){
                        $('.result').show();
                        $('.result').html(response);
                    }
            });
        
        
        }else{

            $('.result').hide();

        }

       

    });
   
});
$(document).ready(function(){
    $('#title').hide();
    $('#disc').hide();
  
    $('#photo').hide();

    $('#freelancer').click(function(){
     
        $('#title').show();
        $('#disc').show();
        $('#photo').show();

    });
    $('#user').click(function(){
        $('#title').hide();
        $('#disc').hide();
        $('#photo').hide();

    });

});


function showmsg()
{
$('#signup').click(function(){

$('.msg_signup').show();
$('.imgsh').show();

});
}
function checkpass()
{
    var pass= document.getElementById("password").value,
    conpass=document.getElementById("conpassword").value;
    if(pass!=conpass){
        document.getElementById("msg").innerHTML=" password and confirm password are not matching";
        document.getElementById("msg").style.color="red";
        document.getElementById("conpass").style.borderColor="red";
        
      
    }
    else
    {
        document.getElementById("msg").innerHTML=" matching";
        document.getElementById("msg").style.color="green";
        document.getElementById("conpass").style.border="1px solid green";
       
       
    }

}