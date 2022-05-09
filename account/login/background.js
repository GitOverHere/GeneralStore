base_url = "img/backgrounds/"
response = ""
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       response = xhttp.responseText;
    }
};
xhttp.open("GET", "img/backgrounds.php", true);
xhttp.send();

obj = JSON.parse(response)

/*
for(i=2; i<obj.length; i++){
	
}
*/



changeBackground = setInterval(function(){
	
	
},3000)