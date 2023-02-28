<!DOCTYPE html>  
<html>  
<head>  
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Free Online Whiteboard</title>
<meta name="Description" content="Free Online Whiteboard and Collaboration - A Free web whiteboard loaded with great functionalities like online presentation, setup customize background, different pen sizes, millions of colors, adding text with beautiful fonts, simple Do and Undo functions, eraser, add various shapes, add customize images and finally save your work as an image or whiteboard itself which can be uploaded later iwhen and as needed. This is ideal for teaching online or presentation online." />
<meta name="Keywords" content="Free, Online, Whiteboard, Teaching, Students, Presentation., Background, Fonts, text, Eraser, Pencil, Shapes"/>
<base href="https://www.tutorialspoint.com/" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="themes/css/gray/easyui.css">
<link rel="stylesheet" type="text/css" href="themes/css/icon.css">
<link rel="stylesheet" type="text/css" href="themes/css/lightslider.css">
<link rel="stylesheet" type="text/css" href="themes/css/whiteboard.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Poiret+One|Lobster|Shadows+Into+Light|Pacifico|Sigmar+One|Courgette|Lobster+Two|Pinyon+Script|Playball|Satisfy|Great+Vibes|Tangerine|Luckiest+Guy' rel='stylesheet' type='text/css'>
<script src="themes/js/jquery.min.js"></script> 
<script src="themes/easyui/jquery.easyui.min.js"></script>
<script src="themes/js/fabric-min.js"></script>
<script src="themes/js/screenfull.js"></script>
<script src="themes/js/ion.sound.min.js"></script>
<script src="themes/js/RTCMultiConnection.min.js"></script>
<script src="themes/js/FileBufferReader.min.js"></script>
<script src="themes/js/socket.io.js?v=1"></script>
<link rel="stylesheet" type="text/css" href="themes/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="themes/css/slick-theme.css"/>
<script type="text/javascript" src="themes/js/slick.min.js"></script>
<script type="text/javascript" src="tutor_connect/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
.fa-refresh:before {content:"\f079"; font-family:'FontAwesome'; font-size:150%; font-style:normal;}
#refresh{display:none;}
</style>
<style>
#privacy-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    max-width: 100%;
    padding: 1rem .5rem;
    background: #fff;
    z-index: 1030;
    color: #000;
    font-size: 14px;
    margin: 0;
    display: none;
    border-top: 2px solid rgb(130, 130, 130);
  }
  #privacy-banner p {
    margin: 0;
    color: #000;
    text-align: center;
  }
  #privacy-banner a {
    text-decoration: none;
    margin: 20px auto 0 auto;
    display: block;
    max-width: 150px;
  }
  #privacy-banner a:hover {
    text-decoration: underline;
  }
  #banner-learn {
    color: #000;
  }
  #banner-accept {
    padding: 7px 15px;
    color: #fff;
    border-radius: 5px;
    background:#737373;
  }
  @media (min-width: 768px) {
    #privacy-banner {
      padding: 1.5rem .5rem;
    }
    #privacy-banner a {
      display: inline-block;
      margin: 0 10px;
    }
}
</style>


<script type="text/javascript">
$(document).ready(function() { 
/*
   var tc_flodername = '';
   var tc_slides = '';
   var id = '#dialog';
   //Get the screen height and width
   var maskHeight = $(document).height();
   var maskWidth = $(window).width();
   //Set heigth and width to mask to fill up the whole screen
   $('#mask').css({'width':maskWidth,'height':maskHeight});
   //transition effect
   $('#mask').fadeIn(500);
   $('#mask').fadeTo("slow",0.5); 
   //Get the window height and width
   var winH = $(window).height();
   var winW = $(window).width();
   //Set the popup window to center
   $(id).css('top',  winH/2-$(id).height()/2);
   $(id).css('left', winW/2-$(id).width()/2);
   //transition effect
   if(tc_flodername != '' && tc_slides !=''){
      //$(id).fadeIn(2000);  
      $('#mask').hide();      
   } else {
      $(id).fadeIn(2000);    
   }
   
   //if close button is clicked
   $('.window .close').click(function (e) {
   //Cancel the link behavior
   e.preventDefault();
   $('#mask').hide();
   $('.window').hide();
   });
   //if mask is clicked
   $('#mask').click(function () {
   $(this).hide();
   $('.window').hide();
   });
   $('.carousel').carousel({
     interval: 1000 * 7
   });
   $('.carousel').carousel('cycle');
*/
});
</script>
</head> 
<body class="easyui-layout" id="cc">

<!-- Loader html code -->
<div class="wrapLoader">
   <div class="imgLoader">
      <img src="/images/loading.gif" alt="" width="70" height="70" />
      <div id="wait"></div>
   </div>
</div>
<!-- end of Loader html code -->

<!-- popup html code -->
<div id="boxes">         
   <div id="dialog" class="window">         
      <div id="popupfoot"> <a href="#" class="close agree" title="close window">x</a></div>            
         <div class="bs-example">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">  
               <!-- Wrapper for carousel items -->
               <div class="carousel-inner bigbanner">
                  <div class="item active">			
                     <img src="/whiteboard/images/live-video-chat.jpg" title="Live Video Chat">
                  </div>
                  <div class="item">	
                     <img src="/whiteboard/images/upload_presentations.jpg" title="Upload Presentations">
                  </div>
                  <div class="item">	
                     <img src="/whiteboard/images/online_presentation.jpg" title="Online Presentations">
                  </div>
                  <div class="item">
                     <img src="/whiteboard/images/upload-download-presentation.jpg" title="Upload/Download Presentation">
                  </div>
                  <div class="item active">			
                     <img src="/whiteboard/images/change-background.jpg" title="Change Background Color">
                  </div>
                  <!-- Carousel controls -->
                  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                     <span class="fa-angle-left"></span>
                  </a>
                  <a class="carousel-control right" href="#myCarousel" data-slide="next">
                     <span class="fa-angle-right"></span>
                  </a> 
               </div>
            </div>
         </div>          
   </div>
   <div id="mask"></div>
</div>
<!-- end of popup html code -->


<!--HEADER STARTS -->
<div data-options="region:'north'" style="height:70px; width:100%;overflow:hidden;">   
   <div id="invite" class="easyui-dialog" title="Meeting Invitation" style="width:600px;height:250px;" data-options="iconCls:'icon-email',resizable:true,modal:true, onOpen:function(){$('.imgLoader').css('visibility', 'hidden');}, onClose:function(){if( $('#center').children().filter('video').length == 0 ){$('.imgLoader').css('visibility', 'visible');}}">
      <div id="eids" class="easyui-validatebox" data-options="required:true,validType:'emails', prompt:'Enter Email IDs separated by comma...',buttonText:'Invite'" style="width:70%;height:32px;"></div>
   </div>
   <div id="videocontext" class="easyui-menu" style="width:150px;">
     <div id="muteUser" data-options="iconCls:'fa-microphone-slash-small'">Mute User</div>
     <div id="unmuteUser" data-options="iconCls:'fa-microphone-small'">Unmute User</div>
   </div>
   <div id="sign" class="easyui-window" title="Whiteboard" data-options="iconCls:'icon-login',modal:true, maximizable:false, closed:true, minimizable:false" style="width:530px;height:475px;padding:10px;">
   </div>
   <div id="dlg" class="easyui-dialog" title="Meeting" style="width:500px;height:250px;" data-options="iconCls:'icon-chat-small', resizable:true, modal:true, buttons: '#dlg-buttons'">
      <div style="margin-bottom:10px">
      <input class="easyui-textbox" id="room_id" style="width:80%;height:40px;padding:12px" data-options="prompt:'Enter a unique room ID',iconCls:'icon-lock',iconWidth:38">
      </div>
      <div style="margin-bottom:20px">
      <input class="easyui-textbox" id="user_name" style="width:80%;height:40px;padding:12px" data-options="prompt:'Enter your name', iconCls:'icon-man',iconWidth:38">
      </div>
   </div>
   
   <div id="ancTutorContent" class="easyui-window" title="Whiteboard" data-options="iconCls:'icon-login',modal:true, maximizable:false, closed:true, minimizable:false" style="width:530px;height:200px;padding:10px;">
   </div>
   
   <div id="dlg-buttons" style="text-align:center;">
      <a href="javascript:void(0)" class="easyui-linkbutton" id="create_meeting_room">Create Meeting Room</a>
      <a href="javascript:void(0)" class="easyui-linkbutton" id="join_meeting_room">Join Meeting Room</a>
   </div>
   <a href='http://www.osppro.com/'>
      <img src="/green/images/diamond.png" height="50px" style="padding:5px; padding-top: 10px;float:left;"/>
   </a>
   <h1 class="whtboard" style="float:left;padding-top: 4px;">Whiteboard</h1>
</div>
   <!-- header top right menu first -->      
   <div style="margin:18px 0px 0px 0px;">
      <div class="db-nav">
         <a href="javascript:void(0);" id="ancUndo" title="Undo">
            <div class="sub-default-lft" style="border-right:none;"><i class="fa-undo wbitem"></i></div>
         </a>
         <a href="javascript:void(0);" id="ancRedo" title="Redo">
            <div class="sub-default-lft" style="border-right:none;"><i class="fa-repeat wbitem"></i></div>
         </a>
         <a href='javascript:void(0)'  title="Clear all" class="clrDynamicCanvas">
            <div class="sub-default-lft wbitem" style="border-right:none;"><img src="whiteboard/images/clear.png" style="vertical-align:bottom; height:17px;"/></div>
         </a>
         <a href='javascript:void(0)' id="maximize" title="Maximize" >
            <div class="sub-default-lft" ><i class="fa-expand"></i></div>
         </a>
         <a href='javascript:void(0)' id="refresh" title="Refresh Connection">
            <div class="sub-default-lft" ><i class="fa-refresh"></i></div>
         </a>   
         <a href="javascript:void(0);" id="ancHelpMain" title="Help Whiteboard">
           <div class="sub-default-lft" style="border-right:none;"><img src="themes/css/icons/help.png" /></div>
         </a>      
      </div>
   </div> 
   <!-- end of header top right menu first -->   
</div>
</div>
<!--HEADER ENDS -->

<div id="east" data-options="region:'east', title:'Meeting',iconCls:'icon-chat-small', split:false, collapsed:false" style="width:300px;">
   <div id="webrtcPanel" class="easyui-layout" data-options="fit:true,border:false">
      <div data-options="region:'north',split:true" style="height:322px; border:0px;">
         <div class="video-control">
            <div id="containerUserFaces">
               <h2>Waiting for participants to join</h2>
            </div>
            <div class="db-nav chat-nav-center">
               <div id="containerBigVideoAndFullscreen">
                  <div id="containerBigVideo">
                     <i class="fa-user-large chatitem"></i>
                  </div>
               </div>
            </div>
            <div class="db-nav chat-nav-center">
               <a href="javascript:void(0);" id="btnShareVideo" title="Share Video">
                  <div class="sub-default-lft" style="border-right:none;"><i class="fa-video-camera-small chatitem"></i></div>
               </a>
               <a href="javascript:void(0);" id="btnShareAudio" title="Unmute">
                  <div class="sub-default-lft" style="border-right:none;"><i class="fa-microphone-small chatitem"></i></div>
               </a>
               <a href="javascript:void(0);" id="btnSendInvite" title="Send Invite">
                  <div class="sub-default-lft" style="border-right:none;"><i class="fa-envelope-o chatitem"></i></div>
               </a>
               <a href="javascript:void(0);" id="btnMuteAll" title="Mute All">
                  <div class="sub-default-lft" style="border-right:none;"><i class="fa-volume-off chatitem"></i></div>
               </a>
               <a href="javascript:void(0);" id="btnRaiseHand" title="Raise Hand">
                  <div class="sub-default-lft" style="border-right:none;"><i class="fa-raise-hand-small chatitem"></i></div>
               </a>
               <a href="javascript:void(0);" id="btnEnlargeVideo" title="Enlarge Video">
                  <div class="sub-default-lft" style="border-right:none;"><i class="fa-expand-small chatitem"></i></div>
               </a>
            </div>
         </div>
      </div>
      <div data-options="region:'center'" id="chatParent" style="overflow:hidden; border:0px;">
         <div id="chatContainer"> </div>
      </div>
      <div data-options="region:'south',split:false" style="width:100%; border:0px;">
         <div id="chat-input-box" style="border:1px solid #eee; border-left:0px solid;">
            <input id="input-box" class="easyui-textbox" data-options="buttonText:'Send',prompt:'Enter your text here...',iconWidth:22" style="width:100%; height:40px; border-radius:0px; -webkit-border-radius:0px; -moz-border-radius:0px">
         </div>
      </div>
   </div>   
</div>

