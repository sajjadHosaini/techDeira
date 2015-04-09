$(function() {
	
	$("#lectureDate").datepicker({
		defaultDate : "+1w",
		dateFormat : "yy-mm-dd",
	});

	$(".dateFrom").datepicker({
		defaultDate : "+1w",
		changeMonth : true,
		numberOfMonths : 1,
		dateFormat : "yy-mm-dd",
		onClose : function(selectedDate) {
			$(".dateTo").datepicker("option", "minDate", selectedDate);
		}
	});
	$(".dateTo").datepicker({
		defaultDate : "+1w",
		changeMonth : true,
		numberOfMonths : 1,
		dateFormat : "yy-mm-dd",
		onClose : function(selectedDate) {
			$(".dateFrom").datepicker("option", "maxDate", selectedDate);
		}
	});

	$('.timeFrom').timepicker({
		'minTime' : '6:00am',
		'maxTime' : '8:30pm'
	});
	$('.timeTo').timepicker({
		'minTime' : '6:00am',
		'maxTime' : '8:30pm'
	});

	// Delete Course Modal
	$(".deleteCourse").on("click", function() {
		var id = $(this).attr("name");
		$("#deleteCourseModal").modal();
		$(".acceptDeleteCourse").on("click", function() {
			$.ajax({
				type : "GET",
				url : "execute/deleteCourse.php",
				data : "id=" + id,
				cache : false,
				success : function(html) {
					$("#deleteCourseModal").modal('hide');
					window.location.href = "courses.php";
					$("#deleteCourseSuccess").click();
				}
			});
		});
	});


	// Course Lecture Adding

	// Callback handler for form submit event
	$("#lectureForm").submit(function(e) {

		var formObj = $(this);
		var formURL = formObj.attr("action");
		var formData = new FormData(this);
		$.ajax({
			url : formURL,
			type : 'POST',
			data : formData,
			mimeType : "multipart/form-data",
			contentType : false,
			cache : false,
			processData : false,
			success : function(data, textStatus, jqXHR) {
				// to get the lecture which is uploaded right now
				getLecture();
				 if(data!=""){
				 alert(data);
				 }
				 else {
					$('#lectureForm')[0].reset(); 
					$("#addLectureSuccess").click();
				 }
			},
			error : function(jqXHR, textStatus, errorThrown) {
				alert("Lecture not added, error: " + errorThrown);
			}
		});
		e.preventDefault(); // Prevent Default action.
		e.unbind();
	});
// End of Lecture Adding
	// Course Material Adding
	$("#materialForm").submit(function(e) {

		var formObj = $(this);
		var formURL = formObj.attr("action");
		var formData = new FormData(this);
		$.ajax({
			url : formURL,
			type : 'POST',
			data : formData,
			mimeType : "multipart/form-data",
			contentType : false,
			cache : false,
			processData : false,
			success : function(data, textStatus, jqXHR) {
				// to get the material which is uploaded right now
				getMaterial();
				 if(data!=""){
				 alert(data);
				 }
				 else {
					$('#materialForm')[0].reset();
					$("#addMaterialSuccess").click();
				 }
			},
			error : function(jqXHR, textStatus, errorThrown) {
				alert("Material not added, error: " + errorThrown);
			}
		});
		e.preventDefault(); // Prevent Default action.
		e.unbind();
	});

	// END - Course Material Adding
});