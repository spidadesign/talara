//Puts text inline after more button is clicked on team page
$(".full-about.collapse").prev('p').css('display', 'inline');

//Changes text in More button on team page
$("button.more").click(function(){
	if($(this).hasClass('alive')){
		$(this).removeClass('alive');
		$(this).text(function () {
			return $(this).text().replace("Less", "More"); 
		});
	}
	else{
		$(this).addClass('alive');
		$(".alive").text(function () {
			return $(this).text().replace("More", "Less"); 
		});
	}
});

//Adds responsive class to images on single strategy page
$('.single-strategy img.size-medium').addClass('img-responsive');

//Typekit font
(function(d) {
    var config = {
      kitId: 'xlw8cob',
      scriptTimeout: 3000
    },
    h=d.documentElement,t=setTimeout(function(){
    	h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";
    },
    config.scriptTimeout),tk=d.createElement("script"),
    f=false,s=d.getElementsByTagName("script")[0],a;
    h.className+=" wf-loading";
    tk.src='//use.typekit.net/'+config.kitId+'.js';
    tk.async=true;
    tk.onload=tk.onreadystatechange=function(){
    	a=this.readyState;
    	if(f||a&&a!=="complete"&&a!=="loaded")
    		return;
    	f=true;
    	clearTimeout(t);
    	try{Typekit.load(config)}catch(e){}};
    	s.parentNode.insertBefore(tk,s)
  })(document);

