<?php
  $RawDate = date("l F j,  h:iA");
  //Days
  $RawDate  = str_replace("Sunday", "Sun", $RawDate);
  $RawDate  = str_replace("Saturday", "Sat", $RawDate);
  $RawDate  = str_replace("Monday", "Mon", $RawDate);
  $RawDate  = str_replace("Tuesday", "Tue", $RawDate);
  $RawDate  = str_replace("Wednesday", "Wed", $RawDate);
  $RawDate  = str_replace("Thursday", "Thu", $RawDate);
  $RawDate  = str_replace("Friday", "Fri", $RawDate);
  //Months
  $RawDate  = str_replace("January", "Jan", $RawDate);
  $RawDate  = str_replace("February", "Feb", $RawDate);
  $RawDate  = str_replace("March", "Mar", $RawDate);
  $RawDate  = str_replace("April", "Apr", $RawDate);
  $RawDate  = str_replace("May", "May", $RawDate);
  $RawDate  = str_replace("June", "Jun", $RawDate);
  $RawDate  = str_replace("July", "Jul", $RawDate);
  $RawDate  = str_replace("August", "Aug", $RawDate);
  $RawDate  = str_replace("September", "Sep", $RawDate);
  $RawDate  = str_replace("October", "Oct", $RawDate);
  $RawDate  = str_replace("November", "Nov", $RawDate);
  $RawDate  = str_replace("December", "Dec", $RawDate);
  $RawDate  = str_replace(" 0", " ", $RawDate);
  require('strings/en.php');
$Mode = $_GET['mode'];
$ShowGuide = $_GET['showguide'];


if ($Mode == "boot") {
require('applications/plymouth/application.php');
exit;
}
?>

<head>
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cantarell:bold,bolditalic|Inconsolata:italic|Droid+Sans">
   <title> Ubuntu Gnome Web Based Demo</title>

<style>

body {
    background-image: url("background.jpg");
    background-size: 100%;
    background-repeat: no-repeat;
    font-family: 'Cantarell', 'Inconsolata', 'Droid Sans';
}
#blackBar{
   color: white;
   position:fixed;
   top:0;
   left:0;
   width:100%;
   height:30px;
   background-color:black;
   -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
#Activities{
   color: white;
   position:fixed;
   top:3;
   left:5;
   font-family: Cantarell;
   background-color:black;
}
#DateTime{
   color: white;
   position:relative;	
   top:3;
   width:250;
   left:-50;
   font-family: Cantarell;
   background-color:black;
}

#TopMenu{
    background-image: url("GnomeRight.png");
    background-size: 100%;
    background-position: right top;
    background-repeat: no-repeat;
    position:absolute;
    width:90;
    top:3px;
    right: 10px;
   -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
#GnomeDock{
   color: white;
   position:absolute;	
   top:50%;
   margin-top:-1em; 
   width:55;
   left:-1;
   font-family: Cantarell;
   background-color:black;
   border: 0px solid;
   border-radius: 5px;
   display: none;
}

#DesktopSwitcher{
   color: white;
   position:absolute;	
   top:10%;
   height:85%;
   margin-top:-1em; 
   width:250px;
   right: 1px;
   font-family: Cantarell;
   background-color:black;
   border: 0px solid;
   border-radius: 5px;
   display: none;
   -webkit-filter: blur(0.2px);
   -moz-filter   : blur(0.2px);
   -ms-filter    : blur(0.2px);
   -o-filter     : blur(0.2px);
   filter        : blur(0.2px);
}


#Assistant{
   color: white;
   position:absolute;	
   top:75%;
   height:20%;
   margin-top:-1em; 
   width:800px;
   right: 35%;
   font-family: Cantarell;
   background-color:black;
   border: 0px solid;
   border-radius: 5px;
   #display: none;
   -webkit-filter: blur(0.2px);
   -moz-filter   : blur(0.2px);
   -ms-filter    : blur(0.2px);
   -o-filter     : blur(0.2px);
   filter        : blur(0.2px);
}
#AssistantHead {
    background-image: url("Keith3.png");
   position:absolute;	
    background-size: 100%;
    background-repeat: no-repeat;
    height: 100%;
    width : 35%;
}
#AssistantText {
    color: white;
    left: 36%;
    position: relative;
    height: 100%;
    width : 62%;
}
#ApplicationClose {
    color: white;
    left: 90%;
    position: relative;
    top : -10;
    height: 5%;
    width : 10%;
    
}

