<template>
    <div :id="id" class="input-group">
        <label :for="id" class="input-label">{{ label }}</label>
        <input
            :id="id"
            :type="type"
            :name="name"
            :value="value"
            class="input-control"
            :class="error"
            :placeholder="label"
        />
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "VInput",
    props: {
        id: {
            type: String,
            required: true,
        },
        label: {
            type: String,
            required: true,
        },
        type: {
            type: String,
            required: true,
        },
        name: {
            type: String,
            required: true,
        },
        value: {
            type: String,
            required: true,
        },
        error: {
            type: String,
            required: false,
        },
    },
};
</script>
