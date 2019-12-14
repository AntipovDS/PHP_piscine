var ft_list;

$(document).ready(function(){
    $('#new').click(newTodo);
    $('#ft_list div').click(deleteTodo);
    ft_list = $('#ft_list');
    loadTodo();
});

function loadTodo(){
    ft_list.empty();
    ajaxa('select.php', "GET", null, function(data){
        data = jQuery.parseJSON(data);
        jQuery.each(data, function(i, val) {
            ft_list.prepend($('<div data-id="' + i + '">' + val + '</div>').click(deleteTodo));
        });
    });
} setInterval (loadTodo, 15000);

function newTodo(){
    var todo = prompt("Что будем делать?", '');
    if (todo !== '') {
        ajaxa('insert.php?todo=' + todo, "GET", null, loadTodo);
    }
}

function deleteTodo(){
    if (confirm("Вы точно уверены что хотите удалить это???")){
        ajaxa('delete.php?id=' + $(this).data('id'), "GET", null, loadTodo);
    }
}

function ajaxa(url, method, data, success) {
    $.ajax({
            method: method,
            url: url,
            data: data
        })
        .done(function (data) {
            success(data);
        })
        .error(function (msg) {
            alert("error ajax: " + msg);
        });
}