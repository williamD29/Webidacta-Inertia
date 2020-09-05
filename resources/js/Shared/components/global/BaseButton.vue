<template>
    <button
        v-if="styleType === 'primary'"
        :class="[
            size === 'custom' ? null : null,
            size === 'xs' ? 'px-2.5 py-1.5 rounded text-xs leading-4' : null,
            size === 'sm' ? 'px-3 py-2 rounded-md text-sm leading-4' : null,
            size === 'md' ? 'px-4 py-2 rounded-md text-sm leading-5' : null,
            size === 'lg' ? 'px-4 py-2 rounded-md text-base leading-6' : null,
            size === 'xl' ? 'px-6 py-3 rounded-md text-base leading-6' : null,
            `text-white bg-${color}-600 hover:bg-${color}-500 active:bg-${color}-700 focus:border-${color}-700 focus:shadow-outline-${color}`,
            classNames
        ]"
        class="inline-flex items-center justify-center border border-transparent font-medium text-white focus:outline-none transition ease-in-out duration-300"
        @click="$emit('base-button-clicked', $event)"
    >
        <slot></slot>
    </button>
    <button
        v-else-if="styleType === 'secondary'"
        :class="[
            size === 'custom' ? null : null,
            size === 'xs' ? 'px-2.5 py-1.5 rounded text-xs leading-4' : null,
            size === 'sm' ? 'px-3 py-2 rounded-md text-sm leading-4' : null,
            size === 'md' ? 'px-4 py-2 rounded-md text-sm leading-5' : null,
            size === 'lg' ? 'px-4 py-2 rounded-md text-base leading-6' : null,
            size === 'xl' ? 'px-6 py-3 rounded-md text-base leading-6' : null,
            `text-${color}-700 bg-${color}-100 hover:bg-${color}-50 focus:border-${color}-300 focus:shadow-outline-${color} active:bg-${color}-200`,
            classNames
        ]"
        class="inline-flex items-center justify-center border border-transparent font-medium focus:outline-none transition ease-in-out duration-300"
        @click="$emit('base-button-clicked', $event)"
    >
        <slot></slot>
    </button>
    <button
        v-else-if="styleType === 'tertiary'"
        :class="[
            size === 'custom' ? null : null,
            size === 'xs' ? 'px-2.5 py-1.5 rounded text-xs leading-4' : null,
            size === 'sm' ? 'px-3 py-2 rounded-md text-sm leading-4' : null,
            size === 'md' ? 'px-4 py-2 rounded-md text-sm leading-5' : null,
            size === 'lg' ? 'px-4 py-2 rounded-md text-base leading-6' : null,
            size === 'xl' ? 'px-6 py-3 rounded-md text-base leading-6' : null,
            `focus:border-${color}-300 focus:shadow-outline-${color}`,
            classNames
        ]"
        class="inline-flex items-center justify-center border border-gray-300 font-medium bg-white focus:outline-none active:bg-gray-50 transition ease-in-out duration-300"
        @click="$emit('base-button-clicked', $event)"
    >
        <slot></slot>
    </button>
    <button
        v-else-if="styleType === 'transparent'"
        :class="[
            size === 'custom' ? null : null,
            size === 'xs' ? 'px-2.5 py-1.5 rounded text-xs leading-4' : null,
            size === 'sm' ? 'px-3 py-2 rounded-md text-sm leading-4' : null,
            size === 'md' ? 'px-4 py-2 rounded-md text-sm leading-5' : null,
            size === 'lg' ? 'px-4 py-2 rounded-md text-base leading-6' : null,
            size === 'xl' ? 'px-6 py-3 rounded-md text-base leading-6' : null,
            `focus:border-${color}-300`,
            classNames
        ]"
        class="font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 focus:outline-none focus:bg-gray-200 active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150"
        @click="$emit('base-button-clicked', $event)"
    >
        <slot></slot>
    </button>
    <button
        v-else-if="styleType === 'link'"
        :class="[
            size === 'custom' ? null : null,
            size === 'xs' ? 'text-xs leading-4' : null,
            size === 'sm' ? 'text-sm leading-4' : null,
            size === 'md' ? 'text-sm leading-5' : null,
            size === 'lg' ? 'text-base leading-6' : null,
            size === 'xl' ? 'text-base leading-6' : null,
            `text-${color}-600 hover:text-${color}-700 focus:text-${color}-700 active:text-${color}-700 focus:outline-none`,
            classNames
        ]"
        class="font-normal hover:underline transition ease-in-out duration-150"
        @click="$emit('base-button-clicked', $event)"
    >
        <slot></slot>
    </button>
    <button
        v-else
        :class="[
            size === 'custom' ? null : null,
            size === 'xs' ? 'text-xs leading-4' : null,
            size === 'sm' ? 'text-sm leading-4' : null,
            size === 'md' ? 'text-sm leading-5' : null,
            size === 'lg' ? 'text-base leading-6' : null,
            size === 'xl' ? 'text-base leading-6' : null,
            classNames
        ]"
        @click="$emit('base-button-clicked', $event)"
    >
        <slot></slot>
    </button>
</template>

<script>
export default {
    props: {
        styleType: {
            validator(value) {
                return [
                    "primary",
                    "secondary",
                    "tertiary",
                    "transparent",
                    "link",
                    "custom"
                ].includes(value);
            },
            default: "primary"
        },
        size: {
            validator(value) {
                return ["custom", "xs", "sm", "md", "lg", "xl"].includes(value);
            },
            default: "md"
        },
        classNames: {
            type: String,
            default: null
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
                    "purple"
                ].includes(value);
            },
            default: "purple"
        }
    }
};
</script>

<style></style>
