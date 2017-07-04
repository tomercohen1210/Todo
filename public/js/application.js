window.Todos = Ember.Application.create();
 /*
 Todos.ApplicationAdapter = DS.LSAdapter.extend({
 namespace: 'todos-emberjs'
 });
*/

Todos.ApplicationAdapter=DS.RESTAdapter.extend({
    /*
    createRecord:function(store, type, record){


    },

    updateRecord: function(store, type, record) {
        var data = {};
        debugger;
        var serializer = store.serializerFor(type.typeKey);

        serializer.serializeIntoHash(data, type, record);

        var id = Ember.get(record, 'id');

        return this.ajax(this.buildURL(type.typeKey, id), "POST", { data: data });
    },
    deleteRecord: function(store, type, record) {
        debugger
        var id = Ember.get(record, 'id');

        return this.ajax(this.buildURL(type.typeKey, id), "POST");
    }
    */
})

