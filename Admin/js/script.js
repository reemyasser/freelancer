
function checkpass()
{
    var pass= document.getElementById("pass").value,
    conpass=document.getElementById("conpass").value;
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
function show()
{

$('#confirm').show();


}
$(document).ready(function(){
$('#search').keyup(function(){

    var key=$(this).val();


    if(key!=""){
    $.ajax({

        url:"search.php",
        type:"GET",
        data:"k="+ key,
        success:function(response){
            $('#result').show();
            $('#result').html(response);
        }


   


   } );}
   else
   {
    $('#result').hide();
   }
  /*  if($(this).val()!='')
    {
        $('#result').show();
        $('#result').html($(this).val());
        
    }
    else{
        $('#result').hide();
    }*/
    
});
$("#free").change(function(){

var id=$(this).val();
if(id!=""){
$.ajax({
    url:'getfreelancer.php',
    type:'GET',
    data:'id='+id,
    success:function(response){
        $('#result').show();
        $('#result').html(response);
    }

});}
else
{
    $('#result').hide();
}

});
});

   
   