<!--Left Navigation starts --> 
<div id="west" data-options="region:'west', title:'',iconCls:'', split:false, collapsible:false" style="width:55px;">
   <div class="wr-left">
      <div class="wr-lft-cont column">
         <div class="sub-default clickDisable" id="lftMainmenu">
             <a href="javascript:void(0);" id="ancSelect" title="Select Tool">
               <div class="sub-default-lft"><i class="fa-mouse-pointer"></i></div>
            </a>
             <a href="javascript:void(0);" id="ancBackground" title="Background">
               <div class="sub-default-lft"><i class="fa-circle wbitem"></i></div>
             </a>
             <a href="javascript:void(0);" id="ancPattern" title="Pattern">
               <div class="sub-default-lft" ><img src="whiteboard/images/pattern-icon.png" style="border:1px solid #ccc;border-radius:60px;"/></div>
             </a>
             <a href="javascript:void(0);" id="ancPencil" title="Pencil">
               <div class="sub-default-lft" style="border-right:none;"><i class="fa-pencil wbitem" style="font-size:120%;"></i></div>
             </a>
             <a href='javascript:void(0)' id="ancEraser" title="Eraser">
               <div class="sub-default-lft"><i class="fa-eraser"></i></div>
             </a>
             <a href="javascript:void(0);" id="ancShape" title="Shapes">
               <div class="sub-default-lft" style="border-right:none;"><img src="whiteboard/images/shape-sm.png" /></div>
             </a>
             <a href="javascript:void(0);" id="ancText" title="Text">
               <div class="sub-default-lft" style="border-right:none;"><i class="fa-text-height"></i></div>
             </a> 
             <a href="javascript:void(0);" id="ancImage" title="Image">
               <div class="sub-default-lft" style="border-right:none;"><i class="fa-file-image-o"></i></div>
             </a>                         
               
            <a href="javascript:void(0);" id="ancTutorConnect" title="Tutor Connect Content Presentation">
               <div class="sub-default-lft" style="border-right:none;"><img src="themes/css/icons/image-editor.png" /></div>
            </a>             
            <a href="javascript:void(0);" id="ancStartChat" title="Meeting">
               <div class="sub-default-lft" style="border-right:none;"><img src="themes/css/icons/chat_room.png" /></div>
            </a> 		             
            <a href="javascript:void(0);" id="ancDownload" title="Download/Upload">
               <div class="sub-default-lft" style="border-right:none;"><img src="whiteboard/images/up-down.png" /></div>
            </a> 		   
                                  
         </div>
      </div>
    </div>           
</div>
<!--End of Left Navigation -->

<!--BOTTOM STARTS -->
<div id="south" data-options="region:'south',iconCls:'icon-image-editor', title:'Slides', split:false,collapsible:true" style="height:115px">
</div>
<!--BOTTOM ENDS -->

<!--STAGE STARTS -->
<div id="center" data-options="region:'center'" style="height:100%">
   <div id="stage">
      <canvas id="canvasBoard"></canvas>
      <!--WebRTC block -->
      <!-- placeholder for shared part of the screen(from the user side) -->
      <div id="containerSharedPartOfScreenPreview" style="display:none;">
        <img id="sharedPartOfScreenPreview"  style="max-width:100%;"/>
      </div>
      <!--END WebRTC block -->         
   </div>
   <!-- header top right menu second -->         
   <div class="wr-rgt">
      <div class="wr-rgt-cont">
        
        <!-- code of background color picker -->
         <div class="subProperties left-meni-slide" id="bgColorpick" style="min-height:306px; max-height:100%;">
            <div class="icon-curve icon-bgcolor" style="background:transparent !important"></div>
            <div class="sub-tools items">
               <a href="javascript:void(0);" class='clsBgColor bgcrcle'><div class="blck-bgpicker"></div>
               </a>            
               <a href="javascript:void(0);" class='clsBgColor bgcrcle'><div class="red-bgpicker"></div></a>
               <a href="javascript:void(0);" class='clsBgColor bgcrcle'><div class="green-bgpicker"></div></a>
               <a href="javascript:void(0);" class='clsBgColor bgcrcle'><div class="yellow-bgpicker"></div></a>
               <a href="javascript:void(0);" class='clsBgColor bgcrcle'><div class="blue-bgpicker"></div></a>
               <a href="javascript:void(0);" class='clsBgColor bgcrcle'><div class="white-bgpicker"></div></a> 
               <a href="javascript:void(0);" class='bgcrcle'>
                  <input type="color" id="txtBgColorVal" class="form-control picker" value="#000000">            
               </a>
            </div>          
         </div>
         <!-- end of code for background color picker -->
                   
         <!-- code of patterns -->
         <div class="subProperties left-meni-slide" id="bgPattern" style="min-height:312px; max-height:100%;">
            <div class="icon-curve icon-bgpattern"></div>
           <div class="sub-tools items">
              <a href="javascript:void(0);" class='clsBgColor bgcrcle h30' title="Guidelines">
                 <div class="bgclpkr bgpatterns"><img src="whiteboard/images/transparent-guidelines.png" /></div>
              </a>
              <a href="javascript:void(0);" class='clsBgColor bgcrcle h30' title="Book Guidelines">
                 <div class="bgclpkr bgpatterns"><img src="whiteboard/images/transparent-booklines.png" /></div>
              </a>
              <a href="javascript:void(0);" class='clsBgColor bgcrcle h30' title="Transparent Background">
                 <div class="bgclpkr bgpatterns"><img src="whiteboard/images/transparent.png" /></div>
              </a>
              <a href="javascript:void(0);" class='clsBgColor bgcrcle h30' title="Guidelines">
                 <div class="bgclpkr bgpatterns"><img src="whiteboard/images/transparent-diamond.png" /></div>
              </a>
              <a href="javascript:void(0);" class='clsBgColor bgcrcle h30' title="Book Guidelines">
                 <div class="bgclpkr bgpatterns"><img src="whiteboard/images/transparent-lgap.png" /></div>
              </a>
              <a href="javascript:void(0);" class='clsBgColor bgcrcle h30' title="Transparent Background">
                 <div class="bgclpkr bgpatterns"><img src="whiteboard/images/transparent-checkered.png" /></div>
              </a>   
              <a href="javascript:void(0);" class='bgcrcle' title="Transparent Background" style="padding:3px 5px 4px 7px!important;">
                <form method="post" enctype="multipart/form-data">       
                   <input type="file" id="filePattern" name="filePattern" title="Upload Pattern from Computer"/>	               
                </form>
                <div class="fileuploadph" id="btnUploadPattern" title="Upload Pattern from Computer"><i class="fa-upload"></i></div>
              </a>              
           </div>
         </div>
         <!-- end of code patterns -->
         
         <!-- code of pencil -->
         <div class="subProperties left-meni-slide" id="penEdit" style="min-height:345px; max-height:100%;">  
           <div class="icon-curve icon-pendit"></div>
           <div class="sub-tools">          
             <div class="items" style="margin:0px 51px 0px 0px;">            
               <a href="javascript:void(0);" class='clsPencilColor bgcrcle'>
                   <input type="color" id="txtPencilClrVal" class="form-control picker" value="#000000"> 
               </a>            
               <a href="javascript:void(0);" class='clsPencilColor bgcrcle'><div class="blck-bgpicker"></div></a>
               <a href="javascript:void(0);" class='clsPencilColor bgcrcle'><div class="red-bgpicker"></div></a>
               <a href="javascript:void(0);" class='clsPencilColor bgcrcle'><div class="green-bgpicker"></div></a>
               <a href="javascript:void(0);" class='clsPencilColor bgcrcle'><div class="yellow-bgpicker"></div></a>
               <a href="javascript:void(0);" class='clsPencilColor bgcrcle'><div class="white-bgpicker"></div></a>
               <a href="javascript:void(0);" class='clsPencilColor bgcrcle'><div class="blue-bgpicker"></div></a>
             </div>
             <input id="lineSlide" name="lineSlide" value="2"  />
           </div>        
         </div>
         <!-- end of code for pencil-->
         
         <!-- code for eraser--> 
         <div class="subProperties left-meni-slide" id="eraseOptions" style="min-height:43px; max-height:100%;">
           <div class="icon-curve icon-eraseoption"></div>
           <div class="sub-tools">      
             <input id="eraserSlide" name="eraserSlide" value="2" />
           </div>
         </div>
         <!-- end of code for eraser-->
         
         <!-- code of shapes -->
         <div class="subProperties left-meni-slide" id="shapeOptions" style="min-height:351px; max-height:100%;">
           <div class="icon-curve icon-shpeoption"></div>
           <div class="sub-tools items">
             <a href="javascript:void(0);" class='shapeFillColor bgcrcle'>                      
                <input type="color" id="txtFillClrVal" class="form-control picker" value="">
             </a>                              
             <a href="javascript:void(0)" class="" id="shapeRect" title="Rectangle" data-style='rectangle'>
               <img src="whiteboard/images/rectangle-sm.png" title="Rectangle"/></a> 
             <a href="javascript:void(0)" class="" id="shapeSquare" title="Square" data-style='square'>
               <img src="whiteboard/images/square-sm.png" title="Square"/></a>
             <a href="javascript:void(0)" class="" id="shapeCircle" title="Circle" data-style='circle'>
               <img src="whiteboard/images/circle-sm.png" title="Circle"/></a>
             <a href="javascript:void(0)" class="" id="shapeTriangle" title="Triangle" data-style='triangle'>
                <img src="whiteboard/images/triangle-sm.png" title="Triangle"/></a>
             <a href="javascript:void(0)" class="" id="shapeLine" title="Line" data-style='line'>
                <img src="whiteboard/images/line-sm.png" title="Line"/></a>
             <a href="javascript:void(0)" class="" id="shapeEllipse" title="Ellipse" data-style='ellipse'>
                <img src="whiteboard/images/ellipse-sm.png" title="Ellipse"/></a>               
             <a href='javascript:void(0)' class="eraser" id="btnRemoveShape" title="delete"><div class="trash-bgpicker" style="border:none!important;">
             <i class="fa-trash"></i></div></a>
           </div>                     
           <!-- <input type="text" id="txtShapeOutline" value="2" class="input-align" style="width:18%; float:left;"/>  
           <input type="color" id="txtShapeOutlineClrVal" class="form-control" value="#000000" style="width:23px; float:left;"> 
           <input type="text" id="txtShapeOutlineHexavalue" value="#000000" style="width:58%;float:left;margin:0px 5px 0px 4px;"/>-->
         </div>
         <!-- end of code for shapes -->
           
         <!-- HTML of Text -->
         <div id="textOptions" class='subProperties left-meni-slide' style="min-height:135px; max-height:100%;">
            <div class="icon-curve icon-txtoptions"></div>
            <div id="dd">
               <div class="sub-tools items">
                 <a href="javascript:void(0)" id="btnNewText" title="Add New Text"><i class="fa-plus trashh"></i></a>
                 <a href="javascript:void(0)" id="btnRemoveText" title="Delete Text"><i class="fa-trash trashh"></i></a>
                 <a href="javascript:void(0)" id="btnShowMenu" title="Show Text Menu"><i class="fa-bars trashh"></i></a>
               </div>            
             </div>   
           </div>                
         <!-- End of HTML Text -->
         
         <!-- HTML of Image -->
         <div id="imageOptions" class='subProperties left-meni-slide' style="min-height:91px; max-height:100%;">
            <div class="icon-curve icon-imgoptions"></div>
            <div class="sub-tools items">            
               <a href="javascript:void(0)" id="btnNewImage" title="Add New Image"><i class="fa-upload trashh" style="font-size:130%!important;"></i></a>
               <a href="javascript:void(0)" id="btnRemoveImage" class='clsCance' title="Remove Image"><i class="fa-trash trashh"></i></a>  
               <div class="text-tool sub-tools-cat" id="catOne">               
                  <form method="post" enctype="multipart/form-data" id="imageForm" >       
                     <input type="file" id="fileImage" name="fileImage" title="Upload Image from Computer">
                  </form> 
                  <div style="clear:both;"></div>                
               </div>   
            </div>               
         </div> 
         <!-- End of HTML Image -->
         
         <!-- code of download -->
         <div class="subProperties left-meni-slide" id="downloadOptions" style="min-height:145px; max-height:100%;">
            <div class="icon-curve icon-dwnldoptions"></div>
            <div class="sub-tools items">
              <a href='javascript:void(0)' id="ancDwnJson" title="Download as Board" >
                  <img src="whiteboard/images/download_board.png" class="fa-dwnload" style="width:21px; height:22px;border-radius:0px;"/></a>
              <a href='javascript:void(0)' id="ancDwnJpeg" title="Download as JPEG">
                  <img src="whiteboard/images/download_jpeg.png" class="fa-dwnload" style="width:21px; height:22px;border-radius:0px;"/></a>                           
              <a href='javascript:void(0)'>
                <form method="post" enctype="multipart/form-data" id="uploadForm">       
                   <input type="file" id="fileJson" name="fileJson" title="Upload Board from Computer">
                </form>             
                <div class="fileupload" id="btnUpload" title="Upload Board from Computer"><i class="fa-upload fa-fupload"></i></div>
              </a>
               <div class="clear"></div>  
            </div>
         </div>
         <!-- end of code for download -->
         
     </div>   
   </div>
   <div class="wr-rgt">
      <div class="wr-rgt-cont">
         <div id="btnDisplayMenu" class="textdisplay"> 
              <div class="c-two">
                <select id="txtStyle"> 
                    <option value='Times New Roman'>Times New Roman</option>
                    <option value='Arial'>Arial</option>                        
                    <option value='Helvetica'>Helvetica</option>
                    <option value='sans-serif'>Sans-serif</option>
                    <option value='Impact'>Impact</option>
                    <option value='Open Sans Condensed'>Open Sans Condensed</option>            
                    <option value='Poiret One'>Poiret One</option>
                    <option value='Lobster'>Lobster</option>                        
                    <option value='Shadows Into Light'>Shadows Into Light</option>
                    <option value='Pacifico'>Pacifico</option>
                    <option value='Sigmar One'>Sigmar One</option>
                    <option value='Courgette'>Courgette</option>                   
                    <option value='Lobster Two'>Lobster Two</option>
                    <option value='Pinyon Script'>Pinyon Script</option>
                    <option value='Playball'>Playball</option>                     
                    <option value='Satisfy'>Satisfy</option>
                    <option value='Great Vibes'>Great Vibes</option>                        
                    <option value='Tangerine'>Tangerine</option>
                    <option value='Luckiest Guy'>Luckiest Guy</option>
                </select>
               </div>
              <div class="clear"></div>              
              <div class="c-two">
                  <div id="alignleft" class="c-two-three divAlign" data-opt="left"><a href="javascript:void(0);" ><i class="fa-align-left c-border" ></i></a></div>
                  <div id="aligncenter" class="c-two-three divAlign" data-opt="center"><a href="javascript:void(0);" ><i class="fa-align-center c-border"></i></a></div>
                  <div id="alignright" class="c-two-three divAlign" data-opt="right"><a href="javascript:void(0);" >
                  <i class="fa-align-right c-border"></i></a></div>
                  <div id="stylebold" class="c-two-three divStyleBold" data-opt="bold"><a href="javascript:void(0);" ><i class="fa-bold c-border"></i></a></div>
                  <div id="styleitalic" class="c-two-three divStyleItalic" data-opt="italic"><a href="javascript:void(0);" ><i class="fa-italic c-border"></i></a></div>
              </div>
              <div class="clear"></div> 
              <div class="divider"></div>
              <textarea placeholder="Enter Text Here" cols="4" rows="3" id="txtText">Sample Text</textarea>
              <div class="divider"></div>               
              <div class="c-two">
                 <div class="c-two-three"> <a>Size:</a> <input type="text" id="txtTextSize" value="20" /> </div>
                 <div class="c-two-three" style="width:36%; padding-left:5px!important;"> <a>Color:</a><div class="clear"></div><input type="color" id="txtClrVal" class="form-control" value="#000000"> <input type="text" id="txtHexavalue" value="#000000" />
                 </div>
                 <div class="c-two-three" style="width:36%;"> <a>Background:</a><div class="clear"></div> <input type="color" id="txtBGClrVal" class="form-control" value="#000000"> <input type="text" id="txtBGHexavalue" value="#000000" /> </div><div class="clear"></div>
              </div>
              <div class="divider"></div>
              <div class="c-two"> 
               <div class="c-two-two" style="width:99%!important; text-align:left;"> 
                  <a>Border:</a><div class="clear"></div> 
                  <input type="text" id="txtOutline" value="0" style="width:35%; float:left;"/>  
                  <input type="color" id="txtOutlineClrVal" class="form-control" value="#000000" style="width:23px; float:left; margin:-2px 0px 0px 6px; height:22px;"> 
                  <input type="text" id="txtOutlineHexavalue" value="#000000" style="width:36%;float:left;padding:0px 5px; margin:-3px 0px 0px 4px;"/>
               </div>
              </div><div class="clear"></div> 
            </div>
      </div>            
   </div>
   
   <!-- code of Help -->      
   <div class="subProperties helpclas" id="helpOptions">
      <div class="sub-tools" style="right:0px!important; background:#fff!important; margin:0px!important;">  
         <div class="easyui-accordion" style="width:242px;" > 
            <div title="Background" data-options="iconCls:''" style="overflow:auto;padding:0px;">
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-background-color'>How to use Background Tool</a></div>
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-background-patterns'>How to use Background Patterns</a></div>
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-background-upload-image'>How to use Upload Image</a></div>                 
            </div>               
            <div title="Pencil" data-options="iconCls:''" style="overflow:auto;padding:0px;">
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-pencil-width'>How to use Pencil Tool</a></div>        
            </div>
            <div title="Erase" data-options="iconCls:''" style="overflow:auto;padding:0px;">
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-erase'>How to use Erase Tool</a></div>        
            </div>
            <div title="Shape" data-options="iconCls:''" style="overflow:auto;padding:0px;">
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-shape-icons'>How to use Shapes</a></div>
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-shape-colour'>How to use Shape Background Fill</a></div>
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-shape-border'>How to use Shape Border</a></div>                 
            </div> 
            <div title="Text" data-options="iconCls:''" style="overflow:auto;padding:0px;">
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-text-addtext'>How to Add Text</a></div>
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-text-fontfamily'>How to Add Font Family to Text</a></div>  
               <div class="help-acc"><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-text-bold'>How to Add Bold to Text</a></div>
               <div class="help-acc"><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-text-changetext'>How to Edit Text</a></div>
               <div class="help-acc"><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-text-textbgcolor'>How to Add Bakground Color, Font-size, Color</a></div>
               <div class="help-acc"><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-text-textbordercolor'>How to Add Border to Text</a></div>
            </div> 
            <div title="Image" data-options="iconCls:''" style="overflow:auto;padding:0px;">
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-image-addremove'>How to use Image Tool</a></div>        
            </div>
            <div title="Upload/Download" data-options="iconCls:''" style="overflow:auto;padding:0px;">
               <div class="help-acc" ><a class="ancHelp" href="javascript:void(0)" alt='how-to-use-download-upload'>How to use Upload/Download Tool</a></div>        
            </div>
          </div>
      </div>
   </div>
   <!-- end of code Help -->
   
   <!--STAGE ENDS -->
   <div id="helpWindow" class="easyui-window" title="Help Guide for Whiteboard" data-options="iconCls:'icon-help'" style="width:955px;height:500px;">
      <img src=""/>
   </div>


