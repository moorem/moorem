var Home={initialized:false,initialize:function(){if(this.initialized)return;this.initialized=true;this.build();this.events()},build:function(){if($("#fcSlideshow").get(0)){$("#fcSlideshow").flipshow();setInterval(function(){$("#fcSlideshow div.fc-right span:first").click()},3e3)}if($("#revolutionSlider").get(0)){var e=$("#revolutionSlider").revolution({delay:9e3,startheight:500,startwidth:960,hideThumbs:10,thumbWidth:100,thumbHeight:50,thumbAmount:5,navigationType:"both",navigationArrows:"verticalcentered",navigationStyle:"round",touchenabled:"on",onHoverStop:"on",navOffsetHorizontal:0,navOffsetVertical:20,stopAtSlide:-1,stopAfterLoops:-1,shadow:1,fullWidth:"on"});$("#revolutionSlider .caption").on("mousedown",function(t){t.preventDefault();e.revpause();return false})}if($("#revolutionSliderFullScreen").get(0)){var e=$("#revolutionSliderFullScreen").revolution({delay:9e3,startwidth:1170,startheight:600,hideThumbs:200,thumbWidth:100,thumbHeight:50,thumbAmount:5,navigationType:"both",navigationArrows:"verticalcentered",navigationStyle:"round",touchenabled:"on",onHoverStop:"on",navOffsetHorizontal:0,navOffsetVertical:20,stopAtSlide:-1,stopAfterLoops:-1,shadow:0,fullWidth:"on",fullScreen:"on",fullScreenOffsetContainer:".header"})}if($("#nivoSlider").get(0)){$("#nivoSlider").nivoSlider()}},events:function(){this.moveCloud()},moveCloud:function(){var e=this;$(".cloud").animate({top:"+=20px"},3e3,"linear",function(){$(".cloud").animate({top:"-=20px"},3e3,"linear",function(){e.moveCloud()})})}};Home.initialize()