//

$(document).ready(function(){

	document.getElementById('links').onclick = function (event) {
	    event = event || window.event;
	    var target = event.target || event.srcElement,
	        link = target.src ? target.parentNode : target,
	        options = {index: link, event: event},
	        links = this.getElementsByTagName('a');
	    blueimp.Gallery(links, options);
	};

	blueimp.Gallery([
	    {
	        title: 'A YouYube video',
	        href: 'https://www.youtube.com/watch?v=NZDzuve7kho&list=PLxQNfKs8YwvGhXHbHtxtoB-tRRv6r3Rlr',
	        type: 'text/html',
	        youtube: 'VIDEO_ID',
	        poster: 'https://img.youtube.com/vi/VIDEO_ID/maxresdefault.jpg'
	    },
	    {
	        title: 'Banana',
	        href: 'https://www.youtube.com/watch?v=NZDzuve7kho&list=PLxQNfKs8YwvGhXHbHtxtoB-tRRv6r3Rlr',
	        type: 'image/jpeg',
	        thumbnail: 'https://example.org/thumbnails/banana.jpg'
	    }
	]);

	blueimp.Gallery(
    document.getElementById('links').getElementsByTagName('a'),
	    {
	        container: '#blueimp-gallery-carousel',
	        carousel: true
	    }
	);

	alert('wagner jquery');
});