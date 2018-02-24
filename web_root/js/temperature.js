$(function() {
    $('#action-show-temp').on('click', function(){
    	alert('Lets show temp');
    	$.ajax({
	        type: 'POST',
	        url: "../../ext/Adafruit_Python_DHT/examples/AdafruitDHT.py",
	        data: {param: 'xyz'}, //passing some input here
	        dataType: "text",
	        success: function(response){
	           output = response;
	           alert(output);
	        }
		}).done(function(data){
	    	console.log(data);
	    	alert(data);
		});
    });
});