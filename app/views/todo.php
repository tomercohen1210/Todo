<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ember.js • TodoMVC</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/libs/jquery-1.11.2.min.js"></script>

    <script>

        var model ;
        /*
        $.ajax({
            type:"Get",
            url: "./getTasks",
            data: {name:"missions"}
        }).done(function(data) {
            model=data;
        });
        */
        /*
        $.get("./getTasks",{name:"missions"},function (data) {
            model=data;
        })*/

/*
        $.ajax({
            url:'getTasks',
            type:'GET',
            dataType:'json',
            success:function(data){
                if(data['success']) {
                    $(data.records).each(function(i,item){
                        console.log(item);
                    });
                }
            }
        });
*/
    </script>


    <script src="js/libs/handlebars-v1.3.0.js"></script>
    <script src="js/libs/ember.js"></script>
    <script src="js/libs/ember-data.js"></script>
    <script src="js/libs/localstorage_adapter.js"></script>
    <script src="js/application.js"></script>
    <script src="js/router.js"></script>
    <script src="js/models/todo.js"></script>
    <script src="js/controllers/todos_controller.js"></script>
    <script src="js/controllers/todo_controller.js"></script>
    <script src="js/views/edit_todo_view.js"></script>
    <script type="text/x-handlebars" data-template-name="todos">

</head>
<body>


<section id="todoapp">
    <header id="header">
        <button  {{action "createTodo"}} class="add"></button>
    </header>

    <section id="main">

        <ul id="todo-list">
            {{#each todo in model itemController="todo"}}
            <li {{bind-attr class="todo.isCompleted:completed todo.isEditing:editing" }}>
                {{#if todo.isEditing}}
                {{edit-todo class="edit" value=todo.title focus-out="acceptChanges"
                insert-newline="acceptChanges"}}
                {{else}}
                {{input type="checkbox" checked=todo.isCompleted class="toggle"}}
                <label {{action "editTodo" on="doubleClick"}}>{{todo.title}}</label>
                <button {{action "removeTodo"}} class="destroy"></button>
                {{/if}}
            </li>
            {{/each}}
        </ul>


    </section>

    <footer id="footer">
        <span class="count">
 לסיום: <strong>{{remaining}}</strong>
        </span>
        <span class="count">
 הושלמו: <strong>{{done}}</strong>
        </span>
        <span class="count">
 סה"כ: <strong>{{ total }}</strong>
        </span>


    </footer>
</section>
</body>
</html>