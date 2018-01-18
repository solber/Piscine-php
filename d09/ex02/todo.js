var ft_list;
var cookie = [];

window.onload = function () {
    document.querySelector("#new").addEventListener("click", newTodo);
    ft_list = document.querySelector("#ft_list");
    var tmp = document.cookie;
    if (tmp) {
        cookie = JSON.parse(tmp);
        cookie.forEach(function (e) {
            addTodo(e);
        });
    }
};

window.onunload = function () {
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
    document.cookie = JSON.stringify(newCookie);
};

function newTodo(){
    var todo = prompt("What to add ?", '');
    if (todo !== '') {
        addTodo(todo)
    }
}

function addTodo(todo){
    var div = document.createElement("div");
    div.innerHTML = todo;
     div.className += div.className ? ' todorow' : 'todorow';
    div.addEventListener("click", deleteTodo);
    ft_list.insertBefore(div, ft_list.firstChild);
}

function deleteTodo(){
    if (confirm("Delete this ?")){
        this.parentElement.removeChild(this);
    }
}