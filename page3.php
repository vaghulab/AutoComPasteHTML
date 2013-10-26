<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tjmonsi
 * Date: 10/7/13
 * Time: 3:59 PM
 * To change this template use File | Settings | File Templates.
 */

if (!isset ($_COOKIE["interface"])) {
    if (!empty($_POST)) {
        $interface = $_POST["interface"];
        setcookie("interface", $interface, time()+(3600*3));
        //echo "hello";
    } else {
        header("Location: index.php");
        /* Make sure that code below does not get executed when we redirect. */
        exit;
    }
} else {
    $interface = $_COOKIE["interface"];
    if (strcmp($interface, "acp")==0) {
        $interface = "xwindow";
    } else {
        $interface = "acp";
    }
}

if (!isset($_COOKIE["user"])){
    $message = "Please use a username";
    header("Location: index.php?message=".$message);
    exit;
}

if (!empty($_POST)) {
    $demodata = $_POST;
    foreach ($_POST as $key => $value) {
        setcookie("demodata_".$key, $value, time()+(3600*3));
		if($value == "Disagree"){
		header("Location: index.php");
		/* Make sure that code below does not get executed when we redirect. */
		exit;
		}
	}
} 


$user = $_COOKIE["user"];

if (strcmp($interface, "acp")==0) {
    $msg = "<p>The copy-paste technique that you are going to evaluate now is AutoComPaste</p>
<p><u><b>AutoComPaste</b></u></p>
	<p>a. The instructions for using this technique have already been covered by the experiment conductor at the beginning of the experiment. Now once you click on start, what you will see is a window divided into two parts.</p>
	<p>b. The upper section of the window shows you the specific instructions on the trial/task you have to perform. The lower section of the window consists of the working area where you would get your hands dirty.</p>
	<p>c. In the upper section, you would see a line which consists of several fields. These are the conditions under which a particular trial of the experiment is performed. For example, location of the text is a field which can take on three values - head, body, tail. Head refers to the first few paragraphs, the tail refers to the last few paragraphs and the body refers to the remaining paragraphs in the middle. You would be given a better idea about this when you perform the trial runs of the experiment.</p>
	<p>d. The lower section of the window consists of five smaller pop-up windows which you would be using as sources when you perform the AutoComPaste Copy-Paste functions.</p>
	
	<p>e. An example of an instruction would be to copy a sentence from one of the five windows and paste it in the text editor. This action should be performed using the AutoComPaste function. **IMPORTANT** Once you perform a copy-paste function, you will have to press the space-bar once so that the copy-paste function is completed. After this, you will have to delete the text from the text editor and then click on the 'Next Task' button on the top of the screen.</p>
	<p>f. After you complete all the instructions for this particular copy-paste technique, the experiment conductor would copy the results of the tests into a separate file and then would ask you to proceed to the next copy-paste technique testing if you haven't already performed it. </p><p>Once you are ready to begin, please press the Start button.</p>";
    $acpflag = "true";
} else {
    $msg = "<p>The copy-paste technique that you are going to evaluate now is the Traditional Copy-Paste Method</p>
	<p><u><b>Traditional Copy-Paste</b></u></p>
	<p>a. This technique is the normal copy-pasting method which you follow in your day-to-day life. You are free to use either Ctrl C + Ctrl V or right click copy-pasting. Now once you click on start, what you will see is a window divided into two parts.</p>
	
	<p>b. The upper section of the window shows you the specific instructions on the trial/task you have to perform. The lower section of the window consists of the working area where you would get your hands dirty.</p>
	<p>c. In the upper section, you would see a line which consists of several fields. These are the conditions under which a particular trial of the experiment is performed. For example, location of the text is a field which can take on three values - head, body, tail. Head refers to the first few paragraphs, the tail refers to the last few paragraphs and the body refers to the remaining paragraphs in the middle. You would be given a better idea about this when you perform the trial runs of the experiment.</p>
	<p>d. The lower section of the window consists of five smaller pop-up windows which you would be using as sources when you perform the Copy-Paste functions.</p>
	<p>e. An example of an instruction would be to copy a sentence from one of the five windows and paste it in the text editor. This action should be performed using the traditional copy-paste function. **IMPORTANT** Once you perform a copy-paste function using the traditional copy-paste technique, you will have to delete the text from the text editor and then click on the 'Next Task' button on the top of the screen.</p>
	<p>f. After you complete all the instructions for this particular copy-paste technique, the experiment conductor would copy the results of the tests into a separate file and then would ask you to proceed to the next copy-paste technique testing if you haven't already performed it. </p><p>Once you are ready to begin, please press the Start button.</p>";
    $acpflag = "false";
}

