
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<meta name="robots" content="noindex" />
<META NAME="GOOGLEBOT" CONTENT="NOINDEX" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="https://rawgit.com/hernio/player/master/prime.min.css" rel="stylesheet" type="text/css" />
<link href="https://rawgit.com/hernio/player/master/jw-logo-bar.css" rel="stylesheet" type="text/css" />
<style type="text/css">
*{margin:0;padding:0}#picasa{position:absolute;width:100%!important;height:100%!important}
</style>
<style type="text/css">
#ads-video{position: absolute;width: 300px;height: 250px;top: 0;right: 0;bottom: 0;left: 0;z-index: 9999;background: transparent;margin: auto;padding: 5px;}.jbtn {background: #A90000;color: #fff;border: 1px solid #fff;border-radius: 3px;padding: 2px;cursor: pointer;}.jbtn:hover {background: #F00;}
</style>
</head>
<body>
<script type="text/javascript" src="https://rawgit.com/hernio/player/master/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/hernio/player/master/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="Ywok59g9j93GtuSU7+axNzjIp/TBfiK4s0vvYg==";</script>
<script type="text/javascript" src="https://rawgit.com/hernio/player/master/jw-logo-bar.js"></script>
<div>

<center>
<div id="picasa" class="picasa"></div>'
<script type="text/javascript">
 	var playerInstance = jwplayer("picasa");
		playerInstance.setup({
		id:'picasa',
		controls: true,
		displaytitle: true,
		flashplayer: "https://rawgit.com/hernio/player/master/jwplayer.flash.swf",
		width: "100%",
		height: "520px",
		aspectratio: "16:9",
		fullscreen: "true",
		primary: 'html5',
		provider: 'http',
		autostart: false,
		abouttext: "www.nio21.ga",
		aboutlink: "http://www.nio21.ga",
		image: "",
		sources: [{file:"https://storage.googleapis.com/united-storm-188202.appspot.com/The%20Son%20of%20Bigfoot/The%20Son%20of%20Bigfoot%202017.mp4",label:"HD",type: "video/mp4"}],
	tracks: [{ 
		    file: '//yourplayer.us/e/getsub.php?linksub=', 
		    label: 'English', 
		    kind: 'captions',
		    "default":true
		  }],
     captions: {
        fontSize: 15,
        fontFamily:"Verdana",
        backgroundOpacity: 0,
        edgeStyle: 'uniform'
    },
"plugins":{
				"https://rawgit.com/hernio/player/master/jw7ios7fix.js":{},
			"https://rawgit.com/hernio/player/master/jwioscaptions.js":{}
		},

			sharing:{
			    link: "",
			    code: "",
				heading: "Share",
				sites: ["facebook","twitter","tumblr","googleplus","reddit","linkedin","interest","email"],
			},
			skin: {
				name: "prime",
			},
			logo: {
				file: '',
			        logoBar: 'https://yourplayer.us/e/jwplayer/logoyourplayer.png',
				target: 'blank',
				link: 'http://nio21.gas',
				position: "top-left",
			},

	});
	playerInstance.on('ready',function() {
		jwLogoBar.addLogo(playerInstance);
	});
</script>

</body>
</html>
