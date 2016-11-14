$(document).ready(function(){
	//click function to view Labs
	$('#labs').click(function(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        myFunction(this);
		    }
		};
		xhttp.open("GET", "./resources/index.xml", true); //method, url, async
		xhttp.send(); //send the response to the server

		function myFunction(xml) {
		    var xmlDoc = xml.responseXML;

		    document.getElementById("labsOutput").innerHTML =
		    //lab1
		    xmlDoc.getElementsByTagName("title")[0].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[0].childNodes[0].nodeValue + "<a href=Labs/lab1>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[0].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		   //lab2
		    xmlDoc.getElementsByTagName("title")[1].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[1].childNodes[0].nodeValue + "<a href=Labs/lab2>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[1].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		    //lab3
		    xmlDoc.getElementsByTagName("title")[2].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[2].childNodes[0].nodeValue + "<a href=Labs/lab3>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[2].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		    //lab4
		    xmlDoc.getElementsByTagName("title")[3].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[3].childNodes[0].nodeValue + "<a href=Labs/lab4>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[3].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		    //lab5
		    xmlDoc.getElementsByTagName("title")[4].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[4].childNodes[0].nodeValue + "<a href=Labs/lab5>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[4].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		    //lab6
		    xmlDoc.getElementsByTagName("title")[5].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[5].childNodes[0].nodeValue + "<a href=Labs/lab6>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[5].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		    //lab7
		    xmlDoc.getElementsByTagName("title")[6].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[6].childNodes[0].nodeValue + "<a href=Labs/lab7>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[6].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		    //lab8
		    xmlDoc.getElementsByTagName("title")[7].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[7].childNodes[0].nodeValue + "<a href=Labs/lab8>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[7].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		    //lab9
		    xmlDoc.getElementsByTagName("title")[8].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[8].childNodes[0].nodeValue + "<a href=Labs/lab9>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[8].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		    //lab10
		    xmlDoc.getElementsByTagName("title")[9].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[9].childNodes[0].nodeValue + "<a href=Labs/lab10>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[9].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>";
		}
	});
});

//click function to view Homeworks						
$(document).ready(function(){
	$('#homeworks').click(function(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        myFunction(this);
		    }
		};
		xhttp.open("GET", "./resources/index.xml", true);
		xhttp.send();

		function myFunction(xml) {
		    var xmlDoc = xml.responseXML;

		    document.getElementById("homeworksOutput").innerHTML =

		    //homework1
		    xmlDoc.getElementsByTagName("title")[10].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[10].childNodes[0].nodeValue + "<a href=Homeworks/homework1>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[10].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>" +

		   //homework2
		    xmlDoc.getElementsByTagName("title")[11].childNodes[0].nodeValue +
		    "<br>" +
		    xmlDoc.getElementsByTagName("description")[11].childNodes[0].nodeValue + "<a href=Homeworks/homework2>" +
		    "<br>" +
		    xmlDoc.getElementsByTagName("url")[11].childNodes[0].nodeValue + "</a href>" +
		    "<br>" + "</p>";
		}
	});
});
