(function(){
  var arr = document.getElementsByClassName("jas-product-image")
  console.log(arr.length)
  for(var i=0;i<arr.length;i++){
    arr[i].style.backgroundImage = "url('"+arr[i].getAttribute('data-lksrc')+"')";
  }
})();
  