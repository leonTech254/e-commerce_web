$(document).ready(function(){
    ////////my nav 
    let s1=$(".s1");
    let s2=$(".s2");
    let s3=$(".s3");
    let s4=$(".s4");


    /////////////////

    ////////tables///////////////
   let crtorders=$(".current-orders");
   let allorders=$(".all-orders");
   let mngorders=$(".manage-orders");
   let actorders=$(".active-orders");
   //////////////////////////////

   //////////////////clickevent/////////////
   s1.click(function(){
       allorders.addClass("display");
       mngorders.addClass("display");
       actorders.addClass("display");
       crtorders.removeClass("display");
       s1.addClass("active-tab-nav");
       s2.removeClass("active-tab-nav");
       s3.removeClass("active-tab-nav");
       s4.removeClass("active-tab-nav");

     });
       //////////////////clickevent/////////////
   s2.click(function(){
    crtorders.addClass("display");
    mngorders.addClass("display");
    actorders.addClass("display");
    allorders.removeClass("display");
    s2.addClass("active-tab-nav");
    s1.removeClass("active-tab-nav");
    s3.removeClass("active-tab-nav");
    s4.removeClass("active-tab-nav");
    
  });
    //////////////////clickevent/////////////
    s3.click(function(){
        allorders.addClass("display");
        mngorders.addClass("display");
        actorders.removeClass("display");
    allorders.addClass("display");
    s3.addClass("active-tab-nav");
    s2.removeClass("active-tab-nav");
    s1.removeClass("active-tab-nav");
    s4.removeClass("active-tab-nav");


        
      });
        //////////////////clickevent/////////////
   s4.click(function(){
    allorders.addClass("display");
    mngorders.removeClass("display");
    actorders.addClass("display");
    allorders.addClass("display");
    s4.addClass("active-tab-nav");
    s3.removeClass("active-tab-nav");
    s2.removeClass("active-tab-nav");
    s1.removeClass("active-tab-nav");
    
  });

   








})