#ActiveApplication{
   color: white;
   position:fixed;
   top:70;
   left:15%;
   width:65%;
   height:65%;
   #background-color:black;
    background-repeat: no-repeat;

background-position: right top; 
   display: none;
   -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

</style>
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>



</head>
<body>

    <script type="text/javascript">
            $(document).ready(function () {
                $("#Activities").hover(
                  function () {
                      
                      $('body').css("background-image", "url('GnomeFadedBackground.jpg')");
                      $( "#GnomeDock" ).show()
                      $( "#DesktopSwitcher" ).show()
                      $("#AssistantText").html("<?php echo $Dash; ?>");
                  }, 
                  function () {
                     // $('body').css("background-image", "url('background.jpg')");
                     // $( "#GnomeDock" ).hide()
                  }
                );
            $('#DesktopSwitcher').click(function(){
                      $('body').css("background-image", "url('background.jpg')");
                      $( "#GnomeDock" ).hide()
                      $( "#DesktopSwitcher" ).hide()
            });
            $('#ApplicationClose').click(function(){
                      $('body').css("background-image", "url('background.jpg')");
                      $( "#GnomeDock" ).hide()
                      $( "#DesktopSwitcher" ).hide()
                      $( "#AssistantText" ).html("<?php echo $BackToDesktop; ?>");
                      $( "#ActiveApplication" ).hide()
            });

            $('#UbuntuSoftwareCenterClicked').click(function(){
                      $('body').css("background-image", "url('background.jpg')");
                      $( "#GnomeDock" ).hide()
                      $( "#DesktopSwitcher" ).hide()
                      $( "#AssistantText" ).html("<?php echo $UbuntuSoftwareCenter; ?>");
                      $('#ActiveApplication').css("background-image", "url('applications/UbuntuSoftwareCenter.png')");
                      $( "#ActiveApplication" ).show()
            });
           $('#GnomeTerminalClicked').click(function(){
                      $('body').css("background-image", "url('background.jpg')");
                      $( "#GnomeDock" ).hide()
                      $( "#DesktopSwitcher" ).hide()
                      $( "#AssistantText" ).html("<?php echo $GnomeTerminalLaunched; ?>");
                      $('#ActiveApplication').css("background-image", "url('applications/GnomeTerminal.png')");
                      $( "#ActiveApplication" ).show()
            });

            });

            jQuery(document).on('keyup',function(evt) {
             if (evt.keyCode == 27) {
                      $('body').css("background-image", "url('background.jpg')");
                      $( "#GnomeDock" ).hide()
                      $( "#DesktopSwitcher" ).hide()
                      $("#AssistantText").html("<?php echo $BackToDesktop; ?>");
                      $( "#ActiveApplication" ).hide()
             }
            });


        </script>

<div id="blackBar">
 <div id="Activities">
  Activities
  </div>
 <center>
 <div id="DateTime">
 <?php
  echo $RawDate;
 ?>
 </div>
 </center>

</div>

<div id="TopMenu">&nbsp;
</div>




<div id="GnomeDock">
<img src="icons/Firefox-icon.png" width='50' style='PADDING-TOP: 5px'>
<div id='GnomeTerminalClicked'><img src="icons/GnomeTerminal-icon.png" width='50' style='PADDING-TOP: 5px'></div>
<div id='UbuntuSoftwareCenterClicked'><img src="icons/softwarecenter-icon.png" width='50' style='PADDING-TOP: 5px'></div>
<img src="icons/Apps.jpeg" width='50' style='PADDING-TOP: 5px'>
<br></div>

<div id="DesktopSwitcher"><center>
<img src="background.jpg" width='220' style='PADDING-TOP: 10px'>
<img src="background.jpg" width='220' style='PADDING-TOP: 10px'>
<br></center></div>

<?php
if ($ShowGuide == "false"){

}else{
echo "
<div id='Assistant'>
    <div id='AssistantHead'>&nbsp;
    </div>
    <div id='AssistantText'>
     $DesktopWelcome
    </div>

</div>
";
}
?>
<div id='ActiveApplication'>&nbsp;

<div id='ApplicationClose'>&nbsp</div>
</div>
</body>
