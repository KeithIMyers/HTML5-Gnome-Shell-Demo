<?php

?>
<style>
body {
    background-image: url("applications/plymouth/display.png");
    background-size: 100%;
    background-repeat: no-repeat;
    font-family: 'Cantarell', 'Inconsolata', 'Droid Sans';
}
#LoadingBarContainer {
	height: 16px;
        width: 50px;
        position:fixed;
        top:70%;
        left:47.3%;

}
#circle1 {
	border-radius: 50%;
        position: absolute;
        top:1;
        left:1;
	width: 15px;
	height: 15px; 
        background-color:white;

}
#circle2 {
	border-radius: 50%;
        position: absolute;
        top:1;
        left:45;
	width: 15px;
	height: 15px; 
        background-color:white;

}
#circle3 {
	border-radius: 50%;
        position: absolute;
        top:1;
        left:83;
	width: 15px;
	height: 15px; 
        background-color:white;

}
</style>
<body>
<div id='LoadingBarContainer'>
    <div id='circle1'>  </div>
    <div id='circle2'>  </div>
    <div id='circle3'>  </div>
</div>
</body>