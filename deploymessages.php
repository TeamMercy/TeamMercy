<?php
           $page = $_SERVER['localhost/TeamMercy/deploymessages.php'];
$sec = "40";
  
     //accepting variables from the text box on our site
  //this feature is also used for manually sending messages to the intended user 

 //saving the bot token into the variable $botToken
$botToken = "312283508:AAF1Vcq_CWDWM4bkrxT7XC7b9onB4hXFuqM";
//instantiating the url for telegram
$apilink = "https://api.telegram.org/bot".$botToken;


$update = file_get_contents($apilink."/getupdates");
$update = json_decode($update, TRUE);
//getting the last array locaton of the recieved message
$current_update =end($update["result"]);
//getting the chat id of the user
$chatId = $current_update["message"]["chat"]["id"]; 
//recieving input message from the user and saving it in a variable
$newmessage=$current_update["message"]["text"];

$applicant_name=$current_update["message"]["from"]["first_name"];  
//file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$messageme); 
  
   //checking the text recieved from the user and giving it an associated message
   switch($newmessage) {
        case "/start":
        
            $Reply="Bot Enabled";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
        case "/end":
            $Reply="Good bye ";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
           case "hi":
           $Reply="Hello there, welcome to TeamMercy Bot. Please do not type in all CAPS";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
            case "Good bye":
           $Reply="Good Bye. Glad I could help.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
        case "hello":
            $Reply="hi";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
         case "Hello":
            $Reply="hi, welcome.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
case "bye":
            $Reply="nice chatting with you";
            file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
case "What kind of information can I get from you?":
            $Reply="I provide information on admission details of Valley View University";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
        break;
            case "What is your name?":
            $Reply="TeamMercyBot";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
            case "Where are you from?":
            $Reply="Valley View University";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
           case "Good afternoon":
            $Reply="Good afternoon";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
            case "Who are your owners?" :
            $Reply="Princess and Esther created me ,But I work  for Valley View University.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "So tell me about the school in General?" :
            $Reply="Valley View University is an Seventh Day Adventist Institution of Higher Learning. They offer a variety of programs Ranging from the Sciences to Business and Arts.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
//////////////////////////////////////////////////////////////////////////////
            case "What is the recent student population??":
            $Reply="There are over 2000 students  studying at Valley View University at the moment.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
            
            case "How many campuses are there?":
            $Reply="No, there are 3 campuses; namely the Oyibi Campus, Kumasi Campus and Techiman Campus";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
            
            
  ////////////////////////////////////////////////////////////////////////////////          
            case "How many years does it take to get a degree?":
            $Reply="Four years minimum";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
            
            case "What if I have a D in Maths but have an A in English and Integrated Science?":
            $Reply="Oh, Sorry dear but you need at least a C.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
           
           case "/requirements":
            $Reply= urlencode("For SSCE/WASSCE holders: \n \n \n Credit passes (A-D/A1-C6) in six subjects comprising three (3) core subjects, including English Language, Mathematics, Integrated Science/Socail Studies, plus three(3) relevant elective subjects. \n \n For GBCE holders: Credit passes (A-D) in six subjects comprising three (3) core subjects, including English Language, Mathematics, Integrated Science/Socail Studies, plus three (3) relevant subjects. \n \n  HND and Diploma holders from Polytechnics and Universities are eligible to apply for consideration on Individual basis.\n \n For GCE advanced level holders: \n \n \n Passes in three subjects(at least, one of the passes should be Grade D or better). Also, the applicant must have had credit passes (Grade 6) in five GCE Ordinary Level Subjects Including English Language, Mathemactics and a Science subject ( for non-Science students) and an Arts Subject (for Science students). \n \n  \n For Mature Students Applicants must be above 25years and above, and should pass the University's Mature examination comprising English Language , Mathematics and General Paper.Maature Exams are held in July and December each year.");
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
           
 default:
           $Reply="Oh no!, its either I do not have knowledge on that yet or please check your spelling";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;        
           
case "/help":
             $Reply="check the symbol / near your text box";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
        case "/go":
            $Reply="hello ";
            file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
     
            case "Who are you?":
            $Reply="I am a friendly interactive Bot :)";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "who are you?":
            $Reply="I am a friendly interactive Bot :)";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "WHO ARE YOU?":
            $Reply="I am a friendly interactive Bot :)";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
////////////////////////////////////////////////////////////////////////////////////
            case "how are you?"  :
            $Reply="Great!";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "How are you?"  :
            $Reply="Great!";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "HOW ARE YOU?"  :
            $Reply="Great!";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
//////////////////////////////////////////////////////////////////////////////////////
            case "What is your name?":
            $Reply="TeamMercyBot";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

             case "what is your name?":
            $Reply="TeamMercyBot";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

             case "WHAT IS YOUR NAME?":
            $Reply="TeamMercyBot";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
///////////////////////////////////////////////////////////////////////////////////
            case "Where are you from?":
            $Reply="Valley View University";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

              case "where are you from?":
            $Reply="Valley View University";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "WHERE ARE YOU FROM?":
            $Reply="Valley View University";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

//////////////////////////////////////////////////////////////////////////////
            case "Who are your owners?" :
            $Reply="Princess and Esther created me. But I work for Valley View University";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "Who are your Owners?" :
            $Reply="Princess and Esther created me ,But I work  for Valley View University.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "So tell me about the school in General?" :
            $Reply="Valley View University is a Christain University run by the Adventist Church. They offer a variety of courses Ranging from science to business and Arts.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
//////////////////////////////////////////////////////////////////////////////
            case "What is the recent population of students there??":
            $Reply="There are over 2000 students  studying at Valley View University at the moment.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
            
            case "Is there just one campus?":
            $Reply="No, there is the Oyibi Campus, Kumasi Campus, Techiman Campus";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
            
            case "What are the basic requirements to gain Admission?":
            $Reply="For Regular Students, you need to have your WASSCE result with at least a credit in Mathematics, English Language and Integrated Science.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
  ////////////////////////////////////////////////////////////////////////////////          
            case "How many years does it take to get a degree?":
            $Reply="Four years minimum";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
            
            case "What if I have a D in Maths but have an A in English and Integrated Science?":
            $Reply="Oh, Sorry dear but you need at least a C.";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "HOW OLD ARE YOU?":
            $Reply="Just a few months old";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
//////////////////////////////////////////////////////////////////////////////////
            case "Can we be friends?":
            $Reply="Sure, I'd love that ";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
            
            case "can we be friends?":
            $Reply="Sure, I'd love that ";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;

            case "CAN WE BE FRIENDS?":
            $Reply="Sure, I'd love that ";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
  ////////////////////////////////////////////////////////////////////////////////////////          
            case "Can we chat?":
            $Reply="Definitely";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;

             case "can we chat?":
            $Reply="Definitely";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
            
             case "CAN WE CHAT?":
            $Reply="Definitely";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
  ///////////////////////////////////////////////////////////////////////////////////////////          
            case "Hey":
            $Reply="Hello";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
            
            case "hey":
            $Reply="Hello";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;

            case "HEY":
            $Reply="Hello";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply);
            break;
   /////////////////////////////////////////////////////////////////////////////////         
            case "what is the time?":
            $Reply="The time is ";
            $time=date("h:i:sa");
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$time);
            break;
            
             case "What is the time?":
            $Reply="The time is ";
            $time=date("h:i:sa");
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$time);
            break;

             case "WHAT IS THE TIME?":
            $Reply="The time is ";
            $time=date("h:i:sa");
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$time);
            break;
