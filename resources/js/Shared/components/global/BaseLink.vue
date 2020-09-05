<template>
    <inertia-link
        v-if="type === 'inertia-link'"
        :href="url"
        :class="[
            replaceableStyle
                ? replaceableStyle
                : `font-medium text-${color}-600 hover:text-${color}-500 focus:outline-none focus:underline transition ease-in-out duration-150`
        ]"
    >
        <slot></slot>
    </inertia-link>
    <a
        v-else
        :href="url"
        :class="[
            replaceableStyle
                ? replaceableStyle
                : `font-medium text-${color}-600 hover:text-${color}-500 focus:outline-none focus:underline transition ease-in-out duration-150`
        ]"
    >
        <slot></slot>
    </a>
</template>

<script>
export default {
    props: {
        type: {
            validator(value) {
                return ["inertia-link", "default-link"].includes(value);
            },
            default: "inertia-link"
        },
        url: {
            type: String,
            required: true
        },
        color: {
            validator(value) {
                return [
                    "gray",
                    "cool-gray",
                    "pink",
                    "red",
                    "orange",
                    "yellow",
                    "green",
                    "teal",
                    "blue",
                    "indigo",
                    "purple",
                    "black",
                    "white"
                ].includes(value);
            },
            default: "purple"
        },
        replaceableStyle: {
            type: String,
            default: null
        }
    }
};
</script>

<style></style>
