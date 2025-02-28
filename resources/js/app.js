
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
$(document).ready(function(){
    CKEDITOR.replace( 'exampleFormControlTextarea1' );
})


window.Vue = require('vue');
import VModal from 'vue-js-modal'
// import VModal from 'vue-js-modal'


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('prop-component',require('./components/PropComponent.vue'));
Vue.component('prop-ajax-component',require('./components/PropAjaxComponent.vue'));
Vue.component('chartline-component',require('./components/LineComponent.vue'));
Vue.component('menu-burger-component',require('./components/BurgerComponent.vue'));
Vue.component('avatar-component',require('./components/AvatarComponent.vue'));
Vue.component('accardion-component',require('./components/AccardionComponent.vue'));
Vue.component('task-table-component',require('./components/TaskTabelComponent.vue'));
Vue.component('task-archive-component',require('./components/ArchiveTaskComponent'));
Vue.component('user-table-component',require('./components/UserTabelComponent.vue'));
Vue.component('menu-component',require('./components/MenuComponent.vue'));
Vue.component('chat-component',require('./components/ChatComponent.vue'));


// Vue.component('modal-component',require('./components/ModalComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
