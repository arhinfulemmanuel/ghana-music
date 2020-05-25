// downloadButton = document.getElementById('download')
// downloadButton.addEventListener('click', (e)=>{
//     e.preventDefault();
//     route = document.getElementById('route').value

//     axios.post('route')
//     .then((response) => {
        
//     })
// })

$(function(){
    $('#download').click(function (e) { 
        e.preventDefault();
        route = $('#route').val();
        // $.post(route, 'data',
        //     function (data) {
        //         alert(data)
        //     },
        // );

        $('#download_form').submit(function (e) { 
            //e.preventDefault();

        });

        $('#download_form').submit();
    });
})