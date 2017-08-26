<iframe src='/inwidget/index.php' scrolling='no' frameborder='no'
        style='border:none;width:260px;height:330px;overflow:hidden;'></iframe>



<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>

<script type="text/javascript">
  VK.init({apiId: 2954653, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
  VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script>
<div class="fb-comments" data-href="http://localhost/instagram.php" data-numposts="5"></div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.10&appId=189646434892267";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>