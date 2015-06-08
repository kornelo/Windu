<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1&appId=122630931244465";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

{if $params.showFaces==1}{$params.showFaces ='true'}{/if}
{if $params.showFaces==''}{$params.showFaces ='false'}{/if}
{if $params.header==1}{$params.header ='true'}{/if}
{if $params.header==''}{$params.header ='false'}{/if}
{if $params.stream==1}{$params.stream ='true'}{/if}
{if $params.stream==''}{$params.stream ='false'}{/if}


<div class="fb-like-box" data-href="http://facebook.com/{$params.fanpage}" data-width="{$params.width}" data-height="{$params.height}" data-show-faces="{$params.showFaces}" data-stream="{$params.stream}" data-header="{$params.header}"></div>