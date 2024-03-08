
function Search(search_value){
    $.ajax({
        url: '/web-page/model/SearchEngine.php',
        type: 'POST',
        data: { 'search': search_value },
        success: function(response){
            $('#results').html(response);
        }
    });
}