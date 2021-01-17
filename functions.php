<?php
function create_freelancer(){
    global $connect;
    
    if(isset($_POST['submit'])){
        $radioval=$_POST['type'];
    
        $dir=dirname(__FILE__).'/admin/uploaded/';
        $path=$_FILES['photo']['tmp_name'];
        $file_name=$_FILES['photo']['name'];
        $arr_msg=[];
        move_uploaded_file($path,$dir.$file_name);
            $name=$_POST['name'];
            $title=$_POST['title'];
            $email=$_POST['email'];
            $disc=$_POST['disc'];
            $password=$_POST['password'];
            $confirm=$_POST['conpassword'];
    
        if(empty($name))
        {
            $arr_msg['name']="please enter your name";
        }
    
        if(empty($email))
        {
            $arr_msg['email']="please enter your email";
        }
    
        if(empty($password))
        {
            $arr_msg['password']="please enter your password";
        }
        if(empty($confirm))
        {
            $arr_msg['conpassword']="please enter your confirm password";
        }
        if($radioval=='1'){

            if(empty($disc))
            {
                $arr_msg['disc']="please enter your discription";
            }
            if(empty($title))
            {
                $arr_msg['title']="please enter your title";
            }

        if(count($arr_msg) ==0 ){
            echo $radioval;
            
                $sql="INSERT into freelancer values(null,'$name','$title','$email','$password','$file_name')";
                $res=mysqli_query($connect,$sql);
            
            
                
                if($res)
                {
                $last_id= mysqli_insert_id($connect);
                $insert="insert into langs values(null,'$disc','$last_id')";
                mysqli_query($connect,$insert);
                $arr_msg['msgcreation']="you have been new Account" ;
                return  $arr_msg;
                }
                else{
                    $arr_msg['msgcreation']="you have problem in information ";
                    return  $arr_msg ;
                
                }}
            

            
                
            } else{ 
                if(count($arr_msg) ==0 ){
                
                $sql="INSERT into clients values (NULL,'$name','$email','$password')";
                $res=mysqli_query($connect,$sql);
                if($res){
                $arr_msg['msgcreation']="you have been new Account" ;
            
                }
                else{
                    $arr_msg['msgcreation']="you have problem in information ";
                }

            }
            }
    
        
            return  $arr_msg ; 
    }
 
}

function loginfreelancer()
{
        global $connect;
        $arr_err=[];
        if(isset($_POST['submit1'])){
            $email=$_POST['emaillog'];
            $password=$_POST['passwordlog'];
            $i=0;
            if(empty($email))
            {
                $arr_err['email']="please enter your email";
                $i++;
            }
            if(empty($password))
            {
                $arr_err['password']="please enter your password";
                $i++;
            }
            if($i==0){
            $sql="SELECT * from freelancer where email='$email' And password='$password'  ";
            $res=mysqli_query($connect,$sql);
            if(mysqli_num_rows($res)==1)
            {
                header("location:index.php");
            }
        else{
            
        $arr_err["invalid"]="invalid Email or password";   
        }
    }}
    return $arr_err;
}
function insertmessagestofreelancer()
{
    global $connect;
    if(isset($_POST['send'])){
        $frId=$_GET['frId'];
        $namecontact=$_POST['namecontact'];
        $emailcontact=$_POST['emailcontact'];
        $message=$_POST['message'];
        $arr_message=[];
       
        if(empty($namecontact))
        {
            $arr_message['name']="please enter your name";
        }
        if(empty($emailcontact))
        {
            $arr_message['email']="please enter your email";
        }

        if(empty($message))
        {
            $arr_message['message']="please enter your message";
        }


        if(count($arr_message)==0){
            $sql ="INSERT into contacts values(null,'$namecontact','$emailcontact','$message')";
            $res=mysqli_query($connect,$sql);
            if($res){
                $lastid=mysqli_insert_id($connect);
                $sql="INSERT into contacts_freelancers values(null,'$lastid','$frId')";
                $res=mysqli_query($connect,$sql);

                $arr_message['msgsend']="your message send";


        }
        else{
            $arr_message['msgsend']="your message don't send  please try  again";
        }
      
    }
   
    return $arr_message;
}
} 