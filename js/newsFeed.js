const newRef=database.ref('newsfeed/');

  newRef.on("value", function(snapshot) {
    var div = document.createElement("div");
    var marquee=document.getElementById('marquee');

   const allnews=snapshot.val();
   allnews.map((eachnews)=>{
    var div = document.createElement("div");
    news=eachnews.text;
    div.innerHTML=`* ${news}`;
    marquee.appendChild(div);
   })
}, function (error) {
   console.log("Error: " + error.code);
});