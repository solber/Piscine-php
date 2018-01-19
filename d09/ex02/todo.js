var ft_list;
var cookie = [];

window.onload = function () {
    document.querySelector("#new").addEventListener("click", newTodo);
    ft_list = document.querySelector("#ft_list");
    var tmp = document.cookie;
    if (tmp) {
        cookie = JSON.parse(tmp.split('=')[1]);
        cookie.forEach(function (e) {
            addTodo(e);
        });
    }
};

function newTodo(){
    var todo = prompt("What to add ?", '');
    if (todo !== '') {
        addTodo(todo);
        setCookies();
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
        setCookies();
    }
}

function setCookies()
{
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
    //document.cookie = JSON.stringify(newCookie);
    setCookieFromVal('list', JSON.stringify(newCookie), 1);
}

function setCookieFromVal(name, value, exdays) {
    var d, expires;
    exdays = exdays || 1;
    d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + "; " + expires;
}