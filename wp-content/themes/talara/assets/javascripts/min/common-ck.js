$(".full-about.collapse").prev("p").css("display","inline"),$("button.more").click(function(){$(this).hasClass("alive")?($(this).removeClass("alive"),$(this).text(function(){return $(this).text().replace("Less","More")})):($(this).addClass("alive"),$(".alive").text(function(){return $(this).text().replace("More","Less")}))}),$(".single-strategy img.size-medium").addClass("img-responsive"),function(e){var t={kitId:"xlw8cob",scriptTimeout:3e3},s=e.documentElement,i=setTimeout(function(){s.className=s.className.replace(/\bwf-loading\b/g,"")+" wf-inactive"},t.scriptTimeout),a=e.createElement("script"),n=!1,l=e.getElementsByTagName("script")[0],c;s.className+=" wf-loading",a.src="//use.typekit.net/"+t.kitId+".js",a.async=!0,a.onload=a.onreadystatechange=function(){if(c=this.readyState,!(n||c&&"complete"!==c&&"loaded"!==c)){n=!0,clearTimeout(i);try{Typekit.load(t)}catch(e){}}},l.parentNode.insertBefore(a,l)}(document);