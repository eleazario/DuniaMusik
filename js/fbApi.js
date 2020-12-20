var settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://instagram-facebook-media-downloader.p.rapidapi.com/api?igurl=https%253A%252F%252Fwww.instagram.com%252Fp%252FBvJyyOhoYvJ",
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "instagram-facebook-media-downloader.p.rapidapi.com",
		"x-rapidapi-key": "f2dc795917mshecf1a5bed8d623fp160d42jsn0235cffd1f52"
	}
}

$.ajax(settings).done(function (response) {
	console.log(response);
});
