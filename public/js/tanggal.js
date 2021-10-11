$('document').ready(function(){

	//template ajax
	var oReq = new XMLHttpRequest();

	//cek kesiapan ajax
	oReq.onreadystatechange = function(){
		if(oReq.readyState == 4 && oReq.status == 200){
			
		}
	}
	const apps = Object.values(app);
	console.log(apps);
	//eksekusi ajax
	oReq.open('GET', '/', true);
	oReq.send(); 

$('#mulai').datepicker({
	minDate : 0,
    dateFormat : 'yy-mm-dd',
    beforeShowDay: disableDates,
    numberOfMonths: 2,
    beforeShowDay: function (date) {
    var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
    return [apps.indexOf(dateString) == -1];
}
});


$('#selesai').datepicker({
	minDate : 0,
    dateFormat : 'yy-mm-dd',
    beforeShowDay: disableDates,
    numberOfMonths: 2,
    beforeShowDay: function (date) {
    var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
    return [apps.indexOf(dateString) == -1];
}
});

var disableDates = function(selesai) {
        var dateString = jQuery.datepicker.formatDate('yy-mm-dd', selesai);
        return [apps.indexOf(dateString) == -1];
}

});

