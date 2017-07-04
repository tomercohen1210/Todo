Todos.TodosController = Ember.ArrayController.extend({
    actions: {
        createTodo: function() {
            var title = "משימה חדשה";
            if (!title.trim()) { return; }

            // Create the new Todo model
            var todo = this.store.createRecord('todo', {
                title: title,
                isCompleted: false
            });


            // Save the new model
           todo.save();



        }
    },
    remaining: function() {
        return this.filterBy('isCompleted', false).get('length');
    }.property('@each.isCompleted'),
    done:function() {
        return this.filterBy('isCompleted', true).get('length');
    }.property('@each.isCompleted'),
    total: function() {
        var total = this.get('remaining')+  this.get('done');
        return total;
    }.property('remaining')
});