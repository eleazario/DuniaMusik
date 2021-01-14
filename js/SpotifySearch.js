$('#FormSearch').submit(function(e){
    $.ajax({
        url: 'https://accounts.spotify.com/api/token',
        type: 'post',
        dataType: 'json',
        headers: {
            'Authorization': 'Basic ODRjODM3Mjg3ZGZlNDcyZjllYTlhOGE5YTMxMTMyZTM6NzdmOGE4NDQ3YzlhNDE2NGFiYzUwMWViM2UxMzc2NTU=',
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        data: {
            'grant_type': 'client_credentials'
        },        
        success:function(auth){
            $.ajax({
                url: 'https://api.spotify.com/v1/search',
                type: 'get',
                dataType: 'json',
                headers: {
                    'Authorization' : auth.token_type + ' ' + auth.access_token                    
                },
                data: {
                    'q': $('#FormSearch input').val(),
                    'type': 'track,artist',
                    'market': 'ID',
                    'limit': '10',
                    'offset': '5'
                },
                success:function(result){
                    var track = result.tracks.items;
                    console.log(track);
                    $('#Content').html('');

                    $('#Content').append('<div class="judul"><h1 class="font-weight-bold text-light">S E A R C H</h1><hr class="garis"></div><br><br><div class="search p-5"></br><ul id="UlItem" class="list-group" style="opacity: 100%;"></ul>');
                    $.each(track,function(i,data){
                        var artist = data.artists;
                        
                        albumRead = function(){
                            $.each(artist,function(n,index){
                                return(index.name);
                            });
                        }
                        $('#UlItem').append('<li class="list-group-item bg-secondary"><h5>'+ data.name +'</h5>'+ data.album.name +'<br><b>' +'</b></li>');
                    
                    })
                },
                error:function(result){
                    
                    alert(result.responseJSON.error.message)
                }
            })
        },
        error:function(auth){
            alert('auth error');
        }
    })
    e.preventDefault()
})
