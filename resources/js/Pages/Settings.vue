<template>
	<div class="pt-2 pb-6 md:py-6">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
			<h1 class="text-2xl font-semibold text-gray-900">Paramètres</h1>
		</div>
		<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
			<div class="py-8">
				<Account />
				<div class="block">
					<div class="py-5">
						<div class="border-t border-gray-200"></div>
					</div>
				</div>
				<Notifications />
			</div>
		</div>
	</div>
</template>

<script>
import Layout from "@/Shared/layouts/Default.vue";
import Account from "@/Shared/components/settings/Account.vue";
import Notifications from "@/Shared/components/settings/Notifications.vue";

export default {
	layout: Layout,
	components: {
		Account,
		Notifications,
	},
};
</script>

<style></style>