$(document).ready(function() {

	/**
	 * Created on 01-Jun-17.
	 * @author Jeffrey Cooper <jcooper37@cnm.edu>
	 */
	$('#myTabs a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})
	$('#myTabs a[href="#profile"]').tab('show') // Select tab by name

});