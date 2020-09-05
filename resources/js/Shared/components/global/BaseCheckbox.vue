<template>
	<div class="flex items-start">
		<div class="flex items-center h-5">
			<input
				:id="id ? id : randomString"
				type="checkbox"
				:class="
                `form-checkbox h-4 w-4 text-${color}-600 focus:border-${color}-300 focus:shadow-outline-${color} transition duration-150 ease-in-out`
            "
				@input="updateValue"
			/>
		</div>
		<div class="ml-3 text-sm leading-5">
			<label :for="id ? id : randomString" class="font-medium block text-gray-900">
				<slot name="label"></slot>
			</label>
			<p class="text-gray-500">
				<slot name="description"></slot>
			</p>
		</div>
	</div>
</template>

<script>
export default {
	props: {
		id: {
			type: String,
			default: null,
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
					"white",
				].includes(value);
			},
			default: "purple",
		},
	},
	data() {
		return {
			randomString: Math.random().toString(36).slice(2),
		};
	},
	methods: {
		updateValue(e) {
			this.$emit("input", e.target.checked);
		},
	},
};
</script>

<style></style>
