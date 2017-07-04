/**
 * Created by Tomer.Cohen on 6/30/2017.
 */
Todos.Todo = DS.Model.extend({
    title: DS.attr('string'),
    isCompleted: DS.attr('boolean')
});

