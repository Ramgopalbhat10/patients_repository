$(document).ready(function() {
	var url = "data.json";
	
	// $('#list-button').on('click', function() {
		//display data on load
		$.getJSON(url)
				.done(function(data) {
					console.log(data[1][0]);
					for(var i=0; i<=data.length-1; i++) {
						// console.log(data[i].fname);
						$(".table-body").append('<tr class="p-rows table-striped"' + 'id=' + "row" + i + '></tr>');
						// console.log(i);
						var current_row = "#row" + i;

						$(current_row).append('<td class="pf-name"' + 'id=' + "pf-name" + i + '></td>');
						$(current_row).append('<td class="pl-name"' + 'id=' + "pl-name" + i + '></td>');
						$(current_row).append('<td class="p-age"' + 'id=' + "p-age" + i + '></td>');
						$(current_row).append('<td class="p-dob"' + 'id=' + "p-dob" + i + '></td>');
						$(current_row).append('<td class="p-cell"' + 'id=' + "p-cell" + i + '></td>');
						$(current_row).append('<td class="p-about"' + 'id=' + "p-about" + i + '></td>');

						var current_pfname = "#pf-name" + i;
						var current_plname = "#pl-name" + i;
						var current_page = "#p-age" + i;
						var current_pdob = "#p-dob" + i;
						var current_pcell = "#p-cell" + i;
						var current_about = "#p-about" + i;

						$(current_pfname).text(data[i][0].fname);
						$(current_plname).text(data[i][0].lname);
						$(current_page).text(data[i][0].age);
						$(current_pdob).text(data[i][0].dob);
						$(current_pcell).text(data[i][0].cell);
						$(current_about).text(data[i][0].about);
					}
		});
	// });

	//search for particular patient
	$('#srch-button').on('click', function() {
		var f_search = $("#f-search").val();
		var l_search = $("#l-search").val();

		console.log("searching.....");
		var search = function(first, last) {
			$('table tr').each(function() {
				if($(this).find('td').eq(0).text() === first &&
					 $(this).find('td').eq(1).text() === last) {
						$(this).css("background", "#03a9f4");
				}
// 				else {
// 					alert("Data not found");
// 				}
			});
		}
		search(f_search, l_search);
	});
});