////////////////////////////////////////////////////////////////////////////////////
               
            case "Good morning":
            $Reply="Good morning";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;

            case "good morning":
            $Reply="Good morning ";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;

            case "GOOD MORNING":
            $Reply="Good morning";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
/////////////////////////////////////////////////////////////////////////////////////////

            case "Hi":
            $Reply="hello ";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
             
             case "hi":
            $Reply="hello ";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;

            case "HI":
            $Reply="hello ";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;

////////////////////////////////////////////////////////////////////////////////////
            case "GOOD AFTERNOON":
            $Reply="Good afternoon";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;

            case "good afternoon":
            $Reply="Good morning";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;

            case "Good afternoon":
            $Reply="Good afternoon";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
///////////////////////////////////////////////////////////////////////////////////////
             default:
           $Reply="Oh no! I could not get that information, try using a back slash (/)";
file_get_contents($apilink."/sendmessage?chat_id=".$chatId."&text=".$Reply.$applicant_name);
            break;
           

      
    } 
   
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TeamMercy BOT</title>
   <link rel="stylesheet" type="text/css" href="formValidators/vendor/bootstrap/css/bootstrap-theme.css"
/>
    <link rel="stylesheet" type="text/css" href="formValidators/vendor/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" href="formValidators/vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" href="formValidators/vendor/jquery/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="api.css" type="text/css">
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
            <li ><a href="#"><span  class="glyphicon glyphicon-home">Home </span></a></li>   
            <li><a href="sendimages.php"><span  class="glyphicon glyphicon-film">Send Image </span></a></li>   
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
      <form method="post"  action="#">
          <div class="form-group">
              <input class="form-control" name="message" type="text">
              
            <button class="btn btn-success" name="submit" type="submit" ><span class="glyphicon glyphicon-envelope"></span>send</button>
              </div>
          
          </form>
      
      
  </div>
</div>
</div>
</body>  

</html>
    