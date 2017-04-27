function axeAjaxify(infoz){

	var frmId = infoz.id;
	var onsuccess = infoz.success;
	var valUrl = infoz.validate;

	var inp = $('#' + frmId + ' :input');
	
	
	inp.click(function(event){
		if ($(this).attr('type') == "radio" || $(this).attr('type' == "checkbox")) {
			var id = $(this).attr('id');
	    	getInfo(id, $('#'+id).val(), status, function(){});
	    }
    });

	inp.on("input", function(event){
		var id = $(this).attr('id');
        getInfo(id, $('#'+id).val(), function(){});
    });


    $( "#" + frmId).submit(function( event ) {

	  	// Get all the inputs into an array...
         var inputs = $('#form :input');

         var status = true;
         inputs.each(function (index)
         {
             if(!($(this).attr('id') == "submit" || $(this).attr('id') == null))
             {
             	
				var id = $(this).attr('id');
				var value = $(this).val();
				getInfo(id, value, function(sts){

				});

	        	 if(!$('#' + id + '_info').hasClass("valid"))
	             {
	             	status = false;
	             }
             }
         });


        if (status) {
	         submitInfo($(this), onsuccess);
		}else{
			alert("Please make sure you have all correct inputs.");
		}

		event.preventDefault();
	});


	function getInfo(field, info, returned){
		var a = $.ajax({
			method: "POST",
			url: valUrl, 
			data: {[field]: info},
	        success: function(msg) {
	            // Call this function on success
	            //console.log(msg);

	        	ret =  doneAction( msg, field );
	        	returned(ret);
	        },
	        error: function(e) {
	            alert(e.responseText);
	        }
		});

		return a;

		 //alert(returned);
	}

	function submitInfo(form, successed){

		var rawdata = {};

		jQuery.each(form.serializeArray(), function (i, field) {
			rawdata[field.name] = field.value;
		});

		var data = JSON.stringify(rawdata);

		//console.log(data);

		var action = $(form).attr('action');
		var method = $(form).attr('method');

	    $.ajax({
	        url: action,
	        type: method,
	        data: rawdata,
	        success: function(response) {
	        	if (response.error == "phperror") {
					alert(response.message);
				}else{
	           		successed(response);
	       		}
	        }  ,
	        error: function (e) {
	        	alert(e.responseText);
	        }         
	    });
	}

	function doneAction(msg, field)
	{
		if (msg.error == "phperror") {
			alert(msg.message);
		}
		
		//console.log(JSON.stringify(msg));

		if (msg[field].status == 'success') {
			$('#'+field+'_info').html(createMessage('#558B2F', 'check-circle'));
			$('#'+field+'_info').addClass('valid');
			return true;
		}else{
			$('#'+field+'_info').html(createMessage('#FF3333', 'times-circle', msg[field].message));
			$('#'+field+'_info').removeClass("valid");
			return false;
		}
		//console.log("Returned: " + this.msg.info);
	}

	function createMessage(color, icon, message = '') {
		return '<div style="color:'+color+';"><i class="fa fa-'+icon+' fa-lg"></i> '+message+'</div>';
	}

}