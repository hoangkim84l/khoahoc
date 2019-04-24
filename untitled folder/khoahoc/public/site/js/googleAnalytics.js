$(document).ready(function(){
	var searchword = $("input[name='tx_indexedsearch[sword]']").val();


	if($("p").is('.tx-indexedsearch-noresults')) {
		
		pageTracker._trackEvent('Search', 'noresult', searchword);
		
	}else {

		$('#newsList li div a').click(function() {
	
			pageTracker._trackEvent('Search', 'result', searchword);
		
		});
	}
});
/*
$(document).ready(function(){

    console.log("LINK CHECK");

    var filetypes = /\.(zip|exe|pdf|doc*|xls*|ppt*|mp3)$/i;
    var baseHref = '';
    if ($('base').attr('href') != undefined)
        baseHref = $('base').attr('href');

    $('a').each(function() {

        console.log($(this));

        var href = $(this).attr('href');
        if (href && (href.match(/^https?\:/i)) && (!href.match(document.domain))) {

            console.log("Link "+href);

            $(this).click(function() {
                var extLink = href.replace(/^https?\:\/\//i, '');

                console.log("link "+extLink);

                _gaq.push(['_trackEvent', 'External', 'Click', extLink]);
                if ($(this).attr('target') != undefined && $(this).attr('target').toLowerCase() != '_blank') {
                    setTimeout(function() { location.href = href; }, 200);
                    return false;
                }
            });
        }
        else if (href && href.match(/^mailto\:/i)) {

            console.log("Mail "+href);

            $(this).click(function() {
                var mailLink = href.replace(/^mailto\:/i, '');

                console.log("mailto "+mailLink);

                _gaq.push(['_trackEvent', 'Email', 'Click', mailLink]);
            });
        }
        else if (href && href.match(filetypes)) {

            console.log("File "+href);

            $(this).click(function() {
                var extension = (/[.]/.exec(href)) ? /[^.]+$/.exec(href) : undefined;
                var filePath = href;

                console.log("file "+extension+' '+filePath);

                _gaq.push(['_trackEvent', 'Download', 'Click-' + extension, filePath]);
                if ($(this).attr('target') != undefined && $(this).attr('target').toLowerCase() != '_blank') {
                    setTimeout(function() { location.href = baseHref + href; }, 200);
                    return false;
                }
            });
        }
    });
});
*/

