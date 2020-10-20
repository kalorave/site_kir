for (var i = 0; i < main.length; i++) {
  preloadImage(main[i].back);
}
var getDate, setDate, getSubbed, setSubbed;
if (localStorage) {
  getDate = function(){
    return localStorage.getItem('newsDate');
  };
  setDate = function(value){
    return localStorage.setItem('newsDate', value);
  };
  getSubbed = function(){
    return localStorage.getItem('news');
  };
  setSubbed = function(value){
    return localStorage.setItem('news', value);
  };
}
else{
  var script = document.createElement('script');
  script.setAttribute('src', 'https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js');
  document.head.appendChild(script);
}
