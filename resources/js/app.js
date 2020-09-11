require('./bootstrap');
window.Vue = require('vue');
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

//Vue.use(Mover);
//require('vue-mover');
Vue.component('item-component', require('./Item.vue').default);
Vue.component('mover', require('vue-mover').default);
const app = new Vue({
    el: '#app'
});
$(document).on("click","button",function(){if(0!==$(this).find("i.fa-caret-right").length)null!=(t=$(document).find("#MyMoverRightItems .mover-selected:last-child").attr("data-id"))&&axios.put("/item/"+t,{status:"1"}).then(t=>{});else if(0!==$(this).find("i.fa-caret-left").length){var t;null!=(t=$(document).find("#MyMoverLeftItems .mover-selected:last-child").attr("data-id"))&&axios.put("/item/"+t,{status:"0"}).then(t=>{})}});