require_once("external_files.php");

?>

<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1"/>
<meta charset="utf-8"/>
<title>AutoComPaste vs Traditional Copy-Paste Experimental Analysis</title>
<meta name="fb_admins_meta_tag" content=""/>
<meta name="description" content="HOME"/>
<link rel="shortcut icon" href="http://www.wix.com/favicon.ico" type="image/png"/>
<link rel="canonical" href="http://vaghulb1992.wix.com/acptest"/>
    <meta http-equiv="X-Wix-Renderer-Server" content="app30.aus"/>
<meta http-equiv="X-Wix-Meta-Site-Id" content="e8193bd3-80fe-46d9-b69a-e8a5eba9f6bf"/>
<meta http-equiv="X-Wix-Application-Instance-Id" content="229ffb4f-a7d6-443d-859d-b56ffaefcb94"/>
<meta http-equiv="X-Wix-Published-Version" content="2"/>
<meta http-equiv="etag" content="49aefcbda038fc84a190cf25fcff5afc"/>
<meta property="og:title" content="acptest"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="http://vaghulb1992.wix.com/acptest"/>
<meta property="og:site_name" content="acptest"/>
<meta property="og:description" content="HOME"/>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

<meta id="wixMobileViewport" name="viewport" content="minimum-scale=0.25, maximum-scale=1.2"/>
</head>
<body style="background-color:#303030">
        <script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
                    <header class="container" id="SITE_HEADER" >
            <center><div id="c1oj8" itemscope itemtype="http://schema.org/ImageObject" class="image">
    <h3 itemprop="name"></h3>

            <img src="http://static.wixstatic.com/media/84770f_faf416c273c9a772e45efb130fa1a90a.png_srz_281_84_85_22_0.50_1.20_0.00_png_srz" alt="" title="" itemprop="contentURL" width="281" height="84"/>
    
        <span itemprop="description"></span>
    </div></center>
            <div id="1le2" class="Text">
    <h1 class="font_0" style="line-height: 1.2em; text-align: center; color:#999999; font-family:Georgia;"><span style="line-height: 1.2em;">AutoComPaste vs Traditional Copy-Paste</span></h1>
	
	<hr/><br/>
	
	
	
	
