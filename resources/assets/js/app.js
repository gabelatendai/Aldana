
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});



function getEmployees(e) {

    fetch('http://localhost:8000/api/fetch_employees')
        .then(function (res) {

            return res.json();

        })
        .then(function (data) {

            let output='' ;

            data.forEach(function (employee) {

                output+=`<li>${employee.first_name}</li>`;
            });
            document.getElementById('output').innerHTML=output;


                })
                    .catch(function (err) {

                        console.log(err)

                    });
    
}

getEmployees();