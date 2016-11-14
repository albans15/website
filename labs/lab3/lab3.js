// Part 1
function goingthrough(doc, depth = 0){
    if(doc.nodeType != 1)
        return ""
// gets the html element, first element of array
    var text = "-".repeat(depth)+doc.tagName+"\n" // sets one dash for each point of depth
    
    for(var i = 0; i<doc.childNodes.length; i++){  // iterate through child nodes
       text += goingthrough(doc.childNodes[i],depth+1) 
    }
    return text
    }

  window.onload = function changecss(item){
  var item = item.firstChild.innerHTML;
  alert(item)
  var clone = item.cloneNode(true);
    
  document.getElementById("append").appendChild(clone);  
    }

  document.addEventListener('DOMContentLoaded', function() {
    var elm = document.documentElement
    console.log(goingthrough(elm))
    document.getElementById("info").innerHTML = goingthrough(elm)
    var item = document.getElementById("fav")
    changecss(item)
});

// Part 2
documentElement.onclick = function alert() {
    document.getElementById("item").innerHTML;
    document.addEventListener("click", alert(current.tagName));
}

// Part 3


  
