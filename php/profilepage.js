$(function(){
        $("#loadingbar").progressbar({
          value: 0
        });
        var x=0;
        setTimeout(function(){
        var progress=setInterval(function(){
          x++;
          $("#label").text(x+ "% Loaded...");
           if(x>49)
          {
            $("#ready").text("Almost done...Your profile is ready to use");
          }
          $("#loadingbar").progressbar("option","value",x);
          if(x>99)
          {
            clearInterval(progress);
            setTimeout(function(){
          
          $("#isloading").css("display","none");
        },1000)
          }
        },50)

      },1000);
});
