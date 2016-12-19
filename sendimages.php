


<!DOCTYPE html>
<html>
<head>
    <meta />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TeamMercy Bot</title>
   <link rel="stylesheet" type="text/css" href="formValidators/vendor/bootstrap/css/bootstrap-theme.css"
/>
    <link rel="stylesheet" type="text/css" href="formValidators/vendor/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" href="formValidators/vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" href="formValidators/vendor/jquery/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="api.css" type="text/css">
    
    
    <?php
 
 //saving the bot token into the variable $botToken
$botToken = "312283508:AAF1Vcq_CWDWM4bkrxT7XC7b9onB4hXFuqM";
//instantiating the url for telegram
$website = "https://api.telegram.org/bot".$botToken;


$update = file_get_contents($website."/getupdates");
$update = json_decode($update, TRUE);
//getting the last array locaton of the recieved message
$current_update =end($update["result"]);
//getting the chat id of the user
$chatId = $current_update["message"]["chat"]["id"]; 
//recieving input message from the user and saving it in a variable
$newmessage=$current_update["message"]["text"];

$teleuser=$current_update["message"]["from"]["first_name"];  
//file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$messageme); 
  
  
   
?>
</head>
<body>
    <header>
   <nav id="nbar" class="navbar navbar-defaullt navbar-inverse navbar-fixed-top" role="navigation">
    
    <div class="container">
    <div class="navbar-header">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TeamMercy Bot</a>
    </div>
        <ul class="nav navbar-nav">
            <li><a href="#"><span  class="glyphicon glyphicon-home">Home </span></a></li>   
            <li class="active"><a href="sendimages.php"><span  class="glyphicon glyphicon-film">Send Image </span></a></li>   
            </ul>
      <a href="deploymessages.php"  type="button" class="btn btn-info btn-lg"  ><span class="glyphicon glyphicon-user">Activate Bot</span></a>
    </div>
    </nav> 
    </header>
        <div class="container" style="float:center;padding-top:200px;" >
        <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Send Message to Bot</h3>
  </div>
  <div class="panel-body" id="load_tweets">

     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('record_count.php').fadeIn("slow");
}, 10000); // refresh every 10000 milliseconds

</script>
      <form method="post"  action="<?php echo $website.'/sendPhoto'?> " method="post" enctype="multipart/form-data">
          <div class="form-group">
             <input class="form-control" name="chat_id" value="327387888" type="text">

              <input class="form-control" name="photo" type="file">
              
            <button class="btn btn-success" name="submit" type="submit" ><span class="glyphicon glyphicon-envelope"></span>send</button>
              </div>
          
          </form>
      
      
  </div>
</div>
</div>
</body>  

</html>
    