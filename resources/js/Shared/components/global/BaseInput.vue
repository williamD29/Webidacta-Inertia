<template>
    <div>
        <label
            v-if="label"
            :for="id ? id : randomString"
            :class="[hiddenLabel ? 'sr-only' : 'mb-1']"
            class="block text-sm font-medium leading-5 text-gray-700"
            >{{ label }}</label
        >
        <div class="relative rounded-md shadow-sm">
            <div
                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
            >
                <slot name="icon-left"></slot>
            </div>
            <input
                :id="id ? id : randomString"
                v-bind="$attrs"
                class="form-input block w-full"
                :placeholder="placeholder"
                :value="value"
                :class="[
                    size === 'custom' ? null : null,
                    size === 'xs'
                        ? 'px-2 py-1.5 rounded text-xs leading-4'
                        : null,
                    size === 'sm'
                        ? 'px-2 py-2 rounded-md text-sm leading-4'
                        : null,
                    size === 'md'
                        ? 'px-3 py-2 rounded-md text-sm leading-5'
                        : null,
                    size === 'lg'
                        ? 'py-2 px-3 rounded-md text-base leading-6'
                        : null,
                    size === 'xl'
                        ? 'py-3 px-4 rounded-md text-base leading-6'
                        : null,
                    !!this.$slots['icon-left'] ? 'pl-10' : null,
                    !!this.$slots['icon-right'] ? 'pr-10' : null,
                    replaceableStyle
                        ? replaceableStyle
                        : `focus:border-${color}-300 focus:shadow-outline-${color}`,
                    classNames
                ]"
                @input="updateValue"
            />
            <div
                class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"
            >
                <slot name="icon-right"></slot>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    inheritAttrs: false,
    props: {
        label: {
            type: String,
            default: null
        },
        hiddenLabel: {
            type: Boolean,
            default: false
        },
        id: {
            type: String,
            default: null
        },
        size: {
            validator(value) {
                return ["custom", "xs", "sm", "md", "lg", "xl"].includes(value);
            },
            default: "md"
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
        },
        placeholder: {
            type: String,
            default: null
        },
        value: {
            type: String,
            default: null
        },
        classNames: {
            type: String,
            default: null
        },
        replaceableStyle: {
            type: String,
            default: null
        }
    },
    data() {
        return {
            randomString: Math.random()
                .toString(36)
                .slice(2)
        };
    },
    methods: {
        updateValue(e) {
            this.$emit("input", e.target.value);
        }
    }
};
</script>

<style></style>
