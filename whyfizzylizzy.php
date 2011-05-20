<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="title" content="Fizzy Lizzy" />
  <meta name="description" content="Award-winning blend of fruit juice + fizzy water with no added sugars or preservatives; average of 60% juice/bottle available in eight delicious flavors." />
  <meta name="keywords" content="fizzy lizzy, healthy soda, natural" />
  <meta name="robots" content="index, follow" />
  <meta name="language" content="en" />
  <title>Why Fizzy Lizzy?</title>
  
  <meta name="viewport"  content="width=960"/>
  <link rel="shortcut icon" href="http://29.media.tumblr.com/avatar_a3363fd03629_16.png">
  <link rel="alternate" type="application/rss+xml" href="http://www.fizzylizzy.com/rss">
  <link rel="apple-touch-icon" href="http://26.media.tumblr.com/avatar_a3363fd03629_128.png"></link>

  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript">
    function getUrlVars(){
      var vars = [], hash;
      var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
      for(var i = 0; i < hashes.length; i++){
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
      }
      return vars;
    }
    
    var showposts = getUrlVars()["showposts"];
  
    if(!showposts && window.location == "http://www.fizzylizzy.com/"){
      window.location="http://www.fizzylizzy.com/home";
    }
    
    $(document).ready(function(){
      var uri = window.location.pathname.replace("/","");
      
      if(uri == "grape" || uri == "pineapple" || uri == "rasplemon" || uri == "grapefruit" || uri == "apple" || uri == "cranberry" || uri == "tangerinepassion"){
        uri = 'drinks';
      } else if(uri == "tflchs" || uri == "sofi" || uri == "lizzy" || uri == "faqs"){
        uri = 'aboutus';
      } else if(showposts){
        uri = 'shoutouts';
      }
      
      $('.primary_nav ul li.'+uri).addClass('current');
    });
  </script>
  
  <link rel="stylesheet" type="text/css" media="screen" href="http://s.westernmonarchy.com/fizzylizzy/css/font-face.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="http://s.westernmonarchy.com/fizzylizzy/css/reset.css" />

  <style type="text/css">
    body {
      font: 16px/1.4 'NobileRegular', Arial, sans-serif;
    }
    
    a { text-decoration: none; color: #622323; }
    a:hover { color: #ee3524; }
    
    .eyebrow { height: 3px; background-color: #350100; }
    .header { width: 1000px; margin: 0 auto; padding: 0 12px; overflow: hidden; }
    .header h1.logo { float: left; width: 150px; height: 150px; margin: 5px 0 0 65px; }
    .header h1.logo a { display: block; width: 150px; height: 150px; text-indent: -9000px; overflow: hidden; background: transparent url(http://s.westernmonarchy.com/fizzylizzy/images/fl_sprite.png) no-repeat -1px -1px ; }
    
    .header .primary_nav { float: right; width: 710px; margin: 45px 0 0 ; border: 3px solid #e9dcbb; border-width: 3px 0; }
    .header .primary_nav li { display: inline-block; padding: 8px 5px; }
    .header .primary_nav li a { display:block; padding: 5px 5px 5px; text-decoration:none; font: 15px/1 'NobileBold', Calibri, Arial, sans-serif;  color: #ee3524; }
    sup { font-size:0.6em; vertical-align: super; }
    .header .primary_nav li.current { padding-left: 4px; background: transparent url(http://s.westernmonarchy.com/fizzylizzy/images/btn_nav_left.png) no-repeat 0 8px; }
    .header .primary_nav li.current a { padding-right: 8px; background: #e2b059 url(http://s.westernmonarchy.com/fizzylizzy/images/btn_nav_right.png) no-repeat right top; letter-spacing: -0.5px; color: #fff; }
    
    .main_content_container { padding: 21px 0 0; background: #f1dcbb url(http://s.westernmonarchy.com/fizzylizzy/images/border_main.png) repeat-x 0 0; }
    .main_content_container .main_content { width: 980px; margin: 0 auto; padding: 0 0 0 10px; overflow: hidden; color: #aa3d3d; }
    body.home .main_content_container .main_content { background: transparent url(http://s.westernmonarchy.com/fizzylizzy/images/texture_home_bubbles.png) no-repeat 0 0; }
    body.inner .main_content_container .main_content { background: transparent url(http://s.westernmonarchy.com/fizzylizzy/images/texture_main_logo.png) no-repeat 200px -115px; }
    .main_content_container .main_content .half_col { width: 50%; float: left; }
    .main_content_container .main_content .half_col h3 { margin-top: 25px; font: 19px/1.3 'NobileBold', Arial, sans-serif; }
    .main_content_container .main_content .half_col a.banner,
    .main_content_container .main_content .half_col a.banner img { display: block; }
    .main_content_container .main_content .half_col a.banner img { margin-bottom: 10px; }
    .main_content_container .main_content .colA { float: left; width: 300px; margin-right: 40px; }
    .main_content_container .main_content .colB { float: left; width: 640px }
    .main_content_container .main_content .doublecol { width: 820px; margin: 0 auto; padding: 0 0 40px; overflow: hidden; text-align: center; }
    
    .main_content_container .main_content .colA img { display: block; margin: 0 auto; }
    .main_content_container .main_content h1 { margin-top: 40px; font: 44px/1.2 'NobileBold', Arial, sans-serif; letter-spacing: -2px; }
    .main_content_container .main_content h2.blocked { clear:both; margin: 40px auto 0; padding: 10px; background: #aba197; font: 36px/1 'NobileBold', Arial, sans-serif; color: #fff; }
    .main_content_container .main_content h2.blocked span { font-family: 'NobileRegular', Arial, sans-serif; }
    .main_content_container .main_content h2 { margin: 20px 0; font: 19px/1.4 'MatizRegular', Arial, sans-serif; letter-spacing: -1px; }
    .main_content_container .main_content h3.special span { display: block; font-size: 0.7em; }
    .main_content_container .main_content p { margin-top: 24px; font: 16px/1.4 'NobileRegular', Arial, sans-serif; }
    .main_content_container .main_content .doublecol p { width: 65%; margin: 24px auto; }
    .main_content_container .main_content .doublecol .half_col p,
    .main_content_container .main_content .doublecol .half_col ul { font-size: 0.8em; }
    .main_content_container .main_content hr { height: 3px; clear: both; margin: 10px 0 ; border: 0; background-color: #aa3d3d; color:#aa3d3d; }
    .main_content_container .main_content table { width: 100%; margin: 24px 0 40px; padding: 0 8px; color: #fff; }
    .main_content_container .main_content table td { padding: 10px 10px; background: #aba197; border-right: 2px solid #514f56; font: 16px/1 'NobileBold', Arial, sans-serif; text-align: center; }
    .main_content_container .main_content table td:last-child { border-right-width: 0; }
    
    .footer_container { padding: 21px 0 ; background: #350100 url(http://s.westernmonarchy.com/fizzylizzy/images/border_footer.png) repeat-x 0 0; }
    .footer_container .footer { width: 980px; margin: 0 auto; padding: 10px 0 0 10px; overflow: hidden; background: transparent url(http://s.westernmonarchy.com/fizzylizzy/images/texture_footer_bubbles.png) no-repeat 0 0; overflow: hidden; color: #fff; }
    
    .footer a { color: #ee3524; }
    .footer .main_callout { float: left; width: 440px; margin: 5px 80px 0 0; }
    .footer .main_callout h4 { float:left; font: 26px/1 'NobileBold', Arial, sans-serif; text-align: right; text-transform: uppercase; }
    .footer .main_callout h4 span { display: block; font-size: 48px; }
    .footer .main_callout .desc { float: right; width: 235px; }
    .footer .main_callout p { font: 12px/1.4 'NobileBold', Arial, sans-serif; }
    .footer .social { float: left; width: 240px; margin-top: 10px; }
    .footer .social dl dt { display: none; }
    .footer .social dl dd { margin-bottom: 8px; font-size: 11px; color: #808080; }
    .footer .social dl dd.twitter { padding-left: 20px; background: transparent url(http://s.westernmonarchy.com/fizzylizzy/images/icon_footer_twitter.png) no-repeat 0 0; }
    .footer .social dl dd.rss { padding-left: 20px; background: transparent url(http://s.westernmonarchy.com/fizzylizzy/images/icon_footer_rss.png) no-repeat 0 0; }
    .footer .footer_nav { width: 220px; float: left; }
    .footer .footer_nav ul { overflow: hidden; }
    .footer .footer_nav ul li  { float:left; width: 110px; }
    .footer .footer_nav ul li a { text-decoration:none; font: 12px/1 'Lucida Grande', Verdana, sans-serif; color: #fff; }
    
    .footer a.btn { display:block; margin-top: 5px; padding: 8px 0 5px 4px; background: #ee3524 url(http://s.westernmonarchy.com/fizzylizzy/images/btn_footer_left.png) no-repeat 0 6px; text-align: center; text-decoration: none; font: 16px/1 'NobileBold', Arial, sans-serif; color: #fff; }
    .footer a.btn span { display:block; padding-right: 8px; background: #ee3524 url(http://s.westernmonarchy.com/fizzylizzy/images/btn_footer_right.png) no-repeat right top; }
  </style>
</head>

<body class="inner">
  
  <div class="eyebrow"></div><!-- /.eyebrow -->
  
  <div class="logo_texture"></div><!-- /.logo_texture -->
  
  <div class="header">
    <h1 class="logo"><a href="/">Fizzy Lizzy</a></h1>
    
    <div class="primary_nav">
      <ul>
        <li class="aboutus"><a href="/aboutus">About Us</a></li>
        <li class="drinks"><a href="/drinks">Drinks</a></li>
        <li class="shoutouts"><a href="/?showposts=true">Shoutouts</a></li>
        <li class="whyfizzylizzy"><a href="/whyfizzylizzy">Why Fizzy Lizzy?</a></li>
        <li class="accolades"><a href="/accolades">Accolades</a></li>
        <li class="contact"><a href="/contact">Contact a Fizzicist<sup>&trade;</sup></a></li>
      </ul>
    </div><!-- /.primary_nav -->
  </div><!-- /.header -->
  
  <div class="main_content_container">
    <div class="main_content">
      <div class="doublecol">
        <h2 class="blocked">Why Fizzy Lizzy? <span>Sometimes, less is more.</span></h2>
        <p>While the other brand seems to have lots of juice, look closer. It has more fillers than grapefruit juice. And what&rsquo;s up with the &ldquo;gum arabic&rdquo;? But, ultimately, it&rsquo;s about taste. Try them both.</p>
        <p>We think you&rsquo;ll like Fizzy Lizzy. A lot.</p>
        <div class="half_col"><h3 class="special">Fizzy Lizzy<span>Grapefruit<br />62% juice</span></h3></div>
        <div class="half_col"><h3 class="special">Izze<span>Grapefruit<br />70% juice</span></h3></div>
        <hr />
        <div class="half_col">
          <ul>
            <li>Triple-filtered carbonated water</li>
            <li>Rio red grapefruit juice concentrate</li>
            <li>white grape juice concentrate</li>
            <li>elderberry color</li>
            <li>vitamin C</li>
          </ul>
        </div>
        <div class="half_col">
          <ul>
            <li>apple juice concentrate</li>
            <li>white grape concentrate</li>
            <li>orange juice concentrate</li>
            <li>grapefruit concentrate</li>
            <li>sparkling water</li>
            <li>citric acid</li>
            <li>natural flavor</li>
            <li>gum arabic</li>
            <li>red radish juice (color)</li>
          </ul>
        </div>
        
        <div class="half_col"><p>The takeaway?<br />Lots of Grapefruit<br />Tastes like Grapefruit</p></div>
        <div class="half_col"><p>The takeaway?<br />Lots of cheap filler juice.<br />Very little Grapefruit</p></div>
        <div class="clear"></div>
        
        <h2 class="blocked">Why Fizzy Lizzy? <span>Sometimes, less isn&rsquo;t more.</span></h2>
        <div class="half_col"><h3 class="special">Fizzy Lizzy<span>Grapefruit<br />62% juice</span></h3></div>
        <div class="half_col"><h3 class="special">GuS<span>Star Ruby Grapefruit<br />5% juice</span></h3></div>
        <hr />
        <div class="half_col">
          <ul>
            <li>Triple-filtered carbonated water</li>
            <li>Rio red grapefruit juice concentrate</li>
            <li>white grape juice concentrate</li>
            <li>elderberry color</li>
            <li>vitamin C</li>
          </ul>
        </div>
        <div class="half_col">
          <ul>
            <li>purified sparkling water</li>
            <li>cane sugar</li>
            <li>grapefruit concentrate</li>
            <li>orange juice concentrate</li>
            <li>natural flavors</li>
            <li>citric acid</li>
            <li>carrot extract (for color)</li>
            <li>ester gum</li>
          </ul>
        </div>
        <div class="half_col"><p>The takeaway?<br />Lots of Grapefruit<br />Tastes like Grapefruit</p></div>
        <div class="half_col"><p>The takeaway?<br />Very little juice and lots of sugar added</p></div>
        
        <div class="clear"></div>
        <p>True, the other brand has fewer calories. But where&rsquo;s the juice? And what&rsquo;s up with that added sugar? Fizzy Lizzy has over ten times the juice and <em>no</em> added sugars. But, ultimately, it&rsquo;s about taste. Try them both.</p>
        <p>We think you&rsquo;ll like Fizzy Lizzy. A lot.</p>
      </div><!-- /.doublecol -->
    </div><!-- /.main_content -->
  </div><!-- /.main_content_container -->
  
  <div class="footer_container">
    <div class="footer">
      <div class="main_callout">
        <h4>Sharing is <span>Caring</span></h4>
        <div class="desc">
          <p>Share a flavor idea, art you&rsquo;ve made, songs, poems, love notes&hellip; anything!</p>
          <a href="/submit" class="btn" style="width:135px;"><span>Shake it Up &raquo;</span></a>
        </div>
      </div><!-- /.main_callout -->

      <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
      <div class="social">
        <dl>
          <dt>Facebook</dt>
          <dd><fb:like href="https://www.facebook.com/TheFizzyLizzy" show_faces="false" width="235" colorscheme="dark" font="lucida grande"></fb:like></dd>
          <dt>Twitter</dt>
          <dd class="twitter">Follow <a href="http://twitter.com/theefizzylizzy" target="_blank">@FizzyLizzy</a> on Twitter</dd>
          <dt>RSS</dt>
          <dd class="rss">Get the <a href="/rss">RSS</a> feed.</dd>
        </dl>
      </div><!-- /.social -->
      
      <div class="footer_nav">
        <ul>
          <li><a href="/aboutus">About Us</a></li>
          <li><a href="/accolades">Accolades</a></li>
          <li><a href="/drinks">Drinks</a></li>
          <li><a href="/?showposts=true">Shoutouts</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/whyfizzylizzy">Why Fizzy Lizzy?</a></li>
          <li><a href="/wholesale">Wholesale</a></li>
          <li><a href="/archive">Archive</a></li>
        </ul>
      </div><!-- /.footer_nav -->
    </div><!-- /.footer -->
  </div><!-- /.footer_container -->
</body>
</html>