import "./bootstrap";
// import Vue from "vue";

import Vue from "vue";

Vue.component(
    "upload-file-component",
    require("./components/admin/UploadFileComponent")
);

const app = new Vue({
    el: "#app",
});
