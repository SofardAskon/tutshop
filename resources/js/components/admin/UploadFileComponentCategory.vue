<template>
    <div class="container 12312312">
        <div class="row" v-if="fileProgress > 0">
            <div class="col-sm-12 text-center mb-4">
                <div class="progress" style="height: 40px">
                    <div
                        class="progress-bar"
                        role="progressbar"
                        :style="{ width: fileProgress + '%' }"
                    >
                        {{ fileCurrent }}%
                    </div>
                </div>
            </div>
        </div>
        <div
            class="row"
            v-for="(download, index) in downloads"
            :key="download.id"
        >
            <input type="hidden" name="downloads[]" v-model="download.id" />
            <div class="col-sm-6">
                <div class="form-group">
                    <select download.title>
                        <option>На главной</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <template v-if="download.is_new">
                        <div class="custom-file">
                            <input
                                type="file"
                                class="custom-file-input form-control"
                                id="customFile"
                                @change="fileInputChange(download)"
                            />
                            <label class="custom-file-label" for="customFile"
                                >Выберите файл</label
                            >
                        </div>
                        <div class="input-group-prepend">
                            <button
                                type="button"
                                class="btn btn-outline-secondary"
                                @click="uploadFile(download)"
                            >
                                Загузить
                            </button>
                        </div>
                    </template>
                    <div class="input-group-prepend" @click="deleteFile(index)">
                        <button type="button" class="btn btn-outline-danger">
                            Удалить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <button type="button" class="btn btn-primary" @click="addFile">
                    Добавить изображения
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            downloads: [],
            fileProgress: 0,
            fileCurrent: "",
        };
    },
    props: ["files"],
    mounted() {
        this.downloads = this.files;
        console.log("component mounted");
    },
    methods: {
        addFile() {
            console.log(1);
            this.downloads.push({ id: 0, title: "", file: [], is_new: true });
        },
        deleteFile(index) {
            if (this.downloads[index].is_new) {
                this.downloads.splice(index, 1);
                return;
            }
            axios
                .delete("/admin/download/" + this.downloads[index].id)
                .then((response) => {
                    if (response.data.result) {
                        this.downloads.splice(index, 1);
                    }
                });
        },
        fileInputChange(download) {
            download.file = event.target.files[0];
        },
        async uploadFile(download) {
            if (!download.hasOwnProperty("is_new")) {
                return;
            }

            let form = new FormData();
            form.append("file", download.file);
            form.append("title", download.title);

            await axios
                .post("/admin/download", form, {
                    onUploadProgress: (itemUpload) => {
                        this.fileProgress = Math.round(
                            (itemUpload.loaded / itemUpload.title) * 100
                        );
                        this.fileCurrent =
                            download.file.name + " " + this.fileProgress;
                    },
                })
                .then((response) => {
                    download.id = response.data;
                    download.is_new = false;
                })
                .catch((error) => {
                    console.log(error);
                });

            this.fileProgress = 0;
            this.fileCurrent = "";
        },
    },
};
</script>