<script src="themes/js/lightslider.js"></script>
<script>
$(document).ready(function(event) {
    var room_id, user_name;
    ion.sound({
        sounds: [{
            name: "bell_ring"
        }],
        path: "/themes/js/sounds/",
        preload: true,
        multiplay: true,
        volume: 0.9
    });
    $('#dlg').dialog('close');
    $('#invite').dialog('close');
    $('#ancStartChat').bind('click', function() {
        $('#dlg').dialog('open');
    });
    $('#eids').textbox({
        onClickButton: function() {
            if ($('#eids').validatebox('isValid')) {
                var url = "board-invite.php";
                var inputs = {
                    'mid': room_id,
                    'user': user_name,
                    'emails': $('#eids').val()
                };
                $.ajax({
                    type: "POST",
                    url: url,
                    data: inputs,
                    dataType: 'json',
                    beforeSend: function() {
                        $('#invite').dialog('close');
                        $("#wait").html("Sending invitation...");
                        $(".wrapLoader").css({
                            "visibility": "visible"
                        });
                    },
                    success: function(data) {
                        $(".wrapLoader").css({
                            "visibility": "hidden"
                        });
                        $.messager.alert('Message', data.message);
                    },
                    error: function(data) {
                        $(".wrapLoader").css({
                            "visibility": "hidden"
                        });
                        $.messager.alert('Message', data.message);
                    }
                });
            }
        }
    });
    window.onbeforeunload = function() {
        return "Leaving this page may cause loss of your work!";
    };
    $('.subProperties').hide();
    //$('#penEdit').show();
    var eraserFlag = false;
    var eraserColor = '';
    var eraserArray = new Array;
    var totCount = 0;
    var totArray = new Array;
    var gcanvas = new fabric.Canvas('canvasBoard', {
        isDrawingMode: true,
        backgroundColor: '#ffffff'
    });
    fabric.Object.prototype.transparentCorners = false;
    gcanvas.setHeight($('#center').height());
    gcanvas.setWidth($('#center').width());
    gcanvas.freeDrawingBrush.color = '#000000';
    gcanvas.freeDrawingBrush.width = 2;

    $("#cc").layout('panel', 'east').panel({
        onExpand: function() {
            gcanvas.setWidth($('#center').width() - 220);
            gcanvas.renderAll();
        },
        onCollapse: function() {
            gcanvas.setWidth($('#center').width());
            gcanvas.renderAll();
        }
    });

    /* Background Color */

    $('#ancBackground').click(function() {
        $('.subProperties').hide();
        $("#cc").layout('panel', 'east').panel({
            //title:'Background',
            //iconCls:'icon-bgcolor'
        });
        gcanvas.isDrawingMode = false;
        gcanvas.forEachObject(function(obj) {
            obj.set({
                hasControls: false,
                hasBorders: false,
                selectable: false
            });
        });
        gcanvas.renderAll();
        /*
              if($("#cc").layout('panel','east').panel('options').collapsed ){
                 $('#cc').layout('expand','east');
              }
        */
      $('#bgColorpick').show();
        
     // $('#bgColorpick').animate({
     //           width: "toggle"
     //     });/

    });
    $('.clsBgColor').click(function() {
        var bgclr = $(this).children().css('background-color');
        bgclr = rgb2hex(bgclr);
        if (eraserFlag) {
            gcanvas.forEachObject(function(obj) {
                if (typeof obj.stroke == 'object') {
                    obj.stroke = '#ffffff';
                } else {
                    if (obj.stroke != eraserColor) {
                        if (obj.stroke == '#ffffff' || obj.stroke == '#fff') {
                            obj.stroke = bgclr;
                            eraserColor = bgclr;
                        } else {
                            eraserColor = bgclr;
                        }
                    } else {
                        obj.stroke = bgclr;
                    }
                }
            });
        }
        gcanvas.setBackgroundImage('');
        gcanvas.setBackgroundColor('');
        $('#txtBgColorVal').val(bgclr);
        gcanvas.setBackgroundColor(bgclr);
        gcanvas.renderAll();
    });

    function clearSlide() {
        if (gcanvas.getObjects().length > 0) {
            gcanvas.clear();
            gcanvas.freeDrawingBrush.width = 2;
            gcanvas.freeDrawingBrush.color = '#000000';
            eraserFlag = false;
            gcanvas.renderAll();
            $('#lineSlide').numberspinner({
                value: 2
            });
            $('#eraserSlide').numberspinner({
                value: 2
            });
            $('#txtPencilClrVal').val('#000000');
            $('#txtPencilClrHexa').val('#000000');
            $('#txtShapeOutline').val(2);
            $('#txtShapeOutlineHexavalue').val('#000000');
            $('#txtShapeOutlineClrVal').val('#000000');
            $('#txtFillClrVal').val('#000000');
            $('#txtFillClrHexa').val('#000000');
            txtNum = 1;
            shapenum = 1;
        }
    }

    function displaySlide(src) {
        if (!(src.length > 0)) {
            return false;
        }
        var imgObj = new Image();
        imgObj.crossOrigin = "Anonymous";
        imgObj.onload = function() {
            var image = new fabric.Image(imgObj);
            gcanvas.setBackgroundColor('#ffffff');
            gcanvas.setBackgroundImage(image, gcanvas.renderAll.bind(gcanvas), {
                scaleY: gcanvas.height / image.height,
                scaleX: gcanvas.width / image.width,
                backgroundImageStretch: true
            });
        }
        imgObj.src = src;
        $('img[seq]').attr("style", "border:1px solid #ccc");
        $('img[seq="' + slideSeq + '"]').attr("style", "border:2px solid #407450");
    }
    var slideSeq = 0,
        maxSeq = 0,
        slideSrc = "",
        baseURL = "";
    $(document).on("click", '#south .clsBgColor img', function(event) {
        slideSrc = $(this).attr("alt");
        slideSeq = parseInt($(this).attr("seq"));
        maxSeq = parseInt($(this).attr("max"));
        baseURL = $(this).attr("base");
        clearSlide();
        displaySlide(slideSrc);
    });
    $(document).keydown(function(e) {
        /* Previous slide */
        if (e.keyCode == 37 || e.keyCode == 40) {
            if (slideSeq > 0) {
                slideSeq = slideSeq - 1;
                slideSrc = baseURL + "/" + "slide-" + slideSeq + ".jpg";
                clearSlide();
                displaySlide(slideSrc);
            }
            return false;
        }
    });
    $(document).keydown(function(e) {
        /* Next slide */
        if (e.keyCode == 38 || e.keyCode == 39) {
            if (slideSeq < maxSeq - 1) {
                slideSeq = slideSeq + 1;
                slideSrc = baseURL + "/" + "slide-" + slideSeq + ".jpg";
                clearSlide();
                displaySlide(slideSrc);
            }
            return false;
        }
    });
    $('#txtBgColorVal').change(function() {
        var bgclr = $(this).val();
        if (eraserFlag) {
            gcanvas.forEachObject(function(obj) {
                if (typeof obj.stroke == 'object') {
                    obj.stroke = '#ffffff';
                } else {
                    if (obj.stroke != eraserColor) {
                        eraserColor = bgclr;
                    } else {
                        obj.stroke = bgclr;
                    }
                }
            });
        }
        gcanvas.setBackgroundImage('');
        gcanvas.setBackgroundColor('');
        gcanvas.setBackgroundColor(bgclr);
        gcanvas.renderAll();
    });

    $('.bgclpkr').click(function() {
        var src = $(this).children().attr('src');
        gcanvas.setBackgroundImage('');
        gcanvas.setBackgroundColor('');
        gcanvas.setBackgroundColor({
            source: src,
            repeat: 'repeat'
        }, function() {
            gcanvas.renderAll();
        });
        slideSrc = "";
        /*  if(eraserFlag)
         {  
            gcanvas.forEachObject(function(obj){
               if(typeof obj.stroke == 'object'){   
                   obj.stroke = '#ffffff';  
               } else {
                  if(eraserArray.indexOf(obj.stroke) != -1){             
                     obj.stroke = '#ffffff';
                  } 
               } 
            });           
         }    */
    });
    $('#btnUploadPattern').click(function() {
        $('#filePattern').trigger('click');
    });
    $('#filePattern').change(function(e) {
        var file = $('#filePattern').val();
        var exts = ['jpg', 'jpeg', 'png'];
        if (file.length <= 0) {
            alert("Please select a file from local drive.");
            $('#filePattern').focus();
            return false;
        }
        var ext = file.split('.');
        ext = ext.reverse();
        if ($.inArray(ext[0].toLowerCase(), exts) < 0) {
            alert("Please select jpg/jpeg/png format files only.");
            $('#filePattern').focus();
            return false;
        }
        var reader = new FileReader();
        reader.onload = function(event) {
            var imgObj = new Image;
            imgObj.src = event.target.result;
            imgObj.onload = function() {
                var image = new fabric.Image(imgObj);
                gcanvas.setBackgroundColor('#ffffff');
                gcanvas.setBackgroundImage(image, gcanvas.renderAll.bind(gcanvas), {
                    scaleY: gcanvas.height / image.height,
                    scaleX: gcanvas.width / image.width
                });
                slideSrc = "";
            }
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    /* Pencil */

    $('#ancPencil').click(function() {
        readdFlag = 0;
        $("#cc").layout('panel', 'east').panel({
            //title:'Pencil',
            //iconCls:'icon-pencil'
        });
        eraserFlag = false;
        gcanvas.isDrawingMode = true;
        gcanvas.freeDrawingBrush.color = $('#txtPencilClrVal').val();
        gcanvas.freeDrawingBrush.width = $('#lineSlide').val();
        gcanvas.forEachObject(function(obj) {
            obj.set({
                hasControls: false,
                hasBorders: false,
                selectable: false
            });
        });
        gcanvas.renderAll();
        $('.subProperties').hide();
        /*
              if( $("#cc").layout('panel','east').panel('options').collapsed ){
                 $('#cc').layout('expand','east');
              }
        */
        $('#penEdit').show();
    });
    $('.clsPencilColor').click(function() {
        var pclr = $(this).children().css('background-color');
        pclr = rgb2hex(pclr);
        $('#txtPencilClrVal').val(pclr);
        $('#txtPencilClrHexa').val(pclr);
        gcanvas.freeDrawingBrush.color = pclr;
        gcanvas.renderAll();
    });

    function rgb2hex(rgb) {
        rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
        return (rgb && rgb.length === 4) ? "#" +
            ("0" + parseInt(rgb[1], 10).toString(16)).slice(-2) +
            ("0" + parseInt(rgb[2], 10).toString(16)).slice(-2) +
            ("0" + parseInt(rgb[3], 10).toString(16)).slice(-2) : '';
    }
    $('#lineSlide').numberspinner({
        min: 1,
        max: 50,
        increment: 1,
        editable: true,
        value: 2,
        onChange: function(nv) {
            gcanvas.freeDrawingBrush.color = $('#txtPencilClrVal').val();
            gcanvas.freeDrawingBrush.width = parseInt(nv);
            gcanvas.renderAll();
        }
    });
    $('#txtPencilClrVal').change(function() {
        $('#txtPencilClrHexa').val($(this).val());
        gcanvas.freeDrawingBrush.color = $(this).val();
        gcanvas.renderAll();
    });
    $('#txtPencilClrHexa').keyup(function() {
        $('#txtPencilClrVal').val($(this).val());
        gcanvas.freeDrawingBrush.color = $(this).val();
        gcanvas.renderAll();
    });

    /* Eraser */
    $('#ancEraser').click(function() {
        eraserFlag = true;
        if (typeof gcanvas.backgroundColor == 'object') {
            eraserColor = '#ffffff';
        } else {
            eraserColor = gcanvas.backgroundColor;
        }
        $("#cc").layout('panel', 'east').panel({
            // title:'Eraser',
            //iconCls:'icon-eraser'
        });
        eraserArray.push(eraserColor);
        gcanvas.freeDrawingBrush.color = eraserColor;
        gcanvas.freeDrawingBrush.width = $('#eraserSlide').val();
        gcanvas.isDrawingMode = true;
        gcanvas.forEachObject(function(obj) {
            obj.set({
                hasControls: false,
                hasBorders: false,
                selectable: false
            });
        });
        gcanvas.renderAll();
        $('.subProperties').hide();
        /*
              if( $("#cc").layout('panel','east').panel('options').collapsed ){
                 $('#cc').layout('expand','east');
              }
        */
        $('#eraseOptions').show();
    });

    $('#eraserSlide').numberspinner({
        min: 1,
        max: 50,
        increment: 1,
        editable: true,
        value: 2,
        onChange: function(nv) {
            eraserFlag = true;
            eraserColor = gcanvas.backgroundColor;
            gcanvas.freeDrawingBrush.color = eraserColor;
            gcanvas.freeDrawingBrush.width = parseInt(nv);
            gcanvas.renderAll();
        }
    });

    /* Shapes */

    var shapeArry = new Array();
    var shapenum = 1;
    $('#ancShape').click(function() {
        $("#cc").layout('panel', 'east').panel({
            //title:'Shapes',
            //iconCls:'icon-shapes'
        });
        eraserFlag = false;
        gcanvas.isDrawingMode = false;
        gcanvas.forEachObject(function(obj) {
            obj.set({
                hasControls: false,
                hasBorders: false,
                selectable: false
            });
        });
        gcanvas.renderAll();
        $('.subProperties').hide();
        /*
              if( $("#cc").layout('panel','east').panel('options').collapsed ){
                 $('#cc').layout('expand','east');
              }
        */
        $('#shapeOptions').show();
        if (shapenum > 1) {
            for (var i = 1; i <= shapenum - 1; i++) {
                shapeArry[i].set({
                    hasControls: true,
                    hasBorders: true,
                    selectable: true
                });
            }
        }
    });
    $('.shapeFillColor').click(function() {
        var fclr = $(this).children().css('background-color');
        fclr = rgb2hex(fclr);
        $('#txtFillClrVal').val(fclr);
        $('#txtFillClrHexa').val(fclr);
        var cobj = gcanvas.getActiveObject();
        cobj.setFill(fclr);
        gcanvas.renderAll();
    });
    $('#shapeRect').click(function() {
        addRect(shapenum);
        shapenum++;
    });
    $('#shapeSquare').click(function() {
        addSquare(shapenum);
        shapenum++;
    });
    $('#shapeCircle').click(function() {
        addCircle(shapenum);
        shapenum++;
    });
    $('#shapeTriangle').click(function() {
        addTriangle(shapenum);
        shapenum++;
    });
    $('#shapeLine').click(function() {
        addLine(shapenum);
        shapenum++;
    });
    $('#shapeEllipse').click(function() {
        addEllipse(shapenum);
        shapenum++;
    });

    function addRect(shapenum) {
        shapeArry[shapenum] = new fabric.Rect({
            width: 200,
            height: 100,
            left: 50,
            top: 50,
            fill: '',
            stroke: '#000000',
            strokeWidth: 2
        });
        shapeArry[shapenum].on('selected', function(e) {
            $('#txtFillClrVal').val(this.getFill());
            $('#txtFillClrHexa').val(this.getFill());
            $('#txtShapeOutline').val(this.getStrokeWidth());
            $('#txtShapeOutlineClrVal').val(this.getStroke());
            $('#txtShapeOutlineHexavalue').val(this.getStroke());
            gcanvas.bringForward(this);
        });
        gcanvas.add(shapeArry[shapenum]);
        gcanvas.centerObject(shapeArry[shapenum]);
        shapeArry[shapenum].setCoords();
        gcanvas.setActiveObject(shapeArry[shapenum]);
        gcanvas.renderAll();
    };

    function addSquare(shapenum) {
        shapeArry[shapenum] = new fabric.Rect({
            width: 100,
            height: 100,
            left: 150,
            top: 50,
            fill: '',
            stroke: '#000000',
            strokeWidth: 2
        });
        shapeArry[shapenum].on('selected', function(e) {
            $('#txtFillClrVal').val(this.getFill());
            $('#txtFillClrHexa').val(this.getFill());
            $('#txtShapeOutline').val(this.getStrokeWidth());
            $('#txtShapeOutlineClrVal').val(this.getStroke());
            $('#txtShapeOutlineHexavalue').val(this.getStroke());
            gcanvas.bringForward(this);
        });
        gcanvas.add(shapeArry[shapenum]);
        gcanvas.centerObject(shapeArry[shapenum]);
        shapeArry[shapenum].setCoords();
        gcanvas.setActiveObject(shapeArry[shapenum]);
        gcanvas.renderAll();
    };

    function addCircle(shapenum) {
        shapeArry[shapenum] = new fabric.Circle({
            radius: 50,
            fill: '',
            stroke: '#000000',
            strokeWidth: 2
        });
        shapeArry[shapenum].on('selected', function(e) {
            $('#txtFillClrVal').val(this.getFill());
            $('#txtFillClrHexa').val(this.getFill());
            $('#txtShapeOutline').val(this.getStrokeWidth());
            $('#txtShapeOutlineClrVal').val(this.getStroke());
            $('#txtShapeOutlineHexavalue').val(this.getStroke());
            gcanvas.bringForward(this);
        });
        gcanvas.add(shapeArry[shapenum]);
        gcanvas.centerObject(shapeArry[shapenum]);
        shapeArry[shapenum].setCoords();
        gcanvas.setActiveObject(shapeArry[shapenum]);
        gcanvas.renderAll();
    };

    function addTriangle(shapenum) {
        shapeArry[shapenum] = new fabric.Triangle({
            width: 100,
            height: 100,
            fill: '',
            stroke: '#000000',
            strokeWidth: 2
        });
        shapeArry[shapenum].on('selected', function(e) {
            $('#txtFillClrVal').val(this.getFill());
            $('#txtFillClrHexa').val(this.getFill());
            $('#txtShapeOutline').val(this.getStrokeWidth());
            $('#txtShapeOutlineClrVal').val(this.getStroke());
            $('#txtShapeOutlineHexavalue').val(this.getStroke());
            gcanvas.bringForward(this);
        });
        gcanvas.add(shapeArry[shapenum]);
        gcanvas.centerObject(shapeArry[shapenum]);
        shapeArry[shapenum].setCoords();
        gcanvas.setActiveObject(shapeArry[shapenum]);
        gcanvas.renderAll();
    };

    function addLine(shapenum) {
        shapeArry[shapenum] = new fabric.Line([0, 0, 200, 0], {
            fill: '#000000',
            stroke: '#000000',
            strokeWidth: 2
        });
        shapeArry[shapenum].on('selected', function(e) {
            $('#txtFillClrVal').val(this.getFill());
            $('#txtFillClrHexa').val(this.getFill());
            $('#txtShapeOutline').val(this.getStrokeWidth());
            $('#txtShapeOutlineClrVal').val(this.getStroke());
            $('#txtShapeOutlineHexavalue').val(this.getStroke());
            gcanvas.bringForward(this);
        });
        gcanvas.add(shapeArry[shapenum]);
        gcanvas.centerObject(shapeArry[shapenum]);
        shapeArry[shapenum].setCoords();
        gcanvas.setActiveObject(shapeArry[shapenum]);
        gcanvas.renderAll();
    };

    function addEllipse(shapenum) {
        shapeArry[shapenum] = new fabric.Ellipse({
            fill: '',
            stroke: '#000000',
            strokeWidth: 2,
            rx: 100,
            ry: 50
        });
        shapeArry[shapenum].on('selected', function(e) {
            $('#txtFillClrVal').val(this.getFill());
            $('#txtFillClrHexa').val(this.getFill());
            $('#txtShapeOutline').val(this.getStrokeWidth());
            $('#txtShapeOutlineClrVal').val(this.getStroke());
            $('#txtShapeOutlineHexavalue').val(this.getStroke());
            gcanvas.bringForward(this);
        });
        gcanvas.add(shapeArry[shapenum]);
        gcanvas.centerObject(shapeArry[shapenum]);
        shapeArry[shapenum].setCoords();
        gcanvas.setActiveObject(shapeArry[shapenum]);
        gcanvas.renderAll();
    };

    $('#txtFillClrHexa').keyup(function() {
        $('#txtFillClrVal').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        cobj.setFill($(this).val());
        gcanvas.renderAll();
    });
    $('#txtFillClrVal').change(function() {
        $('#txtFillClrHexa').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        cobj.setFill($(this).val());
        gcanvas.renderAll();
    });
    $('#txtShapeOutline').keyup(function() {
        var cobj = gcanvas.getActiveObject();
        cobj.set({
            strokeWidth: parseInt($(this).val())
        });
        gcanvas.renderAll();
    });
    $('#txtShapeOutlineHexavalue').keyup(function() {
        $('#txtShapeOutlineClrVal').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        cobj.setStroke($(this).val());
        gcanvas.renderAll();
    });
    $('#txtShapeOutlineClrVal').change(function() {
        $('#txtShapeOutlineHexavalue').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        cobj.setStroke($(this).val());
        gcanvas.renderAll();
    });

    $('.clrDynamicCanvas').click(function() {
        if (gcanvas.getObjects().length > 0) {
            var confirmFlag = confirm("Do you really want to clear the board?");
            if (confirmFlag == true) {
                gcanvas.clear();
                gcanvas.freeDrawingBrush.width = 2;
                gcanvas.freeDrawingBrush.color = '#000000';
                eraserFlag = false;
                gcanvas.renderAll();
                $('#lineSlide').numberspinner({
                    value: 2
                });
                $('#eraserSlide').numberspinner({
                    value: 2
                });
                $('#txtPencilClrVal').val('#000000');
                $('#txtPencilClrHexa').val('#000000');
                $('#txtShapeOutline').val(2);
                $('#txtShapeOutlineHexavalue').val('#000000');
                $('#txtShapeOutlineClrVal').val('#000000');
                $('#txtFillClrVal').val('#000000');
                $('#txtFillClrHexa').val('#000000');
                txtNum = 1;
                shapenum = 1;
            }
        }
    });

    $('#btnRemoveShape').click(function() {
        var cobj = gcanvas.getActiveObject();
        gcanvas.remove(cobj);
        gcanvas.renderAll();
        $('#txtShapeOutline').val(2);
        $('#txtShapeOutlineHexavalue').val('#000000');
        $('#txtShapeOutlineClrVal').val('#000000');
        $('#txtFillClrVal').val('#000000');
        $('#txtFillClrHexa').val('#000000');
    });

    /* Text */

    var txtNum = 1;
    var iTextArr = new Array();
    var textArr = new Array();
    var fontArr = new Array();
    var alignArr = new Array();
    var styleArr = new Array();
    var sizeArr = new Array();
    var colorArr = new Array();

    $('#ancText').click(function() {
        $("#cc").layout('panel', 'east').panel({
            //  title:'Text',
            // iconCls:'icon-text'
        });
        eraserFlag = false;
        gcanvas.isDrawingMode = false;
        gcanvas.forEachObject(function(obj) {
            obj.set({
                hasControls: false,
                hasBorders: false,
                selectable: false
            });
        });
        gcanvas.renderAll();
        $('.subProperties').hide();
        /*
              if( $("#cc").layout('panel','east').panel('options').collapsed ){
                 $('#cc').layout('expand','east');
              }
        */
        $('#textOptions').show();
        if (txtNum > 1) {
            for (var i = 1; i <= txtNum - 1; i++) {
                iTextArr[i].set({
                    hasControls: true,
                    hasBorders: true,
                    selectable: true
                });
            }
        }
        addText(txtNum);
        txtNum++;
    });

    function addText(num) {
        textArr[num] = 'Sample Text';
        fontArr[num] = 'Times New Roman';
        alignArr[num] = 'left';
        sizeArr[num] = '20';
        styleArr[num] = 'normal';
        colorArr[num] = '#ff0000';
        $('.divStyleBold i, .divStyleItalic i').css({
            'background-color': "#ffffff",
            'color': '#000000'
        });
        $('.divAlign i').css({
            'background-color': "#ffffff",
            'color': '#000000'
        });
        $('#alignleft i').css({
            'background-color': "#424242",
            'color': '#ffffff'
        });
        iTextArr[num] = new fabric.IText(textArr[num], {
            fill: colorArr[num],
            hasControls: true,
            hasBorders: true,
            hasRotatingPoint: true
        });
        iTextArr[num].set({
            fontFamily: fontArr[num],
            textAlign: alignArr[num],
            fontStyle: styleArr[num],
            fontSize: sizeArr[num],
            padding: 5
        });
        iTextArr[num].on('selected', function(e) {
            $('#txtStyle').val(this.getFontFamily());
            $('#txtText').val(this.getText());
            $('#txtTextSize').val(this.getFontSize());
            $('#txtClrVal').val(this.getFill());
            $('#txtHexavalue').val(this.getFill());
            $('#txtOutline').val(this.getStrokeWidth());
            $('#txtOutlineClrVal').val(this.getStroke());
            $('#txtOutlineHexavalue').val(this.getStroke());
            $('#txtBGClrVal').val(this.getTextBackgroundColor());
            $('#txtBGHexavalue').val(this.getTextBackgroundColor());
            var alignopt = this.getTextAlign();
            var styleopt = this.getFontStyle();
            var weightopt = this.getFontWeight();
            $('.divAlign i').css({
                'background-color': "#ffffff",
                'color': '#000000'
            });
            $('#align' + alignopt + ' i').css({
                'background-color': "#424242",
                'color': '#ffffff'
            });
            $('.divStyleBold i').css({
                'background-color': "#ffffff",
                'color': '#000000'
            });
            $('#style' + weightopt + ' i').css({
                'background-color': "#424242",
                'color': '#ffffff'
            });
            $('.divStyleItalic i').css({
                'background-color': "#ffffff",
                'color': '#000000'
            });
            $('#style' + styleopt + ' i').css({
                'background-color': "#424242",
                'color': '#ffffff'
            });
        });
        gcanvas.on('text:changed', function(e) {
            var cobj = gcanvas.getActiveObject();
            $('#txtText').val(cobj.getText());
        });
        gcanvas.add(iTextArr[num]);
        gcanvas.setActiveObject(iTextArr[num]);
        gcanvas.centerObject(iTextArr[num]);
        iTextArr[num].setCoords();
        gcanvas.renderAll();
    }
    $('#btnNewText').click(function() {
        addText(txtNum);
        txtNum++;
    });
    $('#btnRemoveText').click(function() {
        var cobj = gcanvas.getActiveObject();
        gcanvas.remove(cobj);
        $('.divStyleBold i, .divStyleItalic i').css({
            'background-color': "#ffffff",
            'color': '#000000'
        });
        $('.divAlign i').css({
            'background-color': "#ffffff",
            'color': '#000000'
        });
        $('#alignleft i').css({
            'background-color': "#424242",
            'color': '#ffffff'
        });
        $('#txtStyle').val('Times New Roman');
        $('#txtText').val('Sample Text');
        $('#txtTextSize').val(20);
        $('#txtClrVal').val('#ff0000');
        $('#txtHexavalue').val('#ff0000');
        $('#txtOutline').val(1);
        $('#txtOutlineClrVal').val('#000000');
        $('#txtOutlineHexavalue').val('#000000');
        $('#txtBGClrVal').val('#000000');
        $('#txtBGHexavalue').val('#000000');
    });
    $('#txtStyle').change(function() {
        var cobj = gcanvas.getActiveObject();
        cobj.set({
            fontFamily: $(this).val()
        });
        gcanvas.renderAll();
    });
    var flagAlign = 1;
    $('.divAlign').click(function() {
        $('.divAlign i').css({
            'background-color': "#ffffff",
            'color': '#000000'
        });
        $(this).find('i').css({
            'background-color': "#424242",
            'color': '#ffffff'
        });
        var cobj = gcanvas.getActiveObject();
        var v = $(this).attr('data-opt');
        cobj.set({
            textAlign: v
        });
        gcanvas.renderAll();
    });
    var flagBold = 0;
    var flagItalic = 0;
    $('.divStyleBold').click(function() {
        var cobj = gcanvas.getActiveObject();
        if (flagBold) {
            flagBold = 0;
            if (flagItalic == 1) {
                cobj.set({
                    fontStyle: 'italic',
                    fontWeight: ''
                });
            } else {
                cobj.set({
                    fontStyle: 'normal',
                    fontWeight: ''
                });
            }
            $('.divStyleBold i').css({
                'background-color': "#ffffff",
                'color': '#000000'
            });
        } else {
            flagBold = 1;
            if (flagItalic == 1) {
                cobj.set({
                    fontStyle: 'italic',
                    fontWeight: 'bold'
                });
            } else {
                cobj.set({
                    fontStyle: 'normal',
                    fontWeight: 'bold'
                });
            }
            $('.divStyleBold i').css({
                'background-color': "#424242",
                'color': '#ffffff'
            });
        }
        gcanvas.renderAll();
    });
    $('.divStyleItalic').click(function() {
        var cobj = gcanvas.getActiveObject();
        if (flagItalic == 1) {
            flagItalic = 0;
            if (flagBold == 1) {
                cobj.set({
                    fontStyle: '',
                    fontWeight: 'bold'
                });
            } else {
                cobj.set({
                    fontStyle: '',
                    fontWeight: 'normal'
                });
            }
            $('.divStyleItalic i').css({
                'background-color': "#ffffff",
                'color': '#000000'
            });
        } else {
            flagItalic = 1;
            if (flagBold == 1) {
                cobj.set({
                    fontStyle: 'italic',
                    fontWeight: 'bold'
                });
            } else {
                cobj.set({
                    fontStyle: 'italic',
                    fontWeight: 'normal'
                });
            }
            $('.divStyleItalic i').css({
                'background-color': "#424242",
                'color': '#ffffff'
            });
        }
        gcanvas.renderAll();
    });
    $('#txtText').keyup(function() {
        var cobj = gcanvas.getActiveObject();
        cobj.setText($(this).val());
        gcanvas.renderAll();
    });
    $('#txtTextSize').keyup(function() {
        var cobj = gcanvas.getActiveObject();
        cobj.setFontSize($(this).val());
        gcanvas.renderAll();
    });
    $('#txtHexavalue').keyup(function() {
        $('#txtClrVal').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        cobj.setFill($(this).val());
        gcanvas.renderAll();
    });
    $('#txtClrVal').change(function() {
        $('#txtHexavalue').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        cobj.setFill($(this).val());
        gcanvas.renderAll();
    });
    $('#txtBGHexavalue').keyup(function() {
        $('#txtBGClrVal').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        cobj.setTextBackgroundColor($(this).val());
        gcanvas.renderAll();
    });
    $('#txtBGClrVal').change(function() {
        $('#txtBGHexavalue').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        cobj.setTextBackgroundColor($(this).val());
        gcanvas.renderAll();
    });

    $('#txtOutlineHexavalue').keyup(function() {
        $('#txtOutlineClrVal').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        var sval = $('#txtOutline').val();
        cobj.set({
            stroke: $(this).val(),
            strokeWidth: sval
        });
        gcanvas.renderAll();
    });
    $('#txtOutlineClrVal').change(function() {
        $('#txtOutlineHexavalue').val($(this).val());
        var cobj = gcanvas.getActiveObject();
        var sval = $('#txtOutline').val();
        cobj.set({
            stroke: $(this).val(),
            strokeWidth: sval
        });
        gcanvas.renderAll();
    });
    $('#txtOutline').keyup(function() {
        var cobj = gcanvas.getActiveObject();
        var sval = $('#txtOutlineHexavalue').val();
        cobj.set({
            strokeWidth: $(this).val(),
            stroke: sval
        });
        gcanvas.renderAll();
    });

    /* Download */

    $('#ancDownload').click(function() {
        $("#cc").layout('panel', 'east').panel({
            // title:'Download / Upload',
            // iconCls:'icon-upload'
        });
        eraserFlag = false;
        gcanvas.isDrawingMode = false;
        gcanvas.forEachObject(function(obj) {
            obj.set({
                hasControls: false,
                hasBorders: false,
                selectable: false
            });
        });
        gcanvas.renderAll();
        $('.subProperties').hide();
        /*
              if( $("#cc").layout('panel','east').panel('options').collapsed ){
                 $('#cc').layout('expand','east');
              }
        */
        $('#downloadOptions').show();
    });
    var dimgCount = 1;
    $('#ancDwnJson').click(function() {
        var canvasData = gcanvas.toJSON();
        canvasData = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(canvasData));
        var a = $("<a>").attr("href", canvasData).attr("download", 'tp-whiteboard-' + dimgCount + '.board').appendTo("body");
        a[0].click();
        a.remove();
        dimgCount++;
    });
    $('#ancDwnJpeg').click(function() {
        var canvasData = gcanvas.toDataURL();
        var a = $("<a>").attr("href", canvasData).attr("download", 'tp-whiteboard-' + dimgCount + '.jpg').appendTo("body");
        a[0].click();
        a.remove();
        dimgCount++;
    });


    /* Upload JSON */

    $('#ancUpload').click(function() {
        eraserFlag = false;
        gcanvas.isDrawingMode = false;
        gcanvas.forEachObject(function(obj) {
            obj.set({
                hasControls: false,
                hasBorders: false,
                selectable: false
            });
        });
        gcanvas.renderAll();
        $('.subProperties').hide();
        /*
              if( $("#cc").layout('panel','east').panel('options').collapsed ){
                 $('#cc').layout('expand','east');
              }
        */
        $('#uploadOptions').show();
    });
    $('#btnUpload').click(function() {
        $('#fileJson').trigger('click');
    });
    $('#fileJson').change(function(e) {
        var file = $('#fileJson').val();
        var exts = ['board'];
        if (file.length <= 0) {
            alert("Please select a file from local drive.");
            $('#fileJson').focus();
            return false;
        }
        var ext = file.split('.');
        ext = ext.reverse();
        if ($.inArray(ext[0].toLowerCase(), exts) < 0) {
            alert("Please select board format files only.");
            $('#fileJson').focus();
            return false;
        }
        var inputs = new FormData();
        inputs.append('jsonfile', $("#fileJson").prop("files")[0]);
        var url = "upload_board.php";
        $('.wrapLoader').show();
        $.ajax({
            url: url,
            method: "POST",
            cache: false,
            data: inputs,
            processData: false,
            contentType: false
        }).done(function(msg) {
            gcanvas.loadFromJSON(msg, gcanvas.renderAll.bind(gcanvas));
            gcanvas.forEachObject(function(obj) {
                if (obj.type == 'path') {
                    obj.set({
                        hasControls: false,
                        hasBorders: false,
                        selectable: false
                    });
                }
            });
            $('.wrapLoader').hide();
        });
    });

    /* Image */

    $('#ancImage').click(function() {
        $('#fileImage').trigger('click');
        $("#cc").layout('panel', 'east').panel({
            // title:'Image',
            // iconCls:'icon-image'
        });
        eraserFlag = false;
        gcanvas.isDrawingMode = false;
        gcanvas.forEachObject(function(obj) {
            if (typeof obj == 'object' && !obj.hasOwnProperty('minScaleLimit') && !obj.hasOwnProperty('text') && !obj.hasOwnProperty('stroke')) {
                obj.set({
                    hasControls: true,
                    hasBorders: true,
                    selectable: true
                });
            } else {
                obj.set({
                    hasControls: false,
                    hasBorders: false,
                    selectable: false
                });
            }

        });
        gcanvas.renderAll();
        $('.subProperties').hide();
        /*
              if( $("#cc").layout('panel','east').panel('options').collapsed ){
                 $('#cc').layout('expand','east');
              }
        */
        $('#imageOptions').show();
    });
    $('#btnNewImage').click(function() {
        $('#fileImage').trigger('click');
    });
    $('#fileImage').change(function(e) {
        var file = $('#fileImage').val();
        var exts = ['jpg', 'jpeg', 'png'];
        if (file.length <= 0) {
            alert("Please select a file from local drive.");
            $('#fileImage').focus();
            return false;
        }
        var ext = file.split('.');
        ext = ext.reverse();
        if ($.inArray(ext[0].toLowerCase(), exts) < 0) {
            alert("Please select jpg/jpeg/png format files only.");
            $('#fileImage').focus();
            return false;
        }
        var reader = new FileReader();
        reader.onload = function(event) {
            var imgObj = new Image;
            imgObj.src = event.target.result;
            imgObj.onload = function() {
                var image = new fabric.Image(imgObj);
                gcanvas.add(image);
                gcanvas.centerObject(image);
                gcanvas.setActiveObject(image);
                image.setCoords();
                gcanvas.renderAll();
            }
        }
        reader.readAsDataURL(e.target.files[0]);
    });
    $('#btnRemoveImage').click(function() {
        var cobj = gcanvas.getActiveObject();
        gcanvas.remove(cobj);
        gcanvas.renderAll();
    });

    /* Undo/Redo */

    var reflag = false;
    var cstep = 0;
    var i = 0;
    gcanvas.on('object:added', function(opt) {
        totArray[i] = opt.target;
        i++;
    });

    function doUndo() {
        if (i > 0) {
            reflag = true;
            gcanvas.remove(totArray[i - 1]);
            i--;
        }
    }
    $('#ancUndo').click(function() {
        doUndo();
    });

    function doRedo() {
        if (i < totArray.length) {
            gcanvas.add(totArray[i]);
            if (!reflag) {
                i++;
            }
        }
    }
    $('#ancRedo').click(function() {
        doRedo();
    });
    $(document).keydown(function(e) {
        //e.preventDefault();
        if (e.which == 90 && (e.metaKey && e.shiftKey)) {
            e.preventDefault();
            doRedo();
        } else if (e.which == 89 && e.ctrlKey) {
            e.preventDefault();
            doRedo();
        } else if (e.which == 90 && e.ctrlKey) {
            e.preventDefault();
            doUndo();
        } else if (e.which == 90 && e.metaKey) {
            e.preventDefault();
            doUndo();
        } else if (e.which == 187 && (e.metaKey || e.ctrlKey)) {
            e.preventDefault();
            if (eraserFlag) {
                var penSize = parseInt($('#eraserSlide').numberspinner('getValue'));
                penSize++;
                $('#eraserSlide').numberspinner('setValue', penSize);
            } else {
                var penSize = parseInt($('#lineSlide').numberspinner('getValue'));
                penSize++;
                $('#lineSlide').numberspinner('setValue', penSize);
            }
        } else if (e.which == 189 && (e.metaKey || e.ctrlKey)) {
            e.preventDefault();
            if (eraserFlag) {
                var penSize = parseInt($('#eraserSlide').numberspinner('getValue'));
                penSize--;
                $('#eraserSlide').numberspinner('setValue', penSize);
            } else {
                var penSize = parseInt($('#lineSlide').numberspinner('getValue'));
                penSize--;
                $('#lineSlide').numberspinner('setValue', penSize);
            }
        }
    });
    /* Help */
    var panels = $('.easyui-accordion').accordion('panels');
    $.each(panels, function() {
        this.panel('collapse');
    });
    $('#ancHelpMain').click(function() {
        $('.subProperties').hide();
        /*
              if( $("#cc").layout('panel','east').panel('options').collapsed ){
                 $('#cc').layout('expand','east');
              }
        */
        $("#cc").layout('panel', 'east').panel({
            //title:'Help',
            //iconCls:'icon-help'
        });
        $('#helpOptions').show();
    });
    $('#helpWindow').window('close');
    
    $(document).click(function(){
        var $el = $("#helpOptions");
         if ($el.is(":visible")) {
            $el.hide();
            $('#helpWindow').window('close');
         }
    });
    $('.ancHelp').click(function(event) {
        event.stopPropagation();
        $('#helpWindow').window('close');
        var imgsrc = 'http://www.tutorialspoint.com/whiteboard/images/help/' + $(this).attr('alt') + '.jpg';
        $('#helpWindow img').attr('src', imgsrc);
        $('#helpWindow').window('open');
    });
    $('html').keyup(function(e) {
        if (e.keyCode == 46 || e.keyCode == 8) {
            var cobj = gcanvas.getActiveObject();
            if(cobj.hasOwnProperty("text")){
               return;
            }
            gcanvas.remove(cobj);
            $('.divStyleBold i, .divStyleItalic i').css({
                'background-color': "#ffffff",
                'color': '#000000'
            });
            $('.divAlign i').css({
                'background-color': "#ffffff",
                'color': '#000000'
            });
            $('#alignleft i').css({
                'background-color': "#424242",
                'color': '#ffffff'
            });
            $('#txtStyle').val('Times New Roman');
            $('#txtText').val('Sample Text');
            $('#txtTextSize').val(20);
            $('#txtClrVal').val('#ff0000');
            $('#txtHexavalue').val('#ff0000');
            $('#txtOutline').val(1);
            $('#txtOutlineClrVal').val('#000000');
            $('#txtOutlineHexavalue').val('#000000');
            $('#txtBGClrVal').val('#000000');
            $('#txtBGHexavalue').val('#000000');
            $('#txtShapeOutline').val(2);
            $('#txtShapeOutlineHexavalue').val('#000000');
            $('#txtShapeOutlineClrVal').val('#000000');
            $('#txtFillClrVal').val('#000000');
            $('#txtFillClrHexa').val('#000000');
            gcanvas.renderAll();
            e.preventDefault();
            return false;
        }
    });
    $('#maximize').click(function() {
        if (screenfull.enabled) {
            screenfull.toggle($('#stage')[0]);
        }
    });
    /*
       $(document).on(screenfull.raw.fullscreenchange, function () {
         if(screenfull.isFullscreen){
               gcanvas.setHeight( window.innerHeight );
               gcanvas.setWidth( window.innerWidth );
         }else{
             gcanvas.setHeight($('#center').height());
             gcanvas.setWidth($('#center').width());
         }
         gcanvas.calcOffset();
         gcanvas.forEachObject(function(o) {
           o.setCoords();
         });
         gcanvas.renderAll();
       });
    */
    $("#cc").layout('panel', 'center').panel({
        onResize: function(w, h) {
            if (screenfull.isFullscreen) {
                gcanvas.setHeight(window.innerHeight);
                gcanvas.setWidth(window.innerWidth);
            } else {
                gcanvas.setHeight(h);
                gcanvas.setWidth(w);
            }
            displaySlide(slideSrc);
            gcanvas.calcOffset();
            gcanvas.forEachObject(function(o) {
                o.setCoords();
            });
            gcanvas.renderAll();
        }
    });
    $('#ancPattern').click(function() {
        $('.subProperties').hide();
        $("#cc").layout('panel', 'east').panel({
            //             title:'Pattern',
            //             iconCls:'icon-bgcolor'
        });
        $('#bgPattern').show();
    }); 
    $('#ancHelpMain').click(function(event) {
        event.stopPropagation();
        $('#helpOptions').show();
    });
    
    $('#btnDisplayMenu').hide();
    $('#btnShowMenu').click(function(event) {
        event.stopPropagation();
        $('#btnDisplayMenu').toggle();
    });    
    $(document).click(function() {
       // $('#btnDisplayMenu').hide();
       // $('#helpOptions').hide();
       // $('#helpWindow').window('close');  
         var $el = $("#btnDisplayMenu");
         if ($el.is(":visible")) {
            $el.toggle();
         }
    });
     $('#btnDisplayMenu').click(function(event) {
        event.stopPropagation();
        //$('#btnDisplayMenu').show();
    });     
   
   
    $("#cc").layout('collapse', 'south');
    $("#cc").layout('collapse', 'east');
    ////////////////////////////////////////////
    function validateEmail(value) {
        var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return (regex.test(value)) ? true : false;
    }

    function validateEmails(string) {
        var result = string.replace(/\s/g, "").split(/,|;/);

        for (var i = 0; i < result.length; i++) {
            if (!validateEmail(result[i])) {
                return false;
            }
        }
        return true;
    }
    $('#btnSendInvite').bind('click', function() {
        $('#invite').dialog('open');
    });
    $.extend($.fn.validatebox.defaults.rules, {
        emails: {
            validator: function(value) {
                return validateEmails(value);
            },
            message: 'Enter correct Email IDs'
        }
    });
    //global RTCMultiConnection object
    var connection = new RTCMultiConnection();
    //whether we init slickjs for the 1st time(need for correct unslick() function)
    var isFirstSlickInit = true;
    //container for user faces in the top part of the chat
    var containerUserFaces = $("#containerUserFaces");
    //container for bigger user video and the fullscreen button
    var containerBigVideoAndFullscreen = $("#containerBigVideoAndFullscreen");
    //container for bigger video
    var containerBigVideo = $("#containerBigVideo");
    var currentBigVideo = {
        src: "",
        streamid: "",
        enabled: false
    };
    var remoteUserId;

    function setupWebRTC() {
        // custom signaling server
        connection.socketURL = 'https://tools.tutorialspoint.com:9001/';
        connection.socketMessageEvent = 'webrtcTPsocketMsgEvent';

        connection.enableFileSharing = true;
        connection.filesContainer = chatContainer;
        connection.session = {
            audio: true,
            video: true,
            data: true
        };
        connection.sdpConstraints.mandatory = {
            OfferToReceiveAudio: true,
            OfferToReceiveVideo: true
        };
        // Adding display name to the conenction
        connection.extra.user_name = user_name;
        // Local audio and video are disabled by default
        connection.extra.enabledVideo = false;
        connection.extra.isAudioMuted = true;
        console.log(connection);
    }

    //when clicking on the video in the top menu move it to the middle and make bigger
    containerUserFaces.on('click', 'video', function() {
        //save old video stream
        currentBigVideo.src = $(this).attr('src');
        currentBigVideo.streamid = $(this).attr('id');
        currentBigVideo.enabled = true;
//        updateContainerUserFaces();
//        adjustBigVideo();
    });

    $("#create_meeting_room").bind("click", function(e) {
        room_id = $("#room_id").val();
        if (room_id.length < 4) {
            $("#room_id").textbox({
                value: "",
                prompt: "Enter a unique room ID (At least 4 characters)"
            });
            $("#room_id").focus();
            return;
        }
        user_name = $("#user_name").val();
        if (user_name.length < 4) {
            $("#user_name").textbox({
                value: "",
                prompt: "Enter your name (At least 4 characters)"
            });
            $("#user_name").focus();
            return;
        }
        $('#dlg').dialog('close');
        $('.wrapLoader').show();
        /* First check if room exist or not */
        $("#wait").html("Going to create a meeting room with given ID...");
        setupWebRTC();
        connection.checkPresence(room_id, function(isRoomExists, rid) {
            if (isRoomExists) {
                $.messager.alert('Alert', 'Sorry this meeting room is not available!');
                $('.wrapLoader').hide();
                return;
            } else {
                /* Open a new room */
                connection.connectionDescription = connection.open(room_id);
                if ($("#cc").layout('panel', 'east').panel('options').collapsed) {
                    $("#cc").layout('expand', 'east');
                }
                $('.wrapLoader').hide();
                $('#btnRaiseHand').hide();
                // Sharing part of screen
                $("#webrtcPanel").show();
                $('#cc').layout('panel', 'east').panel('setTitle', "Meeting Room ID - " + room_id);
/*
                $("#stage, .subProperties a, .db-nav a").on("touchstart touchend touchmove keyup keypress click mousemove mousedown keydown", function(e){
                	var screenshot = gcanvas.toDataURL('image/jpeg', 0.5);
                	var dataToSend = {
                		screenshot: screenshot,
                		screenImage: true
                	};
                	connection.send(dataToSend);
                });
*/
                console.log( "Height " + gcanvas.height );
                console.log( "Width " + gcanvas.width );
                setInterval(function(){ 
                     var screenshot = gcanvas.toDataURL('image/jpeg', 0.3);
                     var dataToSend = {
                           screenshot: screenshot,
                           screenImage: true
                     };
                     connection.send(dataToSend);
                }, 1000);
                connection.extra.user_name = user_name;
                var div = document.createElement('div');
                var msg = '<b>' + user_name + '</b> > Created the room';
                div.innerHTML = msg;
                chatContainer.appendChild(div);
                chatContainer.scrollTop = chatContainer.lastChild.offsetTop;
            }
        });
    });
    $("#join_meeting_room").bind("click", function(e) {
        room_id = $("#room_id").val();
        if (room_id.length < 4) {
            $("#room_id").textbox({
                value: "",
                prompt: "Enter a unique room ID (At least 4 characters)"
            });
            $("#room_id").focus();
            return;
        }
        user_name = $("#user_name").val();
        if (user_name.length < 4) {
            $("#user_name").textbox({
                value: "",
                prompt: "Enter your name (At least 4 characters)"
            });
            $("#user_name").focus();
            return;
        }
        console.log("Room ID " + room_id);
        console.log("User Name " + user_name);
        $('#dlg').dialog('close');
        $('.wrapLoader').show();
        /* First check if room exist or not */
        $("#wait").html("Trying to join meeting room at the given ID...");
        setupWebRTC();
        connection.checkPresence(room_id, function(isRoomExists, rid) {
            console.log("Room ID is " + rid);
            if (isRoomExists) {
                /* join a new room */
                connection.extra.fullName = user_name;
                connection.setUserPreferences({extra : connection.extra});
                connection.connectionDescription = connection.join(room_id);
                $("#refresh").show();
                if ($("#cc").layout('panel', 'east').panel('options').collapsed) {
                    $("#cc").layout('expand', 'east');
                }
                // Hide tools and their properties
                // $("#cc").layout('collapse', 'west');
                $("#cc").layout('panel', 'west').panel('resize', {
                    width: 5
                });
                $("#west .wr-left").css("display", "none");
                $(".subProperties").hide();
                $("#center #ancUndo").remove();
                $("#center #ancRedo").remove();
                $("#center .clrDynamicCanvas").remove();
                $(".canvas-container").remove();
                $('#btnMuteAll').hide();
                $("#containerSharedPartOfScreenPreview").show();
                $('.wrapLoader').hide();
                $("#webrtcPanel").show();
                $('#cc').layout('panel', 'east').panel('setTitle', "Meeting Room ID - " + room_id);
                var div = document.createElement('div');
                var msg = '<b>' + user_name + '</b> > Joined the room';
                div.innerHTML = msg;
                chatContainer.appendChild(div);
                chatContainer.scrollTop = chatContainer.lastChild.offsetTop;
            } else {
                $.messager.alert('Alert', 'Sorry but could not connect with given meeting room ID');
                $('.wrapLoader').hide();
                return;
            }
        });
    });
    connection.onNewParticipant = function(participantId, userPreferences) {
         console.log( "connection.onNewParticipant");
         console.log( participantId );
         console.log( userPreferences );
         userPreferences.localPeerSdpConstraints.OfferToReceiveAudio = true;
         userPreferences.localPeerSdpConstraints.OfferToReceiveVideo = true;
         connection.acceptParticipationRequest(participantId, userPreferences);
    }
    connection.onopen = function(event) {
         if( event.extra.user_name !== user_name ){
            var div = document.createElement('div');
	    var msg = '<b>' + event.extra.user_name + '</b> > Joined the room';
            div.innerHTML = msg;
            chatContainer.appendChild(div);
            chatContainer.scrollTop = chatContainer.lastChild.offsetTop;
         }
    };

    var localStream;
    var localMediaElement;
    connection.onstream = function(event) {
        console.log("Inside connection.onstream");
        console.log(event);
        event.mediaElement.controls = false;
        if (!isFirstSlickInit) containerUserFaces.slick('unslick');

        if (event.type == "local") {
            localStream = event.stream;
            localMediaElement  = event.mediaElement;
        }
        setTimeout(function() {
            event.mediaElement.play();
        }, 10000);

        if (!$("#containerBigVideo").children().filter("video").length) {
            containerBigVideo.html('');
            if (event.stream.isVideo && connection.extra.enabledVideo) {
                // if we have our local video enabled
                containerBigVideo.html(event.mediaElement);
                containerBigVideo.css({
                    "width": "204px",
                    "height": "auto",
                    "left": "-8px"
                });
            } else {
                containerBigVideo.html('<i class="fa-user-large chatitem"></i>');
                containerBigVideo.css({
                    "width": "204px",
                    "height": "auto",
                    "left": "-8px"
                });
            }
        } else {
            if (connection.isInitiator) {
                console.log(event.mediaElement);
                event.mediaElement.oncontextmenu = function(e) {
                    e.preventDefault();
                    console.log(e);
                    console.log("Stream ID is " + event.streamid);
                    $('#videocontext').menu('show', {
                        id: event.userid,
                        left: e.pageX,
                        top: e.pageY,
                        onShow: function() {
                            remoteUserId = event.userid;
                            streamid = event.streamid;
                            console.log("Remote User ID : " + remoteUserId);
                        }
                    });
                };
            }
            if (!$("#containerUserFaces").children().filter("video").length) {
                containerUserFaces.html('');
            }
            console.log("Adding remote video");
            var div = document.createElement('div');
            if (event.stream.isVideo) {
                div.innerHTML = event.mediaElement;
            } else {
                div.innerHTML = '<div class="user-face fa-user-small"></div>';
            }
            connection.send(msg);
            containerUserFaces.append(div);
        }
        if ($("#containerUserFaces").children().filter("video").length) {
            // activate slick slider
            containerUserFaces.slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1
            });
            isFirstSlickInit = false;
        }
        updateContainerUserFaces( );
    };
    function adjustBigVideo() {
        console.log( "inside adjustBigVideo");
        //clear all
        if (!isFirstSlickInit) containerUserFaces.slick('unslick');
        // if we have our local video enabled
        containerBigVideo.html('');
        if (connection.getAllParticipants().length) {
            // Lets clean the place.
            containerUserFaces.html('');
        }
        if (connection.extra.enabledVideo) {
            //adding the video tag
            var videoTagHTML = '<div class="user-face" data-user-id="' + connection.userid + '"><video src="' + localStream.blobURL + '" id="' + localStream.streamid + '" muted></video></div>';
            videoTagHTML = localMediaElement;
            if (!$("#containerBigVideo .user-face").children().filter("video").length) {
                containerBigVideo.html('');
                containerBigVideo.html(videoTagHTML);
                currentBigVideo.streamid = localStream.streamid;
                currentBigVideo.enabled = true;
            } else {
                containerUserFaces.append(videoTagHTML);
            }
            containerBigVideo.css({
                "width": "204px",
                "height": "auto",
                "left": "-8px"
            });
            //playing the video
            setTimeout(function() {
                document.getElementById(localStream.streamid).play();
            }, 5000);
        } else {
            containerBigVideo.html('<i class="fa-user-large chatitem"></i>');
            containerBigVideo.attr("data-user-id", connection.userid);
        }
        //for each connected users
        connection.getAllParticipants().forEach(function(userid) {
            var remotePeer = connection.peers[userid];
            //if a remote user has video enabled and has a stream
            if (remotePeer.extra.enabledVideo && remotePeer.streams.length != 0) {
                var remoteVideoStream = remotePeer.streams[0].streamid;
                var remoteStream = connection.streamEvents[remoteVideoStream];
                //adding the video tag
                var div = document.createElement('div');
                if (connection.isInitiator) {
                    div.oncontextmenu = function(e) {
                        e.preventDefault();
                        console.log(e);
                        $('#videocontext').menu('show', {
                            id: userid,
                            left: e.pageX,
                            top: e.pageY,
                            onShow: function() {
                                remoteUserId = userid;
                                console.log("Remote User ID : " + remoteUserId);
                            }
                        });
                    };
                }
                var videoTagHTML = '<div class="user-face" data-user-id="' + userid + '"><video src="' + remoteStream.blobURL + '" id="' + remoteStream.streamid + '" muted></video></div>';
                div.innerHTML = videoTagHTML;
                //display video in the top menu
                if (!$("#containerBigVideo .user-face").children().filter("video").length) {
                    containerBigVideo.html('');
                    containerBigVideo.html(videoTagHTML);
                } else {
                    containerUserFaces.append(div);
                }
                //playing the video
                setTimeout(function() {
                    document.getElementById(remoteStream.streamid).play();
                }, 10000);
            } else {
                var audioTagHTML = '<div class="user-face fa-user-small  data-user-id="' + userid + '"></div>';
                var div = document.createElement('div');
                if (connection.isInitiator) {
                    div.oncontextmenu = function(e) {
                        e.preventDefault();
                        console.log(e);
                        $('#videocontext').menu('show', {
                            id: userid,
                            left: e.pageX,
                            top: e.pageY,
                            onShow: function() {
                                remoteUserId = userid;
                                console.log("Remote User ID : " + remoteUserId);
                            }
                        });
                    };
                }
                div.innerHTML = audioTagHTML;
                containerUserFaces.append(div);
            }

        });
        if (connection.getAllParticipants().length) {
            //activate slick slider
            containerUserFaces.slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1
            });
            isFirstSlickInit = false;
        }
    }
    //updates user images/video at the top of the webrtc panel
    function updateContainerUserFaces( ) {
        console.log( "inside updateContainerUserFaces");
        //clear all
        if (!isFirstSlickInit) containerUserFaces.slick('unslick');
        // if we have our local video enabled
        containerBigVideo.html('');
        if(connection.getAllParticipants().length) {
            // Lets clean the place.
            containerUserFaces.html('');
        }
        if (connection.extra.enabledVideo) {
            //adding the video tag
            console.log( "Local Media Elememt" );
            console.log( localMediaElement );
            if (!$("#containerBigVideo").children().filter("video").length) {
                console.log( "Going to add video in big one" );
                containerBigVideo.html('');
                containerBigVideo.html(localMediaElement);
                currentBigVideo.streamid = localStream.streamid;
                currentBigVideo.enabled = true;
            } else {
                var div = document.createElement('div');
                div.html(localMediaElement);
                console.log( "Going to add video in small one" );
                containerUserFaces.append(div);
            }
            containerBigVideo.css({
                "width": "204px",
                "height": "auto",
                "left": "-8px"
            });
            //playing the video
            console.log( "Problamatic play..." );
            console.log( localStream.streamid );
            if( document.getElementById(localStream.streamid) ){
                 setTimeout(function() {
                     console.log( "Going to play..." );
                     document.getElementById(localStream.streamid).play();
                 }, 10000);
            }
        } else {
            containerBigVideo.html('<i class="fa-user-large chatitem"></i>');
            containerBigVideo.attr("data-user-id", connection.userid);
        }
        console.log( "trying to play..." );
        //for each connected users
        connection.getAllParticipants().forEach(function(userid) {
            var remotePeer = connection.peers[userid];
            console.log( "remote Peer");
            console.log( remotePeer  );
             
            //if a remote user has video enabled and has a stream
            if (remotePeer.extra.enabledVideo && remotePeer.streams.length != 0) {
                var remoteVideoStream = remotePeer.streams[0].id;
                var remoteStream = connection.streamEvents[remoteVideoStream];
                console.log( "Remote Stream" );

                var remoteMediaStream = remotePeer.streams[0].MediaStream;
                var remoteMediaElement = remoteStream.mediaElement;
                //adding the video tag
                var div = document.createElement('div');
                if (connection.isInitiator) {
                    div.oncontextmenu = function(e) {
                        e.preventDefault();
                        console.log(e);
                        $('#videocontext').menu('show', {
                            id: userid,
                            left: e.pageX,
                            top: e.pageY,
                            onShow: function() {
                                remoteUserId = userid;
                                console.log("Remote User ID : " + remoteUserId);
                            }
                        });
                    };
                }
                var videoTagHTML = '<div class="user-face" data-user-id="' + userid + '"><video src="' + remoteStream.blobURL + '" id="' + remoteStream.streamid + '" muted></video></div>';
                videoTagHTML = remoteMediaElement;
                div.innerHTML = videoTagHTML;
                //display video in the top menu
                if (!$("#containerBigVideo").children().filter("video").length) {
                    containerBigVideo.html('');
                    containerBigVideo.html(remoteMediaElement);
                    currentBigVideo.streamid = remoteStream.streamid;
                    currentBigVideo.enabled = true;
                } else {
                    containerUserFaces.append(remoteMediaElement);
                }
                //playing the video
                setTimeout(function() {
                    document.getElementById(remoteStream.streamid).play();
                }, 10000);
            } else {
                var audioTagHTML = '<div class="user-face fa-user-small  data-user-id="' + userid + '"></div>';
                var div = document.createElement('div');
                if (connection.isInitiator) {
                    div.oncontextmenu = function(e) {
                        e.preventDefault();
                        console.log(e);
                        $('#videocontext').menu('show', {
                            id: userid,
                            left: e.pageX,
                            top: e.pageY,
                            onShow: function() {
                                remoteUserId = userid;
                                console.log("Remote User ID : " + remoteUserId);
                            }
                        });
                    };
                }
                div.innerHTML = audioTagHTML;
                containerUserFaces.append(div);
            }

        });
        if (connection.getAllParticipants().length) {
            //activate slick slider
            containerUserFaces.slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1
            });
            isFirstSlickInit = false;
        }

        return;
    }
    // Send text message button handler
    $('#input-box').textbox({
        onClickButton: function() {
            if ($('#input-box').val().length === 0) return;
            var msg = "<b" + user_name + " </b>> " + $('#input-box').val();
            div.innerHTML = msg;
            chatContainer.appendChild(div);
            connection.send(msg);
            $("#input-box").textbox('setValue', "");
        },
        icons: [{
            iconCls: 'icon-attach-file',
            handler: function(e) {
                e.preventDefault();
                var fileSelector = new FileSelector();
                fileSelector.selectSingleFile(function(file) {
                    connection.send(file);
                });
            }
        }]
    });
    $('#input-box').textbox('textbox').bind('keydown', function(e) {
        if (e.keyCode == 13) {
            var div = document.createElement('div');
            var msg = "<b>" + user_name + "</b> > " + $(this).val();
            div.innerHTML = msg;
            chatContainer.appendChild(div);
            connection.send(msg);
            //scroll chat to the bottom
            chatContainer.scrollTop = chatContainer.lastChild.offsetTop;
            $("#input-box").textbox('setValue', "");
        }
    });
    //share video button
    $("#btnShareVideo").bind("click", function(event) {
        connection.extra.enabledVideo = !connection.extra.enabledVideo;
        if (connection.extra.enabledVideo) {
            $(this).html('<div class="sub-default-lft" style="border-right:none;"><i class="fa-pause-circle-o chatitem"></i></div>');
            $(this).attr("title", "Stop Sharing");
            $('#btnShareAudio').html('<div class="sub-default-lft" style="border-right:none;"><i class="fa-microphone-slash-small chatitem"></i></div>');
            $('#btnShareAudio').attr("title", "Mute");
            connection.extra.isAudioMuted = false;
        } else {
            $(this).html('<div class="sub-default-lft" style="border-right:none;"><i class="fa-video-camera-small chatitem"></i></div>');
            $(this).attr("title", "Share Video");
        }
        connection.send({
            changedMedia: true,
            userid: connection.userid
         });
         connection.updateExtraData();
         updateContainerUserFaces();
    });
    $("#btnShareAudio").bind("click", function(event) {
        if (connection.extra.isAudioMuted) {
            localStream.unmute('audio');
            $(this).html('<div class="sub-default-lft" style="border-right:none;"><i class="fa-microphone-slash-small chatitem"></i></div>');
            $(this).attr("title", "Mute");
        } else {
            localStream.mute('audio');
            $(this).html('<div class="sub-default-lft" style="border-right:none;"><i class="fa-microphone-small chatitem"></i></div>');
            $(this).attr("title", "Unmute");
        }
        connection.extra.isAudioMuted = !connection.extra.isAudioMuted;
        connection.send({
            changedMedia: true,
            userid: connection.userid
         });
        connection.updateExtraData();
        updateContainerUserFaces();
    });
    // Adds text message to the chat
    connection.onmessage = function onMessageHandler(event) {
        //if user receives the image from admin screen that he is sharing
        if (event.data && event.data.hasOwnProperty('screenImage')) {
            sharedPartOfScreenPreview.src = event.data.screenshot;
            return;
        } else if (event.data && event.data.changedMedia) {
            console.log("Got a shared video message...");
            setTimeout(function() {
                updateContainerUserFaces();
            }, 10000);
            return;
        } else if (event.data && event.data.muteUserStream && event.data.userid == connection.userid) {
            console.log("Got a mute message from admin...");
            connection.extra.isAudioMuted = false;
            $("#btnShareAudio").trigger("click");
            return;
        } else if (event.data && event.data.hasOwnProperty('raiseHand') && connection.isInitiator) {
            console.log("Got a raise hand  message from ..." + event.data.userid);
            var div = document.createElement('div');
            div.innerHTML = event.data.msg;
            ion.sound.play("bell_ring");
            chatContainer.appendChild(div);
            //scroll chat to the bottom
            chatContainer.scrollTop = chatContainer.lastChild.offsetTop;
            return;
        } else if (event.data && event.data.hasOwnProperty('raiseHand') && !connection.isInitiator) {
            console.log("Got a raise hand  message from ..." + event.data.userid);
            return;
        } else if (event.data && event.data.hasOwnProperty('unmuteUserStream') && event.data.userid == connection.userid) {
            console.log("Got an unmute message from admin...");
            connection.extra.isAudioMuted = true;
            $("#btnShareAudio").trigger("click");
            return;
        }
        console.log(event);
        console.log(connection);
        var div = document.createElement('div');
        div.innerHTML = event.data || event;
        chatContainer.appendChild(div);
        //scroll chat to the bottom
        chatContainer.scrollTop = chatContainer.lastChild.offsetTop;
    }
    connection.streamended = connection.onclose = function(event) {
        setTimeout(function() {
            updateContainerUserFaces();
        }, 10000);
    };
    connection.onleave = function(event) {
        if( typeof event.extra.user_name !== 'undefined' ){
           var div = document.createElement('div');
           var msg = '<b>' + event.extra.user_name + '</b> > left the room';
           div.innerHTML = msg;
           console.log( "connection.onleave" );
           console.log( event );
           chatContainer.appendChild(div);
           chatContainer.scrollTop = chatContainer.lastChild.offsetTop;
        }
    };
    $('#btnMuteAll').bind('click', function() {
        jQuery.each(connection.streamEvents, function(index, value) {
            if (connection.isInitiator && value.type == "remote") {
                connection.send({
                    muteUserStream: true,
                    userid: value.userid
                });
                console.log("Sending mute command to the server");
            }
        });
    });
    $('#btnRaiseHand').bind('click', function() {
        //onMessageHandler(msg);
        var div = document.createElement('div');
        var msg = '<b>' + user_name + '</b> > <i class="fa-raise-hand-small big"></i>';
        div.innerHTML = msg;
        chatContainer.appendChild(div);
        ion.sound.play("bell_ring");
        //scroll chat to the bottom
        chatContainer.scrollTop = chatContainer.lastChild.offsetTop;
        connection.send({
            msg: msg,
            raiseHand: true,
            userid: connection.userid
        });
        console.log("Sending raise hand command to the server.");
    });
    
    
    
    $("#webrtcPanel").hide();
    $("#cc").css("visibility", "visible");
    $("#muteUser").bind("click", function() {
        if (connection.isInitiator) {
            connection.send({
                muteUserStream: true,
                userid: remoteUserId
            });
            console.log("Sending mute command to the server");
        }
    });
    $("#unmuteUser").bind("click", function() {
        if (connection.isInitiator) {
            connection.send({
                unmuteUserStream: true,
                userid: remoteUserId
            });
            console.log("Sending unmute command to the server");
        }
    });
    $("#containerBigVideoAndFullscreen").dblclick(function() {
        if (currentBigVideo.enabled) {
            if (screenfull.enabled) {
                screenfull.toggle(document.getElementById(currentBigVideo.streamid));
            }
        }
    });
    $("#btnEnlargeVideo").bind("click", function(e) {
        if (currentBigVideo.enabled) {
            if (screenfull.enabled) {
                screenfull.toggle(document.getElementById(currentBigVideo.streamid));
            }
        }
    });
    $("#refresh").bind("click", function(e) {
        console.log( "Going to refresh connection");
        var msg = "";
        console.log( connection );
        if( typeof connection.connectionDescription !== 'undefined' ){
            msg = "Connection has been refreshed successfully";
            connection.rejoin( connection.connectionDescription );
        }else{
            msg = "There is no connection to refresh";
        }
        $.messager.show({
            title:'Connection Status',
            msg: msg,
            showType:'show',
            width:298 
        });
    });

    connection.onerror = function(e) {
       if (connection.connectedWith[e.userid]) return;
       if( typeof connection.connectionDescription !== 'undefined' ){
          connection.rejoin( connection.connectionDescription );
       }
    };
    /* Tutor Connect */
 var regEmail =  /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
   var regPhone = /^[0-9]{10}$/;
   var numberPattern = /^\d*$/;
   var tc_flodername = '';
   var tc_slides = '';
   if(tc_flodername != '' && tc_slides !=''){
      presentationSlides(tc_flodername,tc_slides);     
   }
   
