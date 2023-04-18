<template>
    <div>
        <div class="btn btn-primary" @click="addFields">Добавить поля</div>
    </div>

    <div class="row border mb-3" v-for="(field, index) in fields" :key="index">
        <div class="col">
            <div class="font-weight-bold">№{{ index }}</div>
            <div class="form-group">
                <label :for="'characteristics_ru_name_' + index"
                    >Название (ru):</label
                >
                <input
                    :id="'characteristics_ru_name_' + index"
                    v-model="field.characteristics_ru_name"
                    type="text"
                    class="form-control form-control-border"
                    name="characteristics_ru[]"
                    placeholder="Названия"
                />
            </div>
            <div class="form-group">
                <label :for="'characteristics_ru_value_' + index"
                    >Значения (ru):</label
                >
                <input
                    :id="'characteristics_ru_value_' + index"
                    v-model="field.characteristics_ru_value"
                    type="text"
                    class="form-control form-control-border"
                    name="characteristics_ru_value[]"
                    placeholder="Названия"
                />
            </div>
        </div>
        <div class="col">
            <div class="font-weight-bold">-</div>
            <div class="form-group">
                <label :for="'characteristics_uz_name_' + index"
                    >Название (uz):</label
                ><input
                    :id="'characteristics_uz_name_' + index"
                    v-model="field.characteristics_uz_name"
                    type="text"
                    class="form-control form-control-border"
                    name="characteristics_uz[]"
                    placeholder="Названия"
                />
            </div>
            <div class="form-group">
                <label :for="'characteristics_uz_value_' + index"
                    >Значения (uz):</label
                ><input
                    :id="'characteristics_uz_value_' + index"
                    v-model="field.characteristics_uz_value"
                    type="text"
                    class="form-control form-control-border"
                    name="characteristics_uz_value[]"
                    placeholder="Названия"
                />
            </div>
        </div>
        <div class="row">
            <div
                class="btn btn-danger"
                @click="removeField(index)"
                :data-index="index"
            >
                Удалить
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            fields: [],
        };
    },
    props: ["data"],
    mounted() {
        const keysRu = Object.keys(this.data.ru);
        const keysUz = Object.keys(this.data.uz);

        for (let i = 0; i < Math.max(keysRu.length, keysUz.length); i++) {
            const item = {};

            if (keysRu[i]) {
                item.characteristics_ru_name = keysRu[i];
                item.characteristics_ru_value = this.data.ru[keysRu[i]];
            }

            if (keysUz[i]) {
                item.characteristics_uz_name = keysUz[i];
                item.characteristics_uz_value = this.data.uz[keysUz[i]];
            }

            this.fields.push(item);
        }
    },
    methods: {
        addFields() {
            this.fields.push({
                characteristics_ru_name: "",
                characteristics_ru_value: "",
                characteristics_uz_name: "",
                characteristics_uz_value: "",
            });
        },
        removeField(index) {
            this.fields.splice(index, 1);
        },
    },
};
</script>
