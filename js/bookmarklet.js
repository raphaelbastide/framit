/* Create iframe */

function addCSS(url){
  var headID = document.getElementsByTagName("head")[0];
  var cssNode = document.createElement('link');
  cssNode.type = 'text/css';
  cssNode.rel = 'stylesheet';
  cssNode.href = url;
  cssNode.media = 'screen';
  headID.appendChild(cssNode);
}

function keyPressHandler(e) {
      var kC  = (window.event) ?    // MSIE or Firefox?
                 event.keyCode : e.keyCode;
      var Esc = (window.event) ?   
                27 : e.DOM_VK_ESCAPE // MSIE : Firefox
      if(kC==Esc){
         // alert("Esc pressed");
         toggleItem("instacalc_bookmarklet");
      }
}


(function(){
 
  var iframe_url = "http://lab.raphaelbastide.com/tools/framit/frame.php";
 
  var existing_iframe = document.getElementById('framit');
  
  if (existing_iframe){
    showItem('framit');
    // if has text selected, copy into iframe
    if (calcstring != ""){
      existing_iframe.src = iframe_url;
    }
    else{
      // want to set focus back to that item! but can't; access denied
    }
    return;
  }
  
  // alert("hi there: [" + calcstring + "]");
 
  addCSS("http://lab.raphaelbastide.com/tools/framit/styles.css");
 
  var div = document.createElement("div");
  div.id = "bookmarklet";
  
  var str = "";
  str += "<iframe frameborder='0' scrolling='no' name='framit' id='framit' src='" + iframe_url + "' width='550px' height='750px' style='position:absolute; right:0px; top:0px; z-index:100; background:transparent; position:fixed;'></iframe>";
  
  div.innerHTML = str;
    document.body.insertBefore(div, document.body.firstChild);
})()