$("#ancTutorConnect").bind("click", function(e) {
      openTcLogin();
 });
  
$('#sign').on("click",".ancSlidePreview",function(){
      var flodername = $(this).data("flodername");            
      var slides = $(this).data("slides");            
      presentationSlides(flodername,slides);     
   });   
   /* Select Tool */
   $('#ancSelect').click(function(){ 
       $('.subProperties').hide();
       if(shapenum > 1 || txtNum > 1){
           gcanvas.isDrawingMode = false;
       }
      
       gcanvas.forEachObject(function(obj) {
         //console.log(obj.type);          
          /* obj.set({
              hasControls: true,
              hasBorders: true,
              selectable: true
          });  
          gcanvas.setActiveObject(obj); */
          if (typeof obj != 'object' || obj.hasOwnProperty('path') ) {
                obj.set({
                    hasControls: false,
                    hasBorders: false,
                    selectable: false
                });
            } else {
                obj.set({
                    hasControls: true,
                    hasBorders: true,
                    selectable: true
                });
                gcanvas.setActiveObject(obj);
            }
            
      });
      gcanvas.renderAll();       
   });
   
   
}); // close of document ready 
    
function closeSign() {
    $('#sign').window('close');
    $win = null;
}
function openFileUpload() {
    $win = $('#sign').window({
        title: 'Upload File',
        iconCls: 'icon-upload-file',
        width: '650',
        height: '375'
    });
    $win.window('open');
    $('#sign').window('refresh', 'wb_file_box.htm');
}

function openTcLogin() {
    $win = $('#sign').window({
        title: 'Tutor Connect - Content',
        iconCls: 'icon-upload-file',
        width: '650',
        height: '375'
    });
    $('.subProperties').hide();
    $win.window('open');
    $('#sign').window('refresh', 'tutor_connect/tutor-connect-content.php');
} 

function presentationSlides(flodername,slides){
    $('.wrapLoader').show();
      $.ajax({
         url: "tutor_connect/tutor-connect-content-slides.php",
         method:"GET",
         data:{"flodername":flodername,"totalslides":slides}
      }).done(function(msg) {      
         $("#south").html(msg);
         $('.wrapLoader').hide();
         $("#cc").layout('panel','south').panel({
           title:'Slides',
           iconCls:'icon-image-editor',
         });
         $("#south").attr('height','115px');
         $("#cc").layout('expand','south');
         $("#south #content-slider").lightSlider({
           loop:false,
           keyPress:false,
           pager:false
         });
         closeSign();
      }); 
}
</script>
<script src="https://www.google-analytics.com/urchin.js"></script>
<script type="text/javascript">
_uacct = "UA-232293-6";
urchinTracker();
</script>
</body>

