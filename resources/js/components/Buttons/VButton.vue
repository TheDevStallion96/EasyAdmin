<template>
    <div class="block mt-3">
        <button :id="id" :type="type" :class="'button button-' + variant">
            <slot></slot>
        </button>
    </div>
</template>

<script>
export default {
    name: "VButton",
    props: {
        id: {
            type: String,
            required: true,
        },
        type: {
            type: String,
            required: true,
        },
        variant: {
            type: String,
            required: true,
        },
    },
};
</script>
