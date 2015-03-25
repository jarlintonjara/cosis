<script type="text/javascript" src="<?php echo base_url()?>assets/flot/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/lot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/flot/jquery.flot.resize.min.js"></script>

</div><!-- content -->

        </div>
        <div class="clear"></div>
        <footer>
            <div id="footer">
                <div id="aqua-footer">
                    <div class="aqua-container">
                    <i>By String</i>
                    </div>
                </div>
            </div>
        </footer>

        


        
                        
            <script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
jQuery('a[rel="tooltip"]').tooltip();
jQuery('a[rel="popover"]').popover();
jQuery('#yw0').tab('show');

                var sin = [], cos = [];
                for (var i = 0; i < 14; i += 0.5) {
                    sin.push([i, Math.sin(i)]);
                    cos.push([i, Math.cos(i)]);
                }
                var plot = $.plot($("#graph1"),
                [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
                    series: {
                        lines: { show: true },
                        points: { show: true }
                    },
                    
                    colors: ["#267da2","#dc8900", "#436fa3", "#99ccd9","#bcbcbc", "#1e4555", "#353535"],
                    grid: { hoverable: true, clickable: true },
                    yaxis: { min: -1.2, max: 1.2 }
                });
                var data = [
                    { label: "Series1",  data: 10},
                    { label: "Series2",  data: 30},
                    { label: "Series3",  data: 90},
                    { label: "Series4",  data: 70},
                    { label: "Series5",  data: 80},
                    { label: "Series6",  data: 110}
                ];
              $.plot($("#graph2"), data, 
                {
                    series: {
                        pie: { 
                            show: true
                        }
                    },
                    colors: ["#267da2","#dc8900", "#436fa3", "#99ccd9","#bcbcbc", "#1e4555", "#353535"],
                    legend: {
                        show: true
                    },
                    grid: { hoverable: true, clickable: true }
                });
                var data = [], totalPoints = 100;
                function getRandomData() {
                    if (data.length > 0)
                        data = data.slice(1);
                    while (data.length < totalPoints) {
                        var prev = data.length > 0 ? data[data.length - 1] : 50;
                        var y = prev + Math.random() * 10 - 5;
                        if (y < 0)
                            y = 0;
                        if (y > 100)
                            y = 100;
                        data.push(y);
                    }
                    var res = [];
                    for (var i = 0; i < data.length; ++i)
                        res.push([i, data[i]])
                    return res;
                }
                var updateInterval = 100;
                var options = {
                    series: { shadowSize: 0 }, // drawing is faster without shadows
                    colors: ["#267da2","#dc8900", "#436fa3", "#99ccd9","#bcbcbc", "#1e4555", "#353535"],
                    yaxis: { min: 0, max: 100 },
                    xaxis: { show: false }
                };
                var plot = $.plot($("#graph3"), [ getRandomData() ], options);
                function update() {
                    plot.setData([ getRandomData() ]);
                    
                    plot.draw();
                    setTimeout(update, updateInterval);
                }
                update();
                
