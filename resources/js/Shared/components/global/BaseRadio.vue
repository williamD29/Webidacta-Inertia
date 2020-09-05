<template>
	<div class="flex items-center">
		<input
			:id="id ? id : randomString"
			:name="name"
			type="radio"
			:class="`form-radio h-4 w-4 text-${color}-600 focus:shadow-outline-${color} transition duration-150 ease-in-out`"
			@input="updateValue"
		/>
		<label :for="id ? id : randomString" class="ml-3">
			<span class="block text-sm leading-5 font-medium text-gray-700">
				<slot></slot>
			</span>
		</label>
	</div>
</template>

<script>
export default {
	props: {
		id: {
			type: String,
			default: null,
		},
		name: {
			type: String,
			required: true,
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
			console.log(e.target);
			this.$emit("input", e.target.checked);
		},
	},
};
</script>

<style>
</style>