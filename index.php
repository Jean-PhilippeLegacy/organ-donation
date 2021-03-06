<?php

  require_once("admin/phpscripts/init.php");

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $populateContent = getInfo();

?>
<html>

<head>
    <meta charset="utf-8">
    <title>Organ Donation Ontario</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="greensock/src/minified/TweenMax.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
    <script src="js/DrawSVGPlugin.min.js"></script>
    <script src="js/ScrambleTextPlugin.min.js"></script>
    <script src="js/MorphSVGPlugin.min.js"></script>
    <script src="js/CSSPlugin.min.js"></script>
    <style></style>
</head>

<body>
    <header id="panel">
        <h1 class="hidden">Ask me about my organs</h1>
        <a href="#" id="panel-click"><img id="banner-image" src="images/heart_text_click.jpg" alt="click me"></a>
    </header>

      <section id="sharables" class="sharablesSection">
        <div class="row">
          <div class="column">
            <!-- <h3 class="float-left">Spread the word</h3> -->
            <h3 class="float-left">share</h3>
            <a id="closeit" class="small-1 float-right" href="javascript:void(0)"><img  class="close float-right" src="images/close_white.svg" alt=""></a>
          </div>

          	<div id="socialMediaIconsTop">

          		<div id="facebookIcon" class="sharable small-3 medium-2 medium-offset-2 large-1 large-offset-4 column">
            		<a href="javascript:void(0)"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve">
					<style type="text/css">
						.fbFill{fill:#FFFFFF;}
					</style>
				<g id="Icons">
				<g id="Black" transform="translate(-200.000000, -160.000000)">
				<path id="Facebook" class="fbFill" d="M225.6,208h-23c-1.5,0-2.6-1.2-2.6-2.6v-42.7c0-1.5,1.2-2.6,2.6-2.6h42.7
							c1.5,0,2.6,1.2,2.6,2.6v42.7c0,1.5-1.2,2.6-2.6,2.6h-12.2v-18.6h6.2l0.9-7.2h-7.2v-4.6c0-2.1,0.6-3.5,3.6-3.5l3.8,0v-6				.5
							c-0.7-0.1-2.9-0.3-5.6-0.3c-5.5,0-9.3,3.4-9.3,9.6v5.3h-6.3v7.2h6.3V208L225.6,208z"/>
					</g>
				</g>
				</svg></a>
          		</div>

          		<div id="twitterIcon" class="sharable small-3 medium-2 large-1 column">
            		<a href="javascript:void(0)">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 						viewBox="0 0 48 40" style="enable-background:new 0 0 48 40;" xml:space="preserve">
							<style type="text/css">
								.twitterFill{fill:#FFFFFF;}
							</style>
					<g id="Icons">
					<g id="Black" transform="translate(-300.000000, -164.000000)">
					<path id="Twitter" class="twitterFill" d="M348,168.7c-1.8,0.8-3.7,1.3-5.7,1.6c2-1.2,3.6-3.2,4.3-5.6c-1.9,1.2-4,2-6.3,2.4
					c-1.8-2-4.4-3.2-7.2-3.2c-5.4,0-9.8,4.5-9.8,10.1c0,0.8,0.1,1.6,0.3,2.3c-8.2-0.4-15.4-4.4-20.3-10.6c-0.8,1.5-1.3,3.2-1.3,5.1
					c0,3.5,1.7,6.6,4.4,8.4c-1.6,0-3.1-0.5-4.5-1.3v0.1c0,4.9,3.4,9,7.9,9.9c-0.8,0.2-1.7,0.4-2.6,0.4c-0.6,0-1.3-0.1-1.9-0.2
					c1.3,4,4.9,6.9,9.2,7c-3.4,2.7-7.6,4.3-12.2,4.3c-0.8,0-1.6,0-2.3-0.1c4.4,2.9,9.5,4.5,15.1,4.5c18.1,0,28-15.4,28-28.7
					c0-0.4,0-0.9,0-1.3C345,172.5,346.7,170.8,348,168.7"/>
					</g>
					</g>
					</svg>
					</a>
          		</div>

          		<div id="pinterestIcon" class="sharable small-3 medium-2 large-1 column">

          			<a href="javascript:void(0)">
          			<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">
					
						<style type="text/css">
							.pinterestFill{fill:#FFFFFF;}
						</style>

						<path class="pinterestFill" d="M111.4,324.5l32-136.7c0,0-16.3-33.5,0.8-71.7c15.7-35,73.7-27.4,66,14.1s-17.7,68-17.7,68
						s-14.5,39.9,20.1,49.9s54.3-17.7,54.3-17.7s38.9-39.4,30-117.6S188.9,36.4,163,49.4s-37.3,19-50.6,38.9s-26.7,51-17,86.2
						c0,0,3.9,13.1,14.1,25.7c0.5,0.7,0.9,1.4,1,2.3c0.4,2.9,0.1,10.7-6.9,28.3c0,0-4.2,5.5-12.1,0.8s-29.9-19.5-35.7-40.5
						s-10.7-39.4-5.2-69.1s27.5-72.5,71.8-96.8s93.5-26.1,139.9-12.7s81.2,60.5,85.9,86.3s14.1,62.3-15.9,127.9
						c-30.1,65.6-121.8,83.7-156.2,36.6l-17,62.3c0,0-12.7,41-40.6,72.8c0,0-2.4,2.4-3.9-0.2C113,395.7,108.5,354.9,111.4,324.5z"/>

					</svg>
					</a>
          		</div>

          		<div id="instagramIcon" class="sharable small-3 medium-2 large-1 end column">

          		<a href="javascript:void(0)">
          			<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">

						<style type="text/css">
							.instagramFill{fill:#FFFFFF;}
						</style>

					<g>

						<path class="instagramFill" d="M200,299.1c-54.6,0-99.1-44.5-99.1-99.1c0-54.6,44.5-99.1,99.1-99.1c54.6,0,99.1,44.5,99.1,99.1
						C299.1,254.6,254.6,299.1,200,299.1z M200,131.6c-37.7,0-68.4,30.7-68.4,68.4s30.7,68.4,68.4,68.4s68.4-30.7,68.4-68.4
						S237.7,131.6,200,131.6z"/>
						<circle class="instagramFill" cx="303.2" cy="96" r="22.4"/>
						<path class="instagramFill" d="M280.1,393.6H119.9c-62.6,0-113.6-51-113.6-113.6V119.9c0-62.6,51-113.6,113.6-113.6h160.1
						c62.6,0,113.6,51,113.6,113.6v160.1C393.6,342.7,342.7,393.6,280.1,393.6z M119.9,37C74.2,37,37,74.2,37,119.9v160.1
						c0,45.7,37.2,82.9,82.9,82.9h160.1c45.7,0,82.9-37.2,82.9-82.9V119.9c0-45.7-37.2-82.9-82.9-82.9H119.9z"/>

					</g>
				</svg>
				</a>
          		</div>

          	</div>

          	<div id="fbEmbedPost">

          		<iframe class="medium-6 large-4 column" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faskmeaboutmeorgans%2Fposts%2F1893588404196454%3A0&width=500" width="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

    			<iframe class="medium-6 large-4 column" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faskmeaboutmeorgans%2Fposts%2F1893588230863138%3A0&width=500" width="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

    			<iframe class="medium-6 large-4 column" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faskmeaboutmeorgans%2Fposts%2F1893588180863143%3A0&width=500" width="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

    			<iframe class="medium-6 large-4 column" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faskmeaboutmeorgans%2Fposts%2F1893588137529814%3A0&width=500" width="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

    			<iframe class="medium-6 large-4 column" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faskmeaboutmeorgans%2Fposts%2F1893587000863261%3A0&width=500" width="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

    			<iframe class="medium-6 large-4 column" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faskmeaboutmeorgans%2Fposts%2F1893586834196611%3A0&width=500" width="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

    		</div>

    		<div id="twitterEmbedPost">

    			<blockquote class="twitter-tweet medium-6 large-4 column" data-lang="en"><p lang="en" dir="ltr">Learn more at <a href="https://t.co/J6lUwi4fQP">https://t.co/J6lUwi4fQP</a> <a href="https://twitter.com/hashtag/askmeaboutmyorgans?src=hash">#askmeaboutmyorgans</a> <a href="https://t.co/Py7P2m3HBD">pic.twitter.com/Py7P2m3HBD</a></p>&mdash; askmeaboutmyorgans (@askmeaboutmyorg) <a href="https://twitter.com/askmeaboutmyorg/status/848006142005563393">April 1, 2017</a></blockquote>
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

				<blockquote class="twitter-tweet medium-6 large-4 column" data-lang="en"><p lang="en" dir="ltr">Learn more at <a href="https://t.co/J6lUwi4fQP">https://t.co/J6lUwi4fQP</a>  <a href="https://twitter.com/hashtag/askmeaboutmyorgans?src=hash">#askmeaboutmyorgans</a> <a href="https://t.co/56DAQnljSu">pic.twitter.com/56DAQnljSu</a></p>&mdash; askmeaboutmyorgans (@askmeaboutmyorg) <a href="https://twitter.com/askmeaboutmyorg/status/848006229821714432">April 1, 2017</a></blockquote>
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

				<blockquote class="twitter-tweet medium-6 large-4 column" data-lang="en"><p lang="en" dir="ltr">Learn more at <a href="https://t.co/J6lUwi4fQP">https://t.co/J6lUwi4fQP</a>  <a href="https://twitter.com/hashtag/askmeaboutmyorgans?src=hash">#askmeaboutmyorgans</a> <a href="https://t.co/a1Dh0xjPxm">pic.twitter.com/a1Dh0xjPxm</a></p>&mdash; askmeaboutmyorgans (@askmeaboutmyorg) <a href="https://twitter.com/askmeaboutmyorg/status/848006262637940736">April 1, 2017</a></blockquote>
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

				<blockquote class="twitter-tweet medium-6 large-4 column" data-lang="en"><p lang="en" dir="ltr">Learn more at <a href="https://t.co/J6lUwi4fQP">https://t.co/J6lUwi4fQP</a>  <a href="https://twitter.com/hashtag/askmeaboutmyorgans?src=hash">#askmeaboutmyorgans</a> <a href="https://t.co/NCJqFzLt3F">pic.twitter.com/NCJqFzLt3F</a></p>&mdash; askmeaboutmyorgans (@askmeaboutmyorg) <a href="https://twitter.com/askmeaboutmyorg/status/848006292480438273">April 1, 2017</a></blockquote>
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

				<blockquote class="twitter-tweet medium-6 large-4 column" data-lang="en"><p lang="en" dir="ltr">Learn more at <a href="https://t.co/J6lUwi4fQP">https://t.co/J6lUwi4fQP</a>  <a href="https://twitter.com/hashtag/askmeaboutmyorgans?src=hash">#askmeaboutmyorgans</a> <a href="https://t.co/N3Bkmn8e4R">pic.twitter.com/N3Bkmn8e4R</a></p>&mdash; askmeaboutmyorgans (@askmeaboutmyorg) <a href="https://twitter.com/askmeaboutmyorg/status/848006321085480960">April 1, 2017</a></blockquote>
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

				<blockquote class="twitter-tweet medium-6 large-4 column" data-lang="en"><p lang="en" dir="ltr">Learn more at <a href="https://t.co/J6lUwi4fQP">https://t.co/J6lUwi4fQP</a>  <a href="https://twitter.com/hashtag/askmeaboutmyorgans?src=hash">#askmeaboutmyorgans</a> <a href="https://t.co/TiEq3KvR3E">pic.twitter.com/TiEq3KvR3E</a></p>&mdash; askmeaboutmyorgans (@askmeaboutmyorg) <a href="https://twitter.com/askmeaboutmyorg/status/848006352790319105">April 1, 2017</a></blockquote>
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

    		</div>

    		<div id="pinterestEmbedPost">
    			<a class="pinterestPin" data-pin-do="embedPin" href="https://www.pinterest.com/pin/635077984923984702/"></a>

    			<a class="pinterestPin" data-pin-do="embedPin" href="https://www.pinterest.com/pin/635077984923984741/"></a>

    			<a class="pinterestPin" data-pin-do="embedPin" href="https://www.pinterest.com/pin/635077984923984748/"></a>

    			<a class="pinterestPin" data-pin-do="embedPin" href="https://www.pinterest.com/pin/635077984923984756/"></a>

    			<a class="pinterestPin" data-pin-do="embedPin" href="https://www.pinterest.com/pin/635077984923984760/"></a>

    			<a class="pinterestPin" data-pin-do="embedPin" href="https://www.pinterest.com/pin/635077984923984765/"></a>
    		</div>

    		<div id="instagramEmbedPost">

    			<blockquote class="instagram-media medium-6 column" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:31.342592592592595% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BScZ-IFg-MD/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#askmeaboutmyorgans</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Organ Donation Ontario (@organdonationontario) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-04-04T00:47:01+00:00">Apr 3, 2017 at 5:47pm PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

    			<blockquote class="instagram-media medium-6 column" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:30.694444444444446% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BScbCLugN_Y/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#askmeaboutmyorgans</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Organ Donation Ontario (@organdonationontario) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-04-04T00:56:18+00:00">Apr 3, 2017 at 5:56pm PDT</time></p></div></blockquote>
				<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

				<blockquote class="instagram-media medium-6 column" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:30.694444444444446% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BScbFPGAQh7/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#askmeaboutmyorgans</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Organ Donation Ontario (@organdonationontario) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-04-04T00:56:43+00:00">Apr 3, 2017 at 5:56pm PDT</time></p></div></blockquote>
				<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

				<blockquote class="instagram-media medium-6 column" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:30.694444444444446% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BScbIwfAcG6/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#askmeaboutmyorgans</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Organ Donation Ontario (@organdonationontario) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-04-04T00:57:12+00:00">Apr 3, 2017 at 5:57pm PDT</time></p></div></blockquote>
				<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

				<blockquote class="instagram-media medium-6 column" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:30.694444444444446% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BScbLR4A075/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#askmeaboutmyorgans</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Organ Donation Ontario (@organdonationontario) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-04-04T00:57:33+00:00">Apr 3, 2017 at 5:57pm PDT</time></p></div></blockquote>
				<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

				<blockquote class="instagram-media medium-6 column" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:30.694444444444446% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BScbNWXgVkO/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#askmeaboutmyorgans</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Organ Donation Ontario (@organdonationontario) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-04-04T00:57:50+00:00">Apr 3, 2017 at 5:57pm PDT</time></p></div></blockquote>
				<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
    		</div>
          
        </div>
    </section>

   <div class="row expanded collapse follower">
      <a class="text-center column" href="http://www.beadonor.ca" target="_blank">Register Now!</a>
    </div>

    <section class="thanks-asking">
        <h2 class="hidden">Thanks for asking</h2>
        <img src="images/thanks_asking.jpg" alt="">
    </section>

    <section class="grey-container map">
        <h2 class="hidden">life saving transplants</h2>
        <div class="row expanded collapse">
            <div class="small-6 float-left column">
            
                <h3 class="small-12 column">over <span><?php echo $populateContent['content_section_one']; ?></span><br> ontarians are<br> waiting to receive<br> <span>life saving</span><br> organ transplants</h3>
                <p>There's no shortage of organs, just a <br> shortage of donors.</p>
                <p>This is an <span>awareness</span> issue.</p>
            </div>
            <div class="mapsvg small-6 float-right column">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">
<style type="text/css">
  .st01{fill:#565656;}
  .st11111{fill:#ffffff;}
</style>
<g id="map">
  <path class="st01" d="M370.4,241.9c0,0,0.1-0.1,0.1-0.2l-3-1.3l-0.7-6c0,0-3.4-1-8.7,1.2c-2.3,2.8-3.4,2.9-4.1,3.1
    c-1.7,1.7-5.5,4.5-6,5.5c-0.4,1-1.1,3.5-2.2,2.6c-1.2-0.9-6.5-3.6-6.5-0.1c-0.2,1.2-1.2,1.5-2.1,1.1c-0.9-0.4-2.6-0.6-3.3-0.3
    c-0.7,0.3-1.6-0.1-2-1.2c-0.4-1.1-0.7-1.7-1.7-2c-1-0.4-1.3-1.2-1.4-2.2c-0.1-1-3.4-1.6-2.7-0.3c0.7,1.3,0.8,2.7-0.7,2.5
    c-1.5-0.2-4.9-1.2-5.6-2.8c-1.6-1-5.4-2.6-7.7-2.3c-2.3,0.2-8.2-0.1-9.4,1.4c-1.4-0.2-4.5-0.5-6.2,0.6c-0.8,0.3-1.2-0.5-1.3-0.9
    c0.1-0.3-0.5-0.6-1.2-0.7c-0.7-0.1-4-1.3-4.6-3.1c-1.7-0.9-3-1.8-3.6-3.5c-2.1-0.5-3.3-1.6-4-3.5c-1.7-0.6-3-2.4-2.9-5
    c-1.9-0.9-3.4-2.7-3.4-2.7s-0.6-1.3-0.1-2.4c0.5-1.1-1-4.2-1-4.2l-24.6-80.9c0,0,0-0.2-0.2-0.3c0,0,0,0,0,0
    c-1.2-0.3-1.4,1.2-1.9,2.2c-0.5,1-0.2,2,0.4,2.7c0.6,0.7-0.4,1.7-0.6,2.2c-0.1,0.5-0.5,0.7-1.6,0.7c-0.8-2.1-5.7-1.9-7.4-2
    c-0.3-1.1-1.4-3.4-2.5-4c-1.1-0.6-1.8-2.3-2.1-2.9c-0.2-0.6-1.1-1.4-2.1-1.8c0-0.9-0.3-0.8-0.6-0.2c-1.4-2.2-1.7-0.7-1.7-0.7
    s-1.2-0.4-1.9-1c-0.2-0.5-1.3-2-3.1-1.6c-2.5,0.7-5.1-1.6-5.6-2.3c-0.4-0.7-1-1.6-1.8-1c-0.1-0.3-0.3-0.4,0.5-1.2
    c-0.9-0.4-1.2-1.7-1.1-2.6c-1.1,0-2.7-1.5-3.4-2.2c-0.6-0.7-2.3-0.8-3.1-1.8c-1.7-3.3-4.7-3.6-5.3-3.6c-0.6,0-1-0.9-1.5-2.8
    c-0.4-2.5,0-3.8,1.2-5.2c0-0.6-1.5-3.9-2-4.5c-0.5-0.6-1.7-3.1-1.3-4.4c0.6-2.2,0-2.6-0.7-4.4c-0.8-1.8-3.4-3.9-4.8-5.4
    c-1.4-1.5-0.8-5.8-0.5-7.5c-0.6-1.2-0.7-3.3-0.5-4.4c0.2-1.1,0.2-2.7,0.1-3.3c-0.1-0.6-0.7-1-0.9-0.2c-0.2-0.9-1.1-3.1-1.3-3.5
    c-0.1-0.3,0.3-0.8-0.2-1.6c0,0-0.9-0.2-1.2-0.8l-0.4,0.2l1.2,1.8c0,0-0.3,0.2-1.3-0.3c-1-0.5-1.3-0.3-1.5,0.3
    c-0.4-0.4-1.2-1.3-2.1-1.4c-0.9-0.1-1,1.2-1,1.2s-0.7,0-1.5,0c-1.6-2.2-2.7-1-3.6-0.8c-0.8,0.3-2.1,1.2-5.3,0.8
    c-4.1-0.6-5.4,0-5.9,0.7c-0.5,0.7-1,0.9-2.4,0.3c-2.6,1.8-6.5,2.4-7.2,2.3c-0.7,0-3.5,0.5-3.8,0c-1.1-1.8-1.8-0.8-1.8-0.8
    s-0.1-0.2-0.2-0.8c-2.9,0.5-4.4-1.8-5.1-2.3c-0.7-0.4-2-1.4-2.8-1c-1.5-1.2-4.3-1.3-6.4-1.3c-0.8-1.2-5.8-2.4-8.8-3.2
    c-3.7,1.1-5.8-0.3-7.3-0.9c0.7-0.1,0.4-0.7-0.6-0.9c-2.3-0.6-2.6-2.7-2.7-3.1c-0.1-0.4-2.8-2.9-3.8-3.4c0-0.6-0.2-1.2-1.6-1.6
    c-1.9-0.3-4.5-1.5-5.8-2.8c-1.6,0.1-3.2-1.8-4.3-2.6c0-1.5-0.8-0.5-1.5-0.6c-0.2,0-0.6,0-1-0.1c-4.7,7-41.4,61.9-47.3,70.3
    c-6.3,8.7-18.4,22.3-22.2,25.8c0.8,11.8,3.8,69.2,4.3,78.8c0-0.2,0-0.3,0-0.5c-0.1-0.6,0.5-0.7,0.6-0.4c0.3,0.3,1,0.5,1.2,0.2
    c0.4-0.4,0.7-0.8,1.1-0.3c0.7,0.7,1.4,1,1.8,1l0.2,1.4l0.1,0.5l0.5,2.6l0.4,0.5c0,0,1.2,4.3,1.4,4.9c-0.3,0.5,0,2,0.7,2.9
    c0.7,0.9,2.8,1.2,3.1,0.9c0.5-0.6,1.4-0.1,2-0.2c1-0.2,1.2,0.6,1.7,1.2c0,0,1.3-0.2,1.9-0.3c0.7-0.1,1.5,0.4,2.2,0.3
    c2.2-0.2,1.9,1.6,1.9,1.9c0,0.4,0.9,0.8,1.4,0.4c2-0.2,3.1-0.9,3.8-1.4c0.1-0.6,0.3-0.8,0.8-0.9c1.2-0.9,2.4-1,3.8-0.8
    c3.1-0.6,5.4,1,6.5,1.5c1.3-0.5,1.3,0.1,1.3,0.1l0.1,0.8c0,0-0.2-0.1-0.8,0c-0.6,0.1-0.2,1,0.5,1.3c0,0,1-0.2,2.1-0.3
    c1.2-0.1,1.1,1,0.7,1.5c0,0,1.4,2.3,1.9,2.8c0.5,0.5,1.4-0.3,1.2-0.5c-0.3-0.7-0.3-1.8,0.2-2.2c0.2,0.2,0.8,0,1.5-0.2
    c0.7-0.2,2.3,0,2.4,0.7c0.1,0.7,0.4,1.3,0.8,1.5c0.4,0.3,2,0.6,3,0.6c1,0,1.3,0.3,1.4,1c-0.1,0.5,0,0.7,0.5,0.9
    c0.5-0.1,1.6,0.6,1.6,0.6s0.7,0.1,1.7-0.1c0.1,0.3,0.6,0.3,1.1,0.3c0.6-0.7,1.2-0.1,2-0.9c1.1-1.6,3.4-3.3,4.4-3.9
    c1-0.6,1.5-0.6,1.5,0c0,0.6,0.5,0.8,1,1.6c0.7,1.3,2.1,0.7,2.5,0.5c0.4-0.3,1-0.3,1.1-0.1c0.4,0.3,0.8,0,0.8,0s0.9-0.3,1.4-0.3
    c0.1,0.1,0.5,0.3,1,0.2c0.5-0.1,1.4-0.3,2.1-0.5c1.7-0.6,2.6-0.2,3.3,0.8c1.1,1.3,2.5,1,2.6,0.4c0,0,2.3-0.2,3.9-0.4
    c0.3-0.2,0.5-0.3,0.8-0.5c0.1-0.1,0.2-0.2,0.3-0.3c-0.1,0.1-0.2,0.2-0.3,0.3c1.6-1.1,3.3-2.9,3.1-6c0.4-0.3,0.4-1.2,0.4-1.7
    c-0.5-0.5-0.6-2.4,0.2-2.9c0.9-0.5,4.5-2.3,5-2.8c0.5-0.5,0.7,0.1,0.5,0.5c-0.1,0.4-0.9,2.5-0.8,3.2c-0.4,0.9-1.2,1.9-0.4,2.4
    c0.8-0.5,2.1-1.9,2.7-1.6c0.2-1.4,0.2-3.9,0.8-4.7c-0.1-1-0.4-1.7,0.5-1.8c0.2-0.3,0.5-0.4,0.5-0.4l-0.3-0.2c0,0,0.8-1.6-0.1-1.4
    c-0.1-0.8-0.2-1.4,0.3-2c0.2-0.7,0.3-1.3,1-1.1c0.7,0.2,1.4,0.3,1.6,0.8c0.1,0.5,0.8,2.3-0.8,4.1c-1.1,1.3-2.3,2.6-1.7,4.2
    c0.2,0.6,0.9,0,1-0.5c-0.1-0.6,0-2.1,1.2-2.1c0.5-0.7,0.7-0.6,0.9-0.5c0.4-0.6,0.4-1.3,1.3-0.9c0.8-0.4,1.4-2,1.7-2.7
    c0.1-0.8,0-2.9-1.7-2.8c-1,0.1-1.1-0.7-1.1-1.3c-0.1-0.6-0.2-1.5,0-1.5c0.2-0.1,1.3-0.4,1.7-1c0.7-0.2,1.5-0.2,2.5,0.8
    c1.6-0.2,2.5-0.2,2.7,0.7c0.6-0.3,1.5-1,1.8,0.5c0.6-0.2,0.9-0.9,1.6,0c0.9-0.3,3-0.3,4.5,1c0.6,0.1,0.9,0,1.1,0.2
    c0.3-0.7,1.2-1.1,2.9-1.2c0.5-0.7,0.8-0.3,1,0.1c1,0.2,1.4,0,1.9-0.5c0.5-0.5,1.6-0.9,2.3-0.9c0,0.6,0.2,1.2,0.2,1.2l1.5,0.1
    c0,0,0.5-1,0.7-1c0.2,0.1,1.1,0.1,1.9,1.2c0.5,0.8,0.9,1.1,1.1,1.2c-0.3,0.4-0.4,0.6,0.1,0.7c0.5,0.1,1.6,2,2.1,3.8
    c0.7,0.5,0.8,0.7,1,1.3c0.3,0.6,4.2,10.4,13.1,7.2c0.6-0.5,1.5-1.4,4-1.4c0.8-0.3,2.4-1.1,3.4-0.4c0.3-0.4,1.4-0.4,1,0.4
    c-0.3,0.5-1.2,2.4-0.4,2.7c-0.1,0.8-0.9,2.3-0.9,2.3c0.4,0.5,0.2,1.6,0,1.9c-0.1,0.3,0.3,1,0.9,1.1c0.6,0.1,0.7,0.5,0.8,0.7
    c0.7,0.3,0.9,0.6,1.7,0.6c0.7,0,2.1,0.8,2.6,2.2c0.7-0.2,1.4,0.3,2,1.4c0,0.8-0.5,2.3-1.1,2.7c-0.2,0.9-0.2,1.4,0.1,1.7
    c0.2,0.3,0,1.1-0.3,1.5c0,0.8,0,1.1-0.1,1.5c0.6,0.4,1.4,0.5,1.9,0.3c0.7,0.2,0.8,0.8,0.9,0.9c0.6,0.3,0.9,0,0.7-0.7
    c0.2-0.3,0.5-0.3,0.5-0.3l1.2,0.8l1.5-0.5l0.7,0.6l-0.5,1.2c-0.6-0.3-1.9-0.1-2.1,0.2c0,0.4,0.3,0.5,0.3,0.8c0,0.4,0,1.1-0.3,1.6
    c-0.2,0.4,0.4,1,1,0.9c0.6-0.2,0.4-1,0.3-1.4c0.3-0.3,0.6-0.3,0.7,0c0.1,0.3,0.3,0.5,0.4,1.2c-0.6,0.7-1,1-1,1.8
    c-0.6,0.6-0.9,1.2-0.6,1.9c0.9,0.4,1.5,0.7,1.4,1.3c0.5-0.1,1.1-2.7,3.8-1.2c0.1-0.5,0.2-1.2,0.2-1.2s1.3,0.1,1.6-0.3
    c0.6,0.3,1,0.8,1,0.8l0.1,1.5c0,0-0.3,0.5-0.1,1.5c0.8,0.4,1.4,0.9,6.5,0.4c1,0.4,1.3,0.1,1.6-0.2c1.1,0.4,4.9,0.4,6.4,0.1
    c1.9,0.2,5.6-0.3,7.8-1.2c1.7,0,2.7-0.3,3.8-1.2c1.2-0.3,2.2-1,2.4,0c0.5,0.5,1.5-0.3,2.2-0.1c0.6,0.3,2.7,0.5,5.4-0.5
    c1.1-0.1,1.3-0.2,1.3-0.2l0.8,2c0,0,0.6-0.3,0.8-0.5c0.2-0.2,1.3-0.2,1.3,0.5c-0.7,0.5-0.9,1.1-0.3,0.9c0.6-0.2,1.2-0.6,1.8-0.9
    c0.7-0.3,3.3-1.5,4.1-1c0.8-0.4,1.5-0.4,1.9,0.3c0.9-0.1,1.6-0.8,1.6-0.8l1.8-0.3c0,0,2.2-1.2,2.4-0.4c0.2-0.7,0.6-0.8,0.8-0.3
    c0.2,0.4,0.4,0.9,0.4,1.3c0.5,0.4,0.5,0.6,0.8,0.8c0.3,0.2,1.1,0.1,1.6,1.6c0.8,0.7,1.5,1.2,1.5,1.2s0,0.6,0.5,0.6
    c0.5,0,0.8,0.7,1,1.3c0.6-0.3,1.3-0.4,1.6-0.9c0.3,0.4,0.7,1.1,0.7,1.3c-0.1,1.1,0.1,1.5,0.5,2c0.5-0.2,0.7-0.2,0.7-0.2
    c0.4,0.9,0.4,1.4,1.9,1.2c0.6,0.4,1.2,0.6,1.2,1.9c0,1.3,1.2,1,1.4,0.9c0.2-0.1,1.4-0.6,1.7,2.1c0.6,0.2,2.2,1.3,3.4,2.5
    c0.4-0.3,1.3-0.5,2.2,1.4c0.6,1.3,1.2,1.4,1.8,1.3c0,0.6-0.4,1.1-0.4,1.1l-1.8,0.1l-0.1-0.9c-0.7,0.1-0.9-0.5-1-0.9
    c-0.5-0.3-1.7-0.5-1.8,0c0,1-0.4,1.3-1,1.1c-0.3,0.6-0.5,2.3,0.7,2.3c0.8,0.1,2.1,0.2,2.3,2.5c0.4,1,0.2,2.3-0.6,3.2
    c-0.9,0.1-3.6-0.1-4.3-0.4c-1,0.3-2.2-0.1-2.6-0.4c-1.1,0.2-2.4-0.4-2.9-1.5c-0.7-0.6-0.7-0.9-0.7-0.9l-2.3,1.4
    c0,0,0.2,1.9-1.1,1.5c-0.1-1.3-0.3-2.6-0.3-2.6l-0.7-0.5l-0.8,0.1l-0.6-0.6c0,0-0.9,0.2-0.7-0.3c0.2-0.6,0.3-0.9,0.3-0.9l-0.9-0.6
    c0,0-0.3,0.2-0.6,0.9c-0.8-0.7-1.7-1.4-1.7-1.4l-0.7,0.3c0,0,0.2-1.2-1-0.5c-0.4-0.8-0.7-0.7-0.6-1.8c-0.2-0.4-0.4-0.8-0.4-0.8
    l-0.8,0.1c0,0-1.3-1.1-0.1-2l-0.3-1c-0.5,0.6-3.9,1.7-5.8,1.4c-0.5,0.5-0.8,1.1-0.7,1.8c0.5-0.3,0.8,0,1,0.1c1-0.2,1.4-0.2,1.4-0.2
    l0.2,1l0.5-0.1c0,0,1.8,1.5,1.9,1.6c0.5,1.1,0.6,1,1.1,0.9c0.6-0.1,1,0.3,1.1,1.6c0.6,0.2,0.8,0.7,1.1,1c0.3,0.3,2,2.2,1.4,3.3
    c0.5,0.6,1.1,1.8-0.2,3.8c0.1,1.1,0,1-0.2,1.4c-0.2,0.3-1.7,2.8-1.7,3.6c-0.7,0.2-0.6,0.4-0.1,1.3c-0.2,0.7,0,1.5,0.1,2.1
    c0.1,0.6-0.5,1.4-1,2c-0.5,0.5-0.6,1.7,0.1,2.5c0.5,0.8,1.4,4.8,1.8,5.4c0,0.9,0.3,1.7,0.4,2.1c0.1,0.4,1.6,4.3,1.4,5.3
    c0.7,0.8,1,1.5,0.4,2.1c0.1,0.5,0.1,1,0.1,1s-1.1,1.5-1.9,2.3c-0.7,0.8-1.4,0.6-1.9,2.2c-0.5,1.6-1,2.9-1.8,3.5
    c-0.8,0.6-1.9,1.1-2.6,1.3c-0.7,0.7-0.8,1-0.5,1.1c0.2,0.1,0.3,0.4,0,0.7c-0.2,0.3-0.5,0.9-0.2,3.4c0.5,0.8,0.7,1.2,0.4,1.5
    c0.1,0.9-0.1,1.6,0.2,2.6c-0.6,1.5-1.1,2.8-1.7,2.2c-0.6,0.4-1.1,1.3-0.1,1.3c1.1,0,2.6,0,2.9,0c0.4,0,1.5,0.5,1.6,2.3
    c0,0.9-0.5,1.2-1.3,1.4c-1.1,0.5-1.2,0.7-2.1,0.9c-0.9,0.2-1.5,0.3-2.5,0.2c-1.7,0.2-2.5-0.2-3.2,0.4c-0.6,0.5-1.3,0.6-1.5,1.1
    c-0.2,0.5-0.7,1.3-0.1,3.1c0.3,1,0.5,2.3,0.5,2.8c0.8,0,2,0.1,2.6,0.5c0.7,0.4,1.6,0.6,2.2-0.1c0.7-0.3,1-0.4,1.8-1
    c0.7-0.6,2.8-2.1,4.8,0.5c0-0.4,0-1,0-1c-0.6-0.8-0.7-2.4,1.5-4.3c1.3-0.7,1.7-1.1,2-1.5c0.3-0.4,1.1-1.6,1.1-1.6l0.5,0
    c0.6-0.8,0.6-1.1,2.9-1.2c1.1-0.2,1.3-0.6,0.8-1.2c-0.5-0.5-0.3-0.9-0.1-1.1c0-0.5-0.6-1.2,1.3-2.5c0.6-1.1,1-1.8,1.6-1.3
    c0.4-0.2,0.5-0.5,0.5-0.5c-0.5-1.1-0.2-1.9,1.5-2.9c0.2-0.8,0.4-0.8,1.2-0.5c0.3-0.4,0.4-0.9,0.5-1.3c0.1-0.4,3-2.6,7.3-1.4
    c0.5,0.2,1.4,0.9,2.6-0.6c1.3,0.6,2.2,1.1,3.6-0.1c1.2-0.1,1.6-0.3,1.7-0.6c1.7-0.1,3.8-0.4,3.8-0.4s0.8-0.3,1.4-0.3
    c0.6,0,0.7-0.6,0-0.8c-0.6-0.2-1.3,0.1-2.3,0.6c-0.9-0.3-1.4,0-2,0.2c-0.6,0.2-1.6,0.1-1.1-0.5c0.5-0.6,0.6-1,0.6-1l0.6,0.2
    c0,0,0.2-3.3,1.9-4c1.7-0.8,3.4-1.7,3.9-1.8c0.4-0.2,1.2-0.2,1.6-0.3c0.5-0.8,0.4-0.5,0.7-0.5c0.3,0,1.3-0.3,1.3-1.2
    c1.1,0,3.2-0.9,3.8-1.6c1.2-0.2,1.8-0.2,1.8-0.2c0.4-0.8,2.2-1.2,3.6-1.1c0.8-0.2,1.3-0.4,1.6-0.8c0.3-0.4,1.1-0.8,1.4-1.1
    c0.3-0.3-0.3-1.3-0.6-1.2c-0.4,0-1.7-0.4-1.8-1.2c-0.1-0.8-0.6-1-1.1-0.9c-0.1-0.3,0-0.5,0.3-0.7c0,0,0,0-0.1,0
    c0-1.6-0.7-2.4-1.1-3.1c-0.1-0.1-0.1-0.3-0.1-0.4c-0.8,0.2-2.3,1-3.6,2.7c-0.4,0.5-1,0.7-1.2,0.5c-0.2-0.2-1-0.1-1.7,0.3
    c-0.7,0.4-1.8,0.4-1.9,0.2c-0.6,0.1-3.3,0.4-3.7-0.9c-0.3-0.9,1.3-3.9,1.5-4.4c0.2-0.5-0.1-1.6,0.5-2.6c0.6-1,0.6-2.1,2.8-2.2
    c0.5,0,0.3-0.2,0.5-0.6c0.2-0.4,1.4-3,2-3.2c0.1-0.6-0.6-1.4,3.5-3.3c1-0.8,1.6-1.4,2.6-1.3c0.4-0.5,0.9-1.1,3.5-2
    c1.2-0.9,7.8-4.4,7.8-4.4c0.4,0.2,1-0.2,1.8-1.1c0.8-0.7,3.2-2.4,4.3-1.6c0.2,0.2-0.7,0.5,0,0.7c0.7,0.2,2.2,0.6,2.9-0.1
    c0.7-0.7,1.5-1.5,1.9-0.6c0.3,0.7,0.8,0.8,1.2,0.7c-0.1,0.4-0.2,0.7,0.5,0.6c0.3-0.2,0.5-0.5,0.7-0.1c0.6-0.1,1.1-0.4,1.7-1.6
    c0.7-0.3,0.8-0.3,0.9-0.6c0.1-0.2,0.8-0.8,1.3-0.9c0.3-0.1,0.1-0.5-0.1-0.5c-0.1,0-0.6,0.5-1,0.6c-0.5,0.1-1.2,0-1.2,0
    s-0.1-2,0.8-2c0.6,0.1,0.5-0.9,0.6-1.4c0.1-0.4,1.3-3.8,5.5-5.3c1.8-0.6,2.8-1.7,3-2.5c0.2-0.8,0.6-2.5,2.7-3.2
    c0.8-0.3,1-0.7,1.1-1.3c0.1-0.6,0.5-1.6,0.7-2.2c0.2-0.5,1.8-5.9,3.2-6.1c0.7-1.3,1.4-2.7,2-3.9c1.8-3.3,5.5-6.9,6.4-7
    c0.6-0.1,1.1-0.2,1.4-0.4c0.1-0.5,0.2-1.2,0.5-2.1C367.9,244.5,369.7,242.5,370.4,241.9z"/>
  <path class="st01" d="M254,274.6c0.4,0.3,0.5,0.1,1-0.5c1-1.6-0.1-2.1-0.5-2l-0.3-0.1c0,0,1.3-3.8,1.6-5.2c0.4-1.4-1-1.6-1.4-1
    c0,0-0.3-1.3-0.3-2c-0.7-0.7-1.6,0.8-1.5,1c0.1,0.3,0.1,0.6-0.1,0.9c-0.2,0.2-0.1,0.6-0.2,0.9c-0.1,0.3-0.3,0.3-0.5,0
    c-0.1-1.7-0.3-1.9-0.8-1.9c0-0.3-0.5-0.7-1-1.1c-0.2-1.6-1.4-1.2-1.9-0.6l-0.8-0.2c0,0-0.2,0.5-0.5,1.1c0,0.3-0.1,0.8-0.5,1
    c-0.4,0.2-0.3,0.8-0.1,1.2c-0.7,0.1-1-0.5-1.3-0.9c-0.6,0.1-0.9,0.1-1.5-0.5c-0.6-0.6-1,0.2-1.6,0.4c-0.5,0.2-1.9,1.3-2.2,1.7
    c-0.2-1.1-0.9-1-1.4-1.1c-0.1,0.3-0.5,0.6-0.7,0.8c-0.3,0.2-0.6,0.4-0.9,0.2c-0.3-0.2-0.8-0.7-1.4-0.5c-0.5,0.2-2.1,1.4-2.5,1.9
    c-0.4-0.7-1-0.3-1.3,0c-0.2,0.3-0.3,0.3-0.8,0.1c-1.7-0.6-1.4,2-1.4,2l0.6,0.7c0,0,0.5,0,1-0.1c0.4-0.4,1.1,0,1.6,0.4
    c0.6-0.5,1.3-0.3,3,0.1c2-0.4,3.3-0.3,4-0.2c0.8-0.2,1.2,0.2,1.7-0.1c0.5,0.6,2.5,0.8,2.5,0.8l-0.1-0.3l1.1,0l0.6,0.6
    c0,0,1.2,0.3,2.2,0.4c0,0,0.1,0.1,0.4,0.5c0.8-0.1,1.2,0.1,1.6,0.3c0.4,0.3,0.5,0.3,0.7,0.1c0.2-0.2,1.4-0.2,2.1-0.1
    C252.7,273.3,253.6,274.3,254,274.6z"/>
  <path class="st01" d="M228.2,268.6c0.4-0.1-0.9,0.3-1-0.2c0-0.1,0-0.5-0.4-0.3c-1,0.2-1,0.9-1,1.4c-0.5,0.3-0.6,1.4-0.2,2
    c0.4-0.8,1.2-0.2,1.9,0.1c0.7,0.3,0.8-0.5,1.1-1c0.3-0.5,0.1-1,0.1-1.3C228.7,268.9,228.7,268.5,228.2,268.6z"/>
  <path class="st01" d="M213.9,264.2c0.1,0.7,0.5,1.9,2.1,2.7c1,0.4,1.1,1.2,1.2,1.5c0.5,0,0.7,0,0.8-0.1c0.3-0.5,0.2-0.9,0.1-1.4
    c0.2-0.5,0.8-0.6,1.4-0.3C219.2,266,218.1,263.2,213.9,264.2z"/>
  <polygon class="st01" points="180.1,236.5 178.5,238 178.5,238.8 179.9,239.1 182.5,238.6 184.4,237.3 184.3,236.5 181.9,236.1   "/>
  <path class="st01" d="M101.4,44.9c-15.3,22.9-41.8,62.5-46.8,69.6c-6.2,8.7-18.4,22.3-22.1,25.6l-0.4,0.3l0,0.5
    c-0.1,11.2-4.1,74.1,4.2,76.8l0.1,2l2-0.1l-0.1-2c-2.2-42.7-3.6-68.4-4.1-76.4c4-3.8,15.6-16.8,22-25.6
    c5.1-7.2,31.5-46.7,46.9-69.7l0.5-0.7l-1.7-1.1L101.4,44.9z"/>
  <path class="st01" d="M367.8,233.7l-0.6-0.2c-0.2,0-3.8-1.1-9.4,1.2l-0.2,0.1l-0.2,0.2c-1.9,2.3-2.7,2.5-3.3,2.7
    c-0.1,0-0.2,0.1-0.3,0.1l-0.2,0.1l-0.2,0.2c-0.7,0.7-1.7,1.6-2.8,2.5c-1.9,1.6-3.1,2.6-3.4,3.3c-0.1,0.2-0.2,0.4-0.3,0.7
    c-0.1,0.3-0.4,1.1-0.6,1.4c-1-0.7-4.5-2.6-6.6-1.6c-0.5,0.2-1.3,0.9-1.3,2.4c0,0.1-0.1,0.3-0.2,0.3c-0.1,0.1-0.3,0-0.5,0
    c-1.1-0.6-3.1-0.7-4.1-0.3c0,0-0.1,0-0.2,0c-0.2-0.1-0.4-0.3-0.5-0.7c-0.5-1.2-0.9-2.1-2.2-2.6c-0.3-0.1-0.6-0.4-0.7-1.4
    c-0.1-0.8-0.8-1.4-1.9-1.8c-0.4-0.1-1.9-0.5-2.6,0.4c-0.4,0.4-0.4,1-0.1,1.6c0.2,0.5,0.3,0.8,0.4,1.1c0,0,0,0,0,0
    c-1.6-0.2-4.4-1.2-4.8-2.2l-0.1-0.3l-0.3-0.2c-1.5-0.9-5.6-2.7-8.3-2.5c-0.6,0.1-1.4,0.1-2.3,0.1c-3.4,0.1-6.1,0.3-7.4,1.2
    c-1.2-0.1-4.2-0.4-6.1,0.6c0,0,0,0,0-0.1c0-0.2-0.1-0.4-0.2-0.6c-0.5-0.8-1.6-0.9-1.9-1c-0.6-0.1-3.4-1.2-3.8-2.4l-0.1-0.4
    l-0.4-0.2c-1.7-0.9-2.7-1.6-3.1-2.9l-0.2-0.5l-0.6-0.1c-1.7-0.4-2.7-1.2-3.3-2.9l-0.2-0.4l-0.4-0.2c-1.2-0.4-2.3-1.8-2.3-4l0-0.7
    l-0.6-0.3c-1.4-0.6-2.6-1.9-2.9-2.3c-0.1-0.3-0.3-1-0.1-1.5c0.6-1.4-0.4-3.9-1-5l-24.6-80.7c-0.1-0.3-0.3-0.7-0.7-0.9l-0.9,1.8
    c-0.1,0-0.3-0.2-0.3-0.5l0,0.1l24.6,81l0.1,0.1c0.6,1.4,1.1,3,1,3.4c-0.7,1.5,0,3.1,0.1,3.2l0.1,0.2c0.1,0.1,1.4,1.7,3.2,2.7
    c0.2,2.3,1.4,4.2,3.2,5.1c0.8,1.9,2.1,3.1,4,3.6c0.7,1.6,2.1,2.5,3.5,3.3c1,2.1,4.4,3.3,5.3,3.4c0.2,0,0.3,0.1,0.4,0.1
    c0.1,0.4,0.5,1.1,1.1,1.5c0.3,0.2,0.8,0.3,1.5,0l0.2-0.1c1.4-0.8,4.2-0.7,5.5-0.4l0.6,0.1l0.4-0.5c0.6-0.7,4.6-0.9,6.3-0.9
    c1,0,1.8-0.1,2.4-0.1c1.9-0.2,5.1,1,6.9,2.1c1.3,2.1,5.3,2.9,6.3,3c1.1,0.1,1.7-0.4,1.9-0.7c0.5-0.7,0.4-1.6,0.1-2.4
    c0.2,0.1,0.4,0.1,0.5,0.2c0.2,1.5,0.9,2.5,2,2.9c0.5,0.2,0.7,0.4,1.1,1.5c0.3,0.8,0.9,1.5,1.6,1.8c0.6,0.2,1.2,0.3,1.8,0
    c0.4-0.2,1.8-0.1,2.5,0.2c0.4,0.2,0.8,0.3,1.2,0.3c0.4,0,0.7-0.1,1.1-0.3c0.7-0.3,1.1-1,1.2-1.8l0-0.1c0-0.6,0.2-0.6,0.2-0.7
    c0.9-0.4,3.6,0.8,4.7,1.6c0.5,0.3,1,0.5,1.5,0.3c1.1-0.3,1.6-1.7,2-2.8c0.1-0.2,0.2-0.4,0.2-0.5c0.2-0.4,1.8-1.7,2.9-2.6
    c1-0.8,2-1.7,2.7-2.4c1-0.3,2.2-0.8,4.2-3.2c3.5-1.4,6.1-1.3,7.2-1.2l0.7,5.8l2.2,1c-0.3,0.3-0.5,0.5-0.6,0.7l1.5,1.3
    c0.3-0.4,1.2-1.3,1.5-1.6l1-1l-3.7-1.7L367.8,233.7z"/>
</g>
<g id="one" class="pop">
  <g>
    <path class="st11111" d="M176.8,66c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5c-2.7,0-5,2.2-5,5C171.8,63.8,174,66,176.8,66z M188.1,72.3
      c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2s2-0.9,2-2V73.9h0.8v44.6c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3
      V94.1h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3V73.9h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L188.1,72.3z"/>
  </g>
</g>
<g id="two" class="pop">
  <g>
    <path class="st11111" d="M211.6,94c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5c-2.7,0-5,2.2-5,5C206.6,91.8,208.8,94,211.6,94z M222.9,100.3
      c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2s2-0.9,2-2v-16.7h0.8v44.6c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3
      v-24.4h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L222.9,100.3z"/>
  </g>
</g>
<g id="three" class="pop">
  <g>
    <path class="st11111" d="M204.6,173.8c2.7,0,5-2.2,5-5s-2.2-5-5-5c-2.7,0-5,2.2-5,5S201.8,173.8,204.6,173.8z M215.9,180.2
      c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2s2-0.9,2-2v-16.7h0.8v44.6c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3
      v-24.4h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L215.9,180.2z"/>
  </g>
</g>
<g id="four" class="pop">
  <g>
    <path class="st11111" d="M273.3,192.4c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5c-2.7,0-5,2.2-5,5C268.3,190.2,270.5,192.4,273.3,192.4z
       M284.6,198.8c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5V217c0,1.1,0.9,2,2,2s2-0.9,2-2v-16.7h0.8V245c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3v-24.4h1.6V245c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8V217c0,1.1,0.9,2,2,2s2-0.9,2-2L284.6,198.8z"/>
  </g>
</g>
<g id="five" class="pop">
  <g>
    <path class="st11111" d="M122,155.2c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5c-2.7,0-5,2.2-5,5C117,153,119.2,155.2,122,155.2z M133.3,161.5
      c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2v-16.7h0.8v44.6c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3v-24.4h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L133.3,161.5z"
      />
  </g>
</g>
<g id="six" class="pop">
  <g>
    <path class="st11111" d="M283.4,268.8c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5c-2.7,0-5,2.2-5,5C278.5,266.6,280.7,268.8,283.4,268.8z
       M294.8,275.2c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2v-16.7h0.8v44.6
      c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3V297h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2s2-0.9,2-2
      L294.8,275.2z"/>
  </g>
</g>
<g id="seven" class="pop">
  <g>
    <path class="st11111" d="M341.8,211.6c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5c-2.7,0-5,2.2-5,5C336.9,209.3,339.1,211.6,341.8,211.6z
       M353.2,217.9c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2s2-0.9,2-2v-16.7h0.8v44.6c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3v-24.4h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L353.2,217.9z"
      />
  </g>
</g>
<g id="eight" class="pop">
  <g>
    <path class="st11111" d="M304,205.4c2.7,0,5-2.2,5-5s-2.2-5-5-5s-5,2.2-5,5S301.2,205.4,304,205.4z M315.3,211.7c0-2.5-2-4.5-4.5-4.5
      h-13.9c-2.5,0-4.5,2-4.5,4.5V230c0,1.1,0.9,2,2,2s2-0.9,2-2v-16.7h0.8v44.6c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-24.4h1.6v24.4
      c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2s2-0.9,2-2L315.3,211.7z"/>
  </g>
</g>
<g id="nine" class="pop">
  <g>
    <path class="st11111" d="M167.5,146.2c2.7,0,5-2.2,5-5s-2.2-5-5-5c-2.7,0-5,2.2-5,5S164.7,146.2,167.5,146.2z M178.8,152.6
      c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2s2-0.9,2-2v-16.7h0.8v44.6c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3
      v-24.4h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2s2-0.9,2-2L178.8,152.6z"/>
  </g>
</g>
<g id="ten" class="pop">
  <g>
    <path class="st11111" d="M239.8,199.7c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5s-5,2.2-5,5C234.8,197.5,237.1,199.7,239.8,199.7z M251.1,206.1
      c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2v-16.7h0.8v44.6c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3v-24.4h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L251.1,206.1z"
      />
  </g>
</g>
<g id="eleven" class="pop">
  <g>
    <path class="st11111" d="M50.2,151.5c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5s-5,2.2-5,5C45.2,149.3,47.5,151.5,50.2,151.5z M61.5,157.9
      c0-2.5-2-4.5-4.5-4.5H43.1c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2v-16.7h0.8V204c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3v-24.4h1.6V204c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2s2-0.9,2-2L61.5,157.9z"/>
  </g>
</g>
<g id="twelve" class="pop">
  <g>
    <path class="st11111" d="M90,173.8c2.7,0,5-2.2,5-5s-2.2-5-5-5c-2.7,0-5,2.2-5,5S87.3,173.8,90,173.8z M101.3,180.2
      c0-2.5-2-4.5-4.5-4.5H82.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2v-16.7h0.8v44.6c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3v-24.4h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L101.3,180.2z"
      />
  </g>
</g>
<g id="thirteen" class="pop">
  <g>
    <path class="st11111" d="M78.5,96.5c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5c-2.7,0-5,2.2-5,5C73.6,94.2,75.8,96.5,78.5,96.5z M89.8,102.8
      c0-2.5-2-4.5-4.5-4.5H71.4c-2.5,0-4.5,2-4.5,4.5V121c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2v-16.7h0.8V149c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3v-24.4h1.6V149c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8V121c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L89.8,102.8z"/>
  </g>
</g>
<g id="fourteen" class="pop">
  <g>
    <path class="st11111" d="M143.2,81.8c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5s-5,2.2-5,5C138.3,79.5,140.5,81.8,143.2,81.8z M154.5,88.1
      c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2V89.7h0.8v44.6c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3v-24.4h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3V89.7h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L154.5,88.1z"/>
  </g>
</g>
<g id="fifteen" class="pop">
  <g>
    <path class="st11111" d="M244.7,125.9c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5c-2.7,0-5,2.2-5,5C239.8,123.7,242,125.9,244.7,125.9z
       M256,132.3c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2s2-0.9,2-2v-16.7h0.8v44.6c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3v-24.4h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3v-44.6h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L256,132.3z"/>
  </g>
</g>
<g id="sixteen" class="pop">
  <g>
    <path class="st11111" d="M108.7,67c2.7,0,5-2.2,5-5c0-2.7-2.2-5-5-5c-2.7,0-5,2.2-5,5C103.8,64.7,106,67,108.7,67z M120.1,73.3
      c0-2.5-2-4.5-4.5-4.5h-13.9c-2.5,0-4.5,2-4.5,4.5v18.2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2V74.9h0.8v44.6c0,1.7,1.3,3,3,3
      c1.6,0,3-1.3,3-3V95.1h1.6v24.4c0,1.7,1.3,3,3,3c1.6,0,3-1.3,3-3V74.9h0.8v16.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2L120.1,73.3z"/>
  </g>
</g>
</svg>
            </div>
        </div>
    </section>

    <section class="half-half">
        <h2 class="hidden">Ontario needs organ donors</h2>
        <div class="row expanded collapse">
            <div class="red-bg small-12 large-6 column">
                <h3>Ontario needs <span>organ donors</span></h3>
            </div>

            <div class="white-bg small-12 large-6 column crcl">

            <svg class="large-12 medium-12 end column" version="1.1" id="circleGraph1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 130.7 122.8" style="enable-background:new 0 0 130.7 122.8;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:none;stroke:#ED1C24;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;opacity: 0;}
                .st1{fill:none;stroke:#42D4B6;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;opacity: 0;}
            </style>
            <path id="outer1" class="st0" d="M64.2,11.1c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50c0-26.8,21.1-48.7,47.6-49.9"/>
            <path id="inner1" class="st1" d="M63.9,20.1c23.2,0,42,18.8,42,42s-18.8,42-42,42s-42-18.8-42-42c0-22.5,17.6-40.8,39.8-42"/>
            </svg>
                <div id="text-content" class="text-center float-center">
                <p><span id="firstCircleContent"></span><span id="secondCircleContent"><span></p>
            	</div>

            </div>
        </div>
    </section>

     <section class="grey-container donor-card">
        <h2 class="hidden">Donor Cards</h2>
        <div class="row expanded collapse">
            <h3 class="small-5 column">Did you know <br><span>that donor cards are no<br> longer used <br>in Ontario?</span></h3>
            <img class="small-7 column" src="images/donor_card.png" alt="">
        </div>

        <h5>The good news?</h5>
        <p>Registering has never been so easy.<br> Anyone over the age of 16 can register.<br> Registering takes 2 minutes. (Yes, we timed it!)<br> You can register online, or in person at a ServiceOntario centre.</p>
    </section>

    <section class="anatomy row expanded collapse">
        <h2 class="hidden">Anatomical Interaction</h2>
        <div>
            <h3 class="text-left column">ask me about my <span id="organ">heart</span></h3>
            <p class="float-left text-left small-3 small-push-1 column" id="info">Hearts donated for heart valves repair birth defects in children and others.</p>
        </div>
        <div class="text-center column">
            <svg version="1.1" id="anatomyguy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 612 792" style="enable-background:new 0 0 612 792;" xml:space="preserve">
  <style type="text/css">
    .st00{fill:#FFCF8B;stroke:#EAA468;stroke-width:3;stroke-miterlimit:10;}
    .st11{fill:none;stroke:#EAA468;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    .st2{fill:none;stroke:#EAA468;stroke-linecap:round;stroke-miterlimit:10;}
    .st3{fill:#EAA468;}
    .st4{fill:none;stroke:#815A36;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    .st5{clip-path:url(#SVGID_2_);}
    .st6{clip-path:url(#SVGID_4_);fill:#F1F2F2;}
    .st7{clip-path:url(#SVGID_4_);fill:none;stroke:#E6E7E8;stroke-width:3;stroke-miterlimit:10;}
    .st8{clip-path:url(#SVGID_6_);}
    .st9{clip-path:url(#SVGID_8_);fill:#F9B08C;}
    .st110{clip-path:url(#SVGID_8_);fill:none;stroke:#F5A47C;stroke-width:3;stroke-miterlimit:10;}
    .st111{clip-path:url(#SVGID_10_);fill:#DA7357;}
    .st112{clip-path:url(#SVGID_10_);fill:none;stroke:#E66859;stroke-width:3;stroke-miterlimit:10;}
    .st113{clip-path:url(#SVGID_10_);fill:#EE8C63;}
    .st114{clip-path:url(#SVGID_10_);fill:#EE8C62;}
    .st115{clip-path:url(#SVGID_10_);fill:none;stroke:#E66859;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    .st116{clip-path:url(#SVGID_12_);}
    .st117{clip-path:url(#SVGID_14_);fill:#802318;}
    .st118{clip-path:url(#SVGID_14_);fill:none;stroke:#7B2016;stroke-width:3;stroke-miterlimit:10;}
    .st119{clip-path:url(#SVGID_16_);fill:#902A1D;}
    .st20{clip-path:url(#SVGID_16_);fill:none;stroke:#7B2016;stroke-width:3;stroke-miterlimit:10;}
    .st21{clip-path:url(#SVGID_18_);}
    .st22{clip-path:url(#SVGID_20_);fill:#F6CF5E;}
    .st23{clip-path:url(#SVGID_20_);fill:none;stroke:#E6B632;stroke-width:3;stroke-miterlimit:10;}
    .st24{clip-path:url(#SVGID_20_);fill:none;stroke:#E6B632;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    .st25{clip-path:url(#SVGID_22_);}
    .st26{clip-path:url(#SVGID_24_);fill:#E52248;}
    .st27{clip-path:url(#SVGID_24_);fill:none;stroke:#DA1C5C;stroke-width:3;stroke-miterlimit:10;}
    .st28{clip-path:url(#SVGID_24_);fill:#0072A0;}
    .st29{clip-path:url(#SVGID_24_);fill:none;stroke:#0B688C;stroke-width:3;stroke-miterlimit:10;}
    .st30{clip-path:url(#SVGID_24_);fill:#924724;}
    .st31{clip-path:url(#SVGID_24_);fill:none;stroke:#7F4023;stroke-width:3;stroke-miterlimit:10;}
    .st32{clip-path:url(#SVGID_24_);fill:none;stroke:#7F4023;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    .st33{clip-path:url(#SVGID_26_);}
    .st34{clip-path:url(#SVGID_28_);fill:#862C5D;}
    .st35{clip-path:url(#SVGID_28_);fill:none;stroke:#5E204C;stroke-width:3;stroke-miterlimit:10;}
    .st36{clip-path:url(#SVGID_30_);fill:none;stroke:#2A3582;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;}
    .st37{clip-path:url(#SVGID_30_);fill:none;stroke:#DE2E2D;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;}
    .st38{clip-path:url(#SVGID_32_);fill:#A3466E;}
    .st39{clip-path:url(#SVGID_32_);fill:none;stroke:#5E204C;stroke-width:3;stroke-miterlimit:10;}
    .st40{clip-path:url(#SVGID_34_);}
    .st41{clip-path:url(#SVGID_36_);fill:#F37365;}
    .st42{clip-path:url(#SVGID_36_);fill:none;stroke:#C64C54;stroke-width:3;stroke-miterlimit:10;}
    .st43{clip-path:url(#SVGID_36_);fill:#DA897A;}
    .st44{clip-path:url(#SVGID_36_);fill:#DE6C6F;}
    .st45{clip-path:url(#SVGID_36_);fill:#E97B7E;}
    .st46{clip-path:url(#SVGID_36_);fill:#F6988E;}
    .st47{clip-path:url(#SVGID_36_);fill:none;stroke:#DE5A57;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    .st48{clip-path:url(#SVGID_38_);}
    .st49{clip-path:url(#SVGID_40_);fill:#F37578;}
    .st50{clip-path:url(#SVGID_40_);fill:none;stroke:#A21E23;stroke-width:3;stroke-miterlimit:10;}
    .st51{clip-path:url(#SVGID_40_);fill:#A21E23;}
    .st52{clip-path:url(#SVGID_42_);fill:#D51E46;}
    .st53{clip-path:url(#SVGID_42_);fill:none;stroke:#A21E23;stroke-width:3;stroke-miterlimit:10;}
    .st54{clip-path:url(#SVGID_44_);fill:#BE1F48;}
    .st55{clip-path:url(#SVGID_44_);fill:none;stroke:#A21E23;stroke-width:3;stroke-miterlimit:10;}
    .st56{clip-path:url(#SVGID_44_);fill:none;stroke:#4A52A3;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    .st57{clip-path:url(#SVGID_44_);fill:#A21E24;}
    .st58{clip-path:url(#SVGID_46_);fill:#E73A45;}
    .st59{clip-path:url(#SVGID_46_);fill:none;stroke:#A21E23;stroke-width:3;stroke-miterlimit:10;}
    .st60{clip-path:url(#SVGID_48_);fill:none;stroke:#4A52A3;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    .st61{fill:#FFFFFF;stroke:#333333;stroke-miterlimit:10;}
    .st62{fill:url(#SVGID_49_);stroke:#333333;stroke-miterlimit:10;}
    .st63{display:none;fill:url(#SVGID_50_);stroke:#333333;stroke-miterlimit:10;}
    .st64{fill:#333333;}
    .st65{opacity:0.51;}
    .st66{fill:#1A1A1A;stroke:#333333;stroke-miterlimit:10;}
    .st67{fill:none;stroke:#333333;stroke-linecap:round;stroke-miterlimit:10;}
    .st68{display:none;stroke:#333333;stroke-miterlimit:10;}
  </style>
  <g id="body">
    <path class="st00" d="M533,781.6l-4.7-55.7c0-0.3,0.2-0.7,0.5-0.8l3.1-1.3c0.4-0.2,0.8,0.1,0.8,0.5l4.1,49.2c0,0,0.8,2.9,4.3,2.8
      s3.8-4.2,3.8-4.2l-4.4-51.3c0-0.6,0.3-1.1,0.8-1.3l0.8-0.3c0.5-0.2,1.1,0,1.5,0.3c1.7,1.6,5.9,6.5,5.9,13.9
      c0,9.2,6.7,13.2,6.7,13.2c12.4,4.3,9.9-1.8,9.9-1.8s-4.6-5.6-7.9-29.7s-27-49.2-27-49.2c-0.9-5.2-7.7-33.4-7.7-33.4
      C504.8,505.2,476.9,467,476.9,467c-0.6-33-12.1-80.2-12.1-80.2s2.7-62.3,0.6-83.8c0,0-1.2-19.4-13.5-34.3s-101.3-46.3-107.5-73
      c-6.2-26.7-4.6-32.1-4.6-32.1s27.4-30.2,28-52.6c0.3-10.4,3.1-18.5,2.9-26.5c-0.4-16-8.4-33.9-18.1-46.7
      c-6.9-9.1-16.6-17.5-29.6-20.2c-15.7-3.3-33.1-3-48.1,0.7c-19.6,4.8-35.3,19.4-41.8,38.5c-2.7,7.8-5.6,17.8-7.2,27.8
      c-0.2,1,0.1,2,0.6,2.9c0.5,0.8,1.1,1.7,1.7,2.5c0.6,0.8,0.9,1.7,0.8,2.6c-0.1,1.4-0.1,3.3-0.1,3.3c-0.1,1.2-0.4,2-0.9,2.7
      c-3.2,3.9-14.7,18.3-16.6,22.5c-2.2,4.8-2.2,5.9-0.1,7.7c1.8,1.5,9.7,5.5,12.1,6.7c0.4,0.2,0.7,0.7,0.6,1.1l-0.1,1.8
      c-0.1,0.9-0.5,1.7-1.1,2.3c-1.8,1.6-5,6.3-0.8,7l12.4,3.5c0,0-18.5-5.5-12.9,6.2c0,0,2.8,3.2,5.9,4.1s-1.1,5.5-1.1,5.5
      s-11.7,12.2,4.4,18.5c15.2,6,25.3-4.1,38.9,15.6c1.8,2.6,2.8,5.8,2.8,9v4.9c0,1-0.6,1.9-1.5,2.2c-12.9,5.3-103.6,43.5-108.8,48.5
      c-4,3.8-13.6,13.3-15.7,34.8s0.6,83.8,0.6,83.8s-11.5,47.2-12.1,80.2c0,0-27.9,38.2-46.8,165.7c0,0-6.7,28.1-7.7,33.4
      c0,0-23.7,25.1-27,49.2s-7.9,29.7-7.9,29.7s-2.5,6.1,9.9,1.8c0,0,6.7-4,6.7-13.2c0-7,3.8-11.7,5.6-13.6c0.6-0.6,1.4-0.8,2.2-0.5
      l0.2,0.1c0.7,0.2,1.1,0.9,1,1.5L67,769.8c0,0,0.3,4,3.8,4.2c3.5,0.1,4.3-2.8,4.3-2.8l4.1-48.6c0.1-0.7,0.8-1.2,1.4-0.9l2.2,0.9
      c0.6,0.2,0.9,0.8,0.9,1.4l-4.7,55.3c0,0-0.6,3.3,3.3,3.9c3.9,0.6,4.9-3.3,4.9-3.3l4.4-52.1c0.1-0.6,0.7-1,1.3-0.8l2.1,0.9
      c0.7,0.3,1.1,1,1.1,1.8l-3.4,41.5c0,0-0.4,4,3.2,4.5c3.6,0.4,4.9-3.1,4.9-3.1l3.2-39.6c0.1-0.6,0.7-1,1.3-0.8l0.8,0.3
      c0.9,0.4,1.5,1.4,1.4,2.4l-2.4,28.3c0,0,0.4,3.3,3.3,4c2.9,0.7,5-3.1,5-3.1l2.5-32.5c0,0,7.2-9.2,0.7-35.7c-6.6-26.5,7.7-67,7.7-67
      s32-78.8,44.6-90.8s23.6-66.9,23.6-66.9s4.9-29.1,10.4-29.1c0,0,14.5,22.5,6.6,63.2c-0.9,4.9-1.8,20.2-1.9,25.1l-3.4,22.3
      c0,4.5-0.5,9-1.5,13.4c-5.3,25.1-23.8,117.8-22.4,184.4l121,0c0,0,6-55.5,4.4-65.1h8.6c0,0,1.3,56.1,3.1,65.1h119.9
      c0,0-1.4-119-18.1-170.1c-2.7-8.2-4.5-16.8-5.5-25.4l-10.2-82.3c0,0,1.5-33.4,4.1-36c2.6-2.6,11.8,36.8,11.8,36.8
      s11,54.9,23.6,66.9c12.6,12.1,44.6,90.8,44.6,90.8s14.2,40.5,7.7,67c-4.9,19.7-2.1,29.9-0.4,33.8c0.8,1.7,1.2,3.5,1.3,5.4l2.2,29.1
      c0,0,2.1,3.8,5,3.1c2.9-0.7,3.3-4,3.3-4l-2.4-28.9c-0.1-0.6,0.3-1.2,0.9-1.5l1.2-0.5c0.7-0.3,1.4,0.2,1.5,0.9l3.2,39.4
      c0,0,1.3,3.5,4.9,3.1c3.6-0.4,3.2-4.5,3.2-4.5l-3.4-41.7c-0.1-0.6,0.3-1.2,0.9-1.5l1.9-0.8c0.8-0.3,1.6,0.2,1.7,1l4.3,51.7"/>
    <path class="st11" d="M415.9,339.7c0,0-2.8,84.7-8,95.4"/>
    <path class="st11" d="M195,342.2c0,0,3.4,88.9,8.8,100"/>
  </g>
  <g id="face" class="the-organs">
    <path class="st2" d="M225.5,132.3c0,0-6.2-3.4-10.7-1.6"/>
    <g>
      <path class="st2" d="M308.5,151.3c0.5,2.7,0,5.6-0.9,8.2c-0.9,2.7-2.4,5.1-4.2,7.3c-3.6,4.4-8.4,7.6-13.4,10c-5,2.4-10.4,4-15.7,5
        c-5.4,1-10.8,1.6-16.3,1.6c5.3-1.2,10.6-2.4,15.8-3.8c2.6-0.7,5.1-1.5,7.6-2.4c1.3-0.4,2.5-0.9,3.7-1.4c1.2-0.5,2.5-1,3.6-1.6
        c2.4-1.1,4.7-2.4,6.9-3.9c2.2-1.4,4.2-3.1,6-5c1.8-1.9,3.4-4,4.6-6.3C307.5,156.6,308.3,154,308.5,151.3z"/>
    </g>
    <path class="black" d="M234.6,80.2c0,0,2.9-3.1,21.5,5.1"/>
    <path class="st11" d="M307.5,104.6c0,0,4.9-15.9,16.2-12.7c11.3,3.2,10,17.7,7.7,21c-1.9,2.6-10.8,13-14.1,16.7
      c-1.1,1.3-2.8,2.1-4.5,2c-1.1-0.1-2.3-0.5-3.2-1.8"/>
  </g>
  <g id="bone" class="the-organs">
    <g>
      <g>
        <defs>

            <rect id="SVGID_1_" x="91.3" y="281.4" transform="matrix(0.2513 -0.9679 0.9679 0.2513 -212.7566 438.5158)" width="171.7" height="150.9"/>
        </defs>
        <clippath id="SVGID_2_">
          <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
        </clippath>
        <g class="st5">
          <defs>

              <rect id="SVGID_3_" x="91.3" y="281.4" transform="matrix(0.2513 -0.9679 0.9679 0.2513 -212.7566 438.5158)" width="171.7" height="150.9"/>
          </defs>
          <clippath id="SVGID_4_">
            <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
          </clippath>
          <path class="st6" d="M181.5,410.2c0.1-16.8,0.7-70.8,4.7-95.8c3-1.1,5.7-3.5,7.3-6.9c3.1-6.6,1-14.5-4.7-17.6
            c-3-1.6-6.3-1.6-9.3-0.3c-0.2-0.1-0.5-0.3-0.7-0.4c-6-3.3-13.5-0.3-16.8,6.7c-3.2,6.7-1.2,14.6,4.3,18.1
            c-0.7,19.5-2.7,74.2-5.6,96.5c-4.3,1.2-7.9,4.9-9.2,9.9c-1.9,7.1,1.7,14.3,8,15.9c3.3,0.8,6.6,0,9.3-1.9
            c0.3,0.1,0.5,0.2,0.8,0.2c6.6,1.7,13.5-3,15.4-10.4C186.3,418.7,184.9,413.4,181.5,410.2"/>
          <path class="st7" d="M181.5,410.2c0.1-16.8,0.7-70.8,4.7-95.8c3-1.1,5.7-3.5,7.3-6.9c3.1-6.6,1-14.5-4.7-17.6
            c-3-1.6-6.3-1.6-9.3-0.3c-0.2-0.1-0.5-0.3-0.7-0.4c-6-3.3-13.5-0.3-16.8,6.7c-3.2,6.7-1.2,14.6,4.3,18.1
            c-0.7,19.5-2.7,74.2-5.6,96.5c-4.3,1.2-7.9,4.9-9.2,9.9c-1.9,7.1,1.7,14.3,8,15.9c3.3,0.8,6.6,0,9.3-1.9
            c0.3,0.1,0.5,0.2,0.8,0.2c6.6,1.7,13.5-3,15.4-10.4C186.3,418.7,184.9,413.4,181.5,410.2z"/>
          <path class="st6" d="M165.9,410.2c0,0,3.4,0.6,4.7,2.9"/>
          <path class="st7" d="M165.9,410.2c0,0,3.4,0.6,4.7,2.9"/>
          <path class="st6" d="M168.8,434.2c0,0,7.3-5.7,4.4-13.8"/>
          <path class="st7" d="M168.8,434.2c0,0,7.3-5.7,4.4-13.8"/>
          <path class="st6" d="M166.9,314.6c0,0,6.8,4.8,14.5-2.4"/>
          <path class="st7" d="M166.9,314.6c0,0,6.8,4.8,14.5-2.4"/>
          <path class="st6" d="M185,299.2c0,0,0.3-5.6-3.5-6.4"/>
          <path class="st7" d="M185,299.2c0,0,0.3-5.6-3.5-6.4"/>
        </g>
      </g>
    </g>
  </g>
  <g id="intestines" class="the-organs">
    <g>
      <g>
        <defs>
          <rect id="SVGID_5_" x="165.8" y="434.6" width="277" height="277"/>
        </defs>
        <clippath id="SVGID_6_">
          <use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
        </clippath>
        <g class="st8">
          <defs>
            <rect id="SVGID_7_" x="228.1" y="480.3" width="161.4" height="161.4"/>
          </defs>
          <clippath id="SVGID_8_">
            <use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
          </clippath>
          <path class="st9" d="M340,525.6c-0.7,1.3-0.7,2.9-0.4,4.4c0.7,3.6,3.2,7.1,1.8,11c-1.6,4.3-7.3,8.4-11.9,8.1
            c-4.5-0.3-6.8-4.5-8-8.4c-1.1-3.4,1.7-11-2.3-12.8c-5-2.3-1.4-9.9,3.5-7.7c3.8,1.7,5.4,5.5,6.1,9.5c0.4,2.7-0.5,8.9,1.8,10.9
            c0,0,0.6,1,1.8,0.3c0.6-0.6,0.8-1.8,1.1-2.7c0.5-1.5-1.5-4.5-1.8-6.2c-0.4-1.9-1-4-0.7-5.9c0.2-1.9,1.3-3.6,2.3-5.2
            c2.1-3.7,5.8-6,10.1-4.9c4.4,1.2,4.9,5.2,5.4,9.1c0.3,2.9,1.1,4.2,3.3,6.1c1.1,1,2.1,2.8,3.5,1.7c2.3-1.7-0.4-3.7-1.4-5.2
            c0,0-1.4-1.8-2.4-3.5c-0.7-1.2-1.1-2.5-1.2-3.9l-0.3-2.7c-0.2-4.7,6.7-3.7,8.4,0.8c2,5.1,7.4,8.6,6,14.7
            c-1.2,4.8-5.5,8.9-10.6,8.6c-4.4-0.3-6.8-3.9-9-7.5C344.9,534.4,341.3,523.1,340,525.6"/>
          <path class="st110" d="M340,525.6c-0.7,1.3-0.7,2.9-0.4,4.4c0.7,3.6,3.2,7.1,1.8,11c-1.6,4.3-7.3,8.4-11.9,8.1
            c-4.5-0.3-6.8-4.5-8-8.4c-1.1-3.4,1.7-11-2.3-12.8c-5-2.3-1.4-9.9,3.5-7.7c3.8,1.7,5.4,5.5,6.1,9.5c0.4,2.7-0.5,8.9,1.8,10.9
            c0,0,0.6,1,1.8,0.3c0.6-0.6,0.8-1.8,1.1-2.7c0.5-1.5-1.5-4.5-1.8-6.2c-0.4-1.9-1-4-0.7-5.9c0.2-1.9,1.3-3.6,2.3-5.2
            c2.1-3.7,5.8-6,10.1-4.9c4.4,1.2,4.9,5.2,5.4,9.1c0.3,2.9,1.1,4.2,3.3,6.1c1.1,1,2.1,2.8,3.5,1.7c2.3-1.7-0.4-3.7-1.4-5.2
            c0,0-1.4-1.8-2.4-3.5c-0.7-1.2-1.1-2.5-1.2-3.9l-0.3-2.7c-0.2-4.7,6.7-3.7,8.4,0.8c2,5.1,7.4,8.6,6,14.7
            c-1.2,4.8-5.5,8.9-10.6,8.6c-4.4-0.3-6.8-3.9-9-7.5C344.9,534.4,341.3,523.1,340,525.6z"/>
          <path class="st9" d="M355.5,582c0.8-3.3,1.5-6.7,0.8-10c-0.6-3.1-2.3-4.9-4-7.4c-1.6-2.2-4.1-4.8-6.9-5.2
            c-3.4-0.4-6.3,0.5-9.3,2c-1.7,0.9-2.2,0.8-3.7,2c-1.2,1-2.7,2.5-3.1,4.1c-0.8,3.4-1.7,6.5-1.8,10c0,1.7-0.1,3.5,0.2,5.1
            c1.2,5.2-3.8,7.3-3.8,7.3c-2.5,0.2-5.2-0.8-7.2-2.1c0,0-4.8-0.7-13.2-9.9c-2-2.2-3.3-4.1-3.7-7.4c-0.4-3.6,1.5-6.8,1.6-10.3
            c0.1-2.8-1.3-4.4-2.4-6.9c-1.4-3.1-2.9-6.6-2.8-10c0.1-1.7,0.6-3.3,0.8-5c0.2-1.3,0-2.5,0-3.9c0-5.6,6.3-9.9,11.7-8.9
            c6.1,1.2,8.9,7.6,8.6,13.1c-0.1,2.1,0.2,2.3,1,4.2c4.7,12-0.7,22.5-0.7,22.5c-3.8,1.9-5.7-0.3-6-3.1c-0.1-1.8,0.8-3.5,0.4-5.3
            c-0.5-2-1.7-10.3-2.6-12.1c-1.4-3.1,0.6-7.6-1.5-10.1c-1.7-2.1-2.5-0.3-2.5-0.3c0,0.3,0,0.7,0.1,1c0.2,0.9,0.1,2,0.1,2.9
            c-0.4,4.3-1.6,7.6,0.5,11.7c0.8,1.7,2.2,2.9,2.9,4.6c0.7,1.6,0.9,3.3,0.9,5c0,3.6-2.9,8.6-0.8,11.6c0,0,9.4,12.5,10.5,0.3
            c0.5-5.7,2-11.6,7.1-14.8c5-3.2,10.6-5.8,16.6-5.9c10.9-0.2,20.1,10.6,21.5,20.9c0.8,6.2-0.3,11.6-3.4,17
            c-2.3,4.1-4.9,9.4-10,10.2c-5.2,0.8-6.3-3.7-6.6-8.2c-0.2-3.2-0.1-6.4-0.1-9.6c0-1.7-0.1-3.4-0.1-5.2c0-1-0.3-2.6-1-3.4
            c-1-1.2-2.5-0.6-2.9,0.5c-0.4,1.2-0.1,3.5,0,4.8c0.1,3.2,0.9,6.2,1.1,9.4c0.2,3.4-0.3,6.6-0.9,9.9c-0.3,2-0.5,4.2-1.5,6
            c-2.8,5-9,4.2-13.4,2.1c-1.3-0.6-2.2-1.6-3.3-2.4c-1.2-0.8-2.5-1.6-3.9-2.1c-1.8-0.6-2.2,1.6-2.2,1.6
            c-3.2,8.1-10.8,24.2-21.3,14.8c-2.1-1.8-3.1-4.1-3.1-6.9c0-3.3,1.6-5.7,2.6-8.8c1.5-4.6,3.7-11.5,0.6-15.9c-0.9-1.3-2-2.8-3.1-4
            c-0.9-1-0.9-1.2-2.2-0.9c-2.7,0.7-2.3,2.8-2.1,5c0.7,5.9,3.1,11.8,2.3,17.9c-0.7,5.5-2.9,11-8.4,13.1c-5.5,2.1-10.8-0.8-13.1-6
            c-1-2.4-1.5-5.3-0.7-7.9c0.7-2.3,1.6-3.9,2-6.2c0.2-1.4,0.6-3.1,0.5-4.5c-0.1-1.5-1.4-3.6-1.9-5c-0.7-1.8-0.9-4-2.3-5.2
            l-0.6,0.9c0.4,1.7,0.3,3.3,0.5,5c0.2,1.3,0.7,2.5,1,3.8c1.3,5.5-1.1,11.2-7.4,11.4c-5.4,0.2-10-3.8-11.7-8.7
            c-1-2.8-0.7-5.9-0.7-8.8c0-3.1-0.2-6.2-0.1-9.3c0.2-3,1.1-6.1,1.9-9c0.6-2.3,2-4.3,4.3-5.3c1.2-0.5,1.8-1.2,3-1.6
            c1.3-0.4,3.1-0.5,4.4-0.8c1.5-0.4,3-0.3,4.4,0.4c0.8,0.4,2.1,0.5,2.7,0.9c1.5,0.8,3,1.4,4.6,1.7c1.6,0.3,3.2,0.9,4.9,1.1
            c2.6,0.3,5.7,0.1,8.4,0c2.5-0.1,3.4-1,3.6-3.7c0.1-0.9-0.1-1.6-0.4-2.5l-1.6,0.2c-4.9,2.3-10.7,3.2-15.6,0.3
            c-1.4-0.8-2.5-2-3.6-3.1c-0.8-0.8-1.7-2.3-2.8-2.7c-2.5-0.9-4.4,1.6-5.9,3.1c-4.1,4-9,4-12.8-0.4c-3.7-4.3-3.7-10.8-0.8-15.6
            c2.9-4.9,8.7-5.2,13.6-6.6c5.8-1.6,12.3-0.6,17.2,2.6c2.4,1.6,7,5.2,8.3,2.4c0.7-1.5-1.1-2.4-1.1-2.4c-1.9-2.1-3.2-1.9-5.6-3.7
            c-1.9-1.4-4.9-2.1-7.2-2c-3.6,0.1-7.2,0.8-10.8,0.8c-2.7,0-5.7,0.4-8.3-0.3c-2.5-0.7-4.9-1.5-6.4-3.6c-1.8-2.6-1.2-4.8-1.3-7.7
            c-0.2-5.5,8.3-5.4,8.5,0c0.1,1.7-0.8,2.7,0.6,3.6c1,0.7,2.6,0.3,3.8,0.3c4.1-0.1,8.1-0.7,12.2-0.7c5.4-0.1,11.5-0.4,16.3,2.8
            c4.3,2.9,10.6,9.1,9,14.9c-1.7,6-8.8,7.1-14,6.4c-4-0.6-6.6-2.6-10.1-4.5c-2.4-1.3-6.5-1.4-9.1-0.5c-2.1,0.8-6.7,0.6-8.3,2.6
            c-0.7,0.9-1,2.7-0.9,3.8c0,0,0.6,2.5,1.6,1.7c0.7-0.6,1.2-1.3,1.9-1.8c1.2-1.1,2.5-2,4-2.6c2.4-0.9,5.4-1.1,7.9-0.5
            c3.5,0.9,5.1,3.9,7.6,6.1c2.3,1.9,5.4,1.5,7.9,0.3c3-1.4,5.7-2.7,9-1.3c2.4,1.1,4.1,3.4,5,5.9c1.8,4.8,0.5,9.2-3.5,12.6
            c-2.7,2.2-6.1,3.8-9.5,3.7c-3.2-0.1-6.4,1-9.5,0.3c-3.3-0.7-7.3-1-10.4-2.3c-0.8-0.3-1.4-0.7-2.1-1.2c-2.5-0.9-5.1,2.9-5.1,2.9
            c-0.3,1.5-1.1,3-1.3,4.6c-0.5,3.5,0,7.6,0,11.2c0,3.2-0.3,5.8,2.7,7.6c1.4,0.9,0.7-0.3,0.4-1.1c-0.7-1.5-0.4-3.3-0.5-5
            c-0.4-4.1-0.5-14.7,2.8-16.1c5.9-2.5,10.2,4.1,13.6,8.1c2.4,2.9,2.1,5.5,2.5,9.2c0.3,2.9,0.8,6.3,0.2,9.2
            c-0.6,2.6-1.8,5.2-1.3,7.7c0.6,3.2,3.2,2.9,4.5,0.3c3.1-6-0.4-13.8-1.2-20c-0.4-3.3-0.7-6.7,1.3-9.5c1.5-2.1,3.7-3.6,6.1-4.5
            c2.6-1,5.9-1.2,8.4,0.2c2.7,1.5,4.3,4.6,6.2,6.9c3.8,4.8,4.4,12.4,3,18.2c-0.9,3.6-2.7,7-3.8,10.5c0,0-2.9,6.3,2.2,1.3
            c2.2-2.2,3.4-5.2,4.5-8.1c1-2.6,1.8-5.6,3.4-7.8c4-5.7,11.6-1.3,15.9,1.5c1.4,0.9,2.1,1.8,3.7,2.3c0,0,2.2-0.1,2.9-5.7
            c0.8-6.6-3.4-17.2-0.3-23.6c2.9-6,11.8-6.7,16.3-2.1c2.4,2.5,2.8,5.5,2.8,8.8c0,3.8,0.2,7.5-0.3,11.2
            C352.1,586.6,353.7,589.5,355.5,582"/>
          <path class="st110" d="M355.5,582c0.8-3.3,1.5-6.7,0.8-10c-0.6-3.1-2.3-4.9-4-7.4c-1.6-2.2-4.1-4.8-6.9-5.2
            c-3.4-0.4-6.3,0.5-9.3,2c-1.7,0.9-2.2,0.8-3.7,2c-1.2,1-2.7,2.5-3.1,4.1c-0.8,3.4-1.7,6.5-1.8,10c0,1.7-0.1,3.5,0.2,5.1
            c1.2,5.2-3.8,7.3-3.8,7.3c-2.5,0.2-5.2-0.8-7.2-2.1c0,0-4.8-0.7-13.2-9.9c-2-2.2-3.3-4.1-3.7-7.4c-0.4-3.6,1.5-6.8,1.6-10.3
            c0.1-2.8-1.3-4.4-2.4-6.9c-1.4-3.1-2.9-6.6-2.8-10c0.1-1.7,0.6-3.3,0.8-5c0.2-1.3,0-2.5,0-3.9c0-5.6,6.3-9.9,11.7-8.9
            c6.1,1.2,8.9,7.6,8.6,13.1c-0.1,2.1,0.2,2.3,1,4.2c4.7,12-0.7,22.5-0.7,22.5c-3.8,1.9-5.7-0.3-6-3.1c-0.1-1.8,0.8-3.5,0.4-5.3
            c-0.5-2-1.7-10.3-2.6-12.1c-1.4-3.1,0.6-7.6-1.5-10.1c-1.7-2.1-2.5-0.3-2.5-0.3c0,0.3,0,0.7,0.1,1c0.2,0.9,0.1,2,0.1,2.9
            c-0.4,4.3-1.6,7.6,0.5,11.7c0.8,1.7,2.2,2.9,2.9,4.6c0.7,1.6,0.9,3.3,0.9,5c0,3.6-2.9,8.6-0.8,11.6c0,0,9.4,12.5,10.5,0.3
            c0.5-5.7,2-11.6,7.1-14.8c5-3.2,10.6-5.8,16.6-5.9c10.9-0.2,20.1,10.6,21.5,20.9c0.8,6.2-0.3,11.6-3.4,17
            c-2.3,4.1-4.9,9.4-10,10.2c-5.2,0.8-6.3-3.7-6.6-8.2c-0.2-3.2-0.1-6.4-0.1-9.6c0-1.7-0.1-3.4-0.1-5.2c0-1-0.3-2.6-1-3.4
            c-1-1.2-2.5-0.6-2.9,0.5c-0.4,1.2-0.1,3.5,0,4.8c0.1,3.2,0.9,6.2,1.1,9.4c0.2,3.4-0.3,6.6-0.9,9.9c-0.3,2-0.5,4.2-1.5,6
            c-2.8,5-9,4.2-13.4,2.1c-1.3-0.6-2.2-1.6-3.3-2.4c-1.2-0.8-2.5-1.6-3.9-2.1c-1.8-0.6-2.2,1.6-2.2,1.6
            c-3.2,8.1-10.8,24.2-21.3,14.8c-2.1-1.8-3.1-4.1-3.1-6.9c0-3.3,1.6-5.7,2.6-8.8c1.5-4.6,3.7-11.5,0.6-15.9c-0.9-1.3-2-2.8-3.1-4
            c-0.9-1-0.9-1.2-2.2-0.9c-2.7,0.7-2.3,2.8-2.1,5c0.7,5.9,3.1,11.8,2.3,17.9c-0.7,5.5-2.9,11-8.4,13.1c-5.5,2.1-10.8-0.8-13.1-6
            c-1-2.4-1.5-5.3-0.7-7.9c0.7-2.3,1.6-3.9,2-6.2c0.2-1.4,0.6-3.1,0.5-4.5c-0.1-1.5-1.4-3.6-1.9-5c-0.7-1.8-0.9-4-2.3-5.2
            l-0.6,0.9c0.4,1.7,0.3,3.3,0.5,5c0.2,1.3,0.7,2.5,1,3.8c1.3,5.5-1.1,11.2-7.4,11.4c-5.4,0.2-10-3.8-11.7-8.7
            c-1-2.8-0.7-5.9-0.7-8.8c0-3.1-0.2-6.2-0.1-9.3c0.2-3,1.1-6.1,1.9-9c0.6-2.3,2-4.3,4.3-5.3c1.2-0.5,1.8-1.2,3-1.6
            c1.3-0.4,3.1-0.5,4.4-0.8c1.5-0.4,3-0.3,4.4,0.4c0.8,0.4,2.1,0.5,2.7,0.9c1.5,0.8,3,1.4,4.6,1.7c1.6,0.3,3.2,0.9,4.9,1.1
            c2.6,0.3,5.7,0.1,8.4,0c2.5-0.1,3.4-1,3.6-3.7c0.1-0.9-0.1-1.6-0.4-2.5l-1.6,0.2c-4.9,2.3-10.7,3.2-15.6,0.3
            c-1.4-0.8-2.5-2-3.6-3.1c-0.8-0.8-1.7-2.3-2.8-2.7c-2.5-0.9-4.4,1.6-5.9,3.1c-4.1,4-9,4-12.8-0.4c-3.7-4.3-3.7-10.8-0.8-15.6
            c2.9-4.9,8.7-5.2,13.6-6.6c5.8-1.6,12.3-0.6,17.2,2.6c2.4,1.6,7,5.2,8.3,2.4c0.7-1.5-1.1-2.4-1.1-2.4c-1.9-2.1-3.2-1.9-5.6-3.7
            c-1.9-1.4-4.9-2.1-7.2-2c-3.6,0.1-7.2,0.8-10.8,0.8c-2.7,0-5.7,0.4-8.3-0.3c-2.5-0.7-4.9-1.5-6.4-3.6c-1.8-2.6-1.2-4.8-1.3-7.7
            c-0.2-5.5,8.3-5.4,8.5,0c0.1,1.7-0.8,2.7,0.6,3.6c1,0.7,2.6,0.3,3.8,0.3c4.1-0.1,8.1-0.7,12.2-0.7c5.4-0.1,11.5-0.4,16.3,2.8
            c4.3,2.9,10.6,9.1,9,14.9c-1.7,6-8.8,7.1-14,6.4c-4-0.6-6.6-2.6-10.1-4.5c-2.4-1.3-6.5-1.4-9.1-0.5c-2.1,0.8-6.7,0.6-8.3,2.6
            c-0.7,0.9-1,2.7-0.9,3.8c0,0,0.6,2.5,1.6,1.7c0.7-0.6,1.2-1.3,1.9-1.8c1.2-1.1,2.5-2,4-2.6c2.4-0.9,5.4-1.1,7.9-0.5
            c3.5,0.9,5.1,3.9,7.6,6.1c2.3,1.9,5.4,1.5,7.9,0.3c3-1.4,5.7-2.7,9-1.3c2.4,1.1,4.1,3.4,5,5.9c1.8,4.8,0.5,9.2-3.5,12.6
            c-2.7,2.2-6.1,3.8-9.5,3.7c-3.2-0.1-6.4,1-9.5,0.3c-3.3-0.7-7.3-1-10.4-2.3c-0.8-0.3-1.4-0.7-2.1-1.2c-2.5-0.9-5.1,2.9-5.1,2.9
            c-0.3,1.5-1.1,3-1.3,4.6c-0.5,3.5,0,7.6,0,11.2c0,3.2-0.3,5.8,2.7,7.6c1.4,0.9,0.7-0.3,0.4-1.1c-0.7-1.5-0.4-3.3-0.5-5
            c-0.4-4.1-0.5-14.7,2.8-16.1c5.9-2.5,10.2,4.1,13.6,8.1c2.4,2.9,2.1,5.5,2.5,9.2c0.3,2.9,0.8,6.3,0.2,9.2
            c-0.6,2.6-1.8,5.2-1.3,7.7c0.6,3.2,3.2,2.9,4.5,0.3c3.1-6-0.4-13.8-1.2-20c-0.4-3.3-0.7-6.7,1.3-9.5c1.5-2.1,3.7-3.6,6.1-4.5
            c2.6-1,5.9-1.2,8.4,0.2c2.7,1.5,4.3,4.6,6.2,6.9c3.8,4.8,4.4,12.4,3,18.2c-0.9,3.6-2.7,7-3.8,10.5c0,0-2.9,6.3,2.2,1.3
            c2.2-2.2,3.4-5.2,4.5-8.1c1-2.6,1.8-5.6,3.4-7.8c4-5.7,11.6-1.3,15.9,1.5c1.4,0.9,2.1,1.8,3.7,2.3c0,0,2.2-0.1,2.9-5.7
            c0.8-6.6-3.4-17.2-0.3-23.6c2.9-6,11.8-6.7,16.3-2.1c2.4,2.5,2.8,5.5,2.8,8.8c0,3.8,0.2,7.5-0.3,11.2
            C352.1,586.6,353.7,589.5,355.5,582z"/>
          <path class="st110" d="M268.9,578.9c0,0-7.3-5.9-6.7,0.3"/>
          <path class="st110" d="M271.3,607.7c0,0,1.1,7.5,6.7,5.9"/>
          <path class="st110" d="M250.8,584c1.6,1.9,3,3.8,1.9,10.2"/>
          <path class="st110" d="M312.6,580c3,1.9,6.7,9.4,10.5,4c3.8-5.4-2.4-10.2,1.1-14.3"/>
          <path class="st110" d="M307.6,528.9c-1.9,0.3-7.3,1.3-6.5,5.7"/>
          <path class="st110" d="M260.8,536.9c-2.7-0.5-14.8,1.3-12.9,5.7"/>
          <path class="st110" d="M291.5,576.2c0,0,7,2.7,7,5.9"/>
          <path class="st110" d="M285.3,596.1c0,0,3.8,2.2,2.4,6.2"/>
          <path class="st9" d="M246.8,520c0,0,5.7,7.8,10.8,7.3"/>
          <path class="st110" d="M246.8,520c0,0,5.7,7.8,10.8,7.3"/>
          <path class="st9" d="M286.6,529.9c0,0,9.4,6.7,4.3,10"/>
          <path class="st110" d="M286.6,529.9c0,0,9.4,6.7,4.3,10"/>
          <path class="st9" d="M347.2,584.8c0,0-2.4,7.3,1.9,7.8"/>
          <path class="st110" d="M347.2,584.8c0,0-2.4,7.3,1.9,7.8"/>
          <path class="st9" d="M356.3,561.7c0,0,7.5,10.8,5.7,14"/>
          <path class="st110" d="M356.3,561.7c0,0,7.5,10.8,5.7,14"/>
          <path class="st9" d="M313.8,595.6c0,0-0.3,8.1-5.7,14.3"/>
          <path class="st110" d="M313.8,595.6c0,0-0.3,8.1-5.7,14.3"/>
          <path class="st9" d="M334.5,526.4c0,0,0.8-9.7,5.9-6.2"/>
          <path class="st110" d="M334.5,526.4c0,0,0.8-9.7,5.9-6.2"/>
          <path class="st9" d="M273.4,553.1c0,0,5.7,3.8,11.8,2.4"/>
          <path class="st110" d="M273.4,553.1c0,0,5.7,3.8,11.8,2.4"/>
          <path class="st9" d="M273.4,567.1c0,0-12.9-8.3-18-2.4"/>
          <path class="st110" d="M273.4,567.1c0,0-12.9-8.3-18-2.4"/>
          <path class="st9" d="M329.9,601.2c0,0,1.1,4.6,4-0.5c3-5.1,3-14.8,3-14.8"/>
          <path class="st110" d="M329.9,601.2c0,0,1.1,4.6,4-0.5c3-5.1,3-14.8,3-14.8"/>
          <path class="st9" d="M313.3,541.5c0,0,4,10.2,2.4,15.1"/>
          <path class="st110" d="M313.3,541.5c0,0,4,10.2,2.4,15.1"/>
          <path class="st9" d="M304.9,559.3c0,0,1.6,1.3-0.3,7.8"/>
          <path class="st110" d="M304.9,559.3c0,0,1.6,1.3-0.3,7.8"/>
          <path class="st9" d="M327.5,560.6c0,0,7.8-6.2,11.8-5.4"/>
          <path class="st110" d="M327.5,560.6c0,0,7.8-6.2,11.8-5.4"/>
          <path class="st110" d="M324.6,536.1c0,0,0.5,11.3,4.8,10"/>
          <path class="st110" d="M356.3,522.9c0,0,7.5,7.5,3.8,11"/>
        </g>
        <g class="st8">
          <defs>
            <rect id="SVGID_9_" x="165.8" y="434.6" width="277" height="277"/>
          </defs>
          <clippath id="SVGID_10_">
            <use xlink:href="#SVGID_9_"  style="overflow:visible;"/>
          </clippath>
          <path class="st111" d="M377.1,531.6c0-6.6-5.4-12-12-12c-6.6,0-12,5.4-12,12c0,2.8,1,5.4,2.6,7.4c-2.2,2.2-3.6,5.2-3.6,8.5
            c0,6.6,5.4,12,12,12c6.6,0,12-5.4,12-12c0-2.8-1-5.4-2.6-7.4C375.7,538,377.1,535,377.1,531.6"/>
          <path class="st112" d="M377.1,531.6c0-6.6-5.4-12-12-12c-6.6,0-12,5.4-12,12c0,2.8,1,5.4,2.6,7.4c-2.2,2.2-3.6,5.2-3.6,8.5
            c0,6.6,5.4,12,12,12c6.6,0,12-5.4,12-12c0-2.8-1-5.4-2.6-7.4C375.7,538,377.1,535,377.1,531.6z"/>
          <path class="st111" d="M361.1,574.5c-5.5,0-10.1,3.7-11.5,8.7c-5.4,1.2-9.4,6-9.4,11.7c0,1.3,0.2,2.6,0.6,3.8
            c-0.8-0.2-1.7-0.3-2.6-0.3c-6.5,0-11.7,5.1-11.9,11.5c-6.1,0.5-11,5.6-11,11.9c0,6.6,5.4,12,12,12c6.5,0,11.7-5.1,11.9-11.5
            c6.1-0.5,11-5.6,11-11.9c0-1.3-0.2-2.6-0.6-3.8c0.8,0.2,1.7,0.3,2.6,0.3c5.5,0,10.1-3.7,11.5-8.7c5.4-1.2,9.4-6,9.4-11.7
            C373.1,579.8,367.7,574.5,361.1,574.5"/>
          <path class="st112" d="M361.1,574.5c-5.5,0-10.1,3.7-11.5,8.7c-5.4,1.2-9.4,6-9.4,11.7c0,1.3,0.2,2.6,0.6,3.8
            c-0.8-0.2-1.7-0.3-2.6-0.3c-6.5,0-11.7,5.1-11.9,11.5c-6.1,0.5-11,5.6-11,11.9c0,6.6,5.4,12,12,12c6.5,0,11.7-5.1,11.9-11.5
            c6.1-0.5,11-5.6,11-11.9c0-1.3-0.2-2.6-0.6-3.8c0.8,0.2,1.7,0.3,2.6,0.3c5.5,0,10.1-3.7,11.5-8.7c5.4-1.2,9.4-6,9.4-11.7
            C373.1,579.8,367.7,574.5,361.1,574.5z"/>
          <path class="st111" d="M308.8,625.3c-6.6,0-12,5.4-12,12c0,1.4,0.3,2.7,0.7,4c-3.7,2-6.2,6-6.2,10.5c0,6.6,5.4,12,12,12
            c6.6,0,12-5.4,12-12c0-1.4-0.3-2.7-0.7-4c3.7-2,6.2-6,6.2-10.5C320.8,630.6,315.4,625.3,308.8,625.3"/>
          <path class="st112" d="M308.8,625.3c-6.6,0-12,5.4-12,12c0,1.4,0.3,2.7,0.7,4c-3.7,2-6.2,6-6.2,10.5c0,6.6,5.4,12,12,12
            c6.6,0,12-5.4,12-12c0-1.4-0.3-2.7-0.7-4c3.7-2,6.2-6,6.2-10.5C320.8,630.6,315.4,625.3,308.8,625.3z"/>
          <path class="st113" d="M247.9,575.9c4.2-1.9,7.1-6.1,7.1-10.9c0-3.3-1.3-6.3-3.5-8.5c0.3-1.1,0.5-2.3,0.5-3.5
            c0-3.9-1.9-7.3-4.7-9.5c1.4-2,2.2-4.3,2.2-6.9c0-3.9-1.9-7.3-4.7-9.5c1.4-2,2.2-4.3,2.2-6.9c0-6.6-5.4-12-12-12
            c-6.6,0-12,5.4-12,12c0,3.9,1.9,7.3,4.7,9.5c-1.4,2-2.2,4.3-2.2,6.9c0,3.9,1.9,7.3,4.7,9.5c-1.4,2-2.2,4.3-2.2,6.9
            c0,3.3,1.3,6.3,3.5,8.5c-0.3,1.1-0.5,2.3-0.5,3.5c0,1.9,0.5,3.7,1.2,5.3c-4.5,1.7-7.7,6.1-7.7,11.2c0,5.7,4,10.5,9.4,11.7
            c2,3.7,6,6.3,10.5,6.3c6.6,0,12-5.4,12-12C256.5,582,252.8,577.4,247.9,575.9"/>
          <path class="st112" d="M247.9,575.9c4.2-1.9,7.1-6.1,7.1-10.9c0-3.3-1.3-6.3-3.5-8.5c0.3-1.1,0.5-2.3,0.5-3.5
            c0-3.9-1.9-7.3-4.7-9.5c1.4-2,2.2-4.3,2.2-6.9c0-3.9-1.9-7.3-4.7-9.5c1.4-2,2.2-4.3,2.2-6.9c0-6.6-5.4-12-12-12
            c-6.6,0-12,5.4-12,12c0,3.9,1.9,7.3,4.7,9.5c-1.4,2-2.2,4.3-2.2,6.9c0,3.9,1.9,7.3,4.7,9.5c-1.4,2-2.2,4.3-2.2,6.9
            c0,3.3,1.3,6.3,3.5,8.5c-0.3,1.1-0.5,2.3-0.5,3.5c0,1.9,0.5,3.7,1.2,5.3c-4.5,1.7-7.7,6.1-7.7,11.2c0,5.7,4,10.5,9.4,11.7
            c2,3.7,6,6.3,10.5,6.3c6.6,0,12-5.4,12-12C256.5,582,252.8,577.4,247.9,575.9z"/>
          <path class="st114" d="M374.1,512.2c0-5-3.1-9.3-7.5-11.1c2.7-2.2,4.5-5.6,4.5-9.3c0-6.6-5.4-12-12-12c-6.6,0-12,5.4-12,12
            c0,0.5,0,1,0.1,1.6c-1.1-0.4-2.3-0.6-3.6-0.6c-5.2,0-9.6,3.3-11.3,8c-0.2,0-0.5,0-0.7,0c-4.1,0-7.7,2-9.8,5.2
            c-2.2-2.3-5.2-3.7-8.6-3.7c-4.2,0-7.9,2.2-10,5.5c-2.2-2.4-5.4-4-8.9-4c-3.6,0-6.8,1.6-9,4.1c-2-3.6-5.9-6.1-10.4-6.1
            c-3.7,0-7,1.7-9.2,4.3c-1.7-4.6-6.1-7.8-11.2-7.8c-3.3,0-6.3,1.4-8.5,3.5c-1.5-4.9-6-8.5-11.4-8.5c-6.6,0-12,5.4-12,12
            s5.4,12,12,12c2.1,0,4.1-0.6,5.9-1.6c-0.3,1-0.4,2-0.4,3.1c0,6.6,5.4,12,12,12c4.7,0,8.8-2.7,10.7-6.7c2,3.9,6,6.7,10.7,6.7
            c5.2,0,9.6-3.3,11.3-7.9c0.3,0.4,0.6,0.8,1,1.2c1.7,4.5,6.1,7.7,11.2,7.7c4.8,0,8.9-2.8,10.8-6.9c1,0.5,2,0.9,3.1,1.1
            c1.8,4.3,6.1,7.2,11,7.2c5.4,0,10-3.6,11.5-8.6c4.6-0.6,8.3-3.7,9.8-7.9c0.2,0,0.5,0,0.7,0c0,0,0.1,0,0.1,0
            c-0.1,0.5-0.1,1-0.1,1.5c0,6.6,5.4,12,12,12c4.7,0,8.8-2.8,10.8-6.8C370.9,521.6,374.1,517.3,374.1,512.2"/>
          <path class="st112" d="M374.1,512.2c0-5-3.1-9.3-7.5-11.1c2.7-2.2,4.5-5.6,4.5-9.3c0-6.6-5.4-12-12-12c-6.6,0-12,5.4-12,12
            c0,0.5,0,1,0.1,1.6c-1.1-0.4-2.3-0.6-3.6-0.6c-5.2,0-9.6,3.3-11.3,8c-0.2,0-0.5,0-0.7,0c-4.1,0-7.7,2-9.8,5.2
            c-2.2-2.3-5.2-3.7-8.6-3.7c-4.2,0-7.9,2.2-10,5.5c-2.2-2.4-5.4-4-8.9-4c-3.6,0-6.8,1.6-9,4.1c-2-3.6-5.9-6.1-10.4-6.1
            c-3.7,0-7,1.7-9.2,4.3c-1.7-4.6-6.1-7.8-11.2-7.8c-3.3,0-6.3,1.4-8.5,3.5c-1.5-4.9-6-8.5-11.4-8.5c-6.6,0-12,5.4-12,12
            s5.4,12,12,12c2.1,0,4.1-0.6,5.9-1.6c-0.3,1-0.4,2-0.4,3.1c0,6.6,5.4,12,12,12c4.7,0,8.8-2.7,10.7-6.7c2,3.9,6,6.7,10.7,6.7
            c5.2,0,9.6-3.3,11.3-7.9c0.3,0.4,0.6,0.8,1,1.2c1.7,4.5,6.1,7.7,11.2,7.7c4.8,0,8.9-2.8,10.8-6.9c1,0.5,2,0.9,3.1,1.1
            c1.8,4.3,6.1,7.2,11,7.2c5.4,0,10-3.6,11.5-8.6c4.6-0.6,8.3-3.7,9.8-7.9c0.2,0,0.5,0,0.7,0c0,0,0.1,0,0.1,0
            c-0.1,0.5-0.1,1-0.1,1.5c0,6.6,5.4,12,12,12c4.7,0,8.8-2.8,10.8-6.8C370.9,521.6,374.1,517.3,374.1,512.2z"/>
          <path class="st113" d="M381.1,557c0-3.7-1.7-7-4.3-9.2c1.8-2.1,2.8-4.8,2.8-7.7c0-6.6-5.4-12-12-12c-6.5,0-11.8,5.2-11.9,11.7
            c-4.7,1.6-8,6.1-8,11.3c0,3.7,1.7,7,4.3,9.2c-1.8,2.1-2.8,4.8-2.8,7.7c0,6.6,5.4,12,12,12c6.5,0,11.8-5.2,11.9-11.7
            C377.7,566.7,381.1,562.2,381.1,557"/>
          <path class="st112" d="M381.1,557c0-3.7-1.7-7-4.3-9.2c1.8-2.1,2.8-4.8,2.8-7.7c0-6.6-5.4-12-12-12c-6.5,0-11.8,5.2-11.9,11.7
            c-4.7,1.6-8,6.1-8,11.3c0,3.7,1.7,7,4.3,9.2c-1.8,2.1-2.8,4.8-2.8,7.7c0,6.6,5.4,12,12,12c6.5,0,11.8-5.2,11.9-11.7
            C377.7,566.7,381.1,562.2,381.1,557z"/>
          <path class="st113" d="M336.2,578.9c-6.5,0-11.8,5.2-11.9,11.7c-2.5,0.9-4.6,2.5-6,4.7c-5.1,1.3-8.8,5.8-8.9,11.3
            c-1.5,0.5-2.8,1.3-3.9,2.3c-6.3,0.2-11.3,5.3-11.5,11.6c-4.6,1.6-8,6.1-8,11.3c0,6.6,5.4,12,12,12c6.5,0,11.8-5.2,11.9-11.7
            c1.5-0.5,2.8-1.3,3.9-2.3c6.3-0.2,11.3-5.3,11.5-11.6c2.5-0.9,4.6-2.5,6-4.7c5.1-1.3,8.8-5.8,8.9-11.3c4.6-1.6,8-6.1,8-11.3
            C348.2,584.3,342.8,578.9,336.2,578.9"/>
          <path class="st112" d="M336.2,578.9c-6.5,0-11.8,5.2-11.9,11.7c-2.5,0.9-4.6,2.5-6,4.7c-5.1,1.3-8.8,5.8-8.9,11.3
            c-1.5,0.5-2.8,1.3-3.9,2.3c-6.3,0.2-11.3,5.3-11.5,11.6c-4.6,1.6-8,6.1-8,11.3c0,6.6,5.4,12,12,12c6.5,0,11.8-5.2,11.9-11.7
            c1.5-0.5,2.8-1.3,3.9-2.3c6.3-0.2,11.3-5.3,11.5-11.6c2.5-0.9,4.6-2.5,6-4.7c5.1-1.3,8.8-5.8,8.9-11.3c4.6-1.6,8-6.1,8-11.3
            C348.2,584.3,342.8,578.9,336.2,578.9z"/>
          <path class="st115" d="M234,593.1c0,0-2.9-2.7,0.5-8.2"/>
          <path class="st115" d="M231.6,561.5c0,0,1.5-6.5,5-7"/>
          <path class="st115" d="M247.3,543.5c0,0-0.8-5.4-10.7-5.9"/>
          <path class="st115" d="M240.5,515.6c0,0,3.6-10.9,8.6-6.4"/>
          <path class="st115" d="M333.2,524.5c0,0,3-2.4,1.5-11.4"/>
          <path class="st115" d="M310.8,525.9c0,0,5,0.8,8-3.7"/>
          <path class="st115" d="M285.4,507.8c0,0,4,2.4,1.5,11.3"/>
          <path class="st115" d="M347.2,491.7c0,0-3.5,9,3.5,12c0,0-2,13.5,9,12.5"/>
          <path class="st115" d="M352,560.3c0,0,5.1-4.2,10.1-5.2"/>
          <path class="st115" d="M363.1,548.1c0,0,5.3,4,13.6-0.2"/>
          <path class="st115" d="M309.8,632.1c0,0,0-6.3-2-12.8"/>
          <path class="st115" d="M318.3,595.3c0,0,7.5-1.9,9.5,3.6"/>
          <path class="st115" d="M320.8,606.8c0,0,6.9,3.6,4.5,11.3"/>
          <path class="st115" d="M356.6,586.9c0,0,9.1,2.4,7,11.2"/>
          <path class="st115" d="M305.3,645.7c0,0,6.1-3,9.3,2"/>
          <path class="st115" d="M295.9,522.1c0,0,6.5-10,14-7.5"/>
          <path class="st115" d="M264.5,512.2c0,0,7.5-4,9,1.5"/>
          <path class="st115" d="M246.5,514.2c0,0-3.5,7,3.5,9"/>
          <path class="st115" d="M334.7,584.9c0,0,3,3,0,8"/>
          <path class="st115" d="M297.4,632.8c0,0-5-3.5,1.5-7.5"/>
          <path class="st115" d="M300.8,655.2c0,0,4.5,6.5,9-1.5"/>
          <path class="st115" d="M354.2,591.9c0,0,6,5.5-3,8.5"/>
          <path class="st115" d="M329.2,626.3c0,0,3,0,3-8.5"/>
          <path class="st115" d="M237.6,501.2c0,0-12-1-7,6.5"/>
          <path class="st115" d="M242.5,560.5c0,0,2.5,3.5-3.5,11.5"/>
          <path class="st115" d="M361.6,488.3c0,0-11.5,2.5-5,12"/>
          <path class="st115" d="M365.1,563c0,0,9,7.5-4,11.5"/>
        </g>
      </g>
    </g>
  </g>
  <g id="liver" class="the-organs">
    <g>
      <g>
        <defs>
          <rect id="SVGID_11_" x="156.9" y="318.4" width="240.1" height="240.1"/>
        </defs>
        <clippath id="SVGID_12_">
          <use xlink:href="#SVGID_11_"  style="overflow:visible;"/>
        </clippath>
        <g class="st116">
          <defs>
            <rect id="SVGID_13_" x="156.9" y="318.4" width="240.1" height="240.1"/>
          </defs>
          <clippath id="SVGID_14_">
            <use xlink:href="#SVGID_13_"  style="overflow:visible;"/>
          </clippath>
          <path class="st117" d="M352.3,397c0.3,2.1-2.4,3-4.8,3.3c-32.5,3.7-51.3,7.2-62,9.8c-24-3.9-63.2-0.2-68,37.3
            c0,0,1,24.1,9.3,25.5c12.6,2.1,14.4-18.9,31.2-19.2c8.7-0.3,13.8-9,24.3-7.5c6,0.9,12.1-6.1,16.2-13.7
            c15.6,0,24.7-13.9,33.3-19.9c9.9-6.9,22.5-7.8,25.8-9.9C361,400.6,352,394.9,352.3,397"/>
          <path class="st118" d="M352.3,397c0.3,2.1-2.4,3-4.8,3.3c-32.5,3.7-51.3,7.2-62,9.8c-24-3.9-63.2-0.2-68,37.3
            c0,0,1,24.1,9.3,25.5c12.6,2.1,14.4-18.9,31.2-19.2c8.7-0.3,13.8-9,24.3-7.5c6,0.9,12.1-6.1,16.2-13.7
            c15.6,0,24.7-13.9,33.3-19.9c9.9-6.9,22.5-7.8,25.8-9.9C361,400.6,352,394.9,352.3,397z"/>
        </g>
        <g class="st116">
          <defs>
            <rect id="SVGID_15_" x="156.9" y="318.4" width="240.1" height="240.1"/>
          </defs>
          <clippath id="SVGID_16_">
            <use xlink:href="#SVGID_15_"  style="overflow:visible;"/>
          </clippath>
          <path class="st119" d="M219.6,460.4c0,0-9-35.4,3.9-56.7c12.9-21.3,37.8-22.2,51-18.6c16.2,8.1,60.6-3.9,78.3,10.5
            c0,0,6.6,4.2-19.8,6.6c-26.4,2.4-41.7,10.8-76.2,16.5C222.3,424.3,247.5,449,219.6,460.4"/>
          <path class="st20" d="M219.6,460.4c0,0-9-35.4,3.9-56.7c12.9-21.3,37.8-22.2,51-18.6c16.2,8.1,60.6-3.9,78.3,10.5
            c0,0,6.6,4.2-19.8,6.6c-26.4,2.4-41.7,10.8-76.2,16.5C222.3,424.3,247.5,449,219.6,460.4z"/>
          <path class="st20" d="M293.5,388c0,0,4.5,3.6-3,22.2"/>
          <path class="st20" d="M289.1,443.7c0,0-7-5.1,2.9-33.6"/>
        </g>
      </g>
    </g>
  </g>
  <g id="pancreas" class="the-organs">
    <g>
      <g>
        <defs>

            <rect id="SVGID_17_" x="210.9" y="408.8" transform="matrix(0.9959 -9.067286e-02 9.067286e-02 0.9959 -41.8294 26.9737)" width="130.2" height="130.2"/>
        </defs>
        <clippath id="SVGID_18_">
          <use xlink:href="#SVGID_17_"  style="overflow:visible;"/>
        </clippath>
        <g class="st21">
          <defs>

              <rect id="SVGID_19_" x="210.9" y="408.8" transform="matrix(0.9959 -9.067286e-02 9.067286e-02 0.9959 -41.8294 26.9737)" width="130.2" height="130.2"/>
          </defs>
          <clippath id="SVGID_20_">
            <use xlink:href="#SVGID_19_"  style="overflow:visible;"/>
          </clippath>
          <path class="st22" d="M323.3,462.7c-0.6-0.5-1.4-0.5-2.1-0.2c-0.1-0.2-0.3-0.5-0.6-0.7c-0.7-0.6-1.7-0.8-2.6-0.5
            c-0.1-0.7-0.5-1.3-1.1-1.8c-0.8-0.7-1.8-0.9-2.7-0.7c-0.2-0.3-0.4-0.6-0.7-0.9c-1-0.9-2.5-1-3.6-0.3c-0.8-1-2.2-1.5-3.5-1.3
            c-1.2,0.2-2.2,0.9-2.8,1.9c-0.8-0.5-1.8-0.8-2.8-0.6c-0.9,0.1-1.7,0.6-2.3,1.2c-0.8-0.9-2.1-1.5-3.5-1.3
            c-1.2,0.2-2.2,0.9-2.8,1.8c-0.8-0.9-2.1-1.5-3.5-1.3c-0.7,0.1-1.4,0.4-1.9,0.9c-0.8-1.2-2.3-2-3.8-1.7c-0.9,0.1-1.6,0.5-2.2,1.1
            c-0.8-0.5-1.8-0.8-2.8-0.6c-0.5,0.1-1,0.3-1.5,0.5c-1.3-0.3-2.7,0-3.7,0.9c-1.6-1-3.8-0.7-5,0.8c-0.1,0.1-0.1,0.1-0.1,0.2
            c-1.6-0.8-3.5-0.4-4.7,1c0,0,0,0-0.1,0.1c-0.2-0.4-0.5-0.8-0.9-1.1c-1.6-1.4-4-1.2-5.4,0.4c-0.7-1.4-2.2-2.3-3.8-2.1
            c-0.4,0-0.8,0.1-1.2,0.3c-0.6-1.5-2.2-2.6-4-2.4c-0.8,0.1-1.6,0.4-2.2,0.9c-0.8-0.9-2-1.5-3.3-1.3c-1.2,0.1-2.3,0.8-2.9,1.8
            c-0.7-0.4-1.5-0.7-2.4-0.6c-1.7,0.2-3,1.3-3.4,2.8c-0.4-0.1-0.7-0.1-1.1-0.1c-2.1,0.2-3.7,2.1-3.5,4.2c0,0,0,0,0,0
            c-1.9,0.6-3,2.6-2.5,4.6c0.1,0.3,0.2,0.7,0.4,1c-1.4,0.8-2.2,2.4-1.9,4.1c0.2,0.9,0.7,1.7,1.4,2.2c0,0-0.1,0.1-0.1,0.1
            c-1.4,1.6-1.2,4,0.5,5.4c0.9,0.7,2,1,3.1,0.9c-0.3,1.3,0.2,2.8,1.3,3.7c1.6,1.3,3.9,1.2,5.3-0.3c0.1,0.9,0.6,1.7,1.3,2.4
            c1.5,1.2,3.6,1.2,5,0c0.2,0.5,0.6,1,1.1,1.4c1.6,1.4,4.1,1.2,5.5-0.4c0.7,1.4,2.3,2.3,4,2.1c1.1-0.2,2-0.7,2.6-1.5
            c0.1,0.1,0.1,0.1,0.2,0.2c1.6,1.4,4.1,1.2,5.5-0.5c0.2-0.3,0.4-0.5,0.5-0.8c1.1,0,2.1-0.5,2.8-1.4c0.2-0.2,0.3-0.4,0.4-0.6
            c0.8,0.5,1.8,0.6,2.8,0.4c0.1,0,0.2-0.1,0.3-0.1c0.8,0.4,1.7,0.5,2.6,0.3c1.4-0.3,2.4-1.3,2.8-2.6c0.4,0,0.8,0,1.2-0.1
            c0.9-0.2,1.7-0.7,2.2-1.4c0.7,0.2,1.4,0.3,2.1,0.1c0.3-0.1,0.5-0.1,0.8-0.3c0.8,0.9,1.9,1.4,3.1,1.3c0.9,0.8,2.2,1.1,3.4,0.8
            c1.1-0.3,2-1,2.5-1.9c0.6,0.2,1.3,0.2,2,0.1c1.2-0.3,2.2-1.1,2.6-2.1c0.3,0,0.6,0,0.9-0.1c1-0.2,1.9-0.9,2.4-1.7
            c0.7,0.2,1.4,0.3,2.2,0.1c1-0.2,1.8-0.8,2.4-1.6c0.9,0.7,2.1,1,3.3,0.7c1.4-0.3,2.4-1.3,2.8-2.5c1.3,0.2,2.6-0.4,3.2-1.6
            c0.2-0.3,0.3-0.7,0.4-1.1c0.9-0.2,1.8-0.7,2.3-1.6c0.4-0.7,0.5-1.4,0.3-2.1c0.9-0.1,1.7-0.6,2.2-1.4c0.1-0.1,0.1-0.3,0.2-0.4
            c0.1,0.1,0.2,0.1,0.2,0.2c0.9,0.5,2,0.1,2.5-0.7c0.1-0.1,0.1-0.2,0.1-0.3c0.7-0.1,1.4-0.4,1.9-0.9c0,0,0.1-0.1,0.1-0.1
            c0.8,0.5,1.8,0.4,2.5-0.3C324.2,464.5,324.1,463.3,323.3,462.7"/>
          <path class="st23" d="M323.3,462.7c-0.6-0.5-1.4-0.5-2.1-0.2c-0.1-0.2-0.3-0.5-0.6-0.7c-0.7-0.6-1.7-0.8-2.6-0.5
            c-0.1-0.7-0.5-1.3-1.1-1.8c-0.8-0.7-1.8-0.9-2.7-0.7c-0.2-0.3-0.4-0.6-0.7-0.9c-1-0.9-2.5-1-3.6-0.3c-0.8-1-2.2-1.5-3.5-1.3
            c-1.2,0.2-2.2,0.9-2.8,1.9c-0.8-0.5-1.8-0.8-2.8-0.6c-0.9,0.1-1.7,0.6-2.3,1.2c-0.8-0.9-2.1-1.5-3.5-1.3
            c-1.2,0.2-2.2,0.9-2.8,1.8c-0.8-0.9-2.1-1.5-3.5-1.3c-0.7,0.1-1.4,0.4-1.9,0.9c-0.8-1.2-2.3-2-3.8-1.7c-0.9,0.1-1.6,0.5-2.2,1.1
            c-0.8-0.5-1.8-0.8-2.8-0.6c-0.5,0.1-1,0.3-1.5,0.5c-1.3-0.3-2.7,0-3.7,0.9c-1.6-1-3.8-0.7-5,0.8c-0.1,0.1-0.1,0.1-0.1,0.2
            c-1.6-0.8-3.5-0.4-4.7,1c0,0,0,0-0.1,0.1c-0.2-0.4-0.5-0.8-0.9-1.1c-1.6-1.4-4-1.2-5.4,0.4c-0.7-1.4-2.2-2.3-3.8-2.1
            c-0.4,0-0.8,0.1-1.2,0.3c-0.6-1.5-2.2-2.6-4-2.4c-0.8,0.1-1.6,0.4-2.2,0.9c-0.8-0.9-2-1.5-3.3-1.3c-1.2,0.1-2.3,0.8-2.9,1.8
            c-0.7-0.4-1.5-0.7-2.4-0.6c-1.7,0.2-3,1.3-3.4,2.8c-0.4-0.1-0.7-0.1-1.1-0.1c-2.1,0.2-3.7,2.1-3.5,4.2c0,0,0,0,0,0
            c-1.9,0.6-3,2.6-2.5,4.6c0.1,0.3,0.2,0.7,0.4,1c-1.4,0.8-2.2,2.4-1.9,4.1c0.2,0.9,0.7,1.7,1.4,2.2c0,0-0.1,0.1-0.1,0.1
            c-1.4,1.6-1.2,4,0.5,5.4c0.9,0.7,2,1,3.1,0.9c-0.3,1.3,0.2,2.8,1.3,3.7c1.6,1.3,3.9,1.2,5.3-0.3c0.1,0.9,0.6,1.7,1.3,2.4
            c1.5,1.2,3.6,1.2,5,0c0.2,0.5,0.6,1,1.1,1.4c1.6,1.4,4.1,1.2,5.5-0.4c0.7,1.4,2.3,2.3,4,2.1c1.1-0.2,2-0.7,2.6-1.5
            c0.1,0.1,0.1,0.1,0.2,0.2c1.6,1.4,4.1,1.2,5.5-0.5c0.2-0.3,0.4-0.5,0.5-0.8c1.1,0,2.1-0.5,2.8-1.4c0.2-0.2,0.3-0.4,0.4-0.6
            c0.8,0.5,1.8,0.6,2.8,0.4c0.1,0,0.2-0.1,0.3-0.1c0.8,0.4,1.7,0.5,2.6,0.3c1.4-0.3,2.4-1.3,2.8-2.6c0.4,0,0.8,0,1.2-0.1
            c0.9-0.2,1.7-0.7,2.2-1.4c0.7,0.2,1.4,0.3,2.1,0.1c0.3-0.1,0.5-0.1,0.8-0.3c0.8,0.9,1.9,1.4,3.1,1.3c0.9,0.8,2.2,1.1,3.4,0.8
            c1.1-0.3,2-1,2.5-1.9c0.6,0.2,1.3,0.2,2,0.1c1.2-0.3,2.2-1.1,2.6-2.1c0.3,0,0.6,0,0.9-0.1c1-0.2,1.9-0.9,2.4-1.7
            c0.7,0.2,1.4,0.3,2.2,0.1c1-0.2,1.8-0.8,2.4-1.6c0.9,0.7,2.1,1,3.3,0.7c1.4-0.3,2.4-1.3,2.8-2.5c1.3,0.2,2.6-0.4,3.2-1.6
            c0.2-0.3,0.3-0.7,0.4-1.1c0.9-0.2,1.8-0.7,2.3-1.6c0.4-0.7,0.5-1.4,0.3-2.1c0.9-0.1,1.7-0.6,2.2-1.4c0.1-0.1,0.1-0.3,0.2-0.4
            c0.1,0.1,0.2,0.1,0.2,0.2c0.9,0.5,2,0.1,2.5-0.7c0.1-0.1,0.1-0.2,0.1-0.3c0.7-0.1,1.4-0.4,1.9-0.9c0,0,0.1-0.1,0.1-0.1
            c0.8,0.5,1.8,0.4,2.5-0.3C324.2,464.5,324.1,463.3,323.3,462.7z"/>
          <path class="st24" d="M255.3,475.6c0,0,4.7-0.9,3.7,2.5c0,0,3.7-0.3,2.8,1.9c0,0,5.7-1.8,5.2,1.7c0,0,2.8,0,1.5,2.5
            c0,0,3.3,0.5-0.3,2.3"/>
          <path class="st24" d="M286.8,458.9c0,0-4.4,0.8-2.3,5.2c0,0-3.2-1.5-3,0.7c0,0-4.7,1.5-1.8,4.1"/>
          <path class="st24" d="M301.6,477.5c0,0,1.4-5.3-3.1-4c0,0-2.8-2.6-4.9,1.3c0,0-1-6-3.6-3.8"/>
          <path class="st24" d="M226.1,475.6c0,0,1.8-3.6,5.7-1.5c0,0,2.5,0.9,1.8,3.5c0,0,4.6-1.7,4.2,2.7"/>
          <path class="st24" d="M245.4,457c0,0-5.7,1.1-3.2,4.6c0,0-5.2-1.9-5.4,2.9"/>
          <path class="st24" d="M313.5,458c0,0,1.4,2.2-1.3,4.2"/>
          <path class="st24" d="M255.9,468.2c0,0,2.7,3.7,1.5,6.6c-1.3,2.9-6.3-2.3-6.3-2.3"/>
        </g>
      </g>
    </g>
  </g>
  <g id="kidneys" class="the-organs">
    <g>
      <g>
        <defs>
          <rect id="SVGID_21_" x="206.1" y="422.4" width="186.6" height="186.6"/>
        </defs>
        <clippath id="SVGID_22_">
          <use xlink:href="#SVGID_21_"  style="overflow:visible;"/>
        </clippath>
        <g class="st25">
          <defs>
            <rect id="SVGID_23_" x="206.1" y="422.4" width="186.6" height="186.6"/>
          </defs>
          <clippath id="SVGID_24_">
            <use xlink:href="#SVGID_23_"  style="overflow:visible;"/>
          </clippath>
          <path class="st26" d="M322.9,501.1c-5.4-2.5-9.4-7.7-11.9-12c2.9,1.5,6.5,2.8,10.2,2.8c0.3,0,0.6,0,0.8,0c0.8,0,1.4-0.7,1.3-1.5
            c0-0.8-0.7-1.4-1.5-1.3c-5.2,0.3-10.4-2.7-13.4-4.8c-0.6-1.4-1-2.3-1-2.3c-0.1-0.2-0.2-0.3-0.3-0.4v-28.3h-5.1v32.3
            c0,0,0,0-0.1,0.1c-8.9,11.8-23.9,18.6-24,18.6c-0.7,0.3-1,1.1-0.7,1.8c0.2,0.5,0.7,0.8,1.3,0.8c0.2,0,0.4,0,0.6-0.1
            c0.6-0.3,13.6-6.1,23-16.8v54.5h5.1v-56.2c0.5,1,1.1,2,1.7,3.1c3.7,6,8,10.2,12.7,12.4c0.2,0.1,0.4,0.1,0.6,0.1
            c0.5,0,1-0.3,1.3-0.8C323.9,502.3,323.6,501.4,322.9,501.1"/>
          <path class="st27" d="M322.9,501.1c-5.4-2.5-9.4-7.7-11.9-12c2.9,1.5,6.5,2.8,10.2,2.8c0.3,0,0.6,0,0.8,0c0.8,0,1.4-0.7,1.3-1.5
            c0-0.8-0.7-1.4-1.5-1.3c-5.2,0.3-10.4-2.7-13.4-4.8c-0.6-1.4-1-2.3-1-2.3c-0.1-0.2-0.2-0.3-0.3-0.4v-28.3h-5.1v32.3
            c0,0,0,0-0.1,0.1c-8.9,11.8-23.9,18.6-24,18.6c-0.7,0.3-1,1.1-0.7,1.8c0.2,0.5,0.7,0.8,1.3,0.8c0.2,0,0.4,0,0.6-0.1
            c0.6-0.3,13.6-6.1,23-16.8v54.5h5.1v-56.2c0.5,1,1.1,2,1.7,3.1c3.7,6,8,10.2,12.7,12.4c0.2,0.1,0.4,0.1,0.6,0.1
            c0.5,0,1-0.3,1.3-0.8C323.9,502.3,323.6,501.4,322.9,501.1z"/>
          <path class="st28" d="M323.9,516.1c-11.2-7.1-20.9-26.3-24.3-33.6v-23.1h-5.1v44.4c-4.1,3.4-13.5,5.5-17.2,6
            c-0.8,0.1-1.3,0.8-1.2,1.6c0.1,0.8,0.8,1.3,1.6,1.2c0.2,0,4.1-0.6,8.6-1.9c3.4-1,6.2-2.2,8.2-3.4v0.3
            c-2.9,4.5-8.6,10.6-17.9,13.6c-0.7,0.2-1.1,1-0.9,1.8c0.2,0.6,0.7,1,1.3,1c0.1,0,0.3,0,0.4-0.1c7.8-2.5,13.4-7.2,17.1-11.5v38.4
            h5.1v-47.9c0-0.2,0-0.4,0-0.5c0-0.1,0-0.3,0-0.4v-13c1.1,2.2,2.4,4.6,3.9,7.1c6.4,11,12.8,18.5,19,22.4c0.2,0.1,0.5,0.2,0.7,0.2
            c0.5,0,0.9-0.2,1.2-0.7C324.8,517.4,324.6,516.5,323.9,516.1"/>
          <path class="st29" d="M323.9,516.1c-11.2-7.1-20.9-26.3-24.3-33.6v-23.1h-5.1v44.4c-4.1,3.4-13.5,5.5-17.2,6
            c-0.8,0.1-1.3,0.8-1.2,1.6c0.1,0.8,0.8,1.3,1.6,1.2c0.2,0,4.1-0.6,8.6-1.9c3.4-1,6.2-2.2,8.2-3.4v0.3
            c-2.9,4.5-8.6,10.6-17.9,13.6c-0.7,0.2-1.1,1-0.9,1.8c0.2,0.6,0.7,1,1.3,1c0.1,0,0.3,0,0.4-0.1c7.8-2.5,13.4-7.2,17.1-11.5v38.4
            h5.1v-47.9c0-0.2,0-0.4,0-0.5c0-0.1,0-0.3,0-0.4v-13c1.1,2.2,2.4,4.6,3.9,7.1c6.4,11,12.8,18.5,19,22.4c0.2,0.1,0.5,0.2,0.7,0.2
            c0.5,0,0.9-0.2,1.2-0.7C324.8,517.4,324.6,516.5,323.9,516.1z"/>
          <path class="st30" d="M267.9,542.8c-10.8,0.5-22-11.4-19.6-32.9c2.1-18,8.8-31.9,19.6-32.9c9.4-0.9,22.6,5.5,12.8,32.9
            c-0.4,1.2,0.8,4.6,1.2,5.8C289.1,538.5,276.9,542.3,267.9,542.8"/>
          <path class="st31" d="M267.9,542.8c-10.8,0.5-22-11.4-19.6-32.9c2.1-18,8.8-31.9,19.6-32.9c9.4-0.9,22.6,5.5,12.8,32.9
            c-0.4,1.2,0.8,4.6,1.2,5.8C289.1,538.5,276.9,542.3,267.9,542.8z"/>
          <path class="st30" d="M334.9,542.3c10.8,0.5,22-11.4,19.6-32.9c-2.1-18-8.8-31.9-19.6-32.9c-9.3-0.9-22.6,5.5-12.8,32.9
            c0.4,1.2-0.8,4.6-1.2,5.8C313.7,538.1,325.9,541.8,334.9,542.3"/>
          <path class="st31" d="M334.9,542.3c10.8,0.5,22-11.4,19.6-32.9c-2.1-18-8.8-31.9-19.6-32.9c-9.3-0.9-22.6,5.5-12.8,32.9
            c0.4,1.2-0.8,4.6-1.2,5.8C313.7,538.1,325.9,541.8,334.9,542.3z"/>
          <path class="st32" d="M330.4,512.6c0,0-3.4,1-8.9-5.6"/>
          <path class="st32" d="M273.3,482.8c0,0-14.5-1.4-16.8,15.6"/>
          <path class="st32" d="M279.6,526.2c0,0,0,14.9-16.8,11.2"/>
          <path class="st32" d="M329.9,482.3c0,0,6.1-2.8,13.5,6.3"/>
          <path class="st32" d="M323.2,525.7c0,0-2.1,11.4,9.6,12.1"/>
          <path class="st32" d="M253,514c0,0-1.6,7,2.6,11.9"/>
          <path class="st32" d="M343,534.3c0,0,4.4-1.9,6.1-8.6"/>
        </g>
      </g>
    </g>
  </g>
  <g id="spleen" class="the-organs">
    <g>
      <g>
        <defs>

            <rect id="SVGID_25_" x="312.8" y="402.3" transform="matrix(0.4949 -0.8689 0.8689 0.4949 -209.2034 541.6014)" width="96.9" height="96.9"/>
        </defs>
        <clippath id="SVGID_26_">
          <use xlink:href="#SVGID_25_"  style="overflow:visible;"/>
        </clippath>
        <g class="st33">
          <defs>

              <rect id="SVGID_27_" x="312.8" y="402.3" transform="matrix(0.4949 -0.8689 0.8689 0.4949 -209.2034 541.6014)" width="96.9" height="96.9"/>
          </defs>
          <clippath id="SVGID_28_">
            <use xlink:href="#SVGID_27_"  style="overflow:visible;"/>
          </clippath>
          <path class="st34" d="M366.4,420.5c0,0-7.3-1.2-9.9,16.5c-0.9,6.4,4.2,13.2,0.4,20.5c-3.5,6.8-9.6,11.6-8.2,17.6
            C352,489.5,400.2,456.1,366.4,420.5"/>
          <path class="st35" d="M366.4,420.5c0,0-7.3-1.2-9.9,16.5c-0.9,6.4,4.2,13.2,0.4,20.5c-3.5,6.8-9.6,11.6-8.2,17.6
            C352,489.5,400.2,456.1,366.4,420.5z"/>
        </g>
        <g class="st33">
          <defs>

              <rect id="SVGID_29_" x="312.8" y="402.3" transform="matrix(0.4949 -0.8689 0.8689 0.4949 -209.2034 541.6014)" width="96.9" height="96.9"/>
          </defs>
          <clippath id="SVGID_30_">
            <use xlink:href="#SVGID_29_"  style="overflow:visible;"/>
          </clippath>
          <path class="st36" d="M336.4,432.6c0,0-1.5,10.8,8.2,12.1c9.7,1.2,13.5-6.4,23.2-5.2"/>
          <path class="st37" d="M324.7,446.9c4.2,0.2,13.1-10,18.9-9.3c5.8,0.7,5.7,12.5,7.8,18.9c2.1,6.4,7.3,8.1,10.4,7.6"/>
        </g>
        <g class="st33">
          <defs>

              <rect id="SVGID_31_" x="312.8" y="402.3" transform="matrix(0.4949 -0.8689 0.8689 0.4949 -209.2034 541.6014)" width="96.9" height="96.9"/>
          </defs>
          <clippath id="SVGID_32_">
            <use xlink:href="#SVGID_31_"  style="overflow:visible;"/>
          </clippath>
          <path class="st38" d="M363.5,441.4c0-0.1-0.1-0.2-0.1-0.3c-0.8-1.6-7.9-17.1,1.4-20.5c9.8-3.5,24.9,8.2,20.2,31.2
            c-4,12.6-14.5,23.7-27.1,28.6c-5.7,1.6-12.1-2.2-9.3-8.8C348.5,471.7,368.4,457.5,363.5,441.4"/>
          <path class="st39" d="M363.5,441.4c0-0.1-0.1-0.2-0.1-0.3c-0.8-1.6-7.9-17.1,1.4-20.5c9.8-3.5,24.9,8.2,20.2,31.2
            c-4,12.6-14.5,23.7-27.1,28.6c-5.7,1.6-12.1-2.2-9.3-8.8C348.5,471.7,368.4,457.5,363.5,441.4z"/>
          <path class="st39" d="M364.2,421.2c0,0-0.3-0.8,6.1,2.4c6.4,3.2,6.3,5,2.1,13.5c-4.1,8.5,5.8,7,4.8,13.5c-1,6.5-8,5.3-10.1,13.1
            c-2,7.9-5.2,21.4-17.5,15"/>
        </g>
      </g>
    </g>
  </g>
  <g id="lungs" class="the-organs">
    <g>
      <g>
        <defs>
          <rect id="SVGID_33_" x="212.8" y="203.3" width="186.2" height="186.2"/>
        </defs>
        <clippath id="SVGID_34_">
          <use xlink:href="#SVGID_33_"  style="overflow:visible;"/>
        </clippath>
        <g class="st40">
          <defs>
            <rect id="SVGID_35_" x="212.8" y="203.3" width="186.2" height="186.2"/>
          </defs>
          <clippath id="SVGID_36_">
            <use xlink:href="#SVGID_35_"  style="overflow:visible;"/>
          </clippath>
          <path class="st41" d="M314.9,276.1c0,0-5.6,18.5-5.4,36.7c1.5,13.8-5.4,33.4,11.4,43.3c16.8,9.9,24.4,10.5,45.4,9.3
            C366.3,365.3,331.5,227,314.9,276.1"/>
          <path class="st42" d="M314.9,276.1c0,0-5.6,18.5-5.4,36.7c1.5,13.8-5.4,33.4,11.4,43.3c16.8,9.9,24.4,10.5,45.4,9.3
            C366.3,365.3,331.5,227,314.9,276.1z"/>
          <path class="st41" d="M299.8,283.8c0,0,6.3,4.8-1.2,28.9c-1.5,13.8,5.4,33.4-11.4,43.3c-16.8,9.9-24.4,10.5-45.4,9.3
            C241.8,365.3,283.3,234.8,299.8,283.8"/>
          <path class="st42" d="M299.8,283.8c0,0,6.3,4.8-1.2,28.9c-1.5,13.8,5.4,33.4-11.4,43.3c-16.8,9.9-24.4,10.5-45.4,9.3
            C241.8,365.3,283.3,234.8,299.8,283.8z"/>
          <path class="st43" d="M326.7,290l-13-24.7c-0.5-1-1.3-1.8-2.1-2.4v-45.4c0-0.8-0.7-1.5-1.5-1.5h-10.5c-0.8,0-1.5,0.7-1.5,1.5
            v45.2c-0.8,0.6-1.4,1.4-1.9,2.3l-9.5,19c-0.2,0.4-0.2,0.9-0.1,1.3c2.6,8,10.8,7.6,13.4,2.4l5-10l8.6,16.3
            c2.7,5.1,10.9,5.4,13.3-2.7C327,290.9,326.9,290.4,326.7,290"/>
          <path class="st42" d="M326.7,290l-13-24.7c-0.5-1-1.3-1.8-2.1-2.4v-45.4c0-0.8-0.7-1.5-1.5-1.5h-10.5c-0.8,0-1.5,0.7-1.5,1.5
            v45.2c-0.8,0.6-1.4,1.4-1.9,2.3l-9.5,19c-0.2,0.4-0.2,0.9-0.1,1.3c2.6,8,10.8,7.6,13.4,2.4l5-10l8.6,16.3
            c2.7,5.1,10.9,5.4,13.3-2.7C327,290.9,326.9,290.4,326.7,290z"/>
          <path class="st44" d="M225.3,329.7c0,0-3.3,7.8-0.3,38.3c0.6,8.4,4.1,8.8,25.8-4.3C250.8,363.7,259.4,342.6,225.3,329.7"/>
          <path class="st42" d="M225.3,329.7c0,0-3.3,7.8-0.3,38.3c0.6,8.4,4.1,8.8,25.8-4.3C250.8,363.7,259.4,342.6,225.3,329.7z"/>
          <path class="st44" d="M382.8,329.7c0,0,3.3,7.8,0.3,38.3c-0.6,8.4-4.1,8.8-25.8-4.3C357.3,363.7,348.7,342.6,382.8,329.7"/>
          <path class="st42" d="M382.8,329.7c0,0,3.3,7.8,0.3,38.3c-0.6,8.4-4.1,8.8-25.8-4.3C357.3,363.7,348.7,342.6,382.8,329.7z"/>
          <path class="st45" d="M376.6,300.1c0,0,12,31,4,37.3c-8,6.3-19.5,15.7-21.7,21.4s-0.9,6-13,1.9c-12.1-4.1-24.9-11-27.4-19.8
            c-6.1-11.1,0-29.1-3.5-31.2c-3.5-2,2.2-65.9,11.6-67.3C335.9,241,356.3,247.7,376.6,300.1"/>
          <path class="st42" d="M376.6,300.1c0,0,12,31,4,37.3c-8,6.3-19.5,15.7-21.7,21.4s-0.9,6-13,1.9c-12.1-4.1-24.9-11-27.4-19.8
            c-6.1-11.1,0-29.1-3.5-31.2c-3.5-2,2.2-65.9,11.6-67.3C335.9,241,356.3,247.7,376.6,300.1z"/>
          <path class="st45" d="M231.5,300.1c0,0-12,31-4,37.3c8,6.3,19.5,15.7,21.7,21.4c2.2,5.7,0.9,6,13,1.9
            c12.1-4.1,24.9-11,27.4-19.8c6.1-11.1,0-29.1,3.5-31.2c3.5-2-2.2-65.9-11.6-67.3C272.2,241,251.9,247.7,231.5,300.1"/>
          <path class="st42" d="M231.5,300.1c0,0-12,31-4,37.3c8,6.3,19.5,15.7,21.7,21.4c2.2,5.7,0.9,6,13,1.9
            c12.1-4.1,24.9-11,27.4-19.8c6.1-11.1,0-29.1,3.5-31.2c3.5-2-2.2-65.9-11.6-67.3C272.2,241,251.9,247.7,231.5,300.1z"/>
          <path class="st46" d="M271.6,241.2c0,0-28.9,12.6-41,61.3c-2.1,7.8,19.2,22.6,59.5,11.7c4.5-1.5,5.4-12.9,3.6-32.5
            c-2.4-4.2,2.8-8.7,2.5-15C296,260.4,291.2,231.3,271.6,241.2"/>
          <path class="st42" d="M271.6,241.2c0,0-28.9,12.6-41,61.3c-2.1,7.8,19.2,22.6,59.5,11.7c4.5-1.5,5.4-12.9,3.6-32.5
            c-2.4-4.2,2.8-8.7,2.5-15C296,260.4,291.2,231.3,271.6,241.2z"/>
          <path class="st46" d="M336.5,241.2c0,0,28.9,12.6,41,61.3c-34,20.6-20.8,36.1-61.1,25.3c-4.5-1.5-3.9-26.5-2.1-46
            c0.7-2.8-2-5.3-1.7-11.6C312.9,263.8,316.9,231.3,336.5,241.2"/>
          <path class="st42" d="M336.5,241.2c0,0,28.9,12.6,41,61.3c-34,20.6-20.8,36.1-61.1,25.3c-4.5-1.5-3.9-26.5-2.1-46
            c0.7-2.8-2-5.3-1.7-11.6C312.9,263.8,316.9,231.3,336.5,241.2z"/>
          <path class="st47" d="M324.5,261.9c0,1.4-5.6,45.6,7,54.5c11.3,8,28.7-15.1,29.8-16.8"/>
          <path class="st47" d="M351,311.3c0,0-2.8-9.3,0.5-14.4"/>
          <path class="st47" d="M326.3,308.5c0,0,9.3,5.6,25.1-35.8"/>
          <path class="st47" d="M340.8,274.5c0,0-6.5,12.6-3.3,26.1"/>
          <path class="st47" d="M284,252.1c0,0,7.9,84.7-40,52.1"/>
          <path class="st47" d="M252.8,308.9c0,0,7-4.2-5.1-20.9"/>
          <path class="st47" d="M278.4,300.1c0,0-15.8,0.9-25.6-29.8"/>
          <path class="st47" d="M258.4,284.3c0,0,4.7-2.3,6.5-13.5"/>
          <path class="st47" d="M284,279.1c0,0-9.3-14.4-9.8-21.4"/>
          <path class="st47" d="M323.6,279.1c0,0,7,9.3,13.5-22.8"/>
        </g>
      </g>
    </g>
  </g>
  <g id="heart" class="the-organs">
    <g>
      <g>
        <defs>
          <rect id="SVGID_37_" x="244.2" y="291.9" width="113.8" height="113.8"/>
        </defs>
        <clippath id="SVGID_38_">
          <use xlink:href="#SVGID_37_"  style="overflow:visible;"/>
        </clippath>
        <g class="st48">
          <defs>
            <rect id="SVGID_39_" x="244.2" y="291.9" width="113.8" height="113.8"/>
          </defs>
          <clippath id="SVGID_40_">
            <use xlink:href="#SVGID_39_"  style="overflow:visible;"/>
          </clippath>
          <path class="st49" d="M276.9,340.3c0,0-4.7-11.1-0.8-19.4c0.4-0.8,1.1-1.4,2-1.6c1.8-0.4,4.3-0.4,6.1,0.6c0.7,0.4,1,1.1,0.9,1.9
            c-0.4,2.6-1.1,9.4,1.1,14L276.9,340.3"/>
          <path class="st50" d="M276.9,340.3c0,0-4.7-11.1-0.8-19.4c0.4-0.8,1.1-1.4,2-1.6c1.8-0.4,4.3-0.4,6.1,0.6c0.7,0.4,1,1.1,0.9,1.9
            c-0.4,2.6-1.1,9.4,1.1,14L276.9,340.3"/>
          <path class="st51" d="M276.6,319.8c0,0,0.7,2.3,8.7,1.3C285.3,321,282,318.2,276.6,319.8"/>
        </g>
        <g class="st48">
          <defs>
            <rect id="SVGID_41_" x="244.2" y="291.9" width="113.8" height="113.8"/>
          </defs>
          <clippath id="SVGID_42_">
            <use xlink:href="#SVGID_41_"  style="overflow:visible;"/>
          </clippath>
          <path class="st52" d="M284.1,370.9c0,0-25.2-19.3,0-39.1c7.4-5.7,39.8-9.7,46.3,30C333.6,381.1,317.1,388.5,284.1,370.9"/>
          <path class="st53" d="M284.1,370.9c0,0-25.2-19.3,0-39.1c7.4-5.7,39.8-9.7,46.3,30C333.6,381.1,317.1,388.5,284.1,370.9"/>
        </g>
        <g class="st48">
          <defs>
            <rect id="SVGID_43_" x="244.2" y="291.9" width="113.8" height="113.8"/>
          </defs>
          <clippath id="SVGID_44_">
            <use xlink:href="#SVGID_43_"  style="overflow:visible;"/>
          </clippath>
          <path class="st54" d="M308.1,315.5c1.1-2.4,1.4-4.7,1.6-5.5c0-0.2,0-0.5-0.2-0.6c-2.2-2.4-4.6-1.1-5.5-0.5
            c-0.2,0.1-0.3,0.4-0.3,0.6c-0.1,1.6-0.4,3.1-0.9,4.3c-0.1,0.3-0.4,0.5-0.8,0.5c0,0,0,0,0,0c-0.4,0-0.7-0.3-0.8-0.7l-0.2-4.7
            c0-0.2-0.1-0.5-0.3-0.6c-1.9-1.3-3.5-0.6-4.2-0.2c-0.2,0.1-0.4,0.4-0.4,0.7l0.1,5.3c0,0.4-0.2,0.7-0.6,0.8
            c-0.3,0.1-0.5,0.1-0.8,0.2c-0.2,0.1-0.5,0-0.7-0.1c-2.1-1.5-4.8-3.6-5.4-4.1c-0.1,0-0.1-0.1-0.2-0.1c-3.6-1.3-4.5,2.1-4.8,3.4
            c0,0.3,0.1,0.6,0.3,0.8l3.8,3c0.4,0.3,0.4,0.8,0.1,1.2c-5.3,5.3-5.2,13.3-5.2,13.8c0,0,0,0,0,0c1.5,21.2,27.1-1.1,29-2.7
            c0.1-0.1,0.1-0.1,0.2-0.2c1.8-3.4,2.2-9.1-3.6-13.4C308.1,316.2,308,315.8,308.1,315.5"/>
          <path class="st55" d="M308.1,315.5c1.1-2.4,1.4-4.7,1.6-5.5c0-0.2,0-0.5-0.2-0.6c-2.2-2.4-4.6-1.1-5.5-0.5
            c-0.2,0.1-0.3,0.4-0.3,0.6c-0.1,1.6-0.4,3.1-0.9,4.3c-0.1,0.3-0.4,0.5-0.8,0.5c0,0,0,0,0,0c-0.4,0-0.7-0.3-0.8-0.7l-0.2-4.7
            c0-0.2-0.1-0.5-0.3-0.6c-1.9-1.3-3.5-0.6-4.2-0.2c-0.2,0.1-0.4,0.4-0.4,0.7l0.1,5.3c0,0.4-0.2,0.7-0.6,0.8
            c-0.3,0.1-0.5,0.1-0.8,0.2c-0.2,0.1-0.5,0-0.7-0.1c-2.1-1.5-4.8-3.6-5.4-4.1c-0.1,0-0.1-0.1-0.2-0.1c-3.6-1.3-4.5,2.1-4.8,3.4
            c0,0.3,0.1,0.6,0.3,0.8l3.8,3c0.4,0.3,0.4,0.8,0.1,1.2c-5.3,5.3-5.2,13.3-5.2,13.8c0,0,0,0,0,0c1.5,21.2,27.1-1.1,29-2.7
            c0.1-0.1,0.1-0.1,0.2-0.2c1.8-3.4,2.2-9.1-3.6-13.4C308.1,316.2,308,315.8,308.1,315.5z"/>
          <path class="st56" d="M296.6,337.4c0,0-7-1.4-6.2-6.2c0.8-4.7,5.8-4.6,3.5-10.8"/>
          <path class="st57" d="M283.7,314.6c0,0,2.7,1.9,4.9-3.8C288.7,310.8,284.1,309.4,283.7,314.6"/>
        </g>
        <g class="st48">
          <defs>
            <rect id="SVGID_45_" x="244.2" y="291.9" width="113.8" height="113.8"/>
          </defs>
          <clippath id="SVGID_46_">
            <use xlink:href="#SVGID_45_"  style="overflow:visible;"/>
          </clippath>
          <path class="st58" d="M292.8,342.4c0,0-27.7,16.1-4.9,31.5c10.6,6.4,35.1,12.3,42.7,0.9c2.3-4.6,0.6-31.7-19-30.7
            c-1.8-3.9-4.9-11,5.4-16.1c1.7-0.8,2.8-2.6,2.7-4.5c-0.2-3.1-1.9-5.5-5.4-5.5c-6.1,2.1-16.5,4.4-18,11.8
            C294.7,337.1,292.8,342.4,292.8,342.4"/>
          <path class="st59" d="M292.8,342.4c0,0-27.7,16.1-4.9,31.5c10.6,6.4,35.1,12.3,42.7,0.9c2.3-4.6,0.6-31.7-19-30.7
            c-1.8-3.9-4.9-11,5.4-16.1c1.7-0.8,2.8-2.6,2.7-4.5c-0.2-3.1-1.9-5.5-5.4-5.5c-6.1,2.1-16.5,4.4-18,11.8
            C294.7,337.1,292.8,342.4,292.8,342.4z"/>
        </g>
        <g class="st48">
          <defs>
            <rect id="SVGID_47_" x="244.2" y="291.9" width="113.8" height="113.8"/>
          </defs>
          <clippath id="SVGID_48_">
            <use xlink:href="#SVGID_47_"  style="overflow:visible;"/>
          </clippath>
          <path class="st60" d="M291.8,373.4c0,0,1.3-0.8,1.2-4.8c-0.1-4-3.7-5.3-0.8-8.8c2.6-3.1,3.4-0.2,6.7-2.6
            c3.7-2.7,4.7-2.9,4.7-2.9"/>
          <path class="st60" d="M293.8,358.4c0,0-1.6-0.3-1.1-5.3c0.4-5-4.3-2.3-4.3-2.3"/>
          <path class="st60" d="M317.9,375.9c0,0,9.4-0.7,6-8.1c-3.4-7.4,0.3-10,3-10.6"/>
          <path class="st60" d="M323.7,367.8c0,0-3.9,4.8-8.3-3.7c-4.4-8.5-6-3.1-6-3.1"/>
          <path class="st60" d="M313.4,350.9c0,0,7.9,0.3,9,10.9"/>
        </g>
      </g>
    </g>
  </g>
  <g id="eye" class="the-organs">
    <g id="eye_1_">
      <path class="st61" d="M252.8,99.1l-15,1.5c-0.6-1.3-1-2.8-1-4.4c0-2.6,0.9-4.9,2.5-6.7l14,4.5C256.1,94.8,255.6,98.8,252.8,99.1z"
        />
      <g>

          <lineargradient id="SVGID_49_" gradientunits="userSpaceOnUse" x1="371.968" y1="94.7413" x2="376.0014" y2="94.7413" gradienttransform="matrix(-1 0 0 1 611.9818 0)">
          <stop  offset="4.246094e-02" style="stop-color:#A2C5CB"/>
          <stop  offset="0.4057" style="stop-color:#A4C6CC"/>
          <stop  offset="0.5765" style="stop-color:#ACCBD0"/>
          <stop  offset="0.7071" style="stop-color:#B9D3D8"/>
          <stop  offset="0.8172" style="stop-color:#CBDEE2"/>
          <stop  offset="0.9135" style="stop-color:#E2EDEF"/>
          <stop  offset="1" style="stop-color:#FFFFFF"/>
        </lineargradient>
        <path class="st62" d="M237.1,90.1c0,0,0.9-1.5,1.9,0.9c1,2.3,1.7,4.3-0.4,7.7c-0.1,0.1-0.2,0.3-0.3,0.4c-0.4,0.5-1.3,1.3-1.5,0.2
          C236.9,99.3,234.7,94.9,237.1,90.1z"/>

          <lineargradient id="SVGID_50_" gradientunits="userSpaceOnUse" x1="371.968" y1="95.3126" x2="376.0014" y2="95.3126" gradienttransform="matrix(-1 0 0 1 611.9818 0)">
          <stop  offset="4.246094e-02" style="stop-color:#A2C5CB"/>
          <stop  offset="0.4057" style="stop-color:#A4C6CC"/>
          <stop  offset="0.5765" style="stop-color:#ACCBD0"/>
          <stop  offset="0.7071" style="stop-color:#B9D3D8"/>
          <stop  offset="0.8172" style="stop-color:#CBDEE2"/>
          <stop  offset="0.9135" style="stop-color:#E2EDEF"/>
          <stop  offset="1" style="stop-color:#FFFFFF"/>
        </lineargradient>
        <path class="st63" d="M237.1,90.1c0,0,0.9-1.6,1.9,0.9c1,2.5,1.7,4.8-0.4,8.6c-0.1,0.2-0.2,0.3-0.3,0.5c-0.4,0.5-1.3,1.5-1.5,0.3
          C236.9,100.4,234.7,95.5,237.1,90.1z"/>
        <g>
          <path class="st64" d="M237.1,90.1c0.1-0.3,0.3-0.6,0.7-0.6c0.4,0,0.7,0.3,0.9,0.5c0.4,0.5,0.7,1.1,0.9,1.7
            c0.5,1.1,0.9,2.4,0.8,3.7c-0.1,1.3-0.5,2.5-1.1,3.6c-0.2,0.3-0.3,0.5-0.5,0.8c-0.2,0.3-0.4,0.5-0.7,0.7
            c-0.2,0.2-0.5,0.4-0.9,0.5c-0.2,0.1-0.4,0-0.5-0.2c-0.1-0.2-0.1-0.3-0.1-0.5c0.1,0.3,0.3,0.6,0.5,0.4c0.2-0.1,0.4-0.4,0.6-0.6
            c0.2-0.2,0.3-0.5,0.4-0.7l0.3-0.8c0.4-1.1,0.8-2.2,0.8-3.4c0.1-1.1-0.2-2.3-0.6-3.4c-0.2-0.6-0.3-1.2-0.6-1.6
            c-0.1-0.2-0.3-0.5-0.5-0.5C237.6,89.7,237.3,89.9,237.1,90.1z"/>
        </g>
        <g class="st65">
          <g>
            <path class="st64" d="M238.9,99.1c-0.5,0-0.8-0.2-1.1-0.4c-0.2-0.3-0.4-0.6-0.3-1.1c0.5,0,0.8,0.2,1.1,0.4
              C238.8,98.3,239,98.6,238.9,99.1z"/>
          </g>
          <g>
            <path class="st64" d="M239.7,97.7c-0.4,0.2-0.8,0.2-1,0.1c-0.3-0.1-0.5-0.3-0.6-0.8c0.4-0.2,0.8-0.2,1-0.1
              C239.3,97,239.6,97.2,239.7,97.7z"/>
          </g>
          <g>
            <path class="st64" d="M240.1,96.1c-0.2,0.4-0.4,0.5-0.6,0.5c-0.2,0-0.4-0.1-0.6-0.5c0.2-0.4,0.4-0.5,0.6-0.5
              C239.7,95.6,239.9,95.7,240.1,96.1z"/>
          </g>
          <g>
            <path class="st64" d="M240.3,95.5c-0.2,0.4-0.5,0.5-0.7,0.5c-0.2,0-0.5-0.1-0.7-0.5c0.2-0.4,0.5-0.5,0.7-0.5
              C239.9,95,240.1,95.1,240.3,95.5z"/>
          </g>
          <g>
            <path class="st64" d="M240.2,94.6c-0.2,0.4-0.4,0.6-0.7,0.7c-0.3,0-0.6,0-0.9-0.3c0.2-0.4,0.4-0.6,0.7-0.7
              C239.6,94.2,239.9,94.2,240.2,94.6z"/>
          </g>
          <g>
            <path class="st64" d="M239.8,93.3c0,0.4-0.1,0.6-0.3,0.7c-0.2,0.1-0.4,0.1-0.8-0.1c0-0.4,0.1-0.6,0.3-0.7
              C239.2,93.1,239.4,93.1,239.8,93.3z"/>
          </g>
          <g>
            <path class="st64" d="M239.3,92.4c0,0.5-0.1,0.7-0.3,0.8c-0.2,0.1-0.4,0.2-0.9,0c0-0.5,0.1-0.7,0.3-0.8
              C238.6,92.3,238.9,92.2,239.3,92.4z"/>
          </g>
          <g>
            <path class="st64" d="M238.4,90.7c0.2,0.5,0.1,0.9,0,1.2c-0.2,0.3-0.4,0.6-0.9,0.8c-0.2-0.5-0.1-0.9,0-1.2
              C237.6,91.2,237.9,90.9,238.4,90.7z"/>
          </g>
          <g>
            <path class="st64" d="M237,100.4c-0.4-0.4-0.6-0.8-0.6-1.2c0-0.4,0-0.8,0.4-1.3c0.4,0.4,0.6,0.8,0.6,1.2
              C237.4,99.6,237.3,100,237,100.4z"/>
          </g>
        </g>
        <path class="st66" d="M236.9,95.1c0,0.9-0.1,1.6,0.3,1.6c0.5,0,1.4-0.7,1.4-1.6c0-0.9-0.9-1.7-1.4-1.7
          C236.7,93.4,236.9,94.2,236.9,95.1z"/>
      </g>
      <path class="st67" d="M230.2,86.6l23.1,7.3c2.8,0.9,2.3,4.9-0.5,5.2l-17.8,1.8"/>
      <ellipse class="st68" cx="238" cy="95" rx="2" ry="5.3"/>
    </g>
  </g>
  </svg>


        </div>
    </section>

    <section class="grey-container eight-lives">
        <h2 class="hidden">One person can save up to eight lives</h2>
        <div class="row expanded collapse">
            <div class="text-center column">
                <h3>one donor can save up to <span>8 lives.</span></h3>
                <svg version="1.1" id="guy1" class="guy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140 400" style="enable-background:new 0 0 140 400;" xml:space="preserve">
  <style type="text/css">
    .st000{fill:#eeba05;}
  </style>
  <path class="st000" d="M71.7,60.6c16.9,0,30.6-13.6,30.6-30.3C102.2,13.6,88.6,0,71.7,0C54.8,0,41.2,13.6,41.2,30.3
    C41.2,47,54.8,60.6,71.7,60.6z M141.5,99.5c0-15.3-12.5-27.6-27.8-27.6H27.8C12.5,71.9,0,84.3,0,99.5l0.1,111.6
    c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1v-102h5.1v272.8c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V232.6h10
    v149.3c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V109.1h4.9v101.6c0,6.7,5.4,12.1,12.2,12.1c6.7,0,12.2-5.4,12.2-12.1
    L141.5,99.5z"/>
  </svg>
                <svg version="1.1" id="guy2" class="guy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140 400" style="enable-background:new 0 0 140 400;" xml:space="preserve">
  <style type="text/css">
    .st000{fill:#eeba05;}
  </style>
  <path class="st000" d="M71.7,60.6c16.9,0,30.6-13.6,30.6-30.3C102.2,13.6,88.6,0,71.7,0C54.8,0,41.2,13.6,41.2,30.3
    C41.2,47,54.8,60.6,71.7,60.6z M141.5,99.5c0-15.3-12.5-27.6-27.8-27.6H27.8C12.5,71.9,0,84.3,0,99.5l0.1,111.6
    c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1v-102h5.1v272.8c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V232.6h10
    v149.3c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V109.1h4.9v101.6c0,6.7,5.4,12.1,12.2,12.1c6.7,0,12.2-5.4,12.2-12.1
    L141.5,99.5z"/>
  </svg>
                <svg version="1.1" id="guy3" class="guy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140 400" style="enable-background:new 0 0 140 400;" xml:space="preserve">
  <style type="text/css">
    .st000{fill:#eeba05;}
  </style>
  <path class="st000" d="M71.7,60.6c16.9,0,30.6-13.6,30.6-30.3C102.2,13.6,88.6,0,71.7,0C54.8,0,41.2,13.6,41.2,30.3
    C41.2,47,54.8,60.6,71.7,60.6z M141.5,99.5c0-15.3-12.5-27.6-27.8-27.6H27.8C12.5,71.9,0,84.3,0,99.5l0.1,111.6
    c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1v-102h5.1v272.8c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V232.6h10
    v149.3c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V109.1h4.9v101.6c0,6.7,5.4,12.1,12.2,12.1c6.7,0,12.2-5.4,12.2-12.1
    L141.5,99.5z"/>
  </svg>
                <svg version="1.1" id="guy4" class="guy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140 400" style="enable-background:new 0 0 140 400;" xml:space="preserve">
  <style type="text/css">
    .st000{fill:#eeba05;}
  </style>
  <path class="st000" d="M71.7,60.6c16.9,0,30.6-13.6,30.6-30.3C102.2,13.6,88.6,0,71.7,0C54.8,0,41.2,13.6,41.2,30.3
    C41.2,47,54.8,60.6,71.7,60.6z M141.5,99.5c0-15.3-12.5-27.6-27.8-27.6H27.8C12.5,71.9,0,84.3,0,99.5l0.1,111.6
    c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1v-102h5.1v272.8c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V232.6h10
    v149.3c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V109.1h4.9v101.6c0,6.7,5.4,12.1,12.2,12.1c6.7,0,12.2-5.4,12.2-12.1
    L141.5,99.5z"/>
  </svg>
                <svg version="1.1" id="guy5" class="guy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140 400" style="enable-background:new 0 0 140 400;" xml:space="preserve">
  <style type="text/css">
    .st000{fill:#eeba05;}
  </style>
  <path class="st000" d="M71.7,60.6c16.9,0,30.6-13.6,30.6-30.3C102.2,13.6,88.6,0,71.7,0C54.8,0,41.2,13.6,41.2,30.3
    C41.2,47,54.8,60.6,71.7,60.6z M141.5,99.5c0-15.3-12.5-27.6-27.8-27.6H27.8C12.5,71.9,0,84.3,0,99.5l0.1,111.6
    c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1v-102h5.1v272.8c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V232.6h10
    v149.3c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V109.1h4.9v101.6c0,6.7,5.4,12.1,12.2,12.1c6.7,0,12.2-5.4,12.2-12.1
    L141.5,99.5z"/>
  </svg>
                <svg version="1.1" id="guy6" class="guy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140 400" style="enable-background:new 0 0 140 400;" xml:space="preserve">
  <style type="text/css">
    .st000{fill:#eeba05;}
  </style>
  <path class="st000" d="M71.7,60.6c16.9,0,30.6-13.6,30.6-30.3C102.2,13.6,88.6,0,71.7,0C54.8,0,41.2,13.6,41.2,30.3
    C41.2,47,54.8,60.6,71.7,60.6z M141.5,99.5c0-15.3-12.5-27.6-27.8-27.6H27.8C12.5,71.9,0,84.3,0,99.5l0.1,111.6
    c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1v-102h5.1v272.8c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V232.6h10
    v149.3c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V109.1h4.9v101.6c0,6.7,5.4,12.1,12.2,12.1c6.7,0,12.2-5.4,12.2-12.1
    L141.5,99.5z"/>
  </svg>
                <svg version="1.1" id="guy7" class="guy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140 400" style="enable-background:new 0 0 140 400;" xml:space="preserve">
  <style type="text/css">
    .st000{fill:#eeba05;}
  </style>
  <path class="st000" d="M71.7,60.6c16.9,0,30.6-13.6,30.6-30.3C102.2,13.6,88.6,0,71.7,0C54.8,0,41.2,13.6,41.2,30.3
    C41.2,47,54.8,60.6,71.7,60.6z M141.5,99.5c0-15.3-12.5-27.6-27.8-27.6H27.8C12.5,71.9,0,84.3,0,99.5l0.1,111.6
    c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1v-102h5.1v272.8c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V232.6h10
    v149.3c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V109.1h4.9v101.6c0,6.7,5.4,12.1,12.2,12.1c6.7,0,12.2-5.4,12.2-12.1
    L141.5,99.5z"/>
  </svg>
                <svg version="1.1" id="guy8" class="guy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140 400" style="enable-background:new 0 0 140 400;" xml:space="preserve">
  <style type="text/css">
    .st000{fill:#eeba05;}
  </style>
  <path class="st000" d="M71.7,60.6c16.9,0,30.6-13.6,30.6-30.3C102.2,13.6,88.6,0,71.7,0C54.8,0,41.2,13.6,41.2,30.3
    C41.2,47,54.8,60.6,71.7,60.6z M141.5,99.5c0-15.3-12.5-27.6-27.8-27.6H27.8C12.5,71.9,0,84.3,0,99.5l0.1,111.6
    c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1v-102h5.1v272.8c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V232.6h10
    v149.3c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V109.1h4.9v101.6c0,6.7,5.4,12.1,12.2,12.1c6.7,0,12.2-5.4,12.2-12.1
    L141.5,99.5z"/>
  </svg>
                <svg version="1.1" id="guy9" class="guy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140 400" style="enable-background:new 0 0 140 400;" xml:space="preserve">
  <style type="text/css">
    .st000{fill:#eeba05;}
  </style>
  <path class="st000" d="M71.7,60.6c16.9,0,30.6-13.6,30.6-30.3C102.2,13.6,88.6,0,71.7,0C54.8,0,41.2,13.6,41.2,30.3
    C41.2,47,54.8,60.6,71.7,60.6z M141.5,99.5c0-15.3-12.5-27.6-27.8-27.6H27.8C12.5,71.9,0,84.3,0,99.5l0.1,111.6
    c0,6.7,5.4,12.1,12.1,12.1c6.7,0,12.1-5.4,12.1-12.1v-102h5.1v272.8c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V232.6h10
    v149.3c0,10,8.2,18.1,18.2,18.1c10,0,18.2-8.1,18.2-18.1V109.1h4.9v101.6c0,6.7,5.4,12.1,12.2,12.1c6.7,0,12.2-5.4,12.2-12.1
    L141.5,99.5z"/>
  </svg>
            </div>
        </div>
    </section>

    <section class="ekg red-container">
        <h2 class="hidden">Every 3 days someone dies waiting for an organ</h2>
        <div class="row expanded collapse">
            <h3 class="small-6 float-left column">Every 3 days someone <span>dies</span> waiting for a <span>critical</span> donation</h3>
            <div class="heart-svg small-4 float-right column"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
    <style type="text/css">
        .st3{fill:#FFFFFF;}
        .st4{fill:none;stroke:#ED1C24;stroke-width:5;stroke-miterlimit:10;}
    </style>
    <path id="heartekg" class="st3" d="M144,15.3c-17.9,0-33.8,8.4-44,21.5c-10.2-13-26.1-21.5-44-21.5c-30.9,0-56,25.1-56,56
        c-0.4,26.3,16,58.9,100,116.5c71.8-45.1,99.7-83.1,100-116.5C200,40.4,174.9,15.3,144,15.3z"/>
    <line id="flatline" class="st4" x1="0" y1="95.3" x2="200" y2="95.3"/>
    <path id="ekg" class="st4" d="M0.3,95c18.6,0.1,37.1,0.2,55.7,0.3l10.7,21.3l23-58.7l20.7,95L134,80l4.7,16.3h52.7h8.7"/>
    </svg></div>


        </div>
    </section>

    <section class="signed-up">
        <h2 class="hidden">Since you've been here you could have signed up <span></span></h2>
        <div class="row expanded collapse">
            <div class="text-center column">
                <h3 class="small-4 float-center top">you could have<br>already signed up</h3>
                <div>
                    <ul>
                        <li class="left" id="left">0</li>
                        <li class="right" id="right">0</li>
                    </ul>
                </div>
                <h3 class="small-4 float-center bot" id="plural">time since you've<br>been here</h3>
            </div>
        </div>
    </section>

    <footer>
        <h2 class="hidden">doc outline title</h2>
        <div class="">
            <div id="stepOne" class="footer-block text-center grey-bg">
                <h3>step 1</h3>
                <p>Register to be a donor <a href="http://www.beadonor.ca">here</a></p>
            </div>
            <div class="footer-block text-center grey-bg">
                <h3>step 2</h3>
                <p>Tell your loved ones about it.</p>
            </div>
            <a id="share" href="javascript:void(0)">
            <div class="footer-block text-center grey-bg">
                <h3>step 3</h3>
                <p>Click here to help us spread the word.</p>
            </div>
            </a>
        </div>
    </footer>

    <script src="js/map.js"></script>
    <script src="js/circleAnimate.js"></script>
    <script src="js/panel.js"></script>
    <!-- <script src="js/ekg.js"></script> -->
    <script src="js/anatomy.js"></script>
    <script src="js/eight.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/share.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
</body>

</html>
