twitterFetcher.fetch('449434676592013312', 'lastTweets', 3, true, false); // Call function to display last Tweets

/*$('#content').infinitescroll({
 
    navSelector  : ".navigation",            
                   // selector for the paged navigation (it will be hidden)
    nextSelector : ".navigation a",    
                   // selector for the NEXT link (to page 2)
    itemSelector : "#content .articleBG"          
                   // selector for all items you'll retrieve

  });*/


    $(function(){
        $(".topText").typed({
            strings: ["Hi!", "I love web dev.", "I craft backends.", "I'm a hiker.", "My name is André!"],
            typeSpeed: 30, // typing speed
            backDelay: 500, // pause before backspacing
            loop: false, // loop on or off (true or false)
            loopCount: false, // number of loops, false = infinite
            callback: function(){ } // call function after typing is done
        });
    });

var fadeStart=0 // 100px scroll or less will equiv to 1 opacity
    ,fadeUntil=220 // 200px scroll or more will equiv to 0 opacity
    ,fading = $('.headerInner')
;

$(window).bind('scroll', function(){
    var offset = $(document).scrollTop()
        ,opacity=0
    ;
    if( offset<=fadeStart ){
        opacity=1;
    }else if( offset<=fadeUntil ){
        opacity=1-offset/fadeUntil;
    }
    fading.css('opacity',opacity);
});