import "./bootstrap";
import { createApp } from "vue";
import UploadFileComponent from "./components/admin/UploadFileComponent.vue";
import UploadFileComponentCategory from "./components/admin/UploadFileComponentCategory.vue";
import CharacteristicComponentProduct from "./components/admin/CharacteristicComponentProduct.vue";

const app = createApp({});
app.component("upload-file-component", UploadFileComponent);
app.component("upload-file-component-category", UploadFileComponentCategory);
app.component(
    "characteristic-component-product",
    CharacteristicComponentProduct
);
app.mount("#app");