jQuery('#yw6 .alert').alert();
guiders.createGuider({'id':'1','buttons':[{'name':'Next'}],'description':'This is sample Guide tour. You can use it to teach new users, show some new functions etc.','overlay':true,'autoFocus':true,'title':'Welcome','xButton':true,'next':'2'});
guiders.createGuider({'id':'2','buttons':[{'name':'Previous','onclick':function(){guiders.prev();}},{'name':'Next','onclick':function(){guiders.next();}},{'name':'Exit','onclick':function(){guiders.hideAll();}}],'attachTo':'.aqua-well-mini-green','description':'\r\n<strong>\r\n    You can add notify Icons in header in 3 different colors: \r\n<\/strong>\r\n<ul>\r\n    <li>Red (aqua-well-mini-red),<\/li>\r\n    <li>Green (aqua-well-mini-green),<\/li>\r\n    <li>Blue (aqua-well-mini-blue),<\/li>\r\n<\/ul>\r\n\r\n<div class=\"clear\"><br/><\/div>\r\n<div class=\"aqua-header-shortcuts\">\r\n    <div style=\"background: #0b242f; padding: 10px; text-align: center;\">\r\n        <div class=\"btn-group\">\r\n            <a class=\"aqua-well-mini-blue text-align-center\" href=\"#\" data-toggle=\"dropdown\">\r\n                <span class=\"modernpics icons-white icons48 newline\">f<\/span>\r\n                <span class=\"label label-info\">Click me!<\/span>\r\n            <\/a>\r\n            <div class=\"dropdown-menu quick-info\">\r\n                <table class=\"info-dropdown\">\r\n                    <tbody><tr><td class=\"aqua-avatar-quick-list\" rowspan=\"4\"> <img height=\"45\" alt=\"user\" src=\"/aquablue/images/avatar1.jpg\" class=\"img-rounded img-polaroid\"><\/td><\/tr>\r\n                        <tr><td><a href=\"#\">John Doe <span class=\"modernpics icons16\">=<\/span><\/a><\/td><\/tr>\r\n                        <tr><td>2/9/2012 10:15 <span class=\"modernpics icons16\">}<\/span><\/td><\/tr>\r\n                        <tr><td>john.doe@mail.com <span class=\"modernpics icons16\">@<\/span><\/td><\/tr>\r\n                    <\/tbody><\/table>\r\n                <table class=\"info-dropdown\">\r\n                    <tbody><tr><td class=\"aqua-avatar-quick-list\" rowspan=\"4\">  <img height=\"45\" alt=\"user\" src=\"/aquablue/images/avatar2.jpg\" class=\"img-rounded img-polaroid\"><\/td><\/tr>\r\n                        <tr><td><a href=\"#\">John Doe <span class=\"modernpics icons16\">=<\/span><\/a><\/td><\/tr>\r\n                        <tr><td>2/9/2012 10:15 <span class=\"modernpics icons16\">}<\/span><\/td><\/tr>\r\n                        <tr><td>john.doe@mail.com <span class=\"modernpics icons16\">@<\/span><\/td><\/tr>\r\n                    <\/tbody><\/table>\r\n                <table class=\"info-dropdown\">\r\n                    <tbody><tr><td class=\"aqua-avatar-quick-list\" rowspan=\"4\">  <img height=\"45\" alt=\"user\" src=\"/aquablue/images/avatar3.jpg\" class=\"img-rounded img-polaroid\"><\/td><\/tr>\r\n                        <tr><td><a href=\"#\">John Doe <span class=\"modernpics icons16\">=<\/span><\/a><\/td><\/tr>\r\n                        <tr><td>2/9/2012 10:15 <span class=\"modernpics icons16\">}<\/span><\/td><\/tr>\r\n                        <tr><td>john.doe@mail.com <span class=\"modernpics icons16\">@<\/span><\/td><\/tr>\r\n                    <\/tbody><\/table>\r\n                <table class=\"info-dropdown\">\r\n                    <tbody><tr><td class=\"aqua-avatar-quick-list\" rowspan=\"4\">  <img height=\"45\" alt=\"user\" src=\"/aquablue/images/avatar4.jpg\" class=\"img-rounded img-polaroid\"><\/td><\/tr>\r\n                        <tr><td><a href=\"#\">John Doe <span class=\"modernpics icons16\">=<\/span><\/a><\/td><\/tr>\r\n                        <tr><td>2/9/2012 10:15 <span class=\"modernpics icons16\">}<\/span><\/td><\/tr>\r\n                        <tr><td>john.doe@mail.com <span class=\"modernpics icons16\">@<\/span><\/td><\/tr>\r\n                    <\/tbody><\/table>\r\n\r\n            <\/div>\r\n        <\/div>\r\n\r\n        <a class=\"aqua-well-mini-red text-align-center\" href=\"#\">\r\n            <span class=\"modernpics icons-white newline\">m<\/span>\r\n            <span class=\"label label-important\">3 messages<\/span>\r\n        <\/a>\r\n        <a class=\"aqua-well-mini-green text-align-center\" href=\"#\">\r\n            <span class=\"modernpics icons-white newline\">b<\/span>\r\n            <span class=\"label label-success\">10 comments<\/span>\r\n        <\/a>\r\n\r\n    <\/div>\r\n<\/div>\r\n<div class=\"clear\"><\/div>\r\n','overlay':true,'position':5,'autoFocus':true,'title':'Notify Icons in header','width':'600px','xButton':true,'next':'3'});
$('pre').addClass('prettyprint');prettyPrint();
guiders.createGuider({'id':'3','buttons':[{'name':'Previous','onclick':function(){guiders.prev();}},{'name':'Next','onclick':function(){guiders.next();}},{'name':'Exit','onclick':function(){guiders.hideAll();}}],'attachTo':'.aqua-slogan','description':'Guides can easly stick to ID or Class of css elements.<div style=\"height: 120px; overflow: auto;\">\r\n  <pre>\n                 \r\nguiders.createGuider({\r\n    &#039;id&#039;:&#039;3&#039;,\r\n    &#039;buttons&#039;:[\r\n        {\r\n            &#039;name&#039;:&#039;Previous&#039;,\r\n            &#039;onclick&#039;:function(){guiders.prev();}\r\n        },\r\n        {\r\n            &#039;name&#039;:&#039;Next&#039;,\r\n            &#039;onclick&#039;:function(){guiders.next();}\r\n        },\r\n        {\r\n            &#039;name&#039;:&#039;Exit&#039;,\r\n            &#039;onclick&#039;:function(){guiders.hideAll();}\r\n        }\r\n    ],\r\n    &#039;attachTo&#039;:&#039;.aqua-slogan&#039;, // JQuery css selector of element\r\n    &#039;description&#039;:&#039;Example content&#039;,\r\n    &#039;overlay&#039;:true,\r\n    &#039;position&#039;:6, // 1-12 follows an analog clock, 0 means centered.\r\n    &#039;autoFocus&#039;:true, // Automatically scroll page to active guide\r\n    &#039;title&#039;:&#039;Example title&#039;,\r\n    &#039;xButton&#039;:true,\r\n    &#039;next&#039;:&#039;4&#039; // Next Guide Id\r\n});   \r\n\r\n<\/pre><\/div>','overlay':true,'position':7,'autoFocus':true,'title':'You can place it anywhere','width':600,'xButton':true,'next':'4'});
guiders.createGuider({'id':'4','buttons':[{'name':'Previous','onclick':function(){guiders.prev();}},{'name':'Next','onclick':function(){guiders.next();}},{'name':'Exit','onclick':function(){guiders.hideAll();}}],'attachTo':'#aqua-footer','description':'Scroll page to active guide.','overlay':true,'position':6,'autoFocus':true,'title':'Scroll to active guide','xButton':true,'next':'5'});
guiders.createGuider({'id':'5','buttons':[{'name':'Previous','onclick':function(){guiders.prev();}},{'name':'Exit','onclick':function(){guiders.hideAll();}}],'description':'You can read more about using Guiders in project page: <div class=\"label label-info\">https://github.com/jeff-optimizely/Guiders-JS<\/div>','overlay':true,'autoFocus':true,'title':'Read more...','xButton':true});


$(".aqua-panel-tabs-icons .minimize").click(function(){
    $(this).parents(".aqua-panel").children(".aqua-panel-content").slideToggle("fast");
    return false;
});

$(".aqua-panel-tabs-icons .maximize").click(function(){
    var panel = $(this).parents(".aqua-panel");
    if($(panel).hasClass("fullscreen")){
        $(panel).removeClass("fullscreen");
       $(panel).children(".aqua-panel-content").css("height", "auto");
       $(panel).children(".aqua-panel-content").css("width", "auto");
       $(panel).children(".aqua-panel-content").css("overflow", "inherit");
        $("body").css("overflow-y", "auto");
    }
    else{
        var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName("body")[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
        $(panel).addClass("fullscreen");
        $(panel).children(".aqua-panel-content").slideDown("fast");
        $(panel).children(".aqua-panel-content").css("height", y-60);
        $(panel).children(".aqua-panel-content").css("overflow-y", "scroll");
        $("body").css("overflow-y", "hidden");
        $(panel).children(".aqua-panel-content").css("width", x-20); 
    }
    return false;
});


});
/*]]>*/
</script>
</body>
<!-- Mirrored from aquasite.pl/aquablue/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2015 22:03:50 GMT -->
</html>