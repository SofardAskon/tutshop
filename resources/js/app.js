import "./bootstrap";
import { createApp } from "vue";
import UploadFileComponent from "./components/admin/UploadFileComponent.vue";

const app = createApp({});
app.component("upload-file-component", UploadFileComponent);
app.mount("#app");