<mytubeelement data="{&quot;bundle&quot;:{&quot;label_delimitor&quot;:&quot;:&quot;,&quot;percentage&quot;:&quot;%&quot;,&quot;smart_buffer&quot;:&quot;Smart Buffer&quot;,&quot;start_playing_when_buffered&quot;:&quot;Start playing when buffered&quot;,&quot;sound&quot;:&quot;Sound&quot;,&quot;desktop_notification&quot;:&quot;Desktop Notification&quot;,&quot;continuation_on_next_line&quot;:&quot;-&quot;,&quot;loop&quot;:&quot;Loop&quot;,&quot;only_notify&quot;:&quot;Only Notify&quot;,&quot;estimated_time&quot;:&quot;Estimated Time&quot;,&quot;global_preferences&quot;:&quot;Global Preferences&quot;,&quot;no_notification_supported_on_your_browser&quot;:&quot;No notification style supported on your browser version&quot;,&quot;video_buffered&quot;:&quot;Video Buffered&quot;,&quot;buffered&quot;:&quot;Buffered&quot;,&quot;hyphen&quot;:&quot;-&quot;,&quot;buffered_message&quot;:&quot;The video has been buffered as requested and is ready to play.&quot;,&quot;not_supported&quot;:&quot;Not Supported&quot;,&quot;on&quot;:&quot;On&quot;,&quot;off&quot;:&quot;Off&quot;,&quot;click_to_enable_for_this_site&quot;:&quot;Click to enable for this site&quot;,&quot;desktop_notification_denied&quot;:&quot;You have denied permission for desktop notification for this site&quot;,&quot;notification_status_delimitor&quot;:&quot;;&quot;,&quot;error&quot;:&quot;Error&quot;,&quot;adblock_interferance_message&quot;:&quot;Adblock (or similar extension) is known to interfere with SmartVideo. Please add this url to adblock whitelist.&quot;,&quot;calculating&quot;:&quot;Calculating&quot;,&quot;waiting&quot;:&quot;Waiting&quot;,&quot;will_start_buffering_when_initialized&quot;:&quot;Will start buffering when initialized&quot;,&quot;will_start_playing_when_initialized&quot;:&quot;Will start playing when initialized&quot;,&quot;completed&quot;:&quot;Completed&quot;,&quot;buffering_stalled&quot;:&quot;Buffering is stalled. Will stop.&quot;,&quot;stopped&quot;:&quot;Stopped&quot;,&quot;hr&quot;:&quot;Hr&quot;,&quot;min&quot;:&quot;Min&quot;,&quot;sec&quot;:&quot;Sec&quot;,&quot;any_moment&quot;:&quot;Any Moment&quot;,&quot;popup_donate_to&quot;:&quot;Donate to&quot;,&quot;extension_id&quot;:null},&quot;prefs&quot;:{&quot;desktopNotification&quot;:true,&quot;soundNotification&quot;:true,&quot;logLevel&quot;:0,&quot;enable&quot;:true,&quot;loop&quot;:false,&quot;hidePopup&quot;:true,&quot;autoPlay&quot;:false,&quot;autoBuffer&quot;:false,&quot;autoPlayOnBuffer&quot;:false,&quot;autoPlayOnBufferPercentage&quot;:42,&quot;autoPlayOnSmartBuffer&quot;:true,&quot;quality&quot;:&quot;medium&quot;,&quot;fshd&quot;:true,&quot;onlyNotification&quot;:false,&quot;enableFullScreen&quot;:true,&quot;saveBandwidth&quot;:false,&quot;hideAnnotations&quot;:false,&quot;turnOffPagedBuffering&quot;:true}}" event="preferencesUpdated" id="myTubeRelayElementToPage"></mytubeelement><mytubeelement data="{&quot;loadBundle&quot;:true}" event="relayPrefs" id="myTubeRelayElementToTab"></mytubeelement>
</div>
<div style="position: absolute;
    top: 12.5em;
    bottom: 1em;
    left: 32em;
    right: 1em;
	color:#999999; font-family:Georgia;"><p><u><b>Copy-Paste Technique Evaluation:-</b></u></p>
		

    <p>
       <?php echo $msg; ?>
    </p>
    <form action="interface1.php?user=<?php echo $user; ?>&acp=<?php echo $acpflag; ?>&data=<?php echo $data; ?>&jslist=<?php echo $jslist; ?>&tasklist=<?php echo $tasklist; ?>" method="post">
        <input id="submit" type="submit" value="Start">
    </form>
	<br/>	
	</div>
    </header>
<section class="page" id="mainPage">
                <div id="csbt">
    <iframe src="http://www.youtube.com/embed/d_e_f3FwAFU" width="480" height="360" frameborder="0"></iframe>
</div>

    </section>
<footer class="container" id="SITE_FOOTER" >
    </footer>

   <script type="text/javascript">if (!NREUMQ.f) { NREUMQ.f=function() {NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:") + "//" + "js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-6.newrelic.com","c99d7f1ab0","1963269,1963270","ZFAHNkNYXUBQVEUKXF0aKDRyFmBWXn9FDl9hUAsGVEtWQR9FVA1XVkc=",0,57,new Date().getTime(),"","","","",""]);</script>
</body>
</html>
