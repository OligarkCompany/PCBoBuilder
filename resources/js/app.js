import Vue from 'vue'
import App from './App.vue'
import store from '~/store'
import router from '~/router'

import PaperDashboard from "./plugins/paperDashboard";
import "vue-notifyjs/themes/default.css";

Vue.config.productionTip = false
Vue.use(PaperDashboard);

/* eslint-disable no-new */
new Vue({
    router,
    store,
    render: h => h(App)
  }).$mount("#app");