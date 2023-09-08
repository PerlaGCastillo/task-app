$(function(){
    console.log('JQuery works');

    $('#search').keyup(function(e){
        if($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: 'task-search.php',
                type: 'POST',
                data:{search},
                success: function(response){
                    let tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<li> 
                            ${task.name}
                        </li>`
                    });

                    $('#container').html(template);
                }
            })
        }
    })

});