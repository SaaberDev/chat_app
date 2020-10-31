require('./bootstrap');

// window.Vue = require('vue')
import Vue from 'vue';

import VueChatScroll from 'vue-chat-scroll';
Vue.use(VueChatScroll);

import 'alpinejs'

/******
 * ----------------------------
 * Registered Vue Component
 * ----------------------------
 ******/
// Vue.component('chat-form', require('./components/ChatForm').default);
// Vue.component('chat-input', require('./components/ChatInput').default);
// new Vue({
//     el: "#app",
//
//     data(){
//         return {
//             messages: [],
//             users: [],
//         }
//     },
//     created() {
//         this.fetchMessages();
//     },
//     methods: {
//         // Fetch Message
//         fetchMessages: function (){
//             axios.get('fetchMessages')
//                 .then(response => this.messages = response.data)
//         },
//
//         // Store Message
//         storeMessages: function (message){
//             this.messages.push(message);
//         }
//     },
// });
