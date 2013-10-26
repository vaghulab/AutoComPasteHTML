<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tjmonsi
 * Date: 10/7/13
 * Time: 8:20 PM
 * To change this template use File | Settings | File Templates.
 */

if (!isset($_COOKIE["user"])){
    $message = "Please use a username";
    header("Location: index.php?message=".$message);
    exit;
}

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
	color:#999999; font-family:Georgia;"><p><u><b>Result File Download:-</b></u></p>
	<p>Please click on the following link to download the experiment result file.</p>	
	<b> <a href="generate2.php" target="_blank" style="color:#1463FF; font-family:Georgia;">Generate File</a></b>

    
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
