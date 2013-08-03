<div id="main">
    <div id="content-holder">        
        <div class="main-filter ">
            <ul class="content-type">
                <li> <a class="current" href="{$baseurl}/hot"><strong>{$lang172}</strong></a></li>
                <li> <a class="" href="{$baseurl}/trending"><strong>{$lang173}</strong></a></li>
                <li> <a class="" href="{$baseurl}/vote"><strong>{$lang174}</strong></a></li>                
            </ul>
            {if $smarty.session.USERID ne ""}
                {if $smarty.session.FILTER eq "1"}
                <a class="safe-mode-switcher on" href="{$baseurl}/safe?m={$eurl}">&nbsp;</a>
                {else}
                <a class="safe-mode-switcher off" href="{$baseurl}/safe?m={$eurl}&o=1">&nbsp;</a>
                {/if}
            {else}
            	<a class="safe-mode-switcher on" href="{$baseurl}/login">&nbsp;</a>
            {/if}
        </div>
        <div id="content" listPage="hot">            
            <div id="use-tips">
                <div id="view-info" class="list-tips">
                    <div id="shortcut-event-label" style="display:none">{$lang171}</div>
                    <span><b>{$lang169}</b>: {$lang170}</span>
                    <a href="#keyboard" class="keyboard_link">{$lang168}</a>                    
                </div>
            </div>
            <div id="entries-content" class="list">
                <ul id="entries-content-ul" class="col-1">
                    {section name=i loop=$posts}
                    {include file="posts_bit.tpl"}
                    {/section}                    
                </ul>
                <div id="lastPostsLoader"></div>
                {literal}
                <script type="text/javascript">
				$(document).ready(function(){
					var tpage = 2;
					function lastAddedLiveFunc()
					{
						$('div#lastPostsLoader').html('');
						$.get("{/literal}{$baseurl}/{literal}indexmore.php?page="+tpage, function(data){
							if (data != "") {
								$(".col-1").append(data);
							}
							$('div#lastPostsLoader').empty();
						});
					};
					$(window).scroll(function(){
				 
						var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
						var  scrolltrigger = 0.95;
				 
						if  ((wintop/(docheight-winheight)) > scrolltrigger) {
						 lastAddedLiveFunc();
						 tpage = tpage+1;
						 $('#backtotop').show();
						}
					});
				});
				</script>
                {/literal}  
            </div>	
        </div>
    </div>
</div>
{include file='vote_js.tpl'}
{include file='right.tpl'}
{literal}
<script type="text/javascript">
var adloca=$('#moving-boxes').offset().top; 
 $(window).scroll(function () { 
    var curloca=$(window).scrollTop();
    if(curloca>adloca){
        $('#moving-boxes').css('position','fixed');
        $('#moving-boxes').css('top','55px');
        $('#moving-boxes').css('z-index','200');
    };
    if(curloca <= adloca){
        $('#moving-boxes').css('position','static');
        $('#moving-boxes').css('top','!important');
        $('#moving-boxes').css('z-index','!important');
    };
    });
</script> 
{/literal}   
<div id="footer" class